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

if(isset($_POST['username']) && isset($_POST['full_name']) )
{
	$full_name = $_POST['full_name'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$query = mysqli_query($con,"SELECT * FROM accounts WHERE username='$username' ");
	
	if(mysqli_num_rows($query) > 0)
	{
		echo '<script>
		window.location = "index.php.";
		alert("Username Already Exists !");
		</script>';	
	}
	else
	{
		$sql = "insert into accounts(full_name, username,email, password) values('$full_name ','$username','$email', '$password')";
		if(!mysqli_query($con, $sql))
		{
			echo 'Not inserted.';
		}
		else 
		{
			echo '<script>
			window.location = "index.php.";
			alert("Registered Successfully");
			</script>';
			
		}
	}

}
?>

