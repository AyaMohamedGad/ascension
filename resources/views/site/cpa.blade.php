@extends('includes.main')

@section('title', 'Home')

@section('content')
    <div class="container clearfix">
        <h2 class="header">{{ trans('locale.cpa_program') }}</h2>
        <div>
            <div class="row">
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
    <div class="container clearfix">
        <h2 class="header">6 {{ trans('locale.steps_to_become_cpa') }}</h2>
        <div class="row">
            <div class="col-sm-2">
                <p><img src="{{ asset('images/qualify.png') }}"></p>
                <p>{{ trans('locale.qualify') }}</p>
            </div>
            <div class="col-sm-2">
                <p><img src="{{ asset('images/enroll.png') }}"></p>
                <p>{{ trans('locale.enroll') }}</p>
            </div>
            <div class="col-sm-2">
                <p><img src="{{ asset('images/prepare.png') }}"></p>
                <p>{{ trans('locale.prepare') }}</p>
            </div>
            <div class="col-sm-2">
                <p><img src="{{ asset('images/schedule.png') }}"></p>
                <p>{{ trans('locale.schedule') }}</p>
            </div>
            <div class="col-sm-2">
                <p><img src="{{ asset('images/exam.png') }}"></p>
                <p>{{ trans('locale.exam') }}</p>
            </div>
            <div class="col-sm-2">
                <p><img src="{{ asset('images/pass.png') }}"></p>
                <p>{{ trans('locale.pass') }}</p>
            </div>
        </div>
    </div>
@stop
