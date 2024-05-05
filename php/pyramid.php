<?php
	$n=5;
	$m=10;
for($i=1;$i<=10;$i++)
{
	for($j=1;$j<=$i;$j++)
	{
		if($j%2==0)
		{
			echo $m." ";
			$m++;
		}
	else
		{
			echo $n." ";
		$n++;
		}
	}
	echo "<br>";
}
?>