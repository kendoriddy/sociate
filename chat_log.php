<?php
include("db.php");
$user_id=$_POST['user_id'];
$surname=$_POST['surname'];
$othernames=$_POST['othernames'];
$username=$_POST['username'];
$chat_mess=$_POST['chat_mess'];
if ($chat_mess=="")
{
$message ="Please type something!!!";
include("chat.php");
exit();
}
else{
$query = "INSERT INTO chat_tb (user_id,surname,othernames,username,chat_mess) VALUES ('$user_id','$surname','$othernames','$username','$chat_mess')";
	mysql_query($query) or die(mysql_error());
	$mess ="Sent";
	include("chat.php");
	exit();
}

?>