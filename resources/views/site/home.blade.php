@extends('includes.main')

@section('title', trans('locale.home'))

@section('logo')
    @include('includes.logo')
@stop

@section('content')
    <div class="container">
        <div class="banner">
            <div class="video-container clearfix full-width" data-ref="mixitup-container">
                <video width="100%" height="500" autoplay="autoplay" loop>
                    <source src="{{ asset('videos/home.mp4') }}" type="video/mp4" />
                </video>
                <div class="banner">
                    <p class="first" data-typer-targets="{{trans('locale.taking_you_beyond')}}"></p>
                    <p class="second"></p>
                    <p class="third"></p>
                </div>
            </div>
            <img src="{{ asset('images/Picture2.png') }}" class="arrow_right">
        </div>

        <section class="col-sm-12 mt-40">
            <div class="news">
                <span>{{ trans('locale.latest_news') }}</span>
                <ul class="newsticker">
                    @foreach($news as $new)
                        <li><a href="{{ route('ViewNewPage', $new->id) }}">{{ $new->translations[0]->title }}...</a></li>
                    @endforeach
                </ul>
            </div>
        </section>

        <section class="mt-40 mb-20">
            @if(count($images) > 0)

                                <div >
                                    <img >
                <div class="col-sm-6">
                    <ul class="gallery">
                        <li class="item wow fadeInLeft">
                            <img src="{{ asset('images/photo_gallery/'.$images[0]['image']) }}" alt="Landscape">
                        </li>
                        <li class="item wow fadeInRight" data-wow-delay=".2s">
                            <img src="{{ asset('images/photo_gallery/'.$images[1]['image']) }}" alt="Landscape">
                        </li>
                        <li class="item wow fadeInLeft" data-wow-delay=".4s">
                            <img src="{{ asset('images/photo_gallery/'.$images[2]['image']) }}" alt="Landscape">
                        </li>
                        <li class="item wow fadeInRight" data-wow-delay=".6s">
                            <img src="{{ asset('images/photo_gallery/'.$images[3]['image']) }}" alt="Landscape">
                        </li>
                        <li class="item wow fadeInLeft" data-wow-delay=".8s">
                            <img src="{{ asset('images/photo_gallery/'.$images[4]['image']) }}" alt="Landscape">
                        </li>
                    </ul>
                </div>
            @endif
                <div class="col-sm-6">
                    <img class="no-float wptn-img aligncenter wp-image-5128 size-full" src="https://wp-time.com/wp-content/uploads/2016/03/youtube-popup.jpg" alt="youtube popup">
                    <a class="vp-a" href="https://www.youtube.com/watch?v=L5s0ERQt8ek" target="_blank" rel="nofollow">
                        <button id="videoPlayBtn" type="button" class="btn btn-default btn-circle btn-xl">
                        <i id="faPlay" style="color: white; font-size: 50px; transition: none; line-height: 50px; border-width: 0px; margin: 0px 3px; padding: 0px; letter-spacing: 0px; font-weight: 400;" class="fa fa-play"></i>
                        </button>
                    </a>
                </div>
        </section>
    </div>
@stop

@section('scripts')
    {{ Html::script('js/YouTubePopUp.jquery.js') }}     
    <script type="text/javascript">
    jQuery(function(){
        jQuery("a.vp-a").YouTubePopUp();
    });

        setTimeout(function(){
            $('[data-typer-targets]').typer();
            $('.newsticker').newsTicker({
                row_height: 60,
                max_rows: 1,
                duration: 3000,
            });
        }, 5200);

        var second_p = "{!! trans('locale.consultancy_training') !!}";
        var third_p = "{!! trans('locale.performed_highly_skilled') !!}";
        setTimeout(function(){
            $('.second').typeTo(second_p);
        }, 7500);

        setTimeout(function(){
            $('.third').typeTo(third_p);
        }, 10500);

    </script>
@stop