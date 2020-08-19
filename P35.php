<!DOCTYPE html>
<html lang="en">

<head>
  
    <title>DATA</title>
</head>

<body>

<form action="P35.php" method="get">

<label for="Data">Data:</label>
<input type="text" id="usuari" name="usuari">

</form>


<?php
if (isset($_GET['usuari'])){
    
    $usuari=$_GET['usuari'];

 }

else{
      $usuari="-";
}
$ara = getdate();
$arxiu = fopen('P35.txt','a');
fwrite($arxiu,$usuari." ".$ara[year]." ".$ara[mon]." ".$ara[mday]." ".$ara[wday]." ".$ara[hours]." ".$ara[minutes]." ".$ara[seconds]."\n");    
$dades = file('P35.txt');
foreach($dades as $data)

    if (isset($_GET['llistar'])){
         echo $data;   
     }  

fclose($arxiu);

$myFile = "P35.txt";
$lines = file($myFile);//file in to an array


foreach($lines as $line) {
    $var = explode(' ', $line, 1);
    $newData=explode(" ",$line);

    $n1;
    $n2;

    echo "<table border=\"1\" width=\100px\">";
    for ($n1=0;$n1<1;$n1++){
           echo "<tr>";
              for ($n2=0;$n2<=6;$n2++){
                 echo "<td width='100'>$newData[$n2]</td>";
                }   
    }
                           
           echo "</tr>";
   
    echo "</table>";

}
?>

</body>

</html>