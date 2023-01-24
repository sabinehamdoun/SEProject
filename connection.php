<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "SE_project";

$connection = new mysqli($server, $username, $password, $dbname);

if($connection->connect_error){
	die("Failed");
}
?>