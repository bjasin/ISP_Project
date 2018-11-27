<!DOCTYPE html>
<html lang="en">
<head>
	<title>ISP Project</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="project.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/2.4.3/fabric.min.js"></script>
	<link rel="icon" href="security_icon.ico">
</head>
<body>
<h1 id="title">Home</h1>
<!-- Choose Login or Create Account -->
<div id="page1">
	<div id = "login_area">
		<h1> Log In </h1>
		<form id="username_form"  method="post" action="log_in/choose_image_log_in.php" enctype="multipart/form-data">
		<input id="username" name="username" type="text" placeholder="Enter Username" required><br>
		<input id="login" type="submit" value="Submit">
	</form>
	</div>
	<div id ="create_area">
		<h1> Create an Account </h1>
		<button id="create">Create Account</button>
	</div>
</div>
<script src="buttons.js"></script>
</body>
</html>
