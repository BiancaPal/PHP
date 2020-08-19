<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Validacio d'usuaris amb encriptacio</h1>

<?php //exemple de codificació de dades
//usuari i contrassena
$usuari = $_POST['Usuari'];
$pas = $_POST["Contrassenya"];
//mostrem usuari i contrassenya
echo "usuari: $usuari <br />";
echo "contrassenya: $pas <br />";
//encriptem unidireccionalment la contrassenya
$pas = md5($pas); //això no es podrà descodificar
//mostrem usuari i contrassenya
echo "usuari: $usuari <br />";
echo "contrassenya encriptada: $pas <br />";
?>
</body>
</html>