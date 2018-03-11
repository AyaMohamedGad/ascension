@extends('includes.main')

@section('title', count($thenew->translations) > 0 ? $thenew->translations[0]->title : "New")

@section('styles')
    <style>
        h2.header{font-size:25px !important;}
    </style>
@stop

@section('content')
    <div class="container single_new clearfix" data-ref="mixitup-container">
        <div class="wow fadeInLeft">
            <h3 style="color:#0054a4">{{ count($thenew->translations) > 0 ? $thenew->translations[0]->title : trans('locale.new') }}</h3>
        </div>

        @if(count($thenew->translations) > 0)
            <div class="tab-content row wow bounceInUp">
                <div class="col-sm-12 mt-20">
                    <div class="col-sm-4 row wow bounceInUp">
                        <img class="center" src="{{ asset('images/news/' . $thenew->image) }}" >
                    </div>

                    <div class="col-xs-8 row wow bounceInRight pr-30 pl-30">
                        <p><strong>{{ trans('locale.new_date') }}:</strong>  {{ $thenew->date }}</p>
                        {!! $thenew->translations[0]->description !!}
                    </div>
                </div>
            </div>
        @endif
    </div>
@stop