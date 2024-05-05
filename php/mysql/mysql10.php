<?php
$con = mysqli_connect("localhost","root","","aayush");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$sql = "insert into dept values(80,'abc','xyz');";
$sql.="insert into dept values(90,'pqr','jkl')";

// Execute multi query
if (mysqli_multi_query($con, $sql)) {
	echo "Record inserted...";
}
else
		echo "Error...";
mysqli_close($con);
?>