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
$payment = $_POST['payment'];

	$sql = "UPDATE reservation SET payment = 'PAID' WHERE username ='$username'";

	if(!mysqli_query($con, $sql))
	{
		echo 'Not inserted.';
	}
	
	else {
		echo '<script>
		window.location = "reservation.php";
		alert("PAID Successfully.");
		</script>';	
	}
?>	