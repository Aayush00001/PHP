//w.a.p.s for pprint marksheet of five subject
<?php
	echo "<br>";
	$mk1=78;
	$mk2=98;
	$mk3=87;
	$mk4=79;
	$mk5=96;
	$name="aayush";
	$roll=35;
	$tot=$mk1+$mk2+$mk3+$mk4+$mk5;
	$avg=$tot/5;
	echo("name:".$name);
	echo "<br>";
	echo("rollno:".$roll);
	echo "<br>";
	if($avg>=70)
		echo("first class");
	elseif($avg>=60&&$avg<70)
		echo("second class");
	elseif($avg>=50&&$avg<60)
		echo("third class");
	elseif($avg>=31&&$avg<50)
		echo("pass");
	else 
		echo("second class");
?>
	
	
