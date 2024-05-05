//w.a.p.s for print 0 to 10 num. using continue statement
<?php
	echo "<br>";
	for($x=0;$x<10;$x++)
	{
		if($x==4)
		{
			continue;
		}
		echo "the number is:$x<br>";
	}
?>