<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="php_tasks">
<h1>uppgift1</h1>
<?php
//1. Använd loopen från innan, fast istället för att skriva ut varje siffra: 
//Lägg ihop sifforna i en ny variabel samt skriv ut den variabeln med echo efter loopen är slut. 
//Du ska alltså lägga ihop alla värden till en variabel $sum.

$sum = 0;
for ($x = 0; $x <= 10; $x++) {
$sum += $x;
echo "The number is: $sum <br>";
}


?>
</div>




<div class="php_tasks">
<h1>uppgift2</h1>
<?php

//Skapa en for-loop som skriver ut varannat tal. 
//Loopen ska gå från 0 till 10. Använd loopen från ovan.
for ($x = 0; $x <= 10; $x+=2) {
$even = $x;
    echo "The number is: $even <br>";
    }
?>
</div>

<div class="php_tasks">
<h1>uppgift3</h1>
<?php

//Skriv en for-loop som skriver ut värden åt andra hållet, 
//så att siffrorna skrivs ut 10, 9, 8, 7, 6, 5, 4, 3, 2, 1, 0
    for ($x = 10; $x >= 0; $x--) {
        
        echo " The number is: $x <br>";
    
    }
?>
</div>







<div class="php_tasks">
<h1>uppgift4</h1>
<?php

//Skriv en for-loop med ett condition(if-sats) 
//som gör så att endast siffror som är jämna tal skrivs ut till sidan.
   
for ($i = 0; $i < 10; $i++) {
    if ($i % 2 == 0) {
       echo   " $i is even" ;
    } else {
       echo " $i is odd";
    }
}



?>
</div>



<div class="php_tasks">
<h1>uppgift5</h1>
<?php

//Skriv en for-loop med ett condition(if-sats) 
//som gör så att endast siffror som är jämna tal skrivs ut till sidan.
$i=0; 
while ($i <= 10) {
    if ($i % 2 == 0) {
       echo   " $i is even" ;
    } else {
       echo " $i is odd";
    }
    $i++;
}



?>
</div>
<div class="php_tasks">
<h1>uppgift6</h1>
<?php

//Vad är skillnaden på de här två scripten? Vad kommer de båda skriva ut och varför?

$num = 0; do{
    echo $num;
    $num++; }while($num < 0);

?>
</div>



<div class="php_tasks">
<h1>uppgift7</h1>
<?php
 
$numSheep = 4;
$monthsToPrint = 12;
 
for ($i = 1; $i <= $monthsToPrint; $i++) {
    $numSheep = $numSheep * 4;
    echo "there will be $numSheep sheep after $i month(s)!<br>";
}
?>
</div>




<div class="php_tasks">
<h1>uppgift7</h1>
<?php
 

$mjau = 4;
switch ($mjau) {
case 1:
echo "mjau";
break;
case 2:
echo "mjau mjau";
break;
case 3:
echo "mjau mjau";
break;
case 4:
 echo "mjau mjau mjau mjau";
break;
case $mjau>5:
 echo "😾";
break;
default:
echo "you typed 0";
}
?>
</div>




<div class="php_tasks">
<h1>uppgift8 Array</h1>
<?php
 
$your_array = [23, 45, 54, 12, 77];
 
echo $your_array[0] . "and" . $your_array[4];
// 1 och fyra index
 
?>
</div>



<div class="php_tasks">
<h1>uppgift9 Array</h1>
<?php
 
$your_array = [23, 45, 54, 12, 77];
 
echo $your_array[4] = 1;
 
foreach($your_array as $value){
    echo $value . "<br>";
}
 
?>



</div>
 

<div class="php_tasks">
<h1>uppgift10 Array</h1>
<?php
 
$best_array = [1, 2, 3, 4, 5];
 
foreach($best_array as $value){
    echo $value . "<br>";
}
 
?>



</div>



<div class="php_tasks">
<h1>uppgift11 Array</h1>
<?php
 
$best_array = [1, 2, 3, 4, 5];
 
$sum = 1;
foreach($best_array as $value){
   
    $sum = $value * $sum;
   
    echo " $sum <br>";
}
 
?>



</div>



<div class="php_tasks">
<h1>uppgift12 Array</h1>
<?php
 
 $ok_array = ["fine", "FINE", "good", "what is thisstuff?", "sweet", "i don't even live here"];
 

foreach($ok_array as $value){

   $intlen = strlen($value);
   if ($intlen <= 5){
  echo " $value <br>";
}
}
 
?>



</div>




<div class="php_tasks">
<h1>uppgift13 Array</h1>
<?php
 
 $worst_array_yet = ["string", true, 42, "another string", 54, true, 1];

 
$sum = 0;
foreach($worst_array_yet as $value){

   $isString = is_string($value);
   $isInt = is_int($value);
   if ($isString) {
  echo " $value <br>";
} 

else if($isInt) {
    $sum += $value;
    
}

}
echo" $sum <br>";
?>



</div>



<div class="php_tasks">
<h1> Forms</h1>
<form method ="POST" action="next.php"> 

<input type="text" placeholder="Namn" name="name">
<textarea name="text" id="" cols="30" rows="10"></textarea>
<input type="checkbox" name="checkbox">
<input type="radio" name="radio">
<input type="color" name="color">
<input type="submit" name="submit">


</form>



</div>




<div class="php_tasks">
<h1> Forms</h1>

<form method ="POST" action="nim.php"> 

<h1>Skriv in spelarnamnen</h1>
<input type="text" placeholder="player 1" name="player1">
<input type="text" placeholder="player 2" name="player2">

<input type="submit" name="submit">


</form>




</div>







</body>
</html>








