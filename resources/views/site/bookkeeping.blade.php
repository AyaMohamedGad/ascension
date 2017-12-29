@extends('includes.main')

@section('title', trans('locale.bookkeeping'))

@section('styles')
    <style>
        .col-sm-2 {
            position:relative;
            margin: 0 40px 20px;
            text-align: center;
            border: 2px solid #092b67;
            min-height: 230px;
            border-radius: 5px;
            padding-bottom: 15px;
        }
        .col-sm-2 a{
            width: 100%;
            height: 100%;
            display: inline-block;
            vertical-align: middle;
        }
        .col-sm-2 h4 {
            border-bottom: 2px solid #092b67;
            width: 100%;
            padding-bottom: 10px;
        }
        .col-sm-2 img{
            text-align: center;
            margin: auto;
            max-width: 120px;
        }
        .col-sm-2 .info{
            -webkit-transition: all 0.4s ease-in-out;
            -moz-transition: all 0.4s ease-in-out;
            -o-transition: all 0.4s ease-in-out;
            -ms-transition: all 0.4s ease-in-out;
            transition: all 0.4s ease-in-out;
            -webkit-transform: scale(0);
            -moz-transform: scale(0);
            -o-transform: scale(0);
            -ms-transform: scale(0);
            transform: scale(0);
            -webkit-backface-visibility: hidden;
            position: absolute;
            background: #092b67;
            width: 100%;
            height: 100%;
            opacity: 0;
            top: 0;
            left: 0;
        }
        .col-sm-2:hover .info, .opened .info{
            -webkit-transition: all 0.4s ease-in-out;
            -moz-transition: all 0.4s ease-in-out;
            -o-transition: all 0.4s ease-in-out;
            -ms-transition: all 0.4s ease-in-out;
            transition: all 0.4s ease-in-out;
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -o-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
            opacity: 1;
            z-index: 10;
        }
        .col-sm-2 a .info h4 {
            color: #fff;
            letter-spacing: 1px;
            padding-top: 28%;
        }
        .info i{
            position: absolute;
            right: -45px;
            top: 30%;
            font-size: 80px;
            color: #092b67;
        }
        .content p{
            font-size: 17px;
            text-transform: none;
            padding-left: 20px;
        }
    </style>
@stop

