<?php 
        if(isset($_POST["delete"])) 
        { 
            $link = mysqli_connect("localhost","root","","mydatabase"); 
            $Country_ID = $_POST["cid"];
            $Country_Name = $_POST["cnm"];
            $Region_ID = $_POST["rid"]; 
            $query = "delete from country where Region_ID=$Region_ID";

            if(mysqli_query($link,$query)) 
            { 
                echo "<h3>Data Deleted Sucessfully</h3>";
            } 
            else 
            { 
                echo "<h3>Sorry something wrong Data Not Deleted</h3>";
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
                <button type="submit" name="delete">Delete
                    <span></span>
                </button>
            </center>
        </form>
    </div>
</body>
</html>