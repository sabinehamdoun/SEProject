<?php
session_start();
include("connection.php");


if(isset($_POST["quantity"]) && $_POST["quantity"] != ""){
	$quantity = $_POST["quantity"];
}else{
	die(" ALERT quantity");
}
if(isset($_POST["date"]) && $_POST["date"] != ""){
	$date = $_POST["date"];
}else{
	die(" ALERT date ");
}
if(isset($_POST["color"]) && $_POST["color"] != ""){
	$color = $_POST["color"];
}else{
	die(" ALERT color ");
}

$loggedId=$_SESSION['logged_id'];
	$mysql = $connection->prepare("INSERT INTO registreing_painting(color,rooms,user_id,date) VALUES (?,?,?,?)");
	$mysql->bind_param("ssis", $color, $quantity, $loggedId, $date);
	$mysql->execute();


	$mysql->close();
$connection->close();


?>