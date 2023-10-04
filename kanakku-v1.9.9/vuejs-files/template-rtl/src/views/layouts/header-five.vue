<template>
  <!-- Header -->
  <div class="header header-four">
    <div class="container-fluid">
      <!-- Logo -->
      <div class="header-left header-left-four">
        <router-link to="index" class="logo">
          <img src="@/assets/img/logo-white.png" alt="Logo" />
        </router-link>
        <router-link to="index" class="dark-logo">
          <img src="@/assets/img/logo.png" alt="Logo" />
        </router-link>
        <router-link to="index" class="logo logo-small">
          <img src="@/assets/img/logo-small.png" alt="Logo" width="30" height="30" />
        </router-link>
      </div>
      <!-- /Logo -->

      <!-- Mobile Menu Toggle -->
      <a class="mobile_btn mobile_btn-four" id="mobile_btn">
        <i class="fas fa-bars"></i>
      </a>
      <!-- /Mobile Menu Toggle -->
      <!-- Header Menu List -->
      <div class="sidebar sidebar-five">
        <div id="sidebar-menu" class="sidebar-menu sidebar-menu-five">
          <ul class="nav">
            <li class="submenu submenu-five nav-item dropdown">
              <a href="javascript:;" class="dropdown-toggle"
                ><i class="feather feather-home"></i> <span>Main </span>
                <span class="menu-arrow"></span
              ></a>
              <ul
                class="header-four dropdown-menu dropdown-menu-five dropdown-menu-right"
              >
                <!-- Main -->
                <li class="submenu">
                  <a href="javascript:;"
                    ><i class="feather feather-home"></i> <span> Dashboard</span>
                    <span class="menu-arrow"></span
                  ></a>
                  <ul>
                    <li>
                      <a class="active" href="index"><span> Admin Dashboard</span></a>
                    </li>
                  </ul>
                </li>

                <li class="submenu">
                  <a href="javascript:;"
                    ><i class="feather feather-grid"></i> <span> Applications</span>
                    <span class="menu-arrow"></span
                  ></a>
                  <ul>
                    <li>
                      <a href="chat"><span> Chat</span></a>
                    </li>
                    <li>
                      <a href="calendar"><span> Calendar</span></a>
                    </li>
                    <li>
                      <a href="inbox"><span> Email</span></a>
                    </li>
                  </ul>
                </li>
                <!-- /Main -->

                <!-- Customers -->
                <li class="submenu">
                  <a href="javascript:;"
                    ><i class="feather feather-users"></i> <span> Customers</span>
                    <span class="menu-arrow"></span
                  ></a>
                  <ul>
                    <li>
                      <a href="customers"><span>Customers</span></a>
                    </li>
                    <li>
                      <a href="customer-details"><span>Customer Details</span></a>
                    </li>
                    <li>
                      <a href="vendors"><span>Vendors</span></a>
                    </li>
                  </ul>
                </li>
                <!-- /Customers -->

                <!-- Inventory -->
                <li class="submenu">
                  <a href="javascript:;"
                    ><i class="feather feather-package"></i>
                    <span> Products / Services</span>
                    <span class="menu-arrow"></span
                  ></a>
                  <ul>
                    <li>
                      <a href="product-list"><span> Product List</span></a>
                    </li>
                    <li>
                      <a href="category"><span> Category</span></a>
                    </li>

                    <li>
                      <a href="units"><span> Units</span></a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="inventory"
                    ><i class="feather feather-user"></i> <span>Inventory</span></a
                  >
                </li>
                <!-- /Inventory -->

                <!-- Sales -->
                <li class="submenu">
                  <a href="javascript:;"
                    ><i class="feather feather-file"></i> <span> Sales</span>
                    <span class="menu-arrow"></span
                  ></a>
                  <ul>
                    <li class="submenu">
                      <a href="invoices"
                        ><span>Invoices</span><span class="menu-arrow"></span
                      ></a>
                      <ul>
                        <li><a href="invoices">Invoices List</a></li>
                        <li>
                          <a href="invoice-template">Invoice-Template</a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a href="recurring-invoices"><span>Recurring Invoices</span></a>
                    </li>
                    <li>
                      <a href="credit-notes"><span>Credit Notes</span></a>
                    </li>
                  </ul>
                </li>
                <!-- /Sales -->

                <!-- Purchases -->
                <li class="submenu">
                  <a href="javascript:;"
                    ><i class="feather feather-shopping-cart"></i>
                    <span> Purchases</span> <span class="menu-arrow"></span
                  ></a>
                  <ul>
                    <li>
                      <a href="purchases"><span>Purchases</span></a>
                    </li>
                    <li>
                      <a href="purchase-orders"><span>Purchase Orders</span></a>
                    </li>
                    <li>
                      <a href="debit-notes"><span>Debit Notes</span></a>
                    </li>
                  </ul>
                </li>
                <!-- /Purchases -->

                <!-- Finance & Accounts -->
                <li class="submenu">
                  <a href="javascript:;"
                    ><i class="feather feather-file-plus"></i>
                    <span> Finance & Accounts</span>
                    <span class="menu-arrow"></span
                  ></a>
                  <ul>
                    <li>
                      <a href="expenses"><span>Expenses</span></a>
                    </li>
                    <li>
                      <a href="payments"><span>Payments</span></a>
                    </li>
                  </ul>
                </li>
                <!-- /Finance & Accounts -->

                <!-- Quotations -->
                <li class="submenu">
                  <a href="javascript:;"
                    ><i class="feather feather-clipboard"></i> <span> Quotations</span>
                    <span class="menu-arrow"></span
                  ></a>
                  <ul>
                    <li>
                      <a href="quotations"> <span>Quotations</span></a>
                    </li>
                    <li>
                      <a href="delivery-challans"><span>Delivery Challans</span></a>
                    </li>
                  </ul>
                </li>
                <!-- /Quotations -->

                <!-- Reports -->
                <li class="submenu">
                  <a href="javascript:;"
                    ><i class="feather feather-file-text"></i> <span> Reports</span>
                    <span class="menu-arrow"></span
                  ></a>
                  <ul>
                    <li>
                      <a href="quotations"> <span>Quotations</span></a>
                    </li>
                    <li>
                      <a href="payment-summary"> <span>Payment Summary</span></a>
                    </li>
                  </ul>
                </li>
                <!-- /Reports -->

                <!-- User Management -->
                <li class="submenu">
                  <a href="javascript:;"
                    ><i class="feather feather-book"></i> <span> Membership</span>
                    <span class="menu-arrow"></span
                  ></a>
                  <ul>
                    <li>
                      <a href="membership-plans"><span> Membership Plans</span></a>
                    </li>
                    <li>
                      <a href="membership-addons"><span> Membership Addons</span></a>
                    </li>
                    <li>
                      <a href="subscribers"><span> Subscribers</span></a>
                    </li>
                    <li>
                      <a href="transactions"><span> Transactions</span></a>
                    </li>
                  </ul>
                </li>
                <!-- /User Management -->

                <!-- Content (CMS) -->
                <li class="submenu">
                  <a href="javascript:;"
                    ><i class="feather feather-folder"></i>
                    <span> Content (CMS)</span>
                    <span class="menu-arrow"></span
                  ></a>
                  <ul>
                    <li class="submenu">
                      <a href="javascript:;"
                        ><i class="feather feather-folder"></i> <span> Pages</span>
                        <span class="menu-arrow"></span
                      ></a>
                      <ul>
                        <li><a href="add-page">Add Page</a></li>
                        <li><a href="pages">Pages</a></li>
                      </ul>
                    </li>
                    <li class="submenu">
                      <a href="javascript:;"
                        ><i class="feather feather-book"></i> <span> Blog</span>
                        <span class="menu-arrow"></span
                      ></a>
                      <ul>
                        <li><a href="all-blogs">All Blogs</a></li>
                        <li><a href="add-blog">Add Blog</a></li>
                        <li><a href="categories">Categories</a></li>
                        <li>
                          <a href="blog-comments">Blog Comments</a>
                        </li>
                      </ul>
                    </li>
                    <li class="submenu">
                      <a href="javascript:;"
                        ><i class="feather feather-map-pin"></i>
                        <span> Location</span>
                        <span class="menu-arrow"></span
                      ></a>
                      <ul>
                        <li><a href="countries">Countries</a></li>
                        <li><a href="states">States</a></li>
                        <li><a href="cities">Cities</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="testimonials"
                        ><i class="feather feather-message-square"></i>
                        <span>Testimonials</span></a
                      >
                    </li>
                    <li>
                      <a href="faq"
                        ><i class="feather feather-alert-circle"></i> <span>FAQ</span></a
                      >
                    </li>
                  </ul>
                </li>
                <!-- /Content (CMS) -->

                <!-- Support -->
                <li class="submenu">
                  <a href="javascript:;"
                    ><i class="feather feather-printer"></i> <span> Support</span>
                    <span class="menu-arrow"></span
                  ></a>
                  <ul>
                    <li>
                      <a href="contact-messages"><span>Contact Messages</span></a>
                    </li>
                    <li class="submenu">
                      <a href="javascript:;"
                        ><span> Tickets</span> <span class="menu-arrow"></span
                      ></a>
                      <ul>
                        <li>
                          <a href="tickets"><span> Tickets</span></a>
                        </li>
                        <li>
                          <a href="tickets-list"><span> Tickets List</span></a>
                        </li>
                        <li>
                          <a href="tickets-kanban"><span> Tickets Kanban</span></a>
                        </li>
                        <li>
                          <a href="ticket-details"><span> Ticket Overview</span></a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <!-- /Support -->

                <!-- Authentication -->
                <li class="submenu">
                  <a href="javascript:;"
                    ><i class="feather feather-lock"></i>
                    <span> Authentication </span>
                    <span class="menu-arrow"></span
                  ></a>
                  <ul>
                    <li>
                      <a href="/"> <span> Login </span></a>
                    </li>
                    <li>
                      <a href="register"><span> Register </span></a>
                    </li>
                    <li>
                      <a href="forgot-password"> <span>Forgot Password </span></a>
                    </li>
                    <li>
                      <a href="lock-screen"> <span>Lock Screen </span></a>
                    </li>
                  </ul>
                </li>
                <!-- /Authentication -->

                <!-- Settings -->
                <li class="submenu">
                  <a href="javascript:;"
                    ><i class="feather feather-settings"></i> <span> Settings </span>
                    <span class="menu-arrow"></span
                  ></a>
                  <ul>
                    <li>
                      <a href="settings"><span>Settings</span></a>
                    </li>
                    <li>
                      <a href="/"><span>Logout</span></a>
                    </li>
                  </ul>
                </li>
                <!-- /Settings -->
              </ul>
            </li>

            <li class="submenu submenu-five nav-item dropdown">
              <a href="javascript:;" class="dropdown-toggle"
                ><i class="feather feather-file"></i> <span>Pages </span>
                <span class="menu-arrow"></span
              ></a>
              <ul
                class="header-four dropdown-menu dropdown-menu-five dropdown-menu-right"
              >
                <li>
                  <a href="profile"
                    ><i class="feather feather-user"></i> <span>Profile</span></a
                  >
                </li>
                <li>
                  <a href="error-404"
                    ><i class="feather feather-x-square"></i> <span>Error Pages</span></a
                  >
                </li>
                <li>
                  <a href="blank-page"
                    ><i class="feather feather-file"></i> <span>Blank Page</span></a
                  >
                </li>
                <li>
                  <a href="maps-vector"
                    ><i class="feather feather-map-pin"></i> <span>Google Maps</span></a
                  >
                </li>
              </ul>
            </li>
            <li class="submenu submenu-five nav-item dropdown">
              <a href="javascript:;" class="dropdown-toggle"
                ><i class="feather feather-layers"></i> <span>UI Interface </span>
                <span class="menu-arrow"></span
              ></a>
              <!-- UI Interface -->
              <ul
                class="header-four dropdown-menu dropdown-menu-five dropdown-menu-right"
              >
                <li class="submenu">
                  <a href="javascript:;"
                    ><i class="feather feather-pocket"></i> <span>Base UI </span>
                    <span class="menu-arrow"></span
                  ></a>
                  <ul>
                    <li><a href="alerts">Alerts</a></li>
                    <li><a href="accordions">Accordions</a></li>
                    <li><a href="avatar">Avatar</a></li>
                    <li><a href="badges">Badges</a></li>
                    <li><a href="buttons">Buttons</a></li>
                    <li><a href="buttongroup">Button Group</a></li>
                    <li><a href="breadcrumbs">Breadcrumb</a></li>
                    <li><a href="cards">Cards</a></li>
                    <li><a href="carousel">Carousel</a></li>
                    <li><a href="dropdowns">Dropdowns</a></li>
                    <li><a href="grid">Grid</a></li>
                    <li><a href="images">Images</a></li>
                    <li><a href="lightbox">Lightbox</a></li>
                    <li><a href="media">Media</a></li>
                    <li><a href="modal">Modals</a></li>
                    <li><a href="offcanvas">Offcanvas</a></li>
                    <li><a href="pagination">Pagination</a></li>
                    <li><a href="popover">Popover</a></li>
                    <li><a href="progress">Progress Bars</a></li>
                    <li><a href="placeholders">Placeholders</a></li>
                    <li><a href="rangeslider">Range Slider</a></li>
                    <li><a href="spinners">Spinner</a></li>
                    <li><a href="sweetalerts">Sweet Alerts</a></li>
                    <li><a href="tab">Tabs</a></li>
                    <li><a href="toastr">Toasts</a></li>
                    <li><a href="tooltip">Tooltip</a></li>
                    <li><a href="typography">Typography</a></li>
                    <li><a href="video">Video</a></li>
                  </ul>
                </li>
                <li class="submenu">
                  <a href="javascript:;"
                    ><i class="feather feather-box"></i> <span>Elements </span>
                    <span class="menu-arrow"></span
                  ></a>
                  <ul>
                    <li><a href="ribbon">Ribbon</a></li>
                    <li><a href="clipboard">Clipboard</a></li>
                    <li><a href="drag-drop">Drag & Drop</a></li>
                    <li><a href="rating">Rating</a></li>
                    <li><a href="text-editor">Text Editor</a></li>
                    <li><a href="counter">Counter</a></li>
                    <li><a href="scrollbar">Scrollbar</a></li>
                    <li><a href="notification">Notification</a></li>
                    <li><a href="stickynote">Sticky Note</a></li>
                    <li><a href="timeline">Timeline</a></li>
                    <li>
                      <a href="horizontal-timeline">Horizontal Timeline</a>
                    </li>
                    <li><a href="form-wizard">Form Wizard</a></li>
                  </ul>
                </li>
                <li class="submenu">
                  <a href="javascript:;"
                    ><i class="feather feather-bar-chart"></i> <span> Charts </span>
                    <span class="menu-arrow"></span
                  ></a>
                  <ul>
                    <li><a href="chart-apex">Apex Charts</a></li>
                    <li><a href="chart-js">Chart Js</a></li>
                    <li><a href="chart-morris">Morris Charts</a></li>
                    <li><a href="chart-flot">Flot Charts</a></li>
                    <li><a href="chart-peity">Peity Charts</a></li>
                    <li><a href="chart-c3">C3 Charts</a></li>
                  </ul>
                </li>
                <li class="submenu">
                  <a href="javascript:;"
                    ><i class="feather feather-award"></i> <span> Icons </span>
                    <span class="menu-arrow"></span
                  ></a>
                  <ul>
                    <li>
                      <a href="icon-fontawesome">Fontawesome Icons</a>
                    </li>
                    <li><a href="icon-feather">Feather Icons</a></li>
                    <li><a href="icon-ionic">Ionic Icons</a></li>
                    <li><a href="icon-material">Material Icons</a></li>
                    <li><a href="icon-pe7">Pe7 Icons</a></li>
                    <li>
                      <a href="icon-simpleline">Simpleline Icons</a>
                    </li>
                    <li><a href="icon-themify">Themify Icons</a></li>
                    <li><a href="icon-weather">Weather Icons</a></li>
                    <li><a href="icon-typicon">Typicon Icons</a></li>
                    <li><a href="icon-flag">Flag Icons</a></li>
                  </ul>
                </li>
                <li class="submenu">
                  <a href="javascript:;"
                    ><i class="feather feather-sidebar"></i> <span> Forms </span>
                    <span class="menu-arrow"></span
                  ></a>
                  <ul>
                    <li>
                      <a href="form-basic-inputs">Basic Inputs </a>
                    </li>
                    <li>
                      <a href="form-input-groups">Input Groups </a>
                    </li>
                    <li>
                      <a href="form-horizontal">Horizontal Form </a>
                    </li>
                    <li>
                      <a href="form-vertical"> Vertical Form </a>
                    </li>
                    <li><a href="form-mask">Form Mask </a></li>
                    <li>
                      <a href="form-validation">Form Validation </a>
                    </li>
                    <li><a href="form-select2">Form Select2 </a></li>
                    <li><a href="form-fileupload">File Upload </a></li>
                  </ul>
                </li>
                <li class="submenu">
                  <a href="javascript:;"
                    ><i class="feather feather-layout"></i> <span> Tables </span>
                    <span class="menu-arrow"></span
                  ></a>
                  <ul>
                    <li><a href="tables-basic">Basic Tables </a></li>
                    <li><a href="data-tables">Data Table </a></li>
                  </ul>
                </li>
              </ul>
              <!-- /UI Interface -->
            </li>
          </ul>
        </div>
      </div>
      <!-- /Header Menu List -->
      <!-- Header Menu -->
      <ul class="nav nav-tabs user-menu user-menu-four">
        <flagheader />

        <notification />

        <user />
      </ul>
    </div>
    <!-- /Header Menu -->
  </div>

  <!-- /Header -->
  <!-- Sidebar -->
  <div class="sidebar sidebar-four sidebar-hide" id="sidebar">
    <div class="sidebar-inner slimscroll">
      <div id="sidebar-menu" class="sidebar-menu sidebar-menu-four">
        <!-- Main -->
        <ul>
          <li class="menu-title"><span>Main</span></li>
          <li class="submenu">
            <a href="javascript:;"
              ><i class="feather feather-home"></i> <span> Dashboard</span>
              <span class="menu-arrow"></span
            ></a>
            <ul>
              <li>
                <a class="active" href="index">Admin Dashboard</a>
              </li>
            </ul>
          </li>
          <li class="submenu">
            <a href="javascript:;"
              ><i class="feather feather-grid"></i> <span> Applications</span>
              <span class="menu-arrow"></span
            ></a>
            <ul>
              <li><router-link to="chat">Chat</router-link></li>
              <li><router-link to="calendar">Calendar</router-link></li>
              <li><router-link to="inbox">Email</router-link></li>
            </ul>
          </li>
        </ul>
        <!-- /Main -->

        <!-- Customers -->
        <ul>
          <li class="menu-title"><span>Customers</span></li>
          <li>
            <router-link to="customers"
              ><i class="feather feather-users"></i> <span>Customers</span></router-link
            >
          </li>
          <li>
            <router-link to="customer-details"
              ><i class="feather feather-file"></i>
              <span>Customer Details</span></router-link
            >
          </li>
          <li>
            <router-link to="vendors"
              ><i class="feather feather-user"></i> <span>Vendors</span></router-link
            >
          </li>
        </ul>
        <!-- /Customers -->

        <!-- Inventory -->
        <ul>
          <li class="menu-title"><span>Inventory</span></li>
          <li class="submenu">
            <a href="javascript:;"
              ><i class="feather feather-package"></i>
              <span> Products / Services</span>
              <span class="menu-arrow"></span
            ></a>
            <ul>
              <li><router-link to="product-list">Product List</router-link></li>
              <li><router-link to="category">Category</router-link></li>

              <li><router-link to="units">Units</router-link></li>
            </ul>
          </li>
          <li>
            <router-link to="inventory"
              ><i class="feather feather-user"></i> <span>Inventory</span></router-link
            >
          </li>
        </ul>
        <!-- /Inventory -->

        <!-- Sales -->
        <ul>
          <li class="menu-title"><span>Sales</span></li>
          <li>
            <router-link to="invoices"
              ><i class="feather feather-file"></i> <span>Invoices</span></router-link
            >
          </li>
          <li>
            <router-link to="recurring-invoices"
              ><i class="feather feather-clipboard"></i>
              <span>Recurring Invoices</span></router-link
            >
          </li>
          <li>
            <router-link to="credit-notes"
              ><i class="feather feather-edit"></i> <span>Credit Notes</span></router-link
            >
          </li>
        </ul>
        <!-- /Sales -->

        <!-- Purchases -->
        <ul>
          <li class="menu-title"><span>Purchases</span></li>
          <li>
            <router-link to="purchases"
              ><i class="feather feather-shopping-cart"></i>
              <span>Purchases</span></router-link
            >
          </li>
          <li>
            <router-link to="purchase-orders"
              ><i class="feather feather-shopping-bag"></i>
              <span>Purchase Orders</span></router-link
            >
          </li>
          <li>
            <router-link to="debit-notes"
              ><i class="feather feather-file-text"></i>
              <span>Debit Notes</span></router-link
            >
          </li>
        </ul>
        <!-- /Purchases -->

        <!-- Finance & Accounts -->
        <ul>
          <li class="menu-title"><span>Finance & Accounts</span></li>
          <li>
            <router-link to="expenses"
              ><i class="feather feather-file-plus"></i>
              <span>Expenses</span></router-link
            >
          </li>
          <li>
            <router-link to="payments"
              ><i class="feather feather-credit-card"></i>
              <span>Payments</span></router-link
            >
          </li>
        </ul>
        <!-- /Finance & Accounts -->

        <!-- Quotations -->
        <ul>
          <li class="menu-title"><span>Quotations</span></li>
          <li>
            <router-link to="quotations"
              ><i class="feather feather-clipboard"></i>
              <span>Quotations</span></router-link
            >
          </li>
          <li>
            <router-link to="delivery-challans"
              ><i class="feather feather-file-text"></i>
              <span>Delivery Challans</span></router-link
            >
          </li>
        </ul>
        <!-- /Quotations -->

        <!-- Reports -->
        <ul>
          <li class="menu-title"><span>Reports</span></li>
          <li>
            <router-link to="quotations"
              ><i class="feather feather-clipboard"></i>
              <span>Quotations</span></router-link
            >
          </li>
          <li>
            <router-link to="payment-summary"
              ><i class="feather feather-credit-card"></i>
              <span>Payment Summary</span></router-link
            >
          </li>
        </ul>
        <!-- /Reports -->

        <!-- User Management -->
        <ul>
          <li class="menu-title"><span>User Management</span></li>
          <li class="submenu">
            <a href="javascript:;"
              ><i class="feather feather-user"></i> <span> Manage Users</span>
              <span class="menu-arrow"></span
            ></a>
            <ul>
              <li><router-link to="add-user">Add User</router-link></li>
              <li><router-link to="users">Users</router-link></li>
            </ul>
          </li>
          <li>
            <router-link to="roles-permission"
              ><i class="feather feather-clipboard"></i>
              <span>Roles & Permission</span></router-link
            >
          </li>
          <li>
            <router-link to="delete-account-request"
              ><i class="feather feather-trash-2"></i>
              <span>Delete Account Request</span></router-link
            >
          </li>
        </ul>
        <!-- /User Management -->

        <!-- Membership) -->
        <ul>
          <li class="menu-title"><span>Membership</span></li>
          <li class="submenu">
            <a href="javascript:;"
              ><i class="feather feather-book"></i> <span> Membership</span>
              <span class="menu-arrow"></span
            ></a>
            <ul>
              <li><router-link to="membership-plans">Membership Plans</router-link></li>
              <li>
                <router-link to="membership-addons">Membership Addons</router-link>
              </li>
              <li><router-link to="subscribers">Subscribers</router-link></li>
              <li><router-link to="transactions">Transactions</router-link></li>
            </ul>
          </li>
        </ul>
        <!-- /Membership) -->

        <!-- Content (CMS) -->
        <ul>
          <li class="menu-title"><span>Content (CMS)</span></li>
          <li class="submenu">
            <a href="javascript:;"
              ><i class="feather feather-folder"></i> <span> Pages</span>
              <span class="menu-arrow"></span
            ></a>
            <ul>
              <li><router-link to="add-page">Add Page</router-link></li>
              <li><router-link to="pages">Pages</router-link></li>
            </ul>
          </li>
          <li class="submenu">
            <a href="javascript:;"
              ><i class="feather feather-book"></i> <span> Blog</span>
              <span class="menu-arrow"></span
            ></a>
            <ul>
              <li><router-link to="all-blogs">All Blogs</router-link></li>
              <li><router-link to="add-blog">Add Blog</router-link></li>
              <li><router-link to="categories">Categories</router-link></li>
              <li><router-link to="blog-comments">Blog Comments</router-link></li>
            </ul>
          </li>
          <li class="submenu">
            <a href="javascript:;"
              ><i class="feather feather-map-pin"></i> <span> Location</span>
              <span class="menu-arrow"></span
            ></a>
            <ul>
              <li><router-link to="countries">Countries</router-link></li>
              <li><router-link to="states">States</router-link></li>
              <li><router-link to="cities">Cities</router-link></li>
            </ul>
          </li>
          <li>
            <router-link to="testimonials"
              ><i class="feather feather-message-square"></i>
              <span>Testimonials</span></router-link
            >
          </li>
          <li>
            <router-link to="faq"
              ><i class="feather feather-alert-circle"></i> <span>FAQ</span></router-link
            >
          </li>
        </ul>
        <!-- /Content (CMS) -->

        <!-- Support -->
        <ul>
          <li class="menu-title"><span>Support</span></li>
          <li>
            <router-link to="contact-messages"
              ><i class="feather feather-printer"></i>
              <span>Contact Messages</span></router-link
            >
          </li>
          <li class="submenu">
            <a href="javascript:;"
              ><i class="feather feather-save"></i> <span> Tickets</span>
              <span class="menu-arrow"></span
            ></a>
            <ul>
              <li><router-link to="tickets">Tickets</router-link></li>
              <li><router-link to="tickets-list">Tickets List</router-link></li>
              <li><router-link to="tickets-kanban">Tickets Kanban</router-link></li>
              <li><router-link to="ticket-details">Ticket Overview</router-link></li>
            </ul>
          </li>
        </ul>
        <!-- /Support -->

        <!-- Authentication -->
        <ul>
          <li class="submenu">
            <a href="javascript:;"
              ><i class="feather feather-lock"></i> <span> Authentication </span>
              <span class="menu-arrow"></span
            ></a>
            <ul>
              <li><router-link to="login"> Login </router-link></li>
              <li><router-link to="register"> Register </router-link></li>
              <li><router-link to="forgot-password"> Forgot Password </router-link></li>
              <li><router-link to="lock-screen"> Lock Screen </router-link></li>
            </ul>
          </li>
        </ul>
        <!-- /Authentication -->

        <!-- Pages -->
        <ul>
          <li class="menu-title"><span>Pages</span></li>
          <li>
            <router-link to="profile"
              ><i class="feather feather-user"></i> <span>Profile</span></router-link
            >
          </li>
          <li>
            <router-link to="error-404"
              ><i class="feather feather-x-square"></i>
              <span>Error Pages</span></router-link
            >
          </li>
          <li>
            <router-link to="blank-page"
              ><i class="feather feather-file"></i> <span>Blank Page</span></router-link
            >
          </li>
          <li>
            <router-link to="maps-vector"
              ><i class="feather feather-image"></i> <span>Vector Maps</span></router-link
            >
          </li>
        </ul>
        <!-- /Pages -->

        <!-- UI Interface -->
        <ul>
          <li class="menu-title">
            <span>UI Interface</span>
          </li>
          <li class="submenu">
            <a href="javascript:;"
              ><i class="feather feather-pocket"></i> <span>Base UI </span>
              <span class="menu-arrow"></span
            ></a>
            <ul>
              <li><router-link to="alerts">Alerts</router-link></li>
              <li><router-link to="accordions">Accordions</router-link></li>
              <li><router-link to="avatar">Avatar</router-link></li>
              <li><router-link to="badges">Badges</router-link></li>
              <li><router-link to="buttons">Buttons</router-link></li>
              <li><router-link to="buttongroup">Button Group</router-link></li>
              <li><router-link to="breadcrumbs">Breadcrumb</router-link></li>
              <li><router-link to="cards">Cards</router-link></li>
              <li><router-link to="carousel">Carousel</router-link></li>
              <li><router-link to="dropdowns">Dropdowns</router-link></li>
              <li><router-link to="grid">Grid</router-link></li>
              <li><router-link to="images">Images</router-link></li>
              <li><router-link to="lightbox">Lightbox</router-link></li>
              <li><router-link to="media">Media</router-link></li>
              <li><router-link to="modal">Modals</router-link></li>
              <li><router-link to="offcanvas">Offcanvas</router-link></li>
              <li><router-link to="pagination">Pagination</router-link></li>
              <li><router-link to="popover">Popover</router-link></li>
              <li><router-link to="progress">Progress Bars</router-link></li>
              <li><router-link to="placeholders">Placeholders</router-link></li>
              <li><router-link to="rangeslider">Range Slider</router-link></li>
              <li><router-link to="spinners">Spinner</router-link></li>
              <li><router-link to="sweetalerts">Sweet Alerts</router-link></li>
              <li><router-link to="tab">Tabs</router-link></li>
              <li><router-link to="toastr">Toasts</router-link></li>
              <li><router-link to="tooltip">Tooltip</router-link></li>
              <li><router-link to="typography">Typography</router-link></li>
              <li><router-link to="video">Video</router-link></li>
            </ul>
          </li>
          <li class="submenu">
            <a href="javascript:;"
              ><i class="feather feather-box"></i> <span>Elements </span>
              <span class="menu-arrow"></span
            ></a>
            <ul>
              <li><router-link to="ribbon">Ribbon</router-link></li>
              <li><router-link to="clipboard">Clipboard</router-link></li>
              <li><router-link to="drag-drop">Drag & Drop</router-link></li>
              <li><router-link to="rating">Rating</router-link></li>
              <li><router-link to="text-editor">Text Editor</router-link></li>
              <li><router-link to="counter">Counter</router-link></li>
              <li><router-link to="scrollbar">Scrollbar</router-link></li>
              <li><router-link to="notification">Notification</router-link></li>
              <li><router-link to="stickynote">Sticky Note</router-link></li>
              <li><router-link to="timeline">Timeline</router-link></li>
              <li>
                <router-link to="horizontal-timeline">Horizontal Timeline</router-link>
              </li>
              <li><router-link to="form-wizard">Form Wizard</router-link></li>
            </ul>
          </li>
          <li class="submenu">
            <a href="javascript:;"
              ><i class="feather feather-bar-chart"></i> <span> Charts </span>
              <span class="menu-arrow"></span
            ></a>
            <ul>
              <li><router-link to="chart-apex">Apex Charts</router-link></li>
              <li><router-link to="chart-js">Chart Js</router-link></li>
              <li><router-link to="chart-morris">Morris Charts</router-link></li>
              <li><router-link to="chart-flot">Flot Charts</router-link></li>
              <li><router-link to="chart-peity">Peity Charts</router-link></li>
              <li><router-link to="chart-c3">C3 Charts</router-link></li>
            </ul>
          </li>
          <li class="submenu">
            <a href="javascript:;"
              ><i class="feather feather-award"></i> <span> Icons </span>
              <span class="menu-arrow"></span
            ></a>
            <ul>
              <li><router-link to="icon-fontawesome">Fontawesome Icons</router-link></li>
              <li><router-link to="icon-feather">Feather Icons</router-link></li>
              <li><router-link to="icon-ionic">Ionic Icons</router-link></li>
              <li><router-link to="icon-material">Material Icons</router-link></li>
              <li><router-link to="icon-pe7">Pe7 Icons</router-link></li>
              <li><router-link to="icon-simpleline">Simpleline Icons</router-link></li>
              <li><router-link to="icon-themify">Themify Icons</router-link></li>
              <li><router-link to="icon-weather">Weather Icons</router-link></li>
              <li><router-link to="icon-typicon">Typicon Icons</router-link></li>
              <li><router-link to="icon-flag">Flag Icons</router-link></li>
            </ul>
          </li>
          <li class="submenu">
            <a href="javascript:;"
              ><i class="feather feather-sidebar"></i> <span> Forms </span>
              <span class="menu-arrow"></span
            ></a>
            <ul>
              <li><router-link to="form-basic-inputs">Basic Inputs </router-link></li>
              <li><router-link to="form-input-groups">Input Groups </router-link></li>
              <li><router-link to="form-horizontal">Horizontal Form </router-link></li>
              <li><router-link to="form-vertical"> Vertical Form </router-link></li>
              <li><router-link to="form-mask">Form Mask </router-link></li>
              <li><router-link to="form-validation">Form Validation </router-link></li>
              <li><router-link to="form-select2">Form Select2 </router-link></li>
              <li><router-link to="form-fileupload">File Upload </router-link></li>
            </ul>
          </li>
          <li class="submenu">
            <a href="javascript:;"
              ><i class="feather feather-layout"></i> <span> Tables </span>
              <span class="menu-arrow"></span
            ></a>
            <ul>
              <li><router-link to="tables-basic">Basic Tables </router-link></li>
              <li><router-link to="data-tables">Data Table </router-link></li>
            </ul>
          </li>
        </ul>
        <!-- /UI Interface -->

        <!-- Settings -->
        <ul>
          <li class="menu-title"><span>Settings</span></li>
          <li>
            <router-link to="settings"
              ><i class="feather feather-settings"></i> <span>Settings</span></router-link
            >
          </li>
          <li>
            <router-link to="/"
              ><i class="feather feather-power"></i> <span>Logout</span></router-link
            >
          </li>
        </ul>
        <!-- /Settings -->
      </div>
    </div>
  </div>
  <!-- /Sidebar -->
