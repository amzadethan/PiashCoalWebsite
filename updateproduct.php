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
	if (isset($_POST['btn-product-add'])) 
	{
		$id= mysqli_real_escape_string($db,$_POST['id']);
		$product_grade= mysqli_real_escape_string($db,$_POST['product_grade']);
		$product_scale= mysqli_real_escape_string($db,$_POST['product_scale']);
		$product_measurement= mysqli_real_escape_string($db,$_POST['product_measurement']);

		$add=$db->query("UPDATE product SET product_grade='$product_grade',product_scale='$product_scale',product_measurement='$product_measurement' WHERE id='$id'");
		if ($add) 
		{
			?>
				<script>alert('Successfully Added');</script>
			<?php
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
<title>Admin | New Product</title>
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
					<li><a href="updateproduct.php" class="active">Update Pricing</a></li>
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
	<!-- contact -->
		<!-- container -->
			<div class="contact-info">
				<form class="navbar-form navbar-right">
              <a class="btn btn-default" href="signout.php">Sign Out</a>
          </form>
				<h3>Welcome MD. Ashikur Rahman</h3>
				<p>From this page you can add a new Product</p>
			</div>
			<div class="clearfix"> </div>
			<div>
				<h3>New Product</h3>
			<form method="post">
				<table width="100%" cellspacing="2" border="0">
					<tbody>
						<tr>
							<td>
								<label for="id">Previous Grade ID</label>
							</td>
							<td>
								<label for="product_grade">Grade</label>
							</td>
							<td>
								<label for="product_scale">Scale</label>
							</td>
							<td>
								<label for="product_measurement">Measurement</label>
							</td>
						</tr>
						<tr>
							<td>
								<input type="text" name="id" id="id" tabindex="1" />
							</td>
							<td>
								<input type="text" name="product_grade" id="product_grade" tabindex="2" />
							</td>
							<td>
								<input type="text" name="product_scale" id="product_scale" tabindex="3" />
							</td>
							<td>
								<input type="text" name="product_measurement" id="product_measurement" tabindex="4" />
							</td>
						</tr>
						<tr>
							<td><label>
								<button class="btn btn-default" type="submit" name="btn-product-add">Add Product</button>
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