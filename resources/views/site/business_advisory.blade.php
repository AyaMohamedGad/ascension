@extends('includes.main')

@section('title', trans('locale.business_advisory'))

@section('content')
    <div class="container clearfix" data-ref="mixitup-container">
        <div class="header_normal_cover wow fadeInLeft">
            <h2 class="header">{{ trans('locale.business_advisory') }}</h2>
        </div>
        <div class="tab-content">
            <div class="row">
                <div class="col-sm-12 fixing wow bounceInUp">
                    <img src="{{ asset('images/business_advisory.png') }}">
                    <div>
                        <p>{{ trans('locale.business_advisory_paragraph') }}</p>
                    </div>
                </div>
            </div>
            <div class="business">
                <div class="col-sm-12">
                    <div class="col-xs-3">
                        <div class="arrow_content orange_p">
                            <ul>
                                <li><i class="fa fa-angle-double-{{app()->getLocale() == 'en' ? 'right' : 'left'}}"></i> {{ trans('locale.accounting_text.1') }}</li>
                                <li><i class="fa fa-angle-double-{{app()->getLocale() == 'en' ? 'right' : 'left'}}"></i> {{ trans('locale.accounting_text.2') }}</li>
                                <li><i class="fa fa-angle-double-{{app()->getLocale() == 'en' ? 'right' : 'left'}}"></i> {{ trans('locale.accounting_text.3') }}</li>
                                <li><i class="fa fa-angle-double-{{app()->getLocale() == 'en' ? 'right' : 'left'}}"></i> {{ trans('locale.accounting_text.4') }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="orange col-xs-3">
                        <p>{{ trans('locale.accounting') }}</p>
                        <img class="orange_arrow" src="{{ asset('images/orange_arrow.png') }}">
                    </div>
                    <div class="green col-xs-3">
                        <p>{{ trans('locale.human_resources') }}</p>
                        <img class="green_arrow" src="{{ asset('images/green_arrow.png') }}">
                    </div>
                    <div class="col-xs-3">
                        <div class="arrow_content green_p">
                            <ul>
                                <li><i class="fa fa-angle-double-{{app()->getLocale() == 'en' ? 'right' : 'left'}}"></i> {{ trans('locale.financial_text.1') }}</li>
                                <li><i class="fa fa-angle-double-{{app()->getLocale() == 'en' ? 'right' : 'left'}}"></i> {{ trans('locale.financial_text.2') }}</li>
                                <li><i class="fa fa-angle-double-{{app()->getLocale() == 'en' ? 'right' : 'left'}}"></i> {{ trans('locale.financial_text.3') }}</li>
                                <li><i class="fa fa-angle-double-{{app()->getLocale() == 'en' ? 'right' : 'left'}}"></i> {{ trans('locale.financial_text.4') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="col-xs-3">
                        <div class="arrow_content blue_p">
                            <ul>
                                <li><i class="fa fa-angle-double-{{app()->getLocale() == 'en' ? 'right' : 'left'}}"></i> {{ trans('locale.human_text.1') }}</li>
                                <li><i class="fa fa-angle-double-{{app()->getLocale() == 'en' ? 'right' : 'left'}}"></i> {{ trans('locale.human_text.2') }}</li>
                                <li><i class="fa fa-angle-double-{{app()->getLocale() == 'en' ? 'right' : 'left'}}"></i> {{ trans('locale.human_text.3') }}</li>
                                <li><i class="fa fa-angle-double-{{app()->getLocale() == 'en' ? 'right' : 'left'}}"></i> {{ trans('locale.human_text.4') }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="blue col-xs-3">
                        <p>{{ trans('locale.financial_evaluations') }}</p>
                        <img class="blue_arrow" src="{{ asset('images/blue_arrow.png') }}">
                    </div>
                    <div class="yellow col-xs-3">
                        <p>{{ trans('locale.other') }}</p>
                        <img class="yellow_arrow" src="{{ asset('images/yellow_arrow.png') }}">
                    </div>
                    <div class="col-xs-3">
                        <div class="arrow_content yellow_p">
                            <ul>
                                <li><i class="fa fa-angle-double-{{app()->getLocale() == 'en' ? 'right' : 'left'}}"></i> {{ trans('locale.other_text.1') }}</li>
                                <li><i class="fa fa-angle-double-{{app()->getLocale() == 'en' ? 'right' : 'left'}}"></i> {{ trans('locale.other_text.2') }}</li>
                                <li><i class="fa fa-angle-double-{{app()->getLocale() == 'en' ? 'right' : 'left'}}"></i> {{ trans('locale.other_text.3') }}</li>
                                <li><i class="fa fa-angle-double-{{app()->getLocale() == 'en' ? 'right' : 'left'}}"></i> {{ trans('locale.other_text.4') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop