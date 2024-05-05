<?php
$name="atmiya";
$city="rajkot";
$state="gujara";
$zip=360002;
if(isset($name)and strlen($name)>1)
{
	setcookie("arycookie[name]",$name);
	setcookie("arycookie[city]",$city);
	setcookie("arycookie[state]",$state);
	setcookie("arycookie[zip]",$zip);
	header("location:cokval.php");
}
else
{
	echo "error in rediration";
}
?>