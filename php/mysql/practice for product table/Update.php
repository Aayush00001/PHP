<?php 
        if(isset($_POST["update"])) 
        { 
            $link = mysqli_connect("localhost","root","","aayush"); 
            $Country_ID = $_POST["cid"];
            $Country_Name = $_POST["cnm"];
            $Region_ID = $_POST["rid"]; 
            $query = "update country set Country_ID='$Country_ID',Country_Name='$Country_Name' where Region_Id=$Region_ID";

            if(mysqli_query($link,$query)) 
            { 
                echo "<h3>Data Updated Sucessfully</h3>";
            } 
            else 
            { 
                echo "<h3>Sorry something wrong Data Not Updated</h3>";
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
                <button type="submit" name="update">Update
                </button>
            </center>
        </form>
    </div>
</body>
</html>