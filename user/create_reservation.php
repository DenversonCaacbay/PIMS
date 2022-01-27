<?php
session_start();

// Database connection
$con = mysqli_connect('localhost','root','');


if(!$con)
{
	echo 'Not connected to the server.';
}

if(!mysqli_select_db($con, 'pims_db2'))
{
	echo 'Database not selected.';
}

$username = $_POST['username'];
$product_name = $_POST['product_name'];
$quantity = $_POST['quantity'];

$sql = "insert into reservation (username, product_name, quantity) values ('$username','$product_name', '$quantity')";


if(!mysqli_query($con, $sql))
{
	echo 'Not inserted.';
}

else {
	echo '<script>
	window.location ="home.php";
    alert("Reserved successfully.");
	
	 </script>';	
}