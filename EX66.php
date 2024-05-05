<?php
header('content-Type:image/jpeg');
$canvas=imagecreate(500,500);
$red = imagecolorallocate($canvas,255,255,255);  
$black=imagecolorallocate($canvas,0,0,0);
imagefill($canvas, 0, 0, $red);
imagestring($canvas, 5, 120, 240,"welcome to atmiya university", $black);
imagejpeg($canvas);
imagedestroy($canvas);
?>