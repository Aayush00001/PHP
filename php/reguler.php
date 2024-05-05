<?php
error_reporting(0);
$btnval=$_POST['btnval'];
$tname=$_POST['tname'];
$address=$_POST['taddress'];
$tdate=$_POST['tdate'];
$tmobile=$_POST['tmobile'];
$tland=$_POST['tland'];
$temail=$_POST['temail'];
$tpass=$_POST['tpass'];
if(isset($_POST['btnval']))
{
if(preg_match('/^[a-z A-Z]*$/',$tname))
$errname="";
else
$errname="Should contain atleast 1 character and should be string";

if(preg_match('/^[0-9]{2}\/[0-9]{2}\/[0-9]{2}$/',$tdate))
$edate="";
else
$edate="enter proper date(DD/MM/YY)";

if(preg_match('/^\+91[0-9]{10}$/',$tmobile))
$emobile="";
else
$emobile="enter proper mobile number";

if(preg_match('/^[0-9]{4}\-[0-9]{7}$/',$tland))
$eland="";
else
$eland="enter proper landline number";

if(preg_match('/^[0-9 a-z A-Z]+(.|_)[0-9 a-z A-Z]*\@(yahoo|gmail|co|in|rediff)\.(com|in)$/',$temail))
$eemail="";
else
$eemail="enter proper email address";

if(strlen($tpass)<6)
$epass="password should not be 6 characters";
else
$epass="";
}
else	
	echo "Press on button";
?>
<html>
<head>
<title>Registration Form</title>
</head>
<body>
<form action="" method="post">
<center><table style={font-size:20px;}>
<tr>
<td><b>*Name</b></td>
<td><input type ="text" name="tname" value="<?= $tname; ?>">
</td>
<td><?php echo $errname; ?></td>
</tr>
<tr>
<td><b>Address<b></td>
<td><textarea name="taddress"><?php echo $address; ?></textarea>
</td>
</tr>
<tr>
<td><b>*Date of Birth(DD/MM/YY)</b></td>
<td><input type ="text" name="tdate" value="<?php echo $tdate?>">
</td>
<td><?php echo $edate;?>
</td>
</tr>
<tr>
<td><b>*Mobile no. in format(+91 and 10 digit no)</b></td>
<td><input type ="text" name="tmobile" value="<?php echo $tmobile?>">
</td>
<td><?php echo $emobile;?>
</td>
</tr>


<tr>
<td><b>*LandLine no in formate(code-no)</b></td>
<td><input type ="text" name="tland" value="<?php echo $tland?>">
</td>
<td><?php echo "<font color=red>".$eland."</font>";?>
</td>
</tr>
<tr>
<td><b>*Email Address</b></td>
<td><input type ="text" name="temail" value="<?php echo $temail?>">
</td>
<td><?php echo "<font color=red>".$eemail."</font>";?>
</td>
</tr>
<tr>
<td><b>*Password</b></td>
<td><input type ="password" name="tpass" value="<?php echo $tpass?>">
</td>
<td><?php echo "<font color=red>".$epass."</font>";?>
</td>
</tr>

<tr>
<td><input type="submit" name="btnval" value="validate">
</td>
</tr>
</table>
</form>
</body>
</html>