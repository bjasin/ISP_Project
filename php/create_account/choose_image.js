$("#preview_pic").mousedown(function() {
  var file = $("#upload")[0].files[0];
  var reader = new FileReader();
  reader.readAsDataURL(file);
  reader.onload = function(e) {
    var img = $("#uploaded_image");
    img.attr("src", this.result);
  };
});

$("#preview_pic").mousedown(function() {
  var file = $("#upload")[0].files[0];
  var reader = new FileReader();
  reader.readAsDataURL(file);
  reader.onload = function(e) {
    var img = $("#uploaded_image");
    img.attr("src", this.result);
  };
});

$("#submit_pic").mousedown(function() {
  $("#page3").css("display", "block");
  var attr = $("#uploaded_image").attr("src");
  if (typeof attr !== typeof undefined && attr !== false) {
    var c = document.getElementById("click_canvas");
    var ctx = c.getContext("2d");
    var imge = document.getElementById("uploaded_image");
    //alert(canvas.width);
    //canvas.width = $('#uploaded_image').width();
    //canvas.height = $('#uploaded_image').height();
    // ctx.drawImage(imge, 0, 0, $('#uploaded_image').width(), $('#uploaded_image').height());
    //$("#page2").css("display", "none");
    user_image = $("#user_image");
    //alert(user_image);
    $("#page2").css("display", "none");
    canvasBackground();
  }
});

$("#submit_circle").mousedown(function() {
  if (circleDrawn) {
    user_x = circle.left;
    user_y = circle.top;
    user_r = circle.radius;
    //$("#submit_circle").css("display", "none");
    //	$("#reset_circle").css("display", "none");
    //	$("#page4").css("display", "block");
  }
});

$("#reset_circle").mousedown(function() {
  canvas.clear();
  canvasBackground();
  circleDrawn = false;
});
$("#text_submit").mousedown(function() {
  user_pswd = $("#textbox").val();
  /*$("#page3").css("display", "none");
    $("#page4").css("display", "none");	*/
  //window.location.href = "submit/page_user.php";
});

function canvasBackground() {
  var imga = new Image();
  imga.src = $("#uploaded_image")[0].src;
  imga.onload = function() {
    var f_img = new fabric.Image(imga);
    f_img.set({
      top: 0,
      left: 0
    });
    canvas.setWidth(f_img.width);
    canvas.setHeight(f_img.height);
    //alert(canvas.width);
    canvas.setBackgroundImage(f_img);
    canvas.renderAll();
    console.log(imga.src);
    //  document.getElementById("imageInput").value = imga;
  };
}

var circle, isDown, origX, origY;
var canvas = new fabric.Canvas("click_canvas", {selection: false});
var circleDrawn = false;

canvas.on("mouse:down", function(o) {
  //alert($('#uploaded_image')[0].src);
  //alert($('#uploaded_image').width());
  if (!circleDrawn) {
    isDown = true;
    var pointer = canvas.getPointer(o.e);
    origX = pointer.x;
    origY = pointer.y;
    circle = new fabric.Circle({
      left: pointer.x,
      top: pointer.y,
      radius: 1,
      strokeWidth: 1,
      stroke: "red",
      fill: "rgba(0,0,0,0)",
      selectable: false,
      originX: "center",
      originY: "center"
    });

    document.getElementById("circleX").value = pointer.x;
    document.getElementById("circleY").value = pointer.y;
    canvas.add(circle);
  }
});

canvas.on("mouse:move", function(o) {
  if (!isDown) return;
  var pointer = canvas.getPointer(o.e);
  circle.set({radius: Math.abs(origX - pointer.x)});
  canvas.renderAll();
});

canvas.on("mouse:up", function(o) {
  isDown = false;
  circleDrawn = true;
  document.getElementById("radius").value = circle.radius;
  //alert (circle.left+ ' '+ circle.top + ' '+ circle.radius);
  //alert(document.getElementById("radius").value);
});

$("#submit_pic").mousedown(function() {
  var attr = $("#uploaded_image").attr("src");
  if (typeof attr !== typeof undefined && attr !== false) {
    var c = document.getElementById("click_canvas");
    var ctx = c.getContext("2d");
    var imge = document.getElementById("uploaded_image");
    //alert(canvas.width);
    //canvas.width = $('#uploaded_image').width();
    //canvas.height = $('#uploaded_image').height();
    // ctx.drawImage(imge, 0, 0, $('#uploaded_image').width(), $('#uploaded_image').height());
    //$("#page2").css("display", "none");
    user_image = $("#user_image");

    //	$("#page3").css("display", "block");
  }
});
