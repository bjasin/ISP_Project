var login;
var user_image;
$("#create").mousedown(function(){
	$('#title').text("Create a Password");
	$("#page1").css("display", "none");
	$("#page2").css("display", "block");
	login = false;
     });

$("#login").mousedown(function(){
	$('#title').text("Login");
	$("#page1").css("display", "none");
	$("#page2").css("display", "block");
	login = true;
     });
$("#preview_pic").mousedown(function(){
	var file = $('#upload')[0].files[0];
	var reader = new FileReader();
	reader.readAsDataURL(file);
	reader.onload = function(e) {
	    var img = $('#uploaded_image');
	    img.attr('src', this.result);
	}
     });
$("#submit_pic").mousedown(function(){
	var attr = $('#uploaded_image').attr('src');
	if (typeof attr !== typeof undefined && attr !== false){
		user_image = $('#uploaded_image');
		$("#page2").css("display", "none");
		$("#page3").css("display", "block");
	}

     
	});
