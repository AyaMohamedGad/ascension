@extends('includes.main')

@section('title', trans('locale.information_system'))

@section('content')
    <div class="container clearfix" data-ref="mixitup-container">
        <div class="header_normal_cover wow fadeInLeft">
            <h2 class="header">{{ trans('locale.information_system') }}</h2>
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
