<?php $page="notification";?>
@extends('layout.mainlayout')
@section('content')		
@component('components.breadcrumb')                
    @slot('title') Notification @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_3') Notification @endslot
@endcomponent
@section('css')        
    <!-- Feather CSS -->
		<link rel="stylesheet" href="{{url('assets/libs/alertify/alertify.min.css')}}">
@endsection	
        <div class="row">
					
            <!-- Alert -->
            <div class="col-md-4">	
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Alert</div>
                    </div>
                    <div class="card-body">
                            <a href="javascript: void(0);"  id="alert" class="btn btn-primary waves-effect waves-light">Click me</a>
                    </div>
                </div>
            </div>
            <!-- /Alert -->
            
            <!-- Alert -->
            <div class="col-md-4">	
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Confirm</div>
                    </div>
                    <div class="card-body">
                            <a href="javascript: void(0);"  id="alert-confirm" class="btn btn-primary waves-effect waves-light">Click me</a>
                    </div>
                </div>
            </div>
            <!-- /Alert -->
            
            <!-- Alert -->
            <div class="col-md-4">	
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Prompt</div>
                    </div>
                    <div class="card-body">
                            <a href="javascript: void(0);"  id="alert-prompt" class="btn btn-primary waves-effect waves-light">Click me</a>
                    </div>
                </div>
            </div>
            <!-- /Alert -->
            
            <!-- Alert -->
            <div class="col-md-4">	
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Success Alert</div>
                    </div>
                    <div class="card-body">
                            <a href="javascript: void(0);"  id="alert-success" class="btn btn-primary btn-sm waves-effect waves-light">Click me</a>
                    </div>
                </div>
            </div>
            <!-- /Alert -->
            
            <!-- Alert -->
            <div class="col-md-4">	
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Error Alert</div>
                    </div>
                    <div class="card-body">
                            <a href="javascript: void(0);"  id="alert-error" class="btn btn-primary btn-sm waves-effect waves-light">Click me</a>
                    </div>
                </div>
            </div>
            <!-- /Alert -->
            
            <!-- Alert -->
            <div class="col-md-4">	
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Warnng Alert</div>
                    </div>
                    <div class="card-body">
                            <a href="javascript: void(0);"  id="alert-warning" class="btn btn-primary btn-sm waves-effect waves-light">Click me</a>
                    </div>
                </div>
            </div>
            <!-- /Alert -->
            
        </div>
        
@endsection
@section('script')  
<!-- Feather Icon JS -->
<script src="{{ URL::asset('/assets/libs/alertify/alertify.min.js')}}"></script>
<script src="{{ URL::asset('/assets/libs/alertify/custom-alertify.min.js')}}"></script>
@endsection
