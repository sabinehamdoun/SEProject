<?php

include("connection.php");

if(isset($_POST["new_product_id"]) && $_POST["new_product_id"] != ""){
	$new_product_id = $_POST["new_product_id"];
}else{
	die(" ALERT id");
}

if(isset($_POST["new_product_name"]) && $_POST["new_product_name"] != ""){
	$new_product_name = $_POST["new_product_name"];
}else{
	die(" ALERT name ");
}

if(isset($_POST["new_image_url"]) && $_POST["new_image_url"] != ""){
	$new_image_url = $_POST["new_image_url"];
}else{
	die(" ALERT img url ");
}


if(isset($_POST["new_product_price"]) && $_POST["new_product_price"] != ""){
	$new_product_price = $_POST["new_product_price"];
}else{
	die(" ALERT email ");
}

if(isset($_POST["new_product_description"]) && $_POST["new_product_description"] != ""){
	$new_product_description = $_POST["new_product_description"];
}else{
	die(" ALERT discrip");
}


if(isset($_POST["new_product_color"]) && $_POST["new_product_color"] != ""){
	$new_product_color = $_POST["new_product_color"];
}else{
	die(" ALERT color");
}

	$mysql = $connection->prepare("INSERT INTO products(product_id,color,name,price,discription,image_url) VALUES (?,?,?,?,?,?)");
	$mysql->bind_param("ississ", $new_product_id, $new_product_color, $new_product_name,$new_product_price, $new_product_description,$new_image_url);
	$mysql->execute();
	


	$mysql->close();
$connection->close();

header("Location:Admin(html).php");

?>