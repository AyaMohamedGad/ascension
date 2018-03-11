@extends('includes.main')

@section('title', trans('locale.information_system'))

@section('content')
    <div class="container clearfix" data-ref="mixitup-container" style="height: 100%;">
        <div class="tab-content mt-20 mb-20 information">
            <div class="fixing wow bounceInUp">
                <img class="for_desk" src="{{ asset('images/information.png') }}">
                <div>
                    <p class="center">{{ trans('locale.information_system') }}</p>
                </div>
            </div>
            <p class="center" style="font-size: 20px;">{{ trans('locale.coming_soon') }}...</p>
        </div>
    </div>
@stop
