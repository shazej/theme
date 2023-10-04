<template>
  <!-- Sidebar -->
  <div class="sidebar" id="sidebar" :class="$route.meta.sidebarClass">
    <sidebar-header></sidebar-header>
    <div class="sidebar-inner slimscroll">
      <perfect-scrollbar
        class="scroll-area"
        :settings="settings"
        @ps-scroll-y="scrollHanle"
      >
        <div id="sidebar-menu" class="sidebar-menu">
          <!-- Main -->
          <ul>
            <li class="menu-title"><span>Main</span></li>
            <li class="submenu">
              <a
                href="#sidebarDashboard"
                data-bs-toggle="collapse"
                role="button"
                aria-expanded="false"
                aria-controls="sidebarDashboard"
                v-bind:class="DashboardMenu ? 'active subdrop' : 'notactive'"
                v-on:click="DashboardMenus = !DashboardMenus"
                :class="{ subdrop: DashboardMenus }"
                ><i class="feather feather-home"></i> <span> Dashboard</span>
                <span class="menu-arrow"></span
              ></a>
              <ul class="collapse menu-dropdown" id="sidebarDashboard">
                <li>
                  <router-link
                    v-bind:class="{
                      active:
                        currentPath == 'index' ||
                        currentPath == 'index-two' ||
                        currentPath == 'index-three' ||
                        currentPath == 'index-four' ||
                        currentPath == 'index-five',
                    }"
                    to="index"
                    >Admin Dashboard</router-link
                  >
                </li>
              </ul>
            </li>
            <li class="submenu">
              <a
                href="#sidebarChat"
                data-bs-toggle="collapse"
                role="button"
                aria-expanded="false"
                aria-controls="sidebarChat"
                v-bind:class="chatMenu ? 'active subdrop' : 'notactive'"
                v-on:click="ChatMenus = !ChatMenus"
                :class="{ subdrop: ChatMenus }"
                ><i class="feather feather-grid"></i> <span> Applications</span>
                <span class="menu-arrow"></span
              ></a>
              <ul class="collapse menu-dropdown" id="sidebarChat">
                <li>
                  <router-link
                    :class="currentPath == 'chat' ? 'active' : 'notactive'"
                    to="chat"
                    >Chat</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'calendar' ? 'active' : 'notactive'"
                    to="calendar"
                    >Calendar</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'email' ? 'active' : 'notactive'"
                    to="email"
                    >Email</router-link
                  >
                </li>
              </ul>
            </li>
          </ul>
          <!-- /Main -->
          <!-- Customers -->
          <ul>
            <li class="menu-title"><span>Customers</span></li>
            <li>
              <router-link
                to="/customers"
                :class="currentPath == 'customers' ? 'active' : 'notactive'"
                ><i class="feather feather-users"></i> <span>Customers</span></router-link
              >
            </li>
            <li>
              <router-link
                to="/customer-details"
                :class="currentPath == 'customer-details' ? 'active' : 'notactive'"
                ><i class="feather feather-file"></i>
                <span>Customer Details</span></router-link
              >
            </li>
            <li>
              <router-link
                to="/vendors"
                :class="currentPath == 'vendors' ? 'active' : 'notactive'"
                ><i class="feather feather-user"></i> <span>Vendors</span></router-link
              >
            </li>
          </ul>
          <!-- /Customers -->
          <!-- Inventory -->
          <ul>
            <li class="menu-title"><span>Inventory</span></li>
            <li class="submenu">
              <a
                href="#sidebarProducts"
                data-bs-toggle="collapse"
                role="button"
                aria-expanded="false"
                aria-controls="sidebarProducts"
                v-bind:class="ProductMenu ? 'active subdrop' : 'notactive'"
                v-on:click="ProductMenus = !ProductMenus"
                :class="{ subdrop: ProductMenus }"
                ><i class="feather feather-package"></i>
                <span> Products / Services</span> <span class="menu-arrow"></span
              ></a>
              <ul class="collapse menu-dropdown" id="sidebarProducts">
                <li>
                  <router-link
                    :class="currentPath == 'product-list' ? 'active' : 'notactive'"
                    to="product-list"
                    >Product List</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'category' ? 'active' : 'notactive'"
                    to="category"
                    >Category</router-link
                  >
                </li>

                <li>
                  <router-link
                    :class="currentPath == 'units' ? 'active' : 'notactive'"
                    to="units"
                    >Units</router-link
                  >
                </li>
              </ul>
            </li>
            <li>
              <router-link
                :class="currentPath == 'inventory' ? 'active' : 'notactive'"
                to="inventory"
                ><i class="feather feather-user"></i> <span>Inventory</span></router-link
              >
            </li>
          </ul>
          <!-- /Inventory -->

          <!-- Sales -->
          <ul>
            <li class="menu-title"><span>Sales</span></li>
            <li class="submenu">
              <a
                href="#sidebarInvoices"
                data-bs-toggle="collapse"
                role="button"
                aria-expanded="false"
                aria-controls="sidebarInvoices"
                v-bind:class="InvoicesMenu ? 'active subdrop' : 'notactive'"
                v-on:click="InvoicesMenus = !InvoicesMenus"
                :class="{ subdrop: InvoicesMenus }"
                ><i class="feather feather-file"></i> <span>Invoices</span
                ><span class="menu-arrow"></span
              ></a>
              <ul class="collapse menu-dropdown" id="sidebarInvoices">
                <li>
                  <router-link
                    :class="currentPath == 'invoices' ? 'active' : 'notactive'"
                    to="invoices"
                    >Invoices List</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'invoice-template' ? 'active' : 'notactive'"
                    to="invoice-template"
                    >Invoice Templates</router-link
                  >
                </li>
              </ul>
            </li>
            <li>
              <router-link
                :class="currentPath == 'recurring-invoices' ? 'active' : 'notactive'"
                to="recurring-invoices"
                ><i class="feather feather-clipboard"></i>
                <span>Recurring Invoices</span></router-link
              >
            </li>
            <li>
              <router-link
                :class="currentPath == 'credit-notes' ? 'active' : 'notactive'"
                to="credit-notes"
                ><i class="feather feather-edit"></i>
                <span>Credit Notes</span></router-link
              >
            </li>
          </ul>
          <!-- /Sales -->

          <!-- Purchases -->
          <ul>
            <li class="menu-title"><span>Purchases</span></li>
            <li>
              <router-link
                :class="currentPath == 'purchases' ? 'active' : 'notactive'"
                to="purchases"
                ><i class="feather feather-shopping-cart"></i>
                <span>Purchases</span></router-link
              >
            </li>
            <li>
              <router-link
                :class="currentPath == 'purchase-orders' ? 'active' : 'notactive'"
                to="purchase-orders"
                ><i class="feather feather-shopping-bag"></i>
                <span>Purchase Orders</span></router-link
              >
            </li>
            <li>
              <router-link
                :class="currentPath == 'debit-notes' ? 'active' : 'notactive'"
                to="debit-notes"
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
              <router-link
                :class="currentPath == 'expenses' ? 'active' : 'notactive'"
                to="expenses"
                ><i class="feather feather-file-plus"></i>
                <span>Expenses</span></router-link
              >
            </li>
            <li>
              <router-link
                :class="currentPath == 'payments' ? 'active' : 'notactive'"
                to="payments"
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
              <router-link
                :class="currentPath == 'delivery-challans' ? 'active' : 'notactive'"
                to="delivery-challans"
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
              <router-link
                :class="currentPath == 'quotations' ? 'active' : 'notactive'"
                to="quotations"
                ><i class="feather feather-clipboard"></i>
                <span>Quotations</span></router-link
              >
            </li>
            <li>
              <router-link
                :class="currentPath == 'payment-summary' ? 'active' : 'notactive'"
                to="payment-summary"
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
              <a
                href="#sidebarUsers"
                data-bs-toggle="collapse"
                role="button"
                aria-expanded="false"
                aria-controls="sidebarUsers"
                v-bind:class="UsersMenu ? 'active subdrop' : 'notactive'"
                v-on:click="UsersMenus = !UsersMenus"
                :class="{ subdrop: UsersMenus }"
                ><i class="feather feather-user"></i> <span> Manage Users</span>
                <span class="menu-arrow"></span
              ></a>
              <ul class="collapse menu-dropdown" id="sidebarUsers">
                <li>
                  <router-link
                    :class="currentPath == 'add-user' ? 'active' : 'notactive'"
                    to="add-user"
                    >Add User</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'users' ? 'active' : 'notactive'"
                    to="users"
                    >Users</router-link
                  >
                </li>
              </ul>
            </li>
            <li>
              <router-link
                :class="currentPath == 'roles-permission' ? 'active' : 'notactive'"
                to="roles-permission"
                ><i class="feather feather-clipboard"></i>
                <span>Roles & Permission</span></router-link
              >
            </li>
            <li>
              <router-link
                :class="currentPath == 'delete-account-request' ? 'active' : 'notactive'"
                to="delete-account-request"
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
              <a
                href="#sidebarMembership"
                data-bs-toggle="collapse"
                role="button"
                aria-expanded="false"
                aria-controls="sidebarMembership"
                v-bind:class="MembershipMenu ? 'active subdrop' : 'notactive'"
                v-on:click="MembershipMenus = !MembershipMenus"
                :class="{ subdrop: MembershipMenus }"
                ><i class="feather feather-book"></i> <span> Membership</span>
                <span class="menu-arrow"></span
              ></a>
              <ul class="collapse menu-dropdown" id="sidebarMembership">
                <li>
                  <router-link
                    :class="currentPath == 'membership-plans' ? 'active' : 'notactive'"
                    to="membership-plans"
                    >Membership Plans</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'membership-addons' ? 'active' : 'notactive'"
                    to="membership-addons"
                    >Membership Addons</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'subscribers' ? 'active' : 'notactive'"
                    to="subscribers"
                    >Subscribers</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'transactions' ? 'active' : 'notactive'"
                    to="transactions"
                    >Transactions</router-link
                  >
                </li>
              </ul>
            </li>
          </ul>
          <!-- /Membership) -->

          <!-- Content (CMS) -->
          <ul>
            <li class="menu-title"><span>Content (CMS)</span></li>
            <li class="submenu">
              <a
                href="#sidebarPages"
                data-bs-toggle="collapse"
                role="button"
                aria-expanded="false"
                aria-controls="sidebarPages"
                v-bind:class="PagesMenu ? 'active subdrop' : 'notactive'"
                v-on:click="PagesMenus = !PagesMenus"
                :class="{ subdrop: PagesMenus }"
                ><i class="feather feather-folder"></i> <span> Pages</span>
                <span class="menu-arrow"></span
              ></a>
              <ul class="collapse menu-dropdown" id="sidebarPages">
                <li>
                  <router-link
                    :class="currentPath == 'add-page' ? 'active' : 'notactive'"
                    to="add-page"
                    >Add Page</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'pages' ? 'active' : 'notactive'"
                    to="pages"
                    >Pages</router-link
                  >
                </li>
              </ul>
            </li>
            <li class="submenu">
              <a
                href="#sidebarBlog"
                data-bs-toggle="collapse"
                role="button"
                aria-expanded="false"
                aria-controls="sidebarBlog"
                v-bind:class="BlogMenu ? 'active subdrop' : 'notactive'"
                v-on:click="BlogMenus = !BlogMenus"
                :class="{ subdrop: BlogMenus }"
                ><i class="feather feather-book"></i> <span> Blog</span>
                <span class="menu-arrow"></span
              ></a>
              <ul class="collapse menu-dropdown" id="sidebarBlog">
                <li>
                  <router-link
                    :class="
                      currentPath == 'all-blog' || currentPath == 'inactive-blog'
                        ? 'active'
                        : 'notactive'
                    "
                    to="all-blog"
                    >All Blogs</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'add-blog' ? 'active' : 'notactive'"
                    to="add-blog"
                    >Add Blog</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'categories' ? 'active' : 'notactive'"
                    to="categories"
                    >Categories</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'blog-comments' ? 'active' : 'notactive'"
                    to="blog-comments"
                    >Blog Comments</router-link
                  >
                </li>
              </ul>
            </li>
            <li class="submenu">
              <a
                href="#sidebarLocation"
                data-bs-toggle="collapse"
                role="button"
                aria-expanded="false"
                aria-controls="sidebarLocation"
                v-bind:class="LocationMenu ? 'active subdrop' : 'notactive'"
                v-on:click="LocationMenus = !LocationMenus"
                :class="{ subdrop: LocationMenus }"
                ><i class="feather feather-map-pin"></i> <span> Location</span>
                <span class="menu-arrow"></span
              ></a>
              <ul class="collapse menu-dropdown" id="sidebarLocation">
                <li>
                  <router-link
                    :class="currentPath == 'countries' ? 'active' : 'notactive'"
                    to="countries"
                    >Countries</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'states' ? 'active' : 'notactive'"
                    to="states"
                    >States</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'cities' ? 'active' : 'notactive'"
                    to="cities"
                    >Cities</router-link
                  >
                </li>
              </ul>
            </li>
            <li>
              <router-link
                :class="currentPath == 'testimonials' ? 'active' : 'notactive'"
                to="testimonials"
                ><i class="feather feather-message-square"></i>
                <span>Testimonials</span></router-link
              >
            </li>
            <li>
              <router-link :class="currentPath == 'faq' ? 'active' : 'notactive'" to="faq"
                ><i class="feather feather-alert-circle"></i>
                <span>FAQ</span></router-link
              >
            </li>
          </ul>
          <!-- /Content (CMS) -->

          <!-- Support -->
          <ul>
            <li class="menu-title"><span>Support</span></li>
            <li>
              <router-link
                :class="currentPath == 'contact-messages' ? 'active' : 'notactive'"
                to="contact-messages"
                ><i class="feather feather-printer"></i>
                <span>Contact Messages</span></router-link
              >
            </li>
            <li class="submenu">
              <a
                href="#sidebarTickets"
                data-bs-toggle="collapse"
                role="button"
                aria-expanded="false"
                aria-controls="sidebarTickets"
                v-bind:class="TicketsMenu ? 'active subdrop' : 'notactive'"
                v-on:click="TicketsMenus = !TicketsMenus"
                :class="{ subdrop: TicketsMenus }"
                ><i class="feather feather-save"></i> <span> Tickets</span>
                <span class="menu-arrow"></span
              ></a>
              <ul class="collapse menu-dropdown" id="sidebarTickets">
                <li>
                  <router-link
                    :class="currentPath == 'tickets' ? 'active' : 'notactive'"
                    to="tickets"
                    >Tickets</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'tickets-list' ? 'active' : 'notactive'"
                    to="tickets-list"
                    >Tickets List</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'tickets-kanban' ? 'active' : 'notactive'"
                    to="tickets-kanban"
                    >Tickets Kanban</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'ticket-details' ? 'active' : 'notactive'"
                    to="ticket-details"
                    >Ticket Overview</router-link
                  >
                </li>
              </ul>
            </li>
          </ul>
          <!-- /Support -->

          <!-- Authentication -->
          <ul>
            <li class="submenu">
              <a
                href="#sidebarAuth"
                data-bs-toggle="collapse"
                role="button"
                aria-expanded="false"
                aria-controls="sidebarAuth"
                v-bind:class="AuthMenu ? 'active subdrop' : 'notactive'"
                v-on:click="AuthMenus = !AuthMenus"
                :class="{ subdrop: AuthMenus }"
                ><i class="feather feather-lock"></i> <span> Authentication </span>
                <span class="menu-arrow"></span
              ></a>
              <ul class="collapse menu-dropdown" id="sidebarAuth">
                <li><router-link to="/"> Login </router-link></li>
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
              <router-link
                :class="currentPath == 'profile' ? 'active' : 'notactive'"
                to="profile"
                ><i class="feather feather-user"></i> <span>Profile</span></router-link
              >
            </li>
            <li>
              <router-link
                :class="currentPath == 'error-404' ? 'active' : 'notactive'"
                to="error-404"
                ><i class="feather feather-x-square"></i>
                <span>Error Pages</span></router-link
              >
            </li>
            <li>
              <router-link
                :class="currentPath == 'blank-page' ? 'active' : 'notactive'"
                to="blank-page"
                ><i class="feather feather-file"></i> <span>Blank Page</span></router-link
              >
            </li>
            <li>
              <router-link
                :class="currentPath == 'maps-vector' ? 'active' : 'notactive'"
                to="maps-vector"
                ><i class="feather feather-map-pin"></i>
                <span>Google Maps</span></router-link
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
              <a
                href="#sidebarBase"
                data-bs-toggle="collapse"
                role="button"
                aria-expanded="false"
                aria-controls="sidebarBase"
                v-bind:class="BaseMenu ? 'active subdrop' : 'notactive'"
                v-on:click="BaseMenus = !BaseMenus"
                :class="{ subdrop: BaseMenus }"
                ><i class="feather feather-pocket"></i> <span>Base UI </span>
                <span class="menu-arrow"></span
              ></a>
              <ul class="collapse menu-dropdown" id="sidebarBase">
                <li>
                  <router-link
                    :class="currentPath == 'alerts' ? 'active' : 'notactive'"
                    to="alerts"
                    >Alerts</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'accordions' ? 'active' : 'notactive'"
                    to="accordions"
                    >Accordions</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'avatar' ? 'active' : 'notactive'"
                    to="avatar"
                    >Avatar</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'badges' ? 'active' : 'notactive'"
                    to="badges"
                    >Badges</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'buttons' ? 'active' : 'notactive'"
                    to="buttons"
                    >Buttons</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'buttongroup' ? 'active' : 'notactive'"
                    to="buttongroup"
                    >Button Group</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'breadcrumbs' ? 'active' : 'notactive'"
                    to="breadcrumbs"
                    >Breadcrumb</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'cards' ? 'active' : 'notactive'"
                    to="cards"
                    >Cards</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'carousel' ? 'active' : 'notactive'"
                    to="carousel"
                    >Carousel</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'dropdowns' ? 'active' : 'notactive'"
                    to="dropdowns"
                    >Dropdowns</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'grid' ? 'active' : 'notactive'"
                    to="grid"
                    >Grid</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'images' ? 'active' : 'notactive'"
                    to="images"
                    >Images</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'lightbox' ? 'active' : 'notactive'"
                    to="lightbox"
                    >Lightbox</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'media' ? 'active' : 'notactive'"
                    to="media"
                    >Media</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'modal' ? 'active' : 'notactive'"
                    to="modal"
                    >Modals</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'offcanvas' ? 'active' : 'notactive'"
                    to="offcanvas"
                    >Offcanvas</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'pagination' ? 'active' : 'notactive'"
                    to="pagination"
                    >Pagination</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'popover' ? 'active' : 'notactive'"
                    to="popover"
                    >Popover</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'progress' ? 'active' : 'notactive'"
                    to="progress"
                    >Progress Bars</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'placeholders' ? 'active' : 'notactive'"
                    to="placeholders"
                    >Placeholders</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'rangeslider' ? 'active' : 'notactive'"
                    to="rangeslider"
                    >Range Slider</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'spinners' ? 'active' : 'notactive'"
                    to="spinners"
                    >Spinner</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'sweetalerts' ? 'active' : 'notactive'"
                    to="sweetalerts"
                    >Sweet Alerts</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'tab' ? 'active' : 'notactive'"
                    to="tab"
                    >Tabs</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'toastr' ? 'active' : 'notactive'"
                    to="toastr"
                    >Toasts</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'tooltip' ? 'active' : 'notactive'"
                    to="tooltip"
                    >Tooltip</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'typography' ? 'active' : 'notactive'"
                    to="typography"
                    >Typography</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'video' ? 'active' : 'notactive'"
                    to="video"
                    >Video</router-link
                  >
                </li>
              </ul>
            </li>
            <li class="submenu">
              <a
                href="#sidebarElements"
                data-bs-toggle="collapse"
                role="button"
                aria-expanded="false"
                aria-controls="sidebarElements"
                v-bind:class="ElementsMenu ? 'active subdrop' : 'notactive'"
                v-on:click="ElementsMenus = !ElementsMenus"
                :class="{ subdrop: ElementsMenus }"
                ><i class="feather feather-box"></i> <span>Elements </span>
                <span class="menu-arrow"></span
              ></a>
              <ul class="collapse menu-dropdown" id="sidebarElements">
                <li>
                  <router-link
                    :class="currentPath == 'ribbon' ? 'active' : 'notactive'"
                    to="ribbon"
                    >Ribbon</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'clipboard' ? 'active' : 'notactive'"
                    to="clipboard"
                    >Clipboard</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'drag-drop' ? 'active' : 'notactive'"
                    to="drag-drop"
                    >Drag & Drop</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'rating' ? 'active' : 'notactive'"
                    to="rating"
                    >Rating</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'text-editor' ? 'active' : 'notactive'"
                    to="text-editor"
                    >Text Editor</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'scrollbar' ? 'active' : 'notactive'"
                    to="counter"
                    >Counter</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'scrollbar' ? 'active' : 'notactive'"
                    to="scrollbar"
                    >Scrollbar</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'notification' ? 'active' : 'notactive'"
                    to="notification"
                    >Notification</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'stickynote' ? 'active' : 'notactive'"
                    to="stickynote"
                    >Sticky Note</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'timeline' ? 'active' : 'notactive'"
                    to="timeline"
                    >Timeline</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'horizontal-timeline' ? 'active' : 'notactive'"
                    to="horizontal-timeline"
                    >Horizontal Timeline</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'form-wizard' ? 'active' : 'notactive'"
                    to="form-wizard"
                    >Form Wizard</router-link
                  >
                </li>
              </ul>
            </li>
            <li class="submenu">
              <a
                href="#sidebarCharts"
                data-bs-toggle="collapse"
                role="button"
                aria-expanded="false"
                aria-controls="sidebarCharts"
                v-bind:class="ChartsMenu ? 'active subdrop' : 'notactive'"
                v-on:click="ChartsMenus = !ChartsMenus"
                :class="{ subdrop: ChartsMenus }"
                ><i class="feather feather-bar-chart"></i> <span> Charts </span>
                <span class="menu-arrow"></span
              ></a>
              <ul class="collapse menu-dropdown" id="sidebarCharts">
                <li>
                  <router-link
                    :class="currentPath == 'chart-apex' ? 'active' : 'notactive'"
                    to="chart-apex"
                    >Apex Charts</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'chart-js' ? 'active' : 'notactive'"
                    to="chart-js"
                    >Chart Js</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'chart-morris' ? 'active' : 'notactive'"
                    to="chart-morris"
                    >Morris Charts</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'chart-flot' ? 'active' : 'notactive'"
                    to="chart-flot"
                    >Flot Charts</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'chart-c3' ? 'active' : 'notactive'"
                    to="chart-c3"
                    >C3 Charts</router-link
                  >
                </li>
              </ul>
            </li>
            <li class="submenu">
              <a
                href="#sidebarIcons"
                data-bs-toggle="collapse"
                role="button"
                aria-expanded="false"
                aria-controls="sidebarIcons"
                v-bind:class="IconsMenu ? 'active subdrop' : 'notactive'"
                v-on:click="IconsMenus = !IconsMenus"
                :class="{ subdrop: IconsMenus }"
                ><i class="feather feather-award"></i> <span> Icons </span>
                <span class="menu-arrow"></span
              ></a>
              <ul class="collapse menu-dropdown" id="sidebarIcons">
                <li>
                  <router-link
                    :class="currentPath == 'icon-fontawesome' ? 'active' : 'notactive'"
                    to="icon-fontawesome"
                    >Fontawesome Icons</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'icon-feather' ? 'active' : 'notactive'"
                    to="icon-feather"
                    >Feather Icons</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'icon-ionic' ? 'active' : 'notactive'"
                    to="icon-ionic"
                    >Ionic Icons</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'icon-material' ? 'active' : 'notactive'"
                    to="icon-material"
                    >Material Icons</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'icon-pe7' ? 'active' : 'notactive'"
                    to="icon-pe7"
                    >Pe7 Icons</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'icon-simpleline' ? 'active' : 'notactive'"
                    to="icon-simpleline"
                    >Simpleline Icons</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'icon-themify' ? 'active' : 'notactive'"
                    to="icon-themify"
                    >Themify Icons</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'icon-weather' ? 'active' : 'notactive'"
                    to="icon-weather"
                    >Weather Icons</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'icon-typicon' ? 'active' : 'notactive'"
                    to="icon-typicon"
                    >Typicon Icons</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'chart-apex' ? 'active' : 'notactive'"
                    to="icon-flag"
                    >Flag Icons</router-link
                  >
                </li>
              </ul>
            </li>
            <li class="submenu">
              <a
                href="#sidebarForms"
                data-bs-toggle="collapse"
                role="button"
                aria-expanded="false"
                aria-controls="sidebarForms"
                v-bind:class="FormsMenu ? 'active subdrop' : 'notactive'"
                v-on:click="FormsMenus = !FormsMenus"
                :class="{ subdrop: FormsMenus }"
                ><i class="feather feather-sidebar"></i> <span> Forms </span>
                <span class="menu-arrow"></span
              ></a>
              <ul class="collapse menu-dropdown" id="sidebarForms">
                <li>
                  <router-link
                    :class="currentPath == 'form-basic-inputs' ? 'active' : 'notactive'"
                    to="form-basic-inputs"
                    >Basic Inputs
                  </router-link>
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'form-input-groups' ? 'active' : 'notactive'"
                    to="form-input-groups"
                    >Input Groups
                  </router-link>
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'form-horizontal' ? 'active' : 'notactive'"
                    to="form-horizontal"
                    >Horizontal Form
                  </router-link>
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'form-vertical' ? 'active' : 'notactive'"
                    to="form-vertical"
                  >
                    Vertical Form
                  </router-link>
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'form-mask' ? 'active' : 'notactive'"
                    to="form-mask"
                    >Form Mask
                  </router-link>
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'form-validation' ? 'active' : 'notactive'"
                    to="form-validation"
                    >Form Validation
                  </router-link>
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'form-select2' ? 'active' : 'notactive'"
                    to="form-select2"
                    >Form Select2
                  </router-link>
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'form-fileupload' ? 'active' : 'notactive'"
                    to="form-fileupload"
                    >File Upload
                  </router-link>
                </li>
              </ul>
            </li>
            <li class="submenu">
              <a
                href="#sidebarTables"
                data-bs-toggle="collapse"
                role="button"
                aria-expanded="false"
                aria-controls="sidebarTables"
                v-bind:class="TablesMenu ? 'active subdrop' : 'notactive'"
                v-on:click="TablesMenus = !TablesMenus"
                :class="{ subdrop: TablesMenus }"
                ><i class="feather feather-layout"></i> <span> Tables </span>
                <span class="menu-arrow"></span
              ></a>
              <ul class="collapse menu-dropdown" id="sidebarTables">
                <li>
                  <router-link
                    :class="currentPath == 'tables-basic' ? 'active' : 'notactive'"
                    to="tables-basic"
                    >Basic Tables
                  </router-link>
                </li>
                <li>
                  <router-link
                    :class="currentPath == 'data-tables' ? 'active' : 'notactive'"
                    to="data-tables"
                    >Data Table
                  </router-link>
                </li>
              </ul>
            </li>
          </ul>
          <!-- /UI Interface -->

          <!-- Settings -->
          <ul>
            <li class="menu-title"><span>Settings</span></li>
            <li>
              <router-link
                :class="currentPath == 'settings' ? 'active' : 'notactive'"
                to="settings"
                ><i class="feather feather-settings"></i>
                <span>Settings</span></router-link
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
      </perfect-scrollbar>
    </div>
  </div>
  <!-- /Sidebar -->
