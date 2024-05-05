<?php
	$fnm=$_POST['fname'];
	$lnm=$_POST['lname'];
	$sub=$_POST['fav_language'];
	$car=$_POST['vehicle'];
	echo "<br>First Name is: ".$fnm;
	echo "<br>Last Name is: ".$lnm;
	echo "<br>Favorite Subject is: ".$sub."<br>";
	print_r($car);
?>