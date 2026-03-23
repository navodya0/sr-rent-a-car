<?php
session_start();

if (empty($_SESSION['admin_logged_in'])) {
    header('Location: login.php');
    exit;
}

require_once __DIR__ . '/assets/includes/db_connect.php';

$success = '';
$error = '';

$editOffer = null;
$editExtra = null;

/* -----------------------------
   SUCCESS MESSAGES
----------------------------- */
if (isset($_GET['success'])) {
    switch ($_GET['success']) {
        case 'offer_created':
            $success = "Offer created successfully.";
            break;
        case 'offer_updated':
            $success = "Offer updated successfully.";
            break;
        case 'offer_deleted':
            $success = "Offer deleted successfully.";
            break;
        case 'extra_created':
            $success = "Extra created successfully.";
            break;
        case 'extra_updated':
            $success = "Extra updated successfully.";
            break;
        case 'extra_deleted':
            $success = "Extra deleted successfully.";
            break;
    }
}

/* -----------------------------
   DELETE OFFER
----------------------------- */
if (isset($_GET['delete_offer'])) {
    $deleteId = (int)$_GET['delete_offer'];

    try {
        $stmt = $pdo->prepare("DELETE FROM offers WHERE id = ?");
        $stmt->execute([$deleteId]);

        header("Location: offers-extras.php?success=offer_deleted");
        exit;
    } catch (Exception $e) {
        $error = "Failed to delete offer: " . $e->getMessage();
    }
}

/* -----------------------------
   DELETE EXTRA
----------------------------- */
if (isset($_GET['delete_extra'])) {
    $deleteId = (int)$_GET['delete_extra'];

    try {
        $stmt = $pdo->prepare("DELETE FROM extras WHERE extra_id = ?");
        $stmt->execute([$deleteId]);

        header("Location: offers-extras.php?success=extra_deleted");
        exit;
    } catch (Exception $e) {
        $error = "Failed to delete extra: " . $e->getMessage();
    }
}

/* -----------------------------
   LOAD OFFER FOR EDIT
----------------------------- */
if (isset($_GET['edit_offer'])) {
    $editId = (int)$_GET['edit_offer'];

    $stmt = $pdo->prepare("SELECT * FROM offers WHERE id = ?");
    $stmt->execute([$editId]);
    $editOffer = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$editOffer) {
        $error = "Offer not found.";
    }
}

/* -----------------------------
   LOAD EXTRA FOR EDIT
----------------------------- */
if (isset($_GET['edit_extra'])) {
    $editId = (int)$_GET['edit_extra'];

    $stmt = $pdo->prepare("SELECT * FROM extras WHERE extra_id = ?");
    $stmt->execute([$editId]);
    $editExtra = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$editExtra) {
        $error = "Extra not found.";
    }
}

