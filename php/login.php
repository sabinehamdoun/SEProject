<?php
include("connection.php");
if(isset($_POST["name"]) && $_POST["name"] !=""){
    $name=$_POST["name"];
}
else{
    die("Don't try to mess around bro ;)");
}
if(isset($_POST["password"]) && $_POST["password"] !=""){
    $password= hash("sha256", $_POST["password"]);
}
else{
    die("Don't try to mess around bro ;)");
}
$name= $_POST["name"];
$password= hash("sha256", $_POST["password"]);

die($password);

$mysql=$connection->prepare("insert into users (username, password)");
?>