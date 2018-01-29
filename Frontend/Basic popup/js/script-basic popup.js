$(document).ready(function(){
			
	$("#trigger").mouseenter(function(){
		$(".user-popup").stop().slideDown( 1000 );
	});
	$("#trigger").mouseleave(function(){
		$(".user-popup").stop().slideUp( 1000 );
	});	
	
	
	$("ul.lvl_1 li.lvl_1").click(function () {		
		$(this).children("ul.lvl_2").slideToggle('slow');
	});
	
	$("ul.lvl_2").mouseleave(function () {
		$(this).slideUp('slow');
	});
	
});