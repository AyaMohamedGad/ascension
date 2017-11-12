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
                    <p class="second" data-typer-targets="{{trans('locale.consultancy_training')}}"></p>
                    <p class="third" data-typer-targets="{{trans('locale.performed_highly_skilled')}}"></p>
                </div>
            </div>
            <img src="{{ asset('images/Picture2.png') }}" class="arrow_right">
        </div>

        <section class="col-sm-12">
            <div class="news">
                <span>{{ trans('locale.latest_news') }}</span>
                <ul class="newsticker">
                    @foreach($news as $new)
                        <li><a href="{{ route('ViewNewPage', $new->id) }}">{{ $new->translations[0]->title }}...</a></li>
                    @endforeach
                </ul>
            </div>
        </section>

        @if(count($images) > 0)
            <section class="mt-40 mb-20">
                <div class="col-sm-12">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            @php($key = 1)
                            @foreach($images as $image)
                                <div class="item {{ $key == 1 ? 'active' : '' }}">
                                    <img src="{{ asset('images/photo_gallery/'.$image->image) }}">
                                    @php($key++)
                                </div>
                            @endforeach
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only"><</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">></span>
                        </a>
                    </div>
                </div>
            </section>
        @endif
    </div>
@stop

@section('scripts')
    <script type="text/javascript">
        setTimeout(function(){
            $('[data-typer-targets]').typer();
            $('.newsticker').newsTicker({
                row_height: 80,
                max_rows: 3,
                duration: 3000,
            });
        }, 5200);
    </script>
@stop