<?php
$p=null;
$n=null;
$e=null;
if(isset($_POST['submit']))
{
	$phone=$_POST['phone'];
	$nm=$_POST['nm'];
	$email=$_POST['email'];
	if(preg_match('/^[0-9]{10}+$/', $phone))
	{
		$p="Valid Phone Number";

	}
	else 
	{
		$p="Invalid Phone Number";
	}
	if(preg_match('/^[a-zA-Z]*$/', $nm))
	{
		$n="Valid Name";
	}
	else 
	{
		$n="Invalid Name";
	}
	if(preg_match('/^[0-9 a-z A-Z]+(.|_)[0-9 a-z A-Z]*\@(yahoo|gmail|co|in|rediff)\.(com|in)$/',$email))
	{
		$e="Valid Email- Id";
	}
	else	
	{
		$e="InValid Email- Id";
	}		
}
?>
<form action="#" method="post">
Enter Name:
<input type="text" name="nm"><?php echo $p ?><br>
Enter Phone Number:
<input type="text" name="phone"><?php echo $n ?><br>
Enter E-mail Id:
<input type="text" name="email"><?php echo $e ?><br>

<input type="submit" name="submit">
</form>
