@extends('includes.main')

@section('title', trans('locale.cma'))

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
            <h2 class="header">{{ trans('locale.cma') }} <span>{{ trans('locale.mark') }}</span></h2>
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
                    <p>{{ trans('locale.cma') }} <span>{{ trans('locale.mark') }}</span></p>
                    <p>{{ trans('locale.cma_word') }}</p>
                </div>
            </div>
        </div>

        <div class="times row mt-20">
            <div class="col-sm-6 wow fadeInLeft video">
                <iframe width="69%" height="200" src="https://www.youtube.com/embed/8fMMpSrjGqc?rel=0&autoplay=1" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="col-sm-6 wow fadeInRight">
                <h4><i class="fa fa-bell wow tada" data-wow-iteration="100" data-wow-delay=".25s"></i> {{ trans('locale.upcoming_cma_courses') }}</h4>
                <ul>
                    <li><i class="fa fa-circle-o"></i> <strong>{{ trans('locale.reg') }}: </strong> {{ date('d-m-Y', strtotime($cma->reg)) }}</li>
                    <li><i class="fa fa-circle-o"></i> <strong>{{ trans('locale.far') }}: </strong> {{ date('d-m-Y', strtotime($cma->far)) }}</li>
                </ul>
            </div>
        </div>
        <div style="display: none;" id="locale" data-attr="{{app()->getLocale()}}"></div>

        <div class="row mt-20">
            <h3 class="bordered_title wow shake">{{ trans('locale.become_cma') }} : </h3>
            <span class="divider wow pulse" data-wow-duration=3s" data-wow-iteration="infinite"></span>
            <span class="clear"></span>
            <ul class="mt-40 ch-grid">
                <li class="wow fadeInDown" data-wow-delay=".3s">
                    <div class="ch-item ch-img-1">
                        <div class="ch-info">
                            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                            <h3>{{ trans('locale.qualify') }}</h3>
                            <p><a href="#a" data-toggle="tab">{{ trans('locale.view_on_book') }}</a></p>
                        </div>
                    </div>
                </li>
                <li class="wow fadeInDown" data-wow-delay=".4s">
                    <div class="ch-item ch-img-2">
                        <div class="ch-info">
                            <i class="fa fa-book" aria-hidden="true"></i>
                            <h3>{{ trans('locale.enroll') }}</h3>
                            <p><a href="#b" data-toggle="tab">{{ trans('locale.view_on_book') }}</a></p>
                        </div>
                    </div>
                </li>
                <li class="wow fadeInDown" data-wow-delay=".5s">
                    <div class="ch-item ch-img-3">
                        <div class="ch-info">
                            <i class="fa fa-tasks" aria-hidden="true"></i>
                            <h3>{{ trans('locale.prepare') }}</h3>
                            <p><a href="#c" data-toggle="tab">{{ trans('locale.view_on_book') }}</a></p>
                        </div>
                    </div>
                </li>
                <li class="wow fadeInDown" data-wow-delay=".6s">
                    <div class="ch-item ch-img-4">
                        <div class="ch-info">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                            <h3>{{ trans('locale.schedule') }}</h3>
                            <p><a href="#d" data-toggle="tab">{{ trans('locale.view_on_book') }}</a></p>
                        </div>
                    </div>
                </li>
                <li class="wow fadeInDown" data-wow-delay=".7s">
                    <div class="ch-item ch-img-5">
                        <div class="ch-info">
                            <i class="fa fa-question-circle" aria-hidden="true"></i>
                            <h3>{{ trans('locale.exam') }}</h3>
                            <p><a href="#e" data-toggle="tab">{{ trans('locale.view_on_book') }}</a></p>
                        </div>
                    </div>
                </li>
                <li class="wow fadeInDown" data-wow-delay=".8s">
                    <div class="ch-item ch-img-6">
                        <div class="ch-info">
                            <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                            <h3>{{ trans('locale.pass') }}</h3>
                            <p><a href="#f" data-toggle="tab">{{ trans('locale.view_on_book') }}</a></p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <div class="row mt-50 mb-50" id="book_tabs">
            <div class="col-xs-10 col-xs-offset-1">
                <div class="tabs-left wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="2s">
                    <ul class="nav nav-tabs-left">
                        <li class="active qualify_tab">
                            <a href="#a" data-toggle="tab"><i class="fa fa-graduation-cap" aria-hidden="true"></i>{{ trans('locale.qualify') }}</a>
                        </li>
                        <li class="enroll_tab">
                            <a href="#b" data-toggle="tab"><i class="fa fa-book" aria-hidden="true"></i>{{ trans('locale.enroll') }}</a>
                        </li>
                        <li class="prepare_tab">
                            <a href="#c" data-toggle="tab"><i class="fa fa-tasks" aria-hidden="true"></i>{{ trans('locale.prepare') }}</a>
                        </li>
                        <li class="schedule_tab">
                            <a href="#d" data-toggle="tab"><i class="fa fa-calendar" aria-hidden="true"></i>{{ trans('locale.schedule') }}</a>
                        </li>
                        <li class="right_tab exam_tab">
                            <a href="#e" data-toggle="tab"><i class="fa fa-question-circle" aria-hidden="true"></i>{{ trans('locale.exam') }}</a>
                        </li>
                        <li class="right_tab pass_tab">
                            <a href="#f" data-toggle="tab"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>{{ trans('locale.pass') }}</a>
                        </li>
                    </ul>

                    <div class="tab-content" style="font:400 100px/1.2 'Merienda One', Helvetica, sans-serif;">
                        <div class="tab-pane row active" id="a">
                            <div class="flipbook-viewport">
                                <div class="flipbook">
                                    <div class="page" style="background-color: #78B582;"></div>
                                    <div class="page lft_page">
                                        <div class="center" style="text-align: center;">
                                            <i class="fa fa-graduation-cap" style="font-size: 80px; margin-top: 40%; color:#78B582;" aria-hidden="true"></i>
                                            <h3 style="font:400 50px/1.2 'Merienda One', Helvetica, sans-serif;color:#78B582;">{{ trans('locale.qualify') }}</h3>
                                        </div>
                                    </div>
                                    <div class="page rt_page">
                                        <p class="mr-50 ml-20 mt-10" style="font-size: 17px;"><i class="fa fa-circle"></i> {{ trans('locale.cma_qualify.1') }}</p>
                                        <p class="mr-50 ml-20 mt-10" style="font-size: 17px;"><i class="fa fa-circle"></i> {{ trans('locale.cma_qualify.2') }}
                                            <a href="http://univ.cc/world.php" target="_blank" style="word-break:break-all;display:-webkit-box;">({{ trans('locale.click_here') }})</a>
                                        </p>
                                        <p class="mr-50 ml-20 mt-10" style="font-size: 17px;"><i class="fa fa-circle"></i> {{ trans('locale.cma_qualify.3') }}</p>
                                        <p class="mr-50 ml-20 mt-10" style="font-size: 17px;"><i class="fa fa-circle"></i> {{ trans('locale.cma_qualify.4') }} {{ trans('locale.page') }} 6:
                                            <a href="https://www.imanet.org/-/media/6f64b804887641d880afef2178a44b9c.ashx" target="_blank" style="word-break:break-all;display:-webkit-box;">({{ trans('locale.click_here') }})</a>
                                        </p>
                                        <p class="mr-50 ml-20 mt-10" style="font-size: 17px;"><i class="fa fa-circle"></i>{{ trans('locale.cma_qualify.5') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane row" id="b">
                            <div class="flipbook-viewport">
                                <div class="flipbook2">
                                    <div class="page" style="background-color: #B578AA;"></div>
                                    <div class="page lft_page">
                                        <div class="center" style="text-align: center;">
                                            <i class="fa fa-book" style="font-size: 80px; margin-top: 40%; color:#B578AA;" aria-hidden="true"></i>
                                            <h3 style="font:400 40px/1.2 'Merienda One', Helvetica, sans-serif;color:#B578AA;">{{ trans('locale.enroll_fees') }}</h3>
                                        </div>
                                    </div>
                                    <div class="page rt_page">
                                        <p class="mr-60 ml-20 mt-10" style="font-size: 17px;"><i class="fa fa-circle"></i> {{ trans('locale.cma_enroll.1') }}</p>
                                        <p class="mr-60 ml-20 mt-10" style="font-size: 17px;"><i class="fa fa-circle"></i> {{ trans('locale.cma_enroll.2') }}
                                            <a href="https://www.imanet.org/cma-certification/getting-started?ssopc=1" target="_blank" style="word-break:break-all;display:-webkit-box;">({{ trans('locale.click_here') }})</a>
                                        </p>
                                        <table class="table ml-10 mr-10" style="width: 90%">
                                            <thead>
                                                <tr>
                                                    <th style="width: 65%">{{ trans('locale.cma_enroll.3') }}</th>
                                                    <th>{{ trans('locale.cma_enroll.13') }}</th>
                                                    <th>{{ trans('locale.cma_enroll.14') }}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>{{ trans('locale.cma_enroll.4') }}</td>
                                                    <td>$245</td>
                                                    <td>$39</td>
                                                </tr>
                                                <tr>
                                                    <td>{{ trans('locale.cma_enroll.5') }}</td>
                                                    <td>$15</td>
                                                    <td>$15</td>
                                                </tr>
                                                <tr>
                                                    <td>{{ trans('locale.cma_enroll.6') }}</td>
                                                    <td>$250</td>
                                                    <td>$188</td>
                                                </tr>
                                                <tr>
                                                    <td>{{ trans('locale.cma_enroll.7') }}</td>
                                                    <td>$415</td>
                                                    <td>$311</td>
                                                </tr>
                                                <tr>
                                                    <td>{{ trans('locale.cma_enroll.8') }}</td>
                                                    <td>$415</td>
                                                    <td>$311</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>$1340</td>
                                                    <td>$864</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="page lft_page">
                                        <p class="ml-70 mr-20 mt-10" style="font-size: 14px; color: red;">
                                            {{ trans('locale.cma_enroll.9') }}
                                        </p>
                                        <p class="ml-70 mr-20 mt-10" style="font-size: 14px; color: red;">
                                            {{ trans('locale.cma_enroll.10') }}
                                        </p>
                                        <p class="ml-70 mr-20 mt-10" style="font-size: 14px; color: red;">
                                            {{ trans('locale.cma_enroll.11') }}
                                        </p>
                                    </div>
                                    <div class="page rt_page">
                                        <p class="mr-70 ml-20 mt-10" style="font-size: 17px;">
                                            <i class="fa fa-circle"></i>{{ trans('locale.cma_enroll.12') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane row" id="c">
                            <div class="flipbook-viewport">
                                <div class="flipbook3">
                                    <div class="page" style="background-color: #404A60;"></div>
                                    <div class="page lft_page">
                                        <div class="center" style="text-align: center;">
                                            <i class="fa fa-tasks" style="font-size: 80px; margin-top: 40%; color:#404A60;" aria-hidden="true"></i>
                                            <h3 style="font:400 50px/1.2 'Merienda One', Helvetica, sans-serif;color:#404A60;">{{ trans('locale.prepare') }}</h3>
                                        </div>
                                    </div>
                                    <div class="page rt_page">
                                        <p class="ml-30 mr-20 mt-10" style="font-size: 17px;"><i class="fa fa-circle"></i> {{ trans('locale.prepare_content.1') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane row" id="d">
                            <div class="flipbook-viewport">
                                <div class="flipbook4">
                                    <div class="page" style="background-color: #406045;"></div>
                                    <div class="page lft_page">
                                        <div class="center" style="text-align: center;">
                                            <i class="fa fa-calendar" style="font-size: 80px; margin-top: 40%; color:#406045;" aria-hidden="true"></i>
                                            <h3 style="font:400 50px/1.2 'Merienda One', Helvetica, sans-serif;color:#406045;">{{ trans('locale.schedule') }}</h3>
                                        </div>
                                    </div>
                                    <div class="page rt_page">
                                        <p class="mr-60 ml-20 mt-10" style="font-size: 17px;"><i class="fa fa-circle"></i> {{ trans('locale.cma_schedule.1') }}</p>
                                        <p class="mr-60 ml-20 mt-10" style="font-size: 15px;">
                                            {{ trans('locale.cma_schedule.2') }}
                                        </p>
                                        <p class="mr-60 ml-20 mt-10" style="font-size: 15px;">
                                            {{ trans('locale.cma_schedule.3') }}
                                        </p>
                                        <p class="mr-60 ml-20 mt-10" style="font-size: 15px;">
                                            {{ trans('locale.cma_schedule.4') }}
                                        </p>
                                        <p class="mr-60 ml-20 mt-10" style="font-size: 17px;"><i class="fa fa-circle"></i> {{ trans('locale.cma_schedule.5') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane row" id="e">
                            <div class="flipbook-viewport">
                                <div class="flipbook5">
                                    <div class="page" style="background-color: #B53C46;"></div>
                                    <div class="page lft_page">
                                        <div class="center" style="text-align: center;">
                                            <i class="fa fa-question-circle" style="font-size: 80px; margin-top: 40%; color:#B53C46;" aria-hidden="true"></i>
                                            <h3 class="ml-30" style="font:400 38px/1.2 'Merienda One', Helvetica, sans-serif;color:#B53C46;">{{ trans('locale.sit_for_exam') }}</h3>
                                        </div>
                                    </div>
                                    <div class="page rt_page">
                                        <p class="mr-60 ml-20 mt-10" style="font-size: 17px;">
                                            <i class="fa fa-circle"></i> {{ trans('locale.cma_exam.1') }}
                                        </p>
                                        <p class="mr-60 ml-20 mt-10" style="font-size: 17px;">
                                            <i class="fa fa-circle"></i> {{ trans('locale.cma_exam.2') }}
                                        </p>
                                        <p class="mr-60 ml-20 mt-10" style="font-size: 17px;">
                                            <i class="fa fa-circle"></i> {{ trans('locale.cma_exam.3') }}
                                        </p>
                                        <p class="mr-60 ml-20 mt-10" style="font-size: 17px;">
                                            <i class="fa fa-circle"></i> {{ trans('locale.cma_exam.4') }}
                                        </p>
                                        <p class="mr-60 ml-20 mt-10" style="font-size: 17px;">
                                            <i class="fa fa-circle"></i> {{ trans('locale.cma_exam.5') }}
                                        </p>
                                    </div>
                                    <div class="page lft_page">
                                        <p class="ml-60 mr-20 mt-10" style="font-size: 17px;">
                                            <i class="fa fa-circle"></i> {{ trans('locale.cma_exam.6') }}
                                        </p>
                                    </div>
                                    <div class="page rt_page"></div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane row" id="f">
                            <div class="flipbook-viewport">
                                <div class="flipbook6">
                                    <div class="page" style="background-color: #00B5A5;">
                                    </div>
                                    <div class="page lft_page">
                                        <div class="center" style="text-align: center;">
                                            <i class="fa fa-thumbs-o-up" style="font-size: 80px; margin-top: 40%; color:#00B5A5;" aria-hidden="true"></i>
                                            <h3 style="font:400 38px/1.2 'Merienda One', Helvetica, sans-serif;color:#00B5A5;">{{ trans('locale.pass') }}</h3>
                                        </div>
                                    </div>
                                    <div class="page rt_page">
                                        <p class="mr-50 ml-20 mt-10" style="font-size: 17px;">
                                            <i class="fa fa-circle"></i> {{ trans('locale.cma_pass.1') }}
                                        </p>
                                        <p class="mr-50 ml-20 mt-10" style="font-size: 17px;">
                                            <i class="fa fa-circle"></i> {{ trans('locale.cma_pass.2') }}
                                            <a href="https://www.imanet.org/-/media/ce904f5b414a4b63a11d1fe3f1be4dd9.ashx?la=en" target="_blank" class="mr-60 ml-20 mt-10" style="font-size: 17px; word-break: break-all;display: -webkit-box;">({{ trans('locale.click_here') }})</a>
                                        </p>
                                        <p class="mr-50 ml-20 mt-10" style="font-size: 17px;">
                                            <i class="fa fa-circle"></i> {{ trans('locale.cma_pass.3') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /tab-content -->
                </div><!-- /tabbable -->
            </div><!-- /col -->
        </div>

        <div class="col-sm-12 mt-20">
            <h3 class="bordered_title wow shake">{{ trans('locale.cma_content') }} : </h3>
            <span class="divider wow pulse" data-wow-duration=3s" data-wow-iteration="infinite"></span>
            <span class="clear"></span>
            <div class="cpa_content mt-40">
                <div class="half">
                    <div class="tab">
                        <input id="tab-one" checked="checked" type="checkbox" name="tabs">
                        <label for="tab-one">{{ trans('locale.cma_exam_content.1') }}</label>
                        <div class="tab-content">
                            <div class="col-sm-12">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>{{ trans('locale.weight') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{ trans('locale.cma_exam_content.2') }}</td>
                                            <td>15%</td>
                                        </tr>
                                        <tr>
                                            <td>{{ trans('locale.cma_exam_content.3') }}</td>
                                            <td>30%</td>
                                        </tr>
                                        <tr>
                                            <td>{{ trans('locale.cma_exam_content.4') }}</td>
                                            <td>20%</td>
                                        </tr>
                                        <tr>
                                            <td>{{ trans('locale.cma_exam_content.5') }}</td>
                                            <td>20%</td>
                                        </tr>
                                        <tr>
                                            <td>{{ trans('locale.cma_exam_content.6') }}</td>
                                            <td>15%</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-sm-12">
                                <h5 class="center ordinary">{{ trans('locale.cma_exam_content.7') }} ({{ trans('locale.page') }} 5-8) <a href="https://www.imanet.org/-/media/f2e090eb04954cfe8f0fbb1654281262.ashx" target="_blank">{{ trans('locale.click_here') }}</a></h5>
                            </div>
                        </div>
                    </div>

                    <div class="tab">
                        <input id="tab-two" type="checkbox" name="tabs">
                        <label for="tab-two">{{ trans('locale.cma_exam_content.8') }}</label>
                        <div class="tab-content">
                            <div class="col-sm-12">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>{{ trans('locale.weight') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{ trans('locale.cma_exam_content.9') }}</td>
                                            <td>25%</td>
                                        </tr>
                                        <tr>
                                            <td>{{ trans('locale.cma_exam_content.10') }}</td>
                                            <td>20%</td>
                                        </tr>
                                        <tr>
                                            <td>{{ trans('locale.cma_exam_content.11') }}</td>
                                            <td>20%</td>
                                        </tr>
                                        <tr>
                                            <td>{{ trans('locale.cma_exam_content.12') }}</td>
                                            <td>10%</td>
                                        </tr>
                                        <tr>
                                            <td>{{ trans('locale.cma_exam_content.13') }}</td>
                                            <td>15%</td>
                                        </tr>
                                        <tr>
                                            <td>{{ trans('locale.cma_exam_content.14') }}</td>
                                            <td>10%</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-sm-12">
                                <h5 class="center ordinary">{{ trans('locale.cma_exam_content.7') }} ({{ trans('locale.page') }} 9-12) <a href="https://www.imanet.org/-/media/f2e090eb04954cfe8f0fbb1654281262.ashx" target="_blank">{{ trans('locale.click_here') }}</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    {!! Html::script('js/cpa.js') !!}
@stop