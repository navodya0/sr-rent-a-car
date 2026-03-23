<?php
require_once 'assets/includes/db_connect.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$error = '';
$email = '';

if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
    header('Location: dashboard.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim((string)($_POST['email'] ?? ''));
    $password = trim((string)($_POST['password'] ?? ''));

    if ($email === '' || $password === '') {
        $error = 'Please enter both email and password.';
    } else {
        try {
            $stmt = $pdo->prepare("
                SELECT id, name, email, password
                FROM users
                WHERE email = :email
                LIMIT 1
            ");
            $stmt->execute([':email' => $email]);

            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user && password_verify($password, $user['password'])) {
                $_SESSION['admin_logged_in'] = true;
                $_SESSION['admin_user_id'] = (int)$user['id'];
                $_SESSION['admin_user_name'] = $user['name'] ?? '';
                $_SESSION['admin_user_email'] = $user['email'] ?? '';

                header('Location: dashboard.php');
                exit;
            } else {
                $error = 'Invalid email or password.';
            }
        } catch (PDOException $ex) {
            $error = 'Login failed. Please try again.';
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Admin Login | SR Rent A Car</title>
<link rel="icon" href="assets/images/favicon.ico">

<style>
body {
    font-family: Cambria, serif;
    margin:0;
    height:100vh;
    display:flex;
    align-items:center;
    justify-content:center;
    background: url('assets/images/login-illustration.webp') no-repeat center/cover;
}

.login-box {
    position:relative;
    z-index:1;
    background:#fff;
    padding:30px;
    width:340px;
    border-radius:10px;
    box-shadow:0 15px 40px rgba(0,0,0,0.6);
    text-align:center;
}

.logo {
    width:80px;
    margin-bottom:10px;
}

h2 {
    margin-bottom:20px;
    color:#173a67;
    margin-top: 0;
}

.form-group {
    margin-bottom:18px;
    text-align:left;
}

input {
    width:100%;
    padding:10px;
    border:none;
    border-bottom:1px solid #ccc;
    outline:none;
    font-family:Cambria;
}

input:focus {
    border-bottom:1px solid #07306b;
}

button {
    width:100%;
    padding:12px;
    background:#031c45;
    color:#fff;
    border:none;
    border-radius:4px;
    font-weight:bold;
    cursor:pointer;
}

button:hover {
    opacity:0.9;
}

.error {
    background:#ffe5e5;
    color:#c00;
    padding:10px;
    margin-bottom:15px;
    border-radius:5px;
    font-size:14px;
}
</style>
</head>

<body>

<div class="overlay"></div>

<div class="login-box">
    <img src="assets/images/logo.png" class="logo">

    <h2>Admin Login</h2>

    <?php if ($error): ?>
        <div class="error"><?php echo htmlspecialchars($error); ?></div>
    <?php endif; ?>

    <form method="post">
        <div class="form-group">
            <input type="email" name="email" placeholder="Email" required value="<?php echo htmlspecialchars($email); ?>">
        </div>

        <div class="form-group">
            <input type="password" name="password" placeholder="Password" required>
        </div>

        <button type="submit">LOGIN</button>
    </form>
</div>

</body>
</html>