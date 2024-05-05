//w.a.p.s for Associative array using foreach loop
<?php
	$age=array(70=>"35","ben"=>"37","joe"=>"43");
	foreach($age as $x=>$x_value)
	{
		echo "key=".$x.",value=".$x_value;
		echo "<br>";
	}
?>