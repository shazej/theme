<?php $page="add-blog";?>
@extends('layout.mainlayout')
@section('content')		
@section('css')
    <link rel="stylesheet" href="{{url('assets/libs/select2/select2.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/bootstrap-datetimepicker.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/feather.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/ckeditor.css')}}">
@endsection 

<div class="row">
    <div class="col-xl-8 offset-xl-2">
    
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Add Post</h3>
                </div>
            </div>
        </div>
        <!-- /Page Header -->
        
        <div class="card">
            <div class="card-body">
                <div class="bank-inner-details">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Title<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" >
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group modal-select-box">
                                <label>Category</label>
                                <select class="select">
                                    <option value="1">Expenses</option>
                                    <option value="2">Sales</option>
                                    <option value="3">profit-loss</option>
                                    </select>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Tag</label>
                                <input type="text" data-role="tagsinput" class="input-tags form-control" placeholder="Enter Tags" name="services" value="Tax ">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Blog Image</label>
                                <div class="change-photo-btn">
                                    <div>
                                    <p>Add Image</p></div>
                                    <input type="file" class="upload">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Description</label>
                                <div id="editor"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" blog-categories-btn pt-0">
                <div class="bank-details-btn ">
                    <a href="{{url('blog')}}" class="btn btn-primary me-2">Add Post</a>
                </div>
            </div>
        </div> 
    </div>
</div>
				
@endsection
@section('script')
    <!-- Feather Icon JS -->
    <script src="{{ URL::asset('assets/libs/feather-icons/feather-icons.min.js')}}"></script> 
    <!-- Select2 JS -->
    <script src="{{ URL::asset('/assets/libs/select2/select2.min.js')}}"></script>   
    <script src="{{ URL::asset('/assets/js/pages/select2.init.js')}}"></script>
    <script src="{{ URL::asset('/assets/js/ckeditor.js')}}"></script>
    <script src="{{ URL::asset('/assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.js')}}"></script> 
    <!-- Datepicker Core JS -->
    <script src="{{ URL::asset('/assets/js/bootstrap-datetimepicker.min.js')}}"></script>
    <script src="{{ URL::asset('/assets/js/pages/datetimepicker.init.js')}}"></script>
@endsection