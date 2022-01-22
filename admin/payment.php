
<!DOCTYPE html>
<html>
<head>
    <title>Pharmacy Inventory Management System</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid">
    <img class="logo" src="../images/company_logo.png">
    <a class="navbar-brand" href="#">P.I.M.S ph</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link " aria-current="page" href="reservation.php">RESERVATION</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="inventory.php">INVENTORY</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="payment.php">PAYMENT</a>
        </li>
        <li class="nav-item">
          <button class="btn" onclick="window.location.href= '../index.php'; alert('Logging out...');" style = "padding:10px;height: 40px; background: white; color: #526dfe;">
            Log Out
          </button>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="toTop">
        <h3>P.I.M.S PAYMENT</h3>
    
</div>

<div>
<?php session_start(); ?>

<div class="section1">
    <form action="update_payment.php" method = "POST" class="container">
        <input type="text" name="username" placeholder="Enter Username" >
        <input type="text" name="payment" placeholder="Amount">
        <input type="submit" value="PAY">
    </form>
</div>
</div>

</body>
</html>