<?php
include_once("encrypt.php");
include_once("header/header.php");
?>
<?php/*
if (isset($_GET['nodata'])){
    $result = $_GET['nodata'];
    echo $result;
}*/?>
<!-- //banner -->
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="w3layouts_breadcrumbs_left">
				<ul>
					<li><i class="fa fa-home" aria-hidden="true"></i><a href="index.html">Home</a><span>/</span></li>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i>Result</li>
				</ul>
			</div>
			
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- contact -->
	<div class="welcome">
		<div class="container">
			<h2 class="w3ls_head">Customer Search Result</h2>
                <div class="col-md-8 w3_agile_mail_left" style="position:relative; left:150px; ">
					<div class="agileits_mail_grid_right1 agile_mail_grid_right1">
					<form action="search_config.php" method="post" style="height:250px;">
                    <?php
if(isset($_GET['result'])){
    $info = [];
    $info = $_GET['result'];
    $info = json_decode($info,true);
    $id   = $info[0];
    $name   = intostring($info[1]);
    $email  = intostring($info[2]);
    $address   = intostring($info[3]);
    $account   = intostring($info[4]);
    $phone   = intostring($info[5]);
    $balance   = $info[6];
?>
                 <ul>
                   <li><h3>Customer ID : <?php echo $id; ?></h3>  </li>
                   <li><h3> Customer Name : <?php echo $name; ?></h2> </li>
                   <li> <h3>Customer Email : <?php echo $email; ?> </h3> </li>
                   <li> <h3>Customer Account Number : <?php echo $account; ?> </h3> </li>
                   <li><h3> Customer Phone Number : <?php echo $phone; ?> </h3> </li>
                   <li><h3> Customer Balance : <?php echo $balance; ?> </h3> </li>
                </ul><?php }elseif(isset($_GET['nodata'])){
                                 $result = $_GET['nodata'];?>
                                 <h2 style="text-align:center; position:relative; top:90px;" ><?php echo $result;} ?></h2>
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