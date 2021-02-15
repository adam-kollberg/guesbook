<?php

$dsn = "mysql:host=localhost;dbname=community";
$user = "root";
$password = "";


$pdo = new PDO($dsn, $user, $password);
echo "<h2>USERS</h2>";
$stm = $pdo->query("SELECT id, name , email, password FROM users");


while ($row = $stm->fetch()) {
    echo  "<br>" . $row['id'] . "<strong> Name:</strong> " . $row['name'] . "<strong> Email:</strong> " . $row['email'] . "<strong> Pass:</strong> " . $row['password'];
}



echo "<h2> signup</h2>"

?>


<form method = "post" action="handleSignup.php">

<input type="text" placeholder="name" name ="name"> <br>
<input type="text" placeholder="email" name ="email"> <br>
<input type="password" placeholder="password" name ="password"> <br>
<input type="submit" value="sign up">
<input type="hidden" name="id">



</form>