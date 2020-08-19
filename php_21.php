<?php


$cadena = "la mainada juga amb la pilota de la maria";
$paraules=(explode(" ",$cadena));
print_r ($paraules);
$nVegades=0;
foreach ($paraules as $paraula ) {
    if ($paraula == "la") {
        $nVegades=$nVegades+1;
    }
}
echo "<br />"."Numero de vegades que es repeteix 'la' dins de la frase:".$nVegades;



?>