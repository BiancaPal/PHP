<?php
$cadena = "la mainada juga amb la pilota de la maria";
$paraules=(explode(" ",$cadena));
print_r ($paraules);
$nParaules=0;
for ($i=0; $i < count($paraules); $i++) { 
    $nParaules=$nParaules+1;
}
echo "<br />"."Numero de paraules dins de la frase:".$nParaules;
?>

