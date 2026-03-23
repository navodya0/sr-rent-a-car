<?php
session_start();

if (empty($_SESSION['admin_logged_in'])) {
    header('Location: login.php');
    exit;
}

require_once __DIR__ . '/assets/includes/db_connect.php';

$editVehicle = null;
$success = '';
$error = '';

// Handle EDIT load
if (isset($_GET['edit'])) {
    $stmt = $pdo->prepare("SELECT * FROM vehicles WHERE id = ?");
    $stmt->execute([(int)$_GET['edit']]);
    $editVehicle = $stmt->fetch(PDO::FETCH_ASSOC);
}

// Handle SAVE (insert/update)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? null;

    $data = [
        'car_code' => trim($_POST['car_code'] ?? ''),
        'car_model' => trim($_POST['car_model'] ?? ''),
        'car_category' => trim($_POST['car_category'] ?? ''),
        'pax_count' => (int)($_POST['pax_count'] ?? 0),
        'luggage_count' => (int)($_POST['luggage_count'] ?? 0),
        'mileage' => trim($_POST['mileage'] ?? ''),
        'fuel_count' => trim($_POST['fuel_count'] ?? ''),
        'transmission_type' => trim($_POST['transmission_type'] ?? ''),
        'deposit_amount' => (float)($_POST['deposit_amount'] ?? 0),
        'is_active' => isset($_POST['is_active']) ? 1 : 0
    ];

    if ($data['car_code'] === '' || $data['car_model'] === '') {
        $error = "Car Code and Model are required.";
    } else {
        // Handle image upload
        if (!empty($_FILES['image']['name']) && !empty($_FILES['image']['tmp_name'])) {
            $uploadDir = __DIR__ . "/assets/images/fleet-vehicles/";
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }

            $imageName = time() . "_" . preg_replace('/[^A-Za-z0-9.\-_]/', '_', basename($_FILES['image']['name']));
            $relativePath = "assets/images/fleet-vehicles/" . $imageName;
            $targetPath = __DIR__ . "/" . $relativePath;

            if (move_uploaded_file($_FILES['image']['tmp_name'], $targetPath)) {
                $data['image'] = $relativePath;
            }
        }

        if ($id) {
            $sql = "UPDATE vehicles SET
                car_code=:car_code,
                car_model=:car_model,
                car_category=:car_category,
                pax_count=:pax_count,
                luggage_count=:luggage_count,
                mileage=:mileage,
                fuel_count=:fuel_count,
                transmission_type=:transmission_type,
                deposit_amount=:deposit_amount,
                is_active=:is_active,
                updated_at=NOW()";

            if (isset($data['image'])) {
                $sql .= ", image=:image";
            }

            $sql .= " WHERE id=:id";
            $data['id'] = $id;
        } else {
            if (!isset($data['image'])) {
                $data['image'] = '';
            }

            $sql = "INSERT INTO vehicles (
                car_code, car_model, car_category, image,
                pax_count, luggage_count, mileage, fuel_count,
                transmission_type, is_active, deposit_amount, created_at
            ) VALUES (
                :car_code, :car_model, :car_category, :image,
                :pax_count, :luggage_count, :mileage, :fuel_count,
                :transmission_type, :is_active, :deposit_amount, NOW()
            )";
        }

        $stmt = $pdo->prepare($sql);
        $stmt->execute($data);

        header("Location: vehicles.php?success=1");
        exit;
    }
}

// Success alert from redirect
if (isset($_GET['success'])) {
    $success = "Vehicle saved successfully.";
}

// Pagination
$limit = 5;
$page = isset($_GET['page']) && (int)$_GET['page'] > 0 ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $limit;

// Total vehicles
$totalVehicles = (int)$pdo->query("SELECT COUNT(*) FROM vehicles")->fetchColumn();
$totalPages = (int)ceil($totalVehicles / $limit);

// Fetch paginated vehicles
$stmt = $pdo->prepare("SELECT * FROM vehicles ORDER BY id DESC LIMIT :limit OFFSET :offset");
$stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();
$vehicles = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Vehicles | SR Rent A Car</title>
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

.page-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 15px;
    flex-wrap: wrap;
    margin-bottom: 20px;
}

.page-title {
    margin: 0;
    font-size: 28px;
    color: #031c45;
}

.card {
    background: #fff;
    padding: 22px;
    border-radius: 16px;
    margin-bottom: 24px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.06);
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

.form-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 16px;
    margin-top: 18px;
}

.form-group {
    display: flex;
    flex-direction: column;
}

.form-group.full {
    grid-column: 1 / -1;
}

label {
    margin-bottom: 7px;
    font-weight: 600;
    font-size: 14px;
    color: #374151;
}

input, select {
    width: 100%;
    padding: 11px 12px;
    border: 1px solid #d1d5db;
    border-radius: 10px;
    outline: none;
    font-size: 14px;
    transition: 0.2s;
    background: #fff;
}

input:focus, select:focus {
    border-color: #031c45;
    box-shadow: 0 0 0 3px rgba(3, 28, 69, 0.08);
}

