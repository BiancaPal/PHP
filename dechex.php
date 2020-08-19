<?php

$decimal=255;
$hex="00".dechex($decimal)."00";
echo "<table border=\"1\" width=\100px\">";

for ($n1=0;$n1<16;$n1++){
       echo "<tr>";
          for ($n2=0;$n2<3;$n2++){
            if ($n2=0){
               $decimal=255;
               $hex="00".dechex($decimal)."00";
               echo "<td style='background-color: #$hex'>$n1</td>";
               echo $hex;
               $decimal=$decimal-17;
               $hex="00".dechex($decimal)."00";
            }
            if ($n2=1){
                $decimal=255;
               $hex=dechex($decimal)."00"."00";
               echo "<td style='background-color: #$hex'>$n1</td>";
               echo $hex;
               $decimal=$decimal-17;
               $hex=dechex($decimal)."00"."00";
            }
            if ($n2=2){
                $decimal=255;
                $hex="00"."00".dechex($decimal);
               echo "<td style='background-color: #$hex'>$n1</td>";
               echo $hex;
               $decimal=$decimal-17;
               $hex="00"."00".dechex($decimal);
            }
                
            }
       echo "</tr>";
    
    
}
    
    
echo "</table>";
?>