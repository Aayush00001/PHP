<?php
  if( $_POST["name"] || $_POST["weight"] )
  {
      echo "Welcome ". $_POST['name']. "<br />";
      echo "You are ". $_POST['weight']. " kgs in weight.";
      exit();
  }
?>
<html>
<body>
  <form action="#" method="post">
    Name: <input type="text" name="name" />
    Weight:<input type="text" name="weight" />
           <input type="submit" />
  </form>
</body>
</html>