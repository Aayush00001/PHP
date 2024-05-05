//w.a.p.s for maths function
<?php
	function line()
	{
		echo"<font color='green'>**************************************</font><br>";
	}
	echo "<h1><font color='blue'>demo for math function</font></h1><br>";
	line();
	echo "(1)abs()=".abs(-5)."<br>";
	echo "(1)abs()=".abs(44.5)."<br>";
	line();
	echo "(2)ceil()=".ceil(4.5)."<br>";
	echo "(2)ceil()=".ceil(-5.10)."<br>";
	line();
	echo "(3)floor()=".floor(4.8)."<br>";
	echo "(3)floor()=".floor(-5.1)."<br>";
	line();
	echo "(4)round()=".round(4.556)."<br>";
	echo "(4)round()=".round(4.516,2)."<br>";
	line();
	echo "(5)fmod()=".fmod(10,3)."<br>";
	line();
	$val=array(1,4,5,6,8,2);
	echo "(6)min()=".min($val)."<br>";
	echo "(6)min()=".min(3,5,6,7,0)."<br>";
	line();
	echo "(7)max()=".max($val)."<br>";
	echo "(7)max()=".max(3,5,6,7,0)."<br>";
	line();
	echo "(8)pow()=".pow(2,4)."<br>";
	line();
	echo "(9)sqrt()=".sqrt(9)."<br>";
	line();
	echo "(10)rand()=".rand()."<br>";
	echo "(10)rand()=".rand(1,6)."<br>";
	line();
	echo "(11)is_finite()=".is_finite(5)."<br>";
	line();
	echo "(12)is_infinite()=".is_infinite(log(0))."<br>";
	line();
?>