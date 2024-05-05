<?php
//w.a.p.s for genrate qrcode usind gd libary
	include 'phpqrcode/qrlib.php';
	$text="atmiyauniversity";
	QRcode::png($text);
?>