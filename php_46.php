<?php
$destinatari = 'vostre@correu.com';
$assumpte = 'Prova missatge PHP';
$missatge = 'Hola, això és un missatge de prova.';
$headers = "MIME‐Version: 1.0" . "\r\n"; //tipus associatiu de continguts
$headers .= "Content‐type:text/html;charset=UTF‐8" . "\r\n"; //codificació del correu
$headers .= "From: webmaster@joan.com" . "\r\n"; //adreça d’enviament (no és certa)
$headers .= "Reply‐To: webmaster@joan.com" . "\r\n"; //adreça de resposta
$headers .= "X‐Mailer: PHP/" . phpversion(); // origen de l’enviament
mail($destinatari, $assumpte, $missatge, $headers);
?>