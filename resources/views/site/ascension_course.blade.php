@extends('includes.main')

@section('title', trans('locale.ascension').trans('locale.ers'))

@section('content')
    <div class="container clearfix" data-ref="mixitup-container">
        <div class="header_normal_cover">
            <h2 class="header">{{ trans('locale.ascension_courses') }}</h2>
        </div>

        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#finance">{{ trans ('locale.accounting_finance')}}</a></li>
            <li><a data-toggle="tab" href="#business">{{ trans ('locale.business_management')}}</a></li>
            <li><a data-toggle="tab" href="#hr_man">{{ trans ('locale.hr_management')}}</a></li>
        </ul>

        <div class="tab-content">
            <div id="finance" class="tab-pane fade in active">
                <img class="center" src="{{ asset('images/course.png') }}">
            </div>
            <div id="business" class="tab-pane fade">
                <img class="center" src="{{ asset('images/course.png') }}">
            </div>
            <div id="hr_man" class="tab-pane fade">
                <img class="center" src="{{ asset('images/course.png') }}">
            </div>
        </div>
    </div>
@stop
