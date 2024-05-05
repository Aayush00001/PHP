<?php  
    $link = mysqli_connect("localhost","root","","mydatabase");
    $query = "select * from country"; 
    $result=mysqli_query($link,$query);
?>
<html>
<body>
    <table border="2" align="center" style="margin-top:5%;border-radius: 10px;"> 
    <tr> 
            <td>Country_ID</td>
            <td>Country_Name</td>
            <td>Region_ID</td>
    </tr>  
            <?php 
                while($row=mysqli_fetch_array($result)) 
                { 
            ?> 
    <tr> 
            <td><?=$row[0]?></td> 
            <td><?=$row[1]?></td> 
            <td><?=$row[2]?></td> 
    </tr>    
            <?php        
                    } 
            ?> 
    </table>
</body>
</html> 