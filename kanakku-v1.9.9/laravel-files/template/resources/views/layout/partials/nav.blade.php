<?php error_reporting(0);?>
 @if(!Route::is(['index-two','index-three','index-four','index-five']))
<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title"><span>Main</span></li>
                <li class="{{ Request::is('index') ? 'active' : '' }}">
                    <a href="{{url('index')}}"><i data-feather="home"></i> <span>Dashboard</span></a>
                </li>
                <li  class="{{ Request::is('customers','add-customer','edit-customer') ? 'active' : '' }}">
                    <a href="{{url('customers')}}"><i data-feather="users"></i> <span>Customers</span></a>
                </li>
                <li  class="{{ Request::is('estimates','add-estimate','edit-estimate','view-estimate') ? 'active' : '' }}">
                    <a href="{{url('estimates')}}"><i data-feather="file-text"></i> <span>Estimates</span></a>
                </li>
                <li class="{{ Request::is('invoices','view-invoice-two','invoice-grid-two','invoices-paid','invoices-overdue','invoices-draft','invoices-recurring','invoices-cancelled','invoice-grid','add-invoice','edit-invoice','view-invoice','invoices-settings','tax-settings','bank-settings') ? 'active' : '' }} submenu">
					<a href="#"><i data-feather="clipboard"></i> <span> Invoices</span> <span class="menu-arrow"></span></a>
						<ul>
							<li><a class="{{ Request::is('invoices','invoices-paid','invoices-overdue','invoices-draft','invoices-recurring','invoices-cancelled') ? 'active' : '' }}" href="{{url('invoices')}}" >Invoices List</a></li>
							<li><a class="{{ Request::is('invoice-grid') ? 'active' : '' }}" href="{{url('invoice-grid')}}">Invoices Grid</a></li>
                            <li><a class="{{ Request::is('invoice-grid-two') ? 'active' : '' }}" href="{{url('invoice-grid-two')}}">Invoices Grid 2</a></li>
							<li><a class="{{ Request::is('add-invoice') ? 'active' : '' }}" href="{{url('add-invoice')}}">Add Invoices</a></li>
							<li><a class="{{ Request::is('edit-invoice') ? 'active' : '' }}" href="{{url('edit-invoice')}}">Edit Invoices</a></li>
							<li><a class="{{ Request::is('view-invoice') ? 'active' : '' }}" href="{{url('view-invoice')}}">Invoices Details</a></li>
                            <li><a class="{{ Request::is('view-invoice-two') ? 'active' : '' }}" href="{{url('view-invoice-two')}}">Invoices Details 2</a></li>
							<li><a class="{{ Request::is('invoices-settings','tax-settings','bank-settings') ? 'active' : '' }}" href="{{url('invoices-settings')}}">Invoices Settings</a></li>
						</ul>
				</li>
                <li class="{{ Request::is('invoice-items','invoice-category') ? 'active' : '' }}">
                    <a href="{{url('invoice-items')}}"><i data-feather="star"></i> <span>Items</span></a>
                </li>
                <li class="{{ Request::is('payments','add-payments') ? 'active' : '' }}">
                    <a href="{{url('payments')}}"><i data-feather="credit-card"></i> <span>Payments</span></a>
                </li>
                <li  class="{{ Request::is('expenses','add-expenses','edit-expenses') ? 'active' : '' }}">
                    <a href="{{url('expenses')}}"><i data-feather="package"></i> <span>Expenses</span></a>
                </li>
                <li class="submenu <?php if($page=="sales-report" || $page=="expenses-report" || $page=="profit-loss-report" || $page=="taxs-report") { echo 'active'; } ?>">
                    <a href="#"><i data-feather="pie-chart"></i> <span> Reports</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a class="<?php if($page=="sales-report") { echo 'active'; } ?>" href="{{url('sales-report')}}">Sales Report</a></li>
                        <li><a class="<?php if($page=="expenses-report") { echo 'active'; } ?>" href="{{url('expenses-report')}}">Expenses Report</a></li>
                        <li><a class="<?php if($page=="profit-loss-report") { echo 'active'; } ?>" href="{{url('profit-loss-report')}}">Profit & Loss Report</a></li>
                        <li><a class="<?php if($page=="taxs-report") { echo 'active'; } ?>" href="{{url('taxs-report')}}">Taxs Report</a></li>
                    </ul>
                </li>
                <li class="submenu" <?php if($page=="blog" || $page=="pending-blog" || $page=="add-blog" || $page=="edit-blog" || $page=="blog-categories") { echo 'active'; } ?>">
								<a href="#"><i data-feather="grid"></i> <span> Blogs</span>
									<span class="menu-arrow"></span>
								</a>
								<ul>
									<li><a class="<?php if($page=="blog" || $page=="pending-blog" || $page=="blog-details") { echo 'active'; } ?>" href="{{url('blog')}}">All Blogs</a></li>
									<li><a class="<?php if($page=="add-blog") { echo 'active'; } ?>" href="{{url('add-blog')}}">Add Blog</a></li>
									<li><a class="<?php if($page=="edit-blog") { echo 'active'; } ?>" href="{{url('edit-blog')}}">Edit Blog</a></li>
									<li><a class="<?php if($page=="blog-categories") { echo 'active'; } ?>" href="{{url('blog-categories')}}">Categories</a></li>
								</ul>
							</li>

                <li  class="{{ Request::is('settings','change-password','delete-account','expense-category','notifications','preferences','tax-types') ? 'active' : '' }}">
                    <a href="{{url('settings')}}"><i data-feather="settings"></i> <span>Settings</span></a>
                </li>
                <li class="submenu <?php if($page=="chat" || $page=="calendar" || $page=="calendar" || $page=="inbox") { echo 'active'; } ?>">
                    <a href="#"><i data-feather="grid"></i> <span> Application</span> <span class="menu-arrow"></span></a>
                    <ul>
                    <li><a class="<?php if($page=="chat") { echo 'active'; } ?>" href="{{url('chat')}}">Chat</a></li>                    
                    <li><a class="<?php if($page=="calendar") { echo 'active'; } ?>" href="{{url('calendar')}}">Calendar</a></li>
                    <li><a class="<?php if($page=="inbox") { echo 'active'; } ?>" href="{{url('inbox')}}">Email</a></li>
                    </ul>
                </li>
                <li class="menu-title"> 
                    <span>Pages</span>
                </li>
                <li class="{{ Request::is('profile') ? 'active' : '' }}"> 
                    <a href="{{url('profile')}}"><i data-feather="user-plus"></i> <span>Profile</span></a>
                </li>
                <li class="submenu">
                    <a href="#"><i data-feather="lock"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{url('login')}}"> Login </a></li>
                        <li><a href="{{url('register')}}"> Register </a></li>
                        <li><a href="{{url('forgot-password')}}"> Forgot Password </a></li>
                        <li><a href="{{url('lock-screen')}}"> Lock Screen </a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i data-feather="alert-octagon"></i> <span> Error Pages </span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{url('error-404')}}">404 Error </a></li>
                        <li><a href="{{url('error-500')}}">500 Error </a></li>
                    </ul>
                </li>
                <li class="{{ Request::is('users') ? 'active' : '' }}"> 
                    <a href="{{url('users')}}"><i data-feather="user"></i> <span>Users</span></a>
                </li>
                <li class="{{ Request::is('blank-page') ? 'active' : '' }}"> 
                    <a href="{{url('blank-page')}}"><i data-feather="file"></i> <span>Blank Page</span></a>
                </li>
                <li class="{{ Request::is('maps-vector') ? 'active' : '' }}"> 
                    <a href="{{url('maps-vector')}}"><i data-feather="map-pin"></i> <span>Vector Maps</span></a>
                </li>
                <li class="menu-title"> 
                    <span>UI Interface</span>
                </li>
                <li class="{{ Request::is('alerts','accordions','avatar','badges','buttons','buttongroup','breadcrumbs','cards','carousel','dropdowns','grid',
                    'images','lightbox','media','modal','offcanvas','pagination','popover','progress','placeholders','rangeslider','spinner',
                    'sweetalerts','tab','toastr','tooltip','typography','video') ? 'active' : '' }} submenu">
                    <a href="#"><i class="fab fa-get-pocket"></i> <span>Base UI </span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a class="{{ Request::is('alerts') ? 'active' : '' }}" href="{{url('alerts')}}">Alerts</a></li>                                    
                        <li><a class="{{ Request::is('accordions') ? 'active' : '' }}" href="{{url('accordions')}}">Accordions</a></li>
                        <li><a class="{{ Request::is('avatar') ? 'active' : '' }}" href="{{url('avatar')}}" class="active">Avatar</a></li> 
                        <li><a class="{{ Request::is('badges') ? 'active' : '' }}" href="{{url('badges')}}">Badges</a></li>
                        <li><a class="{{ Request::is('buttons') ? 'active' : '' }}" href="{{url('buttons')}}">Buttons</a></li>   
                        <li><a class="{{ Request::is('buttongroup') ? 'active' : '' }}" href="{{url('buttongroup')}}">Button Group</a></li>                                  
                        <li><a class="{{ Request::is('breadcrumbs') ? 'active' : '' }}" href="{{url('breadcrumbs')}}">Breadcrumb</a></li>
                        <li><a class="{{ Request::is('cards') ? 'active' : '' }}" href="{{url('cards')}}">Cards</a></li>
                        <li><a class="{{ Request::is('carousel') ? 'active' : '' }}" href="{{url('carousel')}}">Carousel</a></li>                                   
                        <li><a class="{{ Request::is('dropdowns') ? 'active' : '' }}" href="{{url('dropdowns')}}">Dropdowns</a></li>
                        <li><a class="{{ Request::is('grid') ? 'active' : '' }}" href="{{url('grid')}}">Grid</a></li>
                        <li><a class="{{ Request::is('images') ? 'active' : '' }}" href="{{url('images')}}">Images</a></li>
                        <li><a class="{{ Request::is('lightbox') ? 'active' : '' }}" href="{{url('lightbox')}}">Lightbox</a></li>
                        <li><a class="{{ Request::is('media') ? 'active' : '' }}" href="{{url('media')}}">Media</a></li>                              
                        <li><a class="{{ Request::is('modal') ? 'active' : '' }}" href="{{url('modal')}}">Modals</a></li>
                        <li><a class="{{ Request::is('offcanvas') ? 'active' : '' }}" href="{{url('offcanvas')}}">Offcanvas</a></li>
                        <li><a class="{{ Request::is('pagination') ? 'active' : '' }}" href="{{url('pagination')}}">Pagination</a></li>
                        <li><a class="{{ Request::is('popover') ? 'active' : '' }}" href="{{url('popover')}}">Popover</a></li>                                    
                        <li><a class="{{ Request::is('progress') ? 'active' : '' }}" href="{{url('progress')}}">Progress Bars</a></li>
                        <li><a class="{{ Request::is('placeholders') ? 'active' : '' }}" href="{{url('placeholders')}}">Placeholders</a></li>
                        <li><a class="{{ Request::is('rangeslider') ? 'active' : '' }}" href="{{url('rangeslider')}}">Range Slider</a></li>                                    
                        <li><a class="{{ Request::is('spinner') ? 'active' : '' }}" href="{{url('spinner')}}">Spinner</a></li>
                        <li><a class="{{ Request::is('sweetalerts') ? 'active' : '' }}" href="{{url('sweetalerts')}}">Sweet Alerts</a></li>
                        <li><a class="{{ Request::is('tab') ? 'active' : '' }}" href="{{url('tab')}}">Tabs</a></li>
                        <li><a class="{{ Request::is('toastr') ? 'active' : '' }}" href="{{url('toastr')}}">Toasts</a></li>
                        <li><a class="{{ Request::is('tooltip') ? 'active' : '' }}" href="{{url('tooltip')}}">Tooltip</a></li>
                        <li><a class="{{ Request::is('typography') ? 'active' : '' }}" href="{{url('typography')}}">Typography</a></li>
                        <li><a class="{{ Request::is('video') ? 'active' : '' }}" href="{{url('video')}}">Video</a></li>
                    </ul>
                </li>
                <li class="{{ Request::is('ribbon','clipboard','drag-drop','rating',
                    'text-editor','counter','scrollbar','notification','stickynote','timeline','horizontal-timeline','form-wizard') ? 'active' : '' }} submenu">
                    <a href="#"><i data-feather="box"></i> <span>Elements </span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a class="{{ Request::is('ribbon') ? 'active' : '' }}" href="ribbon">Ribbon</a></li>
                        <li><a class="{{ Request::is('clipboard') ? 'active' : '' }}" href="clipboard">Clipboard</a></li>
                        <li><a class="{{ Request::is('drag-drop') ? 'active' : '' }}" href="drag-drop">Drag & Drop</a></li>
                        <li><a class="{{ Request::is('rating') ? 'active' : '' }}" href="rating">Rating</a></li>
                        <li><a class="{{ Request::is('text-editor') ? 'active' : '' }}" href="text-editor">Text Editor</a></li>
                        <li><a class="{{ Request::is('counter') ? 'active' : '' }}" href="counter">Counter</a></li>
                        <li><a class="{{ Request::is('scrollbar') ? 'active' : '' }}" href="scrollbar">Scrollbar</a></li>
                        <li><a class="{{ Request::is('notification') ? 'active' : '' }}" href="notification">Notification</a></li>
                        <li><a class="{{ Request::is('stickynote') ? 'active' : '' }}" href="stickynote">Sticky Note</a></li>
                        <li><a class="{{ Request::is('timeline') ? 'active' : '' }}" href="timeline">Timeline</a></li>
                        <li><a class="{{ Request::is('horizontal-timeline') ? 'active' : '' }}" href="horizontal-timeline">Horizontal Timeline</a></li>
                        <li><a class="{{ Request::is('form-wizard') ? 'active' : '' }}" href="form-wizard">Form Wizard</a></li>
                    </ul>
                </li>
                <li class="{{ Request::is('chart-apex','chart-js','chart-morris','chart-flot','chart-peity','chart-c3') ? 'active' : '' }} submenu">
                    <a href="#"><i data-feather="bar-chart-2"></i> <span> Charts </span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a class="{{ Request::is('chart-apex') ? 'active' : '' }}" href="chart-apex">Apex Charts</a></li>
                        <li><a class="{{ Request::is('chart-js') ? 'active' : '' }}" href="chart-js">Chart Js</a></li>
                        <li><a class="{{ Request::is('chart-morris') ? 'active' : '' }}" href="chart-morris">Morris Charts</a></li>
                        <li><a class="{{ Request::is('chart-flot') ? 'active' : '' }}" href="chart-flot">Flot Charts</a></li>
                        <li><a class="{{ Request::is('chart-peity') ? 'active' : '' }}" href="chart-peity">Peity Charts</a></li>
                        <li><a class="{{ Request::is('chart-c3') ? 'active' : '' }}" href="chart-c3">C3 Charts</a></li>
                    </ul>
                </li>
                <li class="{{ Request::is('icon-fontawesome','icon-feather','icon-ionic','icon-material','icon-pe7','icon-simpleline','icon-themify',
                    'icon-weather','icon-typicon','icon-flag') ? 'active' : '' }} submenu">
                    <a href="#"><i data-feather="award"></i> <span> Icons </span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a class="{{ Request::is('icon-fontawesome') ? 'active' : '' }}" href="icon-fontawesome">Fontawesome Icons</a></li>
                        <li><a class="{{ Request::is('icon-feather') ? 'active' : '' }}" href="icon-feather">Feather Icons</a></li>
                        <li><a class="{{ Request::is('icon-ionic') ? 'active' : '' }}" href="icon-ionic">Ionic Icons</a></li>
                        <li><a class="{{ Request::is('icon-material') ? 'active' : '' }}" href="icon-material">Material Icons</a></li>
                        <li><a class="{{ Request::is('icon-pe7') ? 'active' : '' }}" href="icon-pe7">Pe7 Icons</a></li>
                        <li><a class="{{ Request::is('icon-simpleline') ? 'active' : '' }}" href="icon-simpleline">Simpleline Icons</a></li>
                        <li><a class="{{ Request::is('icon-themify') ? 'active' : '' }}" href="icon-themify">Themify Icons</a></li>
                        <li><a class="{{ Request::is('icon-weather') ? 'active' : '' }}" href="icon-weather">Weather Icons</a></li>
                        <li><a class="{{ Request::is('icon-typicon') ? 'active' : '' }}" href="icon-typicon">Typicon Icons</a></li>
                        <li><a class="{{ Request::is('icon-flag') ? 'active' : '' }}" href="icon-flag">Flag Icons</a></li>
                    </ul>
                </li>
                <li class="submenu <?php if($page=="form-basic-inputs" || $page=="form-horizontal" || $page=="form-vertical" || $page=="form-mask" || $page=="form-input-groups" || $page=="form-validation") { echo 'active'; } ?>">
                    <a href="#"><i data-feather="columns"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a class="<?php if($page=="form-basic-inputs") { echo 'active'; } ?>" href="{{url('form-basic-inputs')}}">Basic Inputs </a></li>
                        <li><a class="<?php if($page=="form-input-groups") { echo 'active'; } ?>" href="{{url('form-input-groups')}}">Input Groups </a></li>
                        <li><a class="<?php if($page=="form-horizontal") { echo 'active'; } ?>" href="{{url('form-horizontal')}}">Horizontal Form </a></li>
                        <li><a class="<?php if($page=="form-vertical") { echo 'active'; } ?>" href="{{url('form-vertical')}}"> Vertical Form </a></li>
                        <li><a class="<?php if($page=="form-mask") { echo 'active'; } ?>" href="{{url('form-mask')}}"> Form Mask </a></li>
                        <li><a class="<?php if($page=="form-validation") { echo 'active'; } ?>" href="{{url('form-validation')}}"> Form Validation </a></li>
                        <li><a class="<?php if($page=="form-select2") { echo 'active'; } ?>" href="{{url('form-select2')}}">Form Select2 </a></li>
						<li><a class="<?php if($page=="form-fileupload") { echo 'active'; } ?>" href="{{url('form-fileupload')}}">File Upload </a></li>
                    </ul>
                </li>

                <li class="submenu <?php if($page=="tables-basic" || $page=="data-tables") { echo 'active'; } ?>">
                    <a href="#"><i data-feather="layout"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a class="<?php if($page=="tables-basic") { echo 'active'; } ?>" href="{{url('tables-basic')}}">Basic Tables </a></li>
                        <li><a class="<?php if($page=="data-tables") { echo 'active'; } ?>" href="{{url('data-tables')}}">Data Table </a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->
