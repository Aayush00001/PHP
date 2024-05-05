<?php
if(isset($_POST['save']))
{
	$link=mysqli_connect("localhost","root","","AAYUSH");
	$rlno=$_POST['rlno'];
	$nm=$_POST['txtname'];
	$str="insert into stud(name,class)values('$nm','$_POST[txtclass]')";
	if(mysqli_query($link,$str))
		echo "record inserted";
	else
		echo "record not inserted plz check query".$str;
}
?>
<html>
<body>
<form actoion="" method="POST">
	roll no:<input type="text"name="rlno"><br>
	name:<input type="text"name="txtname"><br>
	class:<input type="text"name="txtclass"><br>
	<input type="submit"name="save"value="insert">
</form>
</body>
</html>