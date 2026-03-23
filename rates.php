<?php
session_start();

if (empty($_SESSION['admin_logged_in'])) {
    header('Location: login.php');
    exit;
}

require_once __DIR__ . '/assets/includes/db_connect.php';

$success = '';
$error = '';
$selectedCategory = '';
$editableRates = [];

$importSummary = [
    'inserted' => 0,
    'skipped' => 0,
    'errors' => []
];

function clean($value) {
    return trim((string)$value);
}

function normalizeDate($date) {
    $date = trim((string)$date);
    if ($date === '') {
        return false;
    }

    $formats = ['Y-m-d', 'd/m/Y', 'm/d/Y', 'd-m-Y', 'm-d-Y'];

    foreach ($formats as $format) {
        $dt = DateTime::createFromFormat($format, $date);
        if ($dt && $dt->format($format) === $date) {
            return $dt->format('Y-m-d');
        }
    }

    return false;
}

function removeBom($text) {
    return preg_replace('/^\xEF\xBB\xBF/', '', $text);
}

function detectDelimiter($filePath) {
    $fp = fopen($filePath, 'r');
    if (!$fp) {
        return ',';
    }

    $line = fgets($fp);
    fclose($fp);

    $line = removeBom((string)$line);

    $commaCount = substr_count($line, ',');
    $semicolonCount = substr_count($line, ';');

    return ($semicolonCount > $commaCount) ? ';' : ',';
}

/* ------------------------------
   1) TRUNCATE TABLE ACTION
------------------------------ */
if (isset($_POST['truncate_table'])) {
    try {
        $pdo->exec("TRUNCATE TABLE car_rental");
        $success = "All car_rental records have been cleared successfully.";
    } catch (Exception $e) {
        $error = "Failed to clear table: " . $e->getMessage();
    }
}