@endif

    
@if(Route::is(['index-two']))

<!-- Sidebar -->
            <div class="sidebar sidebar-two" id="sidebar">
                <div class="sidebar-inner slimscroll">
                    <div id="sidebar-menu" class="sidebar-menu sidebar-menu-two">
                        <ul>
                            <li class="menu-title menu-title-two"><span>Main</span></li>
                            <li class="active">
                                <a href="{{url('index')}}"><i data-feather="home"></i> <span>Dashboard</span></a>
                            </li>
                            <li>
                                <a href="{{url('customers')}}"><i data-feather="users"></i> <span>Customers</span></a>
                            </li>
                            <li>
                                <a href="{{url('estimates')}}"><i data-feather="file-text"></i> <span>Estimates</span></a>
                            </li>
                            <li class="{{ Request::is('invoices','invoice-grid','invoice-grid-two','add-invoice','edit-invoice','view-invoice','view-invoice-two','invoice-settings') ? 'active' : '' }} submenu">
                                <a href="#"><i data-feather="clipboard"></i> <span> Invoices</span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a class="{{ Request::is('invoices') ? 'active' : '' }}" href="{{url('invoices')}}">Invoices List</a></li>
                                    <li><a class="{{ Request::is('invoice-grid') ? 'active' : '' }}" href="{{url('invoice-grid')}}">Invoices Grid</a></li>
                                    <li><a class="{{ Request::is('invoice-grid-two') ? 'active' : '' }}" href="{{url('invoice-grid-two')}}">Invoices Grid 2</a></li>
                                    <li><a class="{{ Request::is('add-invoice') ? 'active' : '' }}" href="{{url('add-invoice')}}">Add Invoices</a></li>
                                    <li><a class="{{ Request::is('edit-invoice') ? 'active' : '' }}" href="{{url('edit-invoice')}}">Edit Invoices</a></li>
                                    <li><a class="{{ Request::is('view-invoice') ? 'active' : '' }}" href="{{url('view-invoice')}}">Invoices Details</a></li>
                                    <li><a class="{{ Request::is('view-invoice-two') ? 'active' : '' }}" href="{{url('view-invoice-two')}}">Invoices Details 2</a></li>
                                    <li><a class="{{ Request::is('invoice-settings') ? 'active' : '' }}" href="{{url('invoices-settings')}}">Invoices Settings</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="invoice-items"><i data-feather="star"></i> <span>Items</span></a>
                            </li>
                            <li>
                                <a href="{{url('payments')}}"><i data-feather="credit-card"></i> <span>Payments</span></a>
                            </li>
                            <li>
                                <a href="{{url('expenses')}}"><i data-feather="package"></i> <span>Expenses</span></a>
                            </li>
                            <li class="submenu">
                                <a href="#"><i data-feather="pie-chart"></i> <span> Reports</span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="{{url('sales-report')}}">Sales Report</a></li>
                                    <li><a href="{{url('expenses-report')}}">Expenses Report</a></li>
                                    <li><a href="{{url('profit-loss-report')}}">Profit & Loss Report</a></li>
                                    <li><a href="{{url('taxs-report')}}">Taxs Report</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{url('settings')}}"><i data-feather="settings"></i> <span>Settings</span></a>
                            </li>
                            <li class="submenu">
                                <a href="#"><i data-feather="grid"></i> <span> Application</span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="{{url('chat')}}">Chat</a></li>
                                    <li><a href="{{url('calendar')}}">Calendar</a></li>
                                    <li><a href="{{url('inbox')}}">Email</a></li>
                                </ul>
                            </li>
                            <li class="menu-title menu-title-two"> 
                                <span>Pages</span>
                            </li>
                            <li> 
                                <a href="{{url('profile')}}"><i data-feather="user-plus"></i> <span>Profile</span></a>
                            </li>
                            <li class="submenu">
                                <a href="#"><i data-feather="lock"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="{{url('login')}}"> Login </a></li>
                                    <li><a href="{{url('register')}}"> Register </a></li>
                                    <li><a href="{{url('forgot-password')}}"> Forgot Password </a></li>
                                    <li><a href="{{url('lock-screen')}}"> Lock Screen </a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="#"><i data-feather="alert-octagon"></i> <span> Error Pages </span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="{{url('error-404')}}">404 Error </a></li>
                                    <li><a href="{{url('error-500')}}">500 Error </a></li>
                                </ul>
                            </li>
                            <li> 
                                <a href="{{url('users')}}"><i data-feather="user"></i> <span>Users</span></a>
                            </li>
                            <li> 
                                <a href="{{url('blank-page')}}"><i data-feather="file"></i> <span>Blank Page</span></a>
                            </li>
                            <li> 
                                <a href="{{url('maps-vector')}}"><i data-feather="map-pin"></i> <span>Vector Maps</span></a>
                            </li>
                            <li class="menu-title menu-title-two"> 
                                <span>UI Interface</span>
                            </li>
                            <li class="{{ Request::is('alerts','accordions','avatar','badges','buttons','buttongroup','breadcrumbs','cards','carousel','dropdowns','grid',
                                'images','lightbox','media','modal','offcanvas','pagination','popover','progress','placeholders','rangeslider','spinner',
                                'sweetalerts','tab','toastr','tooltip','typography','video') ? 'active' : '' }} submenu">
                                <a href="#"><i class="fab fa-get-pocket"></i> <span>Base UI </span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a class="{{ Request::is('alerts') ? 'active' : '' }}" href="{{url('alerts')}}">Alerts</a></li>                                    
                                    <li><a class="{{ Request::is('accordions') ? 'active' : '' }}" href="{{url('accordions')}}">Accordions</a></li>
                                    <li><a class="{{ Request::is('avatar') ? 'active' : '' }}" href="{{url('avatar')}}" class="active">Avatar</a></li> 
                                    <li><a class="{{ Request::is('badges') ? 'active' : '' }}" href="{{url('badges')}}">Badges</a></li>
                                    <li><a class="{{ Request::is('buttons') ? 'active' : '' }}" href="{{url('buttons')}}">Buttons</a></li>   
                                    <li><a class="{{ Request::is('buttongroup') ? 'active' : '' }}" href="{{url('buttongroup')}}">Button Group</a></li>                                  
                                    <li><a class="{{ Request::is('breadcrumbs') ? 'active' : '' }}" href="{{url('breadcrumbs')}}">Breadcrumb</a></li>
                                    <li><a class="{{ Request::is('cards') ? 'active' : '' }}" href="{{url('cards')}}">Cards</a></li>
                                    <li><a class="{{ Request::is('carousel') ? 'active' : '' }}" href="{{url('carousel')}}">Carousel</a></li>                                   
                                    <li><a class="{{ Request::is('dropdowns') ? 'active' : '' }}" href="{{url('dropdowns')}}">Dropdowns</a></li>
                                    <li><a class="{{ Request::is('grid') ? 'active' : '' }}" href="{{url('grid')}}">Grid</a></li>
                                    <li><a class="{{ Request::is('images') ? 'active' : '' }}" href="{{url('images')}}">Images</a></li>
                                    <li><a class="{{ Request::is('lightbox') ? 'active' : '' }}" href="{{url('lightbox')}}">Lightbox</a></li>
                                    <li><a class="{{ Request::is('media') ? 'active' : '' }}" href="{{url('media')}}">Media</a></li>                              
                                    <li><a class="{{ Request::is('modal') ? 'active' : '' }}" href="{{url('modal')}}">Modals</a></li>
                                    <li><a class="{{ Request::is('offcanvas') ? 'active' : '' }}" href="{{url('offcanvas')}}">Offcanvas</a></li>
                                    <li><a class="{{ Request::is('pagination') ? 'active' : '' }}" href="{{url('pagination')}}">Pagination</a></li>
                                    <li><a class="{{ Request::is('popover') ? 'active' : '' }}" href="{{url('popover')}}">Popover</a></li>                                    
                                    <li><a class="{{ Request::is('progress') ? 'active' : '' }}" href="{{url('progress')}}">Progress Bars</a></li>
                                    <li><a class="{{ Request::is('placeholders') ? 'active' : '' }}" href="{{url('placeholders')}}">Placeholders</a></li>
                                    <li><a class="{{ Request::is('rangeslider') ? 'active' : '' }}" href="{{url('rangeslider')}}">Range Slider</a></li>                                    
                                    <li><a class="{{ Request::is('spinner') ? 'active' : '' }}" href="{{url('spinner')}}">Spinner</a></li>
                                    <li><a class="{{ Request::is('sweetalerts') ? 'active' : '' }}" href="{{url('sweetalerts')}}">Sweet Alerts</a></li>
                                    <li><a class="{{ Request::is('tab') ? 'active' : '' }}" href="{{url('tab')}}">Tabs</a></li>
                                    <li><a class="{{ Request::is('toastr') ? 'active' : '' }}" href="{{url('toastr')}}">Toasts</a></li>
                                    <li><a class="{{ Request::is('tooltip') ? 'active' : '' }}" href="{{url('tooltip')}}">Tooltip</a></li>
                                    <li><a class="{{ Request::is('typography') ? 'active' : '' }}" href="{{url('typography')}}">Typography</a></li>
                                    <li><a class="{{ Request::is('video') ? 'active' : '' }}" href="{{url('video')}}">Video</a></li>
                                </ul>
                            </li>
                            <li class="{{ Request::is('ribbon','clipboard','drag-drop','rating',
                                'text-editor','counter','scrollbar','notification','stickynote','timeline','horizontal-timeline','form-wizard') ? 'active' : '' }} submenu">
                                <a href="#"><i data-feather="box"></i> <span>Elements </span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a class="{{ Request::is('ribbon') ? 'active' : '' }}" href="ribbon">Ribbon</a></li>
                                    <li><a class="{{ Request::is('clipboard') ? 'active' : '' }}" href="clipboard">Clipboard</a></li>
                                    <li><a class="{{ Request::is('drag-drop') ? 'active' : '' }}" href="drag-drop">Drag & Drop</a></li>
                                    <li><a class="{{ Request::is('rating') ? 'active' : '' }}" href="rating">Rating</a></li>
                                    <li><a class="{{ Request::is('text-editor') ? 'active' : '' }}" href="text-editor">Text Editor</a></li>
                                    <li><a class="{{ Request::is('counter') ? 'active' : '' }}" href="counter">Counter</a></li>
                                    <li><a class="{{ Request::is('scrollbar') ? 'active' : '' }}" href="scrollbar">Scrollbar</a></li>
                                    <li><a class="{{ Request::is('notification') ? 'active' : '' }}" href="notification">Notification</a></li>
                                    <li><a class="{{ Request::is('stickynote') ? 'active' : '' }}" href="stickynote">Sticky Note</a></li>
                                    <li><a class="{{ Request::is('timeline') ? 'active' : '' }}" href="timeline">Timeline</a></li>
                                    <li><a class="{{ Request::is('horizontal-timeline') ? 'active' : '' }}" href="horizontal-timeline">Horizontal Timeline</a></li>
                                    <li><a class="{{ Request::is('form-wizard') ? 'active' : '' }}" href="form-wizard">Form Wizard</a></li>
                                </ul>               
                            </li>
                            <li class="{{ Request::is('chart-apex','chart-js','chart-morris','chart-flot','chart-peity','chart-c3') ? 'active' : '' }} submenu">
                                <a href="#"><i data-feather="bar-chart-2"></i> <span> Charts </span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a class="{{ Request::is('chart-apex') ? 'active' : '' }}" href="chart-apex">Apex Charts</a></li>
                                    <li><a class="{{ Request::is('chart-js') ? 'active' : '' }}" href="chart-js">Chart Js</a></li>
                                    <li><a class="{{ Request::is('chart-morris') ? 'active' : '' }}" href="chart-morris">Morris Charts</a></li>
                                    <li><a class="{{ Request::is('chart-flot') ? 'active' : '' }}" href="chart-flot">Flot Charts</a></li>
                                    <li><a class="{{ Request::is('chart-peity') ? 'active' : '' }}" href="chart-peity">Peity Charts</a></li>
                                    <li><a class="{{ Request::is('chart-c3') ? 'active' : '' }}" href="chart-c3">C3 Charts</a></li>
                                </ul>
                            </li>
                            <li class="{{ Request::is('icon-fontawesome','icon-feather','icon-ionic','icon-material','icon-pe7','icon-simpleline','icon-themify',
                                'icon-weather','icon-typicon','icon-flag') ? 'active' : '' }} submenu">
                                <a href="#"><i data-feather="award"></i> <span> Icons </span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a class="{{ Request::is('icon-fontawesome') ? 'active' : '' }}" href="icon-fontawesome">Fontawesome Icons</a></li>
                                    <li><a class="{{ Request::is('icon-feather') ? 'active' : '' }}" href="icon-feather">Feather Icons</a></li>
                                    <li><a class="{{ Request::is('icon-ionic') ? 'active' : '' }}" href="icon-ionic">Ionic Icons</a></li>
                                    <li><a class="{{ Request::is('icon-material') ? 'active' : '' }}" href="icon-material">Material Icons</a></li>
                                    <li><a class="{{ Request::is('icon-pe7') ? 'active' : '' }}" href="icon-pe7">Pe7 Icons</a></li>
                                    <li><a class="{{ Request::is('icon-simpleline') ? 'active' : '' }}" href="icon-simpleline">Simpleline Icons</a></li>
                                    <li><a class="{{ Request::is('icon-themify') ? 'active' : '' }}" href="icon-themify">Themify Icons</a></li>
                                    <li><a class="{{ Request::is('icon-weather') ? 'active' : '' }}" href="icon-weather">Weather Icons</a></li>
                                    <li><a class="{{ Request::is('icon-typicon') ? 'active' : '' }}" href="icon-typicon">Typicon Icons</a></li>
                                    <li><a class="{{ Request::is('icon-flag') ? 'active' : '' }}" href="icon-flag">Flag Icons</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="#"><i data-feather="columns"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a class="{{ Request::is('form-basic-inputs') ? 'active' : '' }}" href="{{ url('form-basic-inputs') }}">Basic Inputs </a></li>
									<li><a class="{{ Request::is('form-input-groups') ? 'active' : '' }}" href="{{ url('form-input-groups') }}">Input Groups </a></li>
									<li><a class="{{ Request::is('form-horizontal') ? 'active' : '' }}" href="{{ url('form-horizontal') }}">Horizontal Form </a></li>
									<li><a class="{{ Request::is('form-vertical') ? 'active' : '' }}" href="{{ url('form-vertical') }}"> Vertical Form </a></li>
									<li><a class="{{ Request::is('form-mask') ? 'active' : '' }}" href="{{ url('form-mask') }}"> Form Mask </a></li>
									<li><a class="{{ Request::is('form-validation') ? 'active' : '' }}" href="{{ url('form-validation') }}"> Form Validation </a></li>									
									<li><a class="{{ Request::is('form-select2') ? 'active' : '' }}" href="{{ url('form-select2') }}">Form Select2 </a></li>
									<li><a class="{{ Request::is('form-fileupload') ? 'active' : '' }}" href="{{ url('form-fileupload') }}">File Upload </a></li>
                                </ul>
                            </li>
                            <li class="submenu <?php if($page=="tables-basic" || $page=="data-tables") { echo 'active'; } ?>">
                                <a href="#"><i data-feather="layout"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a class="<?php if($page=="tables-basic") { echo 'active'; } ?>" href="{{url('tables-basic')}}">Basic Tables </a></li>
                                    <li><a class="<?php if($page=="data-tables") { echo 'active'; } ?>" href="{{url('data-tables')}}">Data Table </a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Sidebar -->
