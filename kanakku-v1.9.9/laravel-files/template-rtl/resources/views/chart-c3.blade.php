<?php $page="chart-c3";?>
@extends('layout.mainlayout')
@section('content')		
@component('components.breadcrumb')                
    @slot('title') Flot Chart @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_3') Flot Chart @endslot
@endcomponent
@section('css')
		<!-- c3-chart CSS -->
        <link rel="stylesheet" href="{{url('assets/libs/c3/c3.min.css')}}">
@endsection 
        <div class="row">
					
            <!-- Chart -->
            <div class="col-md-6">	
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Bar Chart</div>
                    </div>
                    <div class="card-body">
                        <div id="chart-bar-stacked"></div>
                    </div>
                </div>
            </div>
            <!-- /Chart -->
            
            <!-- Chart -->
            <div class="col-md-6">	
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Multiple Bar Chart</div>
                    </div>
                    <div class="card-body">
                        <div  id="chart-bar"></div>
                    </div>
                </div>
            </div>
            <!-- /Chart -->
            
            <!-- Chart -->
            <div class="col-md-6">	
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Horizontal Bar Chart</div>
                    </div>
                    <div class="card-body">
                        <div  id="chart-bar-rotated" ></div>
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
                        <div id="chart-sracked"></div>
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
                        <div id="chart-spline-rotated"></div>
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
                        <div id="chart-area-spline-sracked"></div>
                    </div>
                </div>
            </div>
            <!-- /Chart -->
            
            <!-- Chart -->
            <div class="col-md-6">	
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Pie Chart</div>
                    </div>
                    <div class="card-body">
                        <div id="chart-pie"></div>
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
                        <div id="chart-donut"></div>
                    </div>
                </div>
            </div>
            <!-- /Chart -->
            
        </div>
@endsection
@section('script')        
   <!-- Chart JS -->
	<script src="{{ URL::asset('/assets/libs/c3/d3.min.js')}}"></script>
	<script src="{{ URL::asset('/assets/libs/c3/c3.min.js')}}"></script>
    <script src="{{ URL::asset('/assets/libs/c3/chart-datac3.js')}}"></script>
@endsection