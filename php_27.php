<!DOCTYPE html>
<html lang="en">
<head>
    <title>NIE/NIF</title>
</head>
<body>
<form method="post" action="php_27.php">
<select name="IdentificadorFiscal">
    <option value="NIF">NIF</option>
    <option value="NIE">NIE</option>
  </select>
Introdueix NIE/NIF:   <input type="text" name="identificadorFiscal"><br>
<input type="submit" value="Envia"/>
</form>
<?php
   if (isset($_POST['IdentificadorFiscal'])){
    
    $identificadorFiscal=$_POST['IdentificadorFiscal'];
    }else{
    $identificadorFiscal="";
    }

    if (isset($_POST['identificadorFiscal'])){
    
        $IdFiscal=$_POST['identificadorFiscal'];

     if ($identificadorFiscal=="NIF"){
        $numero = substr($IdFiscal,0,8);
        $lletra = substr($IdFiscal,8,1);
        //mostrar els numeros i les lletres per separat
        echo "<br>"."Numeros: $numero"."<br>". "Lletres: $lletra";
       }
       
     if ($identificadorFiscal=="NIE"){
        $lletra1 = substr($IdFiscal,0,1);
        $numero = substr($IdFiscal,1,7);
        $lletra2 = substr($IdFiscal,8,1);
        //mostrar els numeros i les lletres per separat
        echo "<br>"."Numeros: $numero"."<br>"."Lletres: $lletra1.$lletra2";
       }
    
    }else{
    $IdFiscal=" ";
}
?>
</body>
</html>