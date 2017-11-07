@extends('includes.main')

@section('title', trans('locale.ascension').trans('locale.ers'))

@section('content')
    <div class="container clearfix" data-ref="mixitup-container">
        <div class="header_normal_cover">
            <h2 class="header">{{ trans('locale.contacts') }}</h2>
        </div>

        <div class="tab-content">
            <div class="col-sm-12">
                <div class="col-sm-8">
                    <div class="row">
                        <div class="col-sm-12 top-left-contact">
                            <div class="col-sm-6 top-left-contact-left">
                                <h4>{{ trans('locale.phone') }} <small> {{ trans('locale.phone_no') }}</small></h4>
                                <h4>{{ trans('locale.mobile') }} <small> {{ trans('locale.mobile_no') }}</small></h4>
                                <h4>{{ trans('locale.fax') }} <small> {{ trans('locale.fax_no') }}</small></h4>
                                <h4>{{ trans('locale.email') }} <small> {{ trans('locale.email_no') }}</small></h4>
                            </div>
                            <div class="col-sm-6">
                                <h4>{{ trans('locale.address') }} <small> {{ trans('locale.address_no') }}</small></h4>
                                <h4>{{ trans('locale.mailings') }} <small> {{ trans('locale.mailings_no') }}</small></h4>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <img src="{{ asset('images/maps_contact.png') }}">
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <img src="{{ asset('images/contact_rt.png') }}">
                </div>
            </div>
        </div>
    </div>
@stop
