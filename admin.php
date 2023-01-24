<?php
include("connection.php");


if(isset($_POST["username"]) && $_POST["username"] != ""){
	$username = $_POST["username"];
}else{
	die(" ALERT ");
}

if(isset($_POST["password"]) && $_POST["password"] != ""){
	$password = hash("sha256", $_POST["password"]);
}else{
	die("Don't try to mess around bro ;)");
}

?>