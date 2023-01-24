<?php
include("connection.php");


$query= "SELECT * FROM products";
$stmt= $connection->prepare($query);
$stmt->execute();
$results=$stmt->get_results();
echo $results;
?>