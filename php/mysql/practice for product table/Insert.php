<?php 
        if(isset($_POST["submit"])) 
        { 
            $link=mysqli_connect("localhost","root","","aayush"); 
            $product_id=$_POST['id'];
            $produnct_name=$_POST['name']; 
            $produnct_manufacure_date=$_POST['m_date'];
            $produnct_exprie_date=$_POST['e_date'];
            $produnct_department_number=$_POST['d_num'];
            $produnct_picture=$_POST['d_pic'];
            $query = "insert into product values('$product_id','$produnct_name','$produnct_manufacure_date','$produnct_exprie_date','$produnct_department_number','$produnct_picture')";
            if(mysqli_query($link,$query)) 
            { 
                echo "<h3>Data Inserted Sucessfully</h3>";
            } 
            else 
            { 
                echo "<h3>Sorry something wrong Data Not Inserted</h3>";
            }
        }
?>
<html>
<body>
    <form action=""method="POST">
        product_id:<input type="text" name="id"><br><br>
        produnct_name:<input type="text" name="name"><br><br>
        produnct_manufacure_date:<input type="text" name="m_date"><br><br>
        produnct_exprie_date:<input type="text" name="e_date"><br><br>
        produnct_department_number:<input type="text" name="d_num"><br><br>
        produnct_picture:<input type="text" name="d_pic"><br><br>
        <input type="submit" name="save"value="Inserted"><br><br>
</body>
</html>