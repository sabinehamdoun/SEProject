<?php

include("connection.php");


if(isset($_POST["height"]) && $_POST["height"] != ""){
	$height = $_POST["height"];
}else{
	die(" ALERT height");
}
if(isset($_POST["width"]) && $_POST["width"] != ""){
	$width = $_POST["width"];
}else{
	die(" ALERT width");
}
if(isset($_POST["date"]) && $_POST["date"] != ""){
	$date = $_POST["date"];
}else{
	die(" ALERT date ");
}
if(isset($_POST["image_url"]) && $_POST["image_url"] != ""){
	$image_url = $_POST["image_url"];
}else{
	die(" ALERT image url ");
}

$loggedId=$_SESSION["logged_id"];

	$mysql = $connection->prepare("INSERT INTO registreing_wp(image_url,date_of_receive,width,height,user_id) VALUES (?,?,?,?,?)");
	$mysql->bind_param("ssiii",$image_url,$date, $width,$height,$loggedId);
	$mysql->execute();
	$mysql->close();
$connection->close();
header("Location:index.php");


?>