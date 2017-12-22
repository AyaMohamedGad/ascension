@extends('includes.main')

@section('title', trans('locale.home'))

@section('logo')
    @include('includes.logo')
@stop

@section('content')
    <img src="{{ asset('images/Picture1.png') }}" class="logo_pic1">
    <img src="{{ asset('images/Picture2.png') }}" class="logo_pic2">
    <img src="{{ asset('images/Picture3.png') }}" class="logo_pic3">
    <img src="{{ asset('images/Picture4.png') }}" class="logo_pic4">
<div class="bg_logo">
</div>
    <div class="container home">
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
            <!-- <img src="{{ asset('images/Picture2.png') }}" class="arrow_right"> -->
        </div>

        <div class="news mt-30 mb-40 row">
            <!-- <span>{{ trans('locale.latest_news') }}</span>
            <ul class="newsticker">
                @foreach($news as $new)
                    <li><a href="{{ route('ViewNewPage', $new->id) }}">{{ $new->translations[0]->title }}...</a></li>
                @endforeach
            </ul> -->

            <div class="container-fluid">
                <div class="carousel slide" id="news-carousel" data-ride="carousel" data-interval="2500">
                    <!-- Wrapper for slides -->
                    <ol class="carousel-indicators">
                        @foreach($news as $key=>$new)
                        @if($key == 0)
                            <li data-target="#news-carousel" data-slide-to="{{$key}}" class="active"></li>
                        @else
                            <li data-target="#news-carousel" data-slide-to="{{$key}}"></li>
                        @endif
                        @endforeach
                    </ol>
                    <div class="carousel-inner">
                        @foreach($news as $key2=>$new)
                        @if($key2 == 0)
                            <div class="item active">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-3"><img src="{{$new->translations[0]->image}}" class="img-responsive"></div>
                                        <div class="col-md-9">
                                            <h2>{{ $new->translations[0]->title }}</h2>
                                            <p>{{$new->translations[0]->description}}</p>
                                            <a href="{{ route('ViewNewPage', $new->id) }}">{{trans('locale.seemore')}}</a>
                                        </div>
                                    </div>
                                </div>            
                            </div> 
                        @else 
                            <div class="item">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-3"><img src="{{$new->translations[0]->image}}" class="img-responsive"></div>
                                        <div class="col-md-9">
                                            <h2>{{ $new->translations[0]->title }}</h2>
                                            <p>{{$new->translations[0]->description}}</p>
                                            <a href="{{ route('ViewNewPage', $new->id) }}">{{trans('locale.seemore')}}</a>
                                        </div>
                                    </div>
                                </div>            
                            </div>
                        @endif
                        @endforeach
                    <!-- End Item -->
                    </div>
                </div>
                <!-- End Carousel -->
            </div>
        </div>

        <div class="row mt-150">
            <div class="col-sm-6 video">
                <img class="no-float wptn-img aligncenter wp-image-5128 size-full" src="https://wp-time.com/wp-content/uploads/2016/03/youtube-popup.jpg" alt="youtube popup">
                    <a class="vp-a" href="https://www.youtube.com/watch?v=L5s0ERQt8ek" target="_blank" rel="nofollow">
                        <button id="videoPlayBtn" type="button" class="btn btn-default btn-circle btn-xl">
                        <i id="faPlay" style="color: white; font-size: 50px; transition: none; line-height: 50px; border-width: 0px; margin: 0px 3px; padding: 0px; letter-spacing: 0px; font-weight: 400;" class="fa fa-play"></i>
                    </button>
                </a>
            </div>

            <div class="col-sm-6">
                <div id="ps_container" class="ps_container" style="display:none;">
                    {{--<a id="ps_next_photo" class="ps_next_photo" style="display:none;"></a>--}}
                </div>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    {{ Html::script('js/YouTubePopUp.jquery.js') }}
    {{ Html::script('js/logo_animation.js') }}
    <script type="text/javascript">
        jQuery(function(){
            jQuery("a.vp-a").YouTubePopUp();
        });
        setTimeout(function(){
            $('[data-typer-targets]').typer();
            $('.newsticker').newsTicker({
                row_height: 50,
                max_rows: 1,
                duration: 3000,
            });
        }, 5200);

        var second_p = "{!! trans('locale.consultancy_training') !!}";
        var third_p = "{!! trans('locale.performed_highly_skilled') !!}";
        var images = {!! json_encode($images_array) !!};
        setTimeout(function(){
            $('.second').typeTo(second_p);
        }, 7500);

        setTimeout(function(){
            $('.third').typeTo(third_p);
        }, 10500);

        /*Gallery Script*/
        var navR,navL   = false;
        var first       = 1;
        var positions   = {
            '0'     : 0,
            '1'     : 170,
            '2'     : 340,
            '3'     : 510,
            '4'     : 680
        }
        var $ps_container   = $('#ps_container');
        var $elem = $(this);
        var album_name  = 'album' + parseInt($elem.index() + 1);
        var $loading    = $('<div />',{className:'loading'});
        $ps_container.find('img').remove();
        var testing = function(data) {
            var items_count = data.length;
            for(var i = 0; i < items_count; ++i){
                var item_source = data[i];
                var cnt         = 0;
                $('<img />').load(function(){
                    var $image = $(this);
                    ++cnt;
                    resizeCenterImage($image);
                    $ps_container.append($image);
                    var r       = Math.floor(Math.random()*41)-20;
                    if(cnt < items_count){
                        $image.css({
                            '-moz-transform'    :'rotate('+r+'deg)',
                            '-webkit-transform' :'rotate('+r+'deg)',
                            'transform'         :'rotate('+r+'deg)'
                        });
                    }
                    if(cnt == items_count){
                        $loading.remove();
                        $ps_container.show();
                    }
                }).attr('src',item_source);
            }
        };
        testing(images);
        
