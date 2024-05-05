<?php
if(isset($_POST['updated']))
{
	$link=mysqli_connect("localhost","root","","AAYUSH");
	$str="updated stud set name='$_POST[txtname]',class='$_POST[txtclass]' where rollno=$_POST[txtno]";
	if(mysqli_query($link,$str))
		echo "record updated";
	else
		echo "record not updated plz check query".$str;
}
?>
<html>
<body>
<form actoion="" method="POST">
	roll no:<input type="text" name="txtno"><br>
	name:<input type="text" name="txtname"><br>
	class:<input type="text" name="txtclass"><br>
	<input type="submit" name="updated" value="updated">
</form>
</body>
</html>