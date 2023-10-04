<?php $page="stickynote";?>
@extends('layout.mainlayout')
@section('content')		
@component('components.breadcrumb')                
    @slot('title') Sticky Note @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_3') Sticky Note @endslot
@endcomponent
@section('css')        
    <!-- Feather CSS -->
		<link rel="stylesheet" href="{{url('assets/libs/icons/stickynote/sticky.css')}}">
@endsection	
        <div class="row">
        
            <!-- Sticky -->
            <div class="col-md-12">	
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Sticky Note <a class="btn btn-primary float-sm-end m-l-10" id="add_new" href="javascript:;">Add New Note</a></h5>
                    </div>
                    <div class="card-body">
                            <div class="sticky-note" id="board"></div>
                    </div>
                </div>
            </div>
            <!-- /Sticky -->
                
        </div>
@endsection
@section('script')  
<!-- Feather Icon JS -->
<script src="{{ URL::asset('/assets/libs/icons/stickynote/jquery-ui.min.js')}}"></script>
<script src="{{ URL::asset('/assets/libs/icons/stickynote/sticky.js')}}"></script>
@endsection