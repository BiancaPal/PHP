
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1> Mostrar del revès </h1>

<?php

if (isset($_POST['text'])){
    
    $text = $_POST['text'];
    echo $text.">>>";
    $length= strlen($text);

    for ($i=$length-1; $i>=0 ; $i--) { 
        echo $text[$i];
    }
}

?>
</body>
</html>