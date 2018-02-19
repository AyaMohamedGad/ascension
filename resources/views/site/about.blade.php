@extends('includes.main')

@section('title', trans('locale.about_us'))

@section('styles')
    <style>
        p {
            font-size: 17px;
            text-transform: none;
        }

        .col-sm-6 img {
            width: 100%;
        }

        .item .col-sm-12 col-xs-12 col-lg-4 {
            height: 240px;
            display: flex;
            align-items: center;
        }

        .item img {
            text-align: center;
            max-width: 250px;
            line-height: 250px;
            margin: auto;
            vertical-align: middle;
        }
    </style>
@stop

@section('content')
    <div class="container clearfix" data-ref="mixitup-container">
        {{--<div class="header_normal_cover wow fadeInLeft">--}}
        {{--<h2 class="header">{{ trans('locale.about_us') }}</h2>--}}
        {{--<div class="arrows_header">--}}
        {{--<img class="arrow_one wow rotateInDownRight" data-wow-delay=".2s" src="{{ asset('images/arrow_wht.png') }}">--}}
        {{--<img class="arrow_two wow rotateInUpLeft" data-wow-delay=".3s" src="{{ asset('images/arrow_wht.png') }}">--}}
        {{--<img class="arrow_three wow rotateInUpRight" data-wow-delay=".4s" src="{{ asset('images/arrow_wht.png') }}">--}}
        {{--<img class="arrow_four wow rotateInDownLeft" data-wow-delay=".5s" src="{{ asset('images/arrow_wht.png') }}">--}}
        {{--</div>--}}
        {{--</div>--}}
        <div class="tab-content about">
            <div class="col-sm-12">
                <h4 class="page_head"><i class="fa fa-circle wow rotateIn"
                                         data-wow-duration="1s"></i> {{ trans('locale.our_mission') }}</h4>
                <p class="ml-20">{{ trans('locale.mission') }}</p>
            </div>

            <div class="col-sm-12 mt-15 mb-70">
                <h4 class="page_head"><i class="fa fa-circle wow rotateIn"
                                         data-wow-duration="1s"></i> {{ trans('locale.our_values') }}</h4>
                <div class="col-sm-4 wow rotateInUpLeft">
                    <img class="wow pulse" data-wow-duration="3s" src="{{ asset('images/about.png') }}">
                </div>
                <div class="col-sm-8">
                    <ul class="small_arrow">
                        <li>{{ trans('locale.values.1') }}</li>
                        <li>{{ trans('locale.values.2') }}</li>
                        <li>{{ trans('locale.values.3') }}</li>
                        <li>{{ trans('locale.values.4') }}</li>
                        <li>{{ trans('locale.values.5') }}</li>
                        <li>{{ trans('locale.values.6') }}</li>
                    </ul>
                </div>
            </div>

            {{--@if(count($partners) > 0)--}}
                {{--<div class="col-lg-12 col-sm-12">--}}
                    {{--<h4 class="page_head"><i class="fa fa-circle wow rotateIn"--}}
                                             {{--data-wow-duration="1s"></i> {{ trans('locale.our_partners') }}</h4>--}}
    {{----}}
                    {{--<div class="container-fluid">--}}
                        {{--<div class="carousel slide" id="news-carousel" data-ride="carousel" data-interval="5000">--}}
                            {{--<div class="carousel-inner">--}}
                                {{--@foreach($partners as $key => $partner)--}}
                                    {{--<div class="item @if($key == 1) active @endif">--}}
                                        {{--<div class="container-fluid">--}}
                                            {{--<div class="row">--}}
                                                {{--@foreach($partner as $item)--}}
                                                    {{--<div class="col-sm-4 col-xs-12 col-lg-4">--}}
                                                        {{--<img src="{{ asset('images/partners/'.$item) }}"--}}
                                                             {{--class="img-responsive">--}}
                                                    {{--</div>--}}
                                                {{--@endforeach--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--@endforeach--}}
                            {{--</div>--}}
                            {{--<a class="left carousel-control" style="background-image: none; color: #0054a4;"--}}
                               {{--href="#news-carousel" data-slide="prev">--}}
                                {{--<span class="glyphicon glyphicon-chevron-left"></span>--}}
                                {{--<span class="sr-only">Previous</span>--}}
                            {{--</a>--}}
                            {{--<a class="right carousel-control" style="background-image: none; color: #0054a4;"--}}
                               {{--href="#news-carousel" data-slide="next">--}}
                                {{--<span class="glyphicon glyphicon-chevron-right"></span>--}}
                                {{--<span class="sr-only">Next</span>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                        {{--<!-- End Carousel -->--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--@endif--}}

            {{--@if(count($experts) > 0)--}}
                {{--<div class="col-sm-12 experts mb-50" style="display: inline-block;">--}}
                    {{--<h4 class="page_head"><i class="fa fa-circle wow rotateIn"--}}
                                             {{--data-wow-duration="1s"></i> {{ trans('locale.our_experts') }}</h4>--}}
                    {{--@foreach($experts as $key => $expert)--}}
                        {{--<div class="col-sm-12">--}}
                            {{--<div style="margin-bottom:10px;" class="col-xs-6 opened">--}}
                                {{--<img src="{{ asset('images/experts/'.$expert->image) }}">--}}
                                {{--<div class="name">--}}
                                    {{--<h4>{{ $expert->translations[0]->title }}</h4>--}}
                                    {{--<a href="#" class="open" id="expert{{$key}}">{{ trans('locale.read_more') }}</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-xs-6 expert{{$key}} details">--}}
                                {{--{!! $expert->translations[0]->description !!}--}}
                                {{--<i class="fa fa-close closed" data-id="expert{{$key}}"></i>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--@endforeach--}}
                {{--</div>--}}
            {{--@endif--}}
        </div>
    </div>
@stop

@section('scripts')
    <script>
        $(document).ready(function () {
            $('.details').hide();
        });
        $(document).on('click', '.open', function (e) {
            e.preventDefault();
            showHide($(this).attr('id'));
        });
        $(document).on('click', '.closed', function (e) {
            e.preventDefault();
            showHide($(this).attr('data-id'));
        });

        function showHide(id) {
            if (!$('.' + id).is(':visible')) {
                $('.col-sm-4.opened').not($('#' + id).parent().parent()).each(function () {
                    $(this).hide(400);
                });
                $('.' + id).show(500);
            }
            else {
                $('.opened').show(400);
                $('.details').hide(500);
            }
        }
    </script>
@stop
