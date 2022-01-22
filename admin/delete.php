<?php

$mysqli = new mysqli('localhost', 'root', '', 'pims_db2');


$item="";
$price ="";
$stock = "";

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM inventory WHERE id=$id");

    $_SESSION['message'] = "Product been deleted";

    header("location: inventory.php");
}
?>