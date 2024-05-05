<?php
//w.a.p.s for genrate qrcode for website link using gdlibray
	include 'phpqrcode/qrlib.php';
	$link="https://www.w3schools.com/";
	QRcode::png($link);
?>