/* ------------------------------
   2) CSV UPLOAD ACTION
------------------------------ */
if (isset($_FILES['csv_file']) && !empty($_FILES['csv_file']['name'])) {
    $fileTmp = $_FILES['csv_file']['tmp_name'];
    $fileName = $_FILES['csv_file']['name'];
    $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    if ($fileExt !== 'csv') {
        $error = "Only CSV files are allowed.";
    } elseif (!is_uploaded_file($fileTmp)) {
        $error = "Invalid file upload.";
    } else {
        $delimiter = detectDelimiter($fileTmp);

        if (($handle = fopen($fileTmp, 'r')) !== false) {
            try {
                $header = fgetcsv($handle, 0, $delimiter);

                if ($header === false) {
                    throw new Exception("CSV file is empty.");
                }

                $header = array_map(function ($h) {
                    return strtolower(trim(removeBom($h)));
                }, $header);

                $expectedHeaders = [
                    'id',
                    'car_code',
                    'car_model',
                    'car_category',
                    'duration',
                    'rate',
                    'start_date',
                    'end_date'
                ];

                if ($header !== $expectedHeaders) {
                    throw new Exception(
                        "Invalid CSV header. Expected: " . implode(',', $expectedHeaders)
                    );
                }

                $pdo->beginTransaction();

                $insertStmt = $pdo->prepare("
                    INSERT INTO car_rental (
                        id,
                        car_code,
                        car_model,
                        car_category,
                        duration,
                        rate,
                        start_date,
                        end_date
                    ) VALUES (
                        :id,
                        :car_code,
                        :car_model,
                        :car_category,
                        :duration,
                        :rate,
                        :start_date,
                        :end_date
                    )
                ");

                $rowNumber = 1;

                while (($row = fgetcsv($handle, 0, $delimiter)) !== false) {
                    $rowNumber++;

                    if (count(array_filter($row, fn($v) => trim((string)$v) !== '')) === 0) {
                        continue;
                    }

                    if (count($row) < 8) {
                        $importSummary['skipped']++;
                        $importSummary['errors'][] = "Row {$rowNumber} skipped: not enough columns.";
                        continue;
                    }

                    $id = clean($row[0]);
                    $car_code = clean($row[1]);
                    $car_model = clean($row[2]);
                    $car_category = clean($row[3]);
                    $durationRaw = clean($row[4]);
                    $rateRaw = clean($row[5]);
                    $start_date = normalizeDate($row[6]);
                    $end_date = normalizeDate($row[7]);

                    $duration = is_numeric($durationRaw) ? (int)$durationRaw : 0;
                    $rate = is_numeric($rateRaw) ? (float)$rateRaw : -1;

                    if (!is_numeric($id) || (int)$id <= 0) {
                        $importSummary['skipped']++;
                        $importSummary['errors'][] = "Row {$rowNumber} skipped: invalid id.";
                        continue;
                    }

                    if ($car_code === '' || $car_model === '' || $car_category === '') {
                        $importSummary['skipped']++;
                        $importSummary['errors'][] = "Row {$rowNumber} skipped: missing required text fields.";
                        continue;
                    }

                    if ($duration <= 0) {
                        $importSummary['skipped']++;
                        $importSummary['errors'][] = "Row {$rowNumber} skipped: duration must be greater than 0.";
                        continue;
                    }

                    if ($rate < 0) {
                        $importSummary['skipped']++;
                        $importSummary['errors'][] = "Row {$rowNumber} skipped: invalid rate.";
                        continue;
                    }

                    if ($start_date === false || $end_date === false) {
                        $importSummary['skipped']++;
                        $importSummary['errors'][] = "Row {$rowNumber} skipped: invalid date format.";
                        continue;
                    }

                    $insertStmt->execute([
                        ':id' => (int)$id,
                        ':car_code' => $car_code,
                        ':car_model' => $car_model,
                        ':car_category' => $car_category,
                        ':duration' => $duration,
                        ':rate' => $rate,
                        ':start_date' => $start_date,
                        ':end_date' => $end_date
                    ]);

                    $importSummary['inserted']++;
                }

                fclose($handle);
                $pdo->commit();

                $success = "CSV imported successfully. Inserted: {$importSummary['inserted']}, Skipped: {$importSummary['skipped']}";
            } catch (Exception $e) {
                if ($pdo->inTransaction()) {
                    $pdo->rollBack();
                }
                $error = "Import failed: " . $e->getMessage();
            }
        } else {
            $error = "Unable to open uploaded CSV file.";
        }
    }
}

/* ------------------------------
   3) UPDATE RATES ACTION
------------------------------ */
if (isset($_POST['update_rates']) && isset($_POST['rows']) && is_array($_POST['rows'])) {
    try {
        $pdo->beginTransaction();

        $updateStmt = $pdo->prepare("
            UPDATE car_rental
            SET car_model = :car_model,
                duration = :duration,
                rate = :rate
            WHERE id = :id
        ");

        $updatedCount = 0;

        foreach ($_POST['rows'] as $rowId => $rowData) {
            $id = (int)$rowId;
            $car_model = clean($rowData['car_model'] ?? '');
            $duration = isset($rowData['duration']) && is_numeric($rowData['duration']) ? (int)$rowData['duration'] : 0;
            $rate = isset($rowData['rate']) && is_numeric($rowData['rate']) ? (float)$rowData['rate'] : -1;

            if ($id <= 0) {
                continue;
            }

            if ($car_model === '') {
                throw new Exception("Car model cannot be empty for row ID {$id}.");
            }

            if ($duration <= 0) {
                throw new Exception("Duration must be greater than 0 for row ID {$id}.");
            }

            if ($rate < 0) {
                throw new Exception("Rate must be 0 or greater for row ID {$id}.");
            }

            $updateStmt->execute([
                ':id' => $id,
                ':car_model' => $car_model,
                ':duration' => $duration,
                ':rate' => $rate
            ]);

            $updatedCount++;
        }

        $pdo->commit();
        $success = "{$updatedCount} rate record(s) updated successfully.";

        if (!empty($_POST['filter_category'])) {
            $selectedCategory = clean($_POST['filter_category']);
        }
    } catch (Exception $e) {
        if ($pdo->inTransaction()) {
            $pdo->rollBack();
        }
        $error = "Update failed: " . $e->getMessage();

        if (!empty($_POST['filter_category'])) {
            $selectedCategory = clean($_POST['filter_category']);
        }
    }
}

/* ------------------------------
   4) LOAD CATEGORY OPTIONS
------------------------------ */
$categoryStmt = $pdo->query("SELECT DISTINCT car_category FROM car_rental WHERE car_category <> '' ORDER BY car_category ASC");
$categories = $categoryStmt->fetchAll(PDO::FETCH_COLUMN);

/* ------------------------------
   5) FILTER RATES BY CATEGORY
------------------------------ */
if (isset($_POST['filter_rates']) || isset($_POST['update_rates'])) {
    $selectedCategory = clean($_POST['filter_category'] ?? '');

    if ($selectedCategory !== '') {
        $filterStmt = $pdo->prepare("
            SELECT id, car_code, car_model, car_category, duration, rate, start_date, end_date
            FROM car_rental
            WHERE car_category = :car_category
            ORDER BY car_model ASC, duration ASC, id ASC
        ");
        $filterStmt->execute([':car_category' => $selectedCategory]);
        $editableRates = $filterStmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

/* ------------------------------
   SHOW LAST 10 RECORDS
------------------------------ */
$stmt = $pdo->query("SELECT * FROM car_rental ORDER BY id DESC LIMIT 10");
$rates = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Rates Import | SR Rent A Car</title>
<link rel="icon" type="image/png" href="assets/images/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
* {
    box-sizing: border-box;
}

body {
    margin: 0;
    background: #f4f7fb;
    font-family: Cambria, serif;
    color: #1f2937;
    font-size:12px;
}

.main-content {
    margin-left: 240px;
    padding: 30px;
}

.card {
    background: #fff;
    padding: 22px;
    border-radius: 16px;
    margin-bottom: 24px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.06);
}

.page-title {
    margin: 0 0 8px;
    font-size: 28px;
    color: #031c45;
}

.small-text {
    font-size: 14px;
    color: #6b7280;
    margin-bottom: 15px;
}

.alert {
    padding: 14px 16px;
    border-radius: 10px;
    margin-bottom: 18px;
    font-size: 14px;
}

.alert-success {
    background: #e8f8ee;
    color: #166534;
    border: 1px solid #bbf7d0;
}

.alert-error {
    background: #fef2f2;
    color: #991b1b;
    border: 1px solid #fecaca;
}

input[type="file"],
input[type="text"],
input[type="number"],
select {
    width: 100%;
    padding: 12px;
    border: 1px solid #d1d5db;
    border-radius: 10px;
    background: #fff;
}

button {
    background: #031c45;
    color: #fff;
    border: none;
    border-radius: 10px;
    padding: 12px 18px;
    cursor: pointer;
    font-weight: 600;
    transition: 0.2s ease;
}

button:hover {
    background: #052b69;
}

.btn-danger {
    background: #dc2626;
}

.btn-danger:hover {
    background: #b91c1c;
}

.btn-secondary {
    background: #475569;
}

.btn-secondary:hover {
    background: #334155;
}

.info-box {
    background: #f8fafc;
    border: 1px solid #e5e7eb;
    padding: 16px;
    border-radius: 12px;
    margin-bottom: 16px;
}

.code {
    background: #111827;
    color: #f9fafb;
    padding: 12px;
    border-radius: 10px;
    overflow-x: auto;
    font-family: monospace;
    font-size: 13px;
}

.table-wrapper {
    overflow-x: auto;
    border-radius: 12px;
}

.table {
    width: 100%;
    border-collapse: collapse;
}

.table th {
    background: #031c45;
    color: #fff;
    text-align: left;
    padding: 12px;
    font-size: 14px;
}

.table td {
    background: #fff;
    padding: 12px;
    border-bottom: 1px solid #eef2f7;
    font-size: 14px;
    vertical-align: middle;
}

.table tr:hover td {
    background: #f8fafc;
}

.error-list {
    margin-top: 12px;
    padding-left: 18px;
    color: #991b1b;
}

.action-row {
    display: flex;
    gap: 12px;
    flex-wrap: wrap;
    align-items: flex-start;
    margin-top: 18px;
}

.action-box {
    flex: 1;
    min-width: 280px;
    padding: 16px;
    border: 1px solid #e5e7eb;
    border-radius: 12px;
    background: #fafafa;
}

.action-box h3 {
    margin-top: 0;
    margin-bottom: 8px;
    color: #031c45;
    font-size: 18px;
}

.action-box p {
    margin-top: 0;
    margin-bottom: 12px;
    font-size: 13px;
    color: #6b7280;
}

.note {
    font-size: 13px;
    color: #92400e;
    background: #fff7ed;
    border: 1px solid #fed7aa;
    padding: 12px;
    border-radius: 10px;
    margin-top: 12px;
}

.inline-form-row {
    display: flex;
    gap: 12px;
    flex-wrap: wrap;
    align-items: end;
    margin-top: 12px;
}

.inline-form-row .field {
    flex: 1;
    min-width: 240px;
}

.table input[type="text"],
.table input[type="number"] {
    margin-bottom: 0;
    min-width: 120px;
}

.actions-top {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
    margin-bottom: 14px;
}

@media (max-width: 900px) {
    .main-content {
        margin-left: 0;
        padding: 20px;
    }
}
</style>
</head>
<body>

<?php include 'assets/includes/sidebar.php'; ?>

<div class="main-content">
    <div class="card">
        <h1 class="page-title">Rates Import</h1>
        <div class="small-text">Manage vehicle rates with separate actions: clear records, upload CSV, or edit existing rates by category.</div>

        <?php if ($success): ?>
            <div class="alert alert-success"><?php echo htmlspecialchars($success); ?></div>
        <?php endif; ?>

        <?php if ($error): ?>
            <div class="alert alert-error"><?php echo htmlspecialchars($error); ?></div>
        <?php endif; ?>

        <div class="info-box">
            <strong>Required CSV columns:</strong>
            <div class="code">id,car_code,car_model,car_category,duration,rate,start_date,end_date</div>
            <div class="small-text" style="margin-top:10px;">
                Accepted date format: <strong>YYYY-MM-DD</strong>
            </div>
        </div>

        <div class="action-row">
            <div class="action-box">
                <h3>Step 1: Clear Existing Rates</h3>
                <p>Use this only when you want to remove all current records from the car rental table.</p>

                <form method="POST" onsubmit="return confirm('Are you sure you want to delete ALL car_rental records? This cannot be undone.');">
                    <input type="hidden" name="truncate_table" value="1">
                    <button type="submit" class="btn-danger">Clear All Rates</button>
                </form>

                <div class="note">
                    This will permanently delete all rows from the <strong>car rental</strong> table.
                </div>
            </div>

            <div class="action-box">
                <h3>Step 2: Upload New CSV</h3>
                <p>After clearing the table, upload your latest CSV file here.</p>

                <form method="POST" enctype="multipart/form-data">
                    <input type="file" name="csv_file" accept=".csv" required>
                    <button type="submit">Upload and Import CSV</button>
                </form>
            </div>
        </div>

        <?php if (!empty($importSummary['errors'])): ?>
            <div class="info-box" style="margin-top:18px;">
                <strong>Import Notes</strong>
                <ul class="error-list">
                    <?php foreach ($importSummary['errors'] as $msg): ?>
                        <li><?php echo htmlspecialchars($msg); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
    </div>

    <div class="card">
        <h2 style="margin-top:0; color:#031c45;">Edit Rates by Car Category</h2>
        <div class="small-text">Choose a car category, load matching rows, then edit car model, duration, and rate directly.</div>

        <form method="POST">
            <div class="inline-form-row">
                <div class="field">
                    <label for="filter_category"><strong>Car Category</strong></label>
                    <select name="filter_category" id="filter_category" required>
                        <option value="">-- Select Category --</option>
                        <?php foreach ($categories as $category): ?>
                            <option value="<?php echo htmlspecialchars($category); ?>" <?php echo ($selectedCategory === $category) ? 'selected' : ''; ?>>
                                <?php echo htmlspecialchars($category); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div>
                    <button type="submit" name="filter_rates" value="1">Load Rates</button>
                </div>
            </div>
        </form>

        <?php if ($selectedCategory !== ''): ?>
            <div class="info-box" style="margin-top: 16px;">
                <strong>Selected Category:</strong> <?php echo htmlspecialchars($selectedCategory); ?>
            </div>
        <?php endif; ?>

        <?php if (!empty($editableRates)): ?>
            <form method="POST" onsubmit="return confirm('Save changes to these rates?');">
                <input type="hidden" name="update_rates" value="1">
                <input type="hidden" name="filter_category" value="<?php echo htmlspecialchars($selectedCategory); ?>">

                <div class="actions-top">
                    <button type="submit">Save Changes</button>
                </div>

                <div class="table-wrapper">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Car Code</th>
                                <th>Car Category</th>
                                <th>Car Model</th>
                                <th>Duration</th>
                                <th>Rate</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($editableRates as $row): ?>
                                <tr>
                                    <td><?php echo (int)$row['id']; ?></td>
                                    <td><?php echo htmlspecialchars($row['car_code']); ?></td>
                                    <td><?php echo htmlspecialchars($row['car_category']); ?></td>
                                    <td>
                                        <input
                                            type="text"
                                            name="rows[<?php echo (int)$row['id']; ?>][car_model]"
                                            value="<?php echo htmlspecialchars($row['car_model']); ?>"
                                            required
                                        >
                                    </td>                                    
                                    <td>
                                        <input type="number" name="rows[<?php echo (int)$row['id']; ?>][duration]" value="<?php echo (int)$row['duration']; ?>" min="1" required>
                                    </td>
                                    <td>
                                        <input type="number" name="rows[<?php echo (int)$row['id']; ?>][rate]" value="<?php echo htmlspecialchars($row['rate']); ?>" min="0" step="0.01" required>
                                    </td>
                                    <td><?php echo htmlspecialchars($row['start_date']); ?></td>
                                    <td><?php echo htmlspecialchars($row['end_date']); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

                <div class="actions-top" style="margin-top:14px;">
                    <button type="submit">Save Changes</button>
                </div>
            </form>
        <?php elseif ($selectedCategory !== ''): ?>
            <div class="info-box" style="margin-top:16px;">
                No records found for this category.
            </div>
        <?php endif; ?>
    </div>

    <!-- <div class="card">
        <h2 style="margin-top:0; color:#031c45;">Latest Imported Rates (Last 10 records)</h2>
        <div class="table-wrapper">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Car Code</th>
                        <th>Model</th>
                        <th>Category</th>
                        <th>Duration</th>
                        <th>Rate</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($rates)): ?>
                        <?php foreach ($rates as $rate): ?>
                            <tr>
                                <td><?php echo (int)$rate['id']; ?></td>
                                <td><?php echo htmlspecialchars($rate['car_code']); ?></td>
                                <td><?php echo htmlspecialchars($rate['car_model']); ?></td>
                                <td><?php echo htmlspecialchars($rate['car_category']); ?></td>
                                <td><?php echo htmlspecialchars($rate['duration']); ?></td>
                                <td><?php echo number_format((float)$rate['rate'], 2); ?></td>
                                <td><?php echo htmlspecialchars($rate['start_date']); ?></td>
                                <td><?php echo htmlspecialchars($rate['end_date']); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="8" style="text-align:center; color:#6b7280;">No rates found.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div> -->
</div>

</body>
</html>