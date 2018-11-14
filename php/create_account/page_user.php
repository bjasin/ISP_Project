<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>ISP Project</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../project.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/2.4.3/fabric.min.js"></script>
    <link rel="icon" href="../security_icon.ico">
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
//$username_present_sql = "SELECT * FROM USERS WHERE username="")
//$num_rows = mysqli_num_rows(mysqli_query($conn, $username_present_sql))
  ?>

<h1>Enter Your Username:</h1>
<div id="page_user">
    <form data-parsley-validate="" id="username_form" method="post" action="choose_image.php">
        <input id="user" data-parsley-type="alphanum" data-parsley-minlength="4" data-parsley-maxlength="16" data-parsley-trigger="change" name="user" type="text"><br>
        <input id="user_submit" name="submit" type="submit" value="Submit">
    </form>
    <button class="backbutton">Back</button>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.8.1/parsley.js"></script>
</body>
</html>
