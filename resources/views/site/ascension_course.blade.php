@extends('includes.main')

@section('title', trans('locale.ascension').trans('locale.ers'))

@section('content')
    <div class="container clearfix" data-ref="mixitup-container">
        <div class="header_normal_cover">
            <h2 class="header">{{ trans('locale.ascension_courses') }}</h2>
        </div>

        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#finance">{{ trans ('locale.accounting_finance')}}</a></li>
            <li><a data-toggle="tab" href="#business">{{ trans ('locale.business_management')}}</a></li>
            <li><a data-toggle="tab" href="#hr_man">{{ trans ('locale.hr_management')}}</a></li>
        </ul>

        <div class="tab-content">
            <div id="finance" class="tab-pane fade in active">
                <h3>HOME</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.</p>
            </div>
            <div id="business" class="tab-pane fade">
                <h3>Menu 1</h3>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.</p>
            </div>
            <div id="hr_man" class="tab-pane fade">
                <h3>Menu 2</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                    totam rem aperiam.</p>
            </div>
        </div>
    </div>
@stop
