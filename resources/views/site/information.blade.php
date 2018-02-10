@extends('includes.main')

@section('title', trans('locale.information_system'))

@section('content')
    <div class="container clearfix" data-ref="mixitup-container">
        <div class="tab-content mt-20 mb-20 information">
            <div class="col-sm-12 fixing wow bounceInUp">
                <img class="for_desk" src="{{ asset('images/information.png') }}">
                <div>
                    <p class="center">{{ trans('locale.information_system') }}</p>
                    <p class="center">{{ trans('locale.coming_soon') }}...</p>
                </div>
            </div>
        </div>
    </div>
@stop