.form-actions {
    display: flex;
    gap: 12px;
    flex-wrap: wrap;
    margin-top: 18px;
}

.btn {
    border: none;
    border-radius: 10px;
    padding: 11px 18px;
    cursor: pointer;
    font-weight: 600;
    text-decoration: none;
    display: inline-block;
    transition: 0.2s ease;
}

.btn-primary {
    background: #031c45;
    color: #fff;
}

.btn-primary:hover {
    background: #052b69;
}

.btn-secondary {
    background: #e5e7eb;
    color: #111827;
}

.btn-secondary:hover {
    background: #d1d5db;
}

.top-tools {
    display: flex;
    justify-content: space-between;
    gap: 12px;
    flex-wrap: wrap;
    margin-bottom: 16px;
}

.search-box {
    max-width: 320px;
    width: 100%;
}

.table-wrapper {
    overflow-x: auto;
    border-radius: 12px;
}

.table {
    width: 100%;
    border-collapse: collapse;
    overflow: hidden;
}

.table th {
    background: #031c45;
    color: white;
    text-align: left;
    padding: 14px 12px;
    font-size: 14px;
}

.table td {
    background: #fff;
    padding: 14px 12px;
    border-bottom: 1px solid #eef2f7;
    vertical-align: middle;
}

.table tr:hover td {
    background: #f8fafc;
}

.vehicle-img {
    width: 70px;
    height: 50px;
    object-fit: cover;
    border-radius: 10px;
    border: 1px solid #e5e7eb;
}

.preview-box {
    margin-top: 8px;
}

.preview-box img {
    width: 140px;
    height: 95px;
    object-fit: cover;
    border-radius: 12px;
    border: 1px solid #d1d5db;
    display: none;
}

.badge {
    display: inline-block;
    padding: 6px 12px;
    font-size: 12px;
    border-radius: 999px;
    font-weight: 700;
}

.badge-active {
    background: #dcfce7;
    color: #166534;
}

.badge-inactive {
    background: #fee2e2;
    color: #991b1b;
}

.pagination {
    display: flex;
    gap: 8px;
    flex-wrap: wrap;
    justify-content: center;
    margin-top: 20px;
}

.pagination a,
.pagination span {
    padding: 10px 14px;
    border-radius: 10px;
    text-decoration: none;
    border: 1px solid #d1d5db;
    color: #111827;
    background: #fff;
    font-size: 14px;
}

.pagination a:hover {
    background: #f3f4f6;
}

.pagination .active {
    background: #031c45;
    color: white;
    border-color: #031c45;
}

.section-title {
    margin: 0 0 10px;
    color: #031c45;
    font-size: 22px;
}

.small-text {
    font-size: 13px;
    color: #6b7280;
    margin-top: -2px;
}

.toggle-row {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-top: 6px;
}

.toggle-row input[type="checkbox"] {
    width: auto;
    transform: scale(1.15);
}

