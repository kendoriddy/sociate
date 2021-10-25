<?php include('session.php') ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="portal.css" />

<title>Portal</title>

<style type="text/css">
.panels{

width: 150px;
height: 50px;  background-color: #0000; width: 750px; margin-top: -170px; margin-left: 160px; }

}
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
              <h4 style="text-align:right; color:white; padding:100px; margin-top: -250px">
WELCOME:: <?php echo$surname ?> <?php echo$othernames ?></h4>
            </div>
  
    </div>
       
        

   </div>
</body>
</html>
