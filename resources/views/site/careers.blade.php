@extends('includes.main')

@section('title', trans('locale.careers'))

@section('content')
    <div class="container clearfix" data-ref="mixitup-container">
        <div class="header_normal_cover">
            <h2 class="header">{{ trans('locale.careers') }}</h2>
        </div>
        <div class="tab-content about">
            <div class="col-sm-12">
                <img src="{{ asset('images/careers.png') }}">
            </div>
            <div class="col-sm-12">
                <p>{{ trans('locale.careers_text.1') }}</p>
                <p>{{ trans('locale.careers_text.2') }} <a href="mailto:{{trans('locale.careers_text.2')}}">{{ trans('locale.careers_text.email') }}</a></p>
            </div>
        </div>
    </div>
@stop
