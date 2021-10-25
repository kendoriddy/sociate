<?php
if (!ini_get('date.timezone'))
{
	date_default_timezone_set('GMT');
}

error_reporting(0);
include("db.php");
$email=$_POST['email'];
$r_email=$_POST['r_email'];
$message=$_POST['message'];
$subject=$_POST['subject'];

if ($r_email==""||$email==""||$subject=="")
{
$message = "Fill All Fields";
include("message.php");
exit();
}
/////////////////start//////////////////
 $s5="SELECT*FROM account WHERE email='$r_email'";
$res5=mysql_query($s5) or die (mysql_error());
$n=mysql_num_rows($res5);
if($n<1)		//to check existence of user
{
$message = "This Receiver is not in our Database";
include("message.php");
exit();
}
elseif(!ereg("^[a-z0-9_.]+@[a-z0-9\-]+\.[a-z0-9\-\.]+$",$email))
{
$message = "Wrong Email Format";
include("message.php");
exit();
} 
else
{
$sql="INSERT INTO inbox (receiver,sender,subject,message) VALUES('$r_email','$email','$subject','$message')";
mysql_query($sql) or die(mysql_error());
$message = "Message Sent";
include("message.php");
exit;
}
  


?>