@endif

@if(Route::is(['index-three']))
<!-- Sidebar -->
        <div class="sidebar sidebar-three-three" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title"><span>Main</span></li>
                        <li class="active">
                            <a href="{{url('index')}}"><i data-feather="home"></i> <span>Dashboard</span></a>
                        </li>
                        <li>
                            <a href="{{url('customers')}}"><i data-feather="users"></i> <span>Customers</span></a>
                        </li>
                        <li>
                            <a href="{{url('estimates')}}"><i data-feather="file-text"></i> <span>Estimates</span></a>
                        </li>
                        <li class="{{ Request::is('invoices','invoice-grid','invoice-grid-two','add-invoice','edit-invoice','view-invoice','view-invoice-two','invoice-settings') ? 'active' : '' }} submenu">
                                <a href="#"><i data-feather="clipboard"></i> <span> Invoices</span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a class="{{ Request::is('invoices') ? 'active' : '' }}" href="{{url('invoices')}}">Invoices List</a></li>
                                    <li><a class="{{ Request::is('invoice-grid') ? 'active' : '' }}" href="{{url('invoice-grid')}}">Invoices Grid</a></li>
                                    <li><a class="{{ Request::is('invoice-grid-two') ? 'active' : '' }}" href="{{url('invoice-grid-two')}}">Invoices Grid 2</a></li>
                                    <li><a class="{{ Request::is('add-invoice') ? 'active' : '' }}" href="{{url('add-invoice')}}">Add Invoices</a></li>
                                    <li><a class="{{ Request::is('edit-invoice') ? 'active' : '' }}" href="{{url('edit-invoice')}}">Edit Invoices</a></li>
                                    <li><a class="{{ Request::is('view-invoice') ? 'active' : '' }}" href="{{url('view-invoice')}}">Invoices Details</a></li>
                                    <li><a class="{{ Request::is('view-invoice-two') ? 'active' : '' }}" href="{{url('view-invoice-two')}}">Invoices Details 2</a></li>
                                    <li><a class="{{ Request::is('invoice-settings') ? 'active' : '' }}" href="{{url('invoices-settings')}}">Invoices Settings</a></li>
                                </ul>
                            </li>
                        <li>
                            <a href="invoice-items"><i data-feather="star"></i> <span>Items</span></a>
                        </li>
                        <li>
                            <a href="{{url('payments')}}"><i data-feather="credit-card"></i> <span>Payments</span></a>
                        </li>
                        <li>
                            <a href="{{url('expenses')}}"><i data-feather="package"></i> <span>Expenses</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i data-feather="pie-chart"></i> <span> Reports</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{url('sales-report')}}">Sales Report</a></li>
                                <li><a href="{{url('expenses-report')}}">Expenses Report</a></li>
                                <li><a href="{{url('profit-loss-report')}}">Profit & Loss Report</a></li>
                                <li><a href="{{url('taxs-report')}}">Taxs Report</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{url('settings')}}"><i data-feather="settings"></i> <span>Settings</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i data-feather="grid"></i> <span> Application</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{url('chat')}}">Chat</a></li>
                                <li><a href="{{url('calendar')}}">Calendar</a></li>
                                <li><a href="{{url('inbox')}}">Email</a></li>
                            </ul>
                        </li>
                        <li class="menu-title"> 
                            <span>Pages</span>
                        </li>
                        <li> 
                            <a href="{{url('profile')}}"><i data-feather="user-plus"></i> <span>Profile</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i data-feather="lock"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{url('login')}}"> Login </a></li>
                                <li><a href="{{url('register')}}"> Register </a></li>
                                <li><a href="{{url('forgot-password')}}"> Forgot Password </a></li>
                                <li><a href="{{url('lock-screen')}}"> Lock Screen </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i data-feather="alert-octagon"></i> <span> Error Pages </span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{url('error-404')}}">404 Error </a></li>
                                <li><a href="{{url('error-500')}}">500 Error </a></li>
                            </ul>
                        </li>
                        <li> 
                            <a href="{{url('users')}}"><i data-feather="user"></i> <span>Users</span></a>
                        </li>
                        <li> 
                            <a href="{{url('blank-page')}}"><i data-feather="file"></i> <span>Blank Page</span></a>
                        </li>
                        <li> 
                            <a href="{{url('maps-vector')}}"><i data-feather="map-pin"></i> <span>Vector Maps</span></a>
                        </li>
                        <li class="menu-title"> 
                            <span>UI Interface</span>
                        </li>
                        <li class="{{ Request::is('alerts','accordions','avatar','badges','buttons','buttongroup','breadcrumbs','cards','carousel','dropdowns','grid',
                            'images','lightbox','media','modal','offcanvas','pagination','popover','progress','placeholders','rangeslider','spinner',
                            'sweetalerts','tab','toastr','tooltip','typography','video') ? 'active' : '' }} submenu">
                            <a href="#"><i class="fab fa-get-pocket"></i> <span>Base UI </span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="{{ Request::is('alerts') ? 'active' : '' }}" href="{{url('alerts')}}">Alerts</a></li>                                    
                                <li><a class="{{ Request::is('accordions') ? 'active' : '' }}" href="{{url('accordions')}}">Accordions</a></li>
                                <li><a class="{{ Request::is('avatar') ? 'active' : '' }}" href="{{url('avatar')}}" class="active">Avatar</a></li> 
                                <li><a class="{{ Request::is('badges') ? 'active' : '' }}" href="{{url('badges')}}">Badges</a></li>
                                <li><a class="{{ Request::is('buttons') ? 'active' : '' }}" href="{{url('buttons')}}">Buttons</a></li>   
                                <li><a class="{{ Request::is('buttongroup') ? 'active' : '' }}" href="{{url('buttongroup')}}">Button Group</a></li>                                  
                                <li><a class="{{ Request::is('breadcrumbs') ? 'active' : '' }}" href="{{url('breadcrumbs')}}">Breadcrumb</a></li>
                                <li><a class="{{ Request::is('cards') ? 'active' : '' }}" href="{{url('cards')}}">Cards</a></li>
                                <li><a class="{{ Request::is('carousel') ? 'active' : '' }}" href="{{url('carousel')}}">Carousel</a></li>                                   
                                <li><a class="{{ Request::is('dropdowns') ? 'active' : '' }}" href="{{url('dropdowns')}}">Dropdowns</a></li>
                                <li><a class="{{ Request::is('grid') ? 'active' : '' }}" href="{{url('grid')}}">Grid</a></li>
                                <li><a class="{{ Request::is('images') ? 'active' : '' }}" href="{{url('images')}}">Images</a></li>
                                <li><a class="{{ Request::is('lightbox') ? 'active' : '' }}" href="{{url('lightbox')}}">Lightbox</a></li>
                                <li><a class="{{ Request::is('media') ? 'active' : '' }}" href="{{url('media')}}">Media</a></li>                              
                                <li><a class="{{ Request::is('modal') ? 'active' : '' }}" href="{{url('modal')}}">Modals</a></li>
                                <li><a class="{{ Request::is('offcanvas') ? 'active' : '' }}" href="{{url('offcanvas')}}">Offcanvas</a></li>
                                <li><a class="{{ Request::is('pagination') ? 'active' : '' }}" href="{{url('pagination')}}">Pagination</a></li>
                                <li><a class="{{ Request::is('popover') ? 'active' : '' }}" href="{{url('popover')}}">Popover</a></li>                                    
                                <li><a class="{{ Request::is('progress') ? 'active' : '' }}" href="{{url('progress')}}">Progress Bars</a></li>
                                <li><a class="{{ Request::is('placeholders') ? 'active' : '' }}" href="{{url('placeholders')}}">Placeholders</a></li>
                                <li><a class="{{ Request::is('rangeslider') ? 'active' : '' }}" href="{{url('rangeslider')}}">Range Slider</a></li>                                    
                                <li><a class="{{ Request::is('spinner') ? 'active' : '' }}" href="{{url('spinner')}}">Spinner</a></li>
                                <li><a class="{{ Request::is('sweetalerts') ? 'active' : '' }}" href="{{url('sweetalerts')}}">Sweet Alerts</a></li>
                                <li><a class="{{ Request::is('tab') ? 'active' : '' }}" href="{{url('tab')}}">Tabs</a></li>
                                <li><a class="{{ Request::is('toastr') ? 'active' : '' }}" href="{{url('toastr')}}">Toasts</a></li>
                                <li><a class="{{ Request::is('tooltip') ? 'active' : '' }}" href="{{url('tooltip')}}">Tooltip</a></li>
                                <li><a class="{{ Request::is('typography') ? 'active' : '' }}" href="{{url('typography')}}">Typography</a></li>
                                <li><a class="{{ Request::is('video') ? 'active' : '' }}" href="{{url('video')}}">Video</a></li>
                            </ul>
                        </li>
                        <li class="{{ Request::is('ribbon','clipboard','drag-drop','rating',
                            'text-editor','counter','scrollbar','notification','stickynote','timeline','horizontal-timeline','form-wizard') ? 'active' : '' }} submenu">
                            <a href="#"><i data-feather="box"></i> <span>Elements </span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="{{ Request::is('ribbon') ? 'active' : '' }}" href="ribbon">Ribbon</a></li>
                                <li><a class="{{ Request::is('clipboard') ? 'active' : '' }}" href="clipboard">Clipboard</a></li>
                                <li><a class="{{ Request::is('drag-drop') ? 'active' : '' }}" href="drag-drop">Drag & Drop</a></li>
                                <li><a class="{{ Request::is('rating') ? 'active' : '' }}" href="rating">Rating</a></li>
                                <li><a class="{{ Request::is('text-editor') ? 'active' : '' }}" href="text-editor">Text Editor</a></li>
                                <li><a class="{{ Request::is('counter') ? 'active' : '' }}" href="counter">Counter</a></li>
                                <li><a class="{{ Request::is('scrollbar') ? 'active' : '' }}" href="scrollbar">Scrollbar</a></li>
                                <li><a class="{{ Request::is('notification') ? 'active' : '' }}" href="notification">Notification</a></li>
                                <li><a class="{{ Request::is('stickynote') ? 'active' : '' }}" href="stickynote">Sticky Note</a></li>
                                <li><a class="{{ Request::is('timeline') ? 'active' : '' }}" href="timeline">Timeline</a></li>
                                <li><a class="{{ Request::is('horizontal-timeline') ? 'active' : '' }}" href="horizontal-timeline">Horizontal Timeline</a></li>
                                <li><a class="{{ Request::is('form-wizard') ? 'active' : '' }}" href="form-wizard">Form Wizard</a></li>
                            </ul>
                        </li>
                        <li class="{{ Request::is('chart-apex','chart-js','chart-morris','chart-flot','chart-peity','chart-c3') ? 'active' : '' }} submenu">
                            <a href="#"><i data-feather="bar-chart-2"></i> <span> Charts </span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="{{ Request::is('chart-apex') ? 'active' : '' }}" href="chart-apex">Apex Charts</a></li>
                                <li><a class="{{ Request::is('chart-js') ? 'active' : '' }}" href="chart-js">Chart Js</a></li>
                                <li><a class="{{ Request::is('chart-morris') ? 'active' : '' }}" href="chart-morris">Morris Charts</a></li>
                                <li><a class="{{ Request::is('chart-flot') ? 'active' : '' }}" href="chart-flot">Flot Charts</a></li>
                                <li><a class="{{ Request::is('chart-peity') ? 'active' : '' }}" href="chart-peity">Peity Charts</a></li>
                                <li><a class="{{ Request::is('chart-c3') ? 'active' : '' }}" href="chart-c3">C3 Charts</a></li>
                            </ul>
                        </li>
                        <li class="{{ Request::is('icon-fontawesome','icon-feather','icon-ionic','icon-material','icon-pe7','icon-simpleline','icon-themify',
                            'icon-weather','icon-typicon','icon-flag') ? 'active' : '' }} submenu">
                            <a href="#"><i data-feather="award"></i> <span> Icons </span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="{{ Request::is('icon-fontawesome') ? 'active' : '' }}" href="icon-fontawesome">Fontawesome Icons</a></li>
                                <li><a class="{{ Request::is('icon-feather') ? 'active' : '' }}" href="icon-feather">Feather Icons</a></li>
                                <li><a class="{{ Request::is('icon-ionic') ? 'active' : '' }}" href="icon-ionic">Ionic Icons</a></li>
                                <li><a class="{{ Request::is('icon-material') ? 'active' : '' }}" href="icon-material">Material Icons</a></li>
                                <li><a class="{{ Request::is('icon-pe7') ? 'active' : '' }}" href="icon-pe7">Pe7 Icons</a></li>
                                <li><a class="{{ Request::is('icon-simpleline') ? 'active' : '' }}" href="icon-simpleline">Simpleline Icons</a></li>
                                <li><a class="{{ Request::is('icon-themify') ? 'active' : '' }}" href="icon-themify">Themify Icons</a></li>
                                <li><a class="{{ Request::is('icon-weather') ? 'active' : '' }}" href="icon-weather">Weather Icons</a></li>
                                <li><a class="{{ Request::is('icon-typicon') ? 'active' : '' }}" href="icon-typicon">Typicon Icons</a></li>
                                <li><a class="{{ Request::is('icon-flag') ? 'active' : '' }}" href="icon-flag">Flag Icons</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i data-feather="columns"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="{{ Request::is('form-basic-inputs') ? 'active' : '' }}" href="{{ url('form-basic-inputs') }}">Basic Inputs </a></li>
									<li><a class="{{ Request::is('form-input-groups') ? 'active' : '' }}" href="{{ url('form-input-groups') }}">Input Groups </a></li>
									<li><a class="{{ Request::is('form-horizontal') ? 'active' : '' }}" href="{{ url('form-horizontal') }}">Horizontal Form </a></li>
									<li><a class="{{ Request::is('form-vertical') ? 'active' : '' }}" href="{{ url('form-vertical') }}"> Vertical Form </a></li>
									<li><a class="{{ Request::is('form-mask') ? 'active' : '' }}" href="{{ url('form-mask') }}"> Form Mask </a></li>
									<li><a class="{{ Request::is('form-validation') ? 'active' : '' }}" href="{{ url('form-validation') }}"> Form Validation </a></li>									
									<li><a class="{{ Request::is('form-select2') ? 'active' : '' }}" href="{{ url('form-select2') }}">Form Select2 </a></li>
									<li><a class="{{ Request::is('form-fileupload') ? 'active' : '' }}" href="{{ url('form-fileupload') }}">File Upload </a></li>
                            </ul>
                        </li>
                        <li class="submenu <?php if($page=="tables-basic" || $page=="data-tables") { echo 'active'; } ?>">
                            <a href="#"><i data-feather="layout"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="<?php if($page=="tables-basic") { echo 'active'; } ?>" href="{{url('tables-basic')}}">Basic Tables </a></li>
                                <li><a class="<?php if($page=="data-tables") { echo 'active'; } ?>" href="{{url('data-tables')}}">Data Table </a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Sidebar -->
