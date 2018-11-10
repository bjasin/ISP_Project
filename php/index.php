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
	<link rel="icon" href="security_icon.ico">
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

if ($conn->query($sql) === true) {
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



<script src="buttons.js"></script>
</body>

</html>
