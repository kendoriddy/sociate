<?php 
session_start();
include("db.php");
if (!(isset($_SESSION['id']) && $_SESSION['id'] !=''))
{
$message="Please Login";
header("location:login.php");
exit;
} 

$id=$_SESSION['id'];
$sql="SELECT*FROM account WHERE id='$id'";
$result=mysql_query($sql) or die (mysql_error());
if($rows=mysql_fetch_array($result)){
$id=$rows['id'];
$surname=$rows['surname'];
$othernames=$rows['othernames'];
$email=$rows['email'];
$username=$rows['username'];
$datep=$rows['datep'];
$password=$rows['password'];
$picture=$rows["picture"];

}

$q1="SELECT * FROM inbox WHERE receiver='$email'";
$r1=mysql_query($q1);
$n2=mysql_num_rows($r1);

?>

