<?php
include('conn.php');

// Initialize filter variables
$name_filter = "";
$email_filter = "";
$subject_filter = "";
$date_filter = "";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['name'])) {
        $name_filter = $_GET['name'];
    }
    if (isset($_GET['email'])) {
        $email_filter = $_GET['email'];
    }
    if (isset($_GET['subject'])) {
        $subject_filter = $_GET['subject'];
    }
    if (isset($_GET['date'])) {
        $date_filter = $_GET['date'];
    }
}

// Build the query with filters
$sql = "SELECT * FROM contact_form WHERE 1";

if (!empty($name_filter)) {
    $sql .= " AND name LIKE '%" . $conn->real_escape_string($name_filter) . "%'";
}
if (!empty($email_filter)) {
    $sql .= " AND email LIKE '%" . $conn->real_escape_string($email_filter) . "%'";
}
if (!empty($subject_filter)) {
    $sql .= " AND subject LIKE '%" . $conn->real_escape_string($subject_filter) . "%'";
}
if (!empty($date_filter)) {
    $sql .= " AND DATE(submitted_at) = '" . $conn->real_escape_string($date_filter) . "'";
}

$sql .= " ORDER BY submitted_at DESC";

$result = $conn->query($sql);

// Determine latest submission date
$latest_date = '';
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $latest_date = date("Y-m-d", strtotime($row['submitted_at']));
    // Reset pointer to first row again
    $result->data_seek(0);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Form Submissions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<style>
    body {
        font-family: Cambria, serif;
        font-size: 12px;
    }
    table th, table td {
        font-size: 13px;
        font-family: Cambria, serif;
    }
    input, button {
        font-family: Cambria, serif;
        font-size: 11px;
    }
    .highlight-latest {
        background-color: rgba(130, 130, 130, 0.26) !important;
    }
</style>

<div class="container my-5">
    <h4>Customer's Inquiries</h4>

    <!-- Filter Form -->
    <!-- <form method="GET" action="inquiry.php">
        <div class="row mb-3 align-items-center">
            <div class="col-md-4">
                <input type="date" class="form-control" name="date" value="<?php echo htmlspecialchars($date_filter); ?>">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary ms-2">Apply Filter</button>
            </div>
            <div class="col-auto">
                <a href="inquiry.php" class="btn btn-secondary ms-2">Reset Filter</a>
            </div>
        </div>
    </form> -->

    <!-- Table -->
    <?php
    if ($result->num_rows > 0) {
        echo '<table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Submitted At</th>
                    </tr>
                </thead>
                <tbody>';

        while ($row = $result->fetch_assoc()) {
            $row_date = date("Y-m-d", strtotime($row['submitted_at']));
            $highlight_class = ($row_date === $latest_date) ? 'highlight-latest' : '';

            echo "<tr class='{$highlight_class}'>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['subject']}</td>
                    <td>{$row['message']}</td>
                    <td>{$row['submitted_at']}</td>
                  </tr>";
        }

        echo '</tbody></table>';
    } else {
        echo "No records found!";
    }

    $conn->close();
    ?>
</div>
</body>
</html>
