@extends('layouts.master')

@section('title', 'View Adventure')

@section('styles')
    <style>
        .profile-picture{border: 0 !important;box-shadow: none !important;}
        .icon{margin-left: 5px;}
        .disabled a{background-color: #b1b1b1 !important;}
        .tab-pane.in{margin-top: 20px;}
        .tab-pane .col-sm-12{padding-left: 0 !important;}
        .alpha{font-size:1.3em;}
        hr{margin:2px 0!important;}
    </style>
@stop

@section('content')
    <div class="page-content">
        <div class="col-md-12">
            <div class="page-header">
                <h1><i class="menu-icon fa fa-image"></i> {{ $theNew->translations()->where('language', 'en')->pluck('title')->first() }}</h1>
            </div>
        </div>

        <div class="col-md-12">
            <div id="user-profile-1" class="user-profile row">
                <div class="col-xs-12 col-sm-3 center">
                    <div>
                        <div class="profile-picture">
                            <img id="avatar" class="editable img-responsive" alt="Image" src="{{ asset('images/news/' . $theNew->image) }}" />
                        </div>
                        <div class="space-10"></div>
                    </div>
                </div>

                <div class="profile-user-info profile-user-info-striped">
                    <div class="profile-info-row">
                        <div class="profile-info-name">Date</div>
                        <div class="profile-info-value">
                            <span class="editable">{{ $theNew->date }}</span>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12">
                    <h3 class="header smaller lighter blue">English Data: </h3>
                    <div class="profile-user-info profile-user-info-striped">
                        <div class="profile-info-row">
                            <div class="profile-info-name">Title</div>
                            <div class="profile-info-value">
                                <span class="editable">{{ $theNew->translations()->where('language', 'en')->pluck('title')->first() }}</span>
                            </div>
                        </div>

                        <div class="profile-info-row">
                            <div class="profile-info-name">Description</div>
                            <div class="profile-info-value">
                                <span class="editable">{!! $theNew->translations()->where('language', 'en')->pluck('description')->first() !!}</span>
                            </div>
                        </div>
                    </div>
                    <div class="space-10"></div>
                </div>

                <div class="col-xs-12">
                    <h3 class="header smaller lighter blue">Arabic Data: </h3>
                    <div class="profile-user-info profile-user-info-striped">
                        <div class="profile-info-row">
                            <div class="profile-info-name">Title</div>
                            <div class="profile-info-value">
                                <span class="editable">{{ $theNew->translations()->where('language', 'ar')->pluck('title')->first() }}</span>
                            </div>
                        </div>

                        <div class="profile-info-row">
                            <div class="profile-info-name">Description</div>
                            <div class="profile-info-value">
                                <span class="editable">{!! $theNew->translations()->where('language', 'ar')->pluck('description')->first() !!}</span>
                            </div>
                        </div>
                    </div>
                    <div class="space-10"></div>
                </div>
            </div>
        </div>
    </div>
@stop