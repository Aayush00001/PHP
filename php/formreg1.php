<?php
$a=null;
$b=null;
$c=null;
$d=null;
$e=null;
if(isset($_POST['submit']))
{
	$nm=$_POST['nm'];
	$email=$_POST['email'];
	$pass=$_POST['password'];
	$phno=$_POST['phone'];
	$zip=$_POST['zipcode'];
	
	if(!preg_match('/^[a-zA-Z]*$/', $nm))
	{
		$a=" Invalid Name";
	}
	else
	{
		echo "valid name is..--> ".$nm."<br>";
	}
	if(!preg_match('/^[0-9 a-z A-Z]+(.|_)[0-9 a-z A-Z]*\@(yahoo|gmail|co|in|rediff)\.(com|in)$/',$email))
	{
		$b= "InValid Email- Id";
	}	
	else
	{
		echo "valid email is..--> ".$email."<br>";
	}
	if(!preg_match('/^[0-9A-Za-z!@#$%]{8,12}$/', $pass))
	{
    	$c="Invalid password ";
	}
	else
	{
		echo "valid password is..--> ".$pass."<br>";
	}
	if(!preg_match('/^[0-9]{10}+$/', $phno))
	{
		$d="Invalid Phone Number";
	}
	else
	{
		echo "valid phone no is..--> ".$phno."<br>";
	}
	if(!preg_match('/^[0-9]{6}$/', $zip))
	{
		$e="Invalid zip";
	}
	else
	{
		echo "valid zip is..-->".$zip."<br>";
	}
}
?>
<html>
<head>
<style>
*
.container h1 {
  color: white;
  font-family: sans-serif;
  margin: 20px;
}

.registartion-form {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 600px;
  color: rgb(255, 255, 255);
  font-size: 10px;
  font-family: sans-serif;
  background-color: #660033;
  padding: 30px;

}

.registartion-form input,
.registartion-form select,
.registartion-form textarea {
  border: none;
  padding: 5px;
  margin-top: 10px;
  font-family: sans-serif;
}

.registartion-form input:focus,
.registartion-form textarea:focus {
  box-shadow: 3px 3px 10px rgb(228, 228, 228), -3px -3px 10px rgb(224, 224, 224);
}

.registartion-form .submit {
  width: 100%;
  padding: 8px 0;
  font-size: 20px;
  color: rgb(44, 44, 44);
  background-color: #ffffff;
  border-radius: 5px;
}

.registartion-form .submit:hover {
  box-shadow: 3px 3px 6px rgb(255, 214, 176);
}
</style>
</head>
<body>
	<center>
<div class="container">
<form action="#" method="post"class="registartion-form" onsubmit="return formValidation()">
<table>
<tr>
	<td><label for="name">Name:</label></td>
	<td><input type="text" name="nm"> <?php echo "<font color=red>".$a."</font>" ?></td><br>
</tr>

<tr>
	<td><lable for="email">Enter E-mail Id:</lable></td>
	<td><input type="text" name="email"> <?php echo "<font color=red>".$b."</font>" ?></td><br>
</tr>

<tr>

	<td><lable for="password">Password:</lable></td>
	<td><input type="password" name="password"><?php echo "<font color=red>".$c."</font>" ?></td><br>
</tr>

<tr>
	<td><lable for="phno">Enter Phone Number:</lable></td>
	<td><input type="text" name="phone"><?php echo "<font color=red>".$d."</font>" ?></td><br>
</tr>

<tr>
	<td><lable for="Gender" name="gender">Gender:</lable></td>
	<td>Male: <input type="radio" name="gender" value="male" name="gender" >
	Female: <input type="radio" name="gender" value="female" name="gender" >
	Other: <input type="radio" name="gender" value="other" name="gender"></td>
</tr><br>

<tr>
	<td><lable for="language">language:</lable></td>
	<td><select name="language" >
        <option value="">Select language</option>
        <option value="English">English</option>
        <option value="Spanish">Spanish</option>
        <option value="Hindi">Hindi</option>
        <option value="Arabic">Arabic</option>
        <option value="Russian">Russian</option>
</select></td><br>

<tr>
<td><lable for="zipcode">Zip Code:</lable></td>
<td><input type="number" name="zipcode" ><?php echo "<font color=red>".$e."</font>" ?></td><br>
</tr>


<tr>
        <td><label for="about">About:</label></td>
        <td><textarea name="about" id="about" placeholder="Write about yourself..."></textarea></td>
      </tr>
      
<tr>
	<td><input type="submit" name="submit" value="Register"></td>
</tr>

</form>
</div>
</center>
</body>
</html>