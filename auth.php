<?php
session_start();
 	
include_once 'dbconfig.php';
  
  $action= array();
  $action="success";
  if (isset($_POST['btn-signin'])) 
  {
    $uname= mysqli_real_escape_string($db,$_POST['uname']);
    $pass= mysqli_real_escape_string($db,$_POST['pass']);
    if (empty($uname)) 
    {
      $action="error";
    }
    if (empty($pass)) 
    {
      $action="error";
    }
    if ($action!="success")
    {
      ?>
      <script> alert('Please Fill Up All The Fields Properly');</script>
      <?php
    }
    if ($action=="success") 
    {
      $chk="SELECT user_login_name FROM user WHERE user_login_name='$uname' AND user_pass='$pass'";
      $query=$db->query($chk);
      $rc=mysqli_num_rows($query);
      if($rc>0)
      {
          $_SESSION["admin"]=$uname;
          header("Location:admin.php");
      }
      else
      {
        ?>
        <script> alert('User Name & Password Do Not Match');</script>
        <?php
      }
    }
  }
?>
<!DOCTYPE html>
<html>
<head>
<title>Piash Enterprise | LogIn Panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Coal, Mining, Bangladesh, Piash, Piash Coal,Coal Supply, BD, bd, Piash Enterprise" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstarp-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstarp-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
</head>
<body>
	<!-- banner -->
	<div class="banner">
		<div class="banner-content">
			<div class="logo">
				<a href="auth.php">Admin Panel</a>
			</div>
			<div class="top-nav">
				<span class="menu">MENU</span>
				<ul class="nav1 cl-effect-15">
					<li><a href="index.php" data-hover="Home">Home</a></li>
          <li><a href="about.php" data-hover="About">About</a></li>
          <li><a href="products.php" data-hover="Pricing">Pricing</a></li>
          <li><a href="gallery.php" data-hover="Gallery">Gallery</a></li>
          <li><a href="contact.php" data-hover="Contact">Contact</a></li>
          <li><a href="auth.php" class="active">Log In</a></li>
				</ul>
				<!-- script-for-menu -->
					<script>
						 $( "span.menu" ).click(function() {
						$( "ul.nav1" ).slideToggle( 300, function() {
						// Animation complete.
							});
							});
					</script>
				<!-- /script-for-menu -->
			</div>
			<div class="header-address">
				<ul>
					<li><a href="https://www.facebook.com/Invokers-162439367466365/timeline">TeamInvokers</a></li>
					<li class="phone-img">Ph : +88 01676320284</li>
					<li><a href="mailto:teaminvokers16@gmail.com">E-mail : teaminvokers16@gmail.com</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<div class="contact-info">
			<h3>Log In Panel</h3>
			<form class="navbar-form navbar-middle" method="post" id="login_form">
            	<input type="text" class="form-control" name="uname" id="uname" placeholder="User Name">
              	<input type="password" class="form-control" name="pass" id="pass" placeholder="Password">
              	<button type="submit" class="btn btn-default" name="btn-signin">Log In</button>
          	</form>
		<div class="clearfix"> </div>
	</div>
</body>	
</html>