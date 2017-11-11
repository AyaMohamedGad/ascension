$('.logo_pic1').animate({  borderSpacing: -540 }, {
    step: function(now,fx) {
      $(this).css('-webkit-transform','rotateY('+now+'deg)'); 
      $(this).css('-moz-transform','rotateY('+now+'deg)');
      $(this).css('transform','rotateY('+now+'deg)');
    },
    duration:1000
},'linear');


$( ".logo_pic2" )
.delay(1000)
.animate({
    opacity: 1,
    top: "25%",
    left: "41.65%"
      }, 700);


$( ".logo_pic3" ).slideUp( 300 ).delay(1000).fadeIn(1000);

$( ".logo_pic4" ).slideUp( 300 ).delay(1000).fadeIn(1000);


$('.logo_pic1')
.delay(3000)
.animate({  
    opacity: 0,
    borderSpacing: -90 }, {
    step: function(now,fx) {
      $(this).css('-webkit-transform','rotate('+now+'deg)'); 
      $(this).css('-moz-transform','rotate('+now+'deg)');
      $(this).css('transform','rotate('+now+'deg)');
    },
    duration:1000
},'linear');

$( ".logo_pic2" )
.delay(1500)
.animate({
    opacity: 0,
    top: "-52%",
    left: "100%"
      }, 700);

$( ".logo_pic3" ).slideDown( 300 ).delay(1500).fadeOut();

$( ".logo_pic4" ).slideDown( 300 ).delay(1500).fadeOut();

$('.bg_logo')
.delay(5000)
.animate({
    opacity:0
}, 200).fadeOut();


setTimeout(function(){ 
  $(".arrow_right")
    .animate({
      right: "0px",
      top: "0px"
    }, 700); 
}, 5200);

setTimeout(function(){
  $(".banner p").animate(700);}, 5200);