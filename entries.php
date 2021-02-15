
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style-2.css">
</head>
<body>
    

<?php

$dsn = "mysql:host=localhost;dbname=entries";
$user = "root";
$password = "";


$pdo = new PDO($dsn, $user, $password);

$stm = $pdo->query("SELECT id, name , email, message FROM guests");




?>

<div class="header">
<h1> ALLA GÄSTBOKSINLÄGG </h1>
</div>
<section>
<div class="wrapper">
  
<?php while ($row = $stm->fetch()) { ?>

  <div class="rows"> 
    
  <h3>Inlägg: <?php echo $row['id']?> </h3>
  
  <h3> Gästinlägg:</h3> <?php echo $row['message']?></p>
  
  <a href="deleteEntrie.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
  <a href="editEntrie.php?edit=<?php echo $row['message'] ?>&id=<?php echo $row['id'] ?>" class="edit_btn">edit</a>
  
</div>
<?php } ?> 

</div>
<section>



<form method = "post" action="handleEntries.php">
<h2>Nytt inlägg</h2>

<input type="text" placeholder="name" name ="name"> <br>
<input type="text" placeholder="email" name ="email"> <br>
<textarea name ="message" placeholder= "Ditt meddelande" value="Skriv ditt inlägg här..."> </textarea> <br>
<input type="submit" value="Skicka inlägg">



</form>






</body>
</html>