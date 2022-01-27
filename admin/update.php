<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'pims_db');

	// initialize variables
    $id = "";
	$choice = "";
	$new = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['product_id'];
    $choice = $_POST['choice'];
    $product = $_POST['product'];


    mysqli_query($db, "UPDATE medical_supplies SET $choice = '".$new."' WHERE id = '".$id."'");
    echo '<script>
	window.location = "../medical_supplies.php";
	alert("Update successfully");
	
	 </script>';
}
else{
    echo '<script>
	window.location = "update_1.php";
	alert("Update Failed");
	
	 </script>';
}
?>