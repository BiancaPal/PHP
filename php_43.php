<?php

print_r($_POST);
echo "<br><br>";

echo "ARRAY: <br>";
foreach ($_POST['noms'] as $nom) {
  echo $nom . "<br>";
}
?>