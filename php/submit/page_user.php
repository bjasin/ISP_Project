<!DOCTYPE html>
<html lang="en">
<!-- TODO:   
restrictions on username and passwords
-->
<head>
	<title>ISP Project</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="http://192.168.64.2/ISP_Project/php/project.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/2.4.3/fabric.min.js"></script>

</head>
<body>
	<div>
<?php 
echo "Hello";
//$username = $_POST["user"];
//echo $username;
$caption = $_POST["caption"];
print_r($_POST);
echo $caption;
if (isset($_POST["user"]) && !empty($_POST["user"])) {
	$username = $_POST["user"];
	echo $username;
}
if (isset($_POST["upload"]) && !empty($_POST["upload"])) {
	$image = $_POST["upload"];
	echo $image;
}
if (isset($_POST["radius"]) && !empty($_POST["radius"])) {
	$radius = $_POST["radius"];
	echo $radius;
}

if (isset($_POST["circleX"]) && !empty($_POST["circleX"])) {
	$circleX = $_POST["circleX"];
	echo $circleX;
}
if (isset($_POST["circleY"]) && !empty($_POST["circleY"])) {
	$circleY = $_POST["circleY"];
	echo $circleY;
}
if (isset($_POST["caption"]) && !empty($_POST["caption"])) {
	$caption = $_POST["caption"];
	echo $caption;
}

?>
</div>
</body>
</html>