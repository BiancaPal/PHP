<form>
      <input type="number" name="columnes"/>
      <input type="submit" value="Envia"/>

</form>


<?php


if (isset($_GET['columnes'])){
    
    $columnes=$_GET['columnes'];
    
}
else{
    $columnes=0;
}

echo "<table border=\"1\" width=\100px\">";
echo "<tr>";
for($n1=0;$n1<$columnes;$n1++){
    echo "<td>$n1</td>";
}
echo "</tr>";
echo "</table>";
?>