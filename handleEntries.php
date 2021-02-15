<?php
$dsn = "mysql:host=localhost;dbname=entries";
$user = "root";
$password = "";


$pdo = new PDO($dsn, $user, $password);

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO guests (name, email, message) VALUES(:name_IN, :email_IN, :message_IN)" ;
$stm = $pdo->prepare($sql);
$stm->bindParam(':name_IN' , $name);
$stm->bindParam(':email_IN' , $email);
$stm->bindParam(':message_IN' , $message);

if($stm->execute()) {
   header("location:entries.php");
} else {

    echo "not";
}


?>
