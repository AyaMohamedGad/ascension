@extends('includes.main')

@section('title', trans('locale.home'))

@section('logo')
    @include('includes.logo')
@stop

@section('content')
    <div class="banner">
        <div class="container video-container clearfix full-width" data-ref="mixitup-container">
            <video width="100%" height="500" autoplay="autoplay" loop>
                <source src="{{ asset('videos/home.mp4') }}" type="video/mp4" />
            </video>
            <div class="banner">
                <p class="first">{{ trans('locale.taking_you_beyond') }}</p>
                <p class="second">{{ trans('locale.consultancy_training') }}</p>
                <p class="third">{{ trans('locale.performed_highly_skilled') }}</p>
            </div>
        </div>
        <img src="{{ asset('images/Picture2.png') }}" class="arrow_right">
    </div>

    <div class="col-sm-12">
        <div class="news">
            <span>{{ trans('locale.latest_news') }}</span>
            <ul>
                @foreach($news as $new)
                    <li><a href="{{ route('ViewNewPage', $new->id) }}">{{ $new->translations[0]->title }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
@stop