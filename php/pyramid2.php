<?php
$n=1;
for($i=1;$i<=5;$i++)
{
	for($j=1;$j<=$i;$j++)
	{
		echo $n%2 ."   " ;
		$n++;
	}
	echo "<br>";
}
?>