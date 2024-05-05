<?php
setcookie("user","aayush");
?>
<html>
<body>
	<?php
		if(!isset($_COOKIE["user"]))
	{
		echo "dorry,cookie is not found";
	}
	else
	{
		echo "<br>cookie value".$_COOKIE["user"];
	}
?>
</body>
</html>