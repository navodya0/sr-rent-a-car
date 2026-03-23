<?php
    session_start();

    if (empty($_SESSION['admin_logged_in'])) {
        header('Location: login.php');
        exit;
    }
    require_once __DIR__ . '/assets/includes/db_connect.php';

    date_default_timezone_set('Asia/Colombo');

    try {
        $totalBookings = $pdo->query("
            SELECT 
                (SELECT COUNT(*) FROM booking_reservations) +
                (SELECT COUNT(*) FROM reservations) 
            AS total
        ")->fetchColumn();

        $totalVehicles = $pdo->query("SELECT COUNT(*) FROM vehicles")->fetchColumn();

        $todayDate = date('Y-m-d');

        $todayInquiriesStmt = $pdo->prepare("
            SELECT COUNT(*)
            FROM contact_form
            WHERE DATE(submitted_at) = :today_date
        ");
        $todayInquiriesStmt->execute([
            ':today_date' => $todayDate
        ]);
        $todayInquiries = $todayInquiriesStmt->fetchColumn();

        $recentBookings = $pdo->query("
            SELECT id, full_name, car_code, grand_total
            FROM booking_reservations
            ORDER BY id DESC
            LIMIT 5
        ")->fetchAll(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {
        $totalBookings = $totalVehicles = $todayInquiries = 0;
        $recentBookings = [];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard | SR Rent A Car</title>
<link rel="icon" type="image/png" href="assets/images/favicon.ico">

<style>
    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        background: #f4f7fb;
        font-family: Cambria, serif;
        color: #1b2f4a;
        font-size:12px;
    }

    .main-content {
        margin-left: 240px;
        min-height: 100vh;
        padding: 28px;
    }

    .topbar {
        background: #fff;
        border-radius: 14px;
        padding: 18px 22px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        box-shadow: 0 10px 24px rgba(10, 40, 90, 0.08);
        margin-bottom: 24px;
    }

    .topbar h1 {
        margin: 0;
        font-size: 28px;
        color: #0b2c5f;
    }

    .topbar p {
        margin: 4px 0 0;
        color: #6b7a90;
        font-size: 14px;
    }

    .user-badge {
        background: #edf4ff;
        color: #0b4f9c;
        padding: 10px 16px;
        border-radius: 999px;
        font-size: 14px;
        font-weight: 700;
    }

    .stats-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 18px;
        margin-bottom: 24px;
    }

    .stat-card {
        background: #fff;
        border-radius: 14px;
        padding: 22px;
        box-shadow: 0 10px 24px rgba(10, 40, 90, 0.08);
    }

    .stat-label {
        font-size: 14px;
        color: #73839b;
        margin-bottom: 10px;
    }

    .stat-value {
        font-size: 30px;
        font-weight: 700;
        color: #0b2c5f;
        margin-bottom: 8px;
    }

    .stat-note {
        font-size: 13px;
        color: #2d8a4e;
    }

    .content-grid {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 18px;
    }

    .card {
        background: #fff;
        border-radius: 14px;
        padding: 22px;
        box-shadow: 0 10px 24px rgba(10, 40, 90, 0.08);
    }

    .card h3 {
        margin: 0 0 18px;
        color: #0b2c5f;
        font-size: 22px;
    }

    .booking-table {
        width: 100%;
        border-collapse: collapse;
    }

    .booking-table th,
    .booking-table td {
        text-align: left;
        padding: 12px 10px;
        border-bottom: 1px solid #edf1f6;
        font-size: 14px;
    }

    .booking-table th {
        color: #6f8097;
        font-weight: 700;
    }

    .status {
        display: inline-block;
        padding: 6px 12px;
        border-radius: 999px;
        font-size: 12px;
        font-weight: 700;
    }

    .status.pending {
        background: #fff4dd;
        color: #9a6b00;
    }

    .status.confirmed {
        background: #e4f8ea;
        color: #167a39;
    }

    .status.cancelled {
        background: #ffe7e7;
        color: #b42318;
    }

    .quick-links {
        display: grid;
        gap: 12px;
    }

    .quick-links a {
        display: block;
        text-decoration: none;
        background: #f7faff;
        color: #0b2c5f;
        border: 1px solid #e3ecf8;
        border-radius: 10px;
        padding: 14px 16px;
        font-weight: 700;
        transition: 0.2s ease;
    }

    .quick-links a:hover {
        background: #eaf3ff;
    }

    .activity-list {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .activity-list li {
        padding: 12px 0;
        border-bottom: 1px solid #edf1f6;
        font-size: 14px;
        color: #4d5d74;
    }

    .stat-card {
    transition: 0.2s ease;
}

.stat-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 14px 30px rgba(0,0,0,0.1);
}

    .activity-list li:last-child {
        border-bottom: none;
    }

    @media (max-width: 1100px) {
        .stats-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .content-grid {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 768px) {
        .main-content {
            margin-left: 0;
            padding: 18px;
        }

        .stats-grid {
            grid-template-columns: 1fr;
        }

        .topbar {
            flex-direction: column;
            align-items: flex-start;
            gap: 12px;
        }
    }
</style>
</head>
<body>

<?php include 'assets/includes/sidebar.php'; ?>

<div class="main-content">
    <div class="topbar">
        <div>
            <h1>Dashboard</h1>
            <p>Welcome back, <?php echo htmlspecialchars($_SESSION['admin_user_name']); ?>.</p>
        </div>
        <div class="user-badge">
            <?php echo htmlspecialchars($_SESSION['admin_user_email'] ?? 'Admin User'); ?>
        </div>
    </div>

    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-label">Total Bookings</div>
            <div class="stat-value"><?php echo (int)$totalBookings; ?></div>
            <div class="stat-note">All time</div>
        </div>

        <div class="stat-card" onclick="window.location='inquiries.php'" style="cursor:pointer;">
            <div class="stat-label">Inquiries Received Today</div>
            <div class="stat-value"><?php echo (int)$todayInquiries; ?></div>
            <div class="stat-note">Today only</div>
        </div>

        <div class="stat-card">
            <div class="stat-label">Vehicles Listed</div>
            <div class="stat-value"><?php echo (int)$totalVehicles; ?></div>
            <div class="stat-note">Available fleet</div>
        </div>
    </div>

    <div class="content-grid">
        <div class="card">
            <h3>Recent Bookings</h3>
            <table class="booking-table">
                <thead>
                    <tr>
                        <th>Booking ID</th>
                        <th>Customer</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                <?php if (!empty($recentBookings)): ?>
                    <?php foreach ($recentBookings as $booking): ?>
                        <tr>
                            <td>
                                <?php echo 'SR/RENT - ' . str_pad($booking['id'], 3, '0', STR_PAD_LEFT); ?>
                            </td>
                            <td><?php echo htmlspecialchars($booking['full_name']); ?></td>
                            <td>
                                <span class="status confirmed">
                                    € <?php echo number_format((float)$booking['grand_total'], 2); ?>
                                </span>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4">No recent bookings</td>
                    </tr>
                <?php endif; ?>
                </tbody>
            </table>
        </div>

        <div>
            <div class="card" style="margin-bottom:18px;">
                <h3>Quick Actions</h3>
                <div class="quick-links">
                    <a href="bookings.php">Manage Bookings</a>
                    <a href="rates.php">Manage Rates</a>
                    <a href="inquiries.php">Manage Inquiries</a>
                    <a href="offers-extras.php">Manage Offers</a>
                </div>
            </div>

            <!-- <div class="card">
                <h3>Recent Activity</h3>
                <ul class="activity-list">
                    <li>New booking received from John Perera.</li>
                    <li>Vehicle “Toyota Prius” updated.</li>
                    <li>Payment marked as received for booking #1002.</li>
                    <li>Customer profile updated for Sarah Silva.</li>
                </ul>
            </div> -->
        </div>
    </div>
</div>

</body>
</html>