<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
  <div class="paragraph">
    <p><span style="color: red;">THE</span> PRODUCT DESCRIPTION<span style="float: right;font-size: 25px;padding-top: 5px;">Already a member? <a href="login.php" style="text-decoration: none; color: red;">Sign in</a></span></p>
  </div>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>" placeholder="enter username">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>" placeholder="enter email id">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1" placeholder="enter password">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2" placeholder="re-enter password">
  	</div>
    <div class="input-group">
      <label>Mobile number</label>
      <input type="text" name="number1" placeholder="enter phone number">
    </div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user" >Register</button>
  	</div>
  	
  		
  </form>

</body>
</html>