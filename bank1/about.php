<?php
include_once("header/header.php");
?>
<!-- //banner -->
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="w3layouts_breadcrumbs_left">
				
				<ul>
					<li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Home</a><span>/</span></li>
					<li><i class="fa fa-info-circle" aria-hidden="true"></i>About</li>
				</ul>
			</div>
			
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- about -->
	<div class="welcome">
		<div class="container">
			<h2 class="w3ls_head">Why Choose Us </h2>
			<p class="w3agile">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque
				corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
			
		</div>
	</div>
<!-- //about -->
<!-- skills -->
	<script src="js/skill.bars.jquery.js"></script>
	<script>
		$(document).ready(function(){
			
			$('.skillbar').skillBars({
				from: 0,
				speed: 4000, 
				interval: 100,
				decimals: 0,
			});
			
		});
	</script>
<!-- //skills -->
	<div class="wthree-mid jarallax">
		<div class="container">
			<h3>Nisl amet dolor sit ipsum veroeros sed blandit</h3>
			<p>Standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
		</div>
	</div>
<!-- team -->
	<div id="team" class="team">
		<div class="container">
			<h3 class="w3ls_head">Meet Our Team </h3>
			<p class="w3agile">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque
				corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
			
			<div class="w3_agile_team_grids">
				<div class="col-md-3 w3_agile_team_grid">
					<div class="hover14 column">
						<figure><img src="images/t1.jpg" alt=" " class="img-responsive" /></figure>
					</div>
					<h3>Amanda Seylon</h3>
					<p>Coiffeur</p>
				</div>
				<div class="col-md-3 w3_agile_team_grid">
					<div class="hover14 column">
						<figure><img src="images/t2.jpg" alt=" " class="img-responsive" /></figure>
					</div>
					<h3>Laura Mark</h3>
					<p>Coiffeur</p>
				</div>
				<div class="col-md-3 w3_agile_team_grid">
					<div class="hover14 column">
						<figure><img src="images/t3.jpg" alt=" " class="img-responsive" /></figure>
					</div>
					<h3>Lusiana James</h3>
					<p>Coiffeur</p>
				</div>
				<div class="col-md-3 w3_agile_team_grid">
					<div class="hover14 column">
						<figure><img src="images/t4.jpg" alt=" " class="img-responsive" /></figure>
					</div>
					<h3>Catharine</h3>
					<p>Coiffeur</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- team -->

<!-- footer -->
<?php  include_once("footer/footer.php"); ?>
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