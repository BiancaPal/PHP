<?php
$target_dir = "/Users/bianca/.bitnami/stackman/machines/xampp/volumes/root/htdocs/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir)) {
    echo "El arxiu ". basename( $_FILES["fileToUpload"]["name"]). " s'ha pujat correctament.";
} else {
      echo "L'arxiu NO s'ha pujat correctament.";
    }
?>