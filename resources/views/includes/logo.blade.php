<div class="bg_logo" style="height: 100vh;
    width: 100vw;
    background-color: rgba(255,255,255,0.7);
    z-index: 2000;
    position: fixed;
    top: 0px;
    left: 0px;">
    <img src="{{ asset('images/Picture1.png') }}" class="logo_pic1" style="        width: 228px;
    transform: rotateY(0deg);
    display: table;
    margin: 0 auto;
    position: relative;
    top: 25%;">

    <img src="{{ asset('images/Picture2.png') }}" class="logo_pic2" style="        width: 220px;
    display: table;
    margin: 0 auto;
    position: relative;
    top: 15%;
    left:-30%;
    opacity:0">


    <img src="{{ asset('images/Picture3.png') }}" class="logo_pic3" style="        width: 275px;
    display: table;
    margin: 0 auto;
    position: relative;
    top: -22.8%;">

    <img src="{{ asset('images/Picture4.png') }}" class="logo_pic4" style="            width: 253px;
    display: table;
    margin: 0 auto;
    position: relative;
    top: -30.5%;">

</div>

<script type="text/javascript">

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
    top: "-19%",
    left: "0%"
      }, 700);




$( ".logo_pic2" )
.delay(1500)
.animate({
    opacity: 0,
    top: "-50%",
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
    opacity:0,
    display:'none'
}, 200);

</script>