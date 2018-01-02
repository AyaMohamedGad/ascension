@extends('includes.main')

@section('title', trans('locale.national_fund'))

@section('styles')
    <style>
    .new_tab{
        position: relative; 
        margin-bottom: 5px;
        display: block;
        padding: 0 0 0 1em;
        background: #092b67;
        line-height: 3;
        color: #fff;
        letter-spacing: 1px;
    }
    .popover-content{
        color:black;
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
                    <p>{{ trans('locale.fund.benefits.1') }}</p>
                    <p>1- {{ trans('locale.fund.benefits.2') }}</p>
                    <p>2- {{ trans('locale.fund.benefits.3') }}</p>
                    <p>3- {{ trans('locale.fund.benefits.4') }}</p>
                    <p>4- {{ trans('locale.fund.benefits.5') }}</p>
                </div>

                <div class="col-sm-12 data three hidden">
                    <p>{{ trans('locale.fund.eligiablity.1') }}</p>
                    <div class="half">
                        <form id="myWizard" type="get" action="" class="form-horizontal">
                            <section class="step" data-step-title="The first">
                                <h4 style="text-align: center" class="mb-20 mt-40">{{ trans('locale.funds.1') }}</h4>
                                <div class="row center mt-30">
                                    <button type="button" onclick="gotonext()" class="yes btn btn-success">{{ trans('locale.yes') }}</button>
                                    <button class="no btn btn-danger">{{ trans('locale.no') }}</button>
                                </div>
                            </section>

                            <section class="step" data-step-title="The second">
                                <h3 style="text-align: center" class="mt-40">{{ trans('locale.funds.2') }}</h3>
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
                                        <input type="radio" name="optradio">{{ trans('locale.funds.10') }}
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="optradio">{{ trans('locale.funds.11') }}
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="optradio">{{ trans('locale.funds.12') }}
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="optradio">{{ trans('locale.funds.13') }}
                                    </label>
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
    <div class="modal fade error" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <p id="content"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('locale.close') }}</button>
                </div>
            </div>

        </div>
    </div>
@stop

@section('scripts')
    {!! Html::script('js/jquery.easyWizard.js') !!}
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

        $('#myWizard').easyWizard({
            buttonsClass: 'btn',
            submitButtonClass: 'btn btn-info',
            showSteps: false,
            beforeSubmit: function(wizardObj) {
                e.preventDefault();
                $('#myWizard').fadeOut();
            }
        });

        var gotonext = function(){
            $('#myWizard').easyWizard('nextStep');
        }
        $(document).on('click', '.no', function (e) {
            e.preventDefault();
            var data = $(this).attr('data-content');
            $('#content').html(data);
            $('#showModal').click();
        });
    </script>
@stop
