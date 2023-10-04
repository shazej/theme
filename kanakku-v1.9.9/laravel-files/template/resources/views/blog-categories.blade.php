<?php $page="blog-categories";?>
@extends('layout.mainlayout')
@section('content')		
@section('css')
		<link rel="stylesheet" href="{{url('assets/css/feather.css')}}">
	@endsection 
     
        <!-- Page Header -->
        <div class="page-header">
                        <div class="row">
                            <div class="col">
                                <h3 class="page-title">Categories</h3>
                            </div>
                            <div class="col-auto text-end">
                                <a href="#" class="btn btn-primary btn-blog mb-3" data-bs-toggle="modal" data-bs-target="#blog-categories" ><i class="feather-plus-circle me-1"></i> Add New</a>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card categories-table">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table custom-table mb-0 datatables">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Category Name</th>
                                                    <th>Date</th>
                                                    <th>Added By</th>
                                                    <th>Status</th>
                                                    <th class="text-end">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Sales</td>
                                                    <td>10/04/22</td>
                                                    <td>Admin</td>
                                                    <td>
                                                        <div class="status-toggle">
                                                            <input id="rating_1" class="check" type="checkbox">
                                                            <label for="rating_1" class="checktoggle checkbox-bg">checkbox</label>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#" class="table-action-btn btn btn-sm bg-success-light" data-bs-toggle="modal" data-bs-target="#edit-blog-categories">
                                                            <i class="feather-edit-3 me-1"></i> Edit
                                                        </a>
                                                        <a href="#" class="table-action-btn btn btn-sm bg-danger-light" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                                            <i class="feather-trash-2 me-1"></i> Delete
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Expenses</td>
                                                    <td>10/04/22</td>
                                                    <td>Admin</td>
                                                    <td>
                                                        <div class="status-toggle">
                                                            <input id="rating_2" class="check" type="checkbox" checked>
                                                            <label for="rating_2" class="checktoggle checkbox-bg">checkbox</label>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#" class="table-action-btn btn btn-sm bg-success-light" data-bs-toggle="modal" data-bs-target="#edit-blog-categories">
                                                            <i class="feather-edit-3 me-1"></i> Edit
                                                        </a>
                                                        <a href="#" class="table-action-btn btn btn-sm bg-danger-light" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                                            <i class="feather-trash-2 me-1"></i> Delete
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Tax</td>
                                                    <td>10/04/22</td>
                                                    <td>Admin</td>
                                                    <td>
                                                        <div class="status-toggle">
                                                            <input id="rating_3" class="check" type="checkbox" checked>
                                                            <label for="rating_3" class="checktoggle checkbox-bg">checkbox</label>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#" class="table-action-btn btn btn-sm bg-success-light" data-bs-toggle="modal" data-bs-target="#edit-blog-categories">
                                                            <i class="feather-edit-3 me-1"></i> Edit
                                                        </a>
                                                        <a href="#" class="table-action-btn btn btn-sm bg-danger-light" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                                            <i class="feather-trash-2 me-1"></i> Delete
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Porfit and Loss</td>
                                                    <td>10/04/22</td>
                                                    <td>Wegman</td>
                                                    <td>
                                                        <div class="status-toggle">
                                                            <input id="rating_4" class="check" type="checkbox" checked>
                                                            <label for="rating_4" class="checktoggle checkbox-bg">checkbox</label>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#" class="table-action-btn btn btn-sm bg-success-light" data-bs-toggle="modal" data-bs-target="#edit-blog-categories">
                                                            <i class="feather-edit-3 me-1"></i> Edit
                                                        </a>
                                                        <a href="#" class="table-action-btn btn btn-sm bg-danger-light" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                                            <i class="feather-trash-2 me-1"></i> Delete
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                      <!-- modal -->
        <div class="modal custom-modal fade bank-details" id="blog-categories" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="form-header text-start mb-0">
                            <h4 class="mb-0 text-dark fw-bold">Add Category</h4>
                        </div>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="bank-inner-details">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Category Name<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" >
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Slug<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control">
                                        <small class="form-text text-muted"> (If you leave it empty, it will be generated automatically.)</small>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Description (Meta Tag)<span class="text-danger">*</span></label>
                                        <input type="text" data-role="tagsinput" class="input-tags form-control" placeholder="Enter Tags" name="services">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Keywords (Meta Tag)<span class="text-danger">*</span></label>
                                        <input type="text" data-role="tagsinput" class="input-tags form-control" placeholder="Enter Tags" name="services">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Order<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label >Status</label>
                                    <div class="status-toggle">
                                        <input id="rating_5" class="check" type="checkbox" checked>
                                        <label for="rating_5" class="checktoggle checkbox-bg "></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer blog-categories-btn">
                        <div class="bank-details-btn ">
                            <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary me-2">Add Category</a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal -->
        <div class="modal custom-modal fade bank-details" id="edit-blog-categories" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="form-header text-start mb-0">
                            <h4 class="mb-0 text-dark fw-bold">Edit Category</h4>
                        </div>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="bank-inner-details">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Category Name<span class="text-danger" >*</span></label>
                                        <input type="text" class="form-control" value="Expenses">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Slug<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" value="Offer">
                                        <small class="form-text text-muted"> (If you leave it empty, it will be generated automatically.)</small>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Description (Meta Tag)<span class="text-danger">*</span></label>
                                        <input type="text" data-role="tagsinput" class="input-tags form-control" placeholder="Enter Tags" name="services" value="Expenses ">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Keywords (Meta Tag)<span class="text-danger">*</span></label>
                                        <input type="text" data-role="tagsinput" class="input-tags form-control" placeholder="Enter Tags" name="services" value="Expenses ">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Order<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" value="3">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label >Status</label>
                                    <div class="status-toggle">
                                        <input id="rating_6" class="check" type="checkbox" checked>
                                        <label for="rating_6" class="checktoggle checkbox-bg "></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer blog-categories-btn">
                        <div class="bank-details-btn ">
                            <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary me-2">Add Category</a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- Modal -->
		<div class="modal fade contentmodal" id="deleteModal" tabindex="-1" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content doctor-profile">
					<div class="modal-header pb-0 border-bottom-0  justify-content-end">
						<button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close"><i class="feather-x-circle"></i></button>
					</div>
					<div class="modal-body">
						<div class="delete-wrap text-center">
							<div class="del-icon"><i class="feather-x-circle"></i></div>
							<h2>Sure you want to delete</h2>
							<div class="submit-section">
								<a href="{{url('blog-categories')}}" class="btn btn-success me-2">Yes</a>
								<a href="#" class="btn btn-danger" data-bs-dismiss="modal">No</a>
							</div>								
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Modal -->	
				
@endsection
@section('script')
		<!-- Feather Icon JS -->
		<script src="{{ URL::asset('assets/libs/feather-icons/feather-icons.min.js')}}"></script> 
	@endsection