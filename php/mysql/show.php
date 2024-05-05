<!--adminpanel(database).-->
<?php
	$link=mysqli_connect("localhost","root","","aayush");
	$str="select * from emp";
	$result=mysqli_query($link,$str);
?>
<table border="2"align="center"style="margin-top:5%">
	<tr>
		<td colspan="8">
			<a href="insert.php">click here for insert new record</a>
		</td>
	</tr>
	<tr>
		<td>emp no</td>
		<td>empname</td>
		<td>job</td>
		<td>mgr</td>
		<td>hire date</td>
		<td>salary</td>
		<td>com</td>
		<td>deptno</td>
	</tr>
<?php
	while($row=mysqli_fetch_array($result,MYSQLI_BOTH))
	{
?>
<tr>
	<td><?=$row[0]?></td>
	<td><?=$row[1]?></td>
	<td><?=$row[2]?></td>
	<td><?=$row[3]?></td>
	<td><?=$row[4]?></td>
	<td><?=$row[5]?></td>
	<td><?=$row[6]?></td>
	<td><?=$row[7]?></td>
	<td><a href="upd.php?id=<?=$row[0]?>">update</a></td>
	<td><a href="del.php?id=<?=$row[0]?>">delete</a></td>
</tr>
<?php } ?>