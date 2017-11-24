@extends('includes.main')

@section('title', trans('locale.national_fund'))

@section('content')
    <div class="container clearfix" data-ref="mixitup-container">
        <div class="header_normal_cover wow fadeInLeft">
            <h2 class="header">{{ trans('locale.national_fund') }}</h2>
            <img class="arrow_one wow rotateInDownRight" data-wow-delay=".2s" src="{{ asset('images/arrow_wht.png') }}">
            <img class="arrow_two wow rotateInUpLeft" data-wow-delay=".3s" src="{{ asset('images/arrow_wht.png') }}">
            <img class="arrow_three wow rotateInUpRight" data-wow-delay=".4s" src="{{ asset('images/arrow_wht.png') }}">
            <img class="arrow_four wow rotateInDownLeft" data-wow-delay=".5s" src="{{ asset('images/arrow_wht.png') }}">
        </div>
        <div class="tab-content mt-20">
            <div class="col-sm-12 wow fadeInDown">
                <img src="{{ asset('images/funds.jpg') }}">
            </div>
            <div class="col-sm-12">
            </div>
        </div>
    </div>
@stop
