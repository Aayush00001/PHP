<!--Write a php script for func_get_arg function. -->
<?php
function fun()

{
	$numarg=func_num_args();
	echo "Total Number of arguments are: ".$numarg;
	echo "<br> The Arguments are:";
	for($i=0;$i<$numarg;$i++)
		echo "<br>".func_get_arg($i);
}
fun(10,'A',30);
?>