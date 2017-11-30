@extends('includes.main')

@section('title', trans('locale.information_system'))

@section('content')
    <div class="container clearfix" data-ref="mixitup-container">
        <div class="header_normal_cover wow fadeInLeft">
            <h2 class="header">{{ trans('locale.information_system') }}</h2>
            <img class="arrow_one wow rotateInDownRight" data-wow-delay=".2s" src="{{ asset('images/arrow_wht.png') }}">
            <img class="arrow_two wow rotateInUpLeft" data-wow-delay=".3s" src="{{ asset('images/arrow_wht.png') }}">
            <img class="arrow_three wow rotateInUpRight" data-wow-delay=".4s" src="{{ asset('images/arrow_wht.png') }}">
            <img class="arrow_four wow rotateInDownLeft" data-wow-delay=".5s" src="{{ asset('images/arrow_wht.png') }}">
        </div>
        <div class="tab-content mt-20">
            <div class="col-sm-12 fixing wow bounceInUp">
                <img src="{{ asset('images/information_system.png') }}">
                <div>
                    <p>{{ trans('locale.work_under_process') }}</p>
                    <p>{{ trans('locale.thank_for_visiting') }}</p>
                </div>
            </div>
        </div>
    </div>
@stop
