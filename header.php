<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>IMSR</title>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="">
		<meta name="description" content="">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/bootstrap.min2.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<style type="text/css">
			
			.bvbanner img
				{
					height: auto;
					width: 100%;
				}
			.ad2017 img
				{
					height: auto;
					width: 100%;
				}
			.socio img
						{
							height: 35px;
							width: 35px;
						}	
 /*-- queries for social icons ------------------*/
				
				/* Smaller than standard 960 (devices and browsers) */
				@media only screen and (max-width: 1200px) {
					#ac-wrapper table
					{
						width:650px;
						height:520px;
					}
					#ac-wrapper img
					{
						position:relative; top:20px;right:0;width:720px;text-align:right;  
					}
				}

				/* Tablet Portrait size to standard 960 (devices and browsers) */
				@media only screen and (min-width: 1001px) and (max-width: 1200px) {
					#ac-wrapper table
					{
						width:550px;
						height:420px;
					}
					#ac-wrapper img
					{
						position:relative; top:2px;right:45px;width:28px;text-align:right;  
					}
				}


				/* Mobile Landscape Size to Tablet Portrait (devices and browsers) */
				@media only screen and (min-width: 751px) and (max-width: 1000px) {
					.socio img
						{
							height: 25px;
							width: 25px;

						}	
						#ac-wrapper table
					{
						width:450px;
						height:320px;
					}
					#ac-wrapper img
					{
						position:relative; top:2px;right:90px;width:28px;text-align:right;   
					}
				}
				@media only screen and (min-width: 460px) and (max-width: 750px) {
					.socio img
						{
							height: 25px;
							width: 25px;

						}	
						#ac-wrapper table
					{
						width:350px;
						height:220px;
					}
					#ac-wrapper img
					{
						position:relative; top:2px;right:280px;width:28px;text-align:right;   
					}
				}

				
				@media only screen and (max-width: 460px) {
					
					.socio img
						{
							height: 15px;
							width: 15px;

						}	
					#ac-wrapper table
					{
						width:260px;
						height:180px;
					}
					#ac-wrapper img
					{
						position:relative; top:20px;right:380px;width:28px;text-align:right;  
					}
				}	
				
		</style>
		
	</head>

	<body style="font-family: 'roboto'" onload="myFunction()";>
	<div class="section navbar-fixed-top">
	<div class="row" style="background-color: #21242c;">
		<div class="col-sm-12"> 
				<div class="container">
	   				<div class="row" style="background-color: #21242c;">
						<!-- header section -->
								    
								    <div class="col-sm-9 col-xs-12" style="padding-top: 10px;" >
								      <center class="bvbanner"><a href="index.php" ><img am-TopLogo alt="BVIMSR"  src="images/b1.png" class="img-responsive" style="margin: 0; "></a></center>
								    </div>
								    
								    <div class="col-sm-3 col-xs-12">
								    		<div class="container-fluid">
								    			<center style="background-color: #17A589; border-bottom-right-radius: 10px; border-bottom-left-radius: 10px; color: #fff; font-size: 11px;">
											      	<a href="" style="color: #fff; padding: 5px;"> Careers at BVIMSR</a><strong>| </strong><a href="" style="color: #fff;">Login </a><strong>| </strong><a href="contactus.php" style="color: #fff;"> Contact us </a>
											    </center>
											</div>
									<div class=" col-sm-12 col-xs-6 admissionlink" style="padding-top: 10px;">		
											<center class="ad2017"><a href="#"><img src="images/ad2017.gif" style="border-radius: 6px;background-color: red""></a></center></div>
									<div class=" col-sm-12 col-xs-6 socio" style="padding: 10px; ">	
								    		
								    		<a href="#"><img src="images/socio/facebook.jpg" style="border-radius: 6px;"></a>
								    		<a href="#"><img src="images/socio/twitter.jpg" style="border-radius: 6px;"></a>
								    		<a href="#"><img src="images/socio/linkedin.jpg" style="border-radius: 6px;"></a>
								    		<a href="#"><img src="images/socio/youtube.jpg" style="border-radius: 6px;"></a>
								    		
								    </div>	
								    </div>					
								    				
								    </div>
								    	</div>
								      
				</div>
		</div>
	<div class="row" style="background-color: #17A589;height: 43px;" >
		<div class="col-sm-12" >
		<?php 
		require("navbar2.php");
		?>
		</div>
	</div>
	</div>
	<?php 
		require("stickybuttons.php");
		?> 
			
			<script src="js/jquery.js"></script>
			<script src="js/bootstrap.js"></script>
			<script src="js/bootstrap.min1.js"></script>
			<script src="js/custom.js"></script>
	</body>
</html>