</template>
<script>
export default {
  data() {
    return {};
  },
  mounted() {
    const wrapper = document.querySelector(".main-wrapper");
    const pageWrapper = document.querySelector(".page-wrapper");
    const toggleBtn = document.querySelector("#toggle_btn");
    const body = document.querySelector("body");
    const subdrop = document.querySelectorAll(".subdrop + ul");
    const mobileBtn = document.querySelector("#mobile_btn");
    const sidebarOverlay = document.createElement("div");
    sidebarOverlay.classList.add("sidebar-overlay");
    document.body.appendChild(sidebarOverlay);

    var Sidemenu = function () {
      this.$menuItem = $("#sidebar-menu a");
    };

    function init() {
      var $this = Sidemenu;
      $("#sidebar-menu a").on("click", function (e) {
        if ($(this).parent().hasClass("submenu")) {
          e.preventDefault();
        }
        if (!$(this).hasClass("subdrop")) {
          $("ul", $(this).parents("ul:first")).slideUp(350);
          $("a", $(this).parents("ul:first")).removeClass("subdrop");
          $(this).next("ul").slideDown(350);
          $(this).addClass("subdrop");
        } else if ($(this).hasClass("subdrop")) {
          $(this).removeClass("subdrop");
          $(this).next("ul").slideUp(350);
        }
      });
      $("#sidebar-menu ul li.submenu a.active")
        .parents("li:last")
        .children("a:first")
        .addClass("active")
        .trigger("click");
    }
    init();
    $(document).on("click", "#toggle_btn", function () {
      if ($("body").hasClass("mini-sidebar")) {
        $("body").removeClass("mini-sidebar");
        $(".subdrop + ul").slideDown();
      } else {
        $("body").addClass("mini-sidebar");
        $(".subdrop + ul").slideUp();
      }
      setTimeout(function () {
        // mA.redraw();
        // mL.redraw();
      }, 300);
      return false;
    });

    $(document).on("mouseover", function (e) {
      e.stopPropagation();
      if ($("body").hasClass("mini-sidebar") && $("#toggle_btn").is(":visible")) {
        var targ = $(e.target).closest(".sidebar").length;
        if (targ) {
          $("body").addClass("expand-menu");
          $(".subdrop + ul").slideDown();
        } else {
          $("body").removeClass("expand-menu");
          $(".subdrop + ul").slideUp();
        }
        return false;
      }
    });

    mobileBtn.addEventListener("click", function () {
      wrapper.classList.toggle("slide-nav");
      sidebarOverlay.classList.toggle("opened");
      document.documentElement.classList.toggle("menu-opened");
      return false;
    });

    sidebarOverlay.addEventListener("click", function () {
      wrapper.classList.remove("slide-nav");
      sidebarOverlay.classList.remove("opened");
      document.documentElement.classList.remove("menu-opened");
    });

    if (pageWrapper) {
      const height = window.innerHeight;
      pageWrapper.style.minHeight = `${height}px`;
    }

    window.addEventListener("resize", function () {
      if (pageWrapper) {
        const height = window.innerHeight;
        pageWrapper.style.minHeight = `${height}px`;
      }
    });
  },
};
</script>
