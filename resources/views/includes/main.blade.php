<!DOCTYPE html>
<html class="nojs html" lang="en-US">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script type="text/javascript">
    wow = new WOW({
        boxClass:     'wow',
        animateClass: 'animated', 
        offset:       0,          
        mobile:       true,
        live:         true,
        scrollContainer: '.parentclass'
    })
    wow.init();
</script>
@include('includes.header')
<body>
    <div class="wrapper">
        @yield('logo')
        @include('includes.sidebar')
        <div id="content">
            <div id="fixed-barrier"></div>
            @include('includes.top')
            @yield('content')
        </div>
        @include('includes.footer')
    </div>
</body>
</html>