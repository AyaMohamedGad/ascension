@extends('includes.main')

@section('title', trans('locale.national_fund'))

@section('styles')
    <style>
        .col-sm-3 {
            background: #092b67;
            min-height: 170px;
            text-align: center;
            padding: 15px;
            border: 10px solid #fff;
            border-radius: 20px;
            cursor: pointer;
        }
        .col-sm-3.active{
            background: rgba(9, 43, 103, 0.6);
        }
        .col-sm-3 h5{
            color: #fff;
        }
        .col-sm-3 img{
            max-width: 85px;
            margin: auto;
        }
        .img_container {
            min-height: 85px;
        }
        .data{
            background: #6b80a4;
            border-radius: 30px;
            padding: 15px;
        }
        .data p{
            color: #fff;
        }
    </style>
@stop

@section('content')
    <div class="container clearfix" data-ref="mixitup-container">
        <div class="header_normal_cover wow fadeInLeft">
            <h2 class="header">{{ trans('locale.national_fund') }}</h2>
            <div class="arrows_header">
                <img class="arrow_one wow rotateInDownRight" data-wow-delay=".2s" src="{{ asset('images/arrow_wht.png') }}">
                <img class="arrow_two wow rotateInUpLeft" data-wow-delay=".3s" src="{{ asset('images/arrow_wht.png') }}">
                <img class="arrow_three wow rotateInUpRight" data-wow-delay=".4s" src="{{ asset('images/arrow_wht.png') }}">
                <img class="arrow_four wow rotateInDownLeft" data-wow-delay=".5s" src="{{ asset('images/arrow_wht.png') }}">
            </div>
        </div>
        <div class="tab-content mt-20">
            <div class="col-sm-12 wow fadeInDown">
                <img src="{{ asset('images/funds.jpg') }}">
            </div>

            <div class="funds">
                <div class="col-sm-12 mt-10">
                    <div class="col-sm-3 active" id="one">
                        <div class="img_container">
                            <img src="{{ asset('images/national_fund.png') }}" alt="{{ trans('locale.fund.1') }}">
                        </div>
                        <h5>{{ trans('locale.fund.1') }}</h5>
                    </div>

                    <div class="col-sm-3" id="two">
                        <div class="img_container">
                            <img src="{{ asset('images/benefits.png') }}" alt="{{ trans('locale.fund.2') }}">
                        </div>
                        <h5>{{ trans('locale.fund.2') }}</h5>
                    </div>

                    <div class="col-sm-3" id="three">
                        <div class="img_container">
                            <img src="{{ asset('images/elgiability.png') }}" alt="{{ trans('locale.fund.3') }}">
                        </div>
                        <h5>{{ trans('locale.fund.3') }}</h5>
                    </div>

                    <div class="col-sm-3" id="four">
                        <div class="img_container">
                            <img src="{{ asset('images/documents.png') }}" alt="{{ trans('locale.fund.4') }}">
                        </div>
                        <h5>{{ trans('locale.fund.4') }}</h5>
                    </div>
                </div>

                <div class="col-sm-12 data one">
                    <p>{{ trans('locale.fund.the_fund.1') }}</p>
                </div>

                <div class="col-sm-12 data two hidden">
                    <p>{{ trans('locale.fund.eligiablity.1') }}</p>
                    <div class="half">
                        <div class="tab">
                            <input id="tab-four" type="radio" name="tabs2">
                            <label for="tab-four">{{ trans('locale.fund.eligiablity.2') }}</label>
                            <div class="tab-content">
                                <p>{{ trans('locale.fund.eligiablity.3') }}</p>
                            </div>
                        </div>

                        <div class="tab">
                            <input id="tab-five" type="radio" name="tabs2">
                            <label for="tab-five">{{ trans('locale.fund.eligiablity.4') }}</label>
                            <div class="tab-content">
                                <p>{{ trans('locale.fund.eligiablity.5') }}</p>
                            </div>
                        </div>

                        <div class="tab">
                            <input id="tab-six" type="radio" name="tabs2">
                            <label for="tab-six">{{ trans('locale.fund.eligiablity.6') }}</label>
                            <div class="tab-content">
                                <p>{{ trans('locale.fund.eligiablity.7') }}</p>
                            </div>
                        </div>

                        <div class="tab">
                            <input id="tab-seven" type="radio" name="tabs2">
                            <label for="tab-seven">{{ trans('locale.fund.eligiablity.8') }}</label>
                            <div class="tab-content">
                                <p>{{ trans('locale.fund.eligiablity.9') }}</p>
                            </div>
                        </div>

                        <div class="tab">
                            <input id="tab-eight" type="radio" name="tabs2">
                            <label for="tab-eight">{{ trans('locale.fund.eligiablity.10') }}</label>
                            <div class="tab-content">
                                <p>{{ trans('locale.fund.eligiablity.11') }}</p>
                            </div>
                        </div>

                        <div class="tab">
                            <input id="tab-nine" type="radio" name="tabs2">
                            <label for="tab-nine">{{ trans('locale.fund.eligiablity.12') }}</label>
                            <div class="tab-content">
                                <p>{{ trans('locale.fund.eligiablity.13') }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 data three hidden">
                    <p>{{ trans('locale.fund.benefits.1') }}</p>
                    <p>1- {{ trans('locale.fund.benefits.2') }}</p>
                    <p>2- {{ trans('locale.fund.benefits.3') }}</p>
                    <p>3- {{ trans('locale.fund.benefits.4') }}</p>
                    <p>4- {{ trans('locale.fund.benefits.5') }}</p>
                </div>

                <div class="col-sm-12 data four hidden">
                    <p>{{ trans('locale.fund.required_documents.1') }}</p>
                    <p>1- {{ trans('locale.fund.required_documents.2') }}</p>
                    <p>2- {{ trans('locale.fund.required_documents.3') }}</p>
                    <p>{{ trans('locale.fund.required_documents.4') }}</p>
                    <p>{{ trans('locale.fund.required_documents.5') }}</p>
                </div>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script>
        $(document).on('click', '.col-sm-3', function (e) {
            $(this).addClass('active');
            $('.col-sm-3').not(this).each(function(){
                $(this).removeClass('active');
            });
            var ID = $(this).attr('id');
            $('.col-sm-12.data').each(function(){
                $(this).addClass('hidden');
            });
            $('.'+ID).removeClass('hidden');
        });
    </script>
@stop
