@extends('includes.main')

@section('title', trans('locale.ascension').trans('locale.ers'))

@section('styles')
    <style>
        .nav-tabs{
            width: 95%;
            margin: auto;
        }
        .tab-content{
            margin: 20px 5%;
        }
        .nav-tabs, .nav-tabs>li>a:hover{
            border-bottom-color: #092b67;
        }
        .nav-tabs>li{
            text-align: center;
        }
        .nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover{
            color: #fff;
            background-color: #092b67;
            border-color: #092b67;
            -webkit-transition: all 0.4s ease-in-out;
            -moz-transition: all 0.4s ease-in-out;
            -o-transition: all 0.4s ease-in-out;
            -ms-transition: all 0.4s ease-in-out;
            transition: all 0.4s ease-in-out;
        }
        .nav-tabs>li>a {
            font-size: 17px;
            background: #ececec;
            color: #092b67;
            border-bottom-color: #092b67;
        }
        .nav-tabs>li>a:hover {
            background: rgba(9, 43, 103, 0.5);
            color: #fff;
            -webkit-transition: all 0.4s ease-in-out;
            -moz-transition: all 0.4s ease-in-out;
            -o-transition: all 0.4s ease-in-out;
            -ms-transition: all 0.4s ease-in-out;
            transition: all 0.4s ease-in-out;
        }
        .tab-content{
            min-height: 400px;
        }
        .tab-content li {
            font-size: 16px;
            line-height: 25px;
            color: #092b67;
        }
        .tab-content li i{
            font-size: 10px;
            color: #092b67;
            vertical-align: middle;
        }
    </style>
@stop

