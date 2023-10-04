<?php $page="avatar";?>
@extends('layout.mainlayout')
@section('content')		
@component('components.breadcrumb')                
    @slot('title') Avatar @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_3') Components @endslot
@endcomponent 	
<!-- Avatar -->
<div class="row">
    <div class="col-md-12">
        <div class="card bg-white">
            <div class="card-header">
                <h5 class="card-title">Sizing</h5>
            </div>
            <div class="card-body">
                <div class="avatar avatar-xxl">
                    <img class="avatar-img rounded-circle" alt="User Image" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}">
                </div>
                <div class="avatar avatar-xl">
                    <img class="avatar-img rounded-circle" alt="User Image" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}">
                </div>
                <div class="avatar avatar-lg">
                    <img class="avatar-img rounded-circle" alt="User Image" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}">
                </div>
                <div class="avatar">
                    <img class="avatar-img rounded-circle" alt="User Image" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}">
                </div>
                <div class="avatar avatar-sm">
                    <img class="avatar-img rounded-circle" alt="User Image" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}">
                </div>
                <div class="avatar avatar-xs">
                    <img class="avatar-img rounded-circle" alt="User Image" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}">
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card bg-white">
            <div class="card-header">
                <h5 class="card-title">Avatar With Status</h5>
            </div>
            <div class="card-body">
                <div class="avatar avatar-online">
                    <img class="avatar-img rounded-circle" alt="User Image" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}">
                </div>
                <div class="avatar avatar-offline">
                    <img class="avatar-img rounded-circle" alt="User Image" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}">
                </div>
                <div class="avatar avatar-away">
                    <img class="avatar-img rounded-circle" alt="User Image" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}">
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card bg-white">
            <div class="card-header">
                <h5 class="card-title">Shape</h5>
            </div>
            <div class="card-body">
                <div class="avatar">
                    <img class="avatar-img rounded" alt="User Image" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}">
                </div>
                <div class="avatar">
                    <img class="avatar-img rounded-circle" alt="User Image" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}">
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card bg-white">
            <div class="card-header">
                <h5 class="card-title">Group</h5>
            </div>
            <div class="card-body">
                <div class="avatar-group">
                    <div class="avatar">
                        <img class="avatar-img rounded-circle border border-white" alt="User Image" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}">
                    </div>
                    <div class="avatar">
                        <img class="avatar-img rounded-circle border border-white" alt="User Image" src="{{ URL::asset('/assets/img/profiles/avatar-03.jpg')}}">
                    </div>
                    <div class="avatar">
                        <img class="avatar-img rounded-circle border border-white" alt="User Image" src="{{ URL::asset('/assets/img/profiles/avatar-04.jpg')}}">
                    </div>
                    <div class="avatar">
                        <span class="avatar-title rounded-circle border border-white">CF</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Avatar -->	
@endsection