<!DOCTYPE HTML>
<?php
	session_start();
	require("header.php");
?>
<html>
<header>
	<link rel="stylesheet" id="styles-minified-css" href="css/style-minifield.css" type="text/css" media="all" />
        <style type="text/css">
        	body
        	{
        		font-family: "roboto";
        	}
        	.tales {
				  width: 100%;
				}
				
            .box{
                background:#fff; margin: 15px 0; overflow:hidden;
                height: 190px;
            }
            
            .box-content{
                padding:0 10px 10px;
            }
            @media (min-width: 487px) {
              .container {
                max-width: 750px;
              }
              .col-sm-6 {
                width: 50%;
              }
            }
            @media (min-width: 900px) {
              .container {
                max-width: 970px;
              }
              .col-md-4 {
                width: 33.33333333333333%;
              }
            }

            @media (min-width: 1200px) {
              .container {
                max-width: 1170px;
              }
              .col-lg-3 {
                width: 25%;
              }
              }
            }
		

				/* Smaller than standard 960 (devices and browsers) */
				@media only screen and (max-width: 959px) {}
				.slideimg img
				{
					height: 50px;
					width: 100%;
				}
				/* Tablet Portrait size to standard 960 (devices and browsers) */
				@media only screen and (min-width: 768px) and (max-width: 959px) {}
				.slideimg img
				{
					height:35px;
					width: 70%;
				}
				/* All Mobile Sizes (devices and browser) */
				@media only screen and (max-width: 767px) {}

				/* Mobile Landscape Size to Tablet Portrait (devices and browsers) */
				@media only screen and (min-width: 480px) and (max-width: 767px) {}

				/* Mobile Portrait Size to Mobile Landscape Size (devices and browsers) */
				@media only screen and (max-width: 479px) {
					
				}	
		</style>
		<script type="text/javascript">
				$( document ).ready(function() {
				$(window).resize(function() {
				    $('.homeclass').css("margin-top", $(".navbar-fixed-top").height());
				}).resize();
				});
		</script>
</header>
<body>
<div class="row">
<div class="col-sm-12" style="background: rgba(0, 0, 0, .5); color: #fff;font-size: 15px; text-shadow: 1px 1px 1px #000;height : 20px">
	<marquee><p>Social Transformation Through Dynamic Education</p> </marquee>
</div>	
</div>
	<!--slider section -->
<!--slider section -->

<div class="row" >

<div class="col-sm-12 col-md-2" >
	<!-- ----------------------------- NOTIFICATION PANEL --------------------------- -->

              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" > <span class="glyphicon glyphicon-list">
                    </span> Notifications</a>
                </h4>
              </div>
              <div id="collapseOne" class="panel-collapse collapse in" style="height: 260px;">
              <marquee direction="up" style="height: 260px;" onmouseover="this.stop()" onmouseout="this.start()">
                <ul class="list-group">
                  <li class="list-group-item">But man is not made for defeat. A man can be destroyed but not defeated.<small>-Ernest Hemingway</small>
                   
                  </li>

                  <li class="list-group-item">When you reach the end of your rope, tie a knot in it and hang on.
                  <small>Franklin D. Roosevelt</small></li>

                  <li class="list-group-item">Let us sacrifice our today so that our children can have a better tomorrow.
                  <small>A. P. J. Abdul Kalam</small></li>

                  <li class="list-group-item"> Do not mind anything that anyone tells you about anyone else. Judge everyone and everything for yourself.
                  <small>Henry James</small></li>
                   <li class="list-group-item"><span class="glyphicon glyphicon-pencil text-primary"></span><a href="http://fb.com/moinakbarali">Articles</a>
                   
                  </li>


                 
                </ul>
                </marquee>
              </div>
           
				 
</div>

<div class="col-sm-8 col-md-8" >
				  <?php

					require("slider.php");
					?>
</div>
<div class="col-sm-4 col-md-2" style="padding-left: 0px;">
				  <?php

					require("sidebarright.php");
					?>
</div>
</div>
	<!-- home section -->	


<div class="row" style="background-image: url('images/background.jpg');opacity: 0.5px;">
<hr style=" border: 0; 
  height: 1px; width: 80%;
  background-image: -webkit-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
  background-image: -moz-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
  background-image: -ms-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
  background-image: -o-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);  ">
