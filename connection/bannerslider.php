
<html>
<head>	
	<title>register</title>	
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/register.css">

<style>
body{
	background-image :url("ups/bak4.jpg");
	background-repeat: no-repeat;
	background-size: 1358px 700px;
         }
</style>
</head>

<body>
<div id="login">
<form action="bannersliderhandler.php" method="post" onsubmit="return check(this)" enctype="multipart/form-data" name = "form1">
<table>
<tr><td></td><td><input type="checkbox" name="c1" id="1"></td><td><input type="file" name="slide1" id="f1"></td></tr>
<tr><td></td><td><input type="checkbox" name="c2" id="2"></td><td><input type="file" name="slide2" id="f2"></td></tr>
<tr><td></td><td><input type="checkbox" name="c3" id="3"></td><td><input type="file" name="slide3" id="f3"></td></tr>
<tr><td></td><td><input type="checkbox" name="c4" id="4"></td><td><input type="file" name="slide4" id="f4"></td></tr>
<tr><td></td><td><input type="checkbox" name="c5" id="5"></td><td><input type="file" name="slide5" id="f5"></td></tr>

<tr><td><input type="submit" value="Submit"></td><td></td><td><input type="reset" value="Reset"></td></tr></table></form>
</div></body></html>
