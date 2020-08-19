<?php
$file = '../green_leaves.png';
$type = 'green_leaves/png';
header('Content-Type:'.$type);
header('Content-Length: ' . filesize($file));
readfile($file);

?>
