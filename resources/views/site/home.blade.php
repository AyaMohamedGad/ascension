@extends('includes.main')

@section('title', trans('locale.home'))

@section('logo')
    @include('includes.logo')
@stop

@section('content')
    <div class="container clearfix full-width" data-ref="mixitup-container">
        <video width="100%" height="500" autoplay="autoplay" loop>
            <source src="{{ asset('videos/home.mp4') }}" type="video/mp4" />
        </video>
    </div>
@stop
