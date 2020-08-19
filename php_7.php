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
    if ($n1%2==0){
         echo "<td style='background-color:green'>$n1</td>";
    }
    else {
         echo "<td style='background-color:blue'>$n1</td>";
    }
  
    echo "</tr>";
}


echo "</table>";
?>