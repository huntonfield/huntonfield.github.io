<!DOCTYPE html>
<html lang="en">
	<head>
		<title>IMSR</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="Stylesheet" type="text/css" href="css/popcs.css" />
		<script type="text/javascript">
			

		</script>
		<style type="text/css">



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
							height: 20px;
							width: 20px;

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
<!-- popup show -->		
		<script type="text/javascript">
		        function PopUp(hideOrshow) {
		            if (hideOrshow == 'hide') document.getElementById('ac-wrapper').style.display = "none";
		            else document.getElementById('ac-wrapper').removeAttribute('style');
		        }
		        window.onload = function() {
		            setTimeout(function() {
		                PopUp('show');
		            }, 0);
		        }
		    </script>

<!-- popup show end -->				
	</head>

	<body style="font-family: 'roboto'" onload="myFunction()";>

	<!-- ------------popup------- -->
	<div id="ac-wrapper" style='display:none'>
                        <div id="popnew" style="background-color: #000">
                            <center>
                                <div style="position:relative; top:20px;right:0;width:720px;text-align:right"><a onclick="PopUp('hide')" href="#">
                                    <img alt="close" src="http://www.bvimr.com/images/close_button.png"></a></div>
                                        <table id="Table_01" width="650" height="527" border="0" cellpadding="0" cellspacing="0">
            	                           
                                        </table>
                            </center>
                        </div>
                    </div>



     <!---------- popup end ----- -->


	
	</body>
</html>