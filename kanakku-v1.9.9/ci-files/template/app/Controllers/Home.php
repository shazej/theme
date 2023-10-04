<?php

namespace App\Controllers;

class Home extends BaseController
{
	
	public function index()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Login']),
			'page_title' => view('partials/page-title', ['title' => 'Login', 'li_1' => 'SmartHr', 'li_2' => 'Login'])
		];
		
		return view('auth-login', $data);
	}
	public function Dashboard()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Dashboard']),
			'page_title' => view('partials/page-title', ['title' => 'Dashboard', 'li_1' => 'SmartHr', 'li_2' => 'Dashboard'])
		];

		return view('index', $data);
	}

	public function customer()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Customer']),
		];

		return view('customer', $data);
	}

	public function add_customer()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Add Customer']),
		];

		return view('add-customer', $data);
	}

	public function edit_customer()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Edit Customer']),
		];

		return view('edit-customer', $data);
	}

	public function estimates()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Estimates']),
		];

		return view('estimates', $data);
	}

	public function add_estimate()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Add Estimate']),
		];

		return view('add-estimate', $data);
	}

	public function view_estimate()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'View Estimate']),
		];

		return view('view_estimate', $data);
	}

	public function edit_estimate()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Edit Estimate']),
		];

		return view('edit-estimate', $data);
	}

	public function invoices()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Invoices']),
		];

		return view('invoices', $data);
	}

	public function edit_invoice()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Edit Invoice']),
		];

		return view('edit_invoice', $data);
	}

	public function view_invoice()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'View Invoice']),
		];

		return view('view_invoice', $data);
	}

	public function view_invoice_two()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'View Invoice Two']),
		];

		return view('view_invoice_two', $data);
	}

	public function invoice_grid()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Invoice Grid']),
		];

		return view('invoice-grid', $data);
	}

	public function invoice_grid_two()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Invoice Grid Two']),
		];

		return view('invoice-grid-two', $data);
	}

	public function invoice_paid()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Invoice Paid']),
		];

		return view('invoices-paid', $data);
	}

	public function invoice_overdue()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Invoice Overdue']),
		];

		return view('invoice-overdue', $data);
	}

	public function invoice_draft()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Invoice Draft']),
		];

		return view('invoice-draft', $data);
	}

	public function invoice_recurring()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Invoice Recurring']),
		];

		return view('invoice-recurring', $data);
	}

	public function invoice_cancelled()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Invoice Cancelled']),
		];

		return view('invoice-cancelled', $data);
	}

	public function invoices_settings()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Invoices Settings']),
		];

		return view('invoices-settings', $data);
	}

	public function tax_settings()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Tax Settings']),
		];

		return view('tax-settings', $data);
	}

	public function bank_settings()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Bank Settings']),
		];

		return view('bank-settings', $data);
	}

	public function add_invoice()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Add Invoice']),
		];

		return view('add-invoice', $data);
	}

	public function invoice_item()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Invoice Item']),
		];

		return view('invoice-item', $data);
	}

	public function invoice_category()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Invoice Category']),
		];

		return view('invoice-category', $data);
	}

	public function payments()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Payments']),
		];

		return view('payments', $data);
	}

	public function add_payments()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Add Payments']),
		];

		return view('add-payments', $data);
	}

	public function expenses()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Expenses']),
		];

		return view('expenses', $data);
	}

	public function add_expenses()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Add Expenses']),
		];

		return view('add-expenses', $data);
	}

	public function edit_expenses()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Edit Expenses']),
		];

		return view('edit-expenses', $data);
	}

	public function sales_report()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Sales Report']),
		];

		return view('sales-report', $data);
	}

	public function expenses_report()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Expenses Report']),
		];

		return view('expenses-report', $data);
	}

	public function profit_loss_report()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Profit Loss Report']),
		];

		return view('profit-loss-report', $data);
	}

	public function tax_report()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Tax Report']),
		];

		return view('tax-report', $data);
	}

	public function blogs()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Blogs']),
		];

		return view('blog', $data);
	}

	public function pending_blog()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Pending Blog']),
		];

		return view('pending_blog', $data);
	}

	public function add_blog()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Add Blog']),
		];

		return view('add_blog', $data);
	}

	public function blog_details()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Blog Details']),
		];

		return view('blog_details', $data);
	}

	public function edit_blog()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Edit Blog']),
		];

		return view('edit_blog', $data);
	}

	public function blog_categories()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Blog Categories']),
		];

		return view('blog_categories', $data);
	}

	public function settings()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Settings']),
		];

		return view('settings', $data);
	}

	public function preferences()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Preferences']),
		];

		return view('preferences', $data);
	}

	public function tax_types()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Tax Types']),
		];

		return view('tax-types', $data);
	}

	public function expense_category()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Expense Category']),
		];

		return view('expense-category', $data);
	}

	public function notification()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Notification']),
		];

		return view('notification', $data);
	}

	public function change_password()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Change Password']),
		];

		return view('change-password', $data);
	}

	public function delete_account()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Delete Account']),
		];

		return view('delete-account', $data);
	}

	public function chat()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Chat']),
		];

		return view('chat', $data);
	}

	public function calendar()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Calendar']),
		];

		return view('calendar', $data);
	}

	public function inbox()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Inbox']),
		];

		return view('inbox', $data);
	}

	public function profile()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Profile']),
		];

		return view('profile', $data);
	}

	public function register()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Register']),
		];

		return view('register', $data);
	}

	public function forgot_password()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Forgot Password']),
		];

		return view('forgot-password', $data);
	}

	public function lock_screen()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Lock Screen']),
		];

		return view('lock-screen', $data);
	}

	public function error_404()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Error 404']),
		];

		return view('error-404', $data);
	}

	public function error_500()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Error 500']),
		];

		return view('error-500', $data);
	}

	public function users()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Users']),
		];

		return view('users', $data);
	}

	public function blank_page()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Blank Page']),
		];

		return view('blank-page', $data);
	}

	public function maps_vector()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Maps Vector']),
		];

		return view('maps-vector', $data);
	}

	public function alerts()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Alerts']),
		];

		return view('alerts', $data);
	}

	public function accordions()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Accordions']),
		];

		return view('accordions', $data);
	}

	public function avatar()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Avatar']),
		];

		return view('avatar', $data);
	}

	public function badges()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Badges']),
		];

		return view('badges', $data);
	}

	public function buttons()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Buttons']),
		];

		return view('buttons', $data);
	}

	public function buttongroup()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Button Group']),
		];

		return view('buttongroup', $data);
	}

	public function breadcrumbs()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Breadcrumbs']),
		];

		return view('breadcrumbs', $data);
	}

	public function cards()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Cards']),
		];

		return view('cards', $data);
	}

	public function carousel()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Carousel']),
		];

		return view('carousel', $data);
	}

	public function dropdowns()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Dropdowns']),
		];

		return view('dropdowns', $data);
	}

	public function grid()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Grid']),
		];

		return view('grid', $data);
	}

	public function images()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Images']),
		];

		return view('images', $data);
	}

	public function media()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Media']),
		];

		return view('media', $data);
	}

	public function modal()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Modal']),
		];

		return view('modal', $data);
	}

	public function offcanvas()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Offcanvas']),
		];

		return view('offcanvas', $data);
	}

	public function pagination()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Pagination']),
		];

		return view('pagination', $data);
	}

	public function popover()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Popover']),
		];

		return view('popover', $data);
	}

	public function progress()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Progress']),
		];

		return view('progress', $data);
	}

	public function placeholders()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Placeholders']),
		];

		return view('placeholders', $data);
	}

	public function rangeslider()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Range Slider']),
		];

		return view('rangeslider', $data);
	}

	public function spinner()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'spinner']),
		];

		return view('spinner', $data);
	}

	public function sweetalerts()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Sweet Alerts']),
		];

		return view('sweet-alerts', $data);
	}

	public function tab()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Tab']),
		];

		return view('tab', $data);
	}

	public function toastr()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Toastr']),
		];

		return view('toastr', $data);
	}

	public function tooltip()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Tooltip']),
		];

		return view('tooltip', $data);
	}

	public function typography()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Typography']),
		];

		return view('typography', $data);
	}

	public function video()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Video']),
		];

		return view('video', $data);
	}

	public function ribbon()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Ribbon']),
		];

		return view('ribbon', $data);
	}

	public function clipboard()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Clipboard']),
		];

		return view('clipboard', $data);
	}

	public function drag_drop()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Drag Drop']),
		];

		return view('drag-drop', $data);
	}


	public function rating()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Rating']),
		];

		return view('rating', $data);
	}

	public function text_editor()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Text Editor']),
		];

		return view('text-editor', $data);
	}

	public function counter()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Counter']),
		];

		return view('counter', $data);
	}

	public function scrollbar()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Scrollbar']),
		];

		return view('scrollbar', $data);
	}

	
	public function notifications()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Notification']),
		];

		return view('notifications', $data);
	}

	public function lightbox()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'lightbox']),
		];

		return view('light-box', $data);
	}

	public function stickynote()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Stickynote']),
		];

		return view('stickynote', $data);
	}

	public function timeline()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Timeline']),
		];

		return view('timeline', $data);
	}

	public function horizontal_timeline()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Horizontal Timeline']),
		];

		return view('horizontal-timeline', $data);
	}

	public function form_wizard()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Form Wizard']),
		];

		return view('form-wizard', $data);
	}

	public function chart_apex()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Chart Apex']),
		];

		return view('chart-apex', $data);
	}

	public function chart_js()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Chart Js']),
		];

		return view('chart-js', $data);
	}

	public function chart_morris()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Chart Morris']),
		];

		return view('chart-morris', $data);
	}

	public function chart_flot()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Chart Flot']),
		];

		return view('chart-flot', $data);
	}

	public function chart_peity()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Chart Peity']),
		];

		return view('chart-peity', $data);
	}

	public function chart_c3()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Chart C3']),
		];

		return view('chart-c3', $data);
	}

	public function fontawesome()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Fontawesome']),
		];

		return view('icon-fontawesome', $data);
	}

	public function feather()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Feather']),
		];

		return view('icon-feather', $data);
	}

	public function iconic()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Iconic']),
		];

		return view('icon-iconic', $data);
	}

	public function material()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Material']),
		];

		return view('icon-material', $data);
	}

	public function pe7()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Pe7']),
		];

		return view('icon-pe7', $data);
	}

	public function simpleline()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Simpleline']),
		];

		return view('icon-simpleline', $data);
	}

	public function themify()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Themify']),
		];

		return view('icon-themify', $data);
	}

	public function weather()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Weather']),
		];

		return view('icon-weather', $data);
	}

	public function typicon()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Typicon']),
		];

		return view('icon-typicon', $data);
	}

	public function flag()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Flag']),
		];

		return view('icon-flag', $data);
	}

	public function form_basic()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Form Basic Inputs']),
		];

		return view('form-basic-inputs', $data);
	}

	public function form_inputs()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Form Inputs Groups']),
		];

		return view('form-input-groups', $data);
	}

	public function form_horizontal()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Form Horizontal']),
		];

		return view('form-horizontal', $data);
	}

	public function form_vertical()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Form Vertical']),
		];

		return view('form-vertical', $data);
	}

	public function form_mask()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Form Mask']),
		];

		return view('form-mask', $data);
	}

	public function form_validation()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Form Validation']),
		];

		return view('form-validation', $data);
	}

	public function form_select2()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Form Select2']),
		];

		return view('form-select2', $data);
	}

	public function form_fileupload()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Form Fileupload']),
		];

		return view('form-fileupload', $data);
	}

	public function tables_basic()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Tables Basic']),
		];

		return view('tables-basic', $data);
	}

	public function data_tables()
	{
		
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Data Tables']),
		];

		return view('data-tables', $data);
	}


}
