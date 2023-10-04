<?php $page="expenses";?>
@extends('layout.mainlayout')
@section('content')		
@component('components.breadcrumb')                
    @slot('title') Expenses @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_3') Expenses @endslot
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
					<div class="col-md-3">
						<div class="form-group">
							<label>Category:</label>
							<select class="select">
								<option>Select Category</option>
								<option>Advertising</option>
								<option>Marketing</option>
								<option>Software</option>
								<option>Travel</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>From</label>
							<div class="cal-icon">
								<input class="form-control datetimepicker" type="text">
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>To</label>
							<div class="cal-icon">
								<input class="form-control datetimepicker" type="text">
							</div>
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
							<table class="table table-center table-hover" id="datatable">
								<thead class="thead-light">
									<tr>
										<th>Category</th>
										<th>Customer</th>
										<th>Expense Date</th>
										<th>Notes</th>
										<th>Amount</th>
										<th>Status</th>
										<th class="text-end">Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Advertising</td>
										<td>
											<h2 class="table-avatar">
												<a href="{{url('profile')}}"><img class="avatar avatar-sm me-2 avatar-img rounded-circle" src="{{ URL::asset('/assets/img/profiles/avatar-04.jpg')}}" alt="User Image"> Barbara Moore</a>
											</h2>
										</td>
										<td>15 Nov 2020</td>
										<td>Lorem ipsum dollar...</td>
										<td>$145</td>
										<td><span class="badge badge-pill bg-success-light">Approved</span></td>
										<td class="text-end">
											<a href="{{url('edit-expenses')}}" class="btn btn-sm btn-white text-success me-2"><i class="far fa-edit me-1"></i> Edit</a> 
											<a href="javascript:void(0);" class="btn btn-sm btn-white text-danger"><i class="far fa-trash-alt me-1"></i>Delete</a>
										</td>
									</tr>
									<tr>
										<td>Marketing</td>
										<td>
											<h2 class="table-avatar">
												<a href="{{url('profile')}}"><img class="avatar avatar-sm me-2 avatar-img rounded-circle" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}" alt="User Image"> Brian Johnson</a>
											</h2>
										</td>
										<td>11 Nov 2020</td>
										<td>Lorem ipsum dollar...</td>
										<td>$254</td>
										<td><span class="badge badge-pill bg-danger-light">Pending</span></td>
										<td class="text-end">
											<a href="{{url('edit-expenses')}}" class="btn btn-sm btn-white text-success me-2"><i class="far fa-edit me-1"></i> Edit</a> 
											<a href="javascript:void(0);" class="btn btn-sm btn-white text-danger"><i class="far fa-trash-alt me-1"></i>Delete</a>
										</td>
									</tr>
									<tr>
										<td>Software</td>
										<td>
											<h2 class="table-avatar">
												<a href="{{url('profile')}}"><img class="avatar avatar-sm me-2 avatar-img rounded-circle" src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg')}}" alt="User Image"> Greg Lynch</a>
											</h2>
										</td>
										<td>23 Oct 2020</td>
										<td>Lorem ipsum dollar...</td>
										<td>$145</td>
										<td><span class="badge badge-pill bg-success-light">Approved</span></td>
										<td class="text-end">
											<a href="{{url('edit-expenses')}}" class="btn btn-sm btn-white text-success me-2"><i class="far fa-edit me-1"></i> Edit</a> 
											<a href="javascript:void(0);" class="btn btn-sm btn-white text-danger"><i class="far fa-trash-alt me-1"></i>Delete</a>
										</td>
									</tr>
									<tr>
										<td>Travel</td>
										<td>
											<h2 class="table-avatar">
												<a href="{{url('profile')}}"><img class="avatar avatar-sm me-2 avatar-img rounded-circle" src="{{ URL::asset('/assets/img/profiles/avatar-06.jpg')}}" alt="User Image"> Karlene Chaidez</a>
											</h2>
										</td>
										<td>9 Oct 2020</td>
										<td>Lorem ipsum dollar...</td>
										<td>$75</td>
										<td><span class="badge badge-pill bg-success-light">Approved</span></td>
										<td class="text-end">
											<a href="{{url('edit-expenses')}}" class="btn btn-sm btn-white text-success me-2"><i class="far fa-edit me-1"></i> Edit</a> 
											<a href="javascript:void(0);" class="btn btn-sm btn-white text-danger"><i class="far fa-trash-alt me-1"></i>Delete</a>
										</td>
									</tr>
									<tr>
										<td>Repairs</td>
										<td>
											<h2 class="table-avatar">
												<a href="{{url('profile')}}"><img class="avatar avatar-sm me-2 avatar-img rounded-circle" src="{{ URL::asset('/assets/img/profiles/avatar-03.jpg')}}" alt="User Image"> Marie Canales</a>
											</h2>
										</td>
										<td>3 Oct 2020</td>
										<td>Lorem ipsum dollar...</td>
										<td>$60</td>
										<td><span class="badge badge-pill bg-danger-light">Pending</span></td>
										<td class="text-end">
											<a href="{{url('edit-expenses')}}" class="btn btn-sm btn-white text-success me-2"><i class="far fa-edit me-1"></i> Edit</a> 
											<a href="javascript:void(0);" class="btn btn-sm btn-white text-danger"><i class="far fa-trash-alt me-1"></i>Delete</a>
										</td>
									</tr>
									<tr>
										<td>Stationary</td>
										<td>
											<h2 class="table-avatar">
												<a href="{{url('profile')}}"><img class="avatar avatar-sm me-2 avatar-img rounded-circle" src="{{ URL::asset('/assets/img/profiles/avatar-07.jpg')}}" alt="User Image"> John Blair</a>
											</h2>
										</td>
										<td>29 Sep 2020</td>
										<td>Lorem ipsum dollar...</td>
										<td>$154</td>
										<td><span class="badge badge-pill bg-danger-light">Pending</span></td>
										<td class="text-end">
											<a href="{{url('edit-expenses')}}" class="btn btn-sm btn-white text-success me-2"><i class="far fa-edit me-1"></i> Edit</a> 
											<a href="javascript:void(0);" class="btn btn-sm btn-white text-danger"><i class="far fa-trash-alt me-1"></i>Delete</a>
										</td>
									</tr>
									<tr>
										<td>Food</td>
										<td>
											<h2 class="table-avatar">
												<a href="{{url('profile')}}"><img class="avatar avatar-sm me-2 avatar-img rounded-circle" src="{{ URL::asset('/assets/img/profiles/avatar-08.jpg')}}" alt="User Image"> Russell Copeland</a>
											</h2>
										</td>
										<td>19 Sep 2020</td>
										<td>Lorem ipsum dollar...</td>
										<td>$214</td>
										<td><span class="badge badge-pill bg-danger-light">Pending</span></td>
										<td class="text-end">
											<a href="{{url('edit-expenses')}}" class="btn btn-sm btn-white text-success me-2"><i class="far fa-edit me-1"></i> Edit</a> 
											<a href="javascript:void(0);" class="btn btn-sm btn-white text-danger"><i class="far fa-trash-alt me-1"></i>Delete</a>
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