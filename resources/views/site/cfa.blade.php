@extends('includes.main')

@section('title', trans('locale.cfa'))

@section('styles')
    <link href='http://fonts.googleapis.com/css?family=Merienda+One' rel='stylesheet' type='text/css'>
    <style>
        .col-sm-12 p{
            font-size: 17px;
            text-transform: none;
        }
    </style>
@stop

@section('content')
    <div class="container clearfix cpa_page" data-ref="mixitup-container">
        <div class="header_normal_cover wow fadeInLeft">
            <h2 class="header">{{ trans('locale.cfa') }} <span>{{ trans('locale.mark') }}</span></h2>
            <div class="arrows_header">
                <img class="arrow_one wow rotateInDownRight" data-wow-delay=".2s" src="{{ asset('images/arrow_wht.png') }}">
                <img class="arrow_two wow rotateInUpLeft" data-wow-delay=".3s" src="{{ asset('images/arrow_wht.png') }}">
                <img class="arrow_three wow rotateInUpRight" data-wow-delay=".4s" src="{{ asset('images/arrow_wht.png') }}">
                <img class="arrow_four wow rotateInDownLeft" data-wow-delay=".5s" src="{{ asset('images/arrow_wht.png') }}">
            </div>
        </div>

        <div class="tab-content mt-20 row wow bounceInUp" style="visibility: hidden">
            <div class="cpa col-sm-12">
                <img class="center" src="{{ asset('images/course_bg.jpg') }}" >
                <div class="content">
                    <p>{{ trans('locale.cfa') }} <span>{{ trans('locale.mark') }}</span></p>
                    <p>{{ trans('locale.cfa_word') }}</p>
                </div>
            </div>
        </div>

        <div class="times row mt-20">
            <div class="col-sm-6 wow fadeInLeft video">
                <iframe width="69%" height="200" src="https://www.youtube.com/embed/SgThkfkuu-M?rel=0&autoplay=1" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="col-sm-6 wow fadeInRight">
                <h4><i class="fa fa-bell wow tada" data-wow-iteration="100" data-wow-delay=".25s"></i> {{ trans('locale.upcoming_cfa_courses') }}</h4>
                <ul>
                    <li><i class="fa fa-circle-o"></i> <strong>{{ trans('locale.reg') }}: </strong> {{ date('d-m-Y', strtotime($cfa->reg)) }}</li>
                    <li><i class="fa fa-circle-o"></i> <strong>{{ trans('locale.far') }}: </strong> {{ date('d-m-Y', strtotime($cfa->far)) }}</li>
                </ul>
            </div>
        </div>

        <div class="row mt-20">
            <h3 class="bordered_title wow shake ml-10">{{ trans('locale.become_cfa') }} : </h3>
            <span class="divider wow pulse" data-wow-duration=3s" data-wow-iteration="infinite"></span>
            <span class="clear"></span>
            {{--<ul class="mt-40 ch-grid">--}}
                {{--<li class="wow fadeInDown" data-wow-delay=".3s">--}}
                    {{--<div class="ch-item ch-img-1">--}}
                        {{--<div class="ch-info">--}}
                            {{--<i class="fa fa-graduation-cap" aria-hidden="true"></i>--}}
                            {{--<h3>{{ trans('locale.qualify') }}</h3>--}}
                            {{--<p><a href="#a" data-toggle="tab">View on Book</a></p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</li>--}}
                {{--<li class="wow fadeInDown" data-wow-delay=".4s">--}}
                    {{--<div class="ch-item ch-img-2">--}}
                        {{--<div class="ch-info">--}}
                            {{--<i class="fa fa-book" aria-hidden="true"></i>--}}
                            {{--<h3>{{ trans('locale.enroll') }}</h3>--}}
                            {{--<p><a href="#b" data-toggle="tab">View on Book</a></p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</li>--}}
                {{--<li class="wow fadeInDown" data-wow-delay=".5s">--}}
                    {{--<div class="ch-item ch-img-3">--}}
                        {{--<div class="ch-info">--}}
                            {{--<i class="fa fa-tasks" aria-hidden="true"></i>--}}
                            {{--<h3>{{ trans('locale.prepare') }}</h3>--}}
                            {{--<p><a href="#c" data-toggle="tab">View on Book</a></p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</li>--}}
                {{--<li class="wow fadeInDown" data-wow-delay=".6s">--}}
                    {{--<div class="ch-item ch-img-4">--}}
                        {{--<div class="ch-info">--}}
                            {{--<i class="fa fa-calendar" aria-hidden="true"></i>--}}
                            {{--<h3>{{ trans('locale.schedule') }}</h3>--}}
                            {{--<p><a href="#d" data-toggle="tab">View on Book</a></p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</li>--}}
                {{--<li class="wow fadeInDown" data-wow-delay=".7s">--}}
                    {{--<div class="ch-item ch-img-5">--}}
                        {{--<div class="ch-info">--}}
                            {{--<i class="fa fa-question-circle" aria-hidden="true"></i>--}}
                            {{--<h3>{{ trans('locale.exam') }}</h3>--}}
                            {{--<p><a href="#e" data-toggle="tab">View on Book</a></p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</li>--}}
                {{--<li class="wow fadeInDown" data-wow-delay=".8s">--}}
                    {{--<div class="ch-item ch-img-6">--}}
                        {{--<div class="ch-info">--}}
                            {{--<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>--}}
                            {{--<h3>{{ trans('locale.pass') }}</h3>--}}
                            {{--<p><a href="#f" data-toggle="tab">View on Book</a></p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</li>--}}
            {{--</ul>--}}
        </div>

        <div style="display: none;" id="locale" data-attr="{{app()->getLocale()}}"></div>
        <div class="row mt-50 mb-50" id="book_tabs">
            <div class="col-xs-11 ml-40 mr-40">
                <ul class="nav nav-tabs-left">
                    <li class="active qualify_tab">
                        <a href="#a" data-toggle="tab" onclick="qualify_click()"><i class="fa fa-graduation-cap" aria-hidden="true"></i>{{ trans('locale.qualify') }}</a>
                    </li>
                    <li class="enroll_tab">
                        <a href="#b" data-toggle="tab" onclick="enroll_click()"><i class="fa fa-book" aria-hidden="true"></i>{{ trans('locale.enroll') }}</a>
                    </li>
                    <li class="prepare_tab">
                        <a href="#c" data-toggle="tab" onclick="prepare_click()"><i class="fa fa-tasks" aria-hidden="true"></i>{{ trans('locale.prepare') }}</a>
                    </li>
                    <li class="schedule_tab">
                        <a href="#d" data-toggle="tab" onclick="schedule_click()"><i class="fa fa-calendar" aria-hidden="true"></i>{{ trans('locale.schedule') }}</a>
                    </li>
                    <li class="right_tab exam_tab">
                        <a href="#e" data-toggle="tab" onclick="exam_click()"><i class="fa fa-question-circle" aria-hidden="true"></i>{{ trans('locale.exam') }}</a>
                    </li>
                    <li class="right_tab pass_tab">
                        <a href="#f" data-toggle="tab" onclick="pass_click()"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>{{ trans('locale.pass') }}</a>
                    </li>
                </ul>
                <ul class="nav nav-tabs-right">
                    <li class="active qualify_tab">
                        <a href="#a" data-toggle="tab" onclick="qualify_click()"><i class="fa fa-graduation-cap" aria-hidden="true"></i>{{ trans('locale.qualify') }}</a>
                    </li>
                    <li class="enroll_tab">
                        <a href="#b" data-toggle="tab" onclick="enroll_click()"><i class="fa fa-book" aria-hidden="true"></i>{{ trans('locale.enroll') }}</a>
                    </li>
                    <li class="prepare_tab">
                        <a href="#c" data-toggle="tab" onclick="prepare_click()"><i class="fa fa-tasks" aria-hidden="true"></i>{{ trans('locale.prepare') }}</a>
                    </li>
                    <li class="schedule_tab">
                        <a href="#d" data-toggle="tab" onclick="schedule_click()"><i class="fa fa-calendar" aria-hidden="true"></i>{{ trans('locale.schedule') }}</a>
                    </li>
                    <li class="right_tab exam_tab">
                        <a href="#e" data-toggle="tab" onclick="exam_click()"><i class="fa fa-question-circle" aria-hidden="true"></i>{{ trans('locale.exam') }}</a>
                    </li>
                    <li class="right_tab pass_tab">
                        <a href="#f" data-toggle="tab" onclick="pass_click()"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>{{ trans('locale.pass') }}</a>
                    </li>
                </ul>

                <div class="flipbook-viewport">
                    <div class="flipbook">
                        <div class="page" style="background-color: #78B582;">
                        </div>
                        <div class="page lft_page">
                            <ul class="nav nav-tabs-left">
                                <li class="qualify_tab">
                                    <a style="font-size: 15px" onclick="qualify_click()" data-toggle="tab"><i class="fa fa-graduation-cap" aria-hidden="true"></i>{{ trans('locale.qualify') }}</a>
                                </li>
                            </ul>
                            <div class="center" style="text-align: center;">
                                <i class="fa fa-graduation-cap" style="font-size: 80px; margin-top: 40%; color:#78B582;" aria-hidden="true"></i>
                                <h3 style="font:400 50px/1.2 'Merienda One', Helvetica, sans-serif;color:#78B582;">{{ trans('locale.qualify') }}</h3>
                            </div>
                        </div>
                        <div class="page rt_page">

                            <p class="ml-50 mr-30 mt-30" style="font-size: 17px;">
                            <i class="fa fa-circle"></i>
                            {{ trans('locale.cfa_qualify.1') }}</p>
                            <p class="ml-50 mr-30 mt-10" style="font-size: 17px;">
                            <i class="fa fa-circle"></i>
                            {{ trans('locale.cfa_qualify.2') }}
                            <u>{{ trans('locale.cfa_qualify.3') }}</u>
                            {{ trans('locale.cfa_qualify.4') }}
                            <u>{{ trans('locale.cfa_qualify.5') }}</u>
                            </p>
                            <a href="https://www.cfainstitute.org/ethics/codes/ethics/Pages/index.aspx" target="_blank" class="ml-50 mr-30 mt-10" style="font-size: 17px; word-break: break-all;display: -webkit-box;">{{ trans('locale.click_here') }}</a>
                            <a href="https://www.cfainstitute.org/programs/cfaprogram/register/Pages/candidate_agreement.aspx" target="_blank" class="ml-50 mr-30 mt-10" style="font-size: 17px; word-break: break-all;display: -webkit-box;">{{ trans('locale.click_here') }}</a>
                        </div>
                        <div class="page lft_page">
                            <ul class="nav nav-tabs-left">
                                <li class="enroll_tab">
                                    <a style="font-size: 15px" data-toggle="tab" onclick="enroll_click()"><i class="fa fa-book" aria-hidden="true"></i>{{ trans('locale.enroll') }}</a>
                                </li>
                            </ul>
                            <div class="center" style="text-align: center;">
                                <i class="fa fa-book" style="font-size: 80px; margin-top: 40%; color:#B578AA;" aria-hidden="true"></i>
                                <h3 style="font:400 50px/1.2 'Merienda One', Helvetica, sans-serif;color:#B578AA;">{{ trans('locale.enroll') }}</h3>
                            </div>
                        </div>
                        <div class="page rt_page">
                            <p class="ml-50 mr-30 mt-30" style="font-size: 17px;">
                                <i class="fa fa-circle"></i>{{ trans('locale.cfa_enroll.1') }}
                            </p>
                            <a href="https://login.cfainstitute.org/LoginApplication/CreateNewAccount.aspx" target="_blank" class="ml-50 mr-30 mt-10" style="font-size: 17px; word-break: break-all;display: -webkit-box;">{{ trans('locale.click_here') }}</a>
                            <p class="ml-50 mr-30 mt-10" style="font-size: 17px;">
                                <i class="fa fa-circle"></i>{{ trans('locale.cfa_enroll.2') }}
                            </p>
                            <p class="ml-50 mr-30 mt-10" style="font-size: 17px;">
                                <i class="fa fa-circle"></i>{{ trans('locale.cfa_enroll.3') }}
                            </p>
                            <p class="ml-50 mr-30 mt-10" style="font-size: 17px;">
                                <i class="fa fa-circle"></i>{{ trans('locale.cfa_enroll.4') }}
                            </p>
                            <p class="ml-50 mr-30 mt-10" style="font-size: 15px;">
                                {{ trans('locale.cfa_enroll.5') }}
                            </p>
                            <p class="ml-50 mr-30 mt-10" style="font-size: 15px;">
                                {{ trans('locale.cfa_enroll.6') }}
                            </p>
                            <p class="ml-50 mr-30 mt-10" style="font-size: 15px;">
                                {{ trans('locale.cfa_enroll.7') }}
                            </p>
                        </div>
                        <div class="page lft_page">
                            <p class="ml-30 mr-60 mt-30" style="font-size: 17px;">
                                {{ trans('locale.cfa_enroll.8') }}
                            </p>
                            <a href="https://www.cfainstitute.org/programs/cfaprogram/register/Pages/fee_schedule.aspx" target="_blank" class="ml-60 mr-30 mt-10" style="font-size: 17px; word-break: break-all;display: -webkit-box;">{{ trans('locale.click_here') }}</a>
                        </div>
                        <div class="page rt_page">
                        </div>
                        <div class="page lft_page">
                            <ul class="nav nav-tabs-left">
                                <li class="active prepare_tab">
                                    <a style="font-size: 15px" data-toggle="tab" onclick="prepare_click()"><i class="fa fa-tasks" aria-hidden="true"></i>{{ trans('locale.prepare') }}</a>
                                </li>
                            </ul>
                            <div class="center" style="text-align: center;">
                                <i class="fa fa-tasks" style="font-size: 80px; margin-top: 40%; color:#404A60;" aria-hidden="true"></i>
                                <h3 style="font:400 50px/1.2 'Merienda One', Helvetica, sans-serif;color:#404A60;">{{ trans('locale.prepare') }}</h3>
                            </div>
                        </div>
                        <div class="page rt_page">
                            <p class="mr-30 ml-60 mt-30" style="font-size: 17px;">
                                <i class="fa fa-circle"></i>{{ trans('locale.prepare_content.1') }}
                            </p>
                        </div>
                        <div class="page lft_page">
                            <ul class="nav nav-tabs-left">
                                <li class="active schedule_tab">
                                    <a style="font-size: 15px" data-toggle="tab" onclick="schedule_click()"><i class="fa fa-calendar" aria-hidden="true"></i>{{ trans('locale.schedule') }}</a>
                                </li>
                            </ul>
                            <div class="center" style="text-align: center;">
                                <i class="fa fa-calendar" style="font-size: 80px; margin-top: 40%; color:#406045;" aria-hidden="true"></i>
                                <h3 style="font:400 50px/1.2 'Merienda One', Helvetica, sans-serif;color:#406045;">{{ trans('locale.schedule') }}</h3>
                            </div>
                        </div>
                        <div class="page rt_page">
                            <p class="ml-50 mr-30 mt-30" style="font-size: 17px;">
                                <i class="fa fa-circle"></i>{{ trans('locale.cfa_schedule.1') }}
                            </p>
                            <p class="ml-50 mr-30 mt-10" style="font-size: 15px;">
                                {{ trans('locale.cfa_schedule.2') }}
                            </p>
                            <a href="https://www.cfainstitute.org/programs/cfaprogram/exams/Pages/cfa_exam_calendars.aspx" target="_blank" class="ml-50 mr-30 mt-10" style="font-size: 17px; word-break: break-all;display: -webkit-box;">{{ trans('locale.click_here') }}</a>
                        </div>
                        <div class="page lft_page">
                            <ul class="nav nav-tabs-left">
                                <li class="exam_tab">
                                    <a style="font-size: 15px" data-toggle="tab" onclick="exam_click()"><i class="fa fa-question-circle" aria-hidden="true"></i>{{ trans('locale.exam') }}</a>
                                </li>
                            </ul>
                            <div class="center" style="text-align: center;">
                                <i class="fa fa-question-circle" style="font-size: 80px; margin-top: 40%; color:#B53C46;" aria-hidden="true"></i>
                                <h3 style="font:400 50px/1.2 'Merienda One', Helvetica, sans-serif;color:#B53C46;">{{ trans('locale.exam') }}</h3>
                            </div>
                        </div>
                        <div class="page rt_page">
                            <p class="ml-50 mr-30 mt-30" style="font-size: 15px;">
                                <i class="fa fa-circle"></i>{{ trans('locale.cfa_exam.1') }}
                            </p>
                            <p class="ml-50 mr-30 mt-5" style="font-size: 14px;">
                                {{ trans('locale.cfa_exam.2') }}
                            </p>
                            <p class="ml-50 mr-30 mt-5" style="font-size: 14px;">
                                {{ trans('locale.cfa_exam.3') }}
                            </p>
                            <p class="ml-50 mr-30 mt-5" style="font-size: 14px;">
                                {{ trans('locale.cfa_exam.4') }}
                            </p>
                            <p class="ml-50 mr-30 mt-5" style="font-size: 14px;">
                                {{ trans('locale.cfa_exam.5') }}
                            </p>
                            <p class="ml-50 mr-30 mt-5" style="font-size: 14px;">
                                {{ trans('locale.cfa_exam.6') }}
                            </p>
                        </div>
                        <div class="page lft_page">
                            <ul class="nav nav-tabs-left">
                                <li class="pass_tab">
                                    <a style="font-size: 15px" data-toggle="tab" onclick="pass_click()"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>{{ trans('locale.pass') }}</a>
                                </li>
                            </ul>
                            <div class="center" style="text-align: center;">
                                <i class="fa fa-thumbs-o-up" style="font-size: 80px; margin-top: 40%; color:#00B5A5;" aria-hidden="true"></i>
                                <h3 style="font:400 50px/1.2 'Merienda One', Helvetica, sans-serif;color:#00B5A5;">{{ trans('locale.pass') }}</h3>
                            </div>
                        </div>
                        <div class="page rt_page">
                            <p class="ml-50 mr-30 mt-30" style="font-size: 17px;">
                            <i class="fa fa-circle"></i>
                            {{ trans('locale.cfa_pass.1') }}</p>
                            <p class="ml-50 mr-30 mt-10" style="font-size: 17px;">
                            <i class="fa fa-circle"></i>
                            {{ trans('locale.cfa_pass.2') }}</p>
                        </div>
                    </div>
                </div>
            </div><!-- /col -->
        </div>

        <div class="col-sm-12">
            <h3 class="bordered_title wow shake ml-10">{{ trans('locale.cfa_content') }} : </h3>
            <span class="divider wow pulse" data-wow-duration=3s" data-wow-iteration="infinite"></span>
            <span class="clear"></span>
            <div class="cpa_content mt-40">
                <div class="half">
                    <div class="tab">
                        <input id="tab-one" checked="checked" type="checkbox" name="tabs">
                        <label for="tab-one">.</label>
                        <div class="tab-content">
                            <div class="col-sm-12">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>{{ trans('locale.cfa_details.12') }}</th>
                                        <th>{{ trans('locale.weight') }}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>{{ trans('locale.cfa_details.1') }}</td>
                                        <td>15%</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('locale.cfa_details.2') }}</td>
                                        <td>12%</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('locale.cfa_details.3') }}</td>
                                        <td>10%</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('locale.cfa_details.1') }}</td>
                                        <td>20%</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('locale.cfa_details.2') }}</td>
                                        <td>7%</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('locale.cfa_details.3') }}</td>
                                        <td>7%</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('locale.cfa_details.1') }}</td>
                                        <td>10%</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('locale.cfa_details.2') }}</td>
                                        <td>10%</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('locale.cfa_details.3') }}</td>
                                        <td>5%</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('locale.cfa_details.3') }}</td>
                                        <td>4%</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-sm-12">
                                <h5 class="center ordinary">{{ trans('locale.cfa_details.11') }}<a href="https://www.cfainstitute.org/programs/cfaprogram/exams/Pages/level_I_exam_prep.aspx" target="_blank">{{ trans('locale.click_here') }}</a></h5>
                            </div>
                        </div>
                    </div>

                    <div class="tab">
                        <input id="tab-two" type="checkbox" name="tabs">
                        <label for="tab-two">.</label>
                        <div class="tab-content">
                            <div class="col-sm-12">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>{{ trans('locale.cfa_details.12') }}</th>
                                        <th>{{ trans('locale.weight') }}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>{{ trans('locale.cfa_details.1') }}</td>
                                        <td>10-15%</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('locale.cfa_details.2') }}</td>
                                        <td>5-10%</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('locale.cfa_details.3') }}</td>
                                        <td>5-10%</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('locale.cfa_details.1') }}</td>
                                        <td>15-20%</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('locale.cfa_details.2') }}</td>
                                        <td>5-15%</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('locale.cfa_details.3') }}</td>
                                        <td>5-10%</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('locale.cfa_details.1') }}</td>
                                        <td>15-25%</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('locale.cfa_details.2') }}</td>
                                        <td>10-20%</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('locale.cfa_details.3') }}</td>
                                        <td>5-15%</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('locale.cfa_details.3') }}</td>
                                        <td>5-15%</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-sm-12">
                                <h5 class="center ordinary">{{ trans('locale.cia_details.4') }}<a href="https://www.cfainstitute.org/programs/cfaprogram/exams/Pages/level_II_exam_prep.aspx" target="_blank">{{ trans('locale.click_here') }}</a></h5>
                            </div>
                        </div>
                    </div>

                    <div class="tab">
                        <input id="tab-three" type="checkbox" name="tabs">
                        <label for="tab-three">.</label>
                        <div class="tab-content">
                            <div class="col-sm-12">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>{{ trans('locale.cfa_details.12') }}</th>
                                        <th>{{ trans('locale.weight') }}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>{{ trans('locale.cfa_details.1') }}</td>
                                        <td>10%</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('locale.cfa_details.3') }}</td>
                                        <td>45-55%</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('locale.cfa_details.1') }}</td>
                                        <td>5-15%</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('locale.cfa_details.2') }}</td>
                                        <td>10-20%</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('locale.cfa_details.3') }}</td>
                                        <td>5-15%</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('locale.cfa_details.3') }}</td>
                                        <td>5-15%</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-sm-12">
                                <h5 class="center ordinary">{{ trans('locale.cia_details.4') }}<a href="https://www.cfainstitute.org/programs/cfaprogram/exams/Pages/level_III_exam_prep.aspx" target="_blank">{{ trans('locale.click_here') }}</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop

@section('scripts')
    {!! Html::script('js/cfa.js') !!}
@stop