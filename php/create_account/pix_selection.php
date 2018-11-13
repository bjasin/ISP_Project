<?php
session_start();
?>
<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["upload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["upload"]["tmp_name"]);
    if ($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";

        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file)) {
            //echo "The file ". basename($_FILES["upload"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
    $_SESSION['image_path'] = $target_dir . basename($_FILES["upload"]["name"]);

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
  <h1> Draw a Circle</h1>
    <div id="page3">
        <!--canvas?-->
        <div id="canvas_wrap">
            <canvas id="click_canvas"></canvas>
        </div>
        <form id="pixel_form"  method="post" action="caption.php">
          <div id="hidden_inputs">
            <input id="radius" type="text" name="radius">
            <input id="circleX" type="text" name="circleX">
            <input id="circleY" type="text" name="circleY">
</div>
        <input id="display: none;"  name="submit_circle" type="submit" value="Submit Location">
</form>
        <button id="reset_circle">Reset Location</button>
    <button class="backbutton">Back</button>
    <img id="uploaded_image" src="<?php echo $_SESSION['image_path'] ?>" style="display: none;">
    <script src="pix_selection.js"> </script>
</div>

</body>
</html>
