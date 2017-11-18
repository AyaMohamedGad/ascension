@extends('includes.main')

@section('title', trans('locale.about_us'))

@section('styles')
    <style>
        p{
            font-size: 17px;
            text-transform: none;
        }
    </style>
@stop

@section('content')
    <div class="container clearfix" data-ref="mixitup-container">
        <div class="header_normal_cover wow fadeInLeft">
            <h2 class="header">{{ trans('locale.about_us') }}</h2>
        </div>
        <div class="tab-content about">
            <div class="col-sm-12">
                <h4 class="page_head"><i class="fa fa-circle wow rotateIn" data-wow-duration="1s" data-wow-iteration="infinite"></i> {{ trans('locale.about_us') }}</h4>
                <div class="col-sm-4 wow rotateInUpLeft mt-15">
                    <img class="wow pulse" data-wow-duration="3s" data-wow-iteration="infinite" src="{{ asset('images/about.png') }}">
                </div>
                <div class="col-sm-8">
                    <h4 class="wow fadeInLeft" data-wow-delay=".1s"><strong>{{ trans('locale.honesty') }}</strong></h4>
                    <p class="wow fadeInLeft" data-wow-delay=".15s" data-wow-duration="1.5s">{{ trans('locale.honesty_text') }}</p>
                    <h4 class="wow fadeInLeft" data-wow-delay=".2s"><strong>{{ trans('locale.integrity') }}</strong></h4>
                    <p class="wow fadeInLeft" data-wow-delay=".25s" data-wow-duration="1.5s">{{ trans('locale.integrity_text') }}</p>
                    <h4 class="wow fadeInLeft" data-wow-delay=".3s"><strong>{{ trans('locale.fairness') }}</strong></h4>
                    <p class="wow fadeInLeft" data-wow-delay=".35s" data-wow-duration="1.5s">{{ trans('locale.fairness_text') }}</p>
                </div>
            </div>

            <div class="col-sm-12">
                <h4 class="page_head"><i class="fa fa-circle wow rotateIn" data-wow-duration="1s" data-wow-iteration="infinite"></i> {{ trans('locale.our_mission') }}</h4>
                <p class="ml-20">{{ trans('locale.mission') }}</p>
            </div>

            <div class="col-sm-12">
                <h4 class="page_head"><i class="fa fa-circle wow rotateIn" data-wow-duration="1s" data-wow-iteration="infinite"></i> {{ trans('locale.our_values') }}</h4>
                <ul class="small_arrow">
                    <li>{{ trans('locale.values.1') }}</li>
                    <li>{{ trans('locale.values.2') }}</li>
                    <li>{{ trans('locale.values.3') }}</li>
                    <li>{{ trans('locale.values.4') }}</li>
                    <li>{{ trans('locale.values.5') }}</li>
                    <li>{{ trans('locale.values.6') }}</li>
                </ul>
            </div>

            <div class="col-lg-12 col-sm-12">
                <h4 class="page_head"><i class="fa fa-circle wow rotateIn" data-wow-duration="1s" data-wow-iteration="infinite"></i> {{ trans('locale.our_partners') }}</h4>
                <div class="centered">
                    <div class="client wow bounceIn" data-wow-duration="5s" data-wow-iteration="infinite"><img src="{{ asset('images/client.png') }}"></div>
                    <div class="client wow bounceIn" data-wow-duration="5s" data-wow-iteration="infinite"><img src="{{ asset('images/client.png') }}"></div>
                    <div class="client wow bounceIn" data-wow-duration="5s" data-wow-iteration="infinite"><img src="{{ asset('images/client.png') }}"></div>
                    <div class="client wow bounceIn" data-wow-duration="5s" data-wow-iteration="infinite"><img src="{{ asset('images/client.png') }}"></div>
                    <div class="client wow bounceIn" data-wow-duration="5s" data-wow-iteration="infinite"><img src="{{ asset('images/client.png') }}"></div>
                    <div class="client wow bounceIn" data-wow-duration="5s" data-wow-iteration="infinite"><img src="{{ asset('images/client.png') }}"></div>
                </div>
            </div>

            <div class="col-sm-12">
                <h4 class="page_head"><i class="fa fa-circle wow rotateIn" data-wow-duration="1s" data-wow-iteration="infinite"></i> {{ trans('locale.our_experts') }}</h4>

            </div>
        </div>
    </div>
@stop
