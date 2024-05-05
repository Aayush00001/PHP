<?php
session_start();
if($_POST['usernm']=="admin" && $_POST['pass']=="admin")
{
	$_SESSION["username"]=$_post['usernm'];
	header("location:welcome.php");
}
else
{
	header("Locatioon:sessionstart1.php");
}
?>