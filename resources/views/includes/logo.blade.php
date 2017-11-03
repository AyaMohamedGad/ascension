<div style="    height: 100vh;
    width: 100vw;
    background-color: black;
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
$( ".logo_pic2" )
.animate({
    transform: "rotateY(0deg)"
      }, 2000);

$( ".logo_pic2" )
.delay(1500)
.animate({
    opacity: 1,
    top: "-19%",
    left: "0%"
      }, 2000);

$( ".logo_pic3" ).slideUp( 300 ).delay(1000).fadeIn(1000);

</script>