@extends('includes.main')

@section('title', trans('locale.national_fund'))

@section('styles')
    <style>
        .fund_head h4{
            width: 35%;
            float: left;
            color: #fff;
            letter-spacing: 2px;
        }
        .fund_head img{
            float: left;
            margin-left: -20%;
            margin-top: -4%;
            width: 150px;
        }
        .col-sm-6 iframe{
            border: 2px solid #092b67;
            border-radius: 30px;
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
                    <div class="fund_head col-sm-6">
                        <h4>{{ trans('locale.fund.1') }}</h4>
                        <img src="{{ asset('images/fund_arrow.png') }}">
                        <img src="{{ asset('images/fund_arrow.png') }}">
                        <img src="{{ asset('images/fund_arrow.png') }}">
                    </div>
                    <div class="col-sm-6 mb-20">
                        <iframe width="100%" height="200" src="https://www.youtube.com/embed/sJTAWW9xABg?rel=0" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <p>{{ trans('locale.fund.the_fund.1') }}</p>
                </div>

                <div class="col-sm-12 data two hidden">
                    <div class="fund_head col-sm-12">
                        <h4>{{ trans('locale.fund.2') }}</h4>
                        <img src="{{ asset('images/fund_arrow.png') }}">
                        <img src="{{ asset('images/fund_arrow.png') }}">
                        <img src="{{ asset('images/fund_arrow.png') }}">
                    </div>
                    <p>{{ trans('locale.fund.benefits.1') }}</p>
                    <p>1- {{ trans('locale.fund.benefits.2') }}</p>
                    <p>2- {{ trans('locale.fund.benefits.3') }}</p>
                    <p>3- {{ trans('locale.fund.benefits.4') }}</p>
                    <p>4- {{ trans('locale.fund.benefits.5') }}</p>
                </div>

                <div class="col-sm-12 data three hidden">
                    <p>{{ trans('locale.fund.eligiablity.1') }}</p>
                    <div class="half" style="width: 100%">
                        <form id="myWizard" type="get" action="" class="form-horizontal">
                            <section class="step" data-step-title="The first">
                                <h4 style="text-align: center" class="mb-20 mt-40">{{ trans('locale.funds.1') }}</h4>
                                <div class="row center mt-30">
                                    <button type="button" onclick="gotonext()" class="wow rotateInDownRight yes btn btn-success">{{ trans('locale.funds.2') }}</button>
                                </div>
                            </section>

                            <section class="step" data-step-title="The second">
                                <h4 style="text-align: center" class="mb-20">{{ trans('locale.funds.3') }}</h4>
                                <div class="row center mt-30">
                                    <button type="button" onclick="gotonext()" class="yes btn btn-success">{{ trans('locale.yes') }}</button>
                                    <button data-content="{{ trans('locale.funds.4') }}" class="no btn btn-danger">{{ trans('locale.no') }}</button>
                                </div>
                            </section>

                            <section class="step" data-step-title="The third">
                                <h4 style="text-align: center" class="mb-20 mt-40">{{ trans('locale.funds.5') }}</h4>
                                <div class="row center mt-30">
                                    <button type="button" onclick="gotonext()" class="yes btn btn-success">{{ trans('locale.yes') }}</button>
                                    <button data-content="{{ trans('locale.funds.6') }}" class="no btn btn-danger">{{ trans('locale.no') }}</button>
                                </div>
                            </section>

                            <section class="step" data-step-title="The Fourth">
                                <h4 style="text-align: center" class="mb-20 mt-40">{{ trans('locale.funds.7') }}</h4>
                                <div class="row center mt-30">
                                    <button type="button" onclick="gotonext()" class="yes btn btn-success">{{ trans('locale.yes') }}</button>
                                    <button data-content="{{ trans('locale.funds.8') }}" class="no btn btn-danger">{{ trans('locale.no') }}</button>
                                </div>
                            </section>

                            <section class="step" data-step-title="The Fifth">
                                <h4 style="text-align: center" class="mb-20 mt-40">{{ trans('locale.funds.9') }}</h4>
                                <div class="row center mt-30">
                                    <label class="radio-inline">
                                        <input type="radio" data-content="{{ trans('locale.fund.eligiablity.1') }}" value="one" name="optradio">{{ trans('locale.funds.10') }}
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" data-content="{{ trans('locale.fund.eligiablity.9') }}" value="two" name="optradio">{{ trans('locale.funds.11') }}
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" data-content="{{ trans('locale.fund.eligiablity.7') }}" value="three" name="optradio">{{ trans('locale.funds.12') }}
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" data-content="{{ trans('locale.fund.eligiablity.13') }}" value="four" name="optradio">{{ trans('locale.funds.13') }}
                                    </label>
                                </div>
                                <div class="row center mt-30">
                                    <button type="button" onclick="submit_test()" class="yes btn btn-success">{{ trans('locale.finish') }}</button>
                                </div>
                            </section>
                        </form>
                    </div>
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

    <button id="showModal" class="hidden" data-toggle="modal" data-target="#myModal"></button>
    <button id="showModal1" class="hidden" data-toggle="modal" data-target="#myModalFinal"></button>
    <div class="modal fade error" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                <div class="alert alert-danger">
                    <p id="content_modal_no"></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('locale.close') }}</button>
                </div>
            </div>

        </div>
    </div>

    <div class="modal fade error" id="myModalFinal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="alert alert-success">
                        <p style="text-transform: none;" id="content_modal_final"></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('locale.close') }}</button>
                </div>
            </div>
        </div>
    </div>
    <p class="hidden" id="select">{{ trans('locale.select_first') }}</p>
    <p class="hidden" id="prev">{{ trans('locale.back') }}</p>
@stop

@section('scripts')
{{--    {!! Html::script('js/jquery.easyWizard.js') !!}--}}
    @include('includes.wizard')
    <script>

        $(document).on('click', '.funds .col-sm-3', function (e) {
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

        var prev = $('#prev').text();

        $('#myWizard').easyWizard({
            buttonsClass: 'btn',
            // submitButtonClass: 'btn btn-info',
            showSteps: false,
            submitButton: false,
            prevButton: prev,
            beforeSubmit: function(wizardObj) {
                e.preventDefault();
                $('#myWizard').fadeOut();
            }
        });

        var gotonext = function(){
            $('#myWizard').easyWizard('nextStep');
        };

        var submit_test = function(){
            var radioValue = $("input[name='optradio']:checked");

            if(radioValue.val() == 'one'){
                $('#showModal1').click();
                var data = radioValue.attr('data-content');
                $('#content_modal_final').html(data);
            }
            else if(radioValue.val() == 'two'){
                $('#showModal1').click();
                var data = radioValue.attr('data-content');
                $('#content_modal_final').html(data);
            }
            else if(radioValue.val() == 'three'){
                $('#showModal1').click();
                var data = radioValue.attr('data-content');
                $('#content_modal_final').html(data);
            }
            else if(radioValue.val() == 'four'){
                $('#showModal1').click();
                var data = radioValue.attr('data-content');
                $('#content_modal_final').html(data);
            }
            else {
                $('#showModal').click();
                var data = $("#select").text();
                $('#content_modal_no').html(data);
            }
        };

        $(document).on('click', '.no', function (e) {
            e.preventDefault();
            $('#showModal').click();
            var data = $(this).attr('data-content');
            $('#content_modal_no').html(data);
        });
    </script>
@stop
