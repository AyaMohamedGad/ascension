@extends('includes.main')

@section('title', trans('locale.cia'))

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
            <h2 class="header">{{ trans('locale.cia') }} <span>{{ trans('locale.mark') }}</span></h2>
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
                    <p>{{ trans('locale.cia') }} <span>{{ trans('locale.mark') }}</span></p>
                    <p>{{ trans('locale.cia_word') }}</p>
                </div>
            </div>
        </div>

        <div class="times row mt-20">
            <div class="col-sm-6 col-xs-12 wow fadeInLeft video">
                <iframe width="69%" height="200" src="https://www.youtube.com/embed/sJTAWW9xABg?rel=0&autoplay=1" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="col-sm-6 col-xs-12 wow fadeInRight">
                <h4><i class="fa fa-bell wow tada" data-wow-iteration="100" data-wow-delay=".25s"></i> {{ trans('locale.upcoming_cia_courses') }}</h4>
                <ul>
                    <li><i class="fa fa-circle-o"></i> <strong>{{ trans('locale.reg') }}: </strong> {{ date('d-m-Y', strtotime($cia->reg)) }}</li>
                    <li><i class="fa fa-circle-o"></i> <strong>{{ trans('locale.far') }}: </strong> {{ date('d-m-Y', strtotime($cia->far)) }}</li>
                </ul>
            </div>
        </div>
        <div style="display: none;" id="locale" data-attr="{{app()->getLocale()}}"></div>

        <div class="row mt-20">
            <h3 class="bordered_title wow shake ml-10">{{ trans('locale.become_cia') }} : </h3>
            <span class="divider wow pulse" data-wow-duration=3s" data-wow-iteration="infinite"></span>
            <span class="clear"></span>
            <ul class="mt-40 ch-grid">
                <li class="wow fadeInDown" data-wow-delay=".3s">
                    <div class="ch-item ch-img-1">
                        <div class="ch-info">
                            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                            <h3>{{ trans('locale.qualify') }}</h3>
                            <p><a href="#a" data-toggle="tab">View on Book</a></p>
                        </div>
                    </div>
                </li>
                <li class="wow fadeInDown" data-wow-delay=".4s">
                    <div class="ch-item ch-img-2">
                        <div class="ch-info">
                            <i class="fa fa-book" aria-hidden="true"></i>
                            <h3>{{ trans('locale.enroll') }}</h3>
                            <p><a href="#b" data-toggle="tab">View on Book</a></p>
                        </div>
                    </div>
                </li>
                <li class="wow fadeInDown" data-wow-delay=".5s">
                    <div class="ch-item ch-img-3">
                        <div class="ch-info">
                            <i class="fa fa-tasks" aria-hidden="true"></i>
                            <h3>{{ trans('locale.prepare') }}</h3>
                            <p><a href="#c" data-toggle="tab">View on Book</a></p>
                        </div>
                    </div>
                </li>
                <li class="wow fadeInDown" data-wow-delay=".6s">
                    <div class="ch-item ch-img-4">
                        <div class="ch-info">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                            <h3>{{ trans('locale.schedule') }}</h3>
                            <p><a href="#d" data-toggle="tab">View on Book</a></p>
                        </div>
                    </div>
                </li>
                <li class="wow fadeInDown" data-wow-delay=".7s">
                    <div class="ch-item ch-img-5">
                        <div class="ch-info">
                            <i class="fa fa-question-circle" aria-hidden="true"></i>
                            <h3>{{ trans('locale.exam') }}</h3>
                            <p><a href="#e" data-toggle="tab">View on Book</a></p>
                        </div>
                    </div>
                </li>
                <li class="wow fadeInDown" data-wow-delay=".8s">
                    <div class="ch-item ch-img-6">
                        <div class="ch-info">
                            <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                            <h3>{{ trans('locale.pass') }}</h3>
                            <p><a href="#f" data-toggle="tab">View on Book</a></p>
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
                                    <div class="page" style="background-color: #78B582;">
                                    </div>
                                    <div class="page lft_page">
                                        <div class="center" style="text-align: center;">
                                            <i class="fa fa-graduation-cap" style="font-size: 80px; margin-top: 40%; color:#78B582;" aria-hidden="true"></i>
                                            <h3 style="font:400 50px/1.2 'Merienda One', Helvetica, sans-serif;color:#78B582;">{{ trans('locale.qualify') }}</h3>
                                        </div>
                                    </div>
                                    <div class="page rt_page">

                                        <p class="ml-50 mr-20 mt-30" style="font-size: 17px;">
                                        <i class="fa fa-circle"></i>
                                        {{ trans('locale.cia_qualify.1') }}</p>
                                        <p class="ml-50 mr-20 mt-10" style="font-size: 15px; color: red;">{{ trans('locale.cia_qualify.2') }}</p>
                                        
                                        <p class="ml-50 mr-20 mt-10" style="font-size: 17px;">
                                        <i class="fa fa-circle"></i>
                                        {{ trans('locale.cia_qualify.3') }}</p>
                                        <p class="ml-50 mr-20 mt-10" style="font-size: 15px; color: red;">{{ trans('locale.cia_qualify.4') }}</p>
                                    </div>
                                    <div class="page lft_page">
                                        <div class="center" style="text-align: center;">
                                            <i class="fa fa-book" style="font-size: 80px; margin-top: 40%; color:#B578AA;" aria-hidden="true"></i>
                                            <h3 style="font:400 50px/1.2 'Merienda One', Helvetica, sans-serif;color:#B578AA;">{{ trans('locale.enroll') }}</h3>
                                        </div>
                                    </div>
                                    <div class="page rt_page">
                                        <p class="ml-50 mr-20 mt-30" style="font-size: 17px;">
                                            <i class="fa fa-circle"></i>{{ trans('locale.cia_enroll.1') }}
                                        </p>
                                        <a href="https://na.theiia.org/certification/Pages/getstarted.aspx" target="_blank" class="ml-50 mr-20 mt-10" style="font-size: 17px; word-break: break-all;display: -webkit-box;">{{ trans('locale.click_here') }}</a>
                                        <p class="ml-50 mr-20 mt-10" style="font-size: 17px;">
                                            <i class="fa fa-circle"></i>{{ trans('locale.cia_enroll.2') }}
                                        </p>
                                    </div>
                                    <div class="page lft_page">
                                        <table class="table ml-30 mr-50 mt-30" style="width: 75%">
                                            <thead>
                                                <tr>
                                                    <th style="width: 45%">{{ trans('locale.cia_enroll.3') }}</th>
                                                    <th>{{ trans('locale.cia_enroll.12') }}</th>
                                                    <th>{{ trans('locale.cia_enroll.13') }}</th>
                                                    <th>{{ trans('locale.cia_enroll.14') }}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>{{ trans('locale.cia_enroll.4') }}</td>
                                                    <td>$240</td>
                                                    <td></td>
                                                    <td>$35</td>
                                                </tr>
                                                <tr>
                                                    <td>{{ trans('locale.cia_enroll.5') }}</td>
                                                    <td>$115</td>
                                                    <td>$230</td>
                                                    <td>$65</td>
                                                </tr>
                                                <tr>
                                                    <td>{{ trans('locale.cia_enroll.6') }}</td>
                                                    <td>$280</td>
                                                    <td>$395</td>
                                                    <td>$230</td>
                                                </tr>
                                                <tr>
                                                    <td>{{ trans('locale.cia_enroll.7') }}</td>
                                                    <td>$230</td>
                                                    <td>$345</td>
                                                    <td>$180</td>
                                                </tr>
                                                <tr>
                                                    <td>{{ trans('locale.cia_enroll.8') }}</td>
                                                    <td>$230</td>
                                                    <td>$345</td>
                                                    <td>$180</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>$1095</td>
                                                    <td>$1315</td>
                                                    <td>$690</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <p class="ml-30 mr-50 mt-10" style="font-size: 17px;">
                                            {{ trans('locale.cia_enroll.9') }} {{ trans('locale.cia_enroll.10') }}
                                        <a href="https://na.theiia.org/certification/Pages/Pricing-Structure.aspx" target="_blank" style="font-size: 17px; word-break: break-all;display: -webkit-inline-box;">{{ trans('locale.click_here') }}</a>
                                        </p>                                        
                                    </div>
                                    <div class="page rt_page">
                                        <p class="ml-50 mr-20 mt-30" style="font-size: 17px;">
                                            {{ trans('locale.cia_enroll.11') }}
                                        </p>
                                    </div>
                                    <div class="page lft_page">
                                        <div class="center" style="text-align: center;">
                                            <i class="fa fa-tasks" style="font-size: 80px; margin-top: 40%; color:#404A60;" aria-hidden="true"></i>
                                            <h3 style="font:400 50px/1.2 'Merienda One', Helvetica, sans-serif;color:#404A60;">{{ trans('locale.prepare') }}</h3>
                                        </div>
                                    </div>
                                    <div class="page rt_page">
                                        <p class="ml-60 mr-20 mt-30" style="font-size: 17px;">
                                            <i class="fa fa-circle"></i>{{ trans('locale.prepare_content.1') }}
                                        </p>
                                    </div>
                                    <div class="page lft_page">
                                        <div class="center" style="text-align: center;">
                                            <i class="fa fa-calendar" style="font-size: 80px; margin-top: 40%; color:#406045;" aria-hidden="true"></i>
                                            <h3 style="font:400 50px/1.2 'Merienda One', Helvetica, sans-serif;color:#406045;">{{ trans('locale.schedule') }}</h3>
                                        </div>
                                    </div>
                                    <div class="page rt_page">
                                        <p class="ml-50 mr-20 mt-30" style="font-size: 17px;">
                                            <i class="fa fa-circle"></i>{{ trans('locale.cia_schedule.1') }}
                                        </p>
                                        <p class="ml-50 mr-20 mt-10" style="font-size: 17px;">
                                            <i class="fa fa-circle"></i>{{ trans('locale.cia_schedule.5') }}
                                        </p>
                                        <p class="ml-50 mr-20 mt-10" style="font-size: 17px;">
                                            <i class="fa fa-circle"></i>{{ trans('locale.cia_schedule.2') }}
                                        </p>
                                    </div>
                                    <div class="page lft_page">
                                        <p class="ml-30 mr-50 mt-30" style="font-size: 15px;">
                                            {{ trans('locale.cia_schedule.3') }}
                                        </p>
                                        <p class="ml-30 mr-50 mt-10" style="font-size: 15px;">
                                            {{ trans('locale.cia_schedule.4') }}
                                        </p>
                                        <a href="https://na.theiia.org/certification/Pages/Candidate-Eligibility-Extension.aspx" target="_blank" class="mr-50 ml-30 mt-10" style="font-size: 17px; word-break: break-all;display: -webkit-box;">{{ trans('locale.click_here') }}</a>
                                    </div>
                                    <div class="page rt_page">
                                    </div>
                                    <div class="page lft_page">
                                        <div class="center" style="text-align: center;">
                                            <i class="fa fa-question-circle" style="font-size: 80px; margin-top: 40%; color:#B53C46;" aria-hidden="true"></i>
                                            <h3 style="font:400 50px/1.2 'Merienda One', Helvetica, sans-serif;color:#B53C46;">{{ trans('locale.exam') }}</h3>
                                        </div>
                                    </div>
                                    <div class="page rt_page">
                                        <table class="table mr-20 ml-50 mt-30" style="width: 75%">
                                            <thead>
                                                <tr>
                                                    <th style="width: 40%"></th>
                                                    <th>{{ trans('locale.duration') }}</th>
                                                    <th>{{ trans('locale.mcqs') }}</th>
                                                    <th>{{ trans('locale.exam_result') }}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>{{ trans('locale.cia_exam.1') }}</td>
                                                    <td>2.5 {{ trans('hours') }}</td>
                                                    <td>125</td>
                                                    <td>{{ trans('locale.same_day') }}</td>
                                                </tr>
                                                <tr>
                                                    <td>{{ trans('locale.cia_exam.2') }}</td>
                                                    <td>2 {{ trans('hours') }}</td>
                                                    <td>100</td>
                                                    <td>{{ trans('locale.same_day') }}</td>
                                                </tr>
                                                <tr>
                                                    <td>{{ trans('locale.cia_exam.3') }}</td>
                                                    <td>2 {{ trans('hours') }}</td>
                                                    <td>100</td>
                                                    <td>{{ trans('locale.same_day') }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="page lft_page">
                                        <div class="center" style="text-align: center;">
                                            <i class="fa fa-thumbs-o-up" style="font-size: 80px; margin-top: 40%; color:#00B5A5;" aria-hidden="true"></i>
                                            <h3 style="font:400 50px/1.2 'Merienda One', Helvetica, sans-serif;color:#00B5A5;">{{ trans('locale.pass') }}</h3>
                                        </div>
                                    </div>
                                    <div class="page rt_page">
                                        <p class="ml-50 mr-20 mt-30" style="font-size: 17px;">
                                        <i class="fa fa-circle"></i>
                                        {{ trans('locale.cia_pass.1') }}</p>
                                        <p class="ml-50 mr-20 mt-10" style="font-size: 17px;">
                                        <i class="fa fa-circle"></i>
                                        {{ trans('locale.cia_pass.2') }}</p>
                                        <p class="ml-50 mr-20 mt-10" style="font-size: 17px;">
                                        <i class="fa fa-circle"></i>
                                        {{ trans('locale.cia_pass.3') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /tab-content -->
                </div><!-- /tabbable -->
            </div><!-- /col -->
        </div>

        <div class="col-sm-12">
            <h3 class="bordered_title wow shake">{{ trans('locale.cia_content') }} : </h3>
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
                                        <th>{{ trans('locale.cia_exam.1') }}</th>
                                        <th>{{ trans('locale.weight') }}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>{{ trans('locale.cia_details.1') }}</td>
                                        <td>35-45%</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('locale.cia_details.2') }}</td>
                                        <td>25-35%</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('locale.cia_details.3') }}</td>
                                        <td>28-38%</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-sm-12">
                                <h5 class="center ordinary">{{ trans('locale.cia_details.4') }}<a href="https://na.theiia.org/certification/CIA-Certification/Pages/CIA-2013-Exam-Syllabus-Part-2.aspx" target="_blank">{{ trans('locale.click_here') }}</a></h5>
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
                                        <th>{{ trans('locale.cia_exam.1') }}</th>
                                        <th>{{ trans('locale.weight') }}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>{{ trans('locale.cia_details.5') }}</td>
                                        <td>40-50%</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('locale.cia_details.6') }}</td>
                                        <td>40-50%</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('locale.cia_details.7') }}</td>
                                        <td>5-15%</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-sm-12">
                                <h5 class="center ordinary">{{ trans('locale.cia_details.4') }}<a href="https://na.theiia.org/certification/CIA-Certification/Pages/CIA-2013-Exam-Syllabus-Part-2.aspx" target="_blank">{{ trans('locale.click_here') }}</a></h5>
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
                                        <th>{{ trans('locale.cia_exam.1') }}</th>
                                        <th>{{ trans('locale.weight') }}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>{{ trans('locale.cia_details.8') }}</td>
                                        <td>5-15%</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('locale.cia_details.9') }}</td>
                                        <td>10-20%</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('locale.cia_details.10') }}</td>
                                        <td>15-25%</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('locale.cia_details.11') }}</td>
                                        <td>5-10%</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('locale.cia_details.12') }}</td>
                                        <td>10-20%</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('locale.cia_details.13') }}</td>
                                        <td>15-25%</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('locale.cia_details.14') }}</td>
                                        <td>13-23%</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('locale.cia_details.15') }}</td>
                                        <td>0-10%</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-sm-12">
                                <h5 class="center ordinary">{{ trans('locale.cia_details.4') }}<a href="https://na.theiia.org/certification/CIA-Certification/Pages/CIA-2013-Exam-Syllabus-Part-3.aspx" target="_blank">{{ trans('locale.click_here') }}</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop

@section('scripts')
    {!! Html::script('js/cia.js') !!}
@stop