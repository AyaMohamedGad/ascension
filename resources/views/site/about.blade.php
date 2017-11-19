@extends('includes.main')

@section('title', trans('locale.about_us'))

@section('styles')
    <style>
        p{
            font-size: 17px;
            text-transform: none;
        }
        .experts .col-sm-4{
            position: relative;
        }
        .experts .name{
            position: absolute;
            top: 0;
            right: 0;
            width: 90%;
            height: 0;
            background: #092b6763;
            margin: 0 15px;
            opacity: 0;
            -webkit-transition: all 0.5s ease-in-out;
            -moz-transition: all 0.5s ease-in-out;
            -o-transition: all 0.5s ease-in-out;
            transition: all 0.5s ease-in-out
        }
        .experts .col-sm-4:hover .name{
            height: 100%;
            opacity: 1;
            -webkit-transition: all 0.5s ease-in-out;
            -moz-transition: all 0.5s ease-in-out;
            -o-transition: all 0.5s ease-in-out;
            transition: all 0.5s ease-in-out
        }
        .experts .name h4{
            bottom: 10%;
        }
        .experts .name a{
            bottom: 3%;
        }
        .experts .name a:hover{
            text-decoration: underline;
        }
        .experts .name h4 , .experts .name a{
            right: 7%;
            position: absolute;
            color: #fff;
        }
        .experts .name p{
            color: #092b67;
        }
    </style>
@stop

@section('content')
    <div class="container clearfix" data-ref="mixitup-container">
        <div class="header_normal_cover wow fadeInLeft">
            <h2 class="header">{{ trans('locale.about_us') }}</h2>
        </div>
        <div class="tab-content about">
            <div class="col-sm-12">
                <h4 class="page_head"><i class="fa fa-circle wow rotateIn" data-wow-duration="1s" data-wow-iteration="infinite"></i> {{ trans('locale.about_us') }}</h4>
                <div class="col-sm-4 wow rotateInUpLeft mt-15">
                    <img class="wow pulse" data-wow-duration="3s" data-wow-iteration="infinite" src="{{ asset('images/about.png') }}">
                </div>
                <div class="col-sm-8">
                    <h4 class="wow fadeInLeft" data-wow-delay=".1s"><strong>{{ trans('locale.honesty') }}</strong></h4>
                    <p class="wow fadeInLeft" data-wow-delay=".15s" data-wow-duration="1.5s">{{ trans('locale.honesty_text') }}</p>
                    <h4 class="wow fadeInLeft" data-wow-delay=".2s"><strong>{{ trans('locale.integrity') }}</strong></h4>
                    <p class="wow fadeInLeft" data-wow-delay=".25s" data-wow-duration="1.5s">{{ trans('locale.integrity_text') }}</p>
                    <h4 class="wow fadeInLeft" data-wow-delay=".3s"><strong>{{ trans('locale.fairness') }}</strong></h4>
                    <p class="wow fadeInLeft" data-wow-delay=".35s" data-wow-duration="1.5s">{{ trans('locale.fairness_text') }}</p>
                </div>
            </div>

            <div class="col-sm-12">
                <h4 class="page_head"><i class="fa fa-circle wow rotateIn" data-wow-duration="1s" data-wow-iteration="infinite"></i> {{ trans('locale.our_mission') }}</h4>
                <p class="ml-20">{{ trans('locale.mission') }}</p>
            </div>

            <div class="col-sm-12">
                <h4 class="page_head"><i class="fa fa-circle wow rotateIn" data-wow-duration="1s" data-wow-iteration="infinite"></i> {{ trans('locale.our_values') }}</h4>
                <ul class="small_arrow">
                    <li>{{ trans('locale.values.1') }}</li>
                    <li>{{ trans('locale.values.2') }}</li>
                    <li>{{ trans('locale.values.3') }}</li>
                    <li>{{ trans('locale.values.4') }}</li>
                    <li>{{ trans('locale.values.5') }}</li>
                    <li>{{ trans('locale.values.6') }}</li>
                </ul>
            </div>

            <div class="col-lg-12 col-sm-12">
                <h4 class="page_head"><i class="fa fa-circle wow rotateIn" data-wow-duration="1s" data-wow-iteration="infinite"></i> {{ trans('locale.our_partners') }}</h4>
                <div class="centered">
                    <div class="client wow bounceIn" data-wow-duration="5s" data-wow-iteration="infinite"><img src="{{ asset('images/client.png') }}"></div>
                    <div class="client wow bounceIn" data-wow-duration="5s" data-wow-iteration="infinite"><img src="{{ asset('images/client.png') }}"></div>
                    <div class="client wow bounceIn" data-wow-duration="5s" data-wow-iteration="infinite"><img src="{{ asset('images/client.png') }}"></div>
                    <div class="client wow bounceIn" data-wow-duration="5s" data-wow-iteration="infinite"><img src="{{ asset('images/client.png') }}"></div>
                    <div class="client wow bounceIn" data-wow-duration="5s" data-wow-iteration="infinite"><img src="{{ asset('images/client.png') }}"></div>
                    <div class="client wow bounceIn" data-wow-duration="5s" data-wow-iteration="infinite"><img src="{{ asset('images/client.png') }}"></div>
                </div>
            </div>

            <div class="col-sm-12 experts">
                <h4 class="page_head"><i class="fa fa-circle wow rotateIn" data-wow-duration="1s" data-wow-iteration="infinite"></i> {{ trans('locale.our_experts') }}</h4>
                <div class="col-sm-4 open">
                    <img src="{{ asset('images/expert1.png') }}">
                    <div class="name">
                        <h4>{{ trans('locale.expert1') }}</h4>
                        <a href="#" id="expert1">{{ trans('locale.read_more') }}</a>
                    </div>
                </div>
                <div class="col-sm-8 expert1 hidden">
                    <p><strong>{{ trans('locale.years_of_experience') }}: </strong>{{ trans('locale.ten_years') }}</p>
                    <p><strong>{{ trans('locale.qualifications') }}: </strong>{{ trans('locale.qualification_content') }}</p>
                    <p><strong>{{ trans('locale.major') }}: </strong>{{ trans('locale.accounting') }}</p>
                </div>
                <div class="col-sm-4 open">
                    <img src="{{ asset('images/expert2.png') }}">
                    <div class="name">
                        <h4>{{ trans('locale.expert2') }}</h4>
                        <a href="#" id="expert2">{{ trans('locale.read_more') }}</a>
                    </div>
                </div>
                <div class="col-sm-8 expert2 hidden">
                    <p><strong>{{ trans('locale.years_of_experience') }}: </strong>{{ trans('locale.ten_years') }}</p>
                    <p><strong>{{ trans('locale.qualifications') }}: </strong>{{ trans('locale.qualification_content') }}</p>
                    <p><strong>{{ trans('locale.major') }}: </strong>{{ trans('locale.accounting') }}</p>
                </div>
                <div class="col-sm-4 open">
                    <img src="{{ asset('images/expert3.png') }}">
                    <div class="name">
                        <h4>{{ trans('locale.expert3') }}</h4>
                        <a href="#" id="expert3">{{ trans('locale.read_more') }}</a>
                    </div>
                </div>
                <div class="col-sm-8 expert3 hidden">
                    <p><strong>{{ trans('locale.years_of_experience') }}: </strong>{{ trans('locale.ten_years') }}</p>
                    <p><strong>{{ trans('locale.qualifications') }}: </strong>{{ trans('locale.qualification_content') }}</p>
                    <p><strong>{{ trans('locale.major') }}: </strong>{{ trans('locale.accounting') }}</p>
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
