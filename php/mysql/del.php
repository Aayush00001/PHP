<?php
	$link=mysqli_connect("localhost","root","","aayush");
	$str="delete from emp where empno=$_GET[id]";
	if(mysqli_query($link,$str))
		header("location:show.php");
	else
		echo "record not deleted plz check query".$str;
?>
<