<!DOCTYPE HTML>
<html>  
<body>

<form action="php_17.php" method="get">
Introdueix nom:   <input type="text" name="dada[]"><br>

    
<input type="Submit" name="llistar" value="llistar"> 
</form>  


<?php
    if (isset($_GET['dada'])){
    
            $dada=$_GET['dada'];
    
         }
        
        else{
              $dada=" ";
        }


$paraules = array();

   
array_push($paraules, $dada);



    if (isset($_GET['llistar'])){
        foreach($paraules as $paraula)
             print_r($paraula);
       
     }  


?>
    
</body>
</html>