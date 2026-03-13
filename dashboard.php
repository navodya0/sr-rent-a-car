<?php include 'auth.php'; ?>
<?php include 'header.php'; ?>
<?php
if (!isset($_SESSION['logged_in'])) {
    header("Location: login.php");
    exit;
}
?>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-5861K2TN4V"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-5861K2TN4V');
</script>

<style>
  body {
    background: linear-gradient(to right, #f8f9fa, #e0eafc);
  }
  .sidebar {
    background: linear-gradient(to bottom, #343a40, #212529);
    min-height: 100vh;
    color: white;
  }
  .sidebar h5 {
    padding: 20px 0;
    border-bottom: 1px solid #555;
  }
  .sidebar .nav-link {
    color: #ccc;
    padding: 10px 20px;
    font-weight: 500;
  }
  .sidebar .nav-link:hover {
    background-color: #495057;
    color: #fff;
    border-radius: 5px;
  }
  .welcome-box {
    background-color: #ffffffcc;
    padding: 20px;
    border-left: 6px solid #0d6efd;
    margin-bottom: 20px;
    border-radius: 5px;
  }
</style>

<div class="container-fluid">
  <div class="row">
    <!-- Sidebar -->
    <nav class="col-md-2 d-none d-md-block sidebar">
      <div class="position-sticky pt-3 text-white">
        <h5 class="text-center">📊 Dashboard Menu</h5>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="dashboard.php?page=users">👥 Bookings</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="dashboard.php?page=reports">📄 Inquirues</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="dashboard.php?page=orders">🛒 Car Rates</a>
          </li> -->
         
        </ul>
      </div>
    </nav>

    <!-- Main content -->
    <main class="col-md-10 ms-sm-auto px-md-4 py-4">
      <div class="welcome-box">
        <h4>Welcome, <?= htmlspecialchars($_SESSION['username']) ?> 👋</h4>
        <p class="mb-0">You're logged in to the SR Booking Dashboard.</p>
      </div>

      <?php
        if (isset($_GET['page'])) {
          $page = $_GET['page'];
          if ($page === 'users') {
            include 'reserve.php';
          } elseif ($page === 'orders') {
            include 'values.php';
          } elseif ($page === 'reports') {
            include 'comments.php';
          } else {
            echo "<p class='text-danger'>Invalid page requested.</p>";
          }
        } else {
          echo "<h2 class='mb-3'>📋 Dashboard Overview</h2><p>Please select a table from the left-hand menu to view details.</p>";
        }
      ?>
    </main>
  </div>
</div>

<?php include 'footer.php'; ?>
