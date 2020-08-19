<!DOCTYPE HTML>
<html>  
<body>

<form action="php_26.php" method="get">
Introdueix matricula:   <input type="text" name="matricula"><br>
</form>  


<?php

    if (isset($_GET['matricula'])){
    
        $matriculaDelCoche=$_GET['matricula'];

     }
    
    else{
          $matriculaDelCoche=" ";
    }

echo "<br>"."$matriculaDelCoche"."<br>";
$numero = substr($matriculaDelCoche,0,4);
$lletra = substr($matriculaDelCoche,4,3);
//mostrar els numeros i les lletres per separat
echo "<br>"."Numeros: $numero"."<br>". "Lletres: $lletra";


?>