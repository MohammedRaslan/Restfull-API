<?php 
    include_once("header/header.php");
   @ session_start();
?>
<!-- //banner -->
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="w3layouts_breadcrumbs_left">
				<ul>
					<li><i class="fa fa-home" aria-hidden="true"></i><a href="index.html">Home</a><span>/</span></li>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i>Add User...</li>
				</ul>
			</div>
			
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- contact -->
	<div class="welcome">
		<div class="container">
			<h2 class="w3ls_head">Here You Can Add User To Database<br> <?php echo @ $_SESSION['message1']; ?></h2>
            
            <div class="col-md-8 w3_agile_mail_left" style="position:relative; left:150px; ">
					<div class="agileits_mail_grid_right1 agile_mail_grid_right1">
					<form action="adduser_config.php" method="post" style="height:250px;">
                    
					<span style="position:relative;top:-30px;">
						<i>User Name</i>	
						<input type="text" name="name" placeholder=" " required="">
					</span>
					<span  style="position:relative;top:-30px;">
						<i>User Email</i>	
						<input type="text" name="email" placeholder=" " required="">
					</span>
					<span  style="position:relative;top:-30px;">
						<i>User Address</i>
						<input type="text" name="address" placeholder=" " required="">
					</span>
                    <span  style="position:relative;top:-30px;">
						<i>Account Number</i>
						<input type="text" name="a_number" placeholder=" " required="">
					</span>
                    <span  style="position:relative;top:-30px;">
						<i>Phone Number</i>
						<input type="text" name="p_number" placeholder=" " required="">
					</span>
					<div class="w3_submit" style="position:relative; right:190px; top:-15px;	">
						<input type="submit" value="Add User..." name="submit">
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