</template>
<script>
import { PerfectScrollbar } from "vue3-perfect-scrollbar";
import "vue3-perfect-scrollbar/dist/vue3-perfect-scrollbar.css";
export default {
  data() {
    return {
      DashboardMenus: false,
      ChatMenus: false,
      ProductMenus: false,
      InvoicesMenus: false,
      UsersMenus: false,
      MembershipMenus: false,
      PagesMenus: false,
      BlogMenus: false,
      LocationMenus: false,
      TicketsMenus: false,
      AuthMenus: false,
      ElementsMenus: false,
      BaseMenus: false,
      BaseMenus: false,
      ChartsMenus: false,
      IconsMenus: false,
      FormsMenus: false,
      TablesMenus: false,
      settings: {
        suppressScrollX: true,
      },
      activeClass: "active",
    };

    //  isactive : true
  },
  methods: {
    scrollHanle(evt) {},
    isCustomDropdown() {
      //Search bar
      var searchOptions = document.getElementById("search-close-options");
      var dropdown = document.getElementById("search-dropdown");
      var searchInput = document.getElementById("search-options");

      searchInput.addEventListener("focus", () => {
        var inputLength = searchInput.value.length;
        if (inputLength > 0) {
          dropdown.classList.add("show");
          searchOptions.classList.remove("d-none");
        } else {
          dropdown.classList.remove("show");
          searchOptions.classList.add("d-none");
        }
      });

      searchInput.addEventListener("keyup", () => {
        var inputLength = searchInput.value.length;
        if (inputLength > 0) {
          dropdown.classList.add("show");
          searchOptions.classList.remove("d-none");
        } else {
          dropdown.classList.remove("show");
          searchOptions.classList.add("d-none");
        }
      });

      searchOptions.addEventListener("click", () => {
        searchInput.value = "";
        dropdown.classList.remove("show");
        searchOptions.classList.add("d-none");
      });

      document.body.addEventListener("click", (e) => {
        if (e.target.getAttribute("id") !== "search-options") {
          dropdown.classList.remove("show");
          searchOptions.classList.add("d-none");
        }
      });
    },
    initActiveMenu(ele) {
      setTimeout(() => {
        if (document.querySelector("#sidebar")) {
          let a = document
            .querySelector("#sidebar")
            .querySelector('[href="' + ele + '"]');

          if (a) {
            a.classList.add("active");
            let parentCollapseDiv = a.closest(".collapse.menu-dropdown");
            if (parentCollapseDiv) {
              parentCollapseDiv.classList.add("show");
              parentCollapseDiv.parentElement.children[0].classList.add("active");
              parentCollapseDiv.parentElement.children[0].setAttribute(
                "aria-expanded",
                "true"
              );
              if (parentCollapseDiv.parentElement.closest(".collapse.menu-dropdown")) {
                parentCollapseDiv.parentElement
                  .closest(".collapse")
                  .classList.add("show");
                if (
                  parentCollapseDiv.parentElement.closest(".collapse")
                    .previousElementSibling
                )
                  parentCollapseDiv.parentElement
                    .closest(".collapse")
                    .previousElementSibling.classList.add("active");
              }
            }
          }
        }
      }, 1000);
    },
  },
  components: {
    PerfectScrollbar,
  },

  computed: {
    currentPath() {
      return this.$route.name;
    },
    DashboardMenu() {
      return (
        this.$route.name == "index" ||
        this.$route.name == "index-two" ||
        this.$route.name == "index-three" ||
        this.$route.name == "index-four" ||
        this.$route.name == "index-five"
      );
    },
    chatMenu() {
      return (
        this.$route.name == "chat" ||
        this.$route.name == "calendar" ||
        this.$route.name == "email"
      );
    },
    ProductMenu() {
      return (
        this.$route.name == "product-list" ||
        this.$route.name == "category" ||
        this.$route.name == "units"
      );
    },
    InvoicesMenu() {
      return this.$route.name == "invoices" || this.$route.name == "invoice-template";
    },
    UsersMenu() {
      return this.$route.name == "add-user" || this.$route.name == "users";
    },
    MembershipMenu() {
      return (
        this.$route.name == "membership-plans" ||
        this.$route.name == "membership-addons" ||
        this.$route.name == "subscribers" ||
        this.$route.name == "transactions"
      );
    },
    PagesMenu() {
      return this.$route.name == "add-page" || this.$route.name == "pages";
    },
    BlogMenu() {
      return (
        this.$route.name == "all-blog" ||
        this.$route.name == "inactive-blog" ||
        this.$route.name == "add-blog" ||
        this.$route.name == "categories" ||
        this.$route.name == "blog-comments"
      );
    },
    LocationMenu() {
      return (
        this.$route.name == "countries" ||
        this.$route.name == "states" ||
        this.$route.name == "cities"
      );
    },
    TicketsMenu() {
      return (
        this.$route.name == "tickets" ||
        this.$route.name == "tickets-list" ||
        this.$route.name == "tickets-kanban" ||
        this.$route.name == "ticket-details"
      );
    },
    AuthMenu() {
      return (
        this.$route.name == "/" ||
        this.$route.name == "register" ||
        this.$route.name == "forgot-password" ||
        this.$route.name == "lock-screen"
      );
    },
    ElementsMenu() {
      return (
        this.$route.name == "ribbon" ||
        this.$route.name == "clipboard" ||
        this.$route.name == "drag-drop" ||
        this.$route.name == "rating" ||
        this.$route.name == "text-editor" ||
        this.$route.name == "counter" ||
        this.$route.name == "scrollbar" ||
        this.$route.name == "notification" ||
        this.$route.name == "stickynote" ||
        this.$route.name == "timeline" ||
        this.$route.name == "horizontal-timeline" ||
        this.$route.name == "form-wizard"
      );
    },
    BaseMenu() {
      return (
        this.$route.name == "alerts" ||
        this.$route.name == "accordions" ||
        this.$route.name == "avatar" ||
        this.$route.name == "badges" ||
        this.$route.name == "buttons" ||
        this.$route.name == "buttongroup" ||
        this.$route.name == "breadcrumbs" ||
        this.$route.name == "cards" ||
        this.$route.name == "carousel" ||
        this.$route.name == "dropdowns" ||
        this.$route.name == "grid" ||
        this.$route.name == "images" ||
        this.$route.name == "lightbox" ||
        this.$route.name == "media" ||
        this.$route.name == "modal" ||
        this.$route.name == "offcanvas" ||
        this.$route.name == "pagination" ||
        this.$route.name == "popover" ||
        this.$route.name == "progress" ||
        this.$route.name == "placeholders" ||
        this.$route.name == "rangeslider" ||
        this.$route.name == "spinners" ||
        this.$route.name == "sweetalerts" ||
        this.$route.name == "tab" ||
        this.$route.name == "toastr" ||
        this.$route.name == "tooltip" ||
        this.$route.name == "typography" ||
        this.$route.name == "video"
      );
    },
    ChartsMenu() {
      return (
        this.$route.name == "chart-apex" ||
        this.$route.name == "chart-js" ||
        this.$route.name == "chart-morris" ||
        this.$route.name == "chart-flot" ||
        this.$route.name == "chart-c3"
      );
    },
    IconsMenu() {
      return (
        this.$route.name == "icon-fontawesome" ||
        this.$route.name == "icon-feather" ||
        this.$route.name == "icon-ionic" ||
        this.$route.name == "icon-material" ||
        this.$route.name == "icon-pe7" ||
        this.$route.name == "icon-simpleline" ||
        this.$route.name == "icon-themify" ||
        this.$route.name == "icon-weather" ||
        this.$route.name == "icon-typicon" ||
        this.$route.name == "icon-flag"
      );
    },
    FormsMenu() {
      return (
        this.$route.name == "form-basic-inputs" ||
        this.$route.name == "form-input-groups" ||
        this.$route.name == "form-horizontal" ||
        this.$route.name == "form-vertical" ||
        this.$route.name == "form-mask" ||
        this.$route.name == "form-validation" ||
        this.$route.name == "form-select2" ||
        this.$route.name == "form-fileupload"
      );
    },
    TablesMenu() {
      return this.$route.name == "tables-basic" || this.$route.name == "data-tables";
    },
  },
};
</script>
