<?php
//intentem mostrar les dades de la variable $nom
session_start();
$nom=$_SESSION['nom'];
echo "El valor de la variable és: $nom <br />";
//tornar a la pàgina P32A.php
echo "<a href='P32A.php'>Anar a P32A</a>";
?>