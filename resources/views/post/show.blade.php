@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body p-0">
                    <div class="iq-edit-list usr-edit">
                        <ul class="iq-edit-profile d-flex nav nav-pills">
                            <li class="col-md-3 p-0"> <a class="nav-link active" data-toggle="pill" href="#personal-information">
                                    {{ __('main.Posts') }}
                                </a> </li>
                            <li class="col-md-3 p-0"> <a class="nav-link" data-toggle="pill" href="#chang-pwd">
                                    {{ __('main.choose_comm') }}
                                </a> </li>
                            <li class="col-md-3 p-0"> <a class="nav-link" data-toggle="pill" href="#emailandsms">
                                    {{ __('main.registered_user') }}
                                </a> </li>
                            <li class="col-md-3 p-0"> <a class="nav-link" data-toggle="pill" href="#manage-contact">
                                    {{ __('main.documents') }}
                                </a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="iq-edit-list-data">
                <div class="tab-content">
                    @include('post.includes.personal-information')
                    @include('post.includes.chang-pwd')
                    @include('post.includes.emailandsms')
                    @include('post.includes.manage-contact')
                </div>
            </div>
        </div>
    </div>
@endsection
