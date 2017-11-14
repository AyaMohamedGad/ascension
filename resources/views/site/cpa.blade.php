@extends('includes.main')

@section('title', trans('locale.cpa_program'))

@section('content')
    <div class="container clearfix" data-ref="mixitup-container">
        <div class="header_normal_cover wow fadeInLeft">
            <h2 class="header">{{ trans('locale.cpa_program') }}</h2>
        </div>

        <div class="tab-content row wow bounceInUp">
            <div class="col-sm-12">
                <img class="center" src="{{ asset('images/cpa_logo.jpg') }}" >
            </div>
        </div>

        <div class="row">
            <ul class="ch-grid">
                <li class="wow fadeInDown" data-wow-delay=".3s">
                    <div class="ch-item ch-img-1">
                        <div class="ch-info">
                            <h3>{{ trans('locale.qualify') }}</h3>
                            <p><a href="#a" data-toggle="tab">View on Book</a></p>
                        </div>
                    </div>
                </li>
                <li class="wow fadeInDown" data-wow-delay=".4s">
                    <div class="ch-item ch-img-2">
                        <div class="ch-info">
                            <h3>{{ trans('locale.enroll') }}</h3>
                            <p><a href="#b" data-toggle="tab">View on Book</a></p>
                        </div>
                    </div>
                </li>
                <li class="wow fadeInDown" data-wow-delay=".5s">
                    <div class="ch-item ch-img-3">
                        <div class="ch-info">
                            <h3>{{ trans('locale.prepare') }}</h3>
                            <p><a href="#c" data-toggle="tab">View on Book</a></p>
                        </div>
                    </div>
                </li>
                <li class="wow fadeInDown" data-wow-delay=".6s">
                    <div class="ch-item ch-img-4">
                        <div class="ch-info">
                            <h3>{{ trans('locale.schedule') }}</h3>
                            <p><a href="#d" data-toggle="tab">View on Book</a></p>
                        </div>
                    </div>
                </li>
                <li class="wow fadeInDown" data-wow-delay=".7s">
                    <div class="ch-item ch-img-5">
                        <div class="ch-info">
                            <h3>{{ trans('locale.exam') }}</h3>
                            <p><a href="#e" data-toggle="tab">View on Book</a></p>
                        </div>
                    </div>
                </li>
                <li class="wow fadeInDown" data-wow-delay=".8s">
                    <div class="ch-item ch-img-6">
                        <div class="ch-info">
                            <h3>{{ trans('locale.pass') }}</h3>
                            <p><a href="#f" data-toggle="tab">View on Book</a></p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>


        <div class="times row mt-20">
            <div class="col-sm-6">
                <video width="100%" autoplay="autoplay" loop>
                    <source src="{{ asset('videos/home.mp4') }}" type="video/mp4" />
                </video>
            </div>
            <div class="col-sm-6">
                <h4><i class="fa fa-bell icon-animated-bell"></i> {{ trans('locale.upcoming_cpa_courses') }}</h4>
                <ul>
                    <li><i class="fa fa-circle-o"></i> <strong>{{ trans('locale.reg') }}: </strong> {{ date('d-m-Y', strtotime($cpa->reg)) }}</li>
                    <li><i class="fa fa-circle-o"></i> <strong>{{ trans('locale.far') }}: </strong> {{ date('d-m-Y', strtotime($cpa->far)) }}</li>
                </ul>
            </div>
        </div>

        <div class="row mt-20" id="book_tabs">
            <div class="col-xs-8 col-xs-offset-2">
                <div class="tabs-left wow fadeInDown">
                    <ul class="nav nav-tabs-left">
                      <li class="active"><a href="#a" data-toggle="tab">{{ trans('locale.qualify') }}</a></li>
                      <li><a href="#b" data-toggle="tab">{{ trans('locale.enroll') }}</a></li>
                      <li><a href="#c" data-toggle="tab">{{ trans('locale.prepare') }}</a></li>
                      <li><a href="#d" data-toggle="tab">{{ trans('locale.schedule') }}</a></li>
                      <li class="right_tab exam_tab"><a href="#e" data-toggle="tab">{{ trans('locale.exam') }}</a></li>
                      <li class="right_tab pass_tab"><a href="#f" data-toggle="tab">{{ trans('locale.pass') }}</a></li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane row active" id="a">
                            <div class="col-sm-6">
                                <h3>CONTENT FOR BOOK?</h3>
                            </div>
                            <div class="col-sm-6">
                                <h3>CONTENT FOR BOOK?</h3>
                            </div>
                        </div>
                        <div class="tab-pane row" id="b">
                            <div class="col-sm-6">
                                <h3>CONTENT FOR BOOKb?</h3>
                            </div>
                            <div class="col-sm-6">
                                <h3>CONTENT FOR BOOKb2?</h3>
                            </div>
                        </div>
                        <div class="tab-pane row" id="c">
                            <div class="col-sm-6">
                                <h3>CONTENT FOR BOOKc?</h3>
                            </div>
                            <div class="col-sm-6">
                                <h3>CONTENT FOR BOOKc2?</h3>
                            </div>
                        </div>
                        <div class="tab-pane row" id="d">
                            <div class="col-sm-6">
                                <h3>CONTENT FOR BOOKd?</h3>
                            </div>
                            <div class="col-sm-6">
                                <h3>CONTENT FOR BOOKd2?</h3>
                            </div>
                        </div>
                        <div class="tab-pane row" id="e">
                            <div class="col-sm-6">
                                <h3>CONTENT FOR BOOKe?</h3>
                            </div>
                            <div class="col-sm-6">
                                <h3>CONTENT FOR BOOKe2?</h3>
                            </div>
                        </div>
                        <div class="tab-pane row" id="f">
                            <div class="col-sm-6">
                                <h3>CONTENT FOR BOOKf?</h3>
                            </div>
                            <div class="col-sm-6">
                                <h3>CONTENT FOR BOOKf2?</h3>
                            </div>
                        </div>
                    </div><!-- /tab-content -->
              </div><!-- /tabbable -->
            </div><!-- /col -->
        </div>
    </div>
@stop