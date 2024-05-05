<?php
$a=null;
$b=null;
$c=null;
$d=null;
$e=null;
$f=null;
$g=null;
$h=null;


if(isset($_POST['submit']))
{
		
	$fnm=$_POST['fnm'];
	$lnm=$_POST['lnm'];
	$usernm=$_POST['unm'];
	$day=$_POST['day'];
	$month=$_POST['month'];
	$year=$_POST['year'];
	$email=$_POST['email'];
	$website=$_POST['website'];
	$pass=$_POST['pass'];
	$re_pass=$_POST['re-pass'];

	if(!preg_match('/^[a-zA-Z]*$/', $fnm))
	{
		$a=" Invalid FirstName";
	}
	else
	{
		echo "valid FirstName is..--> ".$fnm."<br>";
	}
	if(!preg_match('/^[a-zA-Z]*$/', $lnm))
	{
		$b=" Invalid LastName";
	}
	else
	{
		echo "valid LastName is..--> ".$lnm."<br>";
	}
	if($day=="Day" || $month=="Month" || $year=="Year")
	{
		$c="Enter birthdate";
	}
	else
	{
		echo "Birthdate is..-->" . $_POST['day'] . "/" . $_POST['month'] . "/" . $_POST['year']. "<br>";
	}
	if(!preg_match('/^[a-z0-9]{4,12}/',$usernm))
	{
		$d="Invalid username";
	}
	else
	{
		echo "vlid username is..-->".$usernm."<br>";
	}
	if(!preg_match('/^[0-9 a-z A-Z]+(.|_)[0-9 a-z A-Z]*\@(yahoo|gmail|co|in|rediff)\.(com|in)$/',$email))
	{
		$e= "InValid Email- Id";
	}	
	else
	{
		echo "valid email is..--> ".$email."<br>";
	}
	if(!preg_match('/\b(?:(?:https?| ftp):\/\/|www\.)[- a-z0-9+&@#\/%? =~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i',$website))
	{
		$f= "InValid website name";
	}
	else
	{
		echo "valid website is..--> ".$website."<br>";
	}
	if(strlen($pass>=8))
	{
    	$g="valid password ";
		if($pass==$re_pass)
		{
			$h="password matched..";
		}
		else
		{
			$h="password does not matched..";
		}
	}
	else
	{
		$g="Invalid password";
	}

}
?>

<html>
<body>
<form action="#" method="post">
	<table>
	<tr>
	<td><<h3 style="color:red">*Mandatory to fill</h3></td>
	</tr>
	
	<tr><td><label for="fname" style="padding-right:50px">Firstname:</label></td>
		<td><input type="textbox" name="fnm" required><font color="red">*</font><?php echo "<font color=red>".$a."</font>" ?></td>
	</tr>
	
	<tr>
	<td><label for="lname" style="padding-right:50px;">Lastname: </label></td>
	<td><input type="textbox" name="lnm" required><?php echo "<font color=red>".$b."</font>" ?></td>
	</tr>
	
	<tr>
	<td><label for="birthdate" style="padding-right:50px;">Birthday: </label></td>
	<td><select name="day"  required>
			<option> Day</option>
			<?php
				for($i=1;$i<=31;$i++)
				{
					echo "<option value=$i>".$i."</option>";
				}
			?>
	</select>
							
	<select name="month" >
			<option required>Month</option>
			<?php
				for($i=1;$i<=12;$i++)
				{
					echo "<option value=$i>".$i."</option>";
				}
			?>
	</select>
							
	<select name="year" >
			<option required>Year</option>
			<?php
				for($i=1990;$i<=2023;$i++)
				{
					echo "<option value=$i>".$i."</option>";
				}
			?>
	</select><?php echo "<font color=red>".$c."</font>" ?></td>
	</tr>
	
	<tr>
	<td><label for="uname" style="padding-right:50px;">Username: </label></td>
	<td><input type="textbox" name="unm"><font color="red">*</font><?php echo "<font color=red>".$d."</font>" ?></td>
	</tr>
	
	<tr>
	<td><label for="email" style="padding-right:50px;">E-mail: </label></td>
	<td><input type="email" name="email"><?php echo "<font color=red>".$e."</font>" ?></td>
	</tr>
	
	<tr>
	<td><label for="website" style="padding-right:50px;">Website: </label></td>
	<td><input type="url" name="website"><?php echo "<font color=red>".$f."</font>" ?></td>
	</tr>
	
	<tr>
	<td><label for="password" style="padding-right:50px;">Password: </label></td>
	<td><input type="password" name="pass"><font color="red">*</font><?php echo "<font color=red>".$h."</font>" ?></td>
	</tr>
	
	<tr>
	<td><label for="re-password" style="padding-right:50px;">Re-Password: </label></td>
	<td><input type="password" name="re-pass"><font color="red">*</font><?php echo "<font color=red>".$g."</font>" ?></td>
	</tr>
	
	<tr>
	<td>
	<label for="checkbox" style="padding-right:50px;">
		<input type="checkbox"required>
	</label>
	</td>
	<td>
		<p><b>I agree to the terms & conditions.</b></p>
	</td>
	</tr>
	
	<tr>  
		<td>
		<label for="submit" style="padding-right:50px;">
		<input type="submit" name="submit">
	</label>
</body>
</html>