<?php $page="customers";?>
@extends('layout.mainlayout')
@section('content')	
@component('components.breadcrumb')                
    @slot('title') Customers @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_3') Customers @endslot
@endcomponent
				
	@section('css')
    <link rel="stylesheet" href="{{url('assets/css/bootstrap-datetimepicker.min.css')}}">
@endsection 
					
		<!-- Search Filter -->
		<div id="filter_inputs" class="card filter-card">
			<div class="card-body pb-0">
				<div class="row">
					<div class="col-sm-6 col-md-3">
						<div class="form-group">
							<label>Name</label>
							<input type="text" class="form-control">
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="form-group">
							<label>Email</label>
							<input type="text" class="form-control">
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="form-group">
							<label>Phone</label>
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
							<table class="table table-center table-hover" id="datatable">
								<thead class="thead-light">
									<tr>
										<th>Customer</th>
										<th>Email</th>
										<th>Amount Due</th>
										<th>Registered On</th>
										<th>Status</th>
										<th class="text-right">Actions</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<h2 class="table-avatar">
												<a href="{{url('profile')}}" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}" alt="User Image"></a>
												<a href="{{url('profile')}}">Brian Johnson <span>9876543210</span></a>
											</h2>
										</td>
										<td>brianjohnson@example.com</td>
										<td>$295</td>
										<td>16 Nov 2020</td>
										<td><span class="badge badge-pill bg-success-light">Active</span></td>
										<td class="text-right">
											<a href="{{url('edit-customer')}}" class="btn btn-sm btn-white text-success me-2"><i class="far fa-edit me-1"></i> Edit</a> 
											<a href="javascript:void(0);" class="btn btn-sm btn-white text-danger me-2"><i class="far fa-trash-alt me-1"></i>Delete</a>
										</td>
									</tr>
									<tr>
										<td>
											<h2 class="table-avatar">
												<a href="{{url('profile')}}" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{ URL::asset('/assets/img/profiles/avatar-03.jpg')}}" alt="User Image"></a>
												<a href="{{url('profile')}}">Marie Canales <span>9876543210</span></a>
											</h2>
										</td>
										<td>mariecanales@example.com</td>
										<td>$1750</td>
										<td>8 Nov 2020</td>
										<td><span class="badge badge-pill bg-danger-light">Inactive</span></td>
										<td class="text-right">
											<a href="{{url('edit-customer')}}" class="btn btn-sm btn-white text-success me-2"><i class="far fa-edit me-1"></i> Edit</a> 
											<a href="javascript:void(0);" class="btn btn-sm btn-white text-danger me-2"><i class="far fa-trash-alt me-1"></i>Delete</a>
										</td>
									</tr>
									<tr>
										<td>
											<h2 class="table-avatar">
												<a href="{{url('profile')}}" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{ URL::asset('/assets/img/profiles/avatar-04.jpg')}}" alt="User Image"></a>
												<a href="{{url('profile')}}">Barbara Moore <span>9876543210</span></a>
											</h2>
										</td>
										<td>barbaramoore@example.com</td>
										<td>$8295</td>
										<td>24 Oct 2020</td>
										<td><span class="badge badge-pill bg-success-light">Active</span></td>
										<td class="text-right">
											<a href="{{url('edit-customer')}}" class="btn btn-sm btn-white text-success me-2"><i class="far fa-edit me-1"></i> Edit</a> 
											<a href="javascript:void(0);" class="btn btn-sm btn-white text-danger me-2"><i class="far fa-trash-alt me-1"></i>Delete</a>
										</td>
									</tr>
									<tr>
										<td>
											<h2 class="table-avatar">
												<a href="{{url('profile')}}" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg')}}" alt="User Image"></a>
												<a href="{{url('profile')}}">Greg Lynch <span>9876543210</span></a>
											</h2>
										</td>
										<td>greglynch@example.com</td>
										<td>$3000</td>
										<td>11 Oct 2020</td>
										<td><span class="badge badge-pill bg-danger-light">Inactive</span></td>
										<td class="text-right">
											<a href="{{url('edit-customer')}}" class="btn btn-sm btn-white text-success me-2"><i class="far fa-edit me-1"></i> Edit</a> 
											<a href="javascript:void(0);" class="btn btn-sm btn-white text-danger me-2"><i class="far fa-trash-alt me-1"></i>Delete</a>
										</td>
									</tr>
									<tr>
										<td>
											<h2 class="table-avatar">
												<a href="{{url('profile')}}" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{ URL::asset('/assets/img/profiles/avatar-06.jpg')}}" alt="User Image"></a>
												<a href="{{url('profile')}}">Karlene Chaidez <span>9876543210</span></a>
											</h2>
										</td>
										<td>karlenechaidez@example.com</td>
										<td>-</td>
										<td>29 Sep 2020</td>
										<td><span class="badge badge-pill bg-danger-light">Inactive</span></td>
										<td class="text-right">
											<a href="{{url('edit-customer')}}" class="btn btn-sm btn-white text-success me-2"><i class="far fa-edit me-1"></i> Edit</a> 
											<a href="javascript:void(0);" class="btn btn-sm btn-white text-danger me-2"><i class="far fa-trash-alt me-1"></i>Delete</a>
										</td>
									</tr>
									<tr>
										<td>
											<h2 class="table-avatar">
												<a href="{{url('profile')}}" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{ URL::asset('/assets/img/profiles/avatar-07.jpg')}}" alt="User Image"></a>
												<a href="{{url('profile')}}">John Blair <span>9876543210</span></a>
											</h2>
										</td>
										<td>johnblair@example.com</td>
										<td>$50</td>
										<td>13 Aug 2020</td>
										<td><span class="badge badge-pill bg-success-light">Active</span></td>
										<td class="text-right">
											<a href="{{url('edit-customer')}}" class="btn btn-sm btn-white text-success me-2"><i class="far fa-edit me-1"></i> Edit</a> 
											<a href="javascript:void(0);" class="btn btn-sm btn-white text-danger me-2"><i class="far fa-trash-alt me-1"></i>Delete</a>
										</td>
									</tr>
									<tr>
										<td>
											<h2 class="table-avatar">
												<a href="{{url('profile')}}" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{ URL::asset('/assets/img/profiles/avatar-08.jpg')}}" alt="User Image"></a>
												<a href="{{url('profile')}}">Russell Copeland <span>9876543210</span></a>
											</h2>
										</td>
										<td>russellcopeland@example.com</td>
										<td>-</td>
										<td>2 Jul 2020</td>
										<td><span class="badge badge-pill bg-danger-light">Inactive</span></td>
										<td class="text-right">
											<a href="{{url('edit-customer')}}" class="btn btn-sm btn-white text-success me-2"><i class="far fa-edit me-1"></i> Edit</a> 
											<a href="javascript:void(0);" class="btn btn-sm btn-white text-danger me-2"><i class="far fa-trash-alt me-1"></i>Delete</a>
										</td>
									</tr>
									<tr>
										<td>
											<h2 class="table-avatar">
												<a href="{{url('profile')}}" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}" alt="User Image"></a>
												<a href="{{url('profile')}}">Leatha Bailey <span>9876543210</span></a>
											</h2>
										</td>
										<td>leathabailey@example.com</td>
										<td>$480</td>
										<td>20 Jun 2020</td>
										<td><span class="badge badge-pill bg-success-light">Active</span></td>
										<td class="text-right">
											<a href="{{url('edit-customer')}}" class="btn btn-sm btn-white text-success me-2"><i class="far fa-edit me-1"></i> Edit</a> 
											<a href="javascript:void(0);" class="btn btn-sm btn-white text-danger me-2"><i class="far fa-trash-alt me-1"></i>Delete</a>
										</td>
									</tr>
									<tr>
										<td>
											<h2 class="table-avatar">
												<a href="{{url('profile')}}" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{ URL::asset('/assets/img/profiles/avatar-10.jpg')}}" alt="User Image"></a>
												<a href="{{url('profile')}}">Joseph Collins <span>9876543210</span></a>
											</h2>
										</td>
										<td>josephcollins@example.com</td>
										<td>$600</td>
										<td>9 May 2020</td>
										<td><span class="badge badge-pill bg-success-light">Active</span></td>
										<td class="text-right">
											<a href="{{url('edit-customer')}}" class="btn btn-sm btn-white text-success me-2"><i class="far fa-edit me-1"></i> Edit</a> 
											<a href="javascript:void(0);" class="btn btn-sm btn-white text-danger me-2"><i class="far fa-trash-alt me-1"></i>Delete</a>
										</td>
									</tr>
									<tr>
										<td>
											<h2 class="table-avatar">
												<a href="{{url('profile')}}" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{ URL::asset('/assets/img/profiles/avatar-11.jpg')}}" alt="User Image"></a>
												<a href="{{url('profile')}}">Jennifer Floyd <span>9876543210</span></a>
											</h2>
										</td>
										<td>jenniferfloyd@example.com</td>
										<td>-</td>
										<td>17 Apr 2020</td>
										<td><span class="badge badge-pill bg-success-light">Active</span></td>
										<td class="text-right">
											<a href="{{url('edit-customer')}}" class="btn btn-sm btn-white text-success me-2"><i class="far fa-edit me-1"></i> Edit</a> 
											<a href="javascript:void(0);" class="btn btn-sm btn-white text-danger me-2"><i class="far fa-trash-alt me-1"></i>Delete</a>
										</td>
									</tr>
									<tr>
										<td>
											<h2 class="table-avatar">
												<a href="{{url('profile')}}" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{ URL::asset('/assets/img/profiles/avatar-12.jpg')}}" alt="User Image"></a>
												<a href="{{url('profile')}}">Alex Campbell <span>9876543210</span></a>
											</h2>
										</td>
										<td>alexcampbell@example.com</td>
										<td>-</td>
										<td>30 Mar 2020</td>
										<td><span class="badge badge-pill bg-success-light">Active</span></td>
										<td class="text-right">
											<a href="{{url('edit-customer')}}" class="btn btn-sm btn-white text-success me-2"><i class="far fa-edit me-1"></i> Edit</a> 
											<a href="javascript:void(0);" class="btn btn-sm btn-white text-danger me-2"><i class="far fa-trash-alt me-1"></i>Delete</a>
										</td>
									</tr>
									<tr>
										<td>
											<h2 class="table-avatar">
												<a href="{{url('profile')}}" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{ URL::asset('/assets/img/profiles/avatar-13.jpg')}}" alt="User Image"></a>
												<a href="{{url('profile')}}">Wendell Ward <span>9876543210</span></a>
											</h2>
										</td>
										<td>wendellward@example.com</td>
										<td>$7500</td>
										<td>22 Feb 2020</td>
										<td><span class="badge badge-pill bg-success-light">Active</span></td>
										<td class="text-right">
											<a href="{{url('edit-customer')}}" class="btn btn-sm btn-white text-success me-2"><i class="far fa-edit me-1"></i> Edit</a> 
											<a href="javascript:void(0);" class="btn btn-sm btn-white text-danger me-2"><i class="far fa-trash-alt me-1"></i>Delete</a>
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