@endif

@if(Route::is(['index-four']))
<!-- Sidebar -->
    <div class="sidebar sidebar-three" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu sidebar-menu-three">
                    <aside id="aside" class="ui-aside">
                      <ul class="tab nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="tablinks nav-link active" href="#home" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"  role="tab" aria-controls="home" aria-selected="true">
                                <i data-feather="airplay"></i>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="tablinks nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages"  role="tab" aria-controls="messages" aria-selected="false">
                                <i data-feather="layers"></i>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation"> 
                            <a class="tablinks nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"  role="tab" aria-controls="profile" aria-selected="false">
                                <i data-feather="file"></i>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">  
                            <a class="tablinks nav-link" href="{{url('chat')}}" >
                                <i class="feather-message-square"></i>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation"> 
                            <a class="tablinks nav-link" href="{{url('inbox')}}" >
                                <i class="feather-mail"></i>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">  
                            <a class="tablinks nav-link" href="{{url('calendar')}}" >
                                <i class="feather-calendar"></i>
                            </a>
                        </li>
                      </ul>
                    </aside>
                    <div class="tab-content tab-content-three">
                        <ul class="tab-pane active" id="home" aria-labelledby="home-tab">
                            <li  class="menu-title menu-title-three"><span>Main</span></li>
                            <li class="active">
                                <a href="{{url('index')}}"><i data-feather="home"></i> <span>Dashboard</span></a>
                            </li>
                            <li>
                                <a href="{{url('customers')}}"><i data-feather="users"></i> <span>Customers</span></a>
                            </li>
                            <li>
                                <a href="{{url('estimates')}}"><i data-feather="file-text"></i> <span>Estimates</span></a>
                            </li>
                            <li class="{{ Request::is('invoices','invoice-grid','invoice-grid-two','add-invoice','edit-invoice','view-invoice','view-invoice-two','invoice-settings') ? 'active' : '' }} submenu">
                                <a href="#"><i data-feather="clipboard"></i> <span> Invoices</span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a class="{{ Request::is('invoices') ? 'active' : '' }}" href="{{url('invoices')}}">Invoices List</a></li>
                                    <li><a class="{{ Request::is('invoice-grid') ? 'active' : '' }}" href="{{url('invoice-grid')}}">Invoices Grid</a></li>
                                    <li><a class="{{ Request::is('invoice-grid-two') ? 'active' : '' }}" href="{{url('invoice-grid-two')}}">Invoices Grid 2</a></li>
                                    <li><a class="{{ Request::is('add-invoice') ? 'active' : '' }}" href="{{url('add-invoice')}}">Add Invoices</a></li>
                                    <li><a class="{{ Request::is('edit-invoice') ? 'active' : '' }}" href="{{url('edit-invoice')}}">Edit Invoices</a></li>
                                    <li><a class="{{ Request::is('view-invoice') ? 'active' : '' }}" href="{{url('view-invoice')}}">Invoices Details</a></li>
                                    <li><a class="{{ Request::is('view-invoice-two') ? 'active' : '' }}" href="{{url('view-invoice-two')}}">Invoices Details 2</a></li>
                                    <li><a class="{{ Request::is('invoice-settings') ? 'active' : '' }}" href="{{url('invoices-settings')}}">Invoices Settings</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{url('invoice-items')}}"><i data-feather="star"></i> <span>Items</span></a>
                            </li>
                            <li>
                                <a href="{{url('payments')}}"><i data-feather="credit-card"></i> <span>Payments</span></a>
                            </li>
                            <li>
                                <a href="{{url('expenses')}}"><i data-feather="package"></i> <span>Expenses</span></a>
                            </li>
                            <li class="submenu">
                                <a href="#"><i data-feather="pie-chart"></i> <span> Reports</span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="{{url('sales-report')}}">Sales Report</a></li>
                                    <li><a href="{{url('expenses-report')}}">Expenses Report</a></li>
                                    <li><a href="{{url('profit-loss-report')}}">Profit & Loss Report</a></li>
                                    <li><a href="{{url('taxs-report')}}">Taxs Report</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{url('settings')}}"><i data-feather="settings"></i> <span>Settings</span></a>
                            </li>
                            <li class="submenu">
                                <a href="#"><i data-feather="grid"></i> <span> Application</span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="{{url('chat')}}">Chat</a></li>
                                    <li><a href="{{url('calendar')}}">Calendar</a></li>
                                    <li><a href="{{url('inbox')}}">Email</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="tab-pane" id="messages" aria-labelledby="messages-tab">
                        <li class="{{ Request::is('alerts','accordions','avatar','badges','buttons','buttongroup','breadcrumbs','cards','carousel','dropdowns','grid',
                                'images','lightbox','media','modal','offcanvas','pagination','popover','progress','placeholders','rangeslider','spinner',
                                'sweetalerts','tab','toastr','tooltip','typography','video') ? 'active' : '' }} submenu">
                                <a href="#"><i class="fab fa-get-pocket"></i> <span>Base UI </span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a class="{{ Request::is('alerts') ? 'active' : '' }}" href="{{url('alerts')}}">Alerts</a></li>                                    
                                    <li><a class="{{ Request::is('accordions') ? 'active' : '' }}" href="{{url('accordions')}}">Accordions</a></li>
                                    <li><a class="{{ Request::is('avatar') ? 'active' : '' }}" href="{{url('avatar')}}" class="active">Avatar</a></li> 
                                    <li><a class="{{ Request::is('badges') ? 'active' : '' }}" href="{{url('badges')}}">Badges</a></li>
                                    <li><a class="{{ Request::is('buttons') ? 'active' : '' }}" href="{{url('buttons')}}">Buttons</a></li>   
                                    <li><a class="{{ Request::is('buttongroup') ? 'active' : '' }}" href="{{url('buttongroup')}}">Button Group</a></li>                                  
                                    <li><a class="{{ Request::is('breadcrumbs') ? 'active' : '' }}" href="{{url('breadcrumbs')}}">Breadcrumb</a></li>
                                    <li><a class="{{ Request::is('cards') ? 'active' : '' }}" href="{{url('cards')}}">Cards</a></li>
                                    <li><a class="{{ Request::is('carousel') ? 'active' : '' }}" href="{{url('carousel')}}">Carousel</a></li>                                   
                                    <li><a class="{{ Request::is('dropdowns') ? 'active' : '' }}" href="{{url('dropdowns')}}">Dropdowns</a></li>
                                    <li><a class="{{ Request::is('grid') ? 'active' : '' }}" href="{{url('grid')}}">Grid</a></li>
                                    <li><a class="{{ Request::is('images') ? 'active' : '' }}" href="{{url('images')}}">Images</a></li>
                                    <li><a class="{{ Request::is('lightbox') ? 'active' : '' }}" href="{{url('lightbox')}}">Lightbox</a></li>
                                    <li><a class="{{ Request::is('media') ? 'active' : '' }}" href="{{url('media')}}">Media</a></li>                              
                                    <li><a class="{{ Request::is('modal') ? 'active' : '' }}" href="{{url('modal')}}">Modals</a></li>
                                    <li><a class="{{ Request::is('offcanvas') ? 'active' : '' }}" href="{{url('offcanvas')}}">Offcanvas</a></li>
                                    <li><a class="{{ Request::is('pagination') ? 'active' : '' }}" href="{{url('pagination')}}">Pagination</a></li>
                                    <li><a class="{{ Request::is('popover') ? 'active' : '' }}" href="{{url('popover')}}">Popover</a></li>                                    
                                    <li><a class="{{ Request::is('progress') ? 'active' : '' }}" href="{{url('progress')}}">Progress Bars</a></li>
                                    <li><a class="{{ Request::is('placeholders') ? 'active' : '' }}" href="{{url('placeholders')}}">Placeholders</a></li>
                                    <li><a class="{{ Request::is('rangeslider') ? 'active' : '' }}" href="{{url('rangeslider')}}">Range Slider</a></li>                                    
                                    <li><a class="{{ Request::is('spinner') ? 'active' : '' }}" href="{{url('spinner')}}">Spinner</a></li>
                                    <li><a class="{{ Request::is('sweetalerts') ? 'active' : '' }}" href="{{url('sweetalerts')}}">Sweet Alerts</a></li>
                                    <li><a class="{{ Request::is('tab') ? 'active' : '' }}" href="{{url('tab')}}">Tabs</a></li>
                                    <li><a class="{{ Request::is('toastr') ? 'active' : '' }}" href="{{url('toastr')}}">Toasts</a></li>
                                    <li><a class="{{ Request::is('tooltip') ? 'active' : '' }}" href="{{url('tooltip')}}">Tooltip</a></li>
                                    <li><a class="{{ Request::is('typography') ? 'active' : '' }}" href="{{url('typography')}}">Typography</a></li>
                                    <li><a class="{{ Request::is('video') ? 'active' : '' }}" href="{{url('video')}}">Video</a></li>
                                </ul>
                            </li>
                            <li class="{{ Request::is('ribbon','clipboard','drag-drop','rating',
                                'text-editor','counter','scrollbar','notification','stickynote','timeline','horizontal-timeline','form-wizard') ? 'active' : '' }} submenu">
                                <a href="#"><i data-feather="box"></i> <span>Elements </span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a class="{{ Request::is('ribbon') ? 'active' : '' }}" href="ribbon">Ribbon</a></li>
                                    <li><a class="{{ Request::is('clipboard') ? 'active' : '' }}" href="clipboard">Clipboard</a></li>
                                    <li><a class="{{ Request::is('drag-drop') ? 'active' : '' }}" href="drag-drop">Drag & Drop</a></li>
                                    <li><a class="{{ Request::is('rating') ? 'active' : '' }}" href="rating">Rating</a></li>
                                    <li><a class="{{ Request::is('text-editor') ? 'active' : '' }}" href="text-editor">Text Editor</a></li>
                                    <li><a class="{{ Request::is('counter') ? 'active' : '' }}" href="counter">Counter</a></li>
                                    <li><a class="{{ Request::is('scrollbar') ? 'active' : '' }}" href="scrollbar">Scrollbar</a></li>
                                    <li><a class="{{ Request::is('notification') ? 'active' : '' }}" href="notification">Notification</a></li>
                                    <li><a class="{{ Request::is('stickynote') ? 'active' : '' }}" href="stickynote">Sticky Note</a></li>
                                    <li><a class="{{ Request::is('timeline') ? 'active' : '' }}" href="timeline">Timeline</a></li>
                                    <li><a class="{{ Request::is('horizontal-timeline') ? 'active' : '' }}" href="horizontal-timeline">Horizontal Timeline</a></li>
                                    <li><a class="{{ Request::is('form-wizard') ? 'active' : '' }}" href="form-wizard">Form Wizard</a></li>
                                </ul>
                            </li>
                            <li class="{{ Request::is('chart-apex','chart-js','chart-morris','chart-flot','chart-peity','chart-c3') ? 'active' : '' }} submenu">
                                <a href="#"><i data-feather="bar-chart-2"></i> <span> Charts </span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a class="{{ Request::is('chart-apex') ? 'active' : '' }}" href="chart-apex">Apex Charts</a></li>
                                    <li><a class="{{ Request::is('chart-js') ? 'active' : '' }}" href="chart-js">Chart Js</a></li>
                                    <li><a class="{{ Request::is('chart-morris') ? 'active' : '' }}" href="chart-morris">Morris Charts</a></li>
                                    <li><a class="{{ Request::is('chart-flot') ? 'active' : '' }}" href="chart-flot">Flot Charts</a></li>
                                    <li><a class="{{ Request::is('chart-peity') ? 'active' : '' }}" href="chart-peity">Peity Charts</a></li>
                                    <li><a class="{{ Request::is('chart-c3') ? 'active' : '' }}" href="chart-c3">C3 Charts</a></li>
                                </ul>
                            </li>
                            <li class="{{ Request::is('icon-fontawesome','icon-feather','icon-ionic','icon-material','icon-pe7','icon-simpleline','icon-themify',
                                'icon-weather','icon-typicon','icon-flag') ? 'active' : '' }} submenu">
                                <a href="#"><i data-feather="award"></i> <span> Icons </span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a class="{{ Request::is('icon-fontawesome') ? 'active' : '' }}" href="icon-fontawesome">Fontawesome Icons</a></li>
                                    <li><a class="{{ Request::is('icon-feather') ? 'active' : '' }}" href="icon-feather">Feather Icons</a></li>
                                    <li><a class="{{ Request::is('icon-ionic') ? 'active' : '' }}" href="icon-ionic">Ionic Icons</a></li>
                                    <li><a class="{{ Request::is('icon-material') ? 'active' : '' }}" href="icon-material">Material Icons</a></li>
                                    <li><a class="{{ Request::is('icon-pe7') ? 'active' : '' }}" href="icon-pe7">Pe7 Icons</a></li>
                                    <li><a class="{{ Request::is('icon-simpleline') ? 'active' : '' }}" href="icon-simpleline">Simpleline Icons</a></li>
                                    <li><a class="{{ Request::is('icon-themify') ? 'active' : '' }}" href="icon-themify">Themify Icons</a></li>
                                    <li><a class="{{ Request::is('icon-weather') ? 'active' : '' }}" href="icon-weather">Weather Icons</a></li>
                                    <li><a class="{{ Request::is('icon-typicon') ? 'active' : '' }}" href="icon-typicon">Typicon Icons</a></li>
                                    <li><a class="{{ Request::is('icon-flag') ? 'active' : '' }}" href="icon-flag">Flag Icons</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="#"><i data-feather="columns"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a class="{{ Request::is('form-basic-inputs') ? 'active' : '' }}" href="{{ url('form-basic-inputs') }}">Basic Inputs </a></li>
									<li><a class="{{ Request::is('form-input-groups') ? 'active' : '' }}" href="{{ url('form-input-groups') }}">Input Groups </a></li>
									<li><a class="{{ Request::is('form-horizontal') ? 'active' : '' }}" href="{{ url('form-horizontal') }}">Horizontal Form </a></li>
									<li><a class="{{ Request::is('form-vertical') ? 'active' : '' }}" href="{{ url('form-vertical') }}"> Vertical Form </a></li>
									<li><a class="{{ Request::is('form-mask') ? 'active' : '' }}" href="{{ url('form-mask') }}"> Form Mask </a></li>
									<li><a class="{{ Request::is('form-validation') ? 'active' : '' }}" href="{{ url('form-validation') }}"> Form Validation </a></li>									
									<li><a class="{{ Request::is('form-select2') ? 'active' : '' }}" href="{{ url('form-select2') }}">Form Select2 </a></li>
									<li><a class="{{ Request::is('form-fileupload') ? 'active' : '' }}" href="{{ url('form-fileupload') }}">File Upload </a></li>
                                </ul>
                            </li>
                            <li class="submenu <?php if($page=="tables-basic" || $page=="data-tables") { echo 'active'; } ?>">
                                <a href="#"><i data-feather="layout"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a class="<?php if($page=="tables-basic") { echo 'active'; } ?>" href="{{url('tables-basic')}}">Basic Tables </a></li>
                                    <li><a class="<?php if($page=="data-tables") { echo 'active'; } ?>" href="{{url('data-tables')}}">Data Table </a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="tab-pane" id="profile" aria-labelledby="profile-tab">
                            <li class="menu-title menu-title-three"> 
                                <span>Pages</span>
                            </li>
                            <li> 
                                <a href="{{url('profile')}}"><i data-feather="user-plus"></i> <span>Profile</span></a>
                            </li>
                            <li class="submenu">
                                <a href="#"><i data-feather="lock"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="{{url('login')}}"> Login </a></li>
                                    <li><a href="{{url('register')}}"> Register </a></li>
                                    <li><a href="{{url('forgot-password')}}"> Forgot Password </a></li>
                                    <li><a href="{{url('lock-screen')}}"> Lock Screen </a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="#"><i data-feather="alert-octagon"></i> <span> Error Pages </span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="{{url('error-404')}}">404 Error </a></li>
                                    <li><a href="{{url('error-500')}}">500 Error </a></li>
                                </ul>
                            </li>
                            <li> 
                                <a href="{{url('users')}}"><i data-feather="user"></i> <span>Users</span></a>
                            </li>
                            <li> 
                                <a href="{{url('blank-page')}}"><i data-feather="file"></i> <span>Blank Page</span></a>
                            </li>
                            <li> 
                                <a href="{{url('maps-vector')}}"><i data-feather="map-pin"></i> <span>Vector Maps</span></a>
                            </li>
                        </ul>
                        
                     </div>
                </div>
            </div>
    </div>
