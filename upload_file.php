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

if(isset($_POST['Button']))
{
	$imgid= mysqli_real_escape_string($db,$_POST['imgid']);
	$ch="SELECT * FROM image_upload WHERE id='$imgid'";
	$res=mysqli_query($db,$ch) or die('error');
	while ($ro=mysqli_fetch_assoc($res))
	{
		$imgname=$ro['image_name'];
	}
	$do="uploads/".$imgname;
		$chk="SELECT * FROM image_upload WHERE image_name='$imgname'";
      	$result=mysqli_query($db,$chk) or die('error');
		while ($rc=mysqli_fetch_assoc($result))
		{
			$id=$rc['id'];
			$pid=$rc['product_id'];
		}
		
		if (!unlink($do))
  		{
  			echo ("Error deleting $des");
  		}
		else
  		{
  			$myExtension = array("jpg", "png", "jpeg");
			$filenameArray = explode( ".", $_FILES['photo']['name'] ); // explode() Function
			$fileExtension = end($filenameArray); // end() Function // Value = .jpg
		if( 
			($_FILES['photo']['error'] == 0) && 
			in_array($fileExtension, $myExtension) &&
			(
				$_FILES['photo']['type'] == "image/jpeg" || 
				$_FILES['photo']['type'] == "image/jpg" ||
				$_FILES['photo']['type'] == "image/png" ||
				$_FILES['photo']['type'] == "image/gif"
			) &&
			($_FILES['photo']['size'] < 999999)
			)
			{
			// move_uploaded_file(SOURCE, DESTINATION)
			$source = $_FILES['photo']['tmp_name'];
			$destination = "uploads/" . $_FILES['photo']['name'];
			move_uploaded_file($source, $destination);
			$pname=$_FILES['photo']['name'];
			$add=$db->query("UPDATE image_upload SET image_name='$pname' WHERE id='$id'");
			if ($add) 
			{
				?>
        		<script> alert('Image Uploaded Successfully');</script>
       		 <?php
				echo '<META HTTP-EQUIV="Refresh" Content="4; URL=upload_file.php">';
			}
	}
	else
	{
		echo "Sorry! Wrong file. Please try correct File.";
	}
  	}
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin | Upload</title>
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
					<li><a href="upload_file.php" class="Active">Upload</a></li>
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
				<p>From this page you can Upload an Image</p>
			</div>
			<div class="clearfix"> </div>
			<!--Services-->
			<div class="services">
		<div class="services-top">
			<div class="container">
					<?php
					include 'dbconfig.php';
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
					<div class="row">
						<div class="col-md-3">
							<?php
							echo "1 ";
							echo "<a href = '".$i1."'><img src = '".$i1."' height='137' width='253'></a>";
							?>
						</div>
						<div class="col-md-3">
							<?php
							echo "2 ";
							echo "<a href = '".$i1."'><img src = '".$i2."' height='137' width='253'></a>";
							?>
						</div>
						<div class="col-md-3">
							<?php
							echo "3 ";
							echo "<a href = '".$i1."'><img src = '".$i3."' height='137' width='253'></a>";
							?>
						</div>
						<div class="col-md-3">
							<?php
							echo "4 ";
							echo "<a href = '".$i1."'><img src = '".$i4."' height='137' width='253'></a>";
							?>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>

				<div class="container">
				<?php
					include 'dbconfig.php';
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
					<div class="row">
						<div class="col-md-3">
							<?php
							echo "5 ";
							echo "<a href = '".$i1."'><img src = '".$i1."' height='137' width='253'></a>";
							?>
						</div>
						<div class="col-md-3">
							<?php
							echo "6 ";
							echo "<a href = '".$i1."'><img src = '".$i2."' height='137' width='253'></a>";
							?>
						</div>
						<div class="col-md-3">
							<?php
							echo "7 ";
							echo "<a href = '".$i1."'><img src = '".$i3."' height='137' width='253'></a>";
							?>
						</div>
						<div class="col-md-3">
							<?php
							echo "8 ";
							echo "<a href = '".$i1."'><img src = '".$i4."' height='137' width='253'></a>";
							?>
						</div>
					</div>
					
					<div class="clearfix"> </div>
				</div>

		<div class="container">
				<?php
					include 'dbconfig.php';
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
					<div class="row">
						<div class="col-md-3">
							<?php
							echo "9 ";
							echo "<a href = '".$i1."'><img src = '".$i1."' height='137' width='253'></a>";
							?>
						</div>
						<div class="col-md-3">
							<?php
							echo "10 ";
							echo "<a href = '".$i1."'><img src = '".$i2."' height='137' width='253'></a>";
							?>
						</div>
						<div class="col-md-3">
							<?php
							echo "11 ";
							echo "<a href = '".$i1."'><img src = '".$i3."' height='137' width='253'></a>";
							?>
						</div>
						<div class="col-md-3">
							<?php
							echo "12 ";
							echo "<a href = '".$i1."'><img src = '".$i4."' height='137' width='253'></a>";
							?>
						</div>
					</div>
					
					<div class="clearfix"> </div>
				</div>

				<div class="container">
				<?php
					include 'dbconfig.php';
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
					<div class="row">
						<div class="col-md-3">
							<?php
							echo "13 ";
							echo "<a href = '".$i1."'><img src = '".$i1."' height='137' width='253'></a>";
							?>
						</div>
						<div class="col-md-3">
							<?php
							echo "14 ";
							echo "<a href = '".$i1."'><img src = '".$i2."' height='137' width='253'></a>";
							?>
						</div>
						<div class="col-md-3">
							<?php
							echo "15 ";
							echo "<a href = '".$i1."'><img src = '".$i3."' height='137' width='253'></a>";
							?>
						</div>
						<div class="col-md-3">
							<?php
							echo "16 ";
							echo "<a href = '".$i1."'><img src = '".$i4."' height='137' width='253'></a>";
							?>
						</div>
					</div>
					
					<div class="clearfix"> </div>
				</div>
		<div class="clearfix"> </div>
		
	</div>
			<!--Services-->


			<div class="contact-info">
				<h3>Select An Image</h3>
				<form action="" method="post" enctype="multipart/form-data" class="navbar-form navbar-middle" id="login_form">
					<tr>
						<td>
							<p>Image To Delete</p>
							<label for="imgid">Image ID</label>
						</td>
						<td>
							<input type="text" name="imgid" id="imgid" tabindex="1"/>
						</td>	
					</tr>
					<tr>
						<td>
							<p></p>
						</td>		
					</tr>
					<tr>
						<td>
							<p>Image To Upload</p>
						</td>
						<td>
							<input type="file" class="form-control" name="photo" id="file"/>
						</td>
					</tr>
					<tr>
						<td>
							<p>Click To Submit</p>
						</td>
						<td>
							<button class="btn btn-default" type="submit" name="Button">Submit</button>
						</td>
					</tr>		
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
		<!-- //container -->
	</div>
</body>	
</html>