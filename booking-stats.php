<?php
session_start();

if (empty($_SESSION['admin_logged_in'])) {
    header('Location: login.php');
    exit;
}

require_once __DIR__ . '/assets/includes/db_connect.php';

$success = '';
$error = '';

$adminId = (int)($_SESSION['admin_user_id'] ?? 0);

try {

    $contactCount = (int)$pdo
        ->query("SELECT COUNT(*) FROM contact_form")
        ->fetchColumn();

} catch (Throwable $e) {

    $contactCount = 0;

}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $whatsapp_booking = (int)($_POST['whatsapp_booking'] ?? 0);

    $direct_email_booking = (int)($_POST['direct_email_booking'] ?? 0);

    $ongoing_conversation_booking = (int)($_POST['ongoing_conversation_booking'] ?? 0);

    try {

        $stmt = $pdo->prepare("
            INSERT INTO booking_dashboard_stats
            (
                whatsapp_booking,
                direct_email_booking,
                ongoing_conversation_booking,
                created_by,
                created_at
            )
            VALUES
            (
                :whatsapp_booking,
                :direct_email_booking,
                :ongoing_conversation_booking,
                :created_by,
                NOW()
            )
        ");

        $stmt->execute([
            ':whatsapp_booking' => $whatsapp_booking,
            ':direct_email_booking' => $direct_email_booking,
            ':ongoing_conversation_booking' => $ongoing_conversation_booking,
            ':created_by' => $adminId
        ]);

        $success = "Booking statistics saved successfully.";

    } catch (Throwable $e) {

        $error = $e->getMessage();

    }
}


$stmt = $pdo->query("
    SELECT
        COALESCE(SUM(whatsapp_booking),0) AS whatsapp_total,
        COALESCE(SUM(direct_email_booking),0) AS direct_email_total,
        COALESCE(SUM(ongoing_conversation_booking),0) AS ongoing_total
    FROM booking_dashboard_stats
");

$totals = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">

<title>Booking Dashboard | SR Rent A Car</title>

<link rel="icon" type="image/png" href="assets/images/favicon.ico">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>

*{
    box-sizing:border-box;
}

body{
    margin:0;
    background:#f4f7fb;
    font-family:Cambria, serif;
    color:#1f2937;
    font-size:12px;
}

.main-content{
    margin-left:240px;
    padding:30px;
}

.page-title{
    font-size:30px;
    color:#031c45;
    margin-bottom:5px;
}

.small-text{
    color:#6b7280;
    margin-bottom:25px;
}

.stats-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
    gap:20px;
    margin-bottom:30px;
}

.card{
    background:#fff;
    border-radius:18px;
    padding:25px;
    box-shadow:0 10px 30px rgba(0,0,0,0.06);
}

.card-title{
    font-size:16px;
    color:#6b7280;
    margin-bottom:10px;
}

.card-value{
    font-size:38px;
    font-weight:700;
    color:#031c45;
}

.form-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
    gap:18px;
}

.form-group{
    display:flex;
    flex-direction:column;
}

label{
    margin-bottom:8px;
    font-weight:600;
    color:#374151;
}

input{
    width:100%;
    padding:12px;
    border:1px solid #d1d5db;
    border-radius:10px;
    font-size:15px;
    outline:none;
}

input:focus{
    border-color:#031c45;
    box-shadow:0 0 0 3px rgba(3,28,69,0.08);
}

.btn{
    margin-top:20px;
    background:#031c45;
    color:#fff;
    border:none;
    padding:12px 20px;
    cursor:pointer;
    font-weight:600;
    border-radius:10px;
}

.btn:hover{
    background:#052b69;
}

.toast-success{
    position:fixed;
    top:20px;
    right:20px;
    background:#16a34a;
    color:#fff;
    padding:14px 18px;
    border-radius:12px;
    box-shadow:0 10px 25px rgba(0,0,0,0.15);
    z-index:9999;
    font-weight:600;
    animation:fadeIn 0.3s ease;
}

.toast-error{
    position:fixed;
    top:20px;
    right:20px;
    background:#dc2626;
    color:#fff;
    padding:14px 18px;
    border-radius:12px;
    box-shadow:0 10px 25px rgba(0,0,0,0.15);
    z-index:9999;
    font-weight:600;
    animation:fadeIn 0.3s ease;
}

@keyframes fadeIn{
    from{
        opacity:0;
        transform:translateY(-10px);
    }
    to{
        opacity:1;
        transform:translateY(0);
    }
}

@media(max-width:900px){

    .main-content{
        margin-left:0;
        padding:20px;
    }

}

</style>

</head>

<body>

<?php include 'assets/includes/sidebar.php'; ?>

<div class="main-content">

    <h1 class="page-title">
        Booking Dashboard
    </h1>

    <div class="small-text">
        Manage booking statistics and inquiry counts.
    </div>

    <!-- STATS -->
    <div class="stats-grid">

        <div class="card">

            <div class="card-title">
                Contact Form Inquiries
            </div>

            <div class="card-value">
                <?php echo number_format($contactCount); ?>
            </div>

        </div>

        <div class="card">

            <div class="card-title">
                WhatsApp Bookings
            </div>

            <div class="card-value">
                <?php echo number_format($totals['whatsapp_total'] ?? 0); ?>
            </div>

        </div>

        <div class="card">

            <div class="card-title">
                Direct Email Bookings
            </div>

            <div class="card-value">
                <?php echo number_format($totals['direct_email_total'] ?? 0); ?>
            </div>

        </div>

        <div class="card">

            <div class="card-title">
                Active Booking Enquiries
            </div>

            <div class="card-value">
                <?php echo number_format($totals['ongoing_total'] ?? 0); ?>
            </div>

        </div>

    </div>

    <!-- FORM -->
    <div class="card">

        <h2 style="margin-top:0;color:#031c45;">
            Update Booking Statistics
        </h2>

        <form method="POST">

            <div class="form-grid">

                <div class="form-group">

                    <label>
                        WhatsApp Bookings
                    </label>

                    <input
                        type="number"
                        name="whatsapp_booking"
                        min="0"
                        value="0"
                        required
                    >

                </div>

                <div class="form-group">

                    <label>
                        Direct Email Bookings
                    </label>

                    <input
                        type="number"
                        name="direct_email_booking"
                        min="0"
                        value="0"
                        required
                    >

                </div>

                <div class="form-group">

                    <label>
                        Active Booking Enquiries
                    </label>

                    <input
                        type="number"
                        name="ongoing_conversation_booking"
                        min="0"
                        value="0"
                        required
                    >

                </div>

            </div>

            <div style="display:flex;justify-content:end;">

                <button
                    type="submit"
                    class="btn"
                >
                    Save Statistics
                </button>

            </div>

        </form>

    </div>

</div>

<?php if ($success): ?>

<div id="toast-success" class="toast-success">
    <?php echo htmlspecialchars($success); ?>
</div>

<?php endif; ?>

<?php if ($error): ?>

<div id="toast-error" class="toast-error">
    <?php echo htmlspecialchars($error); ?>
</div>

<?php endif; ?>

<script>

setTimeout(() => {

    const successToast = document.getElementById('toast-success');

    if (successToast) {

        successToast.style.transition = '0.4s';
        successToast.style.opacity = '0';

        setTimeout(() => {
            successToast.remove();
        }, 400);

    }

    const errorToast = document.getElementById('toast-error');

    if (errorToast) {

        errorToast.style.transition = '0.4s';
        errorToast.style.opacity = '0';

        setTimeout(() => {
            errorToast.remove();
        }, 400);

    }

}, 3000);

</script>

</body>
</html>