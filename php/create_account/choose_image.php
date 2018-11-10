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
  $GLOBALS['user'] = $_POST['user'];
  ?>

    <h1>Upload an Image:</h1>
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
        <form id="pixel_form"  method="post" action="caption.php">
            <input id="radius" type="text" name="radius">
            <input id="circleX" type="text" name="circleX">
            <input id="circleY" type="text" name="circleY">

        <input id="submit_circle"  name="submit_circle" type="submit" value="Submit Location">
</form>
        <button id="reset_circle">Reset Location</button>
    <button class="backbutton">Back</button>
    <img id="uploaded_image">
    <script src="choose_image.js"> </script>
</div>

</body>
</html>
