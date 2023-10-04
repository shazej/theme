<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('index', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('register', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');


Route::get('/', function () {
    return view('login');
})->name('login');

Route::get('/home', function () {
    return view('index');
})->name('index');
Route::get('/alerts', function () {
    return view('alerts');
    })->name('alerts');
    Route::get('/accordions', function () {
    return view('accordions');
    })->name('accordions');
    Route::get('/avatar', function () {
    return view('avatar');
    })->name('avatar');
    Route::get('/badges', function () {
    return view('badges');
    })->name('badges');
    Route::get('/breadcrumbs', function () {
    return view('breadcrumbs');
    })->name('breadcrumbs');
    Route::get('/buttongroup', function () {
    return view('buttongroup');
    })->name('buttongroup');
    Route::get('/buttons', function () {
    return view('buttons');
    })->name('buttons');
    Route::get('/cards', function () {
    return view('cards');
    })->name('cards');
    Route::get('/carousel', function () {
    return view('carousel');
    })->name('carousel');
    Route::get('/video', function () {
    return view('video');
    })->name('video');
    Route::get('/typography', function () {
    return view('typography');
    })->name('typography');
    Route::get('/tab', function () {
    return view('tab');
    })->name('tab');
    Route::get('/progress', function () {
    return view('progress');
    })->name('progress');
    Route::get('/pagination', function () {
    return view('pagination');
    })->name('pagination');
    Route::get('/offcanvas', function () {
    return view('offcanvas');
    })->name('offcanvas');
    Route::get('/modal', function () {
    return view('modal');
    })->name('modal');
    Route::get('/media', function () {
    return view('media');
    })->name('media');
    Route::get('/dropdowns', function () {
    return view('dropdowns');
    })->name('dropdowns');
    Route::get('/grid', function () {
    return view('grid');
    })->name('grid');
    Route::get('/images', function () {
    return view('images');
    })->name('images');
    Route::get('/placeholders', function () {
    return view('placeholders');
    })->name('placeholders');
Route::get('/index', function () {
return view('index');
})->name('index');
Route::get('/index-two', function () {
return view('index-two');
})->name('index-two');

Route::get('/index-three', function () {
return view('index-three');
})->name('index-three');

Route::get('/index-four', function () {
return view('index-four');
})->name('index-four');

Route::get('/index-five', function () {
return view('index-five');
})->name('index-five');

Route::get('/add-customer', function () {
return view('add-customer');
})->name('add-customer');

Route::get('/add-estimate', function () {
return view('add-estimate');
})->name('add-estimate');

Route::get('/invoice-grid', function () {
return view('invoice-grid');
})->name('invoice-grid');

Route::get('/invoices-settings', function () {
return view('invoices-settings');
})->name('invoices-settings');

Route::get('/invoices-overdue', function () {
return view('invoices-overdue');
})->name('invoices-overdue');

Route::get('/invoices-draft', function () {
return view('invoices-draft');
})->name('invoices-draft');

Route::get('/invoice-category', function () {
    return view('invoice-category');
})->name('invoice-category');

Route::get('/invoice-items', function () {
    return view('invoice-items');
})->name('invoice-items');

Route::get('/invoices-recurring', function () {
return view('invoices-recurring');
})->name('invoices-recurring');

Route::get('/invoices-cancelled', function () {
return view('invoices-cancelled');
})->name('invoices-cancelled');

Route::get('/tax-settings', function () {
return view('tax-settings');
})->name('tax-settings');

Route::get('/invoices-paid', function () {
return view('invoices-paid');
})->name('invoices-paid');

Route::get('/bank-settings', function () {
return view('bank-settings');
})->name('bank-settings');

Route::get('/add-expenses', function () {
return view('add-expenses');
})->name('add-expenses');
    
Route::get('/add-invoice', function () {
return view('add-invoice');
})->name('add-invoice');

Route::get('/add-payments', function () {
return view('add-payments');
})->name('add-payments');

Route::get('/blank-page', function () {
return view('blank-page');
})->name('blank-page');

Route::get('/calendar', function () {
return view('calendar');
})->name('calendar');

Route::get('/change-password', function () {
return view('change-password');
})->name('changepassword');

Route::get('/chat', function () {
return view('chat');
})->name('chat');

Route::get('/customers', function () {
return view('customers');
})->name('customers');

Route::get('/data-tables', function () {
return view('data-tables');
})->name('datatables');

Route::get('/delete-account', function () {
return view('delete-account');
})->name('delete-account');

Route::get('/edit-customer', function () {
return view('edit-customer');
})->name('edit-customer');

Route::get('/edit-estimate', function () {
return view('edit-estimate');
})->name('edit-estimate');

Route::get('/edit-expenses', function () {
return view('edit-expenses');
})->name('edit-expenses');

Route::get('/edit-invoice', function () {
return view('edit-invoice');
})->name('edit-invoice');

Route::get('/error-404', function () {
return view('error-404');
})->name('error-404');

Route::get('/error-500', function () {
return view('error-500');
})->name('error-500');

Route::get('/estimates', function () {
return view('estimates');
})->name('estimates');

Route::get('/expense-category', function () {
return view('expense-category');
})->name('expense-category');

Route::get('/expenses', function () {
return view('expenses');
})->name('expenses');

Route::get('/forgot-password', function () {
return view('forgot-password');
})->name('forgot-password');

Route::get('/form-basic-inputs', function () {
return view('form-basic-inputs');
})->name('form-basic-inputs');

Route::get('/form-horizontal', function () {
return view('form-horizontal');
})->name('form-horizontal');

Route::get('/form-input-groups', function () {
return view('form-input-groups');
})->name('form-input-groups');

Route::get('/form-mask', function () {
return view('form-mask');
})->name('form-mask');

Route::get('/form-validation', function () {
return view('form-validation');
})->name('form-validation');

Route::get('/form-vertical', function () {
return view('form-vertical');
})->name('form-vertical');

Route::get('/inbox', function () {
return view('inbox');
})->name('inbox');

Route::get('/invoices', function () {
return view('invoices');
})->name('invoices');

Route::get('/lock-screen', function () {
return view('lock-screen');
})->name('lock-screen');

Route::get('/login', function () {
return view('login');
})->name('login');

Route::get('/maps-vector', function () {
return view('maps-vector');
})->name('maps-vector');

Route::get('/notifications', function () {
return view('notifications');
})->name('notifications');

Route::get('/payments', function () {
return view('payments');
})->name('payments');

Route::get('/preferences', function () {
return view('preferences');
})->name('preferences');

Route::get('/profile', function () {
return view('profile');
})->name('profile');

Route::get('/register', function () {
return view('register');
})->name('register');

Route::get('/settings', function () {
return view('settings');
})->name('settings');

Route::get('/tables-basic', function () {
return view('tables-basic');
})->name('tablesbasic');

Route::get('/tax-types', function () {
return view('tax-types');
})->name('tax-types');

Route::get('/users', function () {
return view('users');
})->name('users');

Route::get('/view-estimate', function () {
return view('view-estimate');
})->name('view-estimate');

Route::get('/view-invoice', function () {
return view('view-invoice');
})->name('view-invoice');

Route::get('/expenses-report', function () {
return view('expenses-report');
})->name('expenses-report');

Route::get('/profit-loss-report', function () {
return view('profit-loss-report');
})->name('profit-loss-report');

Route::get('/sales-report', function () {
return view('sales-report');
})->name('sales-report');

Route::get('/taxs-report', function () {
return view('taxs-report');
})->name('taxs-report');

Route::get('/chart-apex', function () {
return view('chart-apex');
})->name('chart-apex');

Route::get('/chart-c3', function () {
return view('chart-c3');
})->name('chart-c3');

Route::get('/chart-flot', function () {
return view('chart-flot');
})->name('chart-flot');

Route::get('/chart-js', function () {
return view('chart-js');
})->name('chart-js');

Route::get('/chart-morris', function () {
return view('chart-morris');
})->name('chart-morris');

Route::get('/chart-peity', function () {
return view('chart-peity');
})->name('chart-peity');

Route::get('/clipboard', function () {
return view('clipboard');
})->name('clipboard');

Route::get('/counter', function () {
return view('counter');
})->name('counter');

Route::get('/icon-feather', function () {
return view('icon-feather');
})->name('icon-feather');

Route::get('/icon-flag', function () {
return view('icon-flag');
})->name('icon-flag');

Route::get('/icon-fontawesome', function () {
return view('icon-fontawesome');
})->name('icon-fontawesome');

Route::get('/icon-ionic', function () {
return view('icon-ionic');
})->name('icon-ionic');

Route::get('/icon-material', function () {
return view('icon-material');
})->name('icon-material');

Route::get('/icon-pe7', function () {
return view('icon-pe7');
})->name('icon-pe7');

Route::get('/icon-simpleline', function () {
return view('icon-simpleline');
})->name('icon-simpleline');

Route::get('/icon-themify', function () {
return view('icon-themify');
})->name('icon-themify');

Route::get('/icon-typicon', function () {
return view('icon-typicon');
})->name('icon-typicon');

Route::get('/icon-weather', function () {
return view('icon-weather');
})->name('icon-weather');

Route::get('/drag-drop', function () {
return view('drag-drop');
})->name('drag-drop');

Route::get('/form-select2', function () {
return view('form-select2');
})->name('form-select2');

Route::get('/form-wizard', function () {
return view('form-wizard');
})->name('form-wizard');

Route::get('/horizontal-timeline', function () {
return view('horizontal-timeline');
})->name('horizontal-timeline');

Route::get('/icon-weather', function () {
return view('icon-weather');
})->name('icon-weather');

Route::get('/icon-feather', function () {
return view('icon-feather');
})->name('icon-feather');

Route::get('/icon-flag', function () {
return view('icon-flag');
})->name('icon-flag');

Route::get('/icon-fontawesome', function () {
return view('icon-fontawesome');
})->name('icon-fontawesome');

Route::get('/icon-ionic', function () {
return view('icon-ionic');
})->name('icon-ionic');

Route::get('/icon-material', function () {
return view('icon-material');
})->name('icon-material');

Route::get('/icon-pe7', function () {
return view('icon-pe7');
})->name('icon-pe7');

Route::get('/icon-simpleline', function () {
return view('icon-simpleline');
})->name('icon-simpleline');

Route::get('/icon-themify', function () {
return view('icon-themify');
})->name('icon-themify');

Route::get('/icon-typicon', function () {
return view('icon-typicon');
})->name('icon-typicon');

Route::get('/icon-weather', function () {
return view('icon-weather');
})->name('icon-weather');

Route::get('/spinner', function () {
return view('spinner');
})->name('spinner');

Route::get('/lightbox', function () {
return view('lightbox');
})->name('lightbox');

Route::get('/notification', function () {
return view('notification');
})->name('notification');

Route::get('/popover', function () {
return view('popover');
})->name('popover');

Route::get('/rangeslider', function () {
return view('rangeslider');
})->name('rangeslider');

Route::get('/rating', function () {
return view('rating');
})->name('rating');

Route::get('/ribbon', function () {
return view('ribbon');
})->name('ribbon');

Route::get('/scrollbar', function () {
return view('scrollbar');
})->name('scrollbar');

Route::get('/spinner', function () {
return view('spinner');
})->name('spinner');

Route::get('/stickynote', function () {
return view('stickynote');
})->name('stickynote');

Route::get('/sweetalerts', function () {
return view('sweetalerts');
})->name('sweetalerts');

Route::get('/text-editor', function () {
return view('text-editor');
})->name('text-editor');

Route::get('/toastr', function () {
return view('toastr');
})->name('toastr');

Route::get('/tooltip', function () {
return view('tooltip');
})->name('tooltip');

Route::get('/timeline', function () {
return view('timeline');
})->name('timeline');

Route::get('/form-fileupload', function () {
return view('form-fileupload');
})->name('form-fileupload');

Route::get('/pending-blog', function () {
    return view('pending-blog');
    })->name('pending-blog');

Route::get('/view-invoice-two', function () {
    return view('view-invoice-two');
    })->name('view-invoice-two');

Route::get('/invoice-grid-two', function () {
    return view('invoice-grid-two');
    })->name('invoice-grid-two');

Route::get('/edit-blog', function () {
    return view('edit-blog');
    })->name('edit-blog');

Route::get('/blog-details', function () {
    return view('blog-details');
    })->name('blog-details');

Route::get('/blog-categories', function () {
    return view('blog-categories');
    })->name('blog-categories');

Route::get('/blog', function () {
    return view('blog');
    })->name('blog');

Route::get('/add-blog', function () {
    return view('add-blog');
    })->name('add-blog');
        
    
