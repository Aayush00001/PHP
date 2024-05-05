<?php
	$link=mysqli_connect("localhost","root","","aayush");
	$no=$_GET['id'];
	$str="select * from emp where empno=$no";
	$result=mysqli_query($link,$str);
	$row=mysqli_fetch_row($result);
?>
<html>
<body>
<center>
	<form action="update.php"method="POST"style="margin:10% 0 0 0">
		empno:<input type="text" name="txtno" value="<?=$row[0];?>"><br><br>
		name:<input type="text" name="txtname" value="<?=$row[1];?>"><br><br>
		job:<input type="text" name="txtjob" value="<?=$row[2];?>"><br><br>
		mgr:<input type="text" name="txtmgr" value="<?=$row[3];?>"><br><br>
		hiredate:<input type="text" name="dt" value="<?=$row[4];?>"><br><br>
		salary:<input type="text" name="txtsal" value="<?=$row[5];?>"><br><br>
		com:<input type="text" name="txtcom" value="<?=$row[6];?>"><br><br>
		deptno:<input type="text" name="txtdept" value="<?=$row[7];?>"><br><br>
		<input type="submit" name="update" value="update">
	</form>
</center>
</body>
</html>