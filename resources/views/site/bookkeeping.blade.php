@extends('includes.main')

@section('title', trans('locale.bookkeeping'))

@section('styles')
    <style>
        .col-sm-2 {
            position:relative;
            margin: 0 40px 20px;
            text-align: center;
            border: 2px solid #092b67;
            min-height: 233px;
            border-radius: 5px;
            padding-bottom: 15px;
        }
        .col-sm-2 a{
            width: 100%;
            height: 100%;
            display: inline-block;
            vertical-align: middle;
        }
        .col-sm-2 h4 {
            border-bottom: 2px solid #092b67;
            width: 100%;
            padding-bottom: 10px;
        }
        .col-sm-2 img{
            text-align: center;
        }
        .col-sm-2 .info{
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
        .col-sm-2:hover .info, .opened .info{
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
        .col-sm-2 a .info h4 {
            color: #fff;
            letter-spacing: 1px;
            padding-top: 45%;
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
        .keeping{
            background: #f5f5f5;
            border-radius: 5px;
            padding: 0 !important;
            min-height: 225px;
            z-index: 9;
        }
        .keeping p{
            padding: 10px 20px;
            font-size: 17px;
            text-transform: none;
        }
        .keeping i{
            border-radius: 50%;
            padding: 5px 6px;
            background: rgba(193, 0, 0, 0.65);
            color: #fff;
            position: absolute;
            right: 10px;
            bottom: 10px;
            cursor: pointer;
        }
    </style>
@stop

@section('content')
    <div class="container clearfix" data-ref="mixitup-container">
        <div class="header_normal_cover">
            <h2 class="header">{{ trans('locale.bookkeeping') }}</h2>
        </div>
        <div class="tab-content">
            <div class="col-sm-12 fixing">
                <img src="{{ asset('images/bookkeeping.png') }}">
                <div>
                    <p>{{ trans('locale.bookkeeping_paragraph.1') }}</p>
                    <p>{{ trans('locale.bookkeeping_paragraph.2') }}</p>
                </div>
            </div>

            <div class="col-sm-12 content fadeInDown wow">
                <h4 class="page_head"><i class="fa fa-circle wow rotateIn" data-wow-duration="1s" data-wow-iteration="infinite"></i> {{ trans('locale.bookkeeping_paragraph.3') }}</h4>
                <p>{{ trans('locale.bookkeeping_paragraph.4') }}</p>
                <h4 class="page_head"><i class="fa fa-circle wow rotateIn" data-wow-duration="1s" data-wow-iteration="infinite"></i> {{ trans('locale.bookkeeping_paragraph.5') }}</h4>
                <p>{{ trans('locale.bookkeeping_paragraph.6') }}</p>
                <p>{{ trans('locale.bookkeeping_paragraph.7') }}</p>
                <p>{{ trans('locale.bookkeeping_paragraph.8') }}</p>
            </div>

            <div class="bookkeeping">
                <div class="col-md-12">
                    <div class="col-sm-2 open" id="one">
                        <a href="#">
                            <h4>{{ trans('locale.objective') }}</h4>
                            <img src="{{ asset('images/objective.png') }}">
                            <div class="info">
                                <h4>{{ trans('locale.objective') }} </h4>
                                <i class="fa fa-caret-{{ app()->getLocale() == 'en' ? 'right' : 'left' }} wow shake" data-wow-duration="2s" data-wow-iteration="infinite"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-9 one keeping hidden">
                        <p>{{ trans('locale.objective_paragraph') }}</p>
                        <i class="fa fa-close closed" data-id="one"></i>
                    </div>
                    <div class="col-sm-2 open" id="two">
                        <a href="#">
                            <h4>{{ trans('locale.method') }}</h4>
                            <img src="{{ asset('images/method.png') }}">
                            <div class="info">
                                <h4>{{ trans('locale.method') }}</h4>
                                <i class="fa fa-caret-{{ app()->getLocale() == 'en' ? 'right' : 'left' }} wow shake" data-wow-duration="2s" data-wow-iteration="infinite"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-9 two keeping hidden">
                        <p>{{ trans('locale.method_paragraph') }}</p>
                        <i class="fa fa-close closed" data-id="two"></i>
                    </div>
                    <div class="col-sm-2 open" id="three">
                        <a href="#">
                            <h4>{{ trans('locale.smes') }}</h4>
                            <img src="{{ asset('images/sme.png') }}">
                            <div class="info">
                                <h4>{{ trans('locale.smes') }}</h4>
                                <i class="fa fa-caret-{{ app()->getLocale() == 'en' ? 'right' : 'left' }} wow shake" data-wow-duration="2s" data-wow-iteration="infinite"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-9 three keeping hidden">
                        <p>{{ trans('locale.sme_paragraph') }}</p>
                        <i class="fa fa-close closed" data-id="three"></i>
                    </div>
                    <div class="col-sm-2 open" id="four">
                        <a href="#">
                            <h4>{{ trans('locale.large_companies') }}</h4>
                            <img src="{{ asset('images/companies.png') }}">
                            <div class="info">
                                <h4>{{ trans('locale.large_companies') }}</h4>
                                <i class="fa fa-caret-{{ app()->getLocale() == 'en' ? 'right' : 'left' }} wow shake" data-wow-duration="2s" data-wow-iteration="infinite"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-9 four keeping hidden">
                        <p>{{ trans('locale.companies_paragraph') }}</p>
                        <i class="fa fa-close closed" data-id="four"></i>
                    </div>
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