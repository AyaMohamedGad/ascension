@extends('includes.main')

@section('title', trans('locale.bookkeeping'))

@section('content')
    <div class="container clearfix full-width">
        <div class="header_normal_cover">
            <h2 class="header">{{ trans('locale.bookkeeping') }}</h2>
        </div>
        <div class="tab-content">
            <div class="col-sm-12">
                <div class="col-sm-6">
                    <div class="ers">
                        <p>{{ trans('locale.ers_paragraph.1') }}</p>
                        <p>{{ trans('locale.ers_paragraph.2') }}</p>
                        <p>{{ trans('locale.ers_paragraph.3') }}</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <img src="{{ asset('images/ascension_ers.png') }}">
                </div>
            </div>
        </div>
    </div>
@stop
