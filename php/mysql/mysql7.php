<?php
$con = mysqli_connect("localhost","root","","aayush");
//$selectdb = mysql_select_db("mydb",$con);
$result = mysqli_query($con,"select * from stud");

$number_of_rows = mysqli_num_rows($result);
$fields=mysqli_num_fields($result);
$count=mysqli_field_count($con);
echo "Number of rows fetched are : ". $number_of_rows."<br>Number of Fields are: ".$fields."<br>Total Number of columns: ".$count."<br>";
while ($row = mysqli_fetch_assoc($result))
{  
echo "Name : " . $row['name'] . "  Class" . $row['class']."<br>";
}
mysqli_field_seek($result, 1);
$fieldinfo = mysqli_fetch_field($result);
echo("Field Name: ". $fieldinfo -> name);
mysqli_data_seek($result,3);
$row=mysqli_fetch_row($result);
echo("Name: ". $row[1]);
?>