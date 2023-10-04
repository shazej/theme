<?php $page="notifications";?>
@extends('layout.mainlayout')
@section('content')		
@component('components.breadcrumb')                
    @slot('title') Settings @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_3') Notifications @endslot
@endcomponent

	<div class="row">
		<div class="col-xl-3 col-md-4">
		
			<!-- Settings Menu -->
			<div class="widget settings-menu">
				<ul>
					<li class="nav-item">
						<a href="{{url('settings')}}" class="nav-link">
							<i class="far fa-user"></i> <span>Profile Settings</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="{{url('preferences')}}" class="nav-link">
							<i class="fas fa-cog"></i> <span>Preferences</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="{{url('tax-types')}}" class="nav-link">
							<i class="far fa-check-square"></i> <span>Tax Types</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="{{url('expense-category')}}" class="nav-link">
							<i class="far fa-list-alt"></i> <span>Expense Category</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="{{url('notifications')}}" class="nav-link active">
							<i class="far fa-bell"></i> <span>Notifications</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="{{url('change-password')}}" class="nav-link">
							<i class="fas fa-unlock-alt"></i> <span>Change Password</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="{{url('delete-account')}}" class="nav-link">
							<i class="fas fa-ban"></i> <span>Delete Account</span>
						</a>
					</li>
				</ul>
			</div>
			<!-- /Settings Menu -->
			
		</div>
		
		<div class="col-xl-9 col-md-8">
			<div class="card">
				<div class="card-header">
					<h5 class="card-title">Notifications</h5>
					<p>Which email notifications would you like to receive when something changes?</p>
				</div>
				<div class="card-body">
				
					<!-- Form -->
					<form>
						<div class="row form-group">
							<label for="notificationmail" class="col-sm-3 col-form-label input-label">Send Notifications to</label>
							<div class="col-sm-9">
								<input type="email" class="form-control" id="notificationmail">
							</div>
						</div>


						<!-- Toggle Switch -->
						<label class="row form-group toggle-switch" for="notification_switch1">
							<span class="col-8 col-sm-9 toggle-switch-content ms-0">
								<span class="d-block text-dark">Invoice viewed</span>
								<span class="d-block text-muted">When your customer views the invoice sent via dashboard.</span>
							</span>
							<span class="col-4 col-sm-3">
								<input type="checkbox" class="toggle-switch-input" id="notification_switch1">
								<span class="toggle-switch-label ms-auto">
									<span class="toggle-switch-indicator"></span>
								</span>
							</span>
						</label>
						<!-- /Toggle Switch -->

						<!-- Toggle Switch -->
						<label class="row form-group toggle-switch" for="notification_switch2">
							<span class="col-8 col-sm-9 toggle-switch-content ms-0">
								<span class="d-block text-dark">Estimate viewed</span>
								<span class="d-block text-muted">When your customer views the estimate sent via dashboard.</span>
							</span>
							<span class="col-4 col-sm-3">
								<input type="checkbox" class="toggle-switch-input" id="notification_switch2">
								<span class="toggle-switch-label ms-auto">
									<span class="toggle-switch-indicator"></span>
								</span>
							</span>
						</label>
						<!-- /Toggle Switch -->
						
						<div class="text-end">
							<button type="submit" class="btn btn-primary">Save Changes</button>
						</div>
					</form>
					<!-- /Form -->
				</div>
			</div>
		</div>
	</div>	
			
				
@endsection