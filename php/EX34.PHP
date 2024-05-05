//w.a.p.s for comparison operator
<?php
	echo "<br>";
	$x=100;  
	$y=100;
		var_dump($x == $y);
		echo "<br>";
		var_dump($x === $y);
		echo "<br>";
		var_dump($x != $y);
		echo "<br>";
		var_dump($x <> $y);
		echo "<br>";
		var_dump($x !== $y);
		echo "<br>";
	$x=10;
	$y=50;
		var_dump($x<$y);
		echo "<br>";
		var_dump($x>$y);
		echo "<br>";
		var_dump($x<=$y);
		echo "<br>";
		var_dump($x>=$y);
		echo "<br>";
	$x=5;
	$y=10;
		var_dump($x<=>$y);
		echo "<br>";
	$x=10;
	$y=10;
		var_dump($x<=>$y);
		echo "<br>";
	$x=15;
	$y=10;
		var_dump($x<=>$y);
		echo "<br>";
?>