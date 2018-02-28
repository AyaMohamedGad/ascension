@extends('includes.main')

@section('title', trans('locale.ascension').trans('locale.ers'))

@section('styles')
    <style>
        p {
            font-size: 16px;
        }
    </style>
@stop

@section('content')
    <div class="container clearfix" data-ref="mixitup-container">
        <div class="header_normal_cover wow fadeInLeft">
            <h2 class="header toomuch">{{ trans('locale.ascensioners') }}<span class="er">{{ trans('locale.ers') }}</span> <span class="red">{{ trans('locale.mark') }}</span></h2>
            <div class="arrows_header">
                <img class="arrow_one wow rotateInDownRight" data-wow-delay=".2s" src="{{ asset('images/arrow_wht.png') }}">
                <img class="arrow_two wow rotateInUpLeft" data-wow-delay=".3s" src="{{ asset('images/arrow_wht.png') }}">
                <img class="arrow_three wow rotateInUpRight" data-wow-delay=".4s" src="{{ asset('images/arrow_wht.png') }}">
                <img class="arrow_four wow rotateInDownLeft" data-wow-delay=".5s" src="{{ asset('images/arrow_wht.png') }}">
            </div>
        </div>

        <div class="tab-content mt-20 mb-50">
            <div class="col-sm-6 wow ers_sec0 fadeInLeft">
                <div class="ers">
                    <p>{{ trans('locale.ers_paragraph.1') }}</p>
                    <p>{{ trans('locale.ers_paragraph.2') }}</p>
                    <p>{{ trans('locale.ers_paragraph.3') }}</p>
                </div>
            </div>
            <div class="col-sm-6 ers_sec wow fadeInRight">
                <img src="{{ asset('images/ascension_ers.png') }}">
            </div>
        </div>
    </div>
@stop
