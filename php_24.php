<!DOCTYPE html>
<html lang="en">
<head>
    <title>Llistat de socis</title>
</head>
<body>
<h1> Llistat de socis </h1>
<form>

<input type="Submit" name="Individual" value="Individual"> 
<input type="Submit" name="Familiar" value="Familiar">
<input type="Submit" name="Infantil" value="Infantil">
<input type="Submit" name="Localitat" value="Localitat">
</form>  

    
<?php

$myFile = "socis.txt";
$lines = file($myFile);//file in to an array


foreach($lines as $line) 
{
    $var = explode(' ', $line, 2);
    $newData=explode(" ",$line);

if (isset($_GET['Individual'])){
    echo $newData[0]."<br>";
 }  
if (isset($_GET['Familiar'])){
    echo $newData[1]."<br>";
 } 
if (isset($_GET['Infantil'])){
    echo $newData[2]."<br>";
 } 
if (isset($_GET['Localitat'])){
    echo $newData[3]."<br>";
 } 

}
?>
</body>
</html>