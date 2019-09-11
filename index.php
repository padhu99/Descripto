<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: product.html");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>

<div class="header">
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Affordable and professional web design">
    <meta name ="keywords" content="web design, affordable web design, professional web design">
    <meta name="author" content="Brad Traversy">
    <title>Descripto | Welcome</title>
    <link rel="stylesheet" href="bala1.css">
  </head>
  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1>WELCOME <span class="highlight"><?php echo $_SESSION['username'];?></span> <a href="index.php?logout='1'" style="color: red;padding-top: 10px;padding-left:5%;">logout</a><a href="cons.html" style="color: red;padding-top: 10px; ">Wishlist</a></h1>


        </div>
        
        
      </div>
    </header>

    <section id="showcase">
      <div class="container">
        <h1>DESCRIPTO</h1>
        <p>an article or substance that is manufactured or refined for sale</p>

      </div>
    </section> 
    <section id="newsletter">
      <div class="container">
        
        <form method="post" action="des.php">
          <input type="text" placeholder="Enter product..." name="search">
          <button type="submit" class="button_1">Search</button>
        </form>
      </div>
    </section>



 
    <section id="boxes">
      <div class="container">
        <div class="box">
          <img src="123.png">
          <h3 style="margin-top: 10px">mobile phones</h3>
          <p>a portable device for communication</p>
        </div>
        <div class="box">
          <img src="apple2.jpg" style="margin-top: 25px">
          <h3 style="margin-top: 8px">laptops</h3>
          <p>a device to share resources and knowledge</p>
        </div>
        <div class="box">
          <img src="re1.png" style="margin-top: 25px">
          <h3 style="margin-top: 8px">bikes</h3>
          <p>an passionate person to show his skills</p>
        </div>
      </div>
    </section>

    <footer>
      <p>DESCRIPTO, Copyright &copy; 2017</p>
    </footer>
  </body>
</html>

    	    <?php endif ?>
</div>
		
</body>
</html>