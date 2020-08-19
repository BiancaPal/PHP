<?php
$usuari = array(
    "Joan" => "A",
    "Pere" => "B",
    "Anna" => "C",
    "Maria"=> "D"
);

$getUsuari=$_GET["usuari"];
$getPassword=$_GET["password"];
   
if ($usuari[$getUsuari]==$getPassword){
  echo "Benvingut"."Sr/Sra/Srta".$getUsuari."\n"; 
    //BENVINGUT
}else {
    header("Location: usuari.html");
}  //ERROR


?>
