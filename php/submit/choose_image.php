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

</head>
<body>
<div id="page2">
    <h1>Upload an Image:</h1>
    <form id="image_form" method="post" action="pixel_selection.php">
        <input type="file" id="upload" name="image" accept="image/png, image/jpeg" required/>
        <input id="preview_pic" type="button" value="Preview">

        <input id="submit_pic" name="submit" type="submit" value="Submit">
    </form>

    <button class="backbutton">Back</button>

    <img id="uploaded_image">
    <script src="choose_image.js"></script>
</div>

</body>
</html>