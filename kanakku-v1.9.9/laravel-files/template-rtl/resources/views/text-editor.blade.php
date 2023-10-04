<?php $page="text-editor";?>
@extends('layout.mainlayout')
@section('content')		
@component('components.breadcrumb')                
    @slot('title') Text Editor @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_3') Text Editor @endslot
@endcomponent
@section('css')        
    <!-- Feather CSS -->
		<link rel="stylesheet" href="{{url('assets/libs/summernote/dist/summernote-bs4.min.css')}}">
@endsection	
    <div class="row">
					
        <!-- Editor -->
        <div class="col-md-12">	
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Editor</h5>
                </div>
                <div class="card-body">
                    <div id="summernote"></div>
                </div>
            </div>
        </div>
        <!-- /Editor -->
            
    </div>
@endsection
@section('script')  
<!-- Feather Icon JS -->
<script src="{{ URL::asset('/assets/libs/summernote/dist/summernote-bs4.min.js')}}"></script>
@endsection