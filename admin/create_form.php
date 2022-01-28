<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "pims_db2");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
    if(isset($_POST['product_name']))
    {
      $image = $_FILES['image']['name'];
      $product_name = mysqli_real_escape_string($db, $_POST['product_name']);
      $price = mysqli_real_escape_string($db, $_POST['price']);
      $market = mysqli_real_escape_string($db, $_POST['market']);
      $generic_name = mysqli_real_escape_string($db, $_POST['generic_name']);
      $category = mysqli_real_escape_string($db, $_POST['category']);
      $packaging_type = mysqli_real_escape_string($db, $_POST['packaging_type']);
      $quantity = mysqli_real_escape_string($db, $_POST['quantity']);
      $expiration_date = mysqli_real_escape_string($db, $_POST['expiration_date']);
      // image file directory
      $target = "images/".basename($image);

      $query = mysqli_query($db,"SELECT * FROM inventory WHERE product_name='$product_name' ");
      if(mysqli_num_rows($query) > 0)
      {
        echo '<script>
        window.location = "create_form.php.";
        alert("Product Already Exists !");
        </script>';
      }
      else
      {
        $sql = "INSERT INTO inventory (image, product_name, price, market, generic_name,category, packaging_type,quantity,expiration_date) VALUES ('$image', '$product_name','$price','$market','$generic_name','$category','$packaging_type','$quantity','$expiration_date')";
        // execute query
        mysqli_query($db, $sql);
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target))
        {
           echo '<script>
           window.location = "inventory.php";
           alert("Added successfully.");
           </script>';
        }
        else
        {
          echo '<script>
          window.location = "create_form.php";
          alert("NOT ADDED.");
          </script>';
        }
      }
    }
  }
?>
<!DOCTYPE html>
<html>
<head>
<title>PIMS | Add Product</title>
<link rel="stylesheet" href="form.css">
</head>
<style>
  .txtb{
    border:1px solid #1EA1A1;
    margin : 8px 0;
    width:50%;
    padding:12px 18px;
    border-radius: 8px;
}
input[type=file]{
    width: 50%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}
input[type=date]{
    width: 50%;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    resize: vertical;
}
  .box select {
    background-color: #526dfe;
    color: white;
    padding: 12px;
    width: 50%;
    border: none;
    font-size: 20px;
    box-shadow: 0 5px 25px rgba(0, 0, 0, 0.2);
    -webkit-appearance: button;
    appearance: button;
    outline: none;
  }
  
  .box:hover::before {
    color: rgba(255, 255, 255, 0.6);
    background-color: rgba(255, 255, 255, 0.2);
  }
  
  .box select option {
    padding: 30px;
  }

</style>
<body>
<div id="content">
  <form method="POST" action="create_form.php" enctype="multipart/form-data">
      <h3>Create New Product</h3>
      <br>
  	<input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file" name="image">
  	</div>
  	<div>
      <input type="text" name="product_name" placeholder="Product Name" >
      <input type="text" name="price" placeholder="Price">
      <input type="text" name="market" placeholder="Marketed By" >
      <input type="text" name="generic_name" placeholder="Generic Name">
      
      
      <br>
      <select class="txtb box" name="category">
              <option value="Medical Supplies">Medical Supplies</option>
              <option value="Mom And Baby">Mom And Baby</option>
              <option value="Protection And Hygine">Protection And Hygine</option>
              <option value="Covid Essential">Covid Essential</option>
            </select>
            <br>
      <input type="text" name="packaging_type" placeholder="Packaging Type">
      <input type="text" name="quantity" placeholder="Quantity">
      <div style="width: 46%;margin-left:20%;">
          <label><b>Expiration Date :</b></label>
            <input type="date" name="expiration_date" value="2021-12-15">
        </div>
  	</div>
  	<div>
  		<input type="submit" name="upload" value="Create">
      <a class="btn" href="inventory.php">Back</a>
  	</div>
  </form>
</div>
</body>
</html>