<?php

$decimal=0;                
$hex="00".dechex($decimal)."00";
echo "<table border=\"1\" width=\100px\">";

for ($n1=0;$n1<16;$n1++){
       echo "<tr>";
          for ($n2=0;$n2<=2;$n2++){

            if($n2==0){
               $decimal=$decimal+5;
               $hex="00".dechex($decimal)."00";
               echo "<td style='background-color: #$hex'>$n1</td>";
               echo $hex;
               
            }
            
            if($n2==1){
               $decimal=$decimal+5;
               $hex=dechex($decimal)."00"."00";
               echo "<td style='background-color: #$hex'>$n1</td>";
               echo $hex;
       
                   
            }
            
            if($n2==2){
               $decimal=$decimal+5;
               $hex="00"."00".dechex($decimal);
               echo "<td style='background-color: #$hex'>$n1</td>";
               echo $hex;
           
                   
            }
              
        
              
              
          
              
       
                }   
}
            
    
         
                
       echo "</tr>";

    
    
echo "</table>";
?>