/* -----------------------------
   SAVE OFFER
----------------------------- */
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['save_offer'])) {
    $id = (int)($_POST['id'] ?? 0);
    $layout = trim($_POST['layout'] ?? '');
    $title = trim($_POST['title'] ?? '');
    $subtitle = trim($_POST['subtitle'] ?? '');
    $discount_text = trim($_POST['discount_text'] ?? '');
    $cta_text = trim($_POST['cta_text'] ?? '');
    $cta_link = trim($_POST['cta_link'] ?? '');
    $sort_order = (int)($_POST['sort_order'] ?? 0);
    $is_active = isset($_POST['is_active']) ? 1 : 0;

    if ($layout === '' || $title === '') {
        $error = "Offer layout and title are required.";
    } else {
        try {
            $imagePath = $editOffer['image_path'] ?? '';

            if (!empty($_FILES['image_path']['name']) && !empty($_FILES['image_path']['tmp_name'])) {
                $uploadDir = __DIR__ . '/assets/images/offers/';
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }

                $fileName = time() . '_' . preg_replace('/[^A-Za-z0-9.\-_]/', '_', basename($_FILES['image_path']['name']));
                $targetPath = $uploadDir . $fileName;
                $relativePath = 'assets/images/offers/' . $fileName;

                if (move_uploaded_file($_FILES['image_path']['tmp_name'], $targetPath)) {
                    $imagePath = $relativePath;
                }
            }

            if ($id > 0) {
                $stmt = $pdo->prepare("
                    UPDATE offers SET
                        layout = ?,
                        title = ?,
                        subtitle = ?,
                        discount_text = ?,
                        cta_text = ?,
                        cta_link = ?,
                        image_path = ?,
                        sort_order = ?,
                        is_active = ?,
                        updated_at = NOW()
                    WHERE id = ?
                ");
                $stmt->execute([
                    $layout,
                    $title,
                    $subtitle,
                    $discount_text,
                    $cta_text,
                    $cta_link,
                    $imagePath,
                    $sort_order,
                    $is_active,
                    $id
                ]);

                header("Location: offers-extras.php?success=offer_updated");
                exit;
            } else {
                $stmt = $pdo->prepare("
                    INSERT INTO offers (
                        layout, title, subtitle, discount_text, cta_text, cta_link,
                        image_path, sort_order, is_active, created_at, updated_at
                    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, NOW(), NOW())
                ");
                $stmt->execute([
                    $layout,
                    $title,
                    $subtitle,
                    $discount_text,
                    $cta_text,
                    $cta_link,
                    $imagePath,
                    $sort_order,
                    $is_active
                ]);

                header("Location: offers-extras.php?success=offer_created");
                exit;
            }
        } catch (Exception $e) {
            $error = "Failed to save offer: " . $e->getMessage();
        }
    }
}

/* -----------------------------
   SAVE EXTRA
----------------------------- */
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['save_extra'])) {
    $extra_id = (int)($_POST['extra_id'] ?? 0);
    $name = trim($_POST['name'] ?? '');
    $description = trim($_POST['description'] ?? '');
    $price = (float)($_POST['price'] ?? 0);

    if ($name === '') {
        $error = "Extra name is required.";
    } else {
        try {
            if ($extra_id > 0) {
                $stmt = $pdo->prepare("
                    UPDATE extras SET
                        name = ?,
                        description = ?,
                        price = ?
                    WHERE extra_id = ?
                ");
                $stmt->execute([$name, $description, $price, $extra_id]);

                header("Location: offers-extras.php?success=extra_updated");
                exit;
            } else {
                $stmt = $pdo->prepare("
                    INSERT INTO extras (
                        name, description, price, created_at
                    ) VALUES (?, ?, ?, NOW())
                ");
                $stmt->execute([$name, $description, $price]);

                header("Location: offers-extras.php?success=extra_created");
                exit;
            }
        } catch (Exception $e) {
            $error = "Failed to save extra: " . $e->getMessage();
        }
    }
}

/* -----------------------------
   FETCH DATA
----------------------------- */
$offers = $pdo->query("SELECT * FROM offers ORDER BY sort_order ASC, id DESC")->fetchAll(PDO::FETCH_ASSOC);
$extras = $pdo->query("SELECT * FROM extras ORDER BY extra_id DESC")->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Offers & Extras | SR Rent A Car</title>
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

.section-title {
    margin: 0 0 12px;
    font-size: 22px;
    color: #031c45;
}

.text-danger {
    color: red;
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

.muted-text {
    font-size: 12px;
    color: #6b7280;
    margin-top: 6px;
    display: block;
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

input, textarea, select {
    width: 100%;
    padding: 11px 12px;
    border: 1px solid #d1d5db;
    border-radius: 10px;
    outline: none;
    font-size: 14px;
    background: #fff;
    transition: 0.2s;
}

input:focus, textarea:focus, select:focus {
    border-color: #031c45;
    box-shadow: 0 0 0 3px rgba(3, 28, 69, 0.08);
}

textarea {
    min-height: 100px;
    resize: vertical;
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
    vertical-align: top;
}

.table tr:hover td {
    background: #f8fafc;
}

.thumb {
    width: 80px;
    height: 55px;
    object-fit: cover;
    border-radius: 10px;
    border: 1px solid #e5e7eb;
}

.status-badge {
    display: inline-block;
    padding: 6px 10px;
    border-radius: 999px;
    font-size: 12px;
    font-weight: 700;
}

.status-active {
    background: #dcfce7;
    color: #166534;
}

.status-inactive {
    background: #fee2e2;
    color: #991b1b;
}

.split-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 24px;
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
        <h1 class="page-title">Offers & Extras Management</h1>
        <div class="small-text">Manage website offers and optional extras from one page.</div>

        <?php if ($success): ?>
            <div class="alert alert-success"><?php echo htmlspecialchars($success); ?></div>
        <?php endif; ?>

        <?php if ($error): ?>
            <div class="alert alert-error"><?php echo htmlspecialchars($error); ?></div>
        <?php endif; ?>
    </div>

    <div class="split-grid">
        <div class="card">
            <h2 class="section-title"><?php echo $editOffer ? 'Edit Offer' : 'Add Offer'; ?></h2>

            <form method="POST" enctype="multipart/form-data">
                <input type="hidden" name="save_offer" value="1">
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($editOffer['id'] ?? '0'); ?>">

                <div class="form-grid">
                    <div class="form-group">
                        <label>Layout</label>
                        <input type="text" value="<?php echo htmlspecialchars($editOffer['layout'] ?? 'promo50'); ?>" disabled>
                        <input type="hidden" name="layout" value="<?php echo htmlspecialchars($editOffer['layout'] ?? 'promo50'); ?>">
                    </div>

                    <div class="form-group">
                        <label>Title <span class="text-danger">*</span></label>
                        <input type="text" name="title" value="<?php echo htmlspecialchars($editOffer['title'] ?? ''); ?>" required>
                    </div>

                    <div class="form-group">
                        <label>Subtitle <span class="text-danger">*</span></label>
                        <input type="text" name="subtitle" value="<?php echo htmlspecialchars($editOffer['subtitle'] ?? ''); ?>" required>
                    </div>

                    <div class="form-group">
                        <label>Discount Text <span class="text-danger">*</span></label>
                        <input type="text" name="discount_text" value="<?php echo htmlspecialchars($editOffer['discount_text'] ?? ''); ?>">
                        <small class="muted-text">Example: 50% OFF, SAVE 20%</small>
                    </div>

                    <div class="form-group">
                        <label>Text <span class="text-danger">*</span></label>
                        <input type="text" name="cta_text" value="<?php echo htmlspecialchars($editOffer['cta_text'] ?? ''); ?>">
                        <small class="muted-text">Example: Book Now , Reserve Today</small>
                    </div>

                    <div class="form-group" style="display:none;">
                        <label>Link </label>
                        <input type="text" name="cta_link" value="39">
                    </div>

                    <div class="form-group">
                        <label>Sort Order <span class="text-danger">*</span></label>
                        <input type="number" name="sort_order" value="<?php echo htmlspecialchars($editOffer['sort_order'] ?? '0'); ?>">
                    </div>

                    <div class="form-group">
                        <label>Image <span class="text-danger">*</span></label>
                        <input type="file" name="image_path" accept="image/*">
                    </div>

                    <div class="form-group full">
                        <?php if (!empty($editOffer['image_path'])): ?>
                            <img src="<?php echo htmlspecialchars($editOffer['image_path']); ?>" alt="Offer image" class="thumb">
                        <?php endif; ?>
                    </div>

                    <div class="form-group full">
                        <label style="display:flex; gap:10px; align-items:center;">
                            <input type="checkbox" name="is_active" style="width:auto;" <?php echo !empty($editOffer['is_active']) ? 'checked' : ''; ?>>
                            Active
                        </label>
                    </div>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn btn-primary"><?php echo $editOffer ? 'Update Offer' : 'Save Offer'; ?></button>
                    <a href="offers-extras.php" class="btn btn-secondary">Reset</a>
                </div>
            </form>
        </div>

        <div class="card">
            <h2 class="section-title">Offers List</h2>

            <div class="table-wrapper">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Layout</th>
                            <th>Title</th>
                            <th>Discount</th>
                            <th>Sort</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($offers)): ?>
                            <?php foreach ($offers as $offer): ?>
                                <tr>
                                    <td><?php echo (int)$offer['id']; ?></td>
                                    <td>
                                        <?php if (!empty($offer['image_path'])): ?>
                                            <img src="<?php echo htmlspecialchars($offer['image_path']); ?>" alt="Offer image" class="thumb">
                                        <?php else: ?>
                                            <span style="color:#9ca3af;">No image</span>
                                        <?php endif; ?>
                                    </td>
                                    <td><?php echo htmlspecialchars($offer['layout']); ?></td>
                                    <td><?php echo htmlspecialchars($offer['title']); ?></td>
                                    <td><?php echo htmlspecialchars($offer['discount_text']); ?></td>
                                    <td><?php echo (int)$offer['sort_order']; ?></td>
                                    <td>
                                        <?php if (!empty($offer['is_active'])): ?>
                                            <span class="status-badge status-active">Active</span>
                                        <?php else: ?>
                                            <span class="status-badge status-inactive">Inactive</span>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <a class="btn btn-secondary" href="offers-extras.php?edit_offer=<?php echo (int)$offer['id']; ?>">Edit</a>
                                        <a class="btn btn-danger" href="offers-extras.php?delete_offer=<?php echo (int)$offer['id']; ?>" onclick="return confirm('Delete this offer?');">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="8" style="text-align:center; color:#6b7280;">No offers found.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card">
            <h2 class="section-title"><?php echo $editExtra ? 'Edit Extra' : 'Add Extra'; ?></h2>

            <form method="POST">
                <input type="hidden" name="save_extra" value="1">
                <input type="hidden" name="extra_id" value="<?php echo htmlspecialchars($editExtra['extra_id'] ?? '0'); ?>">

                <div class="form-grid">
                    <div class="form-group">
                        <label>Name <span class="text-danger">*</span></label>
                        <input type="text" name="name" value="<?php echo htmlspecialchars($editExtra['name'] ?? ''); ?>" required>
                    </div>

                    <div class="form-group">
                        <label>Price <span class="text-danger">*</span></label>
                        <input type="number" step="0.01" name="price" value="<?php echo htmlspecialchars($editExtra['price'] ?? '0.00'); ?>" required>
                    </div>

                    <div class="form-group full">
                        <label>Description</label>
                        <textarea name="description"><?php echo htmlspecialchars($editExtra['description'] ?? ''); ?></textarea>
                    </div>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn btn-primary"><?php echo $editExtra ? 'Update Extra' : 'Save Extra'; ?></button>
                    <a href="offers-extras.php" class="btn btn-secondary">Reset</a>
                </div>
            </form>
        </div>

        <div class="card">
            <h2 class="section-title">Extras List</h2>

            <div class="table-wrapper">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($extras)): ?>
                            <?php foreach ($extras as $extra): ?>
                                <tr>
                                    <td><?php echo (int)$extra['extra_id']; ?></td>
                                    <td><?php echo htmlspecialchars($extra['name']); ?></td>
                                    <td><?php echo htmlspecialchars($extra['description']); ?></td>
                                    <td><?php echo number_format((float)$extra['price'], 2); ?></td>
                                    <td><?php echo htmlspecialchars($extra['created_at']); ?></td>
                                    <td>
                                        <a class="btn btn-secondary" href="offers-extras.php?edit_extra=<?php echo (int)$extra['extra_id']; ?>">Edit</a>
                                        <a class="btn btn-danger" href="offers-extras.php?delete_extra=<?php echo (int)$extra['extra_id']; ?>" onclick="return confirm('Delete this extra?');">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="6" style="text-align:center; color:#6b7280;">No extras found.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</body>
</html>