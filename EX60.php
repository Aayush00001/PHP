<?php
//w.a.p.s for ow rectangle using gdlibaryfunction
header('content-Type:image/jpeg');
$canvas=imagecreate(400, 400);
$red = imagecolorallocate($canvas,255,0,0);
$black = imagecolorallocate($canvas,0,0,0);
imagerectangle($canvas,100,100,200,200,$black);
imagejpeg($canvas);
imagedestroy($canvas);
?>