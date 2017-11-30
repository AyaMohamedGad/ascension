@extends('includes.main')

@section('title', trans('locale.feasibility_study'))

@section('content')
    <div class="container clearfix" data-ref="mixitup-container">
        <div class="header_normal_cover wow fadeInLeft">
            <h2 class="header">{{ trans('locale.feasibility_study') }}</h2>
            <div class="arrows_header">
                <img class="arrow_one wow rotateInDownRight" data-wow-delay=".2s" src="{{ asset('images/arrow_wht.png') }}">
                <img class="arrow_two wow rotateInUpLeft" data-wow-delay=".3s" src="{{ asset('images/arrow_wht.png') }}">
                <img class="arrow_three wow rotateInUpRight" data-wow-delay=".4s" src="{{ asset('images/arrow_wht.png') }}">
                <img class="arrow_four wow rotateInDownLeft" data-wow-delay=".5s" src="{{ asset('images/arrow_wht.png') }}">
            </div>
        </div>
        <div class="tab-content mt-20">
            <div class="col-sm-12 fixing wow bounceInUp">
                <img src="{{ asset('images/feasibility_study.png') }}">
                <div>
                    <p>{{ trans('locale.page_under_process') }}</p>
                    <p>{{ trans('locale.visit_us_again') }}</p>
                </div>
            </div>
        </div>
    </div>
@stop
