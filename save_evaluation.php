<?php
// save_arrival_evaluation.php
include 'db_connection.php'; // Make sure this file contains $conn = new mysqli(...)

// Set Sri Lanka Timezone
date_default_timezone_set('Asia/Colombo');

$success = false;
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Validate required fields
    $required_fields = [
        'employee_name', 'station', 'booking_number',
        'greeting', 'documentation', 'value_info',
        'vehicle_inspection', 'controls_photos', 'checkout_time'
    ];

    foreach ($required_fields as $field) {
        if (!isset($_POST[$field]) || empty(trim($_POST[$field]))) {
            $error = "Missing required field: $field";
            break;
        }
    }

    if (!$error) {
        // Assign and sanitize variables
        $employee_name      = $_POST['employee_name'];
        $station            = $_POST['station'];
        $booking_number     = $_POST['booking_number'];
        $greeting           = intval($_POST['greeting']);
        $documentation      = intval($_POST['documentation']);
        $value_info         = intval($_POST['value_info']);
        $vehicle_inspection = intval($_POST['vehicle_inspection']);
        $controls_photos    = intval($_POST['controls_photos']);
        $checkout_time      = intval($_POST['checkout_time']);
        $created_at         = date('Y-m-d H:i:s');

        // Prepared statement to prevent SQL injection
        $stmt = $conn->prepare("INSERT INTO arrival_evaluation 
            (employee_name, station, booking_number, greeting, documentation, value_info, vehicle_inspection, controls_photos, checkout_time, created_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param(
            "sssiiiiiis",
            $employee_name, $station, $booking_number, $greeting, $documentation,
            $value_info, $vehicle_inspection, $controls_photos, $checkout_time, $created_at
        );

        if ($stmt->execute()) {
            $success = true;
        } else {
            $error = "Error saving record: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Staff Evaluation - Arrival</title>
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    h1 { font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 28px; color: blueviolet; text-align: center; margin-top: 20px; }
    .logout-btn { position: fixed; top: 15px; right: 15px; z-index: 1050; }
    .row.align-items-center { margin-bottom: 0.75rem; }
  </style>
</head>
<body class="bg-light">
  <div class="logout-btn">
    <a href="evaluation.php" class="btn btn-primary">Logout</a>
  </div>

  <div class="container py-5">
    <?php if ($success): ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        ✅ Record has been saved successfully! Redirecting...
      </div>
      <script>
        setTimeout(() => { window.location.href = "arrivals.php"; }, 2000);
      </script>
    <?php elseif ($error): ?>
      <div class="alert alert-danger" role="alert">
        ⚠️ <?= htmlspecialchars($error) ?>
      </div>
    <?php endif; ?>

    <div class="text-center mb-4">
      <div class="d-flex justify-content-center mb-3">
        <img src="assets/images/eval/sr.png" alt="Logo" class="mx-2" style="max-width:100px;">
      </div>
      <h1>Staff Evaluation on the Arrival</h1>
    </div>

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="home.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Staff Evaluation - Arrival</li>
      </ol>
    </nav>

    <div class="card shadow-sm mb-5">
      <div class="card-body">
        <h4 class="card-title mb-3">Arrivals / Checkout Checklist</h4>
        <form id="checkoutForm" class="needs-validation" novalidate method="POST" action="">
          <!-- Employee Details -->
          <div class="row align-items-center">
            <div class="col-md-6 mb-2">
              <label class="form-label fw-semibold">Employee Name</label>
              <select name="employee_name" class="form-select" required>
                <option value="" disabled selected>Select Employee</option>
                <option value="Dimath Weliwitigoda">Dimath Weliwitigoda</option>
                <option value="Anil Krishantha">Anil Krishantha</option>
                <option value="Ryan Monie">Ryan Monie</option>
                <option value="Rashan Gamage">Rashan Gamage</option>
                <option value="Sameera Dilshan">Sameera Dilshan</option>
                <option value="Heshan Sandaruwan">Heshan Sandaruwan</option>
                <option value="Wishvajith Perera">Wishvajith Perera</option>
                <option value="Lashen Dilash">Lashen Dilash</option>
              </select>
            </div>
            <div class="col-md-6 mb-2">
              <label class="form-label fw-semibold">Station</label>
              <select name="station" class="form-select" required>
                <option value="" disabled selected>Select Station</option>
                <option value="SR Rent Station">SR Rent Station</option>
                <option value="Europcar Station">Europcar Station</option>
                <option value="Greenmotion Station">Greenmotion Station</option>
                <option value="Elite Rent Station">Elite Rent Station</option>
              </select>
            </div>
          </div>

          <div class="row align-items-center mb-3">
            <div class="col-md-6">
              <label class="form-label fw-semibold">Booking Number</label>
              <input type="text" name="booking_number" class="form-control" required>
            </div>
          </div>

          <!-- Evaluation Checklist -->
          <?php
          $checklist = [
            'greeting' => 'Greeting (Polite & Helpful Way)',
            'documentation' => 'Accurate Documentation & Payment',
            'value_info' => 'Provide Value Added Information',
            'vehicle_inspection' => 'Carried Out Proper Inspection (Vehicle)',
            'controls_photos' => 'Provided Vehicle Controls Info + Photos at Key Handover',
            'checkout_time' => 'Total Checkout Time (Should Be 15 Min)'
          ];
          foreach ($checklist as $name => $label):
          ?>
            <div class="row align-items-center mb-1">
              <div class="col-md-9">
                <label class="form-label fw-semibold"><?= $label ?></label>
              </div>
              <div class="col-md-3">
                <select name="<?= $name ?>" class="form-select" required>
                  <option value="" disabled selected>Select Your Rate</option>
                  <?php for ($i=1; $i<=5; $i++): ?>
                    <option><?= $i ?></option>
                  <?php endfor; ?>
                </select>
              </div>
            </div>
          <?php endforeach; ?>

          <hr class="my-4">
          <div class="text-center p-3 bg-white border rounded">
            <strong>Rating Guide:</strong>
            <?php for ($i=1;$i<=5;$i++): ?>
              <span class="ms-3"><strong><?= $i ?></strong> = <?= ['Very Poor','Poor','Average','Good','Excellent'][$i-1] ?></span>
            <?php endfor; ?>
          </div>

          <div class="text-end mt-3">
            <button type="submit" class="btn btn-success">Submit Checklist</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
  <script>
    (function () {
      'use strict';
      var forms = document.querySelectorAll('.needs-validation');
      Array.prototype.slice.call(forms).forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    })();
  </script>
</body>
</html>