@section('content')
    <div class="container clearfix" data-ref="mixitup-container">
        <div class="header_normal_cover wow fadeInLeft">
            <h2 class="header toomuch">{{ trans('locale.bookkeeping') }}</h2>
            <div class="arrows_header">
                <img class="arrow_one wow rotateInDownRight" data-wow-delay=".2s" src="{{ asset('images/arrow_wht.png') }}">
                <img class="arrow_two wow rotateInUpLeft" data-wow-delay=".3s" src="{{ asset('images/arrow_wht.png') }}">
                <img class="arrow_three wow rotateInUpRight" data-wow-delay=".4s" src="{{ asset('images/arrow_wht.png') }}">
                <img class="arrow_four wow rotateInDownLeft" data-wow-delay=".5s" src="{{ asset('images/arrow_wht.png') }}">
            </div>
        </div>
        <div class="tab-content mt-20 wow bounceInUp">
            <div class="col-sm-12 fixing">
                <img class="for_desk" src="{{ asset('images/bookkeeping.png') }}">
                <div>
                    <p>{{ trans('locale.bookkeeping_paragraph.1') }}</p>
                    <p>{{ trans('locale.bookkeeping_paragraph.2') }}</p>
                </div>
            </div>

            <div class="col-sm-12 content fadeInDown wow">
                <h4 class="page_head"><i class="fa fa-circle wow rotateIn" data-wow-duration="1s" data-wow-iteration="infinite"></i> {{ trans('locale.bookkeeping_paragraph.3') }}</h4>
                <p>{{ trans('locale.bookkeeping_paragraph.4') }}</p>
                <h4 class="page_head"><i class="fa fa-circle wow rotateIn" data-wow-duration="1s" data-wow-iteration="infinite"></i> {{ trans('locale.bookkeeping_paragraph.5') }}</h4>
                <p>{{ trans('locale.bookkeeping_paragraph.6') }}</p>
                <p>{{ trans('locale.bookkeeping_paragraph.7') }}</p>
                <p>{{ trans('locale.bookkeeping_paragraph.8') }}</p>
            </div>

            <div class="col-sm-12">
                <ul class="mt-40 ch-grid">
                    <li class="wow fadeInDown" data-wow-delay=".3s">
                        <div class="ch-item ch-img-1">
                            <div class="ch-info">
                                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                <h3>{{ trans('locale.bookkeeping_content.1') }}</h3>
                                <p>{{ trans('locale.bookkeeping_content.5') }}</p>
                            </div>
                        </div>
                    </li>
                    <li class="wow fadeInDown" data-wow-delay=".4s">
                        <div class="ch-item ch-img-2">
                            <div class="ch-info">
                                <i class="fa fa-file-o" aria-hidden="true"></i>
                                <h3>{{ trans('locale.bookkeeping_content.2') }}</h3>
                                <p>{{ trans('locale.bookkeeping_content.6') }}</p>
                            </div>
                        </div>
                    </li>
                    <li class="wow fadeInDown" data-wow-delay=".5s">
                        <div class="ch-item ch-img-3">
                            <div class="ch-info">
                                <i class="fa fa-tasks" aria-hidden="true"></i>
                                <h3>{{ trans('locale.bookkeeping_content.3') }}</h3>
                                <p>{{ trans('locale.bookkeeping_content.7') }}</p>
                            </div>
                        </div>
                    </li>
                    <li class="wow fadeInDown" data-wow-delay=".6s">
                        <div class="ch-item ch-img-4">
                            <div class="ch-info">
                                <i class="fa fa-building" aria-hidden="true"></i>
                                <h3>{{ trans('locale.bookkeeping_content.4') }}</h3>
                                <p>{{ trans('locale.bookkeeping_content.8') }}</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            {{--<div class="bookkeeping">--}}
                {{--<div class="col-md-12">--}}
                    {{--<div class="col-sm-2 open" id="one">--}}
                        {{--<a href="#">--}}
                            {{--<h4>{{ trans('locale.bookkeeping_content.1') }}</h4>--}}
                            {{--<img src="{{ asset('images/objective.png') }}">--}}
                            {{--<div class="info">--}}
                                {{--<h4>{{ trans('locale.bookkeeping_content.1') }}</h4>--}}
                                {{--<i class="fa fa-caret-{{ app()->getLocale() == 'en' ? 'right' : 'left' }} wow shake" data-wow-duration="2s" data-wow-iteration="infinite"></i>--}}
                            {{--</div>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-9 one keeping hidden">--}}
                        {{--<p>{{ trans('locale.bookkeeping_content.5') }}</p>--}}
                        {{--<i class="fa fa-close closed" data-id="one"></i>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-2 open" id="two">--}}
                        {{--<a href="#">--}}
                            {{--<h4>{{ trans('locale.bookkeeping_content.2') }}</h4>--}}
                            {{--<img src="{{ asset('images/method.png') }}">--}}
                            {{--<div class="info">--}}
                                {{--<h4>{{ trans('locale.bookkeeping_content.2') }}</h4>--}}
                                {{--<i class="fa fa-caret-{{ app()->getLocale() == 'en' ? 'right' : 'left' }} wow shake" data-wow-duration="2s" data-wow-iteration="infinite"></i>--}}
                            {{--</div>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-9 two keeping hidden">--}}
                        {{--<p>{{ trans('locale.bookkeeping_content.6') }}</p>--}}
                        {{--<i class="fa fa-close closed" data-id="two"></i>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-2 open" id="three">--}}
                        {{--<a href="#">--}}
                            {{--<h4>{{ trans('locale.bookkeeping_content.3') }}</h4>--}}
                            {{--<img src="{{ asset('images/start_project.png') }}">--}}
                            {{--<div class="info">--}}
                                {{--<h4>{{ trans('locale.bookkeeping_content.3') }}</h4>--}}
                                {{--<i class="fa fa-caret-{{ app()->getLocale() == 'en' ? 'right' : 'left' }} wow shake" data-wow-duration="2s" data-wow-iteration="infinite"></i>--}}
                            {{--</div>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-9 three keeping hidden">--}}
                        {{--<p>{{ trans('locale.bookkeeping_content.7') }}</p>--}}
                        {{--<i class="fa fa-close closed" data-id="three"></i>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-2 open" id="four">--}}
                        {{--<a href="#">--}}
                            {{--<h4>{{ trans('locale.bookkeeping_content.4') }}</h4>--}}
                            {{--<img src="{{ asset('images/large_companies.png') }}">--}}
                            {{--<div class="info">--}}
                                {{--<h4>{{ trans('locale.bookkeeping_content.4') }}</h4>--}}
                                {{--<i class="fa fa-caret-{{ app()->getLocale() == 'en' ? 'right' : 'left' }} wow shake" data-wow-duration="2s" data-wow-iteration="infinite"></i>--}}
                            {{--</div>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-9 four keeping hidden">--}}
                        {{--<p>{{ trans('locale.bookkeeping_content.8') }}</p>--}}
                        {{--<i class="fa fa-close closed" data-id="three"></i>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>
@stop

{{--@section('scripts')--}}
    {{--<script>--}}
        {{--$(document).on('click', '.open', function (e) {--}}
            {{--e.preventDefault();--}}
            {{--showHide($(this).attr('id'));--}}
        {{--});--}}
        {{--$(document).on('click', '.closed', function (e) {--}}
            {{--e.preventDefault();--}}
            {{--showHide($(this).attr('data-id'));--}}
        {{--});--}}
        {{--function showHide(id){--}}
            {{--if($('.'+id).hasClass('hidden')){--}}
                {{--$('.open').not(this).each(function(){--}}
                    {{--$(this).addClass('hidden');--}}
                {{--});--}}
                {{--$('#'+id).addClass('opened');--}}
                {{--$('.'+id).removeClass('hidden');--}}
                {{--$('#'+id).removeClass('hidden');--}}
            {{--} else {--}}
                {{--$('.open').removeClass('hidden');--}}
                {{--$('#'+id).removeClass('opened');--}}
                {{--$('.'+id).addClass('hidden');--}}
            {{--}--}}
        {{--}--}}
    {{--</script>--}}
{{--@stop--}}