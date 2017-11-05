@extends('includes.main')

@section('title', trans('locale.information_system'))

@section('content')
    <div class="container clearfix full-width">
        <div class="header_normal_cover">
            <h2 class="header">{{ trans('locale.information_system') }}</h2>
        </div>
        <div class="tab-content">
            <div class="col-sm-12">
               <img src="{{ asset('images/information_system.png') }}">
            </div>
            <div class="col-sm-12">
                <p>{{ trans('locale.work_under_process') }}</p>
                <p>{{ trans('locale.thank_for_visiting') }}</p>
            </div>
        </div>
    </div>
@stop
