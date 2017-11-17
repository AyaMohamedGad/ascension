@extends('includes.main')

@section('title', trans('locale.feasibility_study'))

@section('content')
    <div class="container clearfix" data-ref="mixitup-container">
        <div class="header_normal_cover wow fadeInLeft">
            <h2 class="header">{{ trans('locale.feasibility_study') }}</h2>
        </div>
        <div class="tab-content">
            <div class="col-sm-12 fixing">
                <img src="{{ asset('images/feasibility_study.png') }}">
                <div>
                    <p>{{ trans('locale.page_under_process') }}</p>
                    <p>{{ trans('locale.visit_us_again') }}</p>
                </div>
            </div>
        </div>
    </div>
@stop
