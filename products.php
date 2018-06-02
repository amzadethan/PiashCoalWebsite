<?php
 include 'dbconfig.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Piash Enterprise | Product & Price</title>
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
				<a href="index.php">Piash Enterprise</a>
			</div>
			<div class="top-nav">
				<span class="menu">MENU</span>
				<ul class="nav1 cl-effect-15">
					<li><a href="index.php" data-hover="Home">Home</a></li>
					<li><a href="about.php" data-hover="About">About</a></li>
					<li><a href="products.php" class="active">Pricing</a></li>
					<li><a href="gallery.php" data-hover="Gallery">Gallery</a></li>
					<li><a href="contact.php" data-hover="Contact">Contact</a></li>
					<li><a href="auth.php" data-hover="Log In">Log In</a></li>
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
		</div>
	</div>
	<!-- //banner -->

	<!-- Product & Pricing Table -->
	<!-- services -->
	<div class="services">
		<div class="services-top">
				<div class="services-info">
					<h3>Pricing</h3>
					<?php
					include 'dbconfig.php';
					$chk="SELECT * FROM validity WHERE id=1";
					$result=mysqli_query($db,$chk) or die('error');
					while ($rc=mysqli_fetch_assoc($result))
					{
						$ori_from=$rc['date_from'];
						$ori_to=$rc['date_to'];
						$new_from=date("d/m/Y", strtotime($ori_from));
						$new_to=date("d/m/Y", strtotime($ori_to));
						$date_from="( ".$new_from;
						$date_to=" - ".$new_to." )";
					}
					?>
					<p><?php echo $date_from; echo $date_to; ?></p>
				</div>
			<div class="container">
					<?php
					include 'dbconfig.php';
					$chk="SELECT * FROM product WHERE id=1";
					$result=mysqli_query($db,$chk) or die('error');
					while ($rc=mysqli_fetch_assoc($result))
					{
						$product_grade=$rc['product_grade'];
						$product_scale=$rc['product_scale'];
						$product_measurement=$rc['product_measurement'];
					}
					$ch="SELECT * FROM image_upload WHERE id=1";
					$res=mysqli_query($db,$ch) or die('error');
					while ($rd=mysqli_fetch_assoc($res))
					{
						$i1="uploads/".$rd['image_name'];
					}
					$ch="SELECT * FROM image_upload WHERE id=2";
					$res=mysqli_query($db,$ch) or die('error');
					while ($rd=mysqli_fetch_assoc($res))
					{
						$i2="uploads/".$rd['image_name'];
					}
					$ch="SELECT * FROM image_upload WHERE id=3";
					$res=mysqli_query($db,$ch) or die('error');
					while ($rd=mysqli_fetch_assoc($res))
					{
						$i3="uploads/".$rd['image_name'];
					}
					$ch="SELECT * FROM image_upload WHERE id=4";
					$res=mysqli_query($db,$ch) or die('error');
					while ($rd=mysqli_fetch_assoc($res))
					{
						$i4="uploads/".$rd['image_name'];
					}
					?>
					<h3 style="color:#1cd5b5;font-family: PoiretOne-Regular;margin:0;font-size: 3em;"><?php echo $product_grade; ?></h3>
					<table width="100%" text-align="center" border="0" cellspacing="0">
					<tr>
						<td><h3>Scale</h3></td>
						<td><h3>Measurement</h3></td>
					</tr>
					<?php
					include 'dbconfig.php';
						?>
						<tr>
						<td><h4><?php echo $product_scale; ?></h4></td>
						<td><h4><?php echo $product_measurement; ?></h4></td>
						</tr>
						<?php
						?>
					</table>
					<div class="row">
						<div class="col-md-3">
							<?php
							echo "<a href = '".$i1."'><img src = '".$i1."' height='137' width='253'></a>";
							?>
						</div>
						<div class="col-md-3">
							<?php
							echo "<a href = '".$i2."'><img src = '".$i2."' height='137' width='253'></a>";
							?>
						</div>
						<div class="col-md-3">
							<?php
							echo "<a href = '".$i3."'><img src = '".$i3."' height='137' width='253'></a>";
							?>
						</div>
						<div class="col-md-3">
							<?php
							echo "<a href = '".$i4."'><img src = '".$i4."' height='137' width='253'></a>";
							?>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>

				<div class="container">
				<?php
					include 'dbconfig.php';
					$chk="SELECT * FROM product WHERE id=2";
					$result=mysqli_query($db,$chk) or die('error');
					while ($rc=mysqli_fetch_assoc($result))
					{
						$product_grade=$rc['product_grade'];
						$product_scale=$rc['product_scale'];
						$product_measurement=$rc['product_measurement'];
					}
					$ch="SELECT * FROM image_upload WHERE id=5";
					$res=mysqli_query($db,$ch) or die('error');
					while ($rd=mysqli_fetch_assoc($res))
					{
						$i1="uploads/".$rd['image_name'];
					}
					$ch="SELECT * FROM image_upload WHERE id=6";
					$res=mysqli_query($db,$ch) or die('error');
					while ($rd=mysqli_fetch_assoc($res))
					{
						$i2="uploads/".$rd['image_name'];
					}
					$ch="SELECT * FROM image_upload WHERE id=7";
					$res=mysqli_query($db,$ch) or die('error');
					while ($rd=mysqli_fetch_assoc($res))
					{
						$i3="uploads/".$rd['image_name'];
					}
					$ch="SELECT * FROM image_upload WHERE id=8";
					$res=mysqli_query($db,$ch) or die('error');
					while ($rd=mysqli_fetch_assoc($res))
					{
						$i4="uploads/".$rd['image_name'];
					}
					?>
					<h3 style="color:#1cd5b5;font-family: PoiretOne-Regular;margin:0;font-size: 3em;"><?php echo $product_grade; ?></h3>
					<table width="100%" text-align="center" border="0" cellspacing="0">
					<tr>
						<td><h3>Scale</h3></td>
						<td><h3>Measurement</h3></td>
					</tr>
					<?php
					include 'dbconfig.php';
						?>
						<tr>
						<td><h4><?php echo $product_scale; ?></h4></td>
						<td><h4><?php echo $product_measurement; ?></h4></td>
						</tr>
						<?php
						?>
					</table>
					<div class="row">
						<div class="col-md-3">
							<?php
							echo "<a href = '".$i1."'><img src = '".$i1."' height='137' width='253'></a>";
							?>
						</div>
						<div class="col-md-3">
							<?php
							echo "<a href = '".$i2."'><img src = '".$i2."' height='137' width='253'></a>";
							?>
						</div>
						<div class="col-md-3">
							<?php
							echo "<a href = '".$i3."'><img src = '".$i3."' height='137' width='253'></a>";
							?>
						</div>
						<div class="col-md-3">
							<?php
							echo "<a href = '".$i4."'><img src = '".$i4."' height='137' width='253'></a>";
							?>
						</div>
					</div>
					
					<div class="clearfix"> </div>
				</div>

		<div class="container">
				<?php
					include 'dbconfig.php';
					$chk="SELECT * FROM product WHERE id=3";
					$result=mysqli_query($db,$chk) or die('error');
					while ($rc=mysqli_fetch_assoc($result))
					{
						$product_grade=$rc['product_grade'];
						$product_scale=$rc['product_scale'];
						$product_measurement=$rc['product_measurement'];
					}
					$ch="SELECT * FROM image_upload WHERE id=9";
					$res=mysqli_query($db,$ch) or die('error');
					while ($rd=mysqli_fetch_assoc($res))
					{
						$i1="uploads/".$rd['image_name'];
					}
					$ch="SELECT * FROM image_upload WHERE id=10";
					$res=mysqli_query($db,$ch) or die('error');
					while ($rd=mysqli_fetch_assoc($res))
					{
						$i2="uploads/".$rd['image_name'];
					}
					$ch="SELECT * FROM image_upload WHERE id=11";
					$res=mysqli_query($db,$ch) or die('error');
					while ($rd=mysqli_fetch_assoc($res))
					{
						$i3="uploads/".$rd['image_name'];
					}
					$ch="SELECT * FROM image_upload WHERE id=12";
					$res=mysqli_query($db,$ch) or die('error');
					while ($rd=mysqli_fetch_assoc($res))
					{
						$i4="uploads/".$rd['image_name'];
					}
					?>
					<h3 style="color:#1cd5b5;font-family: PoiretOne-Regular;margin:0;font-size: 3em;"><?php echo $product_grade; ?></h3>
					<table width="100%" text-align="center" border="0" cellspacing="0">
					<tr>
						<td><h3>Scale</h3></td>
						<td><h3>Measurement</h3></td>
					</tr>
					<?php
					include 'dbconfig.php';
						?>
						<tr>
						<td><h4><?php echo $product_scale; ?></h4></td>
						<td><h4><?php echo $product_measurement; ?></h4></td>
						</tr>
						<?php
						?>
					</table>
					<div class="row">
						<div class="col-md-3">
							<?php
							echo "<a href = '".$i1."'><img src = '".$i1."' height='137' width='253'></a>";
							?>
						</div>
						<div class="col-md-3">
							<?php
							echo "<a href = '".$i2."'><img src = '".$i2."' height='137' width='253'></a>";
							?>
						</div>
						<div class="col-md-3">
							<?php
							echo "<a href = '".$i3."'><img src = '".$i3."' height='137' width='253'></a>";
							?>
						</div>
						<div class="col-md-3">
							<?php
							echo "<a href = '".$i4."'><img src = '".$i4."' height='137' width='253'></a>";
							?>
						</div>
					</div>
					
					<div class="clearfix"> </div>
				</div>

				<div class="container">
				<?php
					include 'dbconfig.php';
					$chk="SELECT * FROM product WHERE id=4";
					$result=mysqli_query($db,$chk) or die('error');
					while ($rc=mysqli_fetch_assoc($result))
					{
						$product_grade=$rc['product_grade'];
						$product_scale=$rc['product_scale'];
						$product_measurement=$rc['product_measurement'];
					}
					$ch="SELECT * FROM image_upload WHERE id=13";
					$res=mysqli_query($db,$ch) or die('error');
					while ($rd=mysqli_fetch_assoc($res))
					{
						$i1="uploads/".$rd['image_name'];
					}
					$ch="SELECT * FROM image_upload WHERE id=14";
					$res=mysqli_query($db,$ch) or die('error');
					while ($rd=mysqli_fetch_assoc($res))
					{
						$i2="uploads/".$rd['image_name'];
					}
					$ch="SELECT * FROM image_upload WHERE id=15";
					$res=mysqli_query($db,$ch) or die('error');
					while ($rd=mysqli_fetch_assoc($res))
					{
						$i3="uploads/".$rd['image_name'];
					}
					$ch="SELECT * FROM image_upload WHERE id=16";
					$res=mysqli_query($db,$ch) or die('error');
					while ($rd=mysqli_fetch_assoc($res))
					{
						$i4="uploads/".$rd['image_name'];
					}
					?>
					<h3 style="color:#1cd5b5;font-family: PoiretOne-Regular;margin:0;font-size: 3em;"><?php echo $product_grade; ?></h3>
					<table width="100%" text-align="center" border="0" cellspacing="0">
					<tr>
						<td><h3>Scale</h3></td>
						<td><h3>Measurement</h3></td>
					</tr>
					<?php
					include 'dbconfig.php';
						?>
						<tr>
						<td><h4><?php echo $product_scale; ?></h4></td>
						<td><h4><?php echo $product_measurement; ?></h4></td>
						</tr>
						<?php
						?>
					</table>
					<div class="row">
						<div class="col-md-3">
							<?php
							echo "<a href = '".$i1."'><img src = '".$i1."' height='137' width='253'></a>";
							?>
						</div>
						<div class="col-md-3">
							<?php
							echo "<a href = '".$i2."'><img src = '".$i2."' height='137' width='253'></a>";
							?>
						</div>
						<div class="col-md-3">
							<?php
							echo "<a href = '".$i3."'><img src = '".$i3."' height='137' width='253'></a>";
							?>
						</div>
						<div class="col-md-3">
							<?php
							echo "<a href = '".$i4."'><img src = '".$i4."' height='137' width='253'></a>";
							?>
						</div>
					</div>
					
					<div class="clearfix"> </div>
				</div>
		<div class="clearfix"> </div>
		<div class="services-bottom">
			<!-- container -->
			<div class="container">
				<div class="services-bottom-info">
					<h3>Chain Working System</h3>
				</div>
				<div class="services-bottom-grids">
					<div class=" col-md-4 services-bottom-grid">
						<div class="services-img">
							<img src="images/s1.png" alt="" />
						</div>
						<h5>Management</h5>
						<p>Our Top Expert managers make sure that everything goes just like the way it should be
						</p>
					</div>
					<div class=" col-md-4 services-bottom-grid">
						<div class="services-img">
							<img src="images/s2.png" alt="" />
						</div>
						<h5>Mining</h5>
						<p>Experienced workers do their work so magnificently that you can find the best service from us
						</p>
					</div>
					<div class=" col-md-4 services-bottom-grid">
						<div class="services-img">
							<img src="images/s3.png" alt="" />
						</div>
						<h5>Supply</h5>
						<p>Our Constant and reliable supply system has no record of failure and it shall always prevail
						</p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<!-- //container -->
		</div>
	</div>
	<!-- //services -->
	<!-- footer -->
	<div class="footer">
		<!-- container -->
		<div class="container">
			<div class="footer-info">
				<h3>Get In Touch</h3>
				<ul>
					<li><a href="https://www.facebook.com/Piash-Enterprise-652567444802157/?fref=ts" class="facebook twitter"> </a>
					<li><a href="#" class="facebook"> </a>
					<li><a href="#" class="facebook chrome"> </a>
					<li><a href="#" class="facebook dribbble"> </a>
					<li><a href="#" class="facebook pinterest"> </a>
				</ul>
				<p class="copyright"> © 2016 TeamInvokers. All Rights Reserved  Designed by <a href="https://www.facebook.com/Invokers-162439367466365/timeline">TeamInvokers</a></p>
			</div>	
		</div>
		<!-- //container -->
	</div>
	<!-- //footer -->
</body>	
</html>