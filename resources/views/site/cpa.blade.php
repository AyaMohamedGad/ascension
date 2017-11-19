@extends('includes.main')

@section('title', trans('locale.cpa_program'))

@section('content')
    <div class="container clearfix cpa_page" data-ref="mixitup-container">
        <div class="header_normal_cover wow fadeInLeft">
            <h2 class="header">{{ trans('locale.cpa_program') }} <span>{{ trans('locale.mark') }}</span></h2>
            <img class="arrow_one wow rotateInDownRight" data-wow-delay=".2s" src="{{ asset('images/arrow_wht.png') }}">
            <img class="arrow_two wow rotateInUpLeft" data-wow-delay=".3s" src="{{ asset('images/arrow_wht.png') }}">
            <img class="arrow_three wow rotateInUpRight" data-wow-delay=".4s" src="{{ asset('images/arrow_wht.png') }}">
            <img class="arrow_four wow rotateInDownLeft" data-wow-delay=".5s" src="{{ asset('images/arrow_wht.png') }}">
        </div>

        <div class="row wow bounceInUp mt-40" style="visibility: hidden">
            <div class="cpa col-sm-12">
                <img class="center" src="{{ asset('images/course_bg.jpg') }}" >
                <div class="content">
                    <p>{{ trans('locale.cpa') }} {{ trans('locale.mark') }}</p>
                    <p>{{ trans('locale.cpa_word') }}</p>
                </div>
            </div>
        </div>

        <div class="times row mt-20">
            <div class="col-sm-6 wow fadeInLeft">
                <video width="100%" autoplay="autoplay" loop>
                    <source src="{{ asset('videos/home.mp4') }}" type="video/mp4" />
                </video>
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
            <ul class="ch-grid">
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
      

    </div>
@stop

@section('scripts')
    {{ Html::script('js/cpa.js') }}     
@stop