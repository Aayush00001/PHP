<?php
 if(isset($_POST['submit']))
 {
 	$tarset_dir="img/".$_files["filetoupload"]["name"];
 	if(move_uploaded_file($_files,["filetoupload"]["tmp_name"],$tarset_dir))
 	{
 		echo "the file uploaded sucess fully <br>";
 		print_r($_files);
 	}
 	else
 	{
 		echo "sorry there cods an error uploading your file";
 	}
 }
 ?>