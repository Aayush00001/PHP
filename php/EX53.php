//w.a.p.s to display function of arrya sorting
<?php
	$cars=array("volvo","bmw","toyota");
	print_r($cars);
	echo "sorting array:";
	sort($cars);
	print_r($cars);
	rsort($cars);
	echo "<br> array reverse sorting:";
	print_r($cars);
	$age=array("ben"=>"65","peter"=>"12","joe"=>"43");
	echo "<br> associative array:";
	print_r($age);
	asort($age);
	echo "<br> associative assending value:";
	print_r($age);
	ksort($age);
	echo "<br> associative assending ky:";
	print_r($age);
	arsort($age);
	echo "<br> associative desending value:";
	print_r($age);
	ksort($age);
	echo "<br> associative array desending key:";
	print_r($age);
?>