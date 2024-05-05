<?php 
    $link = mysqli_connect("localhost","root","","mydatabase"); 
    $query = "create table country (Country_ID varchar(2),Country_Name varchar(40),Region_ID decimal(10,0))"; 
    if(mysqli_query($link,$query)) 
    { 
        echo "<h3>Table Created Sucessfully</h3>";
    } 
    else 
    { 
        echo "<h3>Sorry Something Wrong Table Not Created</h3>";
    } 
?>