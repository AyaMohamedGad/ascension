@extends('includes.main')

@section('title', trans('locale.business_advisory'))

@section('styles')
    <style>
        .business_head{
            background: rgba(9, 43, 103, 0.7) url("../images/business.jpg");
            background-repeat: no-repeat;
            padding: 0 !important;
            background-size: 100% 100%;
        }
        .business_head div{
            background: rgba(9, 43, 103, 0.7);
            padding: 20px;
        }
        .business_head div p{
            color: #fff;
            font-size: 16px;
            text-transform: none;
        }
    </style>
@stop

@section('content')
    <div class="container clearfix" data-ref="mixitup-container">
        <div class="tab-content mt-20 wow fadeInDown" wow-data-offset="200">
            <div class="mb-30 information">
                <div class="fixing wow bounceInUp">
                    <img src="{{ asset('images/business.jpg') }}">
                    <div>
                        <p class="center">{{ trans('locale.business_advisory') }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                {{--<div class="col-sm-12 business_head wow bounceInUp" data-wow-duration="2s">--}}
                    {{--<div>--}}
                        {{--<p></p>--}}
                        {{--<p>{{ trans('locale.business_advisory_paragraph.1') }}</p>--}}
                        {{--<p><strong>{{ trans('locale.business_advisory_paragraph.2') }}</strong> {{  trans('locale.business_advisory_paragraph.3') }}</p>--}}
                        {{--<p>{{ trans('locale.business_advisory_paragraph.4') }}</p>--}}
                        {{--<p><strong>{{ trans('locale.business_advisory_paragraph.5') }}</strong> {{ trans('locale.business_advisory_paragraph.6') }}</p>--}}
                        {{--<p>{{ trans('locale.business_advisory_paragraph.7') }}</p>--}}
                    {{--</div>--}}
                {{--</div>--}}

                <div class="col-sm-12" style="padding:0">
                    <div class="mt-30 mb-30 col-sm-4 pricingtable one featured">
                        <div class="top">
                            <h2>1</h2>
                        </div>
                        <div class="content">
                            <p>{{ trans('locale.business_advisory_paragraph.1') }}</p>
                            <p><strong>{{ trans('locale.business_advisory_paragraph.2') }}</strong> {{  trans('locale.business_advisory_paragraph.3') }}</p>
                        </div>
                    </div>

                    <div class="mt-30 col-sm-4 pricingtable two">
                        <div class="top">
                            <h2>2</h2>
                        </div>
                        <div class="content">
                            <p>{{ trans('locale.business_advisory_paragraph.4') }}</p>
                            <p><strong>{{ trans('locale.business_advisory_paragraph.5') }}</strong> {{  trans('locale.business_advisory_paragraph.6') }}</p>
                        </div>
                    </div>

                    <div class="mt-30 col-sm-4 pricingtable five">
                        <div class="top">
                            <h2>3</h2>
                        </div>
                        <div class="content">
                            <p>{{ trans('locale.business_advisory_paragraph.7') }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>{{ trans('locale.fields_of_consulting.1') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ trans('locale.fields_of_consulting.2') }}</td>
                            </tr>
                            <tr>
                                <td>{{ trans('locale.fields_of_consulting.3') }}</td>
                            </tr>
                            <tr>
                                <td>{{ trans('locale.fields_of_consulting.4') }}</td>
                            </tr>
                            <tr>
                                <td>{{ trans('locale.fields_of_consulting.5') }}</td>
                            </tr>
                            <tr>
                                <td>{{ trans('locale.fields_of_consulting.6') }}</td>
                            </tr>
                            <tr>
                                <td>{{ trans('locale.fields_of_consulting.7') }}</td>
                            </tr>
                            <tr>
                                <td>{{ trans('locale.fields_of_consulting.8') }}</td>
                            </tr>
                            <tr>
                                <td>{{ trans('locale.fields_of_consulting.9') }}</td>
                            </tr>
                            <tr>
                                <td>{{ trans('locale.fields_of_consulting.10') }}</td>
                            </tr>
                            <tr>
                                <td>{{ trans('locale.fields_of_consulting.11') }}</td>
                            </tr>
                            <tr>
                                <td>{{ trans('locale.fields_of_consulting.12') }}</td>
                            </tr>
                            <tr>
                                <td>{{ trans('locale.fields_of_consulting.13') }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="business wow fadeInDown">
                <div class="col-sm-12 mb-30">
                    <div class="col-sm-3 col-xs-12">
                        <div class="arrow_content orange_p">
                            <ul>
                                <li><i class="fa fa-angle-double-{{app()->getLocale() == 'en' ? 'right' : 'left'}}"></i> {{ trans('locale.accounting_text.1') }}</li>
                                <li><i class="fa fa-angle-double-{{app()->getLocale() == 'en' ? 'right' : 'left'}}"></i> {{ trans('locale.accounting_text.2') }}</li>
                                <li><i class="fa fa-angle-double-{{app()->getLocale() == 'en' ? 'right' : 'left'}}"></i> {{ trans('locale.accounting_text.3') }}</li>
                                <li><i class="fa fa-angle-double-{{app()->getLocale() == 'en' ? 'right' : 'left'}}"></i> {{ trans('locale.accounting_text.4') }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="orange col-xs-12 col-sm-3 wow rotateIn" data-wow-duration="3s">
                        <p>{{ trans('locale.accounting') }}</p>
                        <img class="orange_arrow" src="{{ asset('images/orange_arrow.png') }}">
                    </div>
                    <div class="green col-xs-12 col-sm-3 wow rotateIn" data-wow-duration="3s">
                        <p>{{ trans('locale.human_resources') }}</p>
                        <img class="green_arrow" src="{{ asset('images/green_arrow.png') }}">
                    </div>
                    <div class="col-xs-12 col-sm-3">
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
                <div class="col-sm-12 mb-30">
                    <div class="col-xs-12 col-sm-3">
                        <div class="arrow_content blue_p">
                            <ul>
                                <li><i class="fa fa-angle-double-{{app()->getLocale() == 'en' ? 'right' : 'left'}}"></i> {{ trans('locale.human_text.1') }}</li>
                                <li><i class="fa fa-angle-double-{{app()->getLocale() == 'en' ? 'right' : 'left'}}"></i> {{ trans('locale.human_text.2') }}</li>
                                <li><i class="fa fa-angle-double-{{app()->getLocale() == 'en' ? 'right' : 'left'}}"></i> {{ trans('locale.human_text.3') }}</li>
                                <li><i class="fa fa-angle-double-{{app()->getLocale() == 'en' ? 'right' : 'left'}}"></i> {{ trans('locale.human_text.4') }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="blue col-xs-12 col-sm-3 wow rotateIn" data-wow-duration="3s">
                        <p>{{ trans('locale.financial_evaluations') }}</p>
                        <img class="blue_arrow" src="{{ asset('images/blue_arrow.png') }}">
                    </div>
                    <div class="yellow col-xs-12 col-sm-3 wow rotateIn" data-wow-duration="3s">
                        <p>{{ trans('locale.other') }}</p>
                        <img class="yellow_arrow" src="{{ asset('images/yellow_arrow.png') }}">
                    </div>
                    <div class="col-xs-12 col-sm-3">
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

@section('scripts')
    {{ Html::script('js/arrows_animation.js') }}
@stop