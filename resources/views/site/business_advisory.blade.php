@extends('includes.main')

@section('title', trans('locale.business_advisory'))

@section('content')
    <div class="container clearfix" data-ref="mixitup-container">
        <div class="header_normal_cover">
            <h2 class="header">{{ trans('locale.business_advisory') }}</h2>
        </div>
        <div class="tab-content">
            <div class="col-sm-12 fixing">
                <img src="{{ asset('images/business_advisory.png') }}">
                <div>
                    <p>{{ trans('locale.business_advisory_paragraph') }}</p>
                </div>
            </div>
        </div>
    </div>
@stop
