<?php

session_start();
include("connection.php");

unset($_SESSION["logged_id"]);
unset($_SESSION["logged_bool"]);
unset($_SESSION["loggedinadmin"]);

$stmt2 = $connection->prepare("DELETE FROM user_products;");
$stmt2->execute();


header("Location:StarterPage.php");
?>