<?php

$server="localhost";
$username="root";
$password="1807";
$dbname="log_in";

$connection=new mysqli($server, $username, $password, $dbname);

if($connection -> connect_error){
    die("Failed");
}



?>