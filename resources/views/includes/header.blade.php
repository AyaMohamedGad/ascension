<head>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
    <meta name="generator" content="2015.2.1.352"/>
    <meta charset="utf-8">
    <title>Ascension | @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="ascension">
    <meta name="description" content="to enable those who aspire highly in the field of business to fulfill their aspirations through our consulting and training programs." />
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
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Changa" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Patua+One" rel="stylesheet">
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/tex-gyre-adventor" type="text/css"/>
    <link rel="stylesheet" media="screen" href="https://www.morganintl.com/css/fonts" type="text/css"/>
    @if(app()->getLocale() == 'ar')
        {!! Html::style('css/rtl.css') !!}
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.css" rel="stylesheet" type="text/css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css" />
    @endif
    {!! Html::script('js/modernizr.js') !!}
    @yield('styles')
</head>