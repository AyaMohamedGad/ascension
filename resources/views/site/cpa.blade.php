@extends('includes.main')

@section('title', 'Home')

@section('content')
@include('includes.logo')
    <div class="container clearfix">
        <h2 class="header">{{ trans('locale.cpa_program') }}</h2>
        <div>
            <div class="clearfix">
                <img src="{{ asset('images/cpa_logo.jpg') }}" >
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <img src="{{ asset('images/cpa_img.jpg') }}" >
                </div>
                <div class="col-sm-6">
                    <div class="block">
                        <p><img src="{{ asset('images/arrow.png') }}"> {{ trans('locale.upcoming_cpa_courses') }}</p>
                        <ul>
                            <li><strong>{{ trans('locale.reg') }}:</strong> {{ trans('locale.reg_date') }}</li>
                            <li><strong>{{ trans('locale.far') }}:</strong> {{ trans('locale.far_date') }}</li>
                            <li><strong>{{ trans('locale.aud') }}:</strong> {{ trans('locale.to_be_announced') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
