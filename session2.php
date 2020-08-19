<?php
//intentem mostrar les dades de la variable $dada
session_start();
$dada=$_SESSION['dada'];
echo "El valor de la variable és: $dada <br />";
//tornar a la pàgina session1.php
echo "<a href='session1.php'>Anar a session1</a>";
?>