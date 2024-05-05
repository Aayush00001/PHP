//write a php script for array function
<?php
	echo "<body><font color'blue'><h1>demo for array function</h1></font>";
	function line()
	{
		echo "<font color='blue'><br>***********************************<br></font>";
	}
	$class=array('a','b','c','d');
	echo "(1)count(array variable)=".count($class);
	line();
	$student=array(1,'axita');
	list($rollno,$name)=$student;

	echo"(2)list(mixed var1,var2,.......varN)=";
	echo"student name is:".$name."and student rollno is".$rollno;
	line();

	echo"(3)in array(value to be searchd arraytb variable)=".in_array("b",$class);
	echo"<br>(3)in_array(value to be searched array variable)=";
	if(in_array("b",$class))echo"element is in array";
	else
		echo "element is not in array";
	line();

	echo "(4) current (array variable)=".current($class);
	line();

	echo "(5) next(array variable)=".next($class);
	line();

	echo"(6)prev(array variable)=".prev($class);
	line();

	echo"(7)end(array variable)=".end($class);
	line();
	$arr=array('b','z','j','a');

	echo"(8)sort()=";
	sort($arr);
	print_r($arr);
	line();

	echo "(9)rsort()=";
	rsort($arr);
	print_r($arr);
	line();

	$arr=array('a'=>'zyx','x'=>'jkl');
	echo"(11)arsort()=";
	arsort($arr);
	print_r($arr);
	line();

	echo "(12)array_mearge()=";
	$arr1=array("meena","leena");
	$arr2=array("teena","reena");
	$arr3=array_merge($arr1,$arr2);
	print_r($arr3);
	line();
	array_push($arr1,"abc");
	print_r($arr1);
	line();
	array_pop($arr1);
	print_r($arr1);
	line();
?>