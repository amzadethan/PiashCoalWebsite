<?php
	session_start();
	if (!isset($_SESSION["admin"])) 
	{
		header("Location:index.php");
	}
	if (isset($_POST['btn-signout'])) 
	{
		session_destroy();
		header("Location:index.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
<title>Piash Enterprise | Admin</title>
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
				<a href="admin.php">Admin Panel</a>
			</div>
			<div class="top-nav">
				<span class="menu">MENU</span>
				<ul class="nav1 cl-effect-15">
					<li><a href="admin.php" class="active">Home</a></li>
					<li><a href="updateproduct.php" data-hover="Update Pricing">Update Pricing</a></li>
					<li><a href="upload_file.php" data-hover="Upload">Upload</a></li>
					<li><a href="validity.php" data-hover="Validity">Validity</a></li>
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
					<li>TeamInvokers</li>
					<li class="phone-img">Ph : +88 01676320284</li>
					<li><a href="mailto:teaminvokers16@gmail.com">E-mail : teaminvokers16@gmail.com</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<div class="contact-info">
		<form class="navbar-form navbar-right">
              <a class="btn btn-default" href="signout.php">Sign Out</a>
          </form>
			<h3>Welcome Admin</h3>
			<h4>Please Navigate to your desired Action Bar From the Upper Menu</h4>
		<div class="clearfix"> </div>
	</div>
</body>	
</html>