@extends('includes.main')

@section('title', trans('locale.national_fund'))

@section('content')
    <div class="container clearfix" data-ref="mixitup-container">
        <div class="header_normal_cover wow fadeInLeft">
            <h2 class="header">{{ trans('locale.national_fund') }}</h2>
        </div>
        <div class="tab-content">
            <div class="col-sm-12">
                <img src="{{ asset('images/funds.jpg') }}">
            </div>
            <div class="col-sm-12">
            </div>
        </div>
    </div>
@stop
