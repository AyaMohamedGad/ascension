@extends('includes.main')

@section('title', trans('locale.careers'))

@section('content')
    <div class="container careers clearfix" data-ref="mixitup-container">
        <div class="header_normal_cover wow fadeInLeft">
            <h2 class="header">{{ trans('locale.careers') }}</h2>
            <div class="arrows_header">
                <img class="arrow_one wow rotateInDownRight" data-wow-delay=".2s" src="{{ asset('images/arrow_wht.png') }}">
                <img class="arrow_two wow rotateInUpLeft" data-wow-delay=".3s" src="{{ asset('images/arrow_wht.png') }}">
                <img class="arrow_three wow rotateInUpRight" data-wow-delay=".4s" src="{{ asset('images/arrow_wht.png') }}">
                <img class="arrow_four wow rotateInDownLeft" data-wow-delay=".5s" src="{{ asset('images/arrow_wht.png') }}">
            </div>
        </div>
        <div class="tab-content mt-20 information">
            <div class="col-sm-12 fixing wow bounceInUp">
                <img src="{{ asset('images/careers.png') }}">
                <div>
                    <p></p>
                </div>
            </div>
        </div>

        <div class="col-sm-12 mt-20 mb-50 wow bounceInUp careers">
            <p>{{ trans('locale.careers_text.1') }}</p>
            <p>{{ trans('locale.careers_text.2') }} <a href="mailto:{{trans('locale.careers_text.2')}}">{{ trans('locale.careers_text.email') }}</a></p>
        </div>
    </div>
@stop
