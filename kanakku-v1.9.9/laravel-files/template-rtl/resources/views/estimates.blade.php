<?php $page="estimates";?>
@extends('layout.mainlayout')
@section('content')	
@component('components.breadcrumb')                
    @slot('title') Estimates @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_3') Estimates @endslot
@endcomponent
@section('css')
     <!-- DataTables CSS -->
    <link rel="stylesheet" href="{{url('assets/libs/datatables/dataTables.bootstrap4.min.css')}}">
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{url('assets/libs/select2/select2.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/bootstrap-datetimepicker.min.css')}}">
@endsection 
		<!-- Search Filter -->
		<div id="filter_inputs" class="card filter-card">
			<div class="card-body pb-0">
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label>Customer:</label>
							<input type="text" class="form-control">
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<label>Status:</label>
							<select class="select">
								<option>Select Status</option>
								<option value="Draft">Draft</option>
								<option value="Sent">Sent</option>
								<option value="Viewed">Viewed</option>
								<option value="Expired">Expired</option>
								<option value="Accepted">Accepted</option>
								<option value="Rejected">Rejected</option>
							</select>
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<label>From</label>
							<div class="cal-icon">
								<input class="form-control datetimepicker" type="text">
							</div>
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<label>To</label>
							<div class="cal-icon">
								<input class="form-control datetimepicker" type="text">
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Estimate Number</label>
							<input type="text" class="form-control">
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Search Filter -->
		
		<div class="row">
			<div class="col-sm-12">
				<div class="card card-table"> 
					<div class="card-body">
						
						<div class="table-responsive">
							<table class="table table-stripped table-hover" id="datatable">
								<thead class="thead-light">
									<tr>
										<th>Estimate Number</th>
										<th>Customer</th>
										<th>Estimate Date</th>
										<th>Expiry Date</th>
										<th>Amount</th>
										<th>Status</th>
										<th class="text-end">Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><a href="{{url('view-estimate')}}">EST-17ER281</a></td>
										<td>
											<h2 class="table-avatar">
												<a href="{{url('profile')}}"><img class="avatar avatar-sm me-2 avatar-img rounded-circle" src="{{ URL::asset('/assets/img/profiles/avatar-03.jpg')}}" alt="User Image"> Marie Canales</a>
											</h2>
										</td>
										<td>16 Nov 2020</td>
										<td>22 Nov 2020</td>
										<td>$100</td>
										<td><span class="badge bg-success-light">Accepted</span></td>
										<td class="text-end">
											<div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="{{url('edit-invoice')}}"><i class="far fa-edit me-2"></i>Edit</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-trash-alt me-2"></i>Delete</a>
													<a class="dropdown-item" href="{{url('view-estimate')}}"><i class="far fa-eye me-2"></i>View</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-file-alt me-2"></i>Convert to Invoice</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-check-circle me-2"></i>Mark as sent</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-paper-plane me-2"></i>Send Estimate</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-check-circle me-2"></i>Mark as Accepted</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-times-circle me-2"></i>Mark as Rejected</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td><a href="{{url('view-estimate')}}">EST-26AS699</a></td>
										<td>
											<h2 class="table-avatar">
												<a href="{{url('profile')}}"><img class="avatar avatar-sm me-2 avatar-img rounded-circle" src="{{ URL::asset('/assets/img/profiles/avatar-04.jpg')}}" alt="User Image"> Barbara Moore</a>
											</h2>
										</td>
										<td>5 Nov 2020</td>
										<td>10 Nov 2020</td>
										<td>$75</td>
										<td><span class="badge bg-danger-light">Declined</span></td>
										<td class="text-end">
											<div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="{{url('edit-invoice')}}"><i class="far fa-edit me-2"></i>Edit</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-trash-alt me-2"></i>Delete</a>
													<a class="dropdown-item" href="{{url('view-estimate')}}"><i class="far fa-eye me-2"></i>View</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-file-alt me-2"></i>Convert to Invoice</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-check-circle me-2"></i>Mark as sent</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-paper-plane me-2"></i>Send Estimate</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-check-circle me-2"></i>Mark as Accepted</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-times-circle me-2"></i>Mark as Rejected</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td><a href="{{url('view-estimate')}}">EST-11KI214</a></td>
										<td>
											<h2 class="table-avatar">
												<a href="{{url('profile')}}"><img class="avatar avatar-sm me-2 avatar-img rounded-circle" src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg')}}" alt="User Image"> Greg Lynch</a>
											</h2>
										</td>
										<td>1 Nov 2020</td>
										<td>5 Nov 2020</td>
										<td>$175</td>
										<td><span class="badge bg-info-light">Sent</span></td>
										<td class="text-end">
											<div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="{{url('edit-invoice')}}"><i class="far fa-edit me-2"></i>Edit</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-trash-alt me-2"></i>Delete</a>
													<a class="dropdown-item" href="{{url('view-estimate')}}"><i class="far fa-eye me-2"></i>View</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-file-alt me-2"></i>Convert to Invoice</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-check-circle me-2"></i>Mark as sent</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-paper-plane me-2"></i>Send Estimate</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-check-circle me-2"></i>Mark as Accepted</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-times-circle me-2"></i>Mark as Rejected</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td><a href="{{url('view-estimate')}}">EST-98HJ687</a></td>
										<td>
											<h2 class="table-avatar">
												<a href="{{url('profile')}}"><img class="avatar avatar-sm me-2 avatar-img rounded-circle" src="{{ URL::asset('/assets/img/profiles/avatar-06.jpg')}}" alt="User Image"> Karlene Chaidez</a>
											</h2>
										</td>
										<td>24 Oct 2020</td>
										<td>28 Oct 2020</td>
										<td>$1500</td>
										<td><span class="badge bg-warning-light">Expired</span></td>
										<td class="text-end">
											<div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="{{url('edit-invoice')}}"><i class="far fa-edit me-2"></i>Edit</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-trash-alt me-2"></i>Delete</a>
													<a class="dropdown-item" href="{{url('view-estimate')}}"><i class="far fa-eye me-2"></i>View</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-file-alt me-2"></i>Convert to Invoice</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-check-circle me-2"></i>Mark as sent</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-paper-plane me-2"></i>Send Estimate</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-check-circle me-2"></i>Mark as Accepted</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-times-circle me-2"></i>Mark as Rejected</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td><a href="{{url('view-estimate')}}">EST-71DR001</a></td>
										<td>
											<h2 class="table-avatar">
												<a href="{{url('profile')}}"><img class="avatar avatar-sm me-2 avatar-img rounded-circle" src="{{ URL::asset('/assets/img/profiles/avatar-07.jpg')}}" alt="User Image"> John Blair</a>
											</h2>
										</td>
										<td>12 Oct 2020</td>
										<td>17 Oct 2020</td>
										<td>$2350</td>
										<td><span class="badge bg-success-light">Accepted</span></td>
										<td class="text-end">
											<div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="{{url('edit-invoice')}}"><i class="far fa-edit me-2"></i>Edit</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-trash-alt me-2"></i>Delete</a>
													<a class="dropdown-item" href="{{url('view-estimate')}}"><i class="far fa-eye me-2"></i>View</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-file-alt me-2"></i>Convert to Invoice</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-check-circle me-2"></i>Mark as sent</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-paper-plane me-2"></i>Send Estimate</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-check-circle me-2"></i>Mark as Accepted</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-times-circle me-2"></i>Mark as Rejected</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td><a href="{{url('view-estimate')}}">EST-68MN425</a></td>
										<td>
											<h2 class="table-avatar">
												<a href="{{url('profile')}}"><img class="avatar avatar-sm me-2 avatar-img rounded-circle" src="{{ URL::asset('/assets/img/profiles/avatar-08.jpg')}}" alt="User Image"> Russell Copeland</a>
											</h2>
										</td>
										<td>2 Oct 2020</td>
										<td>8 Oct 2020</td>
										<td>$1890</td>
										<td><span class="badge bg-success-light">Accepted</span></td>
										<td class="text-end">
											<div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="{{url('edit-invoice')}}"><i class="far fa-edit me-2"></i>Edit</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-trash-alt me-2"></i>Delete</a>
													<a class="dropdown-item" href="{{url('view-estimate')}}"><i class="far fa-eye me-2"></i>View</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-file-alt me-2"></i>Convert to Invoice</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-check-circle me-2"></i>Mark as sent</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-paper-plane me-2"></i>Send Estimate</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-check-circle me-2"></i>Mark as Accepted</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-times-circle me-2"></i>Mark as Rejected</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td><a href="{{url('view-estimate')}}">EST-86YU963</a></td>
										<td>
											<h2 class="table-avatar">
												<a href="{{url('profile')}}"><img class="avatar avatar-sm me-2 avatar-img rounded-circle" src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}" alt="User Image"> Leatha Bailey</a>
											</h2>
										</td>
										<td>25 Sep 2020</td>
										<td>30 Sep 2020</td>
										<td>$785</td>
										<td><span class="badge bg-success-light">Accepted</span></td>
										<td class="text-end">
											<div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="{{url('edit-invoice')}}"><i class="far fa-edit me-2"></i>Edit</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-trash-alt me-2"></i>Delete</a>
													<a class="dropdown-item" href="{{url('view-estimate')}}"><i class="far fa-eye me-2"></i>View</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-file-alt me-2"></i>Convert to Invoice</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-check-circle me-2"></i>Mark as sent</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-paper-plane me-2"></i>Send Estimate</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-check-circle me-2"></i>Mark as Accepted</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-times-circle me-2"></i>Mark as Rejected</a>
												</div>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
				   
					</div>
				</div>
			</div>
		</div>
		
@endsection
@section('script')        
	   <!-- Datatable JS -->
	<script src="{{ URL::asset('assets/libs/datatables/jquery.dataTables.min.js')}}"></script>
	<script src="{{ URL::asset('assets/libs/datatables/dataTables.bootstrap4.min.js')}}"></script>
	<script src="{{ URL::asset('assets/js/pages/datatable.init.js')}}"></script>
    <!-- Select2 JS -->
    <script src="{{ URL::asset('/assets/libs/select2/select2.min.js')}}"></script>   
    <script src="{{ URL::asset('/assets/js/pages/select2.init.js')}}"></script>
    <!-- Datepicker Core JS -->
   <script src="{{ URL::asset('/assets/js/bootstrap-datetimepicker.min.js')}}"></script>
   <script src="{{ URL::asset('/assets/js/pages/datetimepicker.init.js')}}"></script>
@endsection