<?php  
ob_start();
require("connection.php"); ?>

<?php
$c1=$_POST['c1'];

$slide1 = $_FILES['slide1']['name'];
$imup=$_FILES['slide1']['tmp_name'];

$path="slider/$slide1";
move_uploaded_file($imup, $path);
$status=1;

//$image = chunk_split(base64_encode(file_get_contents( $imup )));


$sql=" INSERT INTO sliderbanner (sr,pathname,status) values ('$c1','$path','$status')";

$result=ExecuteNonQuery ($sql);

if($result)
{
	header("location:bannerslider.php");
}
else
{
		header("location:.php");
}
?> 	