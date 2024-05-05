<?php
$i;
$j;
$n=2;
for($i=2;$i<=6;$i++)
{
	for($j=2;$j<=$i;$j++)
	{
		if($n%2==0)
		{
			echo $n*$n." ";
		}
		else
		{
			echo $n*$n*$n." ";
		}		
		$n++;
	}
	echo "<br>";
}
?>