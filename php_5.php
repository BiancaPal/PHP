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
for($n1=0;$n1<$files;$n1++){
    echo "<tr>";
    echo "<td>$n1</td>";
    echo "</tr>";
}
echo "</table>";
?>