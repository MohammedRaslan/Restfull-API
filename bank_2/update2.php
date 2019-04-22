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
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i>Update System ID...</li>
				</ul>
			</div>
			
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- contact -->
	<div class="welcome">
		<div class="container">
			<h2 class="w3ls_head">Your System Has An ID In Database<br>Do You Really Want To Update It ?</h2>
            
            <div class="col-md-8 w3_agile_mail_left" style="position:relative; left:150px; ">
					<div class="agileits_mail_grid_right1 agile_mail_grid_right1">
					<form action="update_config.php" method="post" style="height:250px;">
					<div class="w3_submit" style="position:relative; right:190px; top:100px;	">
						<input type="submit" value="Update..." name="yes">
                        <input type="submit" value="Cancel..." name="no">
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