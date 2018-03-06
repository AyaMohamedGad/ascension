var locale = $('#locale').data('attr');

$('.logo_pic1').animate({  borderSpacing: -540 }, {
    step: function(now,fx) {
      $(this).css('-webkit-transform','rotateY('+now+'deg)');
      $(this).css('-moz-transform','rotateY('+now+'deg)');
      $(this).css('transform','rotateY('+now+'deg)');
    },
    duration:1000
},'linear');

var width = window.innerWidth;

if(width > 900){
  $( ".logo_pic2" )
  .delay(1000)
  .animate({
      opacity: 1,
      top: "25%",
      left: "41.65%"
        }, 700);
}
else{
  $( ".logo_pic2" )
  .delay(1000)
  .animate({
      opacity: 1,
      top: "4%",
      left: "41.65%"
        }, 700);
}


// $( ".logo_pic3" ).slideUp( 300 ).delay(1000).fadeIn(1000);

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

if(locale == 'en'){
  if(width > 900){

    if(width > 900 && width < 1400){

      $( ".logo_pic2" )
      .delay(2200)
      .animate({
          left: "73.5%",
          top: "80px",
          opacity: "0.5"
            }, 1000);
    }

    else if(width < 1550){
      $( ".logo_pic2" )
      .delay(2200)
      .animate({
          left: "76%",
          top: "80px",
          opacity: "0.5"
            }, 1000);
    }

    else if(width < 1800){
      $( ".logo_pic2" )
      .delay(2200)
      .animate({
          left: "75%",
          top: "80px",
          opacity: "0.5"
            }, 1000);
    }
  }
  else{
    $( ".logo_pic2" )
    .delay(2200)
    .animate({
        left: "73.5%",
        top: "3.2%",
        opacity: "0.5",
        width: "24%"
          }, 1000);
  }
}
else{

  if(width > 900){

    if(width > 900 && width < 1400){

      $( ".logo_pic2" )
      .delay(2200)
      .animate({
          right: "75%",
          top: "80px",
          opacity: "0.5"
            }, 1000);
    }

    else if(width < 1550){
      $( ".logo_pic2" )
      .delay(2200)
      .animate({
          right: "78.3%",
          top: "80px",
          opacity: "0.5"
            }, 1000);
    }

    else if(width < 1800){
      $( ".logo_pic2" )
      .delay(2200)
      .animate({
          right: "77%",
          top: "80px",
          opacity: "0.5"
            }, 1000);
    }
  }
  else{
    $( ".logo_pic2" )
  .delay(2200)
  .animate({
      right: "75%",
      top: "3.2%",
      opacity: "0.5",
      transform: "scaleX(-1)",
      width: "24%"
        }, 1000);
  }
}

$( window ).resize(function() {
  var width = $( window ).width();
  if(locale == 'en'){
  if(width > 900){

    if(width > 900 && width < 1400){

      $( ".logo_pic2" )
      .animate({
          left: "73.5%",
            }, 1000);
    }

    else if(width < 1550){
      $( ".logo_pic2" )
      .animate({
          left: "76%",
            }, 1000);
    }

    else if(width < 1800){
      $( ".logo_pic2" )
      .animate({
          left: "75%",
            }, 1000);
    }
  }
  else{
    $( ".logo_pic2" )
    .animate({
        left: "73.5%",
        width: "24%"
          }, 1000);
  }
}
else{

  if(width > 900){

    if(width > 900 && width < 1400){

      $( ".logo_pic2" )
      .animate({
          right: "75%",
            }, 1000);
    }

    else if(width < 1550){
      $( ".logo_pic2" )
      .animate({
          right: "78.3%",
            }, 1000);
    }

    else if(width < 1800){
      $( ".logo_pic2" )
      .animate({
          right: "76%",
            }, 1000);
    }
  }
  else{
    $( ".logo_pic2" )
  .animate({
      right: "75%",
      transform: "scaleX(-1)",
      width: "24%"
        }, 1000);
  }
}
});

// $( ".logo_pic3" ).slideDown( 300 ).delay(1500).fadeOut();

$( ".logo_pic4" ).slideDown( 300 ).delay(1500).fadeOut();

$('.bg_logo')
.delay(5000)
.animate({
    opacity:0
}, 200).fadeOut();

$( ".name_container" )
.delay(5000)
.animate({
  opacity:0
}, 200).fadeOut();


setTimeout(function(){
  $(".arrow_right")
    .animate({
      right: "0px",
      top: "-10px"
    }, 700);
}, 5200);

setTimeout(function(){
  $(".banner p").animate(700);}, 5200);