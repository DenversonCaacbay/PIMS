<?php

$mysqli = new mysqli('localhost', 'root', '', 'pims_db2');


$username="";
$product_name ="";
$quantity = "";
$paid = "";


if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM reservation WHERE id=$id");

    $_SESSION['message'] = "Reserved has been remove";

    header("location: reservation.php");
}
?>