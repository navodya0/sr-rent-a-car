<?php
session_start();

$users = [
    'admin' => 'sr2000@Srilanka',
    'kavinda' => '###########',
    'sanduni' => 'Test@321'
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if (isset($users[$username]) && $users[$username] === $password) {
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Invalid credentials";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .logo {
      max-width: 100px;
      margin: 0 auto 20px auto;
      display: block;
    }
  </style>
</head>
<body class="bg-light">
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-4">
        <div class="card text-center">
          <div class="card-header">
            <!-- Logo -->
            <img src="logo.png" alt="Logo" class="logo" >
            <h4>Booking Dashboard</h4>
          </div>
          <div class="card-body">
            <?php if (!empty($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>
            <form method="POST">
              <div class="mb-3 text-start">
                <label>Username</label>
                <input type="text" name="username" class="form-control" required>
              </div>
              <div class="mb-3 text-start">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
              </div>
              <button class="btn btn-primary w-100">Login</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
