<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <style >
  * {
  margin: 0px;
  padding: 0px;
}
body {
  font-size: 120%;
   background:url('lapin1.jpg') no-repeat 0 -400px;
  background-position: center;
  background-size: 2000px;
}
button{
  cursor: pointer;
}

.header {
  width: 30%;
  margin: 50px auto 0px;
  color: white;
  background: blue;
  text-align: center;
  border: 1px solid #B0C4DE;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
}
form, .content {
  width: 30%;
  margin: 0px auto;
  padding: 20px;
  background: black;
  border-radius: 0px 0px 10px 10px;
}
.input-group {
  margin: 10px 0px 10px 0px;
}
.input-group label {
  display: block;
  text-align: left;
  margin: 3px;
  color: white;
}
.input-group input {
  height: 30px;
  width: 93%;
  padding: 5px 10px;
  font-size: 16px;
  border:none;
  border-bottom: 1px solid #fff;
  background:transparent;
  color: white;
}
.btn {
  padding: 10px;
  font-size: 15px;
  color: white;
  background: blue;
  border: none;
  border-radius: 5px;
}
.error {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
}
.success {
  color: #3c763d; 
  background: #dff0d8; 
  border: 1px solid #3c763d;
  margin-bottom: 20px;
}
.paragraph{
  text-align: center;
  padding: 10px;
  font-size: 40px;
  background-color:#35424a;
  color: white;
}


</style>
</head>
<body>
   <div class="paragraph">
    <p><span style="color: red;">THE</span> PRODUCT DESCRIPTION<span style="float: right;font-size: 25px;padding-top: 5px;">Not yet a member? <a href="register.php" style="text-decoration: none;color: red;">Sign up</a></span></p>
  </div>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" placeholder="enter username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password" placeholder="enter password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	
  </form>

    
</body>
</html>