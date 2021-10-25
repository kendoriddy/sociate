<?php
session_start();
//error_reporting(0);
include("db.php");
$username=$_POST['username'];
$password=$_POST['password'];

if($username=='' || $password=='')
{
$message="All Fields are required";
include("login.php");
exit();	
}
$q="SELECT * FROM account WHERE username='$username' AND password='$password'";
$r=mysql_query($q) or die (mysql_error());
if($rows=mysql_fetch_array($r))
{
$id=$rows["id"];
$username=$rows["username"];
$password=$rows["password"];
$_SESSION['id'] = "$id";
$message="Successful Logged in";
//include("portal.php");
header("location:portal.php");
//header("location:emoh.php?mail=$mail&&mid=$mid&&pword=$pword&&class=$class&&mail=$mail");
}
else
{
$message = "Incorect username and password";
include("login.php");
exit();
}


?>