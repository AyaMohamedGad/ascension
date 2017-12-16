<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Login</title>
    {!! Html::style('css/bootstrap.min.css') !!}
    {!! Html::style('css/font-awesome.min.css') !!}
    {!! Html::style('css/fonts.googleapis.com.css') !!}
    {!! Html::style('css/ace.min.css') !!}
</head>
<body class="login-layout light-login">
<div class="main-container">
    <div class="main-content">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="login-container">
                    <div class="space-6"></div>

                    <div class="position-relative">
                        <div id="login-box" class="login-box visible widget-box no-border">
                            <div class="widget-body">
                                <div class="widget-main">
                                    <h4 class="header blue lighter bigger">
                                        <i class="ace-icon fa fa-sign-in"></i> Admin Login
                                    </h4>
                                    <div class="space-6"></div>
                                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                                        {{ csrf_field() }}
                                        <fieldset>
                                            <label class="block clearfix">
                                                <span class="block input-icon input-icon-right form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                                    <input type="email" id="email" type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email Address" required autofocus />
                                                    <i class="ace-icon fa fa-envelope"></i>
                                                </span>
                                            </label>

                                            <label class="block clearfix">
                                                <span class="block input-icon input-icon-right form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                                    <input type="password" id="password" type="password" name="password" class="form-control" placeholder="Password" required />
                                                    <i class="ace-icon fa fa-lock"></i>
                                                </span>
                                            </label>
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif

                                            <div class="space"></div>
                                            <div class="clearfix">
                                                <button type="submit" class="pull-right btn btn-sm btn-primary">
                                                    <i class="ace-icon fa fa-key"></i>
                                                    <span class="bigger-110">Login</span>
                                                </button>
                                            </div>
                                            <div class="space-4"></div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>