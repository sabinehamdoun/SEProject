<?php
session_start();
include("connection.php");
include 'productconnection.php';
//require_once('productconnection.php');

$tt=$_SESSION['logged_id'];
echo $tt;
$mysql = $connection->prepare("INSERT INTO user_products(user_id,product_id) VALUES (?,?)");
	$mysql->bind_param("ii", $_SESSION['logged_id'], $_GET['productId']);
	$mysql->execute();


	header("Location:shop.php");

?>
<!-- <img src=""> -->