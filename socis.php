<!DOCTYPE html>
<html lang="en">
<head>  
</head>
<body>
    


<?php
    if (isset($_GET['dada'])){
    
            $dada=$_GET['dada'];
    
         }
        
        else{
              $dada=" ";
        }

    if (isset($_GET['familia'])){
    
            $familia=$_GET['familia'];
    
         }
        
        else{
              $familia=" ";
        }
    if (isset($_GET['infantil'])){
    
            $infantil=$_GET['infantil'];
    
         }
        
        else{
              $infantil=" ";
        }
    
    if (isset($_GET['localitat'])){
    
            $localitat=$_GET['localitat'];
    
         }
        
        else{
              $localitat=" ";
        }

$arxiu = fopen('socis.txt','a');
fwrite($arxiu,$dada." ".$familia." ".$infantil." ".$localitat."\n");    
$dades = file('socis.txt');
foreach($dades as $data)

    if (isset($_GET['llistar'])){
         echo $data;   
     }  

fclose($arxiu);

echo "Registre guardat correctament tornar."
?>
<break> 
<a href="socis.html">Enllaç a la primera pagina</a>
</body>
</html>