<!DOCTYPE html>
<html lang="en">
<!-- TODO:   
restrictions on username and passwords
-->
<head>
	<title>ISP Project</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="project.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/2.4.3/fabric.min.js"></script>

</head>
<body>
	<?php
	$servername = "localhost";
	$username = "user";
	$password = "password";
	$dbname = "website";

// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "DROP TABLE IF EXISTS userInfo";
	$conn->query($sql);

// sql to create table
	$sql = "CREATE TABLE userInfo (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	username VARCHAR(30) NOT NULL,
	image LONGBLOB,
	caption VARCHAR(30) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
	echo "Table MyGuests created successfully";
} else {
	echo "Error creating table: " . $conn->error;
}

$conn->close();
?>

<h1 id="title">Home</h1>
<!-- Choose Login or Create Account -->
<div id="page1">
	<div id = "login_area"> 
		<h1> Log In </h1>

		<input id="username" type="text" placeholder="Enter Username"><br>
		<button id="login">Enter Password</button>

	</div>

	<div id ="create_area">
		<h1> Create an Account </h1>
		<button id="create">Create Account</button>
	</div>
</div>
<div id="page_user">

	<form id="username_form" method="post">
		<input id="user" name="user" type="text" placeholder="Enter Username" required><br>
		<input id="user_submit" name="submit" type="submit" value="Submit">
	</form>
	<button class="backbutton">Back</button>
</div>
<!--Choose picture to use-->
<div id="page2">
	<form id="image_form"  method="post">
		<input type="file" id="upload" name="image" accept="image/png, image/jpeg" required/>
	</form>
	<button id="preview_pic">Preview</button>

	<input id="submit_pic" name="submit" type="submit" value="Submit">
	<button class="backbutton">Back</button>

	<img id="uploaded_image">

</div>

<!--Choose pixel selection-->
<div id="page3">
	<!--canvas?-->
	<div id="canvas_wrap">
		<canvas id="click_canvas"></canvas>
	</div>
	<form id="pixel_form"  method="post">
		<input id="radius" type="text" name="radius">
		<input id="circleX" type="text" name="circleX">
		<input id="circleY" type="text" name="circleY">
	</form>
	<button id="submit_circle"  name="submit">Submit Location</button>
	<button id="reset_circle">Reset Location</button>


</div>
<!--Enter text password--> 
<div id="page4">
	<form id="caption_form" action="submit/page_user.php" method="post">
		<input id="caption" type="password" name="caption" placeholder="Enter Password"><br>
		<input id="text_submit" type="submit" name="submit" value="Submit">
	</form>
</div>

<!--Only if user is logging in. Either welcomes or rejects user-->
<div id="page5">
	
</div>



<script src="buttons.js"></script>
</body>

</html>