<?php

include("connection.php");


if(isset($_POST["Search"]) && $_POST["Search"] != ""){
	$Search = $_POST["Search"];
}else{
	die(" ALERT search ");
}

header("Location:$Search.php");







?>