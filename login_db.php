<?php
session_start();


/* Database Connection */
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'pims_db2');
/* ------------------- */



$username = $_POST['username'];
$password = $_POST['password'];


	// make sure form is filled properly
	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

$s = "select * from accounts where username = '$username' && password = '$password' LIMIT 1";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);



if (mysqli_num_rows($result) == 1) { // user found
	// check if user is admin or user
	$logged_in_user = mysqli_fetch_assoc($result);
	if ($logged_in_user['username'] == 'admin') {

		$_SESSION['username'] = $logged_in_user;
		$_SESSION['success']  = "You are now logged in";
		header('location: admin/reservation.php');		  
	}
	else{
		$_SESSION['username'] = $username;
		header('location: user/home.php');
	}
}
else if ($num == 0) {
	echo '<script>
		 window.location = "index.php";
		 
		  </script>';
}
else{
	header('location: index.php');
	
}









/*
if ($num == 1) {
	$_SESSION['username'] = $username;
	echo '<script>
		 window.location = "home.php";
		 
 		 </script>';
}

else if ($num == 0) {
	echo '<script>
		 window.location = "index.php";
		 alert("Incorrect email and/or password.");
		 
 		 </script>';
}

else {
	header('location: index.php');	
}
*/



?>


