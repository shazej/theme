<?php $page="chart-flot";?>
@extends('layout.mainlayout')
@section('content')		
@component('components.breadcrumb')                
    @slot('title') Flot Chart @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_3') Flot Chart @endslot
@endcomponent
    <div class="row">
					
        <!-- Chart -->
        <div class="col-md-6">	
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Bar Chart</div>
                </div>
                <div class="card-body">
                    <div class="h-250" id="flotBar1"></div>
                </div>
            </div>
        </div>
        <!-- /Chart -->
        
        <!-- Chart -->
        <div class="col-md-6">	
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Bar Chart</div>
                </div>
                <div class="card-body">
                    <div  class="h-250" id="flotBar2"></div>
                </div>
            </div>
        </div>
        <!-- /Chart -->
        
        <!-- Chart -->
        <div class="col-md-6">	
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Line  Chart</div>
                </div>
                <div class="card-body">
                    <div  class="h-250" id="flotLine1"></div>
                </div>
            </div>
        </div>
        <!-- /Chart -->
        
        <!-- Chart -->
        <div class="col-md-6">	
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Line ChartPOints</div>
                </div>
                <div class="card-body">
                    <div class="h-250" id="flotLine2"></div>
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
                    <div class="h-250" id="flotArea1"></div>
                </div>
            </div>
        </div>
        <!-- /Chart -->
        
        <!-- Chart -->
        <div class="col-md-6">	
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Area Chart Points</div>
                </div>
                <div class="card-body">
                    <div class="h-250" id="flotArea2"></div>
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
                    <div class="h-250" id="flotPie1"></div>
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
                    <div class="h-250" id="flotPie2"></div>
                </div>
            </div>
        </div>
        <!-- /Chart -->
        
    </div>		
@endsection
@section('script')        
   <!-- Chart JS -->
	<script src="{{ URL::asset('/assets/libs/flot/jquery.flot.js')}}"></script>
	<script src="{{ URL::asset('/assets/libs/flot/jquery.flot.fillbetween.js')}}"></script>
    <script src="{{ URL::asset('/assets/libs/flot/jquery.flot.pie.js')}}"></script>
    <script src="{{ URL::asset('/assets/libs/flot/chart-dataflot.js')}}"></script>
@endsection