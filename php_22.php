<?php
$persona = "Planes,Xavier";
$CognomYnom=(explode(",",$persona));
print_r ($CognomYnom);

echo "<br />".$CognomYnom[1]." ".$CognomYnom[0];
?>