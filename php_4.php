
<html>
    
    <head>
    <title> Taula de multiplicar</title>
    </head>
    
    <body>
        
        <form>
      <input type="number" name="numero"/>
      <input type="submit" value="Envia"/>

        </form>


        <?php
        
        if (isset($_GET['numero'])){
    
            $numero=$_GET['numero'];
    
         }
        
        else{
              $numero=0;
        }
        
        for($n1=1;$n1<11;$n1++){
            
            $resultat=$n1*$numero;
            echo $n1."*".$numero."=".$resultat."<br>"; 
    
        }
        ?>
    
    </body>


</html>

