<?php
header('Location:P33.php');
exit;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  
    <title>USUARI</title>
</head>

<body>

<form action="P32A.php" method="get">

<label for="Nom">Nom del usuari:</label>
<input type="text" id="nom" name="nom">
<input type="submit" value="Envia"/>

</form>


<?php
//declarar i assignar valor a una variable
session_start();
if (isset($_GET['nom'])){
    
    $nom=$_GET['nom'];

 }

else{
      $nom=" ";
}

$_SESSION['nom'] = $nom;
echo "Valor de la variable: $nom <br />";
//mostrem un vincle per accedir a P32B.php
echo "<a href='P32B.php'>Anar a P32B</a>";
?>