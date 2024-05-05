<?php
	$link=mysqli_connect("localhost","root","","AAYUSH");
	$str="select * from stud";
	$result=mysqli_query($link,$str);
?>
<table border="2" align="center" style="margin-top:5%">
	<tr>
		<td>roll no</td>
		<td>name</td>
		<td>class</td>
	</tr>
<?php
//1)mysqli_fetch_array($result,MYSQLI_ASSOC)
	//return the Associative array we can use with key name of array
//2)mysqli_fetch_array($result,MYSQLI_NUM)
	//return the numeric array we can use with index number of array
//3)mysqli_fetch_array($result,MYSQLI_BOTH)
	//return the Associative and numeric array we can use both key name and index number of array
while ($row=mysqli_fetch_array($result))
{
?>
<tr>
	<td><?=$row[0]?></td>
	<td><?=$row['name']?></td>
	<td><?=$row[2]?></td>
</tr>
<?php } ?>