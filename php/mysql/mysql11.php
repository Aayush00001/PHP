<?php

//UNIT-4 INTERACTING WITH MYSQL
$conn=mysqli_connect("localhost","root","","aayush");

if(mysqli_connect_errno())
{
	echo "Failed to connect to MYSQL".mysqli_connect_error();
	exit();
}
$qry="insert into dept values(1,'abc','dgf')";
mysqli_query($conn,$qry);
echo mysqli_errno($conn);
echo "<br>".mysqli_error($conn);

$charset=mysqli_character_set_name($conn);
echo "Default character set is:".$charset;

echo "<br>".mysqli_get_client_info();

echo "<br>".mysqli_get_client_version();

echo "<br>".mysqli_get_host_info($conn);

echo "<br>".mysqli_get_server_info($conn);

echo "<br>".mysqli_get_server_version($conn);

mysqli_close($conn);

?>