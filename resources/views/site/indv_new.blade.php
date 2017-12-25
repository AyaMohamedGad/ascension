@extends('includes.main')

@section('title', count($thenew->translations) > 0 ? $thenew->translations[0]->title : "New")

@section('styles')
    <style>
        h2.header{font-size:25px !important;}
    </style>
@stop

@section('content')
    <div class="container clearfix" data-ref="mixitup-container">
        <div class="header_normal_cover wow fadeInLeft">
            <h2 class="header">{{ count($thenew->translations) > 0 ? $thenew->translations[0]->title : trans('locale.new') }}</h2>
            <div class="arrows_header">
                <img class="arrow_one wow rotateInDownRight" data-wow-delay=".2s" src="{{ asset('images/arrow_wht.png') }}">
                <img class="arrow_two wow rotateInUpLeft" data-wow-delay=".3s" src="{{ asset('images/arrow_wht.png') }}">
                <img class="arrow_three wow rotateInUpRight" data-wow-delay=".4s" src="{{ asset('images/arrow_wht.png') }}">
                <img class="arrow_four wow rotateInDownLeft" data-wow-delay=".5s" src="{{ asset('images/arrow_wht.png') }}">
            </div>
        </div>

        @if(count($thenew->translations) > 0)
            <div class="tab-content row wow bounceInUp">
                <div class="tab-content mt-20">
                    <div class="col-sm-4 row wow bounceInUp">
                        <img class="center" src="{{ asset('images/news/' . $thenew->image) }}" >
                    </div>

                    <div class="col-xs-8 row wow bounceInRight pr-30 pl-30">
                        {!! $thenew->translations[0]->description !!}
                    </div>
                </div>
            </div>
        @endif
    </div>
@stop