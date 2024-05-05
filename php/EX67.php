<!--Write a php script for fun_num_args function.-->
<?php
function fun()
{
	$numarg=func_num_args();
	echo "Total Number of arguments are: ".$numarg;
}
fun(10,20,30);
?>