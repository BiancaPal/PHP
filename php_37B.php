<?php
session_start();
$Opcio=$_SESSION['Opcio'];
$ara=$_SESSION;
$arxiu = fopen('37.txt','a');
fwrite($arxiu,$Opcio." ".$ara[year]." ".$ara[mon]." ".$ara[mday]." ".$ara[wday]." ".$ara[hours]." ".$ara[minutes]." ".$ara[seconds]."\n");    
$dades = file('37.txt');
foreach($dades as $data)

    if (isset($_GET['llistar'])){
         echo $data;   
     }  

fclose($arxiu);

?>