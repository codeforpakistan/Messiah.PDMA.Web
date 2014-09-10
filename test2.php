<?php
function base64_encode_image ($filename=string,$filetype=string) {
    if ($filename) {
        $imgbinary = fread(fopen($filename, "r"), filesize($filename));
        return 'data:image/' . $filetype . ';base64,' . base64_encode($imgbinary);
    }
}

echo base64_encode_image ('img\messiah-logo.png','png') . "<br><br><br>";

$imgfile = "img\test.jpg";
echo file_exists($imgfile) ? 'ok' : 'file not found';
$handle = fopen($imgfile, "r");

$imgbinary = fread(fopen($imgfile, "r"), filesize($imgfile));

echo '' . base64_encode($imgbinary) . '';

