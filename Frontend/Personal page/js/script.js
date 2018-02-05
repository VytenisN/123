
$( document).ready(function() {

	// apply dynamic padding at the top of the body according to the fixed navbar height
	var onResize = function() {
	  $("body").css("padding-top", $(".fixed-top").height());
	};
	$(window).resize(onResize);
	$(function() {
	  onResize();
	});


	//Transition on scroll

		// Cache selectors
	var lastId,
	    topMenu = $("#top"),
	    topMenuHeight = topMenu.outerHeight()+15,
	    // All list items
	    menuItems = topMenu.find("a"),
	    // Anchors corresponding to menu items
	    scrollItems = menuItems.map(function(){
	      var item = $($(this).attr("href"));
	      if (item.length) { return item; }
	    });

			// Bind click handler to menu items so we can get a fancy scroll animation
		menuItems.click(function(e){
	  	var href = $(this).attr("href"),
	      offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;
	  	$('html, body').stop().animate({ 
	      scrollTop: offsetTop
	  }, 300);
	  e.preventDefault();
	});

		// Bind to scroll
	$(window).scroll(function(){
	   // Get container scroll position
	   var fromTop = $(this).scrollTop()+topMenuHeight;
	   
	   	// Get id of current scroll item
	   var cur = scrollItems.map(function(){
	     if ($(this).offset().top -200 < fromTop)
	       return this;
	   });
	  	 // Get the id of the current element
	   cur = cur[cur.length-1];
	   var id = cur && cur.length ? cur[0].id : "";
	   
	   if (lastId !== id) {
	       lastId = id;
	       // Set/remove active class
	       menuItems
	         .parent().removeClass("active")
	         .end().filter("[href='#"+id+"']").parent().addClass("active");
	   }                   
	});

// Poptrox Plugin

	$('#block2').poptrox();


});