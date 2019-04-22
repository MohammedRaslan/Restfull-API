<?php

		session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>CIB Bank</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Exchange Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- bootstrap-css -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!--// bootstrap-css -->
	<!-- css -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
	<!--// css -->
	<!-- font-awesome icons -->
	<link href="css/font-awesome.css" rel="stylesheet"> 
	<!-- //font-awesome icons -->
	<!-- font -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
	<!-- //font -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<![endif]-->
</head>
<body>
<!-- banner -->
	<div class="banner jarallax">
		<div class="banner-dot">
			<div class="header-top">
				<div class="container">
					<div class="w3layouts-logo">
							<h1 style="position:relative; left:115px;" >
								<a>CIB Bank</a>
							</h1>
						</div>
				</div>
			</div>
			<div class="header">
				<div class="container">
					<div class="top-nav">
						<nav class="navbar navbar-default">
								<!--navbar-header-->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav navbar-right">
									<li><a href="index.php" class="">Home</a></li>
									</li>	
									<li><a href="services.php">Services</a></li>
                                    <li><a href="about.php">About Us</a></li>
									<?php if (isset($_SESSION['username'])){ ?>
									<li><a href="search.php">Search About Customer</a> </li>
									<li><a href="adduser.php">Add User</a> </li>
									<li><a href="update.php">Update System ID</a> </li>
									<li style="position:relative; left:250px;" ><a href="logout.php">Logout</a></li>
									<?php }else { ?>
										<li style="position:relative; left:750px;"><a href="Login/login.php">Login</a></li>
									<?php }?>
								</ul>	
								<div class="clearfix"> </div>	
							</div>
						</nav>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="w3layouts-banner">
				<div class="container">
					<section class="slider">
						<div class="flexslider">
							<ul class="slides">
								<li>
									<div class="agileits_w3layouts_banner_info">
										<h3>congue vel urna. Quisque posuere </h3>
										<p>Standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
									</div>
								</li>
								<li>
									<div class="agileits_w3layouts_banner_info">
										<h3>Mauris ut enim sed tortor auctor</h3>
										<p>Standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
									</div>
								</li>
								<li>
									<div class="agileits_w3layouts_banner_info">
										<h3>Curabitur diam lorem, ultricies </h3>
										<p>Standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
									</div>
								</li>
							</ul>
						</div>
				</section>
			<!-- flexSlider -->
				<script defer src="js/jquery.flexslider.js"></script>
				<script type="text/javascript">
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				</script>
			<!-- //flexSlider -->
				</div>
			</div>
		</div>
	</div>
	