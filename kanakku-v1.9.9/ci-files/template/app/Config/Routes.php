<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// Authentication Routing ---- Removed 


$routes->get('index', 'Home::index');
$routes->get('dashboard', 'Home::Dashboard');

//Customer
$routes->get('customer', 'Home::customer');
$routes->get('add_customer', 'Home::add_customer');
$routes->get('edit_customer', 'Home::edit_customer');

$routes->get('profile', 'Home::profile');
$routes->get('theme_settings', 'Home::theme_settings');
$routes->get('roles_permission', 'Home::roles_permission');
$routes->get('email', 'Home::email');
$routes->get('performance_settings', 'Home::performance_settings');
$routes->get('approval_settings', 'Home::approval_settings');
$routes->get('invoice_settings', 'Home::invoice_settings');
$routes->get('salary_settings', 'Home::salary_settings');
$routes->get('notification_settings', 'Home::notification_settings');
$routes->get('change_password', 'Home::change_password');
$routes->get('leave_type', 'Home::leave_type');
$routes->get('toxbox_settings', 'Home::toxbox_settings');
$routes->get('cron_settings', 'Home::cron_settings');
$routes->get('employee_dashboard', 'Home::employee_dashboard');
//estimates
$routes->get('estimates', 'Home::estimates');
$routes->get('view_estimate', 'Home::view_estimate');
$routes->get('add_estimate', 'Home::add_estimate');
$routes->get('edit_estimate', 'Home::edit_estimate');
//invoices
$routes->get('invoices', 'Home::invoices');
$routes->get('invoice_grid', 'Home::invoice_grid');
$routes->get('invoice_grid_two', 'Home::invoice_grid_two');
$routes->get('invoice_paid', 'Home::invoice_paid');
$routes->get('invoice_overdue', 'Home::invoice_overdue');
$routes->get('invoice_draft', 'Home::invoice_draft');
$routes->get('invoice_recurring', 'Home::invoice_recurring');
$routes->get('invoice_cancelled', 'Home::invoice_cancelled');
$routes->get('invoices_settings', 'Home::invoices_settings');
$routes->get('tax_settings', 'Home::tax_settings');
$routes->get('bank_settings', 'Home::bank_settings');
$routes->get('view_invoice', 'Home::view_invoice');
$routes->get('view_invoice_two', 'Home::view_invoice_two');
$routes->get('edit_invoice', 'Home::edit_invoice');
$routes->get('add_invoice', 'Home::add_invoice');
$routes->get('invoice_item', 'Home::invoice_item');
$routes->get('invoice_category', 'Home::invoice_category');
//payments
$routes->get('payments', 'Home::payments');
$routes->get('add_payments', 'Home::add_payments');
//expenses
$routes->get('expenses', 'Home::expenses');
$routes->get('add_expenses', 'Home::add_expenses');
$routes->get('edit_expenses', 'Home::edit_expenses');
//reports
$routes->get('sales_report', 'Home::sales_report');
$routes->get('expenses_report', 'Home::expenses_report');
$routes->get('profit_loss_report', 'Home::profit_loss_report');
$routes->get('tax_report', 'Home::tax_report');
//blogs
$routes->get('blogs', 'Home::blogs');
$routes->get('pending_blog', 'Home::pending_blog');
$routes->get('add_blog', 'Home::add_blog');
$routes->get('edit_blog', 'Home::edit_blog');
$routes->get('blog_details', 'Home::blog_details');
$routes->get('blog_categories', 'Home::blog_categories');
//Settings
$routes->get('settings', 'Home::settings');
$routes->get('preferences', 'Home::preferences');
$routes->get('tax_types', 'Home::tax_types');
$routes->get('expense_category', 'Home::expense_category');
$routes->get('notification', 'Home::notification');
$routes->get('change_password', 'Home::change_password');
$routes->get('delete_account', 'Home::delete_account');
//chat
$routes->get('chat', 'Home::chat');
//calendar
$routes->get('calendar', 'Home::calendar');
//E-mail
$routes->get('inbox', 'Home::inbox');
$routes->get('mail_view', 'Home::mail_view');
$routes->get('compose', 'Home::compose');
//provident_fund
$routes->get('provident_fund', 'Home::provident_fund');
//taxes
$routes->get('taxes', 'Home::taxes');
//categories
$routes->get('categories', 'Home::categories');
$routes->get('sub_category', 'Home::sub_category');
//budgets
$routes->get('budgets', 'Home::budgets');
$routes->get('budget_expenses', 'Home::budget_expenses');
$routes->get('budget_revenues', 'Home::budget_revenues');
//salary
$routes->get('salary', 'Home::salary');
$routes->get('salary_view', 'Home::salary_view');
//Payroll_item
$routes->get('payroll_item', 'Home::payroll_item');
//policies
$routes->get('policies', 'Home::policies');
//pages
$routes->get('error_404', 'Home::error_404');
$routes->get('error_500', 'Home::error_500');
$routes->get('users', 'Home::users');
$routes->get('blank_page', 'Home::blank_page');
$routes->get('maps_vector', 'Home::maps_vector');

