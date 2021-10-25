<?php
include("db.php");
error_reporting(0);
$surname=$_POST['surname'];
$email=$_POST['email'];
$othernames=$_POST['othernames'];
$username=$_POST['username'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$datep=date('D:M:Y');
if ($surname=="" OR $othernames=="" OR $username=="" OR $password=="" OR $cpassword=="" OR $email=="")
{
$message ="All Field Required!!!";
include("register.php");
exit();
}
$conn="SELECT*FROM account WHERE email='$email'";
$mn=mysql_query($conn) or die(mysql_error());
$wr=mysql_num_rows($mn);
if ($wr>0) {
	$message="This email has been used";
	include("register.php");
	exit();
}
elseif ($password!=$cpassword)
{
$message = "Password Not Match";
include("register.php");
exit();
}
elseif (!ereg("^[a-z0-9_.]+@[a-z0-9\-]+\.[a-z0-9\-\.]+$",$email )) {
	$message="Wrong email format";
	include("register.php");
	exit();
}

else
{
$sql="INSERT INTO account (surname,othernames,username,email,password,datep) VALUES ('$surname','$othernames','$username','$email','$password','$datep')";
mysql_query($sql) or die(mysql_error());
$message="Successfully register, you can log in now";
include("login.php");
exit();
}
?>