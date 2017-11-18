@extends('includes.main')

@section('title', trans('locale.careers'))

@section('content')
    <div class="container clearfix" data-ref="mixitup-container">
        <div class="header_normal_cover wow fadeInLeft">
            <h2 class="header">{{ trans('locale.careers') }}</h2>
        </div>
        <div class="tab-content">
            <div class="col-sm-12 fixing wow bounceInUp">
                <img src="{{ asset('images/careers.png') }}">
                <div>
                    <p>{{ trans('locale.careers_text.1') }}</p>
                    <p>{{ trans('locale.careers_text.2') }} <a href="mailto:{{trans('locale.careers_text.2')}}">{{ trans('locale.careers_text.email') }}</a></p>
                </div>
            </div>
        </div>
    </div>
@stop
