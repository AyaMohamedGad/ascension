@extends('includes.main')

@section('title', trans('locale.feasibility_study'))

@section('styles')
    <style>
        .col-sm-3 {
            position: relative;
            margin: 0 40px 20px;
            text-align: center;
            border: 2px solid #0054a4;
            min-height: 230px;
            border-radius: 5px;
            padding-bottom: 15px;
        }

        .col-sm-3 a {
            width: 100%;
            height: 100%;
            display: inline-block;
            vertical-align: middle;
        }

        .col-sm-3 h4 {
            border-bottom: 2px solid #0054a4;
            width: 100%;
            padding-bottom: 10px;
        }

        .col-sm-3 img {
            text-align: center;
            margin: auto;
            max-width: 150px;
        }

        .col-sm-3 .info {
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
            background: #0054a4;
            width: 100%;
            height: 100%;
            opacity: 0;
            top: 0;
            left: 0;
        }

        .col-sm-3:hover .info, .opened .info {
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

        .info i {
            position: absolute;
            right: -45px;
            top: 30%;
            font-size: 80px;
            color: #0054a4;
        }

        .content p {
            font-size: 17px;
            text-transform: none;
            padding-left: 20px;
        }

        .ch-grid {
            height: 600px;
        }

        .ch-grid li {
            width: calc(100% / 3.03);
            overflow: hidden;
        }

        .ch-info h3 {
            font-size: 17px;
        }
    </style>
@stop
@section('content')
    <div class="container clearfix" data-ref="mixitup-container">
        <div class="tab-content mt-20">
            <div class="information fixing wow bounceInUp">
                <img style="height: 150%;" src="{{ asset('images/feasibility_study.png') }}">
                <div>
                    <p class="center">{{ trans('locale.feasibility_study') }}</p>
                </div>
            </div>

            <div class="col-sm-12 mb-50">
                <ul class="mt-40 ch-grid">
                    <li class="wow fadeInDown" data-wow-delay=".3s">
                        <div class="ch-item ch-img-1">
                            <div class="ch-info">
                                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                <h3>{{ trans('locale.definition') }}</h3>
                                <p>{{ trans('locale.definition_paragraph') }}</p>
                            </div>
                        </div>
                    </li>
                    <li class="wow fadeInDown" data-wow-delay=".4s">
                        <div class="ch-item ch-img-2">
                            <div class="ch-info">
                                <i class="fa fa-file-o" aria-hidden="true"></i>
                                <h3>{{ trans('locale.objectives') }}</h3>
                                <p>1- {{ trans('locale.objectives_paragraph.1') }}</p>
                                <p>2- {{ trans('locale.objectives_paragraph.2') }}</p>
                                <p>3- {{ trans('locale.objectives_paragraph.3') }}</p>
                            </div>
                        </div>
                    </li>
                    <li class="wow fadeInDown" data-wow-delay=".5s">
                        <div class="ch-item ch-img-3">
                            <div class="ch-info">
                                <i class="fa fa-tasks" aria-hidden="true"></i>
                                <h3>{{ trans('locale.start_project') }}</h3>
                                <p>{{ trans('locale.start_project_paragraph.1') }}</p>
                                <p>{{ trans('locale.start_project_paragraph.2') }}</p>
                            </div>
                        </div>
                    </li>
                </ul>
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

        function showHide(id) {
            if ($('.' + id).hasClass('hidden')) {
                $('.open').not(this).each(function () {
                    $(this).addClass('hidden');
                });
                $('#' + id).addClass('opened');
                $('.' + id).removeClass('hidden');
                $('#' + id).removeClass('hidden');
            } else {
                $('.open').removeClass('hidden');
                $('#' + id).removeClass('opened');
                $('.' + id).addClass('hidden');
            }
        }
    </script>
@stop