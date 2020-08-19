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
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Filtra per localitat...">
</form>  

    
<?php

$myFile = "socis.txt";
$lines = file($myFile);//file in to an array


foreach($lines as $line) {
    $var = explode(' ', $line, 1);
    $newData=explode(" ",$line);

    echo "<table border=\"1\" width=\100px\">";
    for ($n1=0;$n1<1;$n1++){
           echo "<tr>";
              for ($n2=0;$n2<=3;$n2++){
                 echo "<td width='100'>$newData[$n2]</td>";
                }   
    }
                           
           echo "</tr>";
   
    echo "</table>";

}
?>

</body>

</html>