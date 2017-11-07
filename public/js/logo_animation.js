$('.logo_pic1').animate({  borderSpacing: -540 }, {
    step: function(now,fx) {
      $(this).css('-webkit-transform','rotateY('+now+'deg)'); 
      $(this).css('-moz-transform','rotateY('+now+'deg)');
      $(this).css('transform','rotateY('+now+'deg)');
    },
    duration:1000
},'linear');

$( ".logo_pic3" ).slideUp( 300 ).delay(1000).fadeIn(1000);

$( ".logo_pic4" ).slideUp( 300 ).delay(1000).fadeIn(1000);


$( ".logo_pic2" )
.delay(1000)
.animate({
    opacity: 1,
    top: "-21%",
    left: "0%"
      }, 700);

$( ".logo_pic2" )
.delay(1500)
.animate({
    opacity: 0,
    top: "-52%",
    left: "30%"
      }, 700);

$( ".logo_pic3" ).slideDown( 300 ).delay(1500).fadeOut();

$( ".logo_pic4" ).slideDown( 300 ).delay(1500).fadeOut();

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

$('.bg_logo')
.delay(5000)
.animate({
    opacity:0
}, 200).fadeOut();
