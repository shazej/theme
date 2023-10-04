<?php $page="chart-apex";?>
@extends('layout.mainlayout')
@section('content')		
@component('components.breadcrumb')                
    @slot('title') Charts @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_3') Charts @endslot
@endcomponent
	<div class="row">
					
		<!-- Chart -->
		<div class="col-md-6">	
			<div class="card">
				<div class="card-header">
					<h5 class="card-title">Apex Simple</h5>
				</div>
				<div class="card-body">
					<div id="s-line"></div>
				</div>
			</div>
		</div>
		<!-- /Chart -->
			
		<!-- Chart -->
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					<h5 class="card-title">Area Chart</h5>
				</div>
				<div class="card-body">
					<div id="s-line-area"></div>
				</div>
			</div>
		</div>
		<!-- /Chart -->
			
		<!-- Chart -->
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					<h5 class="card-title">Column Chart</h5>
				</div>
				<div class="card-body">
					<div id="s-col"></div>
				</div>
			</div>
		</div>
		<!-- /Chart -->
		
		<!-- Chart -->
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					<h5 class="card-title">Column Stacked Chart</h5>
				</div>
				<div class="card-body">
					<div id="s-col-stacked"></div>
				</div>
			</div>
		</div>
		<!-- /Chart -->
		
		
		<!-- Chart -->
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					<h5 class="card-title">Bar Chart</h5>
				</div>
				<div class="card-body">
					<div id="s-bar"></div>
				</div>
			</div>
		</div>
		<!-- /Chart -->
		
		<!-- Chart -->
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					<h5 class="card-title">Mixed Chart</h5>
				</div>
				<div class="card-body">
					<div id="mixed-chart"></div>
				</div>
			</div>
		</div>
		<!-- /Chart -->
		
		<!-- Chart -->
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					<h5 class="card-title">Donut Chart</h5>
				</div>
				<div class="card-body">
					<div id="donut-chart"></div>
				</div>
			</div>
		</div>
		<!-- /Chart -->
		
		<!-- Chart -->
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					<h5 class="card-title">Radial Chart</h5>
				</div>
				<div class="card-body">
					<div id="radial-chart"></div>
				</div>
			</div>
		</div>
		<!-- /Chart -->
		
	</div>		
@endsection
@section('script')        
    <!-- Chart JS -->
	<script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js')}}"></script>
	<script src="{{ URL::asset('/assets/js/pages/chart-data.init.js')}}"></script>
@endsection