.empty-row {
    text-align: center;
    color: #6b7280;
    padding: 25px !important;
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

    <div class="page-header">
        <div>
            <h1 class="page-title">Vehicle Management</h1>
            <div class="small-text">Add, edit, search, and manage your fleet vehicles easily.</div>
        </div>
    </div>

    <?php if ($success): ?>
        <div class="alert alert-success"><?php echo htmlspecialchars($success); ?></div>
    <?php endif; ?>

    <?php if ($error): ?>
        <div class="alert alert-error"><?php echo htmlspecialchars($error); ?></div>
    <?php endif; ?>

    <div class="card">
        <h2 class="section-title"><?php echo $editVehicle ? 'Edit Vehicle' : 'Add New Vehicle'; ?></h2>
        <div class="small-text">Fill in the vehicle details below.</div>

        <form method="POST" enctype="multipart/form-data" id="vehicleForm">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($editVehicle['id'] ?? ''); ?>">

            <div class="form-grid">
                <div class="form-group">
                    <label>Car Code</label>
                    <input name="car_code" placeholder="Enter car code" value="<?php echo htmlspecialchars($editVehicle['car_code'] ?? ''); ?>" required>
                </div>

                <div class="form-group">
                    <label>Model</label>
                    <input name="car_model" placeholder="Enter model" value="<?php echo htmlspecialchars($editVehicle['car_model'] ?? ''); ?>" required>
                </div>

                <div class="form-group">
                    <label>Category</label>
                    <input name="car_category" placeholder="SUV / Sedan / Van..." value="<?php echo htmlspecialchars($editVehicle['car_category'] ?? ''); ?>">
                </div>

                <div class="form-group">
                    <label>Passengers</label>
                    <input name="pax_count" type="number" min="0" placeholder="Passengers" value="<?php echo htmlspecialchars($editVehicle['pax_count'] ?? ''); ?>">
                </div>

                <div class="form-group">
                    <label>Luggage</label>
                    <input name="luggage_count" type="number" min="0" placeholder="Luggage count" value="<?php echo htmlspecialchars($editVehicle['luggage_count'] ?? ''); ?>">
                </div>

                <div class="form-group">
                    <label>Mileage</label>
                    <input name="mileage" placeholder="Mileage policy" value="<?php echo htmlspecialchars($editVehicle['mileage'] ?? ''); ?>">
                </div>

                <div class="form-group">
                    <label>Fuel Policy</label>
                    <input name="fuel_count" placeholder="Full to Full / Half..." value="<?php echo htmlspecialchars($editVehicle['fuel_count'] ?? ''); ?>">
                </div>

                <div class="form-group">
                    <label>Transmission</label>
                    <select name="transmission_type">
                        <option value="">Select transmission</option>
                        <option value="Automatic" <?php echo (($editVehicle['transmission_type'] ?? '') === 'Automatic') ? 'selected' : ''; ?>>Automatic</option>
                        <option value="Manual" <?php echo (($editVehicle['transmission_type'] ?? '') === 'Manual') ? 'selected' : ''; ?>>Manual</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Deposit Amount (€)</label>
                    <input name="deposit_amount" type="number" step="0.01" min="0" placeholder="Deposit amount" value="<?php echo htmlspecialchars($editVehicle['deposit_amount'] ?? ''); ?>">
                </div>

                <div class="form-group full">
                    <label>Vehicle Image</label>
                    <input type="file" name="image" id="imageInput" accept="image/*">
                    <div class="preview-box">
                        <img id="imagePreview" src="<?php echo !empty($editVehicle['image']) ? htmlspecialchars($editVehicle['image']) : ''; ?>" style="<?php echo !empty($editVehicle['image']) ? 'display:block;' : 'display:none;'; ?>">
                    </div>
                </div>

                <div class="form-group full">
                    <div class="toggle-row">
                        <input type="checkbox" name="is_active" id="is_active" <?php echo !empty($editVehicle['is_active']) ? 'checked' : ''; ?>>
                        <label for="is_active" style="margin:0;">Active Vehicle</label>
                    </div>
                </div>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Save Vehicle</button>
                <a href="vehicles.php" class="btn btn-secondary">Reset</a>
            </div>
        </form>
    </div>

    <div class="card">
        <h2 class="section-title">Vehicle List</h2>
        <div class="small-text">Search and manage all vehicles.</div>

        <div class="top-tools">
            <input type="text" id="searchInput" class="search-box" placeholder="Search by model, category, code...">
        </div>

        <div class="table-wrapper">
            <table class="table" id="vehicleTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Model</th>
                        <th>Category</th>
                        <th>Pax</th>
                        <th>Luggages</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($vehicles)): ?>
                        <?php foreach ($vehicles as $v): ?>
                            <tr>
                                <td><?php echo (int)$v['id']; ?></td>
                                <td>
                                    <?php if (!empty($v['image'])): ?>
                                        <img class="vehicle-img" src="<?php echo htmlspecialchars($v['image']); ?>" alt="Vehicle">
                                    <?php else: ?>
                                        <span style="color:#9ca3af;">No image</span>
                                    <?php endif; ?>
                                </td>
                                <td><?php echo htmlspecialchars($v['car_model']); ?></td>
                                <td><?php echo htmlspecialchars($v['car_category']); ?></td>
                                <td><?php echo htmlspecialchars($v['pax_count']); ?></td>
                                <td><?php echo htmlspecialchars($v['luggage_count']); ?></td>
                                <td>
                                    <?php if (!empty($v['is_active'])): ?>
                                        <span class="badge badge-active">Active</span>
                                    <?php else: ?>
                                        <span class="badge badge-inactive">Inactive</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <a class="btn btn-secondary" href="?edit=<?php echo (int)$v['id']; ?>&page=<?php echo $page; ?>">Edit</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="9" class="empty-row">No vehicles found.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <?php if ($totalPages > 1): ?>
            <div class="pagination">
                <?php if ($page > 1): ?>
                    <a href="?page=<?php echo $page - 1; ?>">Previous</a>
                <?php endif; ?>

                <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                    <?php if ($i == $page): ?>
                        <span class="active"><?php echo $i; ?></span>
                    <?php else: ?>
                        <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                    <?php endif; ?>
                <?php endfor; ?>

                <?php if ($page < $totalPages): ?>
                    <a href="?page=<?php echo $page + 1; ?>">Next</a>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>

</div>

<script>
// Image preview
document.getElementById('imageInput').addEventListener('change', function(e) {
    const preview = document.getElementById('imagePreview');
    const file = e.target.files[0];

    if (file) {
        const reader = new FileReader();
        reader.onload = function(event) {
            preview.src = event.target.result;
            preview.style.display = 'block';
        };
        reader.readAsDataURL(file);
    }
});

// Table search filter
document.getElementById('searchInput').addEventListener('keyup', function() {
    const filter = this.value.toLowerCase();
    const rows = document.querySelectorAll('#vehicleTable tbody tr');

    rows.forEach(row => {
        const text = row.innerText.toLowerCase();
        row.style.display = text.includes(filter) ? '' : 'none';
    });
});

// Smooth scroll to form when editing
<?php if ($editVehicle): ?>
window.addEventListener('load', function() {
    document.getElementById('vehicleForm').scrollIntoView({ behavior: 'smooth', block: 'start' });
});
<?php endif; ?>
</script>

</body>
</html>