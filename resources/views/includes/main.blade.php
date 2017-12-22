<!DOCTYPE html>
<html class="nojs html" lang="en-US">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script src="http://www.turnjs.com/lib/turn.min.js"></script>
<script type="text/javascript">
    wow = new WOW({
    })
    wow.init();
</script>
@include('includes.header')
@include('site.popups')
<body>
    <div>
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