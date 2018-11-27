<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>ISP Project</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../project.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/2.4.3/fabric.min.js"></script>
	<link rel="icon" href="security_icon.ico">
</head>
<body>
	<?php
    $_SESSION['username'] = $_POST['username'];

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

            $user_info_sql = "SELECT * FROM USERS where username='$_SESSION[username]'";
            $user_info_query = mysqli_query($conn, $user_info_sql);
            if ($user_info_query->num_rows > 0) {
                while ($user = $user_info_query->fetch_assoc()) {
                    $_SESSION['id'] = $user['id'];
                    $_SESSION['image_path'] = $user['image_path'];
                    $_SESSION['radius'] = $user['radius'];
                    $_SESSION['circleX'] = $user['circleX'];
                    $_SESSION['circleY'] = $user['circleY'];
                    $_SESSION['caption'] = $user['caption'];
                }
            } else {
                echo "Sorry, your username was not found!";
            }
    ?>
<h1 id="title">Upload Your Image</h1>
<div id="page1">
	<p> Welcome back, <?php echo $_SESSION['username'];?>! Please upload the image you uploaded previously.  </p>
	<div id = "login_area">

      <!--Choose picture to use-->
      <div id="page2">

          <form id="image_form"  method="post" action="pix_selection_log_in.php" enctype="multipart/form-data">
              <input type="file" id="upload" name="upload" accept="image/png, image/jpeg" required>
          <input id="preview_pic" type="button" value="Preview">
          <input id="submit_pic" name="submit" type="submit" value="Submit">
          </form>
          <button class="backbutton">Back</button>
          <img id="uploaded_image">
      </div>
      <script src="choose_image_log_in.js"> </script>
</body>

</html>
