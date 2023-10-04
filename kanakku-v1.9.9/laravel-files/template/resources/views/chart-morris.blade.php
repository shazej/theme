<?php $page="chart-morris";?>
@extends('layout.mainlayout')
@section('content')		
@component('components.breadcrumb')                
    @slot('title') Morris Chart @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_3') Morris Chart @endslot
@endcomponent
    <div class="row">
					
        <!-- Chart -->
        <div class="col-md-6">	
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Bar Chart</div>
                </div>
                <div class="card-body">
                    <div id="morrisBar1"></div>
                </div>
            </div>
        </div>
        <!-- /Chart -->
        
        <!-- Chart -->
        <div class="col-md-6">	
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Stacked Bar Chart </div>
                </div>
                <div class="card-body">
                    <div id="morrisBar3"></div>
                </div>
            </div>
        </div>
        <!-- /Chart -->
        
        <!-- Chart -->
        <div class="col-md-6">	
            <div class="card">
                    <div class="card-header">
                        <div class="card-title">Line Chart</div>
                    </div>
                    <div class="card-body">
                        <div id="morrisLine1"></div>
                    </div>
                </div>
        </div>
        <!-- /Chart -->
        
        
        <!-- Chart -->
        <div class="col-md-6">	
            <div class="card">
                    <div class="card-header">
                        <div class="card-title">Area Chart</div>
                    </div>
                    <div class="card-body">
                        <div id="morrisArea1"></div>
                    </div>
                </div>
        </div>
        <!-- /Chart -->
        
        <!-- Chart -->
        <div class="col-md-6">	
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Line Chart</div>
                </div>
                <div class="card-body">
                    <div id="morrisBar6"></div>
                </div>
            </div>
        </div>
        <!-- /Chart -->
        
        <!-- Chart -->
        <div class="col-md-6">	
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Line Chart</div>
                </div>
                <div class="card-body">
                    <div id="morrisBar7"></div>
                </div>
            </div>
        </div>
        <!-- /Chart -->
        
        <!-- Chart -->
        <div class="col-md-6">	
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Donut Chart</div>
                </div>
                <div class="card-body">
                    <div id="morrisDonut1"></div>
                </div>
            </div>
        </div>
        <!-- /Chart -->
        
    </div>		
@endsection
@section('script')        
   <!-- Chart JS -->
	<script src="{{ URL::asset('/assets/libs/morris/raphael.min.js')}}"></script>
    <script src="{{ URL::asset('/assets/libs/morris/morris.min.js')}}"></script>
    <script src="{{ URL::asset('/assets/libs/morris/chart-datamorris.js')}}"></script>
@endsection