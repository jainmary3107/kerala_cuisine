<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="css/loginsignup.css">
  <title>Sign in</title>
  
</head>

<body>
  <div class="main">
    <p class="sign" align="center"> Login</p>
    
    <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
      <input class="un " type="text" align="center" placeholder="Username"name="username"require="required">
      <input class="pass" type="password" align="center" placeholder="Password" name="password" require="required">
      <a  href="review.php"class="submit" onclick="checkFun" align="center">Sign in</a>
      
      
      <br><br>
      
      <label class="rem">
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
      <p class="forgot" align="center"><a href="#">Forgot Password?</p>
     <p align="center" >You don't have account?<a href="register.php">Sign up</p> 
            
    </div>
</form>  
</body>

</html>