@extends('includes.main')

@section('title', trans('locale.business_advisory'))

@section('content')
    <div class="container clearfix" data-ref="mixitup-container">
        <div class="header_normal_cover">
            <h2 class="header">{{ trans('locale.business_advisory') }}</h2>
        </div>
        <div class="tab-content">
            <div class="row">
                <div class="col-sm-12 fixing">
                    <img src="{{ asset('images/business_advisory.png') }}">
                    <div>
                        <p>{{ trans('locale.business_advisory_paragraph') }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-3">
                    <div class="orange_p">
                        <p>{{ trans('locale.accounting_text.1') }}</p>
                        <p>{{ trans('locale.accounting_text.2') }}</p>
                        <p>{{ trans('locale.accounting_text.3') }}</p>
                        <p>{{ trans('locale.accounting_text.4') }}</p>
                    </div>
                </div>
                <div class="col-xs-3">
                    <img class="orange_arrow" src="{{ asset('images/orange_arrow.png') }}">
                </div>
                <div class="col-xs-3">
                    <img class="green_arrow" src="{{ asset('images/green_arrow.png') }}">
                </div>
                <div class="col-xs-3">
                    <div class="green_p">
                        <p>{{ trans('locale.financial_text.1') }}</p>
                        <p>{{ trans('locale.financial_text.2') }}</p>
                        <p>{{ trans('locale.financial_text.3') }}</p>
                        <p>{{ trans('locale.financial_text.4') }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-3">
                    <div class="blue_p">
                        <p>{{ trans('locale.human_text.1') }}</p>
                        <p>{{ trans('locale.human_text.2') }}</p>
                        <p>{{ trans('locale.human_text.3') }}</p>
                        <p>{{ trans('locale.human_text.4') }}</p>
                    </div>
                </div>
                <div class="col-xs-3">
                    <img class="blue_arrow" src="{{ asset('images/blue_arrow.png') }}">
                </div>
                <div class="col-xs-3">
                    <img class="yellow_arrow" src="{{ asset('images/yellow_arrow.png') }}">
                </div>
                <div class="col-xs-3">
                    <div class="yellow_p">
                        <p>{{ trans('locale.other_text.1') }}</p>
                        <p>{{ trans('locale.other_text.2') }}</p>
                        <p>{{ trans('locale.other_text.3') }}</p>
                        <p>{{ trans('locale.other_text.4') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop