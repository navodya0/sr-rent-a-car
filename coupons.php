<?php
session_start();

if (empty($_SESSION['admin_logged_in'])) {
    header('Location: login.php');
    exit;
}

require_once __DIR__ . '/assets/includes/db_connect.php';

date_default_timezone_set('Asia/Colombo');

$success = '';
$error   = '';
$editCoupon = null;

/* ─────────────────────────────────
   AUTO-CREATE TABLE (if not exists)
───────────────────────────────── */
$pdo->exec("
    CREATE TABLE IF NOT EXISTS coupons (
        id          INT AUTO_INCREMENT PRIMARY KEY,
        code        VARCHAR(50)  NOT NULL UNIQUE,
        discount    DECIMAL(5,2) NOT NULL,
        valid_from  DATE         NULL,
        valid_until DATE         NULL,
        is_active   TINYINT(1)   NOT NULL DEFAULT 1,
        created_at  DATETIME     NOT NULL DEFAULT CURRENT_TIMESTAMP,
        updated_at  DATETIME     NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4
");

// Add columns if table already existed without them
$stmt = $pdo->query("SHOW COLUMNS FROM coupons LIKE 'valid_from'");
if ($stmt->rowCount() == 0) {
    $pdo->exec("ALTER TABLE coupons ADD COLUMN valid_from DATE NULL AFTER discount, ADD COLUMN valid_until DATE NULL AFTER valid_from");
}

/* ─────────────────────────────────
   SUCCESS MESSAGES
───────────────────────────────── */
if (isset($_GET['success'])) {
    switch ($_GET['success']) {
        case 'created':  $success = "Coupon created successfully.";   break;
        case 'updated':  $success = "Coupon updated successfully.";   break;
        case 'deleted':  $success = "Coupon deleted successfully.";   break;
        case 'toggled':  $success = "Coupon status updated.";         break;
    }
}

/* ─────────────────────────────────
   DELETE COUPON
───────────────────────────────── */
if (isset($_GET['delete'])) {
    $deleteId = (int)$_GET['delete'];
    try {
        $stmt = $pdo->prepare("DELETE FROM coupons WHERE id = ?");
        $stmt->execute([$deleteId]);
        header("Location: coupons.php?success=deleted");
        exit;
    } catch (Exception $e) {
        $error = "Failed to delete coupon: " . $e->getMessage();
    }
}

/* ─────────────────────────────────
   TOGGLE ACTIVE / INACTIVE
───────────────────────────────── */
if (isset($_GET['toggle'])) {
    $toggleId = (int)$_GET['toggle'];
    try {
        $stmt = $pdo->prepare("UPDATE coupons SET is_active = NOT is_active WHERE id = ?");
        $stmt->execute([$toggleId]);
        header("Location: coupons.php?success=toggled");
        exit;
    } catch (Exception $e) {
        $error = "Failed to toggle coupon: " . $e->getMessage();
    }
}

/* ─────────────────────────────────
   LOAD COUPON FOR EDIT
───────────────────────────────── */
if (isset($_GET['edit'])) {
    $editId = (int)$_GET['edit'];
    $stmt   = $pdo->prepare("SELECT * FROM coupons WHERE id = ?");
    $stmt->execute([$editId]);
    $editCoupon = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$editCoupon) {
        $error = "Coupon not found.";
    }
}

/* ─────────────────────────────────
   CREATE / UPDATE COUPON (POST)
───────────────────────────────── */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $couponId  = isset($_POST['coupon_id']) ? (int)$_POST['coupon_id'] : 0;
    $code      = strtoupper(trim($_POST['code'] ?? ''));
    $discount  = floatval($_POST['discount'] ?? 0);
    $isActive  = isset($_POST['is_active']) ? 1 : 0;
    $validFrom = !empty($_POST['valid_from']) ? $_POST['valid_from'] : null;
    $validUntil= !empty($_POST['valid_until']) ? $_POST['valid_until'] : null;

    if ($code === '' || $discount <= 0 || $discount > 100 || !$validFrom || !$validUntil) {
        $error = "Please enter a valid coupon code, discount (1–100%), and validity dates.";
    } else {
        try {
            if ($couponId > 0) {
                // UPDATE
                $stmt = $pdo->prepare("UPDATE coupons SET code = ?, discount = ?, valid_from = ?, valid_until = ?, is_active = ? WHERE id = ?");
                $stmt->execute([$code, $discount, $validFrom, $validUntil, $isActive, $couponId]);
                header("Location: coupons.php?success=updated");
                exit;
            } else {
                // CREATE
                $stmt = $pdo->prepare("INSERT INTO coupons (code, discount, valid_from, valid_until, is_active) VALUES (?, ?, ?, ?, ?)");
                $stmt->execute([$code, $discount, $validFrom, $validUntil, $isActive]);
                header("Location: coupons.php?success=created");
                exit;
            }
        } catch (PDOException $e) {
            if ($e->getCode() == 23000) {
                $error = "A coupon with that code already exists.";
            } else {
                $error = "Database error: " . $e->getMessage();
            }
        }
    }

    // Preserve form values on error
    if ($error && $couponId > 0) {
        $editCoupon = ['id' => $couponId, 'code' => $code, 'discount' => $discount, 'valid_from' => $validFrom, 'valid_until' => $validUntil, 'is_active' => $isActive];
    }
}

/* ─────────────────────────────────
   FETCH ALL COUPONS
───────────────────────────────── */
$coupons = $pdo->query("SELECT * FROM coupons ORDER BY created_at DESC")->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Coupons | SR Rent A Car</title>
<link rel="icon" type="image/png" href="assets/images/favicon.ico">

<style>
    * { box-sizing: border-box; }

    body {
        margin: 0;
        background: #f4f7fb;
        font-family: Cambria, serif;
        color: #1b2f4a;
        font-size: 12px;
    }

    .main-content {
        margin-left: 240px;
        min-height: 100vh;
        padding: 28px;
    }

    /* ── Top bar ─────────────────── */
    .topbar {
        background: #fff;
        border-radius: 14px;
        padding: 18px 22px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        box-shadow: 0 10px 24px rgba(10,40,90,.08);
        margin-bottom: 24px;
    }
    .topbar h1 { margin: 0; font-size: 28px; color: #0b2c5f; }
    .topbar p  { margin: 4px 0 0; color: #6b7a90; font-size: 14px; }

    /* ── Alerts ──────────────────── */
    .alert {
        padding: 12px 16px;
        border-radius: 8px;
        margin-bottom: 18px;
        font-size: 14px;
        font-weight: 600;
    }
    .alert-success { background: #e4f8ea; color: #167a39; }
    .alert-error   { background: #ffe7e7; color: #b42318; }

    /* ── Card ────────────────────── */
    .card {
        background: #fff;
        border-radius: 14px;
        padding: 22px;
        box-shadow: 0 10px 24px rgba(10,40,90,.08);
        margin-bottom: 24px;
    }
    .card h3 { margin: 0 0 18px; color: #0b2c5f; font-size: 22px; }

    /* ── Form ────────────────────── */
    .coupon-form { display: flex; flex-wrap: wrap; gap: 14px; align-items: flex-end; }

    .form-group { display: flex; flex-direction: column; gap: 4px; }
    .form-group label { font-size: 13px; font-weight: 700; color: #4d5d74; }
    .form-group input {
        padding: 10px 12px;
        border: 1px solid #d0d8e4;
        border-radius: 8px;
        font-size: 14px;
        font-family: inherit;
        transition: border-color .2s;
    }
    .form-group input:focus {
        outline: none;
        border-color: #0b4f9c;
        box-shadow: 0 0 0 3px rgba(11,79,156,.12);
    }

    .checkbox-group {
        display: flex;
        align-items: center;
        gap: 6px;
        padding-bottom: 4px;
    }
    .checkbox-group input[type="checkbox"] {
        width: 18px; height: 18px; accent-color: #0b4f9c;
    }
    .checkbox-group label { font-size: 13px; font-weight: 700; color: #4d5d74; cursor: pointer; }

    .btn {
        padding: 10px 20px;
        border: none;
        border-radius: 8px;
        font-size: 14px;
        font-weight: 700;
        cursor: pointer;
        transition: .2s ease;
        font-family: inherit;
        text-decoration: none;
        display: inline-block;
        text-align: center;
    }
    .btn-primary { background: #0b4f9c; color: #fff; }
    .btn-primary:hover { background: #093e7b; }
    .btn-cancel  { background: #edf1f6; color: #4d5d74; }
    .btn-cancel:hover { background: #d8dee8; }

    /* ── Table ───────────────────── */
    .coupon-table { width: 100%; border-collapse: collapse; }
    .coupon-table th,
    .coupon-table td {
        text-align: left;
        padding: 12px 10px;
        border-bottom: 1px solid #edf1f6;
        font-size: 14px;
    }
    .coupon-table th { color: #6f8097; font-weight: 700; }
    .coupon-table tr:hover { background: #f8fafd; }

    /* ── Badges ──────────────────── */
    .badge {
        display: inline-block;
        padding: 5px 12px;
        border-radius: 999px;
        font-size: 12px;
        font-weight: 700;
    }
    .badge-active   { background: #e4f8ea; color: #167a39; }
    .badge-inactive { background: #ffe7e7; color: #b42318; }

    .discount-badge {
        display: inline-block;
        background: #edf4ff;
        color: #0b4f9c;
        padding: 5px 12px;
        border-radius: 999px;
        font-size: 13px;
        font-weight: 700;
    }

    /* ── Action links ────────────── */
    .action-link {
        font-size: 13px;
        font-weight: 600;
        text-decoration: none;
        margin-right: 8px;
        transition: .2s;
    }
    .action-edit   { color: #0b4f9c; }
    .action-edit:hover { color: #072d5e; }
    .action-toggle { color: #9a6b00; }
    .action-toggle:hover { color: #6d4c00; }
    .action-delete { color: #b42318; }
    .action-delete:hover { color: #7a1810; }

    .empty-state {
        text-align: center;
        padding: 40px 20px;
        color: #8898ad;
        font-size: 15px;
    }

    /* ── Responsive ──────────────── */
    @media (max-width: 768px) {
        .main-content { margin-left: 0; padding: 18px; }
        .coupon-form { flex-direction: column; }
        .topbar { flex-direction: column; align-items: flex-start; gap: 12px; }
    }
</style>
</head>
<body>

<?php include 'assets/includes/sidebar.php'; ?>

<div class="main-content">

    <!-- Top bar -->
    <div class="topbar">
        <div>
            <h1>Coupon Codes</h1>
            <p>Create, manage and track discount coupon codes.</p>
        </div>
    </div>

    <!-- Alerts -->
    <?php if ($success): ?>
        <div class="alert alert-success"><?php echo htmlspecialchars($success); ?></div>
    <?php endif; ?>
    <?php if ($error): ?>
        <div class="alert alert-error"><?php echo htmlspecialchars($error); ?></div>
    <?php endif; ?>

    <!-- Add / Edit Coupon Form -->
    <div class="card">
        <h3><?php echo $editCoupon ? 'Edit Coupon' : 'Add New Coupon'; ?></h3>

        <form method="POST" action="coupons.php" class="coupon-form">
            <?php if ($editCoupon): ?>
                <input type="hidden" name="coupon_id" value="<?php echo (int)$editCoupon['id']; ?>">
            <?php endif; ?>

            <div class="form-group">
                <label for="code">Coupon Code</label>
                <input type="text" id="code" name="code" placeholder="e.g. SUMMER25"
                       value="<?php echo htmlspecialchars($editCoupon['code'] ?? ''); ?>"
                       required style="width:200px; text-transform:uppercase;">
            </div>

            <div class="form-group">
                <label for="discount">Discount (%)</label>
                <input type="number" id="discount" name="discount" placeholder="e.g. 15"
                       min="1" max="100" step="0.01"
                       value="<?php echo htmlspecialchars($editCoupon['discount'] ?? ''); ?>"
                       required style="width:120px;">
            </div>

            <div class="form-group">
                <label for="valid_from">Valid From</label>
                <input type="date" id="valid_from" name="valid_from"
                       value="<?php echo htmlspecialchars($editCoupon['valid_from'] ?? ''); ?>"
                       min="<?php echo ($editCoupon && !empty($editCoupon['valid_from']) && $editCoupon['valid_from'] < date('Y-m-d')) ? htmlspecialchars($editCoupon['valid_from']) : date('Y-m-d'); ?>"
                       required style="width:150px;">
            </div>

            <div class="form-group">
                <label for="valid_until">Valid Until</label>
                <input type="date" id="valid_until" name="valid_until"
                       value="<?php echo htmlspecialchars($editCoupon['valid_until'] ?? ''); ?>"
                       min="<?php echo ($editCoupon && !empty($editCoupon['valid_until']) && $editCoupon['valid_until'] < date('Y-m-d')) ? htmlspecialchars($editCoupon['valid_until']) : date('Y-m-d'); ?>"
                       required style="width:150px;">
            </div>

            <div class="checkbox-group">
                <input type="checkbox" id="is_active" name="is_active"
                       <?php echo (!$editCoupon || !empty($editCoupon['is_active'])) ? 'checked' : ''; ?>>
                <label for="is_active">Active</label>
            </div>

            <button type="submit" class="btn btn-primary">
                <?php echo $editCoupon ? 'Update Coupon' : 'Add Coupon'; ?>
            </button>

            <?php if ($editCoupon): ?>
                <a href="coupons.php" class="btn btn-cancel">Cancel</a>
            <?php endif; ?>
        </form>
    </div>

    <!-- Coupons Table -->
    <div class="card">
        <h3>All Coupons (<?php echo count($coupons); ?>)</h3>

        <?php if (!empty($coupons)): ?>
        <table class="coupon-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Coupon Code</th>
                    <th>Discount</th>
                    <th>Validity Period</th>
                    <th>Status</th>
                    <th>Created</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($coupons as $i => $coupon): ?>
                <tr>
                    <td><?php echo $i + 1; ?></td>
                    <td><strong><?php echo htmlspecialchars($coupon['code']); ?></strong></td>
                    <td><span class="discount-badge"><?php echo number_format($coupon['discount'], 2); ?>%</span></td>
                    <td>
                        <?php echo htmlspecialchars($coupon['valid_from'] ?? '') . ' to ' . htmlspecialchars($coupon['valid_until'] ?? ''); ?>
                    </td>
                    <td>
                        <span class="badge <?php echo $coupon['is_active'] ? 'badge-active' : 'badge-inactive'; ?>">
                            <?php echo $coupon['is_active'] ? 'Active' : 'Inactive'; ?>
                        </span>
                    </td>
                    <td><?php echo date('d M Y', strtotime($coupon['created_at'])); ?></td>
                    <td>
                        <a href="coupons.php?edit=<?php echo $coupon['id']; ?>" class="action-link action-edit">Edit</a>
                        <a href="coupons.php?toggle=<?php echo $coupon['id']; ?>" class="action-link action-toggle">
                            <?php echo $coupon['is_active'] ? 'Deactivate' : 'Activate'; ?>
                        </a>
                        <a href="coupons.php?delete=<?php echo $coupon['id']; ?>" class="action-link action-delete"
                           onclick="return confirm('Delete this coupon?');">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <?php else: ?>
            <div class="empty-state">No coupons found. Use the form above to create your first coupon.</div>
        <?php endif; ?>
    </div>

</div>

<script>
    // Remove alerts after 3 seconds
    setTimeout(() => {
        const alerts = document.querySelectorAll('.alert');
        alerts.forEach(alert => {
            alert.style.transition = 'opacity 0.5s ease';
            alert.style.opacity = '0';
            setTimeout(() => alert.remove(), 500);
        });
    }, 3000);
</script>

</body>
</html>
