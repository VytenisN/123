
var clickcount = 0;

$(document).ready(function(){	
		
	
    /******************
	*#1 Button and link
	*******************/
	$("#btn1, #btn2").click(function(){		
        $("#res_1").text("Click"); 
		//console.log(clickcount++);
    });	
	$("#btn3").click(function () {
		$(this).fadeOut(5000);
		//console.log(clickcount++);
	});
	
	$(".link_class").click(function () {
		$(this).fadeOut('fast');
		//$("#res_1").text("Vienas is linku buvo paklickintas"); 
	});
	$("#btn_toggle_bg").mouseenter(function () {
		$(this).css("background-color", "yellow");
	});
	$("#btn_toggle_bg").mouseleave(function () {
		$(this).css("background-color", "#fff");
	});
	
	$("#change_bg").click(function () {
		//$("body").css("background-image", "url('../img/img.jpg')");
		$("body").toggleClass("fancy_bg");
	});
	
	/******************
	*#2 Div layout example
	*******************/
	$(".circle").mouseenter(function () {
		$("#res_2").html("uzvaziavom ant apskritimo");
	});
	
	$(".square").mouseenter(function () {
		$("#res_2").html("uzvaziavom ant kvadrato");
	});
	
	$(".circle, .square").mouseleave(function () {
		//$("#res_2").html("<div style='width:50px;height:50px;background:pink;'>Naujas elementas</div>");
		$("#res_2").text("");
	});
	/******************
	*#3 image example
	*******************/
	
	$(".targetImg").click(function () {
		$(this).slideUp('fast');
	});
	
	
});
	
	
	

function papildoma_finkcija(){
	console.log();
}

function papildoma_finkcija(){
	console.log();
}

function papildoma_finkcija(){
	console.log();
}


