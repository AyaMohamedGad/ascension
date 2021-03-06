@extends('includes.main')

@section('title', trans('locale.bookkeeping'))

@section('styles')
    <style>
        .col-sm-2 {
            position: relative;
            margin: 0 40px 20px;
            text-align: center;
            border: 2px solid #0054a4;
            min-height: 230px;
            border-radius: 5px;
            padding-bottom: 15px;
        }

        .col-sm-2 a {
            width: 100%;
            height: 100%;
            display: inline-block;
            vertical-align: middle;
        }

        .col-sm-2 h4 {
            border-bottom: 2px solid #0054a4;
            width: 100%;
            padding-bottom: 10px;
        }

        .col-sm-2 img {
            text-align: center;
            margin: auto;
            max-width: 120px;
        }

        .col-sm-2 .info {
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
            background: #0054a4;
            width: 100%;
            height: 100%;
            opacity: 0;
            top: 0;
            left: 0;
        }

        .col-sm-2:hover .info, .opened .info {
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

        .info i {
            position: absolute;
            right: -45px;
            top: 30%;
            font-size: 80px;
            color: #0054a4;
        }

        .content p {
            text-transform: none;
            padding-left: 20px;
        }
        .pricingtable {
            min-height: 725px !important;
        }
    </style>
@stop

@section('content')
    <div class="container clearfix" data-ref="mixitup-container">
        <div class="tab-content mt-20 mb-50 wow bounceInUp" style="display: flow-root">
            <div class="information mb-50 fixing">
                <img class="for_desk" src="{{ asset('images/bookkeeping.png') }}">
                <div>
                    <p class="center">{{ trans('locale.bookkeeping') }}</p>
                    {{--<p>{{ trans('locale.bookkeeping_paragraph.2') }}</p>--}}
                </div>
            </div>

            {{--<div class="col-sm-12 content fadeInDown wow">--}}
                {{--<h4 class="page_head"><i class="fa fa-circle wow rotateIn" data-wow-duration="1s"--}}
                                         {{--data-wow-iteration="infinite"></i> {{ trans('locale.bookkeeping_paragraph.3') }}--}}
                {{--</h4>--}}
                {{--<p>{{ trans('locale.bookkeeping_paragraph.4') }}</p>--}}
                {{--<h4 class="page_head"><i class="fa fa-circle wow rotateIn" data-wow-duration="1s"--}}
                                         {{--data-wow-iteration="infinite"></i> {{ trans('locale.bookkeeping_paragraph.5') }}--}}
                {{--</h4>--}}
                {{--<p>{{ trans('locale.bookkeeping_paragraph.6') }}</p>--}}
                {{--<p>{{ trans('locale.bookkeeping_paragraph.7') }}</p>--}}
                {{--<p>{{ trans('locale.bookkeeping_paragraph.8') }}</p>--}}
            {{--</div>--}}

            <!-- <div class="col-sm-12">
                <div class="mt-30 col-md-4 col-sm-6 pricingtable one wow bounceInLeft">
                    <div class="top">
                        <h2>{{ trans('locale.bookkeeping') }}</h2>
                    </div>
                    <div class="content">
                        <p>{{ trans('locale.bookkeeping_paragraph.1') }}</p>
                        <p>{{ trans('locale.bookkeeping_paragraph.2') }}</p>
                    </div>
                </div>

                <div class="mt-30 col-md-4 col-sm-6 pricingtable two featured ">
                    <div class="top">
                        <h2>{{ trans('locale.bookkeeping_paragraph.3') }}</h2>
                    </div>
                    <div class="content">
                        <p>{{ trans('locale.bookkeeping_paragraph.4') }}</p>
                    </div>
                </div>

                <div class="mt-30 col-md-4 col-sm-6 pricingtable three wow bounceInRight">
                    <div class="top">
                        <h2>{{ trans('locale.bookkeeping_paragraph.5') }}</h2>
                    </div>
                    <div class="content">
                        <p>{{ trans('locale.bookkeeping_paragraph.6') }}</p>
                        <p>{{ trans('locale.bookkeeping_paragraph.7') }}</p>
                        <p>{{ trans('locale.bookkeeping_paragraph.8') }}</p>
                    </div>
                </div>
            </div> -->

            <div class="col-sm-12 mt-30">
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
        </div>
    </div>
@stop