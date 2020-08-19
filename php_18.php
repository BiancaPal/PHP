<?php

$array = array(5,3,4,1,7);
$suma=0;
for ($i = 0; $i < count($array); $i++)  {
    
        if ($i!=4){
            echo $array[$i]."+";
            $suma=$suma+$array[$i];
        }
        
        else{
            echo $array[$i];
            $suma=$suma+$array[$i];
            
        }
}

echo "=".$suma;
?>