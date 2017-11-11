@extends('includes.main')

@section('title', trans('locale.business_advisory'))

@section('content')
    <div class="container clearfix" data-ref="mixitup-container">
        <div class="header_normal_cover wow fadeInLeft" style="visibility: hidden">
            <h2 class="header">{{ $thenew->translations[0]->title }}</h2>
        </div>

        <div class="tab-content row wow bounceInUp" style="visibility: hidden">
            <div class="col-sm-12">
                <img class="center" src="{{ $thenew->image }}" >
            </div>
        </div>

        <div class="row wow bounceInRight" id="book_tabs" style="visibility: hidden">
            <div class="col-xs-8 col-xs-offset-2">
                {{ $thenew->translations[0]->description }}
            </div>
        </div>

    </div>
@stop