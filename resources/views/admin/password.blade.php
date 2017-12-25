@extends('layouts.master')

@section('title', 'Change Password')

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
                <h1><i class="menu-icon fa fa-pencil"></i> Change Password</h1>
            </div>
        </div>

        <div class="col-md-12">
            {{ Form::open(['route' => 'SavePassword', 'class' => 'form']) }}
                <div class="form-group has-float-label col-sm-12">
                    {{ Form::password('old_password', ['required' => 'required', 'placeholder' => 'Old Password', 'class' => 'form-control ' . ($errors->has('old_password') ? 'redborder' : '')]) }}
                    <label for="old_password">Old Password <span class="astric">*</span></label>
                    <small class="text-danger">{{ $errors->has('old_password') ? $errors->first('old_password') : '' }}</small>
                    <small class="text-danger">{{ (isset($error) ? 'Old Password doesn\'t match' : '') }}</small>
                </div>

                <div class="form-group has-float-label col-sm-12">
                    {{ Form::password('new_password', ['required' => 'required', 'placeholder' => 'New Password', 'id' => 'password', 'class' => 'form-control ' . ($errors->has('new_password') ? 'redborder' : '')]) }}
                    <label for="new_password">New Password <span class="astric">*</span></label>
                    <small class="text-new_password">{{ $errors->has('new_password') ? $errors->first('new_password') : '' }}</small>
                </div>

                <div class="form-group has-float-label col-sm-12">
                    {{ Form::password('confirm_password', ['required' => 'required', 'placeholder' => 'Confirm Password', 'id' => 'confirm', 'class' => 'form-control ' . ($errors->has('confirm_password') ? 'redborder' : '')]) }}
                    <label for="confirm_password">Confirm Password <span class="astric">*</span></label>
                    <small class="text-danger">{{ $errors->has('confirm_password') ? $errors->first('confirm_password') : '' }}</small>
                    <small class="text-danger hidden" id="error">Passwords doesn't match.</small>
                </div>

                <div class="col-sm-12">
                    {{ Form::submit('Save', ['id' => 'submit', 'class' => 'btn btn-sm btn-primary']) }}
                </div>
            {{ Form::close() }}
        </div>
    </div>
@stop

@section('scripts')
    <script>
        $(document).on('click', '#submit', function (e) {
            $('#error').addClass('hidden');
            var pass = $('#password').val();
            var confirm = $('#confirm').val();
            if(pass != confirm){
                e.preventDefault();
                $('#error').removeClass('hidden');
            }
        });
    </script>
@stop