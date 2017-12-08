@extends('includes.main')

@section('title', trans('locale.feasibility_study'))

@section('styles')
    <style>
        .col-sm-3 {
            position:relative;
            margin: 0 40px 20px;
            text-align: center;
            border: 2px solid #092b67;
            min-height: 230px;
            border-radius: 5px;
            padding-bottom: 15px;
        }
        .col-sm-3 a{
            width: 100%;
            height: 100%;
            display: inline-block;
            vertical-align: middle;
        }
        .col-sm-3 h4 {
            border-bottom: 2px solid #092b67;
            width: 100%;
            padding-bottom: 10px;
        }
        .col-sm-3 img{
            text-align: center;
            margin: auto;
            max-width: 150px;
        }
        .col-sm-3 .info{
            -webkit-transition: all 0.4s ease-in-out;
            -moz-transition: all 0.4s ease-in-out;
            -o-transition: all 0.4s ease-in-out;
            -ms-transition: all 0.4s ease-in-out;
            transition: all 0.4s ease-in-out;
            -webkit-transform: scale(0);
            -moz-transform: scale(0);
            -o-transform: scale(0);
            -ms-transform: scale(0);
            transform: scale(0);
            -webkit-backface-visibility: hidden;
            position: absolute;
            background: #092b67;
            width: 100%;
            height: 100%;
            opacity: 0;
            top: 0;
            left: 0;
        }
        .col-sm-3:hover .info, .opened .info{
            -webkit-transition: all 0.4s ease-in-out;
            -moz-transition: all 0.4s ease-in-out;
            -o-transition: all 0.4s ease-in-out;
            -ms-transition: all 0.4s ease-in-out;
            transition: all 0.4s ease-in-out;
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -o-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
            opacity: 1;
            z-index: 10;
        }
        .col-sm-3 a .info h4 {
            color: #fff;
            letter-spacing: 1px;
            padding-top: 28%;
        }
        .info i{
            position: absolute;
            right: -45px;
            top: 30%;
            font-size: 80px;
            color: #092b67;
        }
        .content p{
            font-size: 17px;
            text-transform: none;
            padding-left: 20px;
        }
    </style>
@stop
@section('content')
    <div class="container clearfix" data-ref="mixitup-container">
        <div class="header_normal_cover wow fadeInLeft">
            <h2 class="header">{{ trans('locale.feasibility_study') }}</h2>
            <div class="arrows_header">
                <img class="arrow_one wow rotateInDownRight" data-wow-delay=".2s" src="{{ asset('images/arrow_wht.png') }}">
                <img class="arrow_two wow rotateInUpLeft" data-wow-delay=".3s" src="{{ asset('images/arrow_wht.png') }}">
                <img class="arrow_three wow rotateInUpRight" data-wow-delay=".4s" src="{{ asset('images/arrow_wht.png') }}">
                <img class="arrow_four wow rotateInDownLeft" data-wow-delay=".5s" src="{{ asset('images/arrow_wht.png') }}">
            </div>
        </div>
        <div class="tab-content mt-20">
            <div class="col-sm-12 fixing wow bounceInUp">
                <img src="{{ asset('images/feasibility_study.png') }}">
                <div><p></p></div>
            </div>
        </div>

        <div class="bookkeeping">
            <div class="col-md-12 mt-20">
                <div class="col-sm-3 open" id="two">
                    <a href="#">
                        <h4>{{ trans('locale.definition') }}</h4>
                        <img src="{{ asset('images/definition.png') }}">
                        <div class="info">
                            <h4>{{ trans('locale.definition') }}</h4>
                            <i class="fa fa-caret-{{ app()->getLocale() == 'en' ? 'right' : 'left' }} wow shake" data-wow-duration="2s" data-wow-iteration="infinite"></i>
                        </div>
                    </a>
                </div>
                <div class="col-sm-8 two keeping hidden">
                    <p>{{ trans('locale.definition_paragraph') }}</p>
                    <i class="fa fa-close closed" data-id="two"></i>
                </div>
                <div class="col-sm-3 open" id="one">
                    <a href="#">
                        <h4>{{ trans('locale.objectives') }}</h4>
                        <img src="{{ asset('images/objective.png') }}">
                        <div class="info">
                            <h4>{{ trans('locale.objectives') }} </h4>
                            <i class="fa fa-caret-{{ app()->getLocale() == 'en' ? 'right' : 'left' }} wow shake" data-wow-duration="2s" data-wow-iteration="infinite"></i>
                        </div>
                    </a>
                </div>
                <div class="col-sm-8 one keeping hidden">
                    <p>1- {{ trans('locale.objectives_paragraph.1') }}</p>
                    <p>2- {{ trans('locale.objectives_paragraph.2') }}</p>
                    <p>3- {{ trans('locale.objectives_paragraph.3') }}</p>
                    <i class="fa fa-close closed" data-id="one"></i>
                </div>
                <div class="col-sm-3 open" id="three">
                    <a href="#">
                        <h4>{{ trans('locale.start_project') }}</h4>
                        <img src="{{ asset('images/start_project.png') }}">
                        <div class="info">
                            <h4>{{ trans('locale.start_project') }}</h4>
                            <i class="fa fa-caret-{{ app()->getLocale() == 'en' ? 'right' : 'left' }} wow shake" data-wow-duration="2s" data-wow-iteration="infinite"></i>
                        </div>
                    </a>
                </div>
                <div class="col-sm-8 three keeping hidden">
                    <p>{{ trans('locale.start_project_paragraph.1') }}</p>
                    <p>{{ trans('locale.start_project_paragraph.2') }}</p>
                    <i class="fa fa-close closed" data-id="three"></i>
                </div>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script>
        $(document).on('click', '.open', function (e) {
            e.preventDefault();
            showHide($(this).attr('id'));
        });
        $(document).on('click', '.closed', function (e) {
            e.preventDefault();
            showHide($(this).attr('data-id'));
        });
        function showHide(id){
            if($('.'+id).hasClass('hidden')){
                $('.open').not(this).each(function(){
                    $(this).addClass('hidden');
                });
                $('#'+id).addClass('opened');
                $('.'+id).removeClass('hidden');
                $('#'+id).removeClass('hidden');
            } else {
                $('.open').removeClass('hidden');
                $('#'+id).removeClass('opened');
                $('.'+id).addClass('hidden');
            }
        }
    </script>
@stop