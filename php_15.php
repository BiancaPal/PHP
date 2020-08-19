<!DOCTYPE HTML>
<html>  
<body>

    
<form action="php_15.php" method="get">
Numerador: <input type="number" name="numero1"><br>
Numerador: <input type="number" name="numero2"><br>
<input type="Submit" name="Suma" value="Suma">    
<input type="Submit" name="Resta" value="Resta">    
<input type="Submit" name="Multiplica" value="Multiplica">    
<input type="Submit" name="Divideix" value="Divideix">    
</form>
    

</body>
     <?php


      
      if (isset($_GET['numero1'])){
    
            $numero1=$_GET['numero1'];
    
         }
        
        else{
              $numero1=0;
        }
    
      if (isset($_GET['numero2'])){
    
            $numero2=$_GET['numero2'];
    
         }
        
        else{
              $numero2=0;
        }
    
      $resultatSuma=$numero1+$numero2;
      $resultatResta=$numero1-$numero2;
      $resultatMultiplicacio=$numero1*$numero2;
      $resultatDivisio=$numero1/$numero2;
    
    if (isset($_GET['Suma'])){
        echo "La suma es ".":".$resultatSuma;;
     }
    
    if (isset($_GET['Resta'])){
        echo "La resta es ".":".$resultatResta;;
     }
    if (isset($_GET['Multiplica'])){
        echo "La multiplicacio es ".":".$resultatMultiplicacio;;
     }
    if (isset($_GET['Divideix'])){
        echo "La divisió es ".":".$resultatDivisio;;
     }
     

      ?>
</html>