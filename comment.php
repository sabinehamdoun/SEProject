<?php

include("connection.php");

$name=$_POST['name'];
$message=$_POST['message'];


$mysql = $connection->prepare("INSERT INTO comments(name,message) VALUES (?,?)");
	$mysql->bind_param("ss", $name, $message);
	$mysql->execute();

header("Location:contact-us.php");







?>