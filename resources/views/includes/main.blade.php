<!DOCTYPE html>
<html class="nojs html" lang="en-US">
    @include('includes.header')
    <body class="sliphover-active">
        @include('includes.logo')
        @include('includes.sidebar')
        <div id="content">
            <div id="fixed-barrier"></div>
            @include('includes.top')
            @include('includes.logo')
            @yield('content')
        </div>
        @include('includes.footer')
    </body>
</html>

