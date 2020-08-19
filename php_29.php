<!DOCTYPE html>
<html lang="en">

<head>
  
    <title>DATA</title>
</head>

<body>

<form action="php_29.php" method="get">

<label for="Data">Data:</label>
<input type="date" id="data" name="data">

</form>


<?php
if (isset($_GET['data'])){
    
    $data=$_GET['data'];

 }

else{
      $data="-";
}

$arxiu = fopen('PHP_29.txt','a');
fwrite($arxiu,$data."\n");    
$dades = file('PHP_29.txt');
foreach($dades as $data)

    if (isset($_GET['llistar'])){
         echo $data;   
     }  

fclose($arxiu);

$myFile = "PHP_29.txt";
$lines = file($myFile);//file in to an array


foreach($lines as $line) {
    $var = explode('/', $line, 1);
    $newData=explode("/",$line);

    $n1;
    $n2;

    echo "<table border=\"1\" width=\100px\">";
    for ($n1=0;$n1<1;$n1++){
           echo "<tr>";
              for ($n2=0;$n2<=2;$n2++){
                 echo "<td width='100'>$newData[$n2]</td>";
                }   
    }
                           
           echo "</tr>";
   
    echo "</table>";

}
?>

</body>

</html>