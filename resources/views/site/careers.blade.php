@extends('includes.main')

@section('title', trans('locale.careers'))

@section('content')
    <div class="container career clearfix" data-ref="mixitup-container">
        <div class="tab-content mt-20 information">
            <div class="information fixing wow bounceInUp">
                <img src="{{ asset('images/careers.png') }}">
                <div>
                    <p class="center">{{ trans('locale.careers') }}</p>
                </div>
            </div>
        </div>

        <div class="col-sm-12 mt-20 mb-50 wow bounceInUp careers">
            <p>{{ trans('locale.careers_text.1') }}</p>
            <p>{{ trans('locale.careers_text.2') }} <a href="mailto:{{trans('locale.careers_text.2')}}">{{ trans('locale.careers_text.email') }}</a></p>
        </div>
    </div>
@stop
