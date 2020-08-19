
<!DOCTYPE html>
<html lang="en">

<head>
  
    <title>DADA</title>
</head>

<body>

<form action="session1.php" method="get">

<label for="Dada">Dada:</label>
<input type="text" id="dada" name="dada">
<input type="submit" value="Envia"/>

</form>


<?php
//declarar i assignar valor a una variable
session_start();
if (isset($_GET['dada'])){
    
    $dada=$_GET['dada'];

 }

else{
      $dada=" ";
}

$_SESSION['dada'] = $dada;
echo "Valor de la variable: $dada <br />";
//mostrem un vincle per accedir a session2.php
echo "<a href='session2.php'>Anar a session2</a>";
?>