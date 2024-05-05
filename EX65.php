//w.a.p.s for default argument in user define function
<br>
<?php
	function add(int $a,int $b=10,int $c=30)
	{
		echo"addition is:".($a+$b+$c);
	}
	add(10);
	add(10,5);
	add(20,5,15);
?>