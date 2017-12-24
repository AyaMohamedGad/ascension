@extends('layouts.master')

@section('title', 'Courses\' Time')

@section('content')
    <div class="page-content">
        @include('includes.admin.table', ['header' => $header, 'table' => $table, 'actions' => $actions])
    </div>
@stop

