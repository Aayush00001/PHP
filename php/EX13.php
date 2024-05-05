//w.a.s.p for local and glboal variable in user defined function
<?php 
	$x=5;
	function MyTest()
	{
		$y=10;
		global $x;
		echo "<P>varible x inside function is:",$x;
		echo "<br> local varible value is:",$y;
	}
	MyTest();
	echo "<p>varible x outside function is:$x</P>";
?>