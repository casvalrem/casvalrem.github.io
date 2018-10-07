<?php include('server.php');
  
  if(!isset($_SESSION['username'])) 
    { 
        
    } 
    if (isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: productorder.php');
    }
 ?>
<!DOCTYPE html>
<html>
	<head>
		<title>C2 Massage Services | Login</title>
		<link rel="stylesheet" type="text/css" href="./css/style.css">
	</head>
	<body>
		  <div class="topnav">
        <a class="active" href="index.php">C2 Massage Services</a>
        <div class="topnav-right">
          <a href="index.php">Home</a>
          <a href="services.php">Services</a>
          <a class="active" href="login.php">Login</a>
          <a  href="about.php">About</a>
        </div>
      </div>

		<div class="login">
  	 <h2>Login</h2>
    </div>
	 
    <form method="post" action="login.php">
    	<?php include('errors.php'); ?>
    	<div class="input-group">
    		<label>Username</label>
    		<input type="text" name="username" >
    	</div>
    	<div class="input-group">
    		<label>Password</label>
    		<input type="password" name="password">
    	</div>
    	<div class="input-group">
    		<button type="submit" class="btn" name="login_user">Login</button>
    	</div>
    	<p style="color: #f2f2f2;">
    		Not yet a member? <a href="register.php" style="color: #4CAF50; text-decoration:none;">Sign up</a>
    	</p>
    </form>

    
	</body>
</html>