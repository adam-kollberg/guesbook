<?php
$dsn = "mysql:host=localhost;dbname=entries";
$user = "root";
$password = "";
$pdo = new PDO($dsn, $user, $password);


$editMessage = $_GET['edit'];
$getID = $_GET['id'];



 
 ?>

<form method="GET" action ="handleEdit.php">
<input type="text" name="message" value="<?php echo $editMessage; ?>"/>
<input type="hidden" name="id" value="<?php echo $getID; ?>"/>
<input type="submit" value="edit">

</form>



