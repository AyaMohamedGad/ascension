@extends('layouts.master')

@section('title', 'Edit Course Time')

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
                <h1><i class="menu-icon fa fa-pencil"></i> Edit Course Time</h1>
            </div>
        </div>

        <div class="col-md-12">
            {{ Form::model($course, ['route' => ['UpdateCourse' , $course->id], 'class' => 'form', 'method' => 'PUT']) }}
                <h3 style="text-transform:uppercase;margin:0 0 30px;">{{ $course->name }} Course :</h3>
                <div class="form-group has-float-label col-sm-12">
                    {{ Form::date('reg', (isset($course) ? $course->reg : old('reg')), ['required' => 'required', 'placeholder' => 'REG', 'class' => 'form-control ' . ($errors->has('reg') ? 'redborder' : '')]) }}
                    <label for="reg">REG <span class="astric">*</span></label>
                    <small class="text-danger">{{ $errors->has('reg') ? $errors->first('reg') : '' }}</small>
                </div>

                <div class="form-group has-float-label col-sm-12">
                    {{ Form::date('far', (isset($course) ? $course->far : old('far')), ['required' => 'required', 'placeholder' => 'FAR', 'class' => 'form-control ' . ($errors->has('far') ? 'redborder' : '')]) }}
                    <label for="far">FAR <span class="astric">*</span></label>
                    <small class="text-danger">{{ $errors->has('far') ? $errors->first('far') : '' }}</small>
                </div>

                <div class="col-sm-12">
                    {{ Form::submit('Save', ['class' => 'btn btn-sm btn-primary']) }}
                </div>
            {{ Form::close() }}
        </div>
    </div>
@stop