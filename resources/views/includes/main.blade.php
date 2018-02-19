<!DOCTYPE html>
<html class="nojs html" lang="en-US">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="shortcut icon" href="{!! asset('images/favicon.ico') !!}">
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
            <div class="footer">
                <div class="col-sm-12">{{ trans('locale.copyrights') }} <a target="_blank" href="http://www.amtechnology-eg.com">Am Technology</a> {{ date('Y') }}</div>
            </div>
        </div>
        @include('includes.footer')
    </div>
</body>
</html>