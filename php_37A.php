<!DOCTYPE html>
<html lang="en">
<head>
    <title>Opció</title>
</head>
<body>

<form method="post" action="php_37A.php">

<select name="Opcio">
    <option value="Google">Google</option>
    <option value="Generalitat">Generalitat</option>
    <option value="Paeria">Paeria</option>
    <option value="Universitat">Universitat</option>
</select>

<input type="submit" value="Anar"/>

</form>

<?php
    session_start();

    

    if (isset($_POST['Opcio'])){
    
        $Opcio=$_POST['Opcio'];

     if ($Opcio=="Google"){
        
        header('Location:https://www.google.cat/');
        exit;

       }
     if ($Opcio=="Generalitat"){
        
        header('Location:https://web.gencat.cat/');
        exit;

       }
     if ($Opcio=="Paeria"){
        
        header('Location:https://www.paeria.es/');
        exit;

       }
     if ($Opcio=="Universitat"){
        
        header('Location:https://www.udl.cat/');
        exit;

       }
    }
    else {
        $Opcio=" ";
    }
    
    $_SESSION['Opcio'] = $Opcio;
    $ara=getdate();
    
    $_SESSION=$ara;
    
    

?>
</body>
</html>