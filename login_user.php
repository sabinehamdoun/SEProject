<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAIN IT RIGHT</title>
    <link rel="icon" href="images\WhatsApp Image 2021-11-21 at 4.02.16 PM.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="login.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
</head>
<body>
    <div></div>

    
    <div class="center">
        <h1>Login</h1>
        <form action="login_user(php).php" method="post">
          <div class="txt_field">
            <input name="username" type="text" required>
            <span></span>
            <label>Username</label>
          </div>
          <div class="txt_field">
            <input name="password" type="password" required>
            <span></span>
            <label>Password</label>
          </div>
          <a>
            <input name="login" type="submit" value="Log In"/>
          </a>
          </form>
          
          <div class="" style="margin:20px 20px 20px 60px;"> Don't have an account? <a href="signup_user.php">Signup</a> </div>
        
      </div>
</body>
</html>