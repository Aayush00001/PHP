<?php
$con=mysqli_connect("localhost","root","","aayush");
//mysql_select_db("mysql",$con);
mysqli_query($con,"insert into stud (Name,class)values('Name','BCA')");
echo "Inserted records:".mysqli_affected_rows($con)."<br>";
echo "Last Inserted Id is: ".mysqli_insert_id($con);
?>