<?php
$students=array("Usman","Gokul","Aljo","Lekshmi","Nanditha","Swetha","Amal","Arjun");
echo"<b>Normal ArrayL:</b><br>";
print_r($students);
echo"<br><br><b>Ascending Sort :</b><br>";
asort($students);
print_r($students);
echo"<br><br><b>Descending Sort :</b><br>";
arsort($students);
print_r($students);
?>