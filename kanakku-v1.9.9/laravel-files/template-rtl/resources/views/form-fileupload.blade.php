<?php $page="form-fileupload";?>
@extends('layout.mainlayout')
@section('content')		
@component('components.breadcrumb')                
    @slot('title') File Upload @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_3') File Upload @endslot
@endcomponent

        <div class="row">
        
            <!-- Drag Card -->					
            <div class="col-md-12">	
            
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Single File Upload</h5>
                    </div>
                    <div class="card-body">
                        <div class="custom-file-container" data-upload-id="myFirstImage">
                            <label>Upload (Single File) <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                            <label class="custom-file-container__custom-file" >
                                <input type="file" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
                                <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                <span class="custom-file-container__custom-file__custom-file-control"></span>
                            </label>
                            <div class="custom-file-container__image-preview"></div>
                        </div>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Multiple File Upload</h5>
                    </div>
                    <div class="card-body">
                        <div class="custom-file-container" data-upload-id="mySecondImage">
                            <label>Upload (Allow Multiple) <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                            <label class="custom-file-container__custom-file" >
                                <input type="file" class="custom-file-container__custom-file__custom-file-input" multiple>
                                <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                <span class="custom-file-container__custom-file__custom-file-control"></span>
                            </label>
                            <div class="custom-file-container__image-preview"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Drag Card -->
            
        </div>
@endsection
@section('script')  
<!-- Feather Icon JS -->
<script src="{{ URL::asset('/assets/js/fileupload.min.js')}}"></script>
@endsection