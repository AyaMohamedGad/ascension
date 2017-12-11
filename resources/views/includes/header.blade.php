<head>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
    <meta name="generator" content="2015.2.1.352"/>
    <meta charset="utf-8">
    <title>Ascension | @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="weibergmedia">
    <meta name="description" content="" />
    {!! Html::style('css/reset.css') !!}
    {!! Html::style('css/bootstrap.min.css') !!}
    {!! Html::style('css/font-awesome.min.css') !!}
    {!! Html::style('css/contact.css') !!}
    {!! Html::style('css/styles.css') !!}
    {!! Html::style('css/custom.css') !!}
    {!! Html::style('css/animate.css') !!}
    {!! Html::style('css/responsive.css') !!}
    <link href="https://fonts.googleapis.com/css?family=Rufina:400,600,700,800" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,600,400italic" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Changa" rel="stylesheet">
    @if(app()->getLocale() == 'ar')
        {!! Html::style('css/rtl.css') !!}
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.css" rel="stylesheet" type="text/css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css" />
    @endif

    {!! Html::script('js/modernizr.js') !!}
    @yield('styles')
</head>