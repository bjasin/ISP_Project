$("#preview_pic").mousedown(function () {
    var file = $('#upload')[0].files[0];
    var reader = new FileReader();
    reader.readAsDataURL(file);
    reader.onload = function (e) {
        var img = $('#uploaded_image');
        img.attr('src', this.result);
    }
});
/*
$("#submit_pic").mousedown(function () {

    var attr = $('#uploaded_image').attr('src');
    if (typeof attr !== typeof undefined && attr !== false) {

        var c = document.getElementById("click_canvas");
        var ctx = c.getContext("2d");
        var imge = document.getElementById("uploaded_image");
        //alert(canvas.width);
        //canvas.width = $('#uploaded_image').width();
        //canvas.height = $('#uploaded_image').height();
        // ctx.drawImage(imge, 0, 0, $('#uploaded_image').width(), $('#uploaded_image').height());
        //$("#page2").css("display", "none");
        user_image = $('#user_image');


        //	$("#page3").css("display", "block");
    }
});
*/