<?php

include("connection.php");

if(isset($_POST["product_id"]) && $_POST["product_id"] != ""){
	$product_id = $_POST["product_id"];
}else{
	die(" ALERT id");
}

if(isset($_POST["product_name"]) && $_POST["product_name"] != ""){
	$product_name = $_POST["product_name"];
}else{
	die(" ALERT name ");
}

	$mysql = $connection->prepare("DELETE FROM PRODUCTS WHERE product_id= ($product_id) ");
	
	$mysql->execute();
	


	$mysql->close();
$connection->close();

header("Location:Admin(html).php");

?>