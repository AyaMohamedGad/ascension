@extends('includes.main')

@section('title', trans('locale.ascension').trans('locale.ers'))

@section('styles')
    <style>
        h5{
            color: #0054a4 !important;
        }
        iframe{
            border: 2px solid #0054a4 !important;
            border-radius: 10px;
        }
        h5.col-sm-5, h5.col-sm-7{
            padding: 0 0 !important;
            margin-bottom: 0;
        }
        .map.col-sm-12{
            padding: 0 !important;
        }
    </style>
@stop

@section('content')
    <div class="container clearfix contacts" data-ref="mixitup-container">
        <div class="header_normal_cover wow fadeInLeft">
            <h2 class="header">{{ trans('locale.contacts') }}</h2>
            <div class="arrows_header">
                <img class="arrow_one wow rotateInDownRight" data-wow-delay=".2s" src="{{ asset('images/arrow_wht.png') }}">
                <img class="arrow_two wow rotateInUpLeft" data-wow-delay=".3s" src="{{ asset('images/arrow_wht.png') }}">
                <img class="arrow_three wow rotateInUpRight" data-wow-delay=".4s" src="{{ asset('images/arrow_wht.png') }}">
                <img class="arrow_four wow rotateInDownLeft" data-wow-delay=".5s" src="{{ asset('images/arrow_wht.png') }}">
            </div>
        </div>

        <div class="tab-content mt-20 mb-50">
            <div class="col-sm-12" style="padding: 0px;">
                <div class="col-sm-8">
                    <div class="row">
                        <div class="col-sm-12 mb-30 top-left-contact wow fadeInDown">
                            <div class="col-sm-6 top-left-contact-left">
                                <h5 class="col-sm-5">{{ trans('locale.phone') }}</h5>
                                <h5 class="col-sm-7"><small>{{ trans('locale.phone_no') }}</small></h5>
                                <h5 class="col-sm-5">{{ trans('locale.mobile') }}</h5>
                                <h5 class="col-sm-7"><small>{{ trans('locale.mobile_no') }}</small></h5>
                                <h5 class="col-sm-5">{{ trans('locale.fax') }}</h5>
                                <h5 class="col-sm-7"><small>{{ trans('locale.fax_no') }}</small></h5>
                                <h5 class="col-sm-5">{{ trans('locale.email') }}</h5>
                                <h5 class="col-sm-7"><small> {{ trans('locale.email_no') }}</small></h5>
                            </div>
                            <div class="col-sm-6">
                                <h5 class="col-sm-5">{{ trans('locale.address') }}</h5>
                                <h5 class="col-sm-7"><small> {{ trans('locale.address_no') }}</small></h5>
                                <h5 class="col-sm-5">{{ trans('locale.mailings') }}</h5>
                                <h5 class="col-sm-7"><small> {{ trans('locale.mailings_no') }}</small></h5>
                            </div>
                        </div>
                        <div class="col-sm-12 wow fadeInUp map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3477.2497393037097!2d47.96155431509925!3d29.36297598213533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjnCsDIxJzQ2LjciTiA0N8KwNTcnNDkuNSJF!5e0!3m2!1sen!2sus!4v1511204251461" width="100%" height="345" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 wow fadeInRight contact_gif mb-40">
                    <img src="{{ asset('images/contact.gif') }}" style="border-radius: 15px;">
                </div>
            </div>
        </div>
    </div>
@stop
