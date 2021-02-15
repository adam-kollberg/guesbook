<?php

$dsn = "mysql:host=localhost;dbname=entries";
$user = "root";
$password = "";


$pdo = new PDO($dsn, $user, $password);



$editID = $_GET['id'];
$editMessage = $_GET['message'];

$sql = "UPDATE guests SET message='$editMessage' WHERE(id='$editID')";
$stm = $pdo->prepare($sql);



if($stm->execute()) {
    header("location:entries.php");
    
 } else {
 
     echo "not";
 }


 ?>