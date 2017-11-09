@extends('includes.main')

@section('title', trans('locale.cpa_program'))

@section('content')
    <div class="container clearfix" data-ref="mixitup-container">
        <div class="header_normal_cover">
            <h2 class="header">{{ trans('locale.cpa_program') }}</h2>
        </div>
        <div class="tab-content row">
            <div class="col-sm-12">
                <img class="center" src="{{ asset('images/cpa_logo.jpg') }}" >
            </div>
            {{--<div class="col-sm-12 mt-20">--}}
                {{--<div class="col-sm-6">--}}
                    {{--<img class="center" src="{{ asset('images/cpa_img.jpg') }}" >--}}
                {{--</div>--}}
                {{--<div class="col-sm-6">--}}
                    {{--<div class="block center">--}}
                        {{--<p><img src="{{ asset('images/arrow.png') }}"> {{ trans('locale.upcoming_cpa_courses') }}</p>--}}
                        {{--<ul>--}}
                            {{--<li><strong>{{ trans('locale.reg') }}:</strong> {{ trans('locale.reg_date') }}</li>--}}
                            {{--<li><strong>{{ trans('locale.far') }}:</strong> {{ trans('locale.far_date') }}</li>--}}
                            {{--<li><strong>{{ trans('locale.aud') }}:</strong> {{ trans('locale.to_be_announced') }}</li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>

        <div class="row" id="book_tabs">
            <div class="col-xs-8 col-xs-offset-2">
                <div class="tabs-left">
                    <ul class="nav nav-tabs-left">
                      <li class="active"><a href="#a" data-toggle="tab"><span class="glyphicon glyphicon-heart"></span></a></li>
                      <li><a href="#b" data-toggle="tab"><span class="glyphicon glyphicon-star"></span></a></li>
                      <li><a href="#c" data-toggle="tab"><span class="glyphicon glyphicon-headphones"></span></a></li>
                      <li><a href="#d" data-toggle="tab"><span class="glyphicon glyphicon-time"></span></a></li>
                    </ul>

                    <ul class="nav nav-tabs-right">
                      <li><a href="#e" data-toggle="tab"><span class="glyphicon glyphicon-calendar"></span></a></li>
                      <li><a href="#f" data-toggle="tab"><span class="glyphicon glyphicon-cog"></span></a></li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active" id="a">
                            <h3>Who do you Love?</h3>
                        </div>
                        <div class="tab-pane" id="b">
                            <h3>What's your Favorite?</h3>
                        </div>
                        <div class="tab-pane" id="c">
                            <h3>What's your Favoritec?</h3>
                        </div>
                        <div class="tab-pane" id="d">
                            <h3>What's your Favorited?</h3>
                        </div>
                        <div class="tab-pane" id="e">
                            <h3>What's your Favoritee?</h3>
                        </div>
                        <div class="tab-pane" id="f">
                            <h3>What's your Favoritef?</h3>
                        </div>
                    </div><!-- /tab-content -->
              </div><!-- /tabbable -->
            </div><!-- /col -->
          </div><!-- /row -->
    </div>
    {{--<div class="container clearfix full-width">--}}
        {{--<h2 class="header">6 {{ trans('locale.steps_to_become_cpa') }}</h2>--}}
        {{--<div class="tab-content">--}}
            {{--<div class="col-sm-12">--}}
                {{--<div class="col-sm-2">--}}
                    {{--<p><img src="{{ asset('images/qualify.png') }}"></p>--}}
                    {{--<p>{{ trans('locale.qualify') }}</p>--}}
                {{--</div>--}}
                {{--<div class="col-sm-2">--}}
                    {{--<p><img src="{{ asset('images/enroll.png') }}"></p>--}}
                    {{--<p>{{ trans('locale.enroll') }}</p>--}}
                {{--</div>--}}
                {{--<div class="col-sm-2">--}}
                    {{--<p><img src="{{ asset('images/prepare.png') }}"></p>--}}
                    {{--<p>{{ trans('locale.prepare') }}</p>--}}
                {{--</div>--}}
                {{--<div class="col-sm-2">--}}
                    {{--<p><img src="{{ asset('images/schedule.png') }}"></p>--}}
                    {{--<p>{{ trans('locale.schedule') }}</p>--}}
                {{--</div>--}}
                {{--<div class="col-sm-2">--}}
                    {{--<p><img src="{{ asset('images/exam.png') }}"></p>--}}
                    {{--<p>{{ trans('locale.exam') }}</p>--}}
                {{--</div>--}}
                {{--<div class="col-sm-2">--}}
                    {{--<p><img src="{{ asset('images/pass.png') }}"></p>--}}
                    {{--<p>{{ trans('locale.pass') }}</p>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
@stop
