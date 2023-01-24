<?php

include("connection.php");


$pId=$_GET['productId'];

	$mysql = $connection->prepare("DELETE FROM user_products WHERE product_id= ($pId) LIMIT 1");
	
	$mysql->execute();
	


	$mysql->close();
$connection->close();

header("Location:cart.php");

?>