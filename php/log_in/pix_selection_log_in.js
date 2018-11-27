var attr = $("#uploaded_image").attr("src");
if (typeof attr !== typeof undefined && attr !== false) {
  var imge = document.getElementById("uploaded_image");
  user_image = $("#user_image");
  console.log(user_image.height());
}

var circleDrawn = false;

var stage = new Konva.Stage({
  container: "container",
  width: 600,
  height: 300
});

var layer = new Konva.Layer();
stage.add(layer);

var uploaded_image = new Konva.Image({});
layer.add(uploaded_image);

var imageObj1 = new Image();
imageObj1.onload = function() {
  uploaded_image.image(imageObj1);
  layer.draw();
};
imageObj1.src = $("#uploaded_image")[0].src;
var circleX = document.getElementById("circleX").value;
var circleY = document.getElementById("circleY").value;
var radius = document.getElementById("radius").value;
var circle_layer = new Konva.Layer();
var circle = new Konva.Circle({
  x: circleX,
  y: circleY,
  radius: radius
});
circle_layer.add(circle);
stage.add(circle_layer);
stage.draw();

circle.on("mousedown", function() {
  $("#temp_hidden").css("display", "block");
});
$("#submit_circle").mousedown(function() {});