<div class="col-sm-12" style="font-size: 20px;">

					<div class="home">
						<div class="container">
							<div class="row" >

								    		<div class="col-xs-12 col-sm-3 col-md-4 col-lg-3">
									            <div class="box box-default" style="padding:0;">
									            <header style="border-bottom: solid;text-align: center;color: #524201;">Corposchool</header>
									                <div class="box-content">
									                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/9YCugOeUiuc" frameborder="0" allowfullscreen></iframe>
									                </div>
									            </div>
									        </div>

									        <div class="col-xs-12 col-sm-3 col-md-4 col-lg-3">
									            <div class="box box-default" style="padding:0;">
									             <header style="border-bottom: solid;text-align: center;color: #524201;">News & Events</header>
									                <div class="box-content">
									                    
									                    	<img src="images/NAE.jpg" style="height: 100%; width: 100%;">
									                
									                    
									                </div>
									            </div>
									        </div>

									        <div class="col-xs-12 col-sm-3 col-md-4 col-lg-3">
									            <div class="box box-default " style="padding:0;">
									             <header style="border-bottom: solid;text-align: center;color: #524201;">Upcomimng Events</header>
									                <div class="box-content">
									                   <img src="images/UE.jpg" style="height: 100%; width: 100%;">
									                </div>
									            </div>
									        </div>

									        <div class="col-xs-12 col-sm-3 col-md-4 col-lg-3">
									            <div class="box box-default" style="padding:0; ">
									             <header style="border-bottom: solid;text-align: center;color: #524201;">Latest Placements</header>
									                <div class="box-content">
									                <img src="images/lp.gif" style="height: 100%; width: 100%;">
									                    <!-- <div class="container">
													    		<div class="row">
																	<div class="col-lg-6">
																		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
																			

																			<!-- Wrapper for slides 
																			<div class="carousel-inner" role="listbox">
																				<div class="item active">
																				<div class="row">
																					<div class="col-sm-6">
																						<img src="images/demo/a1.jpg" style="height: 50%; width: 50%;">

																					</div>
																					<div class="col-sm-6">
																						<h4 style="color: #000;">hello world</h4>
																						
																					</div>
																				</div>	
																				</div>
																				<div class="item">
																					<div class="col-sm-6">
																						<img src="images/demo/a2.jpg" style="height: 50%; width: 50%;">

																					</div>
																					<div class="col-sm-6">
																						<h4 style="color: #000;">hello world</h4>
																						
																					</div>
																				</div>
																				<div class="item">
																					<div class="col-sm-6">
																						<img src="images/demo/a3.jpg" style="height: 50%; width: 50%;">

																					</div>
																					<div class="col-sm-6">
																						<h4 style="color: #000;">hello world</h4>
																						
																					</div>
																				</div>
																			</div>-->
																		</div>
																	</div>
																</div>
															</div>
									                </div>
									            </div>
									        </div>
								   	</div>
						 	</div>
						</div>
					</div>

<hr style="width: 100%;">
</div>
<div class="row">
<div class="col-sm-12" style="font-size: 20px;">

					<div class="home">
						<div class="container">
							<div class="row" >

								    		<div class="col-xs-12 col-sm-3 col-md-4 col-lg-3">
									            <div class="box box-default" style="padding:0;">
									            <header style="border-bottom: solid;text-align: center;color: #524201;">Explore BVIMSR</header>
									                <div class="box-content">
									                    <img src="images/banner_03.jpg" style="height: 100%;width: 100%;">
									        <hr style="border-top: 1px dashed #8c8b8b;">
									        		<a href="#" style="color: #000;">Anti-ragging</a><br>
									        		<a href="#" style="color: #000;">Internal compliant commitee members </a><br>
									                </div>
									            </div>
									        </div>

									        <div class="col-xs-12 col-sm-3 col-md-4 col-lg-3">
									            <div class="box box-default" style="padding:0;">
									             <header style="border-bottom: solid;text-align: center;color: #524201;">Ranking & Awards</header>
									                <div class="box-content">
									                <img src="images/RAW.jpg" style="height: 100%;width: 100%;">
									                </div>
									            </div>
									        </div>

									        <div class="col-xs-12 col-sm-3 col-md-4 col-lg-3">
									            <div class="box box-default " style="padding:0;">
									             <header style="border-bottom: solid;text-align: center;color: #524201;">Life at BVIMSR</header>
									                <div class="box-content">
									                    <img src="images/PG.jpg" style="height: 100%;width: 100%;">
									                </div>
									            </div>
									        </div>

									        <div class="col-xs-12 col-sm-3 col-md-4 col-lg-3">
									            <div class="box box-default" style="padding:0;">
									             <header style="border-bottom: solid;text-align: center;color: #524201;">Our Recruiters</header>
									                <div class="box-content">
									                    <marquee direction="down">
									                    <div class="row">
									                    	<div class="col-sm-6">
									                    		<img src="images/pub/a (1).png" style="height: 100%;width: 100%;">
									                    	</div>
									                    	<div class="col-sm-6">
									                    		<img src="images/pub/a (2).png" style="height: 100%;width: 100%;">
									                    	</div>
									                    </div>
									                    <div class="row">
									                    	<div class="col-sm-6">
									                    		<img src="images/pub/a (1).png" style="height: 100%;width: 100%;">
									                    	</div>
									                    	<div class="col-sm-6">
									                    		<img src="images/pub/a (2).png" style="height: 100%;width: 100%;">
									                    	</div>
									                    </div>
									                    <div class="row">
									                    	<div class="col-sm-6">
									                    		<img src="images/pub/a (1).png" style="height: 100%;width: 100%;">
									                    	</div>
									                    	<div class="col-sm-6">
									                    		<img src="images/pub/a (2).png" style="height: 100%;width: 100%;">
									                    	</div>
									                    </div>
									                </marquee>
									                </div>
									            </div>
									        </div>
								   	</div>
						 	</div>
						</div>
					</div>
</div>
<div class="row" style="background-color:  #17A589;height: 5px;">
<div class="col-sm-12" >
				
</div>

</div>
<div class="row">

</div>
<?php
require("footer.php");
?>

</div>

</body>

</html>