//Base UI
$routes->get('alerts', 'Home::alerts');
$routes->get('accordions', 'Home::accordions');
$routes->get('avatar', 'Home::avatar');
$routes->get('badges', 'Home::badges');
$routes->get('buttons', 'Home::buttons');
$routes->get('buttongroup', 'Home::buttongroup');
$routes->get('breadcrumbs', 'Home::breadcrumbs');
$routes->get('cards', 'Home::cards');
$routes->get('carousel', 'Home::carousel');
$routes->get('dropdowns', 'Home::dropdowns');
$routes->get('grid', 'Home::grid');
$routes->get('images', 'Home::images');
$routes->get('lightbox', 'Home::lightbox');
$routes->get('media', 'Home::media');
$routes->get('modal', 'Home::modal');
$routes->get('offcanvas', 'Home::offcanvas');
$routes->get('pagination', 'Home::pagination');
$routes->get('popover', 'Home::popover');
$routes->get('progress', 'Home::progress');
$routes->get('placeholders', 'Home::placeholders');
$routes->get('rangeslider', 'Home::rangeslider');
$routes->get('spinner', 'Home::spinner');
$routes->get('sweetalerts', 'Home::sweetalerts');
$routes->get('tab', 'Home::tab');
$routes->get('toastr', 'Home::toastr');
$routes->get('tooltip', 'Home::tooltip');
$routes->get('typography', 'Home::typography');
$routes->get('video', 'Home::video');

//UI Interfaces
$routes->get('ribbon', 'Home::ribbon');
$routes->get('clipboard', 'Home::clipboard');
$routes->get('drag_drop', 'Home::drag_drop');
$routes->get('rating', 'Home::rating');
$routes->get('text_editor', 'Home::text_editor');
$routes->get('counter', 'Home::counter');
$routes->get('scrollbar', 'Home::scrollbar');
$routes->get('notifications', 'Home::notifications');
$routes->get('stickynote', 'Home::stickynote');
$routes->get('timeline', 'Home::timeline');
$routes->get('horizontal_timeline', 'Home::horizontal_timeline');
$routes->get('form_wizard', 'Home::form_wizard');
//Charts
$routes->get('chart_apex', 'Home::chart_apex');
$routes->get('chart_js', 'Home::chart_js');
$routes->get('chart_morris', 'Home::chart_morris');
$routes->get('chart_flot', 'Home::chart_flot');
$routes->get('chart_peity', 'Home::chart_peity');
$routes->get('chart_c3', 'Home::chart_c3');
//Icons
$routes->get('fontawesome', 'Home::fontawesome');
$routes->get('feather', 'Home::feather');
$routes->get('iconic', 'Home::iconic');
$routes->get('material', 'Home::material');
$routes->get('pe7', 'Home::pe7');
$routes->get('simpleline', 'Home::simpleline');
$routes->get('themify', 'Home::themify');
$routes->get('weather', 'Home::weather');
$routes->get('typicon', 'Home::typicon');
$routes->get('flag', 'Home::flag');
//Forms
$routes->get('form_basic', 'Home::form_basic');
$routes->get('form_inputs', 'Home::form_inputs');
$routes->get('form_horizontal', 'Home::form_horizontal');
$routes->get('form_vertical', 'Home::form_vertical');
$routes->get('form_validation', 'Home::form_validation');
$routes->get('form_mask', 'Home::form_mask');
$routes->get('form_select2', 'Home::form_select2');
$routes->get('form_fileupload', 'Home::form_fileupload');
//tables
$routes->get('tables_basic', 'Home::tables_basic');
$routes->get('data_tables', 'Home::data_tables');
// Pages
$routes->get('auth-login', 'Home::show_auth_login');
$routes->get('register', 'Home::register');
$routes->get('forgot_password', 'Home::forgot_password');
$routes->get('lock_screen', 'Home::lock_screen');

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
