@extends('includes.main')

@section('title', trans('locale.cpa_program'))

@section('content')
    <div class="container clearfix" data-ref="mixitup-container">
        <div class="header_normal_cover wow fadeInLeft" style="visibility: hidden">
            <h2 class="header">{{ trans('locale.cpa_program') }}</h2>
        </div>

        <div class="tab-content row wow bounceInUp" style="visibility: hidden">
            <div class="col-sm-12">
                <img class="center" src="{{ asset('images/cpa_logo.jpg') }}" >
            </div>
        </div>

        <div class="row" id="book_tabs">
            <div class="col-xs-8 col-xs-offset-2">
                <div class="tabs-left wow bounceIn" data-wow-delay=".25s" style="visibility: hidden;">
                    <ul class="nav nav-tabs-left">
                      <li class="active"><a href="#a" data-toggle="tab">Qualify</a></li>
                      <li><a href="#b" data-toggle="tab">Enroll</a></li>
                      <li><a href="#c" data-toggle="tab">Prepare</a></li>
                      <li><a href="#d" data-toggle="tab">Schedule</a></li>
                      <li class="right_tab exam_tab"><a href="#e" data-toggle="tab">Exam</a></li>
                      <li class="right_tab pass_tab"><a href="#f" data-toggle="tab">Pass!</a></li>
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