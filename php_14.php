<?php

$taula = "<table width='300px' border='1'>";
$taulaF = "</table>";
$fila = "<tr>";
$filaF = "</tr>";
$casella = "<td>";
$casellaF = "</td>";

echo $taula;
for ($n1=0;$n1<11;$n1++){
       echo $fila;
          for ($n2=0;$n2<=2;$n2++){
               echo $casella.$n1.$casellaF;
               
            }
       echo $filaF;
}
    
echo $taulaF;
?>