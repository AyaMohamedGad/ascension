@extends('includes.main')

@section('title', trans('locale.ascension').trans('locale.ers'))

@section('styles')
    <style>
        h4, h4 i{
            color: #092b67 !important;
        }
        iframe{
            border: 2px solid #092b67 !important;
            border-radius: 10px;
        }
    </style>
@stop

@section('content')
    <div class="container clearfix" data-ref="mixitup-container">
        <div class="header_normal_cover wow fadeInLeft">
            <h2 class="header">{{ trans('locale.contacts') }}</h2>
        </div>

        <div class="tab-content mt-20">
            <div class="col-sm-12">
                <div class="col-sm-8">
                    <div class="row">
                        <div class="col-sm-12 top-left-contact wow fadeInDown">
                            <div class="col-sm-6 top-left-contact-left">
                                <h4><i class="fa fa-phone"></i> {{ trans('locale.phone') }} <small> {{ trans('locale.phone_no') }}</small></h4>
                                <h4><i class="fa fa-mobile-phone"></i> {{ trans('locale.mobile') }} <small> {{ trans('locale.mobile_no') }}</small></h4>
                                <h4><i class="fa fa-fax"></i> {{ trans('locale.fax') }} <small> {{ trans('locale.fax_no') }}</small></h4>
                                <h4><i class="fa fa-envelope"></i> {{ trans('locale.email') }} <small> {{ trans('locale.email_no') }}</small></h4>
                            </div>
                            <div class="col-sm-6">
                                <h4><i class="fa fa-map-marker"></i> {{ trans('locale.address') }} <small> {{ trans('locale.address_no') }}</small></h4>
                                <h4><i class="fa fa-envelope-o"></i> {{ trans('locale.mailings') }} <small> {{ trans('locale.mailings_no') }}</small></h4>
                            </div>
                        </div>
                        <div class="col-sm-12 wow fadeInUp">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3477.2497393037097!2d47.96155431509925!3d29.36297598213533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjnCsDIxJzQ2LjciTiA0N8KwNTcnNDkuNSJF!5e0!3m2!1sen!2sus!4v1511204251461" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 wow fadeInRight">
                    <img src="{{ asset('images/contact.gif') }}">
                </div>
            </div>
        </div>
    </div>
@stop
