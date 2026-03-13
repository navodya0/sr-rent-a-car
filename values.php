<?php
include('conn.php'); // DB connection

// Initialize filter variables
$car_code_filter = $_GET['car_code'] ?? '';
$car_model_filter = $_GET['car_model'] ?? '';
$car_category_filter = $_GET['car_category'] ?? '';
$duration_filter = $_GET['duration'] ?? '';
$rate_filter = $_GET['rate'] ?? '';
$start_date_filter = $_GET['start_date'] ?? '';
$end_date_filter = $_GET['end_date'] ?? '';

// Build the query with filters
$sql = "SELECT * FROM car_rental WHERE 1";

if (!empty($car_code_filter)) {
    $sql .= " AND car_code LIKE '%" . $conn->real_escape_string($car_code_filter) . "%'";
}
if (!empty($car_model_filter)) {
    $sql .= " AND car_model LIKE '%" . $conn->real_escape_string($car_model_filter) . "%'";
}
if (!empty($car_category_filter)) {
    $sql .= " AND car_category LIKE '%" . $conn->real_escape_string($car_category_filter) . "%'";
}
if (!empty($duration_filter)) {
    $sql .= " AND duration LIKE '%" . $conn->real_escape_string($duration_filter) . "%'";
}
if (!empty($rate_filter)) {
    $sql .= " AND rate LIKE '%" . $conn->real_escape_string($rate_filter) . "%'";
}
if (!empty($start_date_filter)) {
    $sql .= " AND start_date = '" . $conn->real_escape_string($start_date_filter) . "'";
}
if (!empty($end_date_filter)) {
    $sql .= " AND end_date = '" . $conn->real_escape_string($end_date_filter) . "'";
}

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sri Lanka Rent A Car</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<style>
    body {
        font-family: Cambria, serif;
        font-size: 13px;
    }
    table th, table td {
        font-size: 13px;
    }
</style>

<div class="container my-5">
    <h3 class="mb-4">Car Rentals</h3>

    <!-- Filter Form -->
    <!-- <form method="GET" action="car_rentals.php">
        <div class="row g-2 mb-3">
            <div class="col-md">
                <input type="text" name="car_code" class="form-control" placeholder="Car Code" value="<?= htmlspecialchars($car_code_filter) ?>">
            </div>
            <div class="col-md">
                <input type="text" name="car_model" class="form-control" placeholder="Car Model" value="<?= htmlspecialchars($car_model_filter) ?>">
            </div>
            <div class="col-md">
                <input type="text" name="car_category" class="form-control" placeholder="Car Category" value="<?= htmlspecialchars($car_category_filter) ?>">
            </div>
            <div class="col-md">
                <input type="text" name="duration" class="form-control" placeholder="Duration" value="<?= htmlspecialchars($duration_filter) ?>">
            </div>
        </div>
        <div class="row g-2 mb-3">
            <div class="col-md">
                <input type="text" name="rate" class="form-control" placeholder="Rate" value="<?= htmlspecialchars($rate_filter) ?>">
            </div>
            <div class="col-md">
                <input type="date" name="start_date" class="form-control" value="<?= htmlspecialchars($start_date_filter) ?>">
            </div>
            <div class="col-md">
                <input type="date" name="end_date" class="form-control" value="<?= htmlspecialchars($end_date_filter) ?>">
            </div>
            <div class="col-md-auto">
                <button type="submit" class="btn btn-primary">Apply Filters</button>
                <a href="prices.php" class="btn btn-secondary">Reset</a>
            </div>
        </div>
    </form> -->

    <!-- Table -->
    <?php
    if ($result->num_rows > 0) {
        echo '<table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        
                        <th>Car Model</th>
                        <th>Car Category</th>
                        <th>Duration</th>
                        <th>Rate</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                    </tr>
                </thead>
                <tbody>';

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                
                    <td>{$row['car_model']}</td>
                    <td>{$row['car_category']}</td>
                    <td>{$row['duration']}</td>
                    <td>{$row['rate']}</td>
                    <td>{$row['start_date']}</td>
                    <td>{$row['end_date']}</td>
                  </tr>";
        }

        echo '</tbody></table>';
    } else {
        echo "<div class='alert alert-warning'>No records found!</div>";
    }

    $conn->close();
    ?>
</div>
</body>
</html>
