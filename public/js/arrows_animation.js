$( ".orange_arrow" )
.animate({
    opacity: 1,
    top: "0px",
    left: "0px"
      }, 500);


$( ".blue_arrow" )
.delay(700)
.animate({
    opacity: 1,
    top: "0px",
    left: "0px"
      }, 500);

$( ".green_arrow" )
.delay(1200)
.animate({
    opacity: 1,
    top: "0px",
    left: "0px"
      }, 500);

$( ".yellow_arrow" )
.delay(1700)
.animate({
    opacity: 1,
    top: "0px",
    left: "0px"
      }, 500);

$('.orange_p').hide();
$('.green_p').hide();
$('.blue_p').hide();
$('.yellow_p').hide();

$(".orange_arrow").hover(function(){
  $('.orange_p').fadeIn();
});

$(".green_arrow").hover(function(){
  $('.green_p').fadeIn();
});

$(".blue_arrow").hover(function(){
  $('.blue_p').fadeIn();
});

$(".yellow_arrow").hover(function(){
  $('.yellow_p').fadeIn();
});

$(".orange_arrow").mouseleave(function(){
  $('.orange_p').fadeOut();
});

$(".green_arrow").mouseleave(function(){
  $('.green_p').fadeOut();
});

$(".blue_arrow").mouseleave(function(){
  $('.blue_p').fadeOut();
});

$(".yellow_arrow").mouseleave(function(){
  $('.yellow_p').fadeOut();
});