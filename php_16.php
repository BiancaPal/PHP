<!DOCTYPE HTML>
<html>  
<body>

<form action="php_16.php" method="get">
Introdueix nom:   <input type="text" name="dada"><br>

<input type="Submit" name="guardar" value="guardar">    
<input type="Submit" name="llistar" value="llistar"> 
</form>  


<?php
    if (isset($_GET['dada'])){
    
            $dada=$_GET['dada'];
    
         }
        
        else{
              $dada=" ";
        }

$arxiu = fopen('dades.txt','a');

    if (isset($_GET['guardar'])){
        fwrite($arxiu,"$dada \n");    
     }


$dades = file('dades.txt');
foreach($dades as $dada)

    if (isset($_GET['llistar'])){
         echo "$dada <br />";   
     }  

fclose($arxiu);
?>
    
</body>
</html>
