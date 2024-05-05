<!--Write a php script for func_get_args function-->
<?php
function fun()
{
	$numarg=func_num_args();
	echo "Total Number of arguments are: ".$numarg;
	echo "<br> The Arguments are:";
	$list=func_get_args();
	foreach($list as $data)
		echo "<br>".$data;
}
fun(10,'A',30); 
?>