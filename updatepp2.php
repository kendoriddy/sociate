<?php
include('db.php');
session_start();
$email=$_POST['email'];
$id=$_SESSION['id'];
$image_type=$_FILES['picture']['tmp_name'];

if($image_type=="")
{
$message="browse your picture";
include("updatepp.php");
exit;
}
if(!ereg('image',$_FILES['picture']['type']))
{
//header("location:register.php?m=NOTICE:Uploaded file not image");
$message = "NOTICE:Uploaded file not image";
include("updatepp.php");
exit();
} 
if ($_FILES['picture']['size'] >1000000 ) 
{
 //300,000=300kb
$message = "Uploaded file must be less or equals to 1Mb";
include("updatepp.php");
exit();
}
else
{
$temp_file = $_FILES['picture']['tmp_name'];
//$destination = 'photo/'.mktime().$_FILES['pic']['name'];
$destination = 'upload'."/".$_FILES['picture']['name'];
move_uploaded_file($temp_file,$destination);
$picture=$_FILES['picture']['name'];

}
include("db.php");
$id=$_POST['id'];
///$dateposted=date("d-m-Y");
			$id=$_POST['id'];
$sql="UPDATE account SET picture='$picture' WHERE id='$id'";
		mysql_query($sql) or die (mysql_error());
		$message ="Successfully Updated";
		include("portal.php");
		exit();
  
?>