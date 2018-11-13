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

    <h1>Thank you for creating an account!</h1>
    <p>You may log in <a href="../index.php">here</a>, if you'd like.</p>
    <?php
    $_SESSION['caption'] = $_POST['caption'];


    ?>
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

 $stmt = $conn->prepare("INSERT INTO USERS (username, image_path, radius, circleX, circleY, caption) VALUES (?, ?, ?, ?, ?, ?)");
      $stmt->bind_param("ssddds", $_SESSION['user'], $_SESSION['image_path'], $_SESSION['radius'],
      $_SESSION['circleX'], $_SESSION['circleY'], $_SESSION['caption']);
      $stmt->execute();
      $stmt->close();

?>

</body>
</html>
