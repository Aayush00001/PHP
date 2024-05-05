 <?php
//image string
header('Content-Type:image/jpeg');
$canvas=imagecreate(400, 400);
$red = imagecolorallocate($canvas,255,0,0);  
$black=imagecolorallocate($canvas,0,0,0);
imagefill($canvas,0,0, $red);
imagestring($canvas,5,10,50,"Copyrights Programmerblog.net", $black);
imagejpeg($canvas);
imagedestroy($canvas);
?>