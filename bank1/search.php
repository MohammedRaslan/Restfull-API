<?php 
	include_once("header/header.php");
?>
<!-- //banner -->
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="w3layouts_breadcrumbs_left">
				<ul>
					<li><i class="fa fa-home" aria-hidden="true"></i><a href="index.html">Home</a><span>/</span></li>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i>Search...</li>
				</ul>
			</div>
			
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- contact -->
	<div class="welcome">
		<div class="container">
			<h2 class="w3ls_head">Search for customer on other system</h2>
			<p class="w3agile">You Can Choose Which System You Want To Search For Customer On It By Write The Customer Account Number And The Company Which he/she Belong To.</p><div class="w3ls_news_grids">
				<div class="col-md-8 w3_agile_mail_left" style="position:relative; left:150px; ">
					<div class="agileits_mail_grid_right1 agile_mail_grid_right1">
					<form action="search_config.php" method="post" style="height:250px;">
					<span>
						<i>Account Number</i>	
						<input type="text" name="account" placeholder=" " required="">
					</span>
					<span  style="position:relative;top:30px;">
						<i>Customer Name</i>	
						<input type="text" name="name" placeholder=" " required="">
					</span>
					<span  style="position:relative;top:50px;">
						<i>Customer Company</i>
						<input type="text" name="company" placeholder=" " required="">
					</span>
					<div class="w3_submit" style="position:relative; right:190px; top:90px;	">
						<input type="submit" value="Search..." name="submit">
					</div>
				</form>
					</div>
				</div>
				
					
					
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>

<?php 
	include_once("footer/footer.php");
?>
	<!-- //footer -->
	<script src="js/jarallax.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
</body>	
</html>