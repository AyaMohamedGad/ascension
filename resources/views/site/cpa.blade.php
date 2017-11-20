@extends('includes.main')

@section('title', trans('locale.cpa_program'))

@section('styles')
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
            <h2 class="header">{{ trans('locale.cpa_program') }} <span>{{ trans('locale.mark') }}</span></h2>
            <img class="arrow_one wow rotateInDownRight" data-wow-delay=".2s" src="{{ asset('images/arrow_wht.png') }}">
            <img class="arrow_two wow rotateInUpLeft" data-wow-delay=".3s" src="{{ asset('images/arrow_wht.png') }}">
            <img class="arrow_three wow rotateInUpRight" data-wow-delay=".4s" src="{{ asset('images/arrow_wht.png') }}">
            <img class="arrow_four wow rotateInDownLeft" data-wow-delay=".5s" src="{{ asset('images/arrow_wht.png') }}">
        </div>

        <div class="tab-content mt-20 row wow bounceInUp" style="visibility: hidden">
            <div class="cpa col-sm-12">
                <img class="center" src="{{ asset('images/course_bg.jpg') }}" >
                <div class="content">
                    <p>{{ trans('locale.cpa') }} <span>{{ trans('locale.mark') }}</span></p>
                    <p>{{ trans('locale.cpa_word') }}</p>
                </div>
            </div>
        </div>

        <div class="times row mt-20">
            <div class="col-sm-6 wow fadeInLeft video">
                <iframe width="69%" height="200" src="https://www.youtube.com/embed/TJEN0rfGMDM?rel=0&autoplay=1" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="col-sm-6 wow fadeInRight">
                <h4><i class="fa fa-bell wow tada" data-wow-iteration="100" data-wow-delay=".25s"></i> {{ trans('locale.upcoming_cpa_courses') }}</h4>
                <ul>
                    <li><i class="fa fa-circle-o"></i> <strong>{{ trans('locale.reg') }}: </strong> {{ date('d-m-Y', strtotime($cpa->reg)) }}</li>
                    <li><i class="fa fa-circle-o"></i> <strong>{{ trans('locale.far') }}: </strong> {{ date('d-m-Y', strtotime($cpa->far)) }}</li>
                </ul>
            </div>
        </div>

        <div class="row mt-20">
            <h3 class="bordered_title wow shake">{{ trans('locale.become_cpa') }} : </h3>
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
            <div class="col-xs-8 col-xs-offset-2">
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

                    <div class="tab-content">
                        <div class="tab-pane row active" id="a">
                            <div class="flipbook-viewport">
                                <div class="flipbook">
                                    <div class="page" style="background-color: #78B582;">
                                    <i class="fa fa-graduation-cap text-center" style="font-size: 80px; margin-top: 40%;" aria-hidden="true"></i>
                                    <h3 class="text-center text-white">{{ trans('locale.qualify') }}</h3>
                                    </div>
                                    <div class="page" style="background-image:url('{{ asset('images/lft_bk.jpg') }}')">
                                        <p class="mr-10 ml-40">{{ trans('locale.cpa_qualify.1') }}</p>
                                        <p class="mr-10 ml-40">{{ trans('locale.cpa_qualify.2') }}</p>
                                        <p class="mr-10 ml-40">{{ trans('locale.cpa_qualify.3') }}</p>
                                    </div>
                                    <div class="page" style="background-image:url('{{ asset('images/rt_bk.jpg') }}')">
                                        <p class="mr-40 ml-10">{{ trans('locale.cpa_qualify.4') }}</p>
                                        <p class="mr-40 ml-10">{{ trans('locale.cpa_qualify.5') }}</p>
                                        <p class="mr-40 ml-10">{{ trans('locale.cpa_qualify.6') }}</p>
                                    </div>
                                    <div class="page" style="background-image:url('{{ asset('images/lft_bk.jpg') }}')">
                                        <p class="mr-10 ml-40">{{ trans('locale.cpa_qualify.7') }}</p>
                                        <p class="mr-10 ml-40">{{ trans('locale.cpa_qualify.8') }}</p>
                                    </div>
                                    <div class="page" style="background-image:url('{{ asset('images/rt_bk.jpg') }}')">
                                    </div>
                                    <div class="page" style="background-color: #78B582;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane row" id="b">
                            <div class="flipbook-viewport">
                                <div class="flipbook2">
                                    <div class="page" style="background-color: #B578AA;">
                                    <i class="fa fa-book text-center" style="font-size: 80px; margin-top: 40%;" aria-hidden="true"></i>
                                    <h3 class="text-center text-white">{{ trans('locale.enroll') }} </h3>
                                    </div>
                                    <div class="page" style="background-image:url('{{ asset('images/lft_bk.jpg') }}')">
                                        <p class="mr-10 ml-40">{{ trans('locale.cpa_enroll.1') }}</p>
                                        <p class="mr-10 ml-40">{{ trans('locale.cpa_enroll.2') }}</p>
                                        <p class="mr-10 ml-40">{{ trans('locale.cpa_enroll.3') }}</p>
                                    </div>
                                    <div class="page" style="background-image:url('{{ asset('images/rt_bk.jpg') }}')">
                                        <p class="mr-40 ml-10">{{ trans('locale.cpa_enroll.4') }}</p>
                                        <p class="mr-40 ml-10">{{ trans('locale.cpa_enroll.5') }}</p>
                                        <p class="mr-40 ml-10">{{ trans('locale.cpa_enroll.6') }}</p>
                                        <p class="mr-40 ml-10">{{ trans('locale.cpa_enroll.7') }}</p>
                                    </div>
                                    <div class="page" style="background-color: #B578AA;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane row" id="c">
                            <div class="flipbook-viewport">
                                <div class="flipbook3">
                                    <div class="page" style="background-color: #404A60;">
                                    <i class="fa fa-tasks text-center" style="font-size: 80px; margin-top: 40%;" aria-hidden="true"></i>
                                    <h3 class="text-center text-white"> {{ trans('locale.prepare') }}</h3>
                                    </div>
                                    <div class="page" style="background-image:url('{{ asset('images/lft_bk.jpg') }}')">
                                        <p class="mr-10 ml-40">{{ trans('locale.prepare_content.1') }}</p>
                                    </div>
                                    <div class="page" style="background-image:url('{{ asset('images/rt_bk.jpg') }}')">
                                    </div>
                                    <div class="page" style="background-color: #404A60;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane row" id="d">
                            <div class="flipbook-viewport">
                                <div class="flipbook4">
                                    <div class="page" style="background-color: #406045;">
                                    <i class="fa fa-calendar text-center" style="font-size: 80px; margin-top: 40%;" aria-hidden="true"></i>
                                    <h3 class="text-center text-white"> {{ trans('locale.schedule') }} </h3>
                                    </div>
                                    <div class="page" style="background-image:url('{{ asset('images/lft_bk.jpg') }}')">
                                        <p class="mr-10 ml-40">{{ trans('locale.cpa_schedule.1') }}</p>
                                        <p class="mr-10 ml-40">{{ trans('locale.cpa_schedule.2') }}</p>
                                        <p class="mr-10 ml-40">{{ trans('locale.cpa_schedule.3') }}</p>
                                        <p class="mr-10 ml-40">{{ trans('locale.cpa_schedule.4') }}</p>
                                    </div>
                                    <div class="page" style="background-image:url('{{ asset('images/rt_bk.jpg') }}')">
                                        <p class="mr-40 ml-10">{{ trans('locale.cpa_schedule.5') }}</p>
                                        <p class="mr-40 ml-10">{{ trans('locale.cpa_schedule.6') }}</p>
                                        <p class="mr-40 ml-10">{{ trans('locale.cpa_schedule.7') }}</p>
                                        <p class="mr-40 ml-10">{{ trans('locale.cpa_schedule.8') }}</p>
                                    </div>
                                    <div class="page" style="background-color: #406045;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane row" id="e">
                            <div class="flipbook-viewport">
                                <div class="flipbook5">
                                    <div class="page" style="background-color: #B53C46;">
                                    <i class="fa fa-question-circle text-center" style="font-size: 80px; margin-top: 40%;" aria-hidden="true"></i>
                                    <h3 class="text-center text-white"> {{ trans('locale.exam') }} </h3>
                                    </div>
                                    <div class="page" style="background-image:url('{{ asset('images/lft_bk.jpg') }}')">
                                        <p class="mr-10 ml-40">{{ trans('locale.cpa_exam.1') }}</p>
                                        <p class="mr-10 ml-40">{{ trans('locale.cpa_exam.2') }}</p>
                                        <p class="mr-10 ml-40">{{ trans('locale.cpa_exam.3') }}</p>
                                    </div>
                                    <div class="page" style="background-image:url('{{ asset('images/rt_bk.jpg') }}')">
                                    </div>
                                    <div class="page" style="background-color: #B53C46;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane row" id="f">
                            <div class="flipbook-viewport">
                                <div class="flipbook6">
                                    <div class="page" style="background-color: #00B5A5;">
                                    <i class="fa fa-thumbs-o-up text-center" style="font-size: 80px; margin-top: 40%;" aria-hidden="true"></i>
                                    <h3 class="text-center text-white"> {{ trans('locale.pass') }} </h3>
                                    </div>
                                    <div class="page" style="background-image:url('{{ asset('images/lft_bk.jpg') }}')">
                                        <p class="mr-10 ml-40">{{ trans('locale.cpa_pass.1') }}</p>
                                        <p class="mr-10 ml-40">{{ trans('locale.cpa_pass.2') }}</p>
                                    </div>
                                    <div class="page" style="background-image:url('{{ asset('images/rt_bk.jpg') }}')">
                                        <p class="mr-40 ml-10">{{ trans('locale.cpa_pass.3') }}</p>
                                        <p class="mr-40 ml-10">{{ trans('locale.cpa_pass.4') }}</p>
                                    </div>
                                    <div class="page" style="background-color: #00B5A5;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /tab-content -->
                </div><!-- /tabbable -->
            </div><!-- /col -->
        </div>

        <div class="col-sm-12">
            <h3 class="bordered_title wow shake">{{ trans('locale.cpa_content') }} : </h3>
            <span class="divider wow pulse" data-wow-duration=3s" data-wow-iteration="infinite"></span>
            <span class="clear"></span>
            <div class="cpa_content mt-40">
                <div class="half">
                    <div class="tab">
                        <input id="tab-one" checked="checked" type="checkbox" name="tabs">
                        <label for="tab-one">{{ trans('locale.auditing_attestation') }}</label>
                        <div class="tab-content">
                            <div class="col-sm-6">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>{{ trans('locale.area') }}</th>
                                            <th>{{ trans('locale.weight') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{ trans('locale.professional_responsibilities_principles') }}</td>
                                            <td>15-25%</td>
                                        </tr>
                                        <tr>
                                            <td>{{ trans('locale.risk_developing_response') }}</td>
                                            <td>20-30%</td>
                                        </tr>
                                        <tr>
                                            <td>{{ trans('locale.further_procedures_obtaining_evidence') }}</td>
                                            <td>30-40%</td>
                                        </tr>
                                        <tr>
                                            <td>{{ trans('locale.forming_conclusions_reporting') }}</td>
                                            <td>15-25%</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-sm-6">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>{{ trans('locale.skills_tested_allocation') }}</th>
                                        <th>{{ trans('locale.areas') }}</th>
                                        <th>{{ trans('locale.weight') }}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>{{ trans('locale.evaluation') }}</td>
                                        <td>II, III</td>
                                        <td>5-15%</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('locale.analysis') }}</td>
                                        <td>II, III</td>
                                        <td>15-25%</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('locale.application') }}</td>
                                        <td>I, II, III, IV</td>
                                        <td>30-40%</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('locale.remembering_understanding') }}</td>
                                        <td>I, II, III, IV
                                        </td>
                                        <td>30-40%</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-sm-12">
                                <h5 class="center ordinary">{{ trans('locale.cpa_auditing_attestation.6') }} ({{ trans('locale.page') }} 6) <a href="https://www.aicpa.org/BecomeACPA/CPAExam/ExaminationContent/DownloadableDocuments/cpa-exam-blueprints-effective-20170401.pdf" target="_blank">{{ trans('locale.click_here') }}</a></h5>
                            </div>
                        </div>
                    </div>

                    <div class="tab">
                        <input id="tab-two" type="checkbox" name="tabs">
                        <label for="tab-two">{{ trans('locale.business_environment_concepts') }}</label>
                        <div class="tab-content">
                            <div class="col-sm-6">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>{{ trans('locale.area') }}</th>
                                        <th>{{ trans('locale.weight') }}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>{{ trans('locale.cpa_business_environment_concepts.1') }}</td>
                                        <td>17-27%</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('locale.cpa_business_environment_concepts.2') }}</td>
                                        <td>17-27%</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('locale.cpa_business_environment_concepts.3') }}</td>
                                        <td>11-21%</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('locale.cpa_business_environment_concepts.4') }}</td>
                                        <td>15-25%</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('locale.cpa_business_environment_concepts.5') }}</td>
                                        <td>15-25%</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-sm-6">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>{{ trans('locale.skills_tested_allocation') }}</th>
                                        <th>{{ trans('locale.areas') }}</th>
                                        <th>{{ trans('locale.weight') }}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>{{ trans('locale.evaluation') }}</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('locale.analysis') }}</td>
                                        <td>II, III, V</td>
                                        <td>20-30%</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('locale.application') }}</td>
                                        <td>I, II, III, IV, V</td>
                                        <td>50-60%</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('locale.remembering_understanding') }}</td>
                                        <td>I, II, III, IV, V</td>
                                        <td>15-25%</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-sm-12">
                                <h5 class="center ordinary">{{ trans('locale.cpa_auditing_attestation.6') }} ({{ trans('locale.page') }} 33) <a href="https://www.aicpa.org/BecomeACPA/CPAExam/ExaminationContent/DownloadableDocuments/cpa-exam-blueprints-effective-20170401.pdf" target="_blank">{{ trans('locale.click_here') }}</a></h5>
                            </div>
                        </div>
                    </div>

                    <div class="tab">
                        <input id="tab-three" type="checkbox" name="tabs">
                        <label for="tab-three">{{ trans('locale.financial_account_reporting') }}</label>
                        <div class="tab-content">
                            <div class="col-sm-6">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>{{ trans('locale.area') }}</th>
                                        <th>{{ trans('locale.weight') }}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>{{ trans('locale.cpa_financial_account.1') }}</td>
                                        <td>25-35%</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('locale.cpa_financial_account.2') }}</td>
                                        <td>30-40%</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('locale.cpa_financial_account.3') }}</td>
                                        <td>20-30%</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('locale.cpa_financial_account.4') }}</td>
                                        <td>5-15%</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-sm-6">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>{{ trans('locale.skills_tested_allocation') }}</th>
                                        <th>{{ trans('locale.areas') }}</th>
                                        <th>{{ trans('locale.weight') }}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>{{ trans('locale.evaluation') }}</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('locale.analysis') }}</td>
                                        <td>I, II, III</td>
                                        <td>25-35%</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('locale.application') }}</td>
                                        <td>I, II, III, IV</td>
                                        <td>50-60%</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('locale.remembering_understanding') }}</td>
                                        <td>I, II, III, IV</td>
                                        <td>10-20%</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-sm-12">
                                <h5 class="center ordinary">{{ trans('locale.cpa_auditing_attestation.6') }} ({{ trans('locale.page') }} 47) <a href="https://www.aicpa.org/BecomeACPA/CPAExam/ExaminationContent/DownloadableDocuments/cpa-exam-blueprints-effective-20170401.pdf" target="_blank">{{ trans('locale.click_here') }}</a></h5>
                            </div>
                        </div>
                    </div>

                    <div class="tab">
                        <input id="tab-four" type="checkbox" name="tabs">
                        <label for="tab-four">{{ trans('locale.regulation') }}</label>
                        <div class="tab-content">
                            <div class="col-sm-6">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>{{ trans('locale.area') }}</th>
                                        <th>{{ trans('locale.weight') }}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>{{ trans('locale.cpa_regulation.1') }}</td>
                                        <td>10-20%</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('locale.cpa_regulation.2') }}</td>
                                        <td>10-20%</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('locale.cpa_regulation.3') }}</td>
                                        <td>12-22%</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('locale.cpa_regulation.4') }}</td>
                                        <td>15-25%</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('locale.cpa_regulation.5') }}</td>
                                        <td>28-38%</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-sm-6">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>{{ trans('locale.skills_tested_allocation') }}</th>
                                        <th>{{ trans('locale.areas') }}</th>
                                        <th>{{ trans('locale.weight') }}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>{{ trans('locale.evaluation') }}</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('locale.analysis') }}</td>
                                        <td>III, IV, V</td>
                                        <td>25-35%</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('locale.application') }}</td>
                                        <td>I, II, III, IV, V</td>
                                        <td>35-45%</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('locale.remembering_understanding') }}</td>
                                        <td>I, II, III, IV, V</td>
                                        <td>25-35%</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-sm-12">
                                <h5 class="center ordinary">{{ trans('locale.cpa_auditing_attestation.6') }} ({{ trans('locale.page') }} 75) <a href="https://www.aicpa.org/BecomeACPA/CPAExam/ExaminationContent/DownloadableDocuments/cpa-exam-blueprints-effective-20170401.pdf" target="_blank">{{ trans('locale.click_here') }}</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-12 mt-20">
            <h3 class="bordered_title wow shake">{{ trans('locale.cpa_old') . ' ' . trans('locale.vs') . ' ' . trans('locale.new_exam') }} : </h3>
            <span class="divider wow pulse" data-wow-duration=3s" data-wow-iteration="infinite"></span>
            <span class="clear"></span>
            <div class="col-sm-12 mt-20">
                <p>{{ trans('locale.cpa_old_comparison_new') }} (<a href="http://www.becker.com/sites/default/files/cpa-exam-change-2017-infographic.pdf" target="_blank">{{ trans('locale.click_here') }}..)</a></p>
            </div>
        </div>

    </div>
@stop

@section('scripts')
    {!! Html::script('js/cpa.js') !!}
@stop