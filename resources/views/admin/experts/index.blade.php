@extends('layouts.master')

@section('title', 'Experts')

@section('content')
    <div class="page-content">
        @include('includes.admin.table', ['header' => $header, 'table' => $table, 'languages' => $languages, 'actions' => $actions])
    </div>
@stop

