@extends('layouts.master')

@section('title', 'Edit New')

@section('styles')
    {!! Html::style('css/form.css') !!}
    <style>
        .form-group.col-sm-12,.col-sm-10{padding-left: 0 !important;}
    </style>
@stop

@section('content')
    <div class="page-content">
        <div class="col-md-12">
            <div class="page-header">
                <h1><i class="menu-icon fa fa-pencil"></i> Edit New</h1>
            </div>
        </div>

        <div class="col-md-12">
            {{ Form::model($theNew, ['route' => ['UpdateNew' , $theNew->id], 'class' => 'form', 'files' => true, 'method' => 'PUT']) }}
                @include('admin.news.form', ['btn' => 'Save', 'classes' => 'btn btn-primary'])
            {{ Form::close() }}
        </div>
    </div>
@stop

@section('scripts')
    <script>
        $(document).ready(function(){
            $('textarea').each(function () {
                CKEDITOR.replace($(this).attr('id'));
            });
        });
    </script>
@stop
