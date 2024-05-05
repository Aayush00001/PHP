//w.a.p.s for max and min from three values
<?php
	echo "<br>";
	$a=10;
	$b=20;
	$c=30;
	if($a>$b&&$a>$c)
	{
		echo "$a is maximum.<br>";
	}
	else if($b>$c&&$b>$a)
	{
		echo "$b is maximum.<br>";
	}
	else if($c>$a&&$c>$b)
	{
		echo "$c is maximum.<br>";
	}
	if($a<$b&&$a<$c)
	{
		echo "$a is minimum.<br>";
	}
	else if($b<$a&&$b<$c)
	{
		echo "$b is minimum.<br>";
	}
	else if($c<$a&&$c<$a)
	{
		echo "$c is minimum.<br>";
	}
	else if($a=$b=$c)
	{
		echo "$a and $b and $c all are same";
	}
?>