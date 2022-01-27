<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `reservation` WHERE CONCAT(`id`, `username`, `product_name`, `quantity`, 'paid') LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `reservation`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "pims_db2");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}





?>

<!DOCTYPE html>
<html>
<head>
    <title>Pharmacy Inventory Management System</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg py-3 sticky-top navbar-dark">
        <div class="container">
          <img class="logo" src="../images/company_logo.png">
          <a class="navbar-brand" href="#">P.I.M.S ph</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="reservation.php">RESERVATION</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="inventory.php">INVENTORY</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="payment.php">PAYMENT</a>
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
        <h3>P.I.M.S RESERVATIONS</h3>
    
</div>
  <form action="reservation.php" method="post">
  <div class="sub-btn">
                <input type="text" name="valueToSearch" placeholder="Search Rooom">
                <input class="btn" type="submit" name="search" value="Search">
            </div>

  <?php require_once 'reservation_database.php'; ?>
  <br>
<table>
  <tr>
    <th>ID</th>
    <th>Username</th>
    <th>Product Name</th>
    <th>Quantity</th>
    <th>Payment</th>
    <th colspan="1">Action</th>
  </tr>
  <?php while($row = mysqli_fetch_array($search_result)):?>
                <?php 
                    $mysqli = new mysqli('localhost', 'root', '', 'pims_db2');
                    $result = $mysqli->query("SELECT * FROM reservation")
                ?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['username'];?></td>
                    <td><?php echo $row['product_name'];?></td>
                    <td><?php echo $row['quantity'];?></td>
                    <td><?php echo $row['payment'];?></td>
                    <td>

                        <a href="reservation.php?delete=<?php echo $row['id']; ?>"
                        class="btn">Delete</a>
                    </td>
                </tr>
                <?php endwhile;?>
</table>
</form>
</body>
</html>