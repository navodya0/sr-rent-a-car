<?php
include('conn.php'); // DB connection

// Initialize filter variables
$name_filter = $_GET['name'] ?? '';
$email_filter = $_GET['email'] ?? '';
$country_code_filter = $_GET['country_code'] ?? '';
$contact_number_filter = $_GET['contact_number'] ?? '';
$pdf_code_filter = $_GET['pdf_code'] ?? '';
$service_type_filter = $_GET['service_type'] ?? '';
$created_at_filter = $_GET['created_at'] ?? '';
$license_needed_filter = $_GET['license_needed'] ?? '';

// Pagination setup
$limit = 10;
$page = isset($_GET['p']) && is_numeric($_GET['p']) ? intval($_GET['p']) : 1;
$offset = ($page - 1) * $limit;

// Build filter WHERE clause
$where = "WHERE 1";
if (!empty($name_filter)) $where .= " AND name LIKE '%" . $conn->real_escape_string($name_filter) . "%'";
if (!empty($email_filter)) $where .= " AND email LIKE '%" . $conn->real_escape_string($email_filter) . "%'";
if (!empty($country_code_filter)) $where .= " AND country_code LIKE '%" . $conn->real_escape_string($country_code_filter) . "%'";
if (!empty($contact_number_filter)) $where .= " AND contact_number LIKE '%" . $conn->real_escape_string($contact_number_filter) . "%'";
if (!empty($pdf_code_filter)) $where .= " AND pdf_code LIKE '%" . $conn->real_escape_string($pdf_code_filter) . "%'";
if (!empty($service_type_filter)) $where .= " AND service_type LIKE '%" . $conn->real_escape_string($service_type_filter) . "%'";
if (!empty($created_at_filter)) $where .= " AND DATE(created_at) = '" . $conn->real_escape_string($created_at_filter) . "'";
if (!empty($license_needed_filter)) $where .= " AND license_needed LIKE '%" . $conn->real_escape_string($license_needed_filter) . "%'";

// Count total results for pagination
$count_sql = "SELECT COUNT(*) AS total FROM reservations $where";
$count_result = $conn->query($count_sql);
$total_records = $count_result->fetch_assoc()['total'];
$total_pages = ceil($total_records / $limit);

// Main query
$sql = "SELECT * FROM reservations $where ORDER BY id DESC LIMIT $limit OFFSET $offset";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sri Lanka Rent A Car</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { font-family: Cambria, serif; font-size: 13px; }
        table th, table td { font-size: 13px; }
    </style>
</head>
<body>
<!-- <div class="container my-5">
    <h2 class="mb-4">Reservation Information</h2>

  
    <form method="GET" action="reservations.php">
        <div class="row g-2 mb-3">
            <div class="col-md"><input type="text" name="name" class="form-control" placeholder="Name" value="<?= htmlspecialchars($name_filter) ?>"></div>
            <div class="col-md"><input type="text" name="email" class="form-control" placeholder="Email" value="<?= htmlspecialchars($email_filter) ?>"></div>
            <div class="col-md"><input type="text" name="country_code" class="form-control" placeholder="Country Code" value="<?= htmlspecialchars($country_code_filter) ?>"></div>
        </div>
        <div class="row g-2 mb-3">
            <div class="col-md"><input type="text" name="contact_number" class="form-control" placeholder="Contact Number" value="<?= htmlspecialchars($contact_number_filter) ?>"></div>
            <div class="col-md"><input type="text" name="pdf_code" class="form-control" placeholder="PDF Code" value="<?= htmlspecialchars($pdf_code_filter) ?>"></div>
            <div class="col-md"><input type="text" name="service_type" class="form-control" placeholder="Service Type" value="<?= htmlspecialchars($service_type_filter) ?>"></div>
            <div class="col-md"><input type="text" name="license_needed" class="form-control" placeholder="License Needed" value="<?= htmlspecialchars($license_needed_filter) ?>"></div>
            <div class="col-md"><input type="date" name="created_at" class="form-control" value="<?= htmlspecialchars($created_at_filter) ?>"></div>
            <div class="col-md-auto">
                <button type="submit" class="btn btn-primary">Apply Filters</button>
                <a href="reservations.php" class="btn btn-secondary">Reset</a>
            </div>
        </div> -->
    </form>

    <!-- Table -->
    <?php if ($result->num_rows > 0): ?>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Sr. No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Country Code</th>
                    <th>Contact Number</th>
                    <th>Service Type</th>
                    <th>License Needed</th>
                    <th>Created Date</th>
                    <th>Passport</th>
                    <th>IDP</th>
                    <th>Photo</th>
                    <th>Total Charge</th>
                    <th>Customer Invoice</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sr_no = $offset + 1;
                $base_url = "https://srilankarentacar.com/";
                while ($row = $result->fetch_assoc()):
                    $invoice_url = $base_url . "bill.php?token=" . urlencode($row['pdf_code']);
                    $passport_url = !empty($row['passport_copy']) ? $base_url . $row['passport_copy'] : '';
                    $idp_url = !empty($row['idp_copy']) ? $base_url . $row['idp_copy'] : '';
                    $photo_url = !empty($row['applicant_photo']) ? $base_url . $row['applicant_photo'] : '';
                    $total_charge = number_format((float)$row['total_charge'], 2);
                ?>
                    <tr>
                        <td><?= $sr_no++ ?></td>
                        <td><?= htmlspecialchars($row['name']) ?></td>
                        <td><?= htmlspecialchars($row['email']) ?></td>
                        <td><?= htmlspecialchars($row['country_code']) ?></td>
                        <td><?= htmlspecialchars($row['contact_number']) ?></td>
                        <td><?= htmlspecialchars($row['service_type']) ?></td>
                        <td><?= htmlspecialchars($row['license_needed']) ?></td>
                        <td><?= htmlspecialchars($row['created_at']) ?></td>
                        <td><?= $passport_url ? "<a href='$passport_url' target='_blank'>View</a>" : '-' ?></td>
                        <td><?= $idp_url ? "<a href='$idp_url' target='_blank'>View</a>" : '-' ?></td>
                        <td><?= $photo_url ? "<a href='$photo_url' target='_blank'>View</a>" : '-' ?></td>
                        <td><?= $total_charge ?></td>
                        <td><a href="<?= $invoice_url ?>" target="_blank">View Invoice</a></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>

        <!-- Pagination -->
        <?php if ($total_pages > 1): ?>
            <nav>
                <ul class="pagination">
                    <?php if ($page > 1): ?>
                        <li class="page-item"><a class="page-link" href="?<?= http_build_query(array_merge($_GET, ['p' => $page - 1])) ?>">Previous</a></li>
                    <?php endif; ?>
                    <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                        <li class="page-item <?= ($i == $page ? 'active' : '') ?>">
                            <a class="page-link" href="?<?= http_build_query(array_merge($_GET, ['p' => $i])) ?>"><?= $i ?></a>
                        </li>
                    <?php endfor; ?>
                    <?php if ($page < $total_pages): ?>
                        <li class="page-item"><a class="page-link" href="?<?= http_build_query(array_merge($_GET, ['p' => $page + 1])) ?>">Next</a></li>
                    <?php endif; ?>
                </ul>
            </nav>
        <?php endif; ?>
    <?php else: ?>
        <div class="alert alert-warning">No records found!</div>
    <?php endif; ?>

    <?php $conn->close(); ?>
</div>
</body>
</html>
