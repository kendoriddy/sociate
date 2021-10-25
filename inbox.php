<?php include('session.php') ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="inbox.css" />

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
     <table border="1" width="100%" align="center" cellpadding="3"  cellspacing="0"  style="margin-top: 100px;">
            <tr>
              <th><span class="style3">No</span></th>
              <th><span class="style3">SENDER</span></th>
              <th><span class="style3">SUBJECT</span></th>
               <th><span class="style3">DATE SEND</span></th>
              <th colspan="2"><span class="style3">OPERATION</span></th>
            </tr>
            <?php
    include('db.php');

    $sql_sel=mysql_query("SELECT * FROM inbox WHERE receiver='$email'");
    
    $i=0;
    while($row=mysql_fetch_array($sql_sel)){
    $i++;
    $color=($i%2==0)?"gold":"white";
    ?>
<tr bgcolor="<?php echo $color?>">
<td><?php echo $i;?></td>
<td><?php echo $row['sender'];?> 
<td><?php echo $row['subject'];?> 
<td><?php echo $row['datep'];?></td>

<td align="center"><a href="readmessage.php?id_message=<?php echo $row['id_message'];?>">Read</a></td>
<td align="center"><a href="delete.php?id_message=<?php echo $row['id_message'];?>">Delete</a></td>
</tr>
<?php 
}
?>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
</div>
    
</body>
</html>
