<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>C2 Massage Services | Registration</title>
  <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
  <div class="topnav">
      <a class="active" href="index.php">C2 Massage Services</a>
      <div class="topnav-right">
        <a href="index.php">Home</a>
        <a href="services.php">Services</a>
        <a class="active" href="register.php">Register</a>
        <a href="about.php">About</a>
      </div>
    </div>

  <div class="login">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p style="color: #f2f2f2;">
  		Already a member? <a href="login.php" style="color: #4CAF50; text-decoration:none;">Sign in</a>
  	</p>
  </form>

  
</body>
</html>