//        $('#ps_next_photo').show();
        $('#ps_next_photo').bind('click',function(){
            get_next();
        });

        var get_next = function(){
            var $current    = $ps_container.find('img:last');
            var r           = Math.floor(Math.random()*41)-20;
            var currentPositions = {
                marginLeft  : $current.css('margin-left'),
                marginTop   : $current.css('margin-top')
            }
            var $new_current = $current.prev();
            $current.animate({
                'marginLeft':'250px',
                'marginTop':'-385px'
            },250,function(){
                $(this).insertBefore($ps_container.find('img:first'))
                    .css({
                        '-moz-transform'    :'rotate('+r+'deg)',
                        '-webkit-transform' :'rotate('+r+'deg)',
                        'transform'         :'rotate('+r+'deg)'
                    })
                    .animate({
                        'marginLeft':currentPositions.marginLeft,
                        'marginTop' :currentPositions.marginTop
                    },250,function(){
                        $new_current.css({
                            '-moz-transform'    :'rotate(0deg)',
                            '-webkit-transform' :'rotate(0deg)',
                            'transform'         :'rotate(0deg)'
                        });
                    });
            });
        }

        function resizeCenterImage($image){
            var theImage    = new Image();
            theImage.src    = $image.attr("src");
            var imgwidth    = theImage.width;
            var imgheight   = theImage.height;
            var containerwidth  = 460;
            var containerheight = 330;

            if(imgwidth > containerwidth){
                var newwidth = containerwidth;
                var ratio = imgwidth / containerwidth;
                var newheight = imgheight / ratio;
                if(newheight > containerheight){
                    var newnewheight = containerheight;
                    var newratio = newheight/containerheight;
                    var newnewwidth =newwidth/newratio;
                    theImage.width = newnewwidth;
                    theImage.height= newnewheight;
                }
                else{
                    theImage.width = newwidth;
                    theImage.height= newheight;
                }
            }
            else if(imgheight > containerheight){
                var newheight = containerheight;
                var ratio = imgheight / containerheight;
                var newwidth = imgwidth / ratio;
                if(newwidth > containerwidth){
                    var newnewwidth = containerwidth;
                    var newratio = newwidth/containerwidth;
                    var newnewheight =newheight/newratio;
                    theImage.height = newnewheight;
                    theImage.width= newnewwidth;
                }
                else{
                    theImage.width = newwidth;
                    theImage.height= newheight;
                }
            }
            $image.css({
                'width'         :theImage.width,
                'height'        :theImage.height,
                'margin-top'    :-(theImage.height/2)-10+'px',
                'margin-left'   :-(theImage.width/2)-10+'px'
            });
        }
        setInterval(function(){
            get_next();
        }, 5000);
    </script>

@stop