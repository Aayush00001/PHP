//w.a.p.s for function argument as a reference varible
<?php
	function add_five($value)
	{
		$value+=5;
	}
	$num=2;
	echo "value before function calling.....$num";
	add_five($num);
	echo "<br>value after function calling.....$num";
?>