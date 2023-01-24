<?php

include("connection.php");

if(isset($_POST["user_id"]) && $_POST["user_id"] != ""){
	$user_id = $_POST["user_id"];
}else{
	die(" ALERT ");
}
if(isset($_POST["first_name"]) && $_POST["first_name"] != ""){
	$first_name = $_POST["first_name"];
}else{
	die(" ALERT ");
}

if(isset($_POST["last_name"]) && $_POST["last_name"] != ""){
	$last_name = $_POST["last_name"];
}else{
	die(" ALERT ");
}


if(isset($_POST["email"]) && $_POST["email"] != ""){
	$email = $_POST["email"];
}else{
	die(" ALERT ");
}

if(isset($_POST["phone_number"]) && $_POST["phone_number"] != ""){
	$phone_number = $_POST["phone_number"];
}else{
	die(" ALERT ");
}

if(isset($_POST["product_id"]) && $_POST["product_id"] != ""){
	$product_id = $_POST["product_id"];
}else{
	die(" ALERT ");
}

if(isset($_POST["address"]) && $_POST["address"] != ""){
	$address = $_POST["address"];
}else{
	die(" ALERT ");
}

if(isset($_POST["Emergency_Contact_Name"]) && $_POST["Emergency_Contact_Name"] != ""){
	$Emergency_Contact_Name = $_POST["Emergency_Contact_Name"];
}else{
	die(" ALERT ");
}
if(isset($_POST["Emergency_phone_number"]) && $_POST["Emergency_phone_number"] != ""){
	$Emergency_phone_number = $_POST["Emergency_phone_number"];
}else{
	die(" ALERT ");
}
if(isset($_POST["receive_product"]) && $_POST["receive_product"] != ""){
	$receive_product = $_POST["receive_product"];
}else{
	die(" ALERT ");
}

//$connection->prepare("INSERT INTO user(color,name,type,price,discription) VALUES (?,?,?,?,?)");


$mysql = $connection->prepare("INSERT INTO users(user_id,last_name,first_name,email,phone,address,emergency_name,emergency_num,receive_method) VALUES (?,?,?,?,?,?,?,?,?)");
	$mysql->bind_param("isssissis",$user_id,$last_name, $first_name, $email,$phone_number,$address,$Emergency_Contact_Name,$Emergency_phone_number,$receive_product);
	$mysql->execute();

	$mysql->close();
$connection->close();


?>