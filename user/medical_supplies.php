<?php

session_start();



?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pharmacy Inventory Management System</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="products.css">
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
                        <a class="nav-link" href="home.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="medical_supplies.php">MEDICAL SUPPLIES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="protection_and_hygine.php">PROTECTION & HYGINE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="mom_and_baby.php">MOM & BABY</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="covid_essential.php">COVID ESSESTIAL</a>
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
        <h3>MEDICAL SUPPLIES</h3>
    
</div>

<div class="section" style="width: 90%;">
  <?php
  $connect = mysqli_connect('localhost','root','','pims_db2');
  $query = 'SELECT * FROM inventory WHERE category="Medical Supplies"';
  $result = mysqli_query($connect, $query);
  if($result):
    if(mysqli_num_rows($result)>0):
      while($product = mysqli_fetch_assoc($result)):
        //print_r($product);
        ?>
  <div class="lalagyan">
      <form method="POST" action="create_reservation.php">
        <div class="product">
          <img src="../admin/images/<?php echo $product['image']; ?>" class="img-responsive" />
          <h4 style="font-size: 18px;color:#526dfe;margin-left: 10px;"><?php echo $product['product_name']; ?></h4>
          <h4 style="margin-left: 10px;"><?php echo $product['price']; ?></h4>
          <input type="text" name="quantity" class="form-control" style="width: 90%;" value="1" />
          <input type="hidden" name="name" class="form-control" value="<?php echo $product['name']; ?>" />
          <input type="hidden" name="price" class="form-control" value="<?php echo $product['price']; ?>" />
          <input type="hidden" name="username" class="form-control" value="<?php echo $_SESSION['username'];?>" />
          <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-info" value="Reserved" />
        </div>

      </form>
  </div>
  <?php
  endwhile;
endif;
endif;
?>
</div>

</body>
</html>