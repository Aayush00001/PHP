<?php
$con=mysqli_connect("localhost","root","","AAYUSH");
$str="create table stud(rollno int(5),name varchar(50),class varchar(10))";
if(mysqli_query($con,$str))
{
	echo $str;
	echo "<br>table created...";
}
else
{
	echo "error in query";
}
?>