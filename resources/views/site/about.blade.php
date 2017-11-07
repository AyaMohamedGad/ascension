@extends('includes.main')

@section('title', trans('locale.about_us'))

@section('content')
    <div class="container clearfix" data-ref="mixitup-container">
        <div class="header_normal_cover">
            <h2 class="header">{{ trans('locale.about_us') }}</h2>
        </div>
        <div class="tab-content about">
            <div class="col-sm-12">
                <div class="col-sm-4">
                    <img src="{{ asset('images/about.png') }}">
                </div>
                <div class="col-sm-8">
                    <h4><strong>{{ trans('locale.honesty') }}</strong></h4>
                    <p>{{ trans('locale.honesty_text') }}</p>
                    <h4><strong>{{ trans('locale.integrity') }}</strong></h4>
                    <p>{{ trans('locale.integrity_text') }}</p>
                    <h4><strong>{{ trans('locale.fairness') }}</strong></h4>
                    <p>{{ trans('locale.fairness_text') }}</p>
                </div>
            </div>
        </div>
    </div>
@stop
