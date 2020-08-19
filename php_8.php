<form>
      <input type="number" name="files"/>
      <input type="submit" value="Envia"/>

</form>


<?php


if (isset($_GET['files'])){
    
    $files=$_GET['files'];
    
}
else{
    $files=0;
}

$opacity=0;
$whatToSum=1/$files;


echo "<table border=\"1\" width=\100px\">";

echo "</tr>";
for($n1=0;$n1<$files;$n1++){
 echo "<td style='background-color:rgba(0,0,0,$opacity)'>$n1</td>";
    $opacity=$opacity+$whatToSum;
  
    }


    
echo "</tr>";

echo "</table>";
?>  




