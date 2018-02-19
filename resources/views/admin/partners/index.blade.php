@extends('layouts.master')

@section('title', 'Partners')

@section('styles')
    {!! Html::style('css/form.css') !!}
    <style>
        .form-group.col-sm-12{padding-left: 0 !important;}
        .side_image{margin-bottom:20px;}
        .removeImage{background:#f90000;width:20px;height:20px;text-align:center;padding-top:3px;border-radius:50%;color:#fff;position:absolute;top:5px;right:20px;}
        .col-sm-2{margin-left:0 !important;}
    </style>
@stop

@section('content')
    <div class="page-content">
        {{ Form::open(['route' => 'UpdatePartner', 'class' => 'form', 'files' => true]) }}
            @if(count($partners) > 0)
                <div class="images form-group col-sm-12">
                    <input type="hidden" name="old_partners[]" id="old_screens" value="">
                    @foreach($partners as $key => $partner)
                        <div class="col-sm-2" style="margin-bottom:15px;">
                            <img src="{{ asset('images/partners/' . $partner->image) }}" alt=>
                            <a href="#"><i class="fa fa-close removeImage" data-id="{{$partner->id}}"></i></a>
                        </div>
                    @endforeach
                </div>
            @endif

            <br>

            <div class="form-group top10 has-float-label col-sm-12">
                <label for="photos">Images</label>
                <input id="images" type="file" name="partners[]" class="form-control" multiple="">
                <small class="text-danger">{{ $errors->has('partners') ? $errors->first('partners') : '' }}</small>
            </div>

            <div class="form-group has-float-label col-sm-12">
                {{ Form::submit('Save', ['class' => 'btn-sm btn btn-primary']) }}
            </div>
        {{ Form::close() }}
    </div>
@stop


@section('scripts')
    <script>
        @if(count($partners) > 0)
            screens = {{json_encode($partners->pluck('id'))}};
            $('#old_screens').val(screens);
        @endif

        $(document).ready(function () {
            var photos = $('#old_screens').val();
            if(photos.length <= 1 || photos == "") {
                $('#images').attr('required', 'required');
            }
        });
        $(document).on('click', '.removeImage', function (e) {
            e.preventDefault();
            var ID = $(e.target).attr('data-id');
            screens = $.grep(screens, function(value) {
                return value != ID;
            });
            $('#old_screens').val(screens);
            if(screens.length <= 1) {
                $('#images').attr('required', 'required');
            }
            $(e.target).parent().parent().remove();
        });
    </script>
@stop

