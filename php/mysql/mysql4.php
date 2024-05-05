<?php
if(isset($_POST['delete']))
{
	$link=mysqli_connect("localhost","root","","AAYUSH");
	$str="delete from stud where rollno=$_POST[txtno]";
	if(mysqli_query($link,$str))
		echo "record delete";
	else
		echo "record not delete plz check query".$str;
}
?>
<html>
<body>
<form actoion="" method="POST">
	roll no:<input type="text" name="txtno"><br>
	<input type="submit" name="delete" value="delete">
</form>
</body>
</html>