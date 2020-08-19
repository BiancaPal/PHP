<!DOCTYPE html>
<html lang="en">
<head>
    <title>LIST</title>
</head>
<body>
<form method="post" action="list.php">
  <select name="taskOption">
    <option value="first">First</option>
    <option value="second">Second</option>
    <option value="third">Third</option>
  </select>
  <input type="submit" value="Submit the form"/>
</form>
<?php
   if (isset($_POST['taskOption'])){
    
    $level=$_POST['taskOption'];
    echo $level;

 }

else{
      $level=" ";
}
?>
</body>
</html>

