<?php 
        if(isset($_POST["submit"])) 
        { 
            $link = mysqli_connect("localhost","root","","mydatabase"); 
            $Country_ID = $_POST["cid"];
            $Country_Name = $_POST["cnm"];
            $Region_ID = $_POST["rid"]; 
            $query = "insert into country values('$Country_ID','$Country_Name',$Region_ID)";

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
    <div class="login-box">
        
        <form  method="post">
            <div class="user-box">
                <input type="text" name="cid">
                <label>Country ID</label>
            </div>
            <div class="user-box">
                <input type="text" name="cnm">
                <label>Country Name</label>
            </div>
            <div class="user-box">
                <input type="text" name="rid">
                <label>Region ID</label>
            </div>
            <center>
                <button type="submit" name="submit">Submit
                    <span></span>
                </button>
            </center>
        </form>
    </div>
</body>
</html>