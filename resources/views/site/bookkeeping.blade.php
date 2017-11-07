@extends('includes.main')

@section('title', trans('locale.bookkeeping'))

@section('content')
    <div class="container clearfix" data-ref="mixitup-container">
        <div class="header_normal_cover">
            <h2 class="header">{{ trans('locale.bookkeeping') }}</h2>
        </div>
        <div class="tab-content">
            <div class="col-sm-12 head">
                <img src="{{ asset('images/bookkeeping.png') }}">
            </div>
            <div class="bookkeeping">
                <div class="col-sm-12">
                    <div class="col-sm-3 grey">
                        <p>{{ trans('locale.objective') }}</p>
                        <p><img src="{{ asset('images/objective.png') }}"></p>
                    </div>
                    <div class="col-sm-9">
                        <p>{{ trans('locale.objective_paragraph') }}</p>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="col-sm-3 blue">
                        <p>{{ trans('locale.method') }}</p>
                        <p><img src="{{ asset('images/method.png') }}"></p>
                    </div>
                    <div class="col-sm-9">
                        <p>{{ trans('locale.method_paragraph') }}</p>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="col-sm-3 grey">
                        <p>{{ trans('locale.smes') }}</p>
                        <p><img src="{{ asset('images/sme.png') }}"></p>
                    </div>
                    <div class="col-sm-9">
                        <p>{{ trans('locale.sme_paragraph') }}</p>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="col-sm-3 blue">
                        <p>{{ trans('locale.large_companies') }}</p>
                        <p><img src="{{ asset('images/companies.png') }}"></p>
                    </div>
                    <div class="col-sm-9">
                        <p>{{ trans('locale.companies_paragraph') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
