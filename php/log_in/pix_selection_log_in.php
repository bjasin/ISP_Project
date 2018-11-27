<?php
session_start();
?>
<?php
$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["upload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $check = getimagesize($_FILES["upload"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        $temp = explode(".", $_FILES["upload"]["name"]);
        $newfilename = round(microtime(true)) . '.' . end($temp);
        move_uploaded_file($_FILES["upload"]["tmp_name"], "../uploads/" . $newfilename);
    }
    $_SESSION['image_path_log_in'] = "uploads/" . $newfilename;
    $original_image_md5 = md5_file("../" . $_SESSION['image_path']);
    $recent_upload_image_md5 =  md5_file("../" . $_SESSION['image_path_log_in']);
    if ($original_image_md5 == $recent_upload_image_md5) {
    } else {
        echo "Sorry, that image doesn't match the one we have on file!";
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>ISP Project</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../project.css"/>
    <link rel="stylesheet" type="text/css" href="log_in.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/2.4.3/fabric.min.js"></script>
    <link rel="icon" href="../security_icon.ico">
</head>
<body>
  <script src="https://unpkg.com/konva@2.4.2/konva.min.js"></script>
  <h1>Click in previously selected region </h1>
    <div id="page3">
            <div id="container"></div>
        <form id="pixel_form"  method="post" action="logged_in_index.php">
          <div id="temp_hidden">
            <p>Enter your caption: </p>
          <input id="caption" type="password" name="caption" placeholder="Enter Caption"required>
          <input id="submit"  name="submit" type="submit" value="Submit Caption">
        </div>
          <div id="hidden_inputs">
            <input id="radius" type="text" name="radius" value="<?php echo $_SESSION['radius']; ?>" required>
            <input id="circleX" type="text" name="circleX" value="<?php echo $_SESSION['circleX']; ?>" required>
            <input id="circleY" type="text" name="circleY" value="<?php echo $_SESSION['circleY']; ?>" required>
</div>
</form>
    <button class="backbutton">Back</button>
    <img id="uploaded_image" src="<?php echo "../uploads/" . basename($_FILES["upload"]["name"]) ?>" style="display: none;">
    <script src="pix_selection_log_in.js"> </script>
</div>

</body>
</html>
