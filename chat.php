<?php include('session.php') ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="chat.css" />

<title>Portal</title>

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
#dd{width: 80.8%;
height: 360px; background-color: #fff; margin-left: 155px; margin-top: -50px;}
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
                   
<div id="dd">
<span class="style2"><?php echo $message ?></span>
<form action="chat_log.php" method="post" enctype="multipart/form-data">
<label>Chat</label><br>
<input name="surname" type="hidden" id="surname" value="<?php echo $surname ?>" />
<input name="othernames" type="hidden" id="othernames" value="<?php echo $othernames ?>" />
<input name="username" type="hidden" id="username" value="<?php echo $username ?>" />
<textarea name="chat_mess" required="required" placeholder="Type Something...." class="ee" id="message"></textarea><br>
<input name="user_id" type="hidden" id="user_id" value="<?php echo $user_id ?>" />
<input name="button" type="submit" class="bb" id="button" value="Post" />

 </form>
 <hr>

 <?php 
include("db.php");
$query = mysql_query("SELECT * FROM chat_tb ORDER BY id DESC");
$m=0;
while ($row=mysql_fetch_array($query)) {
  $m++;

 ?>
<div class="med">
  <?php echo $row['username']; ?>
    <div class="medt">
  <?php echo $row['chat_mess']; ?>
</div>
</div>
<?php } ?>
</div>

</div>
</div>
</body>
</html>
