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
        <div class="tab-content row" style="visibility: hidden">
            <div class="cpa col-sm-12">
                <img class="center wow bounceInUp" src="{{ asset('images/cma.jpg') }}" >
                <div class="content wow bounceInUp">
                    <p class="wow bounceInDown" data-wow-delay=".8s">{{ trans('locale.cma') }} <span>{{ trans('locale.mark') }}</span></p>
                    <p class="wow bounceInDown" data-typer-targets="{{ trans('locale.cma_word') }}" data-wow-delay=".8s"></p>
                </div>
            </div>
        </div>

        <div class="times row mt-20">
            <div class="col-sm-6 col-xs-12 wow fadeInLeft video">
                <iframe width="90%" height="250" src="https://www.youtube.com/embed/8fMMpSrjGqc?rel=0" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="col-sm-6 col-xs-12 wow fadeInRight">
                <h4><i class="fa fa-bell wow tada" data-wow-iteration="100" data-wow-delay=".25s"></i> {{ trans('locale.upcoming_cma_courses') }}</h4>
                <ul>
                    <li><i class="fa fa-circle-o"></i> <strong>{{ trans('locale.reg') }}: </strong> {{ date('d-m-Y', strtotime($cma->reg)) }}</li>
                    <li><i class="fa fa-circle-o"></i> <strong>{{ trans('locale.far') }}: </strong> {{ date('d-m-Y', strtotime($cma->far)) }}</li>
                </ul>
            </div>
        </div>
        <div style="display: none;" id="locale" data-attr="{{app()->getLocale()}}"></div>

        <div class="row mt-20 ml-30">
            <h3 class="bordered_title wow shake ml-10">{{ trans('locale.become_cma') }} : </h3>
            <span class="divider wow pulse" data-wow-duration=3s" data-wow-iteration="infinite"></span>
            <span class="clear"></span>
        </div>

        <div class="row mt-50 mb-50" id="book_tabs">
            <div class="col-xs-11 ml-40 mr-40" data-wow-delay="0.5s" data-wow-duration="2s">
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
                        <div class="page" style="background-color: #78B582;"></div>
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
                            <p class="ml-50 mr-30 mt-30" style="font-size: 17px;"><i class="fa fa-circle"></i> {{ trans('locale.cma_qualify.1') }}</p>
                            <p class="ml-50 mr-30 mt-10" style="font-size: 17px;"><i class="fa fa-circle"></i> {{ trans('locale.cma_qualify.2') }}
                                <a href="http://univ.cc/world.php" target="_blank" style="word-break:break-all;display:-webkit-box;">({{ trans('locale.click_here') }})</a>
                            </p>
                            <p class="ml-50 mr-30 mt-10" style="font-size: 17px;"><i class="fa fa-circle"></i> {{ trans('locale.cma_qualify.3') }}</p>
                            <p class="ml-50 mr-30 mt-10" style="font-size: 17px;"><i class="fa fa-circle"></i> {{ trans('locale.cma_qualify.4') }} {{ trans('locale.page') }} 6:
                                <a href="https://www.imanet.org/-/media/6f64b804887641d880afef2178a44b9c.ashx" target="_blank" style="word-break:break-all;display:-webkit-box;">({{ trans('locale.click_here') }})</a>
                            </p>
                            <p class="ml-50 mr-30 mt-10" style="font-size: 17px;"><i class="fa fa-circle"></i>{{ trans('locale.cma_qualify.5') }}</p>
                            <p class="paginate">1 {{ trans('locale.of') }} 1</p>
                        </div>
                        <div class="page lft_page">
                            <ul class="nav nav-tabs-left">
                                <li class="enroll_tab">
                                    <a style="font-size: 15px" data-toggle="tab" onclick="enroll_click()"><i class="fa fa-book" aria-hidden="true"></i>{{ trans('locale.enroll') }}</a>
                                </li>
                            </ul>
                            <div class="center" style="text-align: center;">
                                <i class="fa fa-book" style="font-size: 80px; margin-top: 40%; color:#B578AA;" aria-hidden="true"></i>
                                <h3 style="font:400 40px/1.2 'Merienda One', Helvetica, sans-serif;color:#B578AA;">{{ trans('locale.enroll_fees') }}</h3>
                            </div>
                        </div>
                        <div class="page rt_page">
                            <p class="ml-60 mr-30 mt-30" style="font-size: 17px;"><i class="fa fa-circle"></i> {{ trans('locale.cma_enroll.1') }}</p>
                            <p class="ml-60 mr-30 mt-10 mnb-5" style="font-size: 17px;"><i class="fa fa-circle"></i> {{ trans('locale.cma_enroll.2') }}
                                <a href="https://www.imanet.org/cma-certification/getting-started?ssopc=1" target="_blank" style="word-break:break-all;display:-webkit-box;">({{ trans('locale.click_here') }})</a>
                            </p>
                            <table class="table ml-50 mr-30" style="width: 75%">
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
                            <p class="paginate">1 {{ trans('locale.of') }} 3</p>
                        </div>
                        <div class="page lft_page">
                            <p class="ml-60 mr-30 mt-30" style="font-size: 14px; color: red;">
                                {{ trans('locale.cma_enroll.9') }}
                            </p>
                            <p class="ml-60 mr-30 mt-10" style="font-size: 14px; color: red;">
                                {{ trans('locale.cma_enroll.10') }}
                            </p>
                            <p class="ml-60 mr-30 mt-10" style="font-size: 14px; color: red;">
                                {{ trans('locale.cma_enroll.11') }}
                            </p>
                            <p class="paginate">2 {{ trans('locale.of') }} 3</p>
                        </div>
                        <div class="page rt_page">
                            <p class="ml-60 mr-30 mt-30" style="font-size: 17px;">
                                <i class="fa fa-circle"></i>{{ trans('locale.cma_enroll.12') }}
                            </p>
                            <p class="paginate">3 {{ trans('locale.of') }} 3</p>
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
                            <p class="ml-50 mr-50 mt-50" style="font-size: 17px;"><i class="fa fa-circle"></i> {{ trans('locale.prepare_content.1') }}</p>
                            <p class="paginate">1 {{ trans('locale.of') }} 1</p>
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
                            <p class="ml-60 mr-30 mt-30" style="font-size: 17px;"><i class="fa fa-circle"></i> {{ trans('locale.cma_schedule.1') }}</p>
                            <p class="ml-60 mr-30 mt-10" style="font-size: 15px;">
                                {{ trans('locale.cma_schedule.2') }}
                            </p>
                            <p class="ml-60 mr-30 mt-10" style="font-size: 15px;">
                                {{ trans('locale.cma_schedule.3') }}
                            </p>
                            <p class="ml-60 mr-30 mt-10" style="font-size: 15px;">
                                {{ trans('locale.cma_schedule.4') }}
                            </p>
                            <p class="ml-60 mr-30 mt-10" style="font-size: 17px;"><i class="fa fa-circle"></i> {{ trans('locale.cma_schedule.5') }}</p>
                            <p class="paginate">1 {{ trans('locale.of') }} 1</p>
                        </div>
                        <div class="page lft_page">
                            <ul class="nav nav-tabs-left">
                                <li class="exam_tab">
                                    <a style="font-size: 15px" data-toggle="tab" onclick="exam_click()"><i class="fa fa-question-circle" aria-hidden="true"></i>{{ trans('locale.exam') }}</a>
                                </li>
                            </ul>
                            <div class="center" style="text-align: center;">
                                <i class="fa fa-question-circle" style="font-size: 80px; margin-top: 40%; color:#B53C46;" aria-hidden="true"></i>
                                <h3 class="ml-30" style="font:400 38px/1.2 'Merienda One', Helvetica, sans-serif;color:#B53C46;">{{ trans('locale.sit_for_exam') }}</h3>
                            </div>
                        </div>
                        <div class="page rt_page">
                            <p class="ml-60 mr-30 mt-30" style="font-size: 17px;">
                                <i class="fa fa-circle"></i> {{ trans('locale.cma_exam.1') }}
                            </p>
                            <p class="ml-60 mr-30 mt-10" style="font-size: 17px;">
                                <i class="fa fa-circle"></i> {{ trans('locale.cma_exam.2') }}
                            </p>
                            <p class="ml-60 mr-30 mt-10" style="font-size: 17px;">
                                <i class="fa fa-circle"></i> {{ trans('locale.cma_exam.3') }}
                            </p>
                            <p class="ml-60 mr-30 mt-10" style="font-size: 17px;">
                                <i class="fa fa-circle"></i> {{ trans('locale.cma_exam.4') }}
                            </p>
                            <p class="paginate">1 {{ trans('locale.of') }} 2</p>
                        </div>
                        <div class="page lft_page">
                            <p class="ml-60 mr-40 mt-30" style="font-size: 17px;">
                                <i class="fa fa-circle"></i> {{ trans('locale.cma_exam.5') }}
                            </p>
                            <p class="ml-60 mr-30 mt-10" style="font-size: 17px;">
                                <i class="fa fa-circle"></i> {{ trans('locale.cma_exam.6') }}
                            </p>
                            <p class="paginate">2 {{ trans('locale.of') }} 2</p>
                        </div>
                        <div class="page rt_page"></div>
                        <div class="page lft_page">
                            <ul class="nav nav-tabs-left">
                                <li class="pass_tab">
                                    <a style="font-size: 15px" data-toggle="tab" onclick="pass_click()"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>{{ trans('locale.pass') }}</a>
                                </li>
                            </ul>
                            <div class="center" style="text-align: center;">
                                <i class="fa fa-thumbs-o-up" style="font-size: 80px; margin-top: 40%; color:#00B5A5;" aria-hidden="true"></i>
                                <h3 style="font:400 38px/1.2 'Merienda One', Helvetica, sans-serif;color:#00B5A5;">{{ trans('locale.pass') }}</h3>
                            </div>
                        </div>
                        <div class="page rt_page">
                            <p class="ml-50 mr-30 mt-30" style="font-size: 17px;">
                                <i class="fa fa-circle"></i> {{ trans('locale.cma_pass.1') }}
                            </p>
                            <p class="ml-50 mr-30 mt-30" style="font-size: 17px;">
                                <i class="fa fa-circle"></i> {{ trans('locale.cma_pass.2') }}
                                <a href="https://www.imanet.org/-/media/ce904f5b414a4b63a11d1fe3f1be4dd9.ashx?la=en" target="_blank" class="ml-20 mr-30 mt-10" style="font-size: 17px; word-break: break-all;display: -webkit-box;">({{ trans('locale.click_here') }})</a>
                            </p>
                            <p class="ml-50 mr-30 mt-30" style="font-size: 17px;">
                                <i class="fa fa-circle"></i> {{ trans('locale.cma_pass.3') }}
                            </p>
                            <p class="paginate">1 {{ trans('locale.of') }} 1</p>
                        </div>
                    </div>
                </div>
            </div><!-- /col -->
        </div>

        <div class="col-sm-12 mt-10 mb-50">
            <h3 class="bordered_title wow shake ml-10">{{ trans('locale.cma_content') }} : </h3>
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
    {!! Html::script('js/cma.js') !!}
    <script type="text/javascript">
        $('[data-typer-targets]').typer();
    </script>
@stop