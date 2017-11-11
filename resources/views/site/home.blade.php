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

        <section class="mt-40">
            <div class="row">
                <div class="col-xs-8 col-xs-offset-2 centered">
                <div>
                    <h3>Latest News</h3>
                </div>
                    <ul class="newsticker">
                        @foreach($news as $new)
                        <li>{{ $new->translations[0]->title }} <a href="{{ route('ViewNewPage', $new->id) }}">Read more...</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </section>


        <section class="mt-40 mb-20">
            <div class="row">
                <div class="col-md-6">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                          <div class="item active">
                            <img src="https://www.w3schools.com/bootstrap/ny.jpg" alt="Los Angeles" style="width:100%;">
                          </div>

                          <div class="item">
                            <img src="https://www.w3schools.com/bootstrap/chicago.jpg" alt="Chicago" style="width:100%;">
                          </div>
                        
                          <div class="item">
                            <img src="https://www.w3schools.com/bootstrap/la.jpg" alt="New york" style="width:100%;">
                          </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                          <span class="glyphicon glyphicon-chevron-left"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                          <span class="glyphicon glyphicon-chevron-right"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                </div>
            </div>
        </section>
    </div>

@stop

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