@section('content')
    <div class="container clearfix" data-ref="mixitup-container">
        <div class="header_normal_cover wow fadeInLeft">
            <h2 class="header toomuch">{{ trans('locale.ascension_courses') }}</h2>
            <div class="arrows_header">
                <img class="arrow_one wow rotateInDownRight" data-wow-delay=".2s" src="{{ asset('images/arrow_wht.png') }}">
                <img class="arrow_two wow rotateInUpLeft" data-wow-delay=".3s" src="{{ asset('images/arrow_wht.png') }}">
                <img class="arrow_three wow rotateInUpRight" data-wow-delay=".4s" src="{{ asset('images/arrow_wht.png') }}">
                <img class="arrow_four wow rotateInDownLeft" data-wow-delay=".5s" src="{{ asset('images/arrow_wht.png') }}">
            </div>
        </div>

        <div class="col-sm-12 mt-20">
            <h4 class="page_head mb-30 center">{{ trans('locale.courses_title') }}</h4>
            <ul class="nav nav-tabs courses_tabs" role="tablist">
                <li class="col-sm-4 active"><a data-toggle="tab" role="tab" href="#finance">{{ trans('locale.accounting_finance') }}</a></li>
                <li class="col-sm-4"><a data-toggle="tab" role="tab" href="#business">{{ trans('locale.business_management') }}</a></li>
                <li class="col-sm-4"><a data-toggle="tab" role="tab" href="#hr_man">{{ trans('locale.hr_management') }}</a></li>
            </ul>

            <div class="tab-content">
                <div id="finance" class="tab-pane fade in active">
                    <ul>
                        <li><i class="fa fa-circle-o wow rotateIn" data-wow-duration="2s" data-wow-iteration="infinite"></i> {{ trans('locale.accounting_courses.1') }}</li>
                        <li><i class="fa fa-circle-o wow rotateIn" data-wow-duration="2s" data-wow-iteration="infinite"></i> {{ trans('locale.accounting_courses.2') }}</li>
                        <li><i class="fa fa-circle-o wow rotateIn" data-wow-duration="2s" data-wow-iteration="infinite"></i> {{ trans('locale.accounting_courses.3') }}</li>
                        <li><i class="fa fa-circle-o wow rotateIn" data-wow-duration="2s" data-wow-iteration="infinite"></i> {{ trans('locale.accounting_courses.4') }}</li>
                        <li><i class="fa fa-circle-o wow rotateIn" data-wow-duration="2s" data-wow-iteration="infinite"></i> {{ trans('locale.accounting_courses.5') }}</li>
                        <li><i class="fa fa-circle-o wow rotateIn" data-wow-duration="2s" data-wow-iteration="infinite"></i> {{ trans('locale.accounting_courses.6') }}</li>
                        <li><i class="fa fa-circle-o wow rotateIn" data-wow-duration="2s" data-wow-iteration="infinite"></i> {{ trans('locale.accounting_courses.7') }}</li>
                        <li><i class="fa fa-circle-o wow rotateIn" data-wow-duration="2s" data-wow-iteration="infinite"></i> {{ trans('locale.accounting_courses.8') }}</li>
                        <li><i class="fa fa-circle-o wow rotateIn" data-wow-duration="2s" data-wow-iteration="infinite"></i> {{ trans('locale.accounting_courses.9') }}</li>
                        <li><i class="fa fa-circle-o wow rotateIn" data-wow-duration="2s" data-wow-iteration="infinite"></i> {{ trans('locale.accounting_courses.10') }}</li>
                        <li><i class="fa fa-circle-o wow rotateIn" data-wow-duration="2s" data-wow-iteration="infinite"></i> {{ trans('locale.accounting_courses.11') }}</li>
                        <li><i class="fa fa-circle-o wow rotateIn" data-wow-duration="2s" data-wow-iteration="infinite"></i> {{ trans('locale.accounting_courses.12') }}</li>
                        <li><i class="fa fa-circle-o wow rotateIn" data-wow-duration="2s" data-wow-iteration="infinite"></i> {{ trans('locale.accounting_courses.13') }}</li>
                        <li><i class="fa fa-circle-o wow rotateIn" data-wow-duration="2s" data-wow-iteration="infinite"></i> {{ trans('locale.accounting_courses.14') }}</li>
                        <li><i class="fa fa-circle-o wow rotateIn" data-wow-duration="2s" data-wow-iteration="infinite"></i> {{ trans('locale.accounting_courses.15') }}</li>
                        <li><i class="fa fa-circle-o wow rotateIn" data-wow-duration="2s" data-wow-iteration="infinite"></i> {{ trans('locale.accounting_courses.16') }}</li>
                    </ul>
                </div>
                <div id="business" class="tab-pane fade">
                    <ul>
                        <li><i class="fa fa-circle-o wow rotateIn" data-wow-duration="2s" data-wow-iteration="infinite"></i> {{ trans('locale.business_courses.1') }}</li>
                        <li><i class="fa fa-circle-o wow rotateIn" data-wow-duration="2s" data-wow-iteration="infinite"></i> {{ trans('locale.business_courses.2') }}</li>
                        <li><i class="fa fa-circle-o wow rotateIn" data-wow-duration="2s" data-wow-iteration="infinite"></i> {{ trans('locale.business_courses.3') }}</li>
                        <li><i class="fa fa-circle-o wow rotateIn" data-wow-duration="2s" data-wow-iteration="infinite"></i> {{ trans('locale.business_courses.4') }}</li>
                        <li><i class="fa fa-circle-o wow rotateIn" data-wow-duration="2s" data-wow-iteration="infinite"></i> {{ trans('locale.business_courses.5') }}</li>
                        <li><i class="fa fa-circle-o wow rotateIn" data-wow-duration="2s" data-wow-iteration="infinite"></i> {{ trans('locale.business_courses.6') }}</li>
                        <li><i class="fa fa-circle-o wow rotateIn" data-wow-duration="2s" data-wow-iteration="infinite"></i> {{ trans('locale.business_courses.7') }}</li>
                        <li><i class="fa fa-circle-o wow rotateIn" data-wow-duration="2s" data-wow-iteration="infinite"></i> {{ trans('locale.business_courses.8') }}</li>
                        <li><i class="fa fa-circle-o wow rotateIn" data-wow-duration="2s" data-wow-iteration="infinite"></i> {{ trans('locale.business_courses.9') }}</li>
                        <li><i class="fa fa-circle-o wow rotateIn" data-wow-duration="2s" data-wow-iteration="infinite"></i> {{ trans('locale.business_courses.10') }}</li>
                        <li><i class="fa fa-circle-o wow rotateIn" data-wow-duration="2s" data-wow-iteration="infinite"></i> {{ trans('locale.business_courses.11') }}</li>
                        <li><i class="fa fa-circle-o wow rotateIn" data-wow-duration="2s" data-wow-iteration="infinite"></i> {{ trans('locale.business_courses.12') }}</li>
                    </ul>
                </div>
                <div id="hr_man" class="tab-pane fade">
                    <ul>
                        <li><i class="fa fa-circle-o wow rotateIn" data-wow-duration="2s" data-wow-iteration="infinite"></i> {{ trans('locale.hd_courses.1') }}</li>
                        <li><i class="fa fa-circle-o wow rotateIn" data-wow-duration="2s" data-wow-iteration="infinite"></i> {{ trans('locale.hd_courses.2') }}</li>
                        <li><i class="fa fa-circle-o wow rotateIn" data-wow-duration="2s" data-wow-iteration="infinite"></i> {{ trans('locale.hd_courses.3') }}</li>
                        <li><i class="fa fa-circle-o wow rotateIn" data-wow-duration="2s" data-wow-iteration="infinite"></i> {{ trans('locale.hd_courses.4') }}</li>
                        <li><i class="fa fa-circle-o wow rotateIn" data-wow-duration="2s" data-wow-iteration="infinite"></i> {{ trans('locale.hd_courses.5') }}</li>
                        <li><i class="fa fa-circle-o wow rotateIn" data-wow-duration="2s" data-wow-iteration="infinite"></i> {{ trans('locale.hd_courses.6') }}</li>
                        <li><i class="fa fa-circle-o wow rotateIn" data-wow-duration="2s" data-wow-iteration="infinite"></i> {{ trans('locale.hd_courses.7') }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@stop
