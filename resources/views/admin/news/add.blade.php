@extends('layouts.master')

@section('title', 'Add New')

@section('styles')
    {!! Html::style('css/form.css') !!}
    <style>
        h3.header{margin-top: 0;}
        .form-group.col-sm-12{padding-left: 0 !important;}
    </style>
@stop

@section('content')
    <div class="page-content">
        <div class="col-md-12">
            <div class="page-header">
                <h1><i class="menu-icon fa fa-magic"></i> Add New</h1>
            </div>
        </div>

        <div class="col-md-12">
            {{ Form::open(['route' => 'CreateNew', 'class' => 'form', 'files' => true]) }}
                @include('admin.news.form', ['btn' => 'Save', 'classes' => 'btn btn-primary'])
            {{ Form::close() }}
        </div>
    </div>
@stop