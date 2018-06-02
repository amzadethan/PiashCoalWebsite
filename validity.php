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
	include 'dbconfig.php';
	if (isset($_POST['btn-product-valid'])) 
	{
		$date_from=mysqli_real_escape_string($db,$_POST['date_from']);
		$date_to=mysqli_real_escape_string($db,$_POST['date_to']);

		$add=$db->query("UPDATE validity SET date_from='$date_from',date_to='$date_to' WHERE id=1");
		if ($add) 
		{
			?>
				<script>alert('Successfully Updated');</script>
			<?php
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
<title>Admin | Update Validity</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Coal, Mining, Bangladesh, Piash, Piash Coal,Coal Supply, BD, bd, Piash Enterprise" />
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
					<li><a href="admin.php" data-hover="Home">Home</a></li>
					<li><a href="updateproduct.php" data-hover="Update Pricing">Update Pricing</a></li>
					<li><a href="upload_file.php" data-hover="Upload">Upload</a></li>
					<li><a href="validity.php" class="active">Validity</a></li>
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
	<!-- contact -->
		<!-- container -->
			<div class="contact-info">
				<form class="navbar-form navbar-right">
              <a class="btn btn-default" href="signout.php">Sign Out</a>
          </form>
				<h3>Welcome MD. Ashikur Rahman</h3>
				<p>From this page you can Update Product Validity Date</p>
			</div>
			<div class="clearfix"> </div>
			<div>
				<h3>New Product</h3>
			<form method="post">
				<table width="100%" cellspacing="2" border="0">
					<tbody>
						<tr>
							<td>
								<label for="date_from">Date From</label>
							</td>
							<td>
								<label for="date_to">Date To</label>
							</td>
						</tr>
						<tr>
							<td>
								<input type="date" name="date_from" id="date_from" tabindex="1"/>
							</td>
							<td>
								<input type="date" name="date_to" id="date_to" tabindex="2"/>
							</td>
						</tr>
						<tr>
							<td><label>
								<button class="btn btn-default" type="submit" name="btn-product-valid">Update Validity</button>
							</label></td>
						</tr>
					</tbody>
				</table>
			</form>
			</div>
			<div class="clearfix"> </div>
		</div>
		<!-- //container -->
	</div>
</body>	
</html>