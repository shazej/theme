<?php $page="rangeslider";?>
@extends('layout.mainlayout')
@section('content')		
@component('components.breadcrumb')                
    @slot('title') Range Slider @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_3') Range Slider @endslot
@endcomponent
@section('css')        
    <!-- Feather CSS -->
		<link rel="stylesheet" href="{{url('assets/libs/ion-rangeslider/ion.rangeSlider.min.css')}}">
@endsection	
        <div class="row">
					
            <!-- Rangeslider -->
            <div class="col-md-6">	
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Default</h5>
                    </div>
                    <div class="card-body">
                            <input type="text" id="range_01">
                    </div>
                </div>
            </div>
            <!-- /Rangeslider -->
            
            <!-- Rangeslider -->
            <div class="col-md-6">	
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Min-Max</h5>
                    </div>
                    <div class="card-body">
                            <input type="text" id="range_02">
                    </div>
                </div>
            </div>
            <!-- /Rangeslider -->
            
            <!-- Rangeslider -->
            <div class="col-md-6">	
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Prefix</h5>
                    </div>
                    <div class="card-body">
                            <input type="text" id="range_03">
                    </div>
                </div>
            </div>
            <!-- /Rangeslider -->
            
            <!-- Rangeslider -->
            <div class="col-md-6">	
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Range</h5>
                    </div>
                    <div class="card-body">
                            <input type="text" id="range_04">
                    </div>
                </div>
            </div>
            <!-- /Rangeslider -->
            
            <!-- Rangeslider -->
            <div class="col-md-6">	
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Step</h5>
                    </div>
                    <div class="card-body">
                            <input type="text" id="range_05">
                    </div>
                </div>
            </div>
            <!-- /Rangeslider -->
            
            <!-- Rangeslider -->
            <div class="col-md-6">	
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Custom Values</h5>
                    </div>
                    <div class="card-body">
                            <input type="text" id="range_06">
                    </div>
                </div>
            </div>
            <!-- /Rangeslider -->
            
            <!-- Rangeslider -->
            <div class="col-md-6">	
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Modern skin</h5>
                    </div>
                    <div class="card-body">
                            <input type="text" id="range_13">
                    </div>
                </div>
            </div>
            <!-- /Rangeslider -->
            
            <!-- Rangeslider -->
            <div class="col-md-6">	
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Sharp Skin</h5>
                    </div>
                    <div class="card-body">
                            <input type="text" id="range_14">
                    </div>
                </div>
            </div>
            <!-- /Rangeslider -->
            
            <!-- Rangeslider -->
            <div class="col-md-6">	
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Round skin</h5>
                    </div>
                    <div class="card-body">
                            <input type="text" id="range_15">
                    </div>
                </div>
            </div>
            <!-- /Rangeslider -->
            
            <!-- Rangeslider -->
            <div class="col-md-6">	
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Square Skin</h5>
                    </div>
                    <div class="card-body">
                            <input type="text" id="range_16">
                    </div>
                </div>
            </div>
            <!-- /Rangeslider -->
            
                
        </div>	
@endsection
@section('script')  
<!-- Feather Icon JS -->
<script src="{{ URL::asset('/assets/libs/ion-rangeslider/ion.rangeSlider.min.js')}}"></script>
<script src="{{ URL::asset('/assets/libs/ion-rangeslider/custom-rangeslider.js')}}"></script>
@endsection