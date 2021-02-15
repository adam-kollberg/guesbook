<?php


$dsn = "mysql:host=localhost;dbname=entries";
$user = "root";
$password = "";
$pdo = new PDO($dsn, $user, $password);


$deleteID = $_GET['del'];

$sql = "DELETE FROM guests WHERE (id=$deleteID)";
$stm = $pdo->prepare($sql);



if($stm->execute()) {
    header("location:entries.php");
    echo $deleteID . "is deleted";
 } else {
 
     echo "not";
 }


?>