<!-- /Sidebar -->
@endif

@if(Route::is(['index-five']))
<!-- Sidebar -->
<div class="sidebar sidebar-four sidebar-hide" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu sidebar-menu-four">
            <ul>
                <li class="menu-title"><span>Main</span></li>
                <li class="active">
                    <a href="{{url('index')}}"><i data-feather="home"></i> <span>Dashboard</span></a>
                </li>
                <li>
                    <a href="{{url('customers')}}"><i data-feather="users"></i> <span>Customers</span></a>
                </li>
                <li>
                    <a href="{{url('estimates')}}"><i data-feather="file-text"></i> <span>Estimates</span></a>
                </li>
                <li>
                    <a href="{{url('invoices')}}"><i data-feather="clipboard"></i> <span>Invoices</span></a>
                </li>
                <li>
                    <a href="{{url('invoice-items')}}"><i data-feather="star"></i> <span>Items</span></a>
                </li>
                <li>
                    <a href="{{url('payments')}}"><i data-feather="credit-card"></i> <span>Payments</span></a>
                </li>
                <li>
                    <a href="{{url('expenses')}}"><i data-feather="package"></i> <span>Expenses</span></a>
                </li>
                <li class="submenu">
                    <a href="#"><i data-feather="pie-chart"></i> <span> Reports</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{url('sales-report')}}">Sales Report</a></li>
                        <li><a href="{{url('expenses-report')}}">Expenses Report</a></li>
                        <li><a href="{{url('profit-loss-report')}}">Profit & Loss Report</a></li>
                        <li><a href="{{url('taxs-report')}}">Taxs Report</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{url('settings')}}"><i data-feather="settings"></i> <span>Settings</span></a>
                </li>
                <li class="submenu">
                    <a href="#"><i data-feather="grid"></i> <span> Application</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{url('chat')}}">Chat</a></li>
                        <li><a href="{{url('calendar')}}">Calendar</a></li>
                        <li><a href="{{url('inbox')}}">Email</a></li>
                    </ul>
                </li>
                <li class="menu-title menu-title-two"> 
                    <span>Pages</span>
                </li>
                <li> 
                    <a href="{{url('profile')}}"><i data-feather="user-plus"></i> <span>Profile</span></a>
                </li>
                <li class="submenu">
                    <a href="#"><i data-feather="lock"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{url('login')}}"> Login </a></li>
                        <li><a href="{{url('register')}}"> Register </a></li>
                        <li><a href="{{url('forgot-password')}}"> Forgot Password </a></li>
                        <li><a href="{{url('lock-screen')}}"> Lock Screen </a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i data-feather="alert-octagon"></i> <span> Error Pages </span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{url('error-404')}}">404 Error </a></li>
                        <li><a href="{{url('error-500')}}">500 Error </a></li>
                    </ul>
                </li>
                <li> 
                    <a href="{{url('users')}}"><i data-feather="user"></i> <span>Users</span></a>
                </li>
                <li> 
                    <a href="{{url('blank-page')}}"><i data-feather="file"></i> <span>Blank Page</span></a>
                </li>
                <li> 
                    <a href="{{url('maps-vector')}}"><i data-feather="map-pin"></i> <span>Vector Maps</span></a>
                </li>
                <li class="menu-title menu-title-two"> 
                    <span>UI Interface</span>
                </li>
                <li class="{{ Request::is('alerts','accordions','avatar','badges','buttons','buttongroup','breadcrumbs','cards','carousel','dropdowns','grid',
                    'images','lightbox','media','modal','offcanvas','pagination','popover','progress','placeholders','rangeslider','spinner',
                    'sweetalerts','tab','toastr','tooltip','typography','video') ? 'active' : '' }} submenu">
                    <a href="#"><i class="fab fa-get-pocket"></i> <span>Base UI </span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a class="{{ Request::is('alerts') ? 'active' : '' }}" href="{{url('alerts')}}">Alerts</a></li>                                    
                        <li><a class="{{ Request::is('accordions') ? 'active' : '' }}" href="{{url('accordions')}}">Accordions</a></li>
                        <li><a class="{{ Request::is('avatar') ? 'active' : '' }}" href="{{url('avatar')}}" class="active">Avatar</a></li> 
                        <li><a class="{{ Request::is('badges') ? 'active' : '' }}" href="{{url('badges')}}">Badges</a></li>
                        <li><a class="{{ Request::is('buttons') ? 'active' : '' }}" href="{{url('buttons')}}">Buttons</a></li>   
                        <li><a class="{{ Request::is('buttongroup') ? 'active' : '' }}" href="{{url('buttongroup')}}">Button Group</a></li>                                  
                        <li><a class="{{ Request::is('breadcrumbs') ? 'active' : '' }}" href="{{url('breadcrumbs')}}">Breadcrumb</a></li>
                        <li><a class="{{ Request::is('cards') ? 'active' : '' }}" href="{{url('cards')}}">Cards</a></li>
                        <li><a class="{{ Request::is('carousel') ? 'active' : '' }}" href="{{url('carousel')}}">Carousel</a></li>                                   
                        <li><a class="{{ Request::is('dropdowns') ? 'active' : '' }}" href="{{url('dropdowns')}}">Dropdowns</a></li>
                        <li><a class="{{ Request::is('grid') ? 'active' : '' }}" href="{{url('grid')}}">Grid</a></li>
                        <li><a class="{{ Request::is('images') ? 'active' : '' }}" href="{{url('images')}}">Images</a></li>
                        <li><a class="{{ Request::is('lightbox') ? 'active' : '' }}" href="{{url('lightbox')}}">Lightbox</a></li>
                        <li><a class="{{ Request::is('media') ? 'active' : '' }}" href="{{url('media')}}">Media</a></li>                              
                        <li><a class="{{ Request::is('modal') ? 'active' : '' }}" href="{{url('modal')}}">Modals</a></li>
                        <li><a class="{{ Request::is('offcanvas') ? 'active' : '' }}" href="{{url('offcanvas')}}">Offcanvas</a></li>
                        <li><a class="{{ Request::is('pagination') ? 'active' : '' }}" href="{{url('pagination')}}">Pagination</a></li>
                        <li><a class="{{ Request::is('popover') ? 'active' : '' }}" href="{{url('popover')}}">Popover</a></li>                                    
                        <li><a class="{{ Request::is('progress') ? 'active' : '' }}" href="{{url('progress')}}">Progress Bars</a></li>
                        <li><a class="{{ Request::is('placeholders') ? 'active' : '' }}" href="{{url('placeholders')}}">Placeholders</a></li>
                        <li><a class="{{ Request::is('rangeslider') ? 'active' : '' }}" href="{{url('rangeslider')}}">Range Slider</a></li>                                    
                        <li><a class="{{ Request::is('spinner') ? 'active' : '' }}" href="{{url('spinner')}}">Spinner</a></li>
                        <li><a class="{{ Request::is('sweetalerts') ? 'active' : '' }}" href="{{url('sweetalerts')}}">Sweet Alerts</a></li>
                        <li><a class="{{ Request::is('tab') ? 'active' : '' }}" href="{{url('tab')}}">Tabs</a></li>
                        <li><a class="{{ Request::is('toastr') ? 'active' : '' }}" href="{{url('toastr')}}">Toasts</a></li>
                        <li><a class="{{ Request::is('tooltip') ? 'active' : '' }}" href="{{url('tooltip')}}">Tooltip</a></li>
                        <li><a class="{{ Request::is('typography') ? 'active' : '' }}" href="{{url('typography')}}">Typography</a></li>
                        <li><a class="{{ Request::is('video') ? 'active' : '' }}" href="{{url('video')}}">Video</a></li>
                    </ul>
                </li>
                <li class="{{ Request::is('ribbon','clipboard','drag-drop','rating',
                    'text-editor','counter','scrollbar','notification','stickynote','timeline','horizontal-timeline','form-wizard') ? 'active' : '' }} submenu">
                    <a href="#"><i data-feather="box"></i> <span>Elements </span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a class="{{ Request::is('ribbon') ? 'active' : '' }}" href="ribbon">Ribbon</a></li>
                        <li><a class="{{ Request::is('clipboard') ? 'active' : '' }}" href="clipboard">Clipboard</a></li>
                        <li><a class="{{ Request::is('drag-drop') ? 'active' : '' }}" href="drag-drop">Drag & Drop</a></li>
                        <li><a class="{{ Request::is('rating') ? 'active' : '' }}" href="rating">Rating</a></li>
                        <li><a class="{{ Request::is('text-editor') ? 'active' : '' }}" href="text-editor">Text Editor</a></li>
                        <li><a class="{{ Request::is('counter') ? 'active' : '' }}" href="counter">Counter</a></li>
                        <li><a class="{{ Request::is('scrollbar') ? 'active' : '' }}" href="scrollbar">Scrollbar</a></li>
                        <li><a class="{{ Request::is('notification') ? 'active' : '' }}" href="notification">Notification</a></li>
                        <li><a class="{{ Request::is('stickynote') ? 'active' : '' }}" href="stickynote">Sticky Note</a></li>
                        <li><a class="{{ Request::is('timeline') ? 'active' : '' }}" href="timeline">Timeline</a></li>
                        <li><a class="{{ Request::is('horizontal-timeline') ? 'active' : '' }}" href="horizontal-timeline">Horizontal Timeline</a></li>
                        <li><a class="{{ Request::is('form-wizard') ? 'active' : '' }}" href="form-wizard">Form Wizard</a></li>
                    </ul>
                </li>
                <li class="{{ Request::is('chart-apex','chart-js','chart-morris','chart-flot','chart-peity','chart-c3') ? 'active' : '' }} submenu">
                    <a href="#"><i data-feather="bar-chart-2"></i> <span>Charts </span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li class="{{ Request::is('chart-apex') ? 'active' : '' }}"><a href="chart-apex">Apex Charts</a></li>
                        <li class="{{ Request::is('chart-js') ? 'active' : '' }}"><a href="chart-js">Chart Js</a></li>
                        <li class="{{ Request::is('chart-morris') ? 'active' : '' }}"><a href="chart-morris">Morris Charts</a></li>
                        <li class="{{ Request::is('chart-flot') ? 'active' : '' }}"><a href="chart-flot">Flot Charts</a></li>
                        <li class="{{ Request::is('chart-peity') ? 'active' : '' }}"><a href="chart-peity">Peity Charts</a></li>
                        <li class="{{ Request::is('chart-c3') ? 'active' : '' }}"><a href="chart-c3">C3 Charts</a></li>
                    </ul>
                </li>
                <li class="{{ Request::is('icon-fontawesome','icon-feather','icon-ionic','icon-material','icon-pe7','icon-simpleline','icon-themify',
                    'icon-weather','icon-typicon','icon-flag') ? 'active' : '' }} submenu">
                    <a href="#"><i data-feather="award"></i> <span>Icons </span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li class="{{ Request::is('icon-fontawesome') ? 'active' : '' }}"><a href="icon-fontawesome">Fontawesome Icons</a></li>
                        <li class="{{ Request::is('icon-feather') ? 'active' : '' }}"><a href="icon-feather">Feather Icons</a></li>
                        <li class="{{ Request::is('icon-ionic') ? 'active' : '' }}"><a href="icon-ionic">Ionic Icons</a></li>
                        <li class="{{ Request::is('icon-material') ? 'active' : '' }}"><a href="icon-material">Material Icons</a></li>
                        <li class="{{ Request::is('icon-pe7') ? 'active' : '' }}"><a href="icon-pe7">Pe7 Icons</a></li>
                        <li class="{{ Request::is('icon-simpleline') ? 'active' : '' }}"><a href="icon-simpleline">Simpleline Icons</a></li>
                        <li class="{{ Request::is('icon-themify') ? 'active' : '' }}"><a href="icon-themify">Themify Icons</a></li>
                        <li class="{{ Request::is('icon-weather') ? 'active' : '' }}"><a href="icon-weather">Weather Icons</a></li>
                        <li class="{{ Request::is('icon-typicon') ? 'active' : '' }}"><a href="icon-typicon">Typicon Icons</a></li>
                        <li class="{{ Request::is('icon-flag') ? 'active' : '' }}"><a href="icon-flag">Flag Icons</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i data-feather="columns"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a class="{{ Request::is('form-basic-inputs') ? 'active' : '' }}" href="{{ url('form-basic-inputs') }}">Basic Inputs </a></li>
						<li><a class="{{ Request::is('form-input-groups') ? 'active' : '' }}" href="{{ url('form-input-groups') }}">Input Groups </a></li>
						<li><a class="{{ Request::is('form-horizontal') ? 'active' : '' }}" href="{{ url('form-horizontal') }}">Horizontal Form </a></li>
						<li><a class="{{ Request::is('form-vertical') ? 'active' : '' }}" href="{{ url('form-vertical') }}"> Vertical Form </a></li>
						<li><a class="{{ Request::is('form-mask') ? 'active' : '' }}" href="{{ url('form-mask') }}"> Form Mask </a></li>
						<li><a class="{{ Request::is('form-validation') ? 'active' : '' }}" href="{{ url('form-validation') }}"> Form Validation </a></li>									
						<li><a class="{{ Request::is('form-select2') ? 'active' : '' }}" href="{{ url('form-select2') }}">Form Select2 </a></li>
						<li><a class="{{ Request::is('form-fileupload') ? 'active' : '' }}" href="{{ url('form-fileupload') }}">File Upload </a></li>
                    </ul>
                </li>
                <li class="submenu <?php if($page=="tables-basic" || $page=="data-tables") { echo 'active'; } ?>">
                    <a href="#"><i data-feather="layout"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a class="<?php if($page=="tables-basic") { echo 'active'; } ?>" href="{{url('tables-basic')}}">Basic Tables </a></li>
                        <li><a class="<?php if($page=="data-tables") { echo 'active'; } ?>" href="{{url('data-tables')}}">Data Table </a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->
@endif