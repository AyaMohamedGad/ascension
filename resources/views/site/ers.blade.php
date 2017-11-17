@extends('includes.main')

@section('title', trans('locale.ascension').trans('locale.ers'))

@section('content')
    <div class="container clearfix" data-ref="mixitup-container">
        <div class="header_ubnormal_cover wow fadeInLeft">
            <h2 class="header">{{ trans('locale.ascension') }}<span class="er">{{ trans('locale.ers') }}</span> <span class="red">{{ trans('locale.mark') }}</span></h2>
        </div>

        <div class="tab-content">
            <div class="col-sm-12">
                <div class="col-sm-6 wow fadeInLeft">
                    <div class="ers">
                        <p>{{ trans('locale.ers_paragraph.1') }}</p>
                        <p>{{ trans('locale.ers_paragraph.2') }}</p>
                        <p>{{ trans('locale.ers_paragraph.3') }}</p>
                    </div>
                </div>
                <div class="col-sm-6 ers_sec wow fadeInRight">
                    <img src="{{ asset('images/ascension_ers.png') }}">
                </div>
            </div>
        </div>
    </div>
@stop
