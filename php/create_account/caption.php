<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<!-- TODO:
restrictions on username and passwords
-->
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
$_SESSION['circleX'] = $_POST['circleX'];
$_SESSION['circleY'] = $_POST['circleY'];
$_SESSION['radius'] = $_POST['radius'];
?>
<h1>Set a Password</h1>
  <div id="page4">
  	<form id="caption_form" action="create_account_successful.php" method="post">
  		<input id="caption" type="password" name="caption" placeholder="Enter Password"><br>
  		<input id="text_submit" type="submit" name="submit" value="Submit">
  	</form>
  </div>
</body>
</html>
