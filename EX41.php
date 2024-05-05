//w.a.p.s for create index array and print array value using for loop
<?php
	$cars=array("volvo","bmw","toyota");
	$arrlength=count($cars);
	for($x=0;$x<$arrlength;$x++)
	{
		echo $cars[$x];
		echo "<br>";
	}
?>