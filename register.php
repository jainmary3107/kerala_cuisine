<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="style.css" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="css/loginsignup.css">
  <title>Sign in</title>
</head>

<body>
  <div class="main">
    <p class="sign" align="center"> Sign up</p>


    <form class="form1"method="POST"action="register.php">
    <?php include('errors.php'); ?>
      <input class="un " type="text" align="center" placeholder="Email Id"name="email" value="<?php echo $email; ?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" 
        title="Enter a valid email" required="">
      <input class="un " type="text" align="center" placeholder="Username"name="username"value="<?php echo $username; ?>"  required="">
      <input class="pass" type="password" align="center"  placeholder="Password"name="password_1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                     title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required="">
      <input class="pass" type="password" align="center"  placeholder="confirm password"name="password_2" required="">
     <button type="submit" class="submit" name="reg_user" >Signup</button>
     <p class="forgot" align="center"><a href="#">You already have an acoount?<a href="login.html">Login</a></p>    
               
   
</div>
</form>
</body>

</html>




