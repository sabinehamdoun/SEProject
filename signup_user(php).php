<?php
session_start();
include("connection.php");
if(isset($_POST["user_id"]) && $_POST["user_id"] != ""){
	$user_id = $_POST["user_id"];
}else{
	die(" ALERT user_id");
}
if(isset($_POST["username"]) && $_POST["username"] != ""){
	$username = $_POST["username"];
}else{
	die(" ALERT username");
		}
if(isset($_POST["first_name"]) && $_POST["first_name"] != ""){
	$first_name = $_POST["first_name"];
}else{
	die(" ALERT first_name ");
}
if(isset($_POST["password"]) && $_POST["password"] != ""){
	$password = hash("sha256",$_POST['password']);
}else{
	die(" ALERT password");
}
if(isset($_POST["last_name"]) && $_POST["last_name"] != ""){
	$last_name = $_POST["last_name"];
}else{
	die(" ALERT last_name");
}


if(isset($_POST["email"]) && $_POST["email"] != ""){
	$email = $_POST["email"];
}else{
	die(" ALERT email");
}

if(isset($_POST["phone_number"]) && $_POST["phone_number"] != ""){
	$phone_number = $_POST["phone_number"];
}else{
	die(" ALERT phone_number");
}


if(isset($_POST["address"]) && $_POST["address"] != ""){
	$address = $_POST["address"];
}else{
	die(" ALERT address");
}

if(isset($_POST["Emergency_Contact_Name"]) && $_POST["Emergency_Contact_Name"] != ""){
	$Emergency_Contact_Name = $_POST["Emergency_Contact_Name"];
}else{
	die(" ALERT Emergency_Contact_Name");
}
if(isset($_POST["Emergency_Contact_Name_phone_number"]) && $_POST["Emergency_Contact_Name_phone_number"] != ""){
	$Emergency_phone_number = $_POST["Emergency_Contact_Name_phone_number"];
}else{
	die(" ALERT Emergency_phone_number");
}
if(isset($_POST["receive_product"]) && $_POST["receive_product"] != ""){
	$receive_product = $_POST["receive_product"];
}else{
	die(" ALERT receive_product");
}

//$connection->prepare("INSERT INTO user(color,name,type,price,discription) VALUES (?,?,?,?,?)");


$mysql = $connection->prepare("INSERT INTO users(user_id,username,password,last_name,first_name,email,phone,address,emergency_name,emergency_num,receive_method) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
	$mysql->bind_param("isssssissis",$user_id,$username,$password,$last_name, $first_name, $email,$phone_number,$address,$Emergency_Contact_Name,$Emergency_phone_number,$receive_product);
	$mysql->execute();

	$mysql->close();
$connection->close();
$_SESSION["logged_id"]=$user_id;
$_SESSION["logged_bool"]=true;
header("Location:index.php");

?>