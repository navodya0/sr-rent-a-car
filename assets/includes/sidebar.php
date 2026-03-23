<?php
    $currentPage = basename($_SERVER['PHP_SELF']);
?>

<div class="sidebar">

    <div class="sidebar-logo">
        <img src="assets/images/logo.jpg" alt="SR Rent A Car Logo" class="img-fluid">
        <span>SR Rent A Car</span>
    </div>
    <ul class="sidebar-menu">
        <li>
            <a href="dashboard.php" class="<?php echo ($currentPage == 'dashboard.php') ? 'active' : ''; ?>">
                Dashboard
            </a>
        </li>

        <li>
            <a href="bookings.php" class="<?php echo ($currentPage == 'bookings.php') ? 'active' : ''; ?>">
                Bookings
            </a>
        </li>

        <li>
            <a href="inquiries.php" class="<?php echo ($currentPage == 'inquiries.php') ? 'active' : ''; ?>">
                Inquiries
            </a>
        </li>

        <li>
            <a href="rates.php" class="<?php echo ($currentPage == 'rates.php') ? 'active' : ''; ?>">
                Rates
            </a>
        </li>

        <li>
            <a href="offers-extras.php" class="<?php echo ($currentPage == 'offers-extras.php') ? 'active' : ''; ?>">
                Offers & Extras
            </a>
        </li>

        <li>
            <a href="vehicles.php" class="<?php echo ($currentPage == 'vehicles.php') ? 'active' : ''; ?>">
                Vehicles
            </a>
        </li>

        <?php if (!empty($_SESSION['admin_user_email']) && $_SESSION['admin_user_email'] === 'admin@example.com'): ?>
            <li>
                <a href="users.php" class="<?php echo ($currentPage == 'users.php') ? 'active' : ''; ?>">
                    Users
                </a>
            </li>
        <?php endif; ?>
    </ul>

    <div class="sidebar-footer">
        <a href="logout.php" class="logout-btn">Logout</a>
    </div>

</div>

<style>

.sidebar{
    width:220px;
    height:100vh;
    background:#0b1f37;
    color:#fff;
    position:fixed;
    left:0;
    top:0;
    padding:25px 20px;
    display:flex;
    flex-direction:column;
}

.sidebar-logo {
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 40px;
}

.sidebar-logo img {
    width: 40px;
    height: auto;
    object-fit: contain;
}

.sidebar-menu{
    list-style:none;
    padding:0;
    margin:0;
}

.sidebar-menu li{
    margin-bottom:12px;
}

.sidebar-menu a{
    color:#fff;
    text-decoration:none;
    display:block;
    padding:10px 12px;
    border-radius:6px;
    transition: 0.2s;
}

.sidebar-menu a:hover{
    background:#07306b;
}

.sidebar-footer{
    text-align:center;
}

.logout-btn{
    display:block;
    padding:10px 12px;
    background:#fff;
    color:#000;
    text-decoration:none;
    font-weight:bold;
    border-radius:6px;
    transition:0.2s;
}

.logout-btn:hover{
    background:#a18b3e;
}

.sidebar-menu a.active {
    background: linear-gradient(90deg, #07306b, #0a3d91);
    border-left: 4px solid #940f0f;
}

</style>