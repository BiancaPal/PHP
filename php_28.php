<!DOCTYPE HTML>
<html>  
<body>

<form action="php_28.php" method="get">
Introdueix Nº de compte bancari:   <input type="text" name="numeroBancari"><br>
</form>  


<?php

    if (isset($_GET['numeroBancari'])){
    
        $numeroBancari=$_GET['numeroBancari'];

     }
    
    else{
          $numeroBancari=" ";
    }

echo "<br>"."$numeroBancari"."<br>";
$EEEE = substr($numeroBancari,0,4);
$OOOO = substr($numeroBancari,4,4);
$DD = substr($numeroBancari,8,2);
$NNNNNNNNNN = substr($numeroBancari,0,9);
//mostrar els numeros i les lletres per separat
echo "<br>"."Codi de la entitat: $EEEE"."<br>". "Codi de l'oficina: $OOOO"."<br>"."Dígits de control: $DD"."<br>"."Nº de compte: $NNNNNNNNNN";


?>