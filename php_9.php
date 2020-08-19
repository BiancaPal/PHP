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

echo "<table border=\"1\" width=\100px\">";
echo "<tr>";
for ($n2=1;$n2<$files;$n2++){
  echo "</tr>";
    
 
  echo "<td style='font-size:$n2'>Hola</td>";

    
  echo "</tr>";   
}

echo "</table>";
?>  