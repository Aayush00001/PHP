<?php
$con=mysqli_connect("localhost","root","","aayush");
// Check connection
	
		$sql="SELECT ename,sal from emp";

	$result=mysqli_query($con,$sql);

	$row = mysqli_fetch_array($result,MYSQLI_NUM);
   
	print $row[0];
	echo "<br>";
	print $row[1];
	echo "<br>";
   
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	print $row["ename"];
	echo "<br>";
	print $row["sal"];
	echo "<br>";
		
	$row = mysqli_fetch_all($result); //NOT WORKING
	//echo $row["ename"];
	//echo "<br>";
	//echo $row["sal"];
	
	$row=mysqli_fetch_fields($result);
	
		foreach ($row as $val)
			{
					echo $val->name;
					echo $val->table;
       
			}
			//output: Name: ename Table: employee Name: sal Table: employee Name: city Table: employee 
			
			echo "<br><br><br>";
			
			if ($result = mysqli_query($con, $sql)) //condition aa apvij padse ahiii
			{

				while ($row = mysqli_fetch_row($result)) //return all the rows
				{
					echo $row[0], $row[1];
				}
			}
			echo "<br><br><br>";
			
			if ($result = mysqli_query($con,$sql))
			{
				while ($obj = mysqli_fetch_object($result))
				{
				print $obj->ename; //syntax aaj rese
				print "\n";
				echo "<br>";
				}
				//output:  ivan peter thomas 
			}
		

	mysqli_free_result($result); 
	mysqli_close($con);

?>