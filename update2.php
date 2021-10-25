<?php
include("db.php");
$gender=$_POST['gender'];
////$email=strip_tags(trim(strtolower($_POST['email'])));
$password=$_POST['password'];
/////$gender=strip_tags(trim(strtoupper($_POST['gender'])));
////$religion=strip_tags(trim(strtoupper($_POST['religion'])));
$cpassword=$_POST['cpassword'];
///$country=strip_tags(trim(strtoupper($_POST['country'])));
$id=$_POST['id'];
//$datep=date('d:m:Y');
if ($password==""||$password=="")
{
$message = "Incomplete Registration";
include("update.php");
exit();
}
if($gender=="select gender")
{
$message="select gender";
include("update.php");
exit;
}
if ($password!=$cpassword)
{
$message = "Password Not Match";
include("update.php");
exit();
}
else
{

$sql="UPDATE account SET gender='$gender',password='$password' WHERE id='$id'";
mysql_query($sql) or die(mysql_error());
$message = "Successful Updated";
include("update.php");
exit;

  

}
?>