<?php
session_start();

if (
    empty($_SESSION['admin_logged_in']) ||
    empty($_SESSION['admin_user_email']) ||
    $_SESSION['admin_user_email'] !== 'admin@example.com'
) {
    header('Location: dashboard.php');
    exit;
}

require_once __DIR__ . '/assets/includes/db_connect.php';

$success = '';
$error = '';
$editUser = null;

/* --------------------------
   DELETE USER
-------------------------- */
if (isset($_GET['delete'])) {
    $deleteId = (int)$_GET['delete'];

    try {
        $stmt = $pdo->prepare("DELETE FROM users WHERE id = ?");
        $stmt->execute([$deleteId]);

        header("Location: users.php?success=deleted");
        exit;
    } catch (Exception $e) {
        $error = "Failed to delete user: " . $e->getMessage();
    }
}

/* --------------------------
   LOAD EDIT USER
-------------------------- */
if (isset($_GET['edit'])) {
    $editId = (int)$_GET['edit'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->execute([$editId]);
    $editUser = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$editUser) {
        $error = "User not found.";
    }
}

/* --------------------------
   SAVE USER (ADD / UPDATE)
-------------------------- */
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['save_user'])) {
    $id = isset($_POST['id']) ? (int)$_POST['id'] : 0;
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if ($name === '' || $email === '') {
        $error = "Name and email are required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Please enter a valid email address.";
    } else {
        try {
            if ($id > 0) {
                $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ? AND id != ?");
                $stmt->execute([$email, $id]);
                $existing = $stmt->fetch(PDO::FETCH_ASSOC);

                if ($existing) {
                    $error = "Email already exists for another user.";
                } else {
                    if ($password !== '') {
                        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

                        $stmt = $pdo->prepare("
                            UPDATE users SET
                                name = ?,
                                email = ?,
                                password = ?,
                                updated_at = NOW()
                            WHERE id = ?
                        ");
                        $stmt->execute([$name, $email, $hashedPassword, $id]);
                    } else {
                        $stmt = $pdo->prepare("
                            UPDATE users SET
                                name = ?,
                                email = ?,
                                updated_at = NOW()
                            WHERE id = ?
                        ");
                        $stmt->execute([$name, $email, $id]);
                    }

                    header("Location: users.php?success=updated");
                    exit;
                }
            } else {
                if ($password === '') {
                    $error = "Password is required for new users.";
                } else {
                    $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ?");
                    $stmt->execute([$email]);
                    $existing = $stmt->fetch(PDO::FETCH_ASSOC);

                    if ($existing) {
                        $error = "Email already exists.";
                    } else {
                        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

                        $stmt = $pdo->prepare("
                            INSERT INTO users (name, email, password, created_at, updated_at)
                            VALUES (?, ?, ?, NOW(), NOW())
                        ");
                        $saved = $stmt->execute([$name, $email, $hashedPassword]);

                        if ($saved) {
                            header("Location: users.php?success=created");
                            exit;
                        } else {
                            $error = "User was not created.";
                        }
                    }
                }
            }
        } catch (Exception $e) {
            $error = "Failed to save user: " . $e->getMessage();
        }
    }
}

/* --------------------------
   SUCCESS MESSAGE
-------------------------- */
if (isset($_GET['success'])) {
    if ($_GET['success'] === 'created') {
        $success = "User created successfully.";
    } elseif ($_GET['success'] === 'updated') {
        $success = "User updated successfully.";
    } elseif ($_GET['success'] === 'deleted') {
        $success = "User deleted successfully.";
    }
}

/* --------------------------
   FETCH USERS
-------------------------- */
$stmt = $pdo->query("SELECT * FROM users ORDER BY id DESC LIMIT 20");
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Users Management | SR Rent A Car</title>
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

.form-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 16px;
    margin-top: 16px;
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

input {
    width: 100%;
    padding: 11px 12px;
    border: 1px solid #d1d5db;
    border-radius: 10px;
    outline: none;
    font-size: 14px;
    transition: 0.2s;
    background: #fff;
}

input:focus {
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

.btn-danger {
    background: #dc2626;
    color: #fff;
}

.btn-danger:hover {
    background: #b91c1c;
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
}

.table tr:hover td {
    background: #f8fafc;
}

.badge {
    display: inline-block;
    padding: 6px 10px;
    border-radius: 999px;
    font-size: 12px;
    font-weight: 700;
    background: #e0e7ff;
    color: #3730a3;
}

.note-box {
    background: #f8fafc;
    border: 1px solid #e5e7eb;
    padding: 14px;
    border-radius: 12px;
    margin-top: 8px;
    color: #6b7280;
    font-size: 13px;
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
        <h1 class="page-title">Users Management</h1>
        <div class="small-text">Create, edit, and delete admin users.</div>

        <?php if ($success): ?>
            <div class="alert alert-success"><?php echo htmlspecialchars($success); ?></div>
        <?php endif; ?>

        <?php if ($error): ?>
            <div class="alert alert-error"><?php echo htmlspecialchars($error); ?></div>
        <?php endif; ?>

        <h2 style="margin:0 0 10px; color:#031c45;">
            <?php echo $editUser ? 'Edit User' : 'Add New User'; ?>
        </h2>

        <form method="POST">
            <input type="hidden" name="save_user" value="1">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($editUser['id'] ?? '0'); ?>">

            <div class="form-grid">
                <div class="form-group">
                    <label>Full Name</label>
                    <input
                        type="text"
                        name="name"
                        placeholder="Enter full name"
                        value="<?php echo htmlspecialchars($editUser['name'] ?? ''); ?>"
                        required
                    >
                </div>

                <div class="form-group">
                    <label>Email Address</label>
                    <input
                        type="email"
                        name="email"
                        placeholder="Enter email address"
                        value="<?php echo htmlspecialchars($editUser['email'] ?? ''); ?>"
                        required
                    >
                </div>

                <div class="form-group full">
                    <label>
                        Password
                        <?php echo $editUser ? '(Leave blank to keep current password)' : ''; ?>
                    </label>
                    <input
                        type="password"
                        name="password"
                        placeholder="<?php echo $editUser ? 'Enter new password only if changing it' : 'Enter password'; ?>"
                        <?php echo $editUser ? '' : 'required'; ?>
                    >
                </div>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary">
                    <?php echo $editUser ? 'Update User' : 'Create User'; ?>
                </button>
                <a href="users.php" class="btn btn-secondary">Reset</a>
            </div>

            <div class="note-box">
                Passwords are stored securely using hashing. Existing passwords are never shown.
            </div>
        </form>
    </div>

    <div class="card">
        <h2 style="margin-top:0; color:#031c45;">Latest Users</h2>

        <div class="table-wrapper">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th style="min-width:160px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($users)): ?>
                        <?php foreach ($users as $user): ?>
                            <tr>
                                <td><?php echo (int)$user['id']; ?></td>
                                <td><?php echo htmlspecialchars($user['name']); ?></td>
                                <td><?php echo htmlspecialchars($user['email']); ?></td>
                                <td><span class="badge">Hashed</span></td>
                                <td><?php echo htmlspecialchars($user['created_at']); ?></td>
                                <td><?php echo htmlspecialchars($user['updated_at']); ?></td>
                                <td>
                                    <a class="btn btn-secondary" href="users.php?edit=<?php echo (int)$user['id']; ?>">Edit</a>
                                    <a class="btn btn-danger"
                                       href="users.php?delete=<?php echo (int)$user['id']; ?>"
                                       onclick="return confirm('Are you sure you want to delete this user?');">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="7" style="text-align:center; color:#6b7280;">No users found.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>

</body>
</html>