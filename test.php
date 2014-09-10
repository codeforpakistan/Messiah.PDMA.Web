<?php
$ImagesArray = "a2hhbgA=\n";
$binaryOfImage = base64_decode($ImagesArray);
  // die($binaryOfImage);
header('Content-Type: bitmap; charset=utf-8');
$file = fopen('xyz.jpg', 'wb');
fwrite($file, $binaryOfImage);
fclose($file);