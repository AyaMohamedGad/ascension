<!DOCTYPE html>
<html class="nojs html" lang="en-US">
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script type="text/javascript">
    new WOW().init();
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

