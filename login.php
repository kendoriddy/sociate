<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="login.css" />
<title>Portal</title>
</head>

<body>
<div class="overall">
  <div class="bodyp">
      <div class="header">
          <h1>PORTAL</h1>
        </div>
        <div class="menu">
          <ul>
                <li> <a href="home.php">Home </a> |   <a href="login.php">Login</a></li>
                
                </ul>
          </div>

        <div class="panel">
          <h6 style="color: white;"><?php echo $message ?></h6>
          <form action="login2.php" method="post">
          <h4>Username</h4>
          <input type="text" name="username" class="reg" placeholder="Enter name">
          <h4>Password</h4>
          <input type="password" name="password" class="reg" placeholder="Enter password">
          <input type="submit" name="button" class="sub" value="Log in">
             </form>
            </div>
    

    </div>
     

   </div>
</body>
</html>
