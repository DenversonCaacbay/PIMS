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
$full_name = $_POST['full_name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];


$sql = "insert into accounts(full_name, username,email, password) values('$full_name ','$username','$email', '$password')";


if(!mysqli_query($con, $sql))
{
	echo 'Not inserted.';
}

else {
	echo '<script>
	window.location = "index.php";
	alert("Registered successfully.");
	
	 </script>';	
}
?>