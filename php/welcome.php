<?php
session_start();
if($_SESSION['username'])
{
	echo "welcome ....".$_SESSION['username'];
	echo "<br><a href='sessiondestroy1.php'>logout</a>";
}
else 
{
	header("location:sessionstart1.php");
}
?>