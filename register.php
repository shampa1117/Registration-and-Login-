<?php
session_start();
if(isset($_SESSION['user'])!="")
{
	header("Location: home.php");
}
include_once 'dbconnect.php';

if(isset($_POST['btn-signup']))
{       
	$userid = mysql_real_escape_string($_POST['userid']);
        $uname = mysql_real_escape_string($_POST['uname']);
        
	$email = mysql_real_escape_string($_POST['email']);
	$upass = sha1(mysql_real_escape_string($_POST['pass']));
	
	if(mysql_query("INSERT INTO users( userid,username,email,password) VALUES('$userid', '$uname','$email','$upass')"))
	{
		?>
        <script>alert('successfully registered ');</script>
        <?php
	}
	else
	{
		?>
        <script>alert('error while registering you...');</script>
        <?php
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login & Registration System</title>
<link rel="stylesheet" href="style.css" type="text/css" />

</head>
    <body bgcolor="#0086b3">
<center>
<div id="login-form">
<form method="post">
<table align="center" width="30%" border="0">
    <tr>
<td><input type="text" name="userid" placeholder="Npu ID" required /></td>
</tr>
<tr>
<td><input type="text" name="uname" placeholder="User Name" required /></td>
</tr>
<tr>
<td><input type="email" name="email" placeholder="Your Email" required /></td>
</tr>
<tr>
<td><input type="password" name="pass" placeholder="Your Password" required /></td>
</tr>
    

<tr>
<td><button type="submit" name="btn-signup">Sign Me Up</button></td>
</tr>
<tr>
    <td><a href="login.php">Sign In Here</a></td>
</tr>
</table>
</form>
</div>
</center>
</body>
</html>