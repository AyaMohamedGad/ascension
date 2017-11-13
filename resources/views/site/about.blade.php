@extends('includes.main')

@section('title', trans('locale.about_us'))

@section('content')
    <div class="container clearfix" data-ref="mixitup-container">
        <div class="header_normal_cover">
            <h2 class="header">{{ trans('locale.about_us') }}</h2>
        </div>
        <div class="tab-content about">
            <div class="col-sm-12">
                <div class="col-sm-4 wow rotateInUpLeft">
                    <img src="{{ asset('images/about.png') }}">
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
        </div>
    </div>
@stop
