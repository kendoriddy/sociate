<?php include('session.php') ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="updatepp.css" />
<title>Portal</title>
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
      
            
        <div class="panel">
          <h6 style="color: red;"><?php echo $message ?></h6>
          <form action="updatepp2.php" method="post" enctype="multipart/form-data">
          <h4>Surname</h4>
          <input type="text"  value="<?php echo $surname ?>" class="reg" disabled>

            <h4>Othernames</h4>
          <input type="text"  value="<?php echo $othernames ?>" class="reg" disabled>
           <h4>Username</h4>
          <input type="text" value="<?php echo $username ?>" class="reg" disabled >
           <h4>Upload Profile Picture</h4>
          <input name="picture" type="file" class="form-control">
                      <input type="hidden" name="email" value="<?php echo $email ?>" />
                      <input type="hidden" name="id" value="<?php echo $id ?>" />
          <input type="submit" name="button" class="sub"  value="Update Picture">
             </form>
            </div>
    
         <?php include 'includes/footer.php' ?>
    </div>
        

   </div>
</body>
</html>
