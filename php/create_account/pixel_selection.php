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
<!--Choose pixel selection-->
<div id="page3">
    <!--canvas?-->
    <div id="canvas_wrap">
        <canvas id="click_canvas"></canvas>
    </div>
    <form id="pixel_form" method="post">
        <input id="radius" type="text" name="radius">
        <input id="circleX" type="text" name="circleX">
        <input id="circleY" type="text" name="circleY">
        <input id="submit" name="submit" type="submit" value="Submit">
    </form>

    <button id="reset_circle">Reset Location</button>
<script src="pixel_selection.js"></script>
</div>

</body>
</html>