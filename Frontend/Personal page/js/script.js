// apply dynamic padding at the top of the body according to the fixed navbar height

var onResize = function() {
  $("body").css("padding-top", $(".fixed-top").height()+15);
};
$(window).resize(onResize);
$(function() {
  onResize();
});


///TODO: when on scroll to page add class to button to highlight it

//TODO: Transition when scroll