<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `inventory` WHERE CONCAT(`id`,`image`, `product_name`, `price`, `market`, `generic_name`,`category`, `packaging_type`, `quantity`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `inventory`";
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
            <a class="nav-link active" href="inventory.php">INVENTORY</a>
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
        <h3>P.I.M.S INVENTORY</h3>
    
</div>

<div>
<?php require_once 'delete.php'; ?>
<form action="inventory.php" method="post">
            <div class="sub-btn">
                <input type="text" name="valueToSearch" placeholder="Search Product...">
                <input class="btn" type="submit" name="search" value="Search">
                <a class="btn" href="create_form.php">Add New</a>
                <a class="btn" href="update_form.php">Update</a>
            </div>
    <table>
        <tr>
          <th>Id</th>
          <th>Image</th>
          <th>Product Name</th>
          <th>Price</th>
          <th>Marketed By</th>
          <th>Generic Name</th>
          <th>Categories</th>
          <th>Packaging Type</th>
          <th>Quantity</th>
          <th>Action</th>
        </tr>
        <?php while($row = mysqli_fetch_array($search_result)):?>
                <?php 
                    $mysqli = new mysqli('localhost', 'root', '', 'pims_db');
                    $result = $mysqli->query("SELECT * FROM inventory")
                ?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['image'];?></td>
                    <td><?php echo $row['product_name'];?></td>
                    <td><?php echo $row['price'];?></td>
                    <td><?php echo $row['market'];?></td>
                    <td><?php echo $row['generic_name'];?></td>
                    <td><?php echo $row['category'];?></td>
                    <td><?php echo $row['packaging_type'];?></td>
                    <td><?php echo $row['quantity'];?></td>
                    <td>

                        <a href="delete.php?delete=<?php echo $row['id']; ?>"
                        class="btn">Delete</a>
                    </td>
                </tr>
                <?php endwhile;?>
    </table>
</form>
</div>
</body>
</html>