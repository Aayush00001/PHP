<?php
	if(isset($_POST['update']))
	{
		$link=mysqli_connect("localhost","root","","aayush");
		$dt=date('y-m-d',strtotime($_POST['dt']));
		$str="update emp set ename='$_POST[txtname]',job='$_POST[txtjob]',mgr=$_POST[txtmgr],hiredate='$dt',sal=$_POST[txtsal],com=$_POST[txtcom],deptno=$_POST[txtdept]where empno=$_POST[txtno]";
		if(mysqli_query($link,$str))
			header("location:show.php");
		else
			echo "record not updated plz check query".$str;
	}
?>