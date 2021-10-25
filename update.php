<?php include('session.php') ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="update.css" />
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
          <h6 style="color: white;"><?php echo $message ?></h6>
          <form action="update2.php" method="post">
            <h4>Username</h4>
          <input type="text" name="username"  value="<?php echo $username ?>" class="reg" placeholder="Enter username" disabled >
          
          <h4>Gender</h4>
          <select class="reg" name="gender" >
            <option>None</option>
          <option>Male</option>
          <option>Female</option>
          </select>

          <h4>Change Password</h4>
          <input type="password" name="password" class="reg" placeholder="Enter password">
          <input name="id" type="hidden" id="id" value="<?php echo$id ?>" />


          <h4>Confirm password</h4>
          <input type="password" name="cpassword" class="reg" placeholder="Enter password">
          <input type="submit" name="button" class="sub" value="Update">
             </form>
            </div>
    

    </div>
     

   </div>
</body>
</html>
