<?php
	if(isset($_POST['save']))
	{
		$link=mysqli_connect("localhost","root","","aayush");
		$dt=date('y-m-d',strtotime($_POST['dt']));
		$str="insert into emp values($_POST[txtno],'$_POST[txtname]','$_POST[txtjob]','$_POST[txtmgr]','$dt',$_POST[txtsal],'$_POST[txtcom]','$_POST[txtdept]')";
		if(mysqli_query($link,$str))
			header("location:show.php");
		else
			echo "record not insrted plz cg=heck query____".$str;
	}
?>
<html>
<body>
<center>
		<form action=""method="POST"style="margin:10% 0 0 0">
			empno:<input type="text" name="txtno"><br><br>
			name:<input type="text" name="txtname"><br><br>
			job:<input type="text" name="txtjob"><br><br>
			mgr:<input type="text" name="txtmgr"><br><br>
			hire date:<input type="date" name="dt"value="<?php echo date('y-m-d');?>"><br><br>
			salary:<input type="text" name="txtsal"><br><br>
			com:<input type="text" name="txtcom"><br><br>
			dept no:<input type="text" name="txtdept"><br><br><br><br>
			<input type="submit"name="save"value="insert">
		</form>	
</center>
</body>
</html>