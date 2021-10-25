<?php include('session.php');
$id_message=$_GET['id_message'];
include("db.php");
$r="SELECT*FROM inbox WHERE id_message='$id_message'";
$result=mysql_query($r) or die (mysql_error());
if($rows=mysql_fetch_array($result)){
$id_message=$rows["id_message"];  
$sender=$rows["sender"];
$receiver=$rows["receiver"];
$subject=$rows["subject"];
$message=$rows["message"];

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="readmessage.css" />

<style type="text/css">
.style2{
  color: red;
}
.bb{width: 100px;height: 50px; background-color: blue; color: white; font-size: 20px;padding: 10px;margin-top: 10px; margin-left: 20px;}
.ee{width: 60%;
height: 70px; margin-left: 20px;}
.w{
  width: 60%;
  height: 40px;
  margin-left: 10px;
  margin-top: 5px;
}
label{
  font-size: 28px;
}
#dd{width: 82%;
height: 360px; background-color: #fff; margin-left: 155px;}
.panels{

width: 150px;
height: 50px;  background-color: #0000; width: 750px; margin-top: -170px; margin-left: 160px; }

}+
.panel2{ width: 150px;
height: 150px; border-radius: 100px solid 2px red; background-color: white; }

</style>

</head>

<body>
<div class="overall">
	<div class="bodyp">
    	<div class="header">
        	<h1>PORTAL</h1>
        </div>


               
              <div class="linkmenu">
              	
              	   <?php include 'includes/linkbar.php' ?>
              </div>
      
            <div class="panel2">
               <img src="upload/<?php echo$picture ?>" width="150" height="150" class="img"/>


            </div>
            <div class="panels">
              <h4 style="text-align:right; color:#ffff; padding:10px;">
                <h4 style="text-align:right; color:white; padding:100px; margin-top: -250px">
WELCOME:: <?php echo$surname ?> <?php echo$othernames ?></h4>
            </div>
     

<table width="80%" border="0" align="center" class="table">
                  <tr>
                    <td colspan="2" align="center" bgcolor="#CCCCCC">&nbsp;</td>
                  </tr>
                  <tr>
                    <td width="43%" align="right" valign="top" bgcolor="#D6D6D6"><p>&nbsp;</p>
                    <p>Sender</p></td>
                    <td width="57%"><label for="r_email"><?php echo$sender ?></label></td>
                </tr>
                  <tr>
                    <td align="right" bgcolor="#CCCCCC"><p>&nbsp;</p>
                    <p>Subject</p></td>
                    <td><?php echo$subject ?></td>
                </tr>
                  <tr>
                    <td align="right" bgcolor="#D6D6D6"><p>&nbsp;</p>
                    <p>Message</p></td>
                    <td><?php echo$message ?></td>
                </tr>
                  <tr>
                    <td bgcolor="#CCCCCC">&nbsp;</td>
                    <td></a> </td></td>
                </tr>
                </table>



</div>
    
</body>
</html>
