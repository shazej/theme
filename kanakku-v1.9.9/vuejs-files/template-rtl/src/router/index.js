import {createRouter, createWebHistory} from 'vue-router';

import accordions from '../views/pages/uiinterface/baseui/accordions'
import alerts from '../views/pages/uiinterface/baseui/alerts'
import avatar from '../views/pages/uiinterface/baseui/avatar'
import badges from '../views/pages/uiinterface/baseui/badges'
import buttongroup from '../views/pages/uiinterface/baseui/buttongroup'
import buttons from '../views/pages/uiinterface/baseui/buttons'
import breadcrumbs from '../views/pages/uiinterface/baseui/breadcrumbs'
import cards from '../views/pages/uiinterface/baseui/cards'
import carousel from '../views/pages/uiinterface/baseui/carousel'
import dropdowns from '../views/pages/uiinterface/baseui/dropdowns'
import grid from '../views/pages/uiinterface/baseui/grid'
import images from '../views/pages/uiinterface/baseui/images'
import lightbox from '../views/pages/uiinterface/baseui/lightbox'
import media from '../views/pages/uiinterface/baseui/media'
import modal from '../views/pages/uiinterface/baseui/modal'
import offcanvas from '../views/pages/uiinterface/baseui/offcanvas'
import pagination from '../views/pages/uiinterface/baseui/pagination'
import progress from '../views/pages/uiinterface/baseui/progress'
import placeholders from '../views/pages/uiinterface/baseui/placeholders'
import popover from '../views/pages/uiinterface/baseui/popover'
import rangeslider from '../views/pages/uiinterface/baseui/rangeslider'
import spinners from '../views/pages/uiinterface/baseui/spinners'
import sweetalerts from '../views/pages/uiinterface/baseui/sweetalerts'
import tab from '../views/pages/uiinterface/baseui/tab'
import toastr from '../views/pages/uiinterface/baseui/toastr'
import tooltip from '../views/pages/uiinterface/baseui/tooltip'
import typography from '../views/pages/uiinterface/baseui/typography'
import video from '../views/pages/uiinterface/baseui/video'
import chartapex from '../views/pages/uiinterface/chart/apex/chart-apex'
import chartc3 from '../views/pages/uiinterface/chart/c3/chart-c3'
import chartflot from '../views/pages/uiinterface/chart/flot/chart-flot'
import chartjs from '../views/pages/uiinterface/chart/js/chart-js'
import chartmorris from '../views/pages/uiinterface/chart/morris/chart-morris'
import iconfontawesome from '../views/pages/uiinterface/icons/icon-fontawesome'
import iconfeather from '../views/pages/uiinterface/icons/icon-feather'
import iconionic from '../views/pages/uiinterface/icons/icon-ionic'
import iconmaterial from '../views/pages/uiinterface/icons/icon-material'
import iconpe7 from '../views/pages/uiinterface/icons/icon-pe7'
import iconsimpleline from '../views/pages/uiinterface/icons/icon-simpleline'
import iconthemify from '../views/pages/uiinterface/icons/icon-themify'
import iconweather from '../views/pages/uiinterface/icons/icon-weather'
import icontypicon from '../views/pages/uiinterface/icons/icon-typicon'
import iconflag from '../views/pages/uiinterface/icons/icon-flag'
import ribbon from '../views/pages/uiinterface/elements/ribbon'
import clipboard from '../views/pages/uiinterface/elements/clipboard'
import dragdrop from '../views/pages/uiinterface/elements/drag-drop'
import rating from '../views/pages/uiinterface/elements/rating'
import texteditor from '../views/pages/uiinterface/elements/text-editor'
import counter from '../views/pages/uiinterface/elements/counter'
import scrollbar from '../views/pages/uiinterface/elements/scrollbar'
import notificationelement from '../views/pages/uiinterface/elements/notificationelement'
import stickynote from '../views/pages/uiinterface/elements/stickynote'
import timeline from '../views/pages/uiinterface/elements/timeline'
import horizontaltimeline from '../views/pages/uiinterface/elements/horizontal-timeline'
import formwizard from '../views/pages/uiinterface/elements/form-wizard'
import Formbasicinput from '../views/pages/uiinterface/form/formbasic/Formbasicinput'
import Forminput from '../views/pages/uiinterface/form/forminput/Forminput'
import Horizontal from '../views/pages/uiinterface/form/formhorizontal/Horizontal'
import Formmask from '../views/pages/uiinterface/form/formmask/Formmask'
import Formselect2 from '../views/pages/uiinterface/form/Formselect2'
import Formfileupload from '../views/pages/uiinterface/form/Formfileupload'
import Formvalidation from '../views/pages/uiinterface/form/Formvalidation'
import Formvertical from '../views/pages/uiinterface/form/Formvertical'
import Basictable from '../views/pages/uiinterface/table/Basictable'
import Datatable from '../views/pages/uiinterface/table/Datatable'
import Settingpage from '../views/pages/settings/settings'
import Preferences from '../views/pages/settings/preferences'
import taxtypes from '../views/pages/settings/tax-types'
import expensecategory from '../views/pages/settings/expense-category'
import settingsnotifications from '../views/pages/settings/notifications'
import changepassword from '../views/pages/settings/change-password'
import deleteaccount from '../views/pages/settings/delete-account'
import Login from '../views/pages/auth/login'
import Register from '../views/pages/auth/register'
import Forgotpassword from '../views/pages/auth/forgotpassword'
import Lockscreen from '../views/pages/auth/lockscreen'
import Profile from '../views/pages/pages/profile/profile'
import BlankPage from '../views/pages/pages/blankpage'
import Error404 from '../views/pages/pages/error/error404'
import Error500 from '../views/pages/pages/error/error500'
import Vector from '../views/pages/pages/vector'
import Tickets from '../views/pages/support/ticket/tickets'
import Ticketslistpending from '../views/pages/support/ticket/tickets-list-pending'
import Ticketslistoverdue from '../views/pages/support/ticket/tickets-list-overdue'
import Ticketslistdraft from '../views/pages/support/ticket/tickets-list-draft'
import Ticketslistrecurring from '../views/pages/support/ticket/tickets-list-recurring'
import Ticketslistcancelled from '../views/pages/support/ticket/tickets-list-cancelled'
import Ticketslist from '../views/pages/support/ticket/tickets-list'
import Ticketspending from '../views/pages/support/ticket/tickets-pending'
import Ticketsoverdue from '../views/pages/support/ticket/tickets-overdue'
import Ticketsdraft from '../views/pages/support/ticket/tickets-draft'
import Ticketsrecurring from '../views/pages/support/ticket/tickets-recurring'
import Ticketscancelled from '../views/pages/support/ticket/tickets-cancelled'
import Ticketdetails from '../views/pages/support/ticket/ticket-details'
import Ticketkanban from '../views/pages/support/ticket/tickets-kanban'
import Contactmessages from '../views/pages/support/contact-messages'
import Addpage from '../views/pages/content/add-page'
import Pages from '../views/pages/content/pages'
import addblog from '../views/pages/content/blog/addblog'
import Allblogs from '../views/pages/content/blog/all-blog' 
import Inactiveblogs from '../views/pages/content/blog/inactive-blog' 
import blogcategories from '../views/pages/content/blog/categories'
import Addblogcategories from '../views/pages/content/blog/add-categories'
import blogcomments from '../views/pages/content/blog/blog-comments'
import Countries from '../views/pages/content/location/countries'
import States from '../views/pages/content/location/states'
import Cities from '../views/pages/content/location/cities'
import Testimonials from '../views/pages/content/testimonials'
import Addtestimonials from '../views/pages/content/add-testimonials'
import Edittestimonials from '../views/pages/content/edit-testimonials'
import Faq from '../views/pages/content/faq'
import Membershipplans from '../views/pages/membership/membership-plans'
import Addmembership from '../views/pages/membership/add-membership'
import Membershipaddons from '../views/pages/membership/membership-addons'
import Subscribers from '../views/pages/membership/subscribers'
import Transactions from '../views/pages/membership/transactions'
import Adduser from '../views/pages/management/manageuser/add-user'
import Users from '../views/pages/management/manageuser/users'
import Edituser from '../views/pages/management/manageuser/edit-user'
import Rolespermission from '../views/pages/management/roles-permission'
import permission from '../views/pages/management/permission'
import Deleteaccountrequest from '../views/pages/management/delete-account-request'
import Quotations from '../views/pages/reports/quotations'
import Editquotations from '../views/pages/reports/edit-quotations'
import Addquotations from '../views/pages/reports/add-quotations'
import Addcustomer from '../views/pages/reports/add-customer'
import Addproducts from '../views/pages/reports/add-products'
import Paymentsummary from '../views/pages/reports/payment-summary'
import Deliverychallans from '../views/pages/quotations/delivery-challans'
import Adddeliverychallans from '../views/pages/quotations/add-delivery-challans'
import Editdeliverychallans from '../views/pages/quotations/edit-delivery-challans'
import Expenses from '../views/pages/finance/expenses'
import Payments from '../views/pages/finance/payments'
import Addexpenses from '../views/pages/finance/add-expenses'
import Editexpenses from '../views/pages/finance/edit-expenses'
import AddPayments from '../views/pages/finance/add-payments'
import Purchases from '../views/pages/purchases/purchases'
import Addpurchases from '../views/pages/purchases/add-purchases'
import Editpurchases from '../views/pages/purchases/edit-purchases'
import Purchaseorders from '../views/pages/purchases/purchase-orders'
import Debitnotes from '../views/pages/purchases/debit-notes'
import Purchasesdetails from '../views/pages/purchases/purchases-details'
import Invoices from '../views/pages/sales/invoices'
import Invoicespaid from '../views/pages/sales/invoices-paid'
import Invoicesoverdue from '../views/pages/sales/invoices-overdue'
import Invoicesdraft from '../views/pages/sales/invoices-draft'
import Invoicesrecurring from '../views/pages/sales/invoices-recurring'
import Invoicescancelled from '../views/pages/sales/invoices-cancelled'
import Addinvoice from '../views/pages/sales/add-invoice'
import Editinvoice from '../views/pages/sales/edit-invoice'
import Invoicedetails from '../views/pages/sales/invoice-details'
import Invoicetemplate from '../views/pages/sales/invoicetemplate/invoice-template'
import Generalinvoice1 from '../views/pages/sales/invoicetemplate/general-invoice-1'
import Generalinvoice2 from '../views/pages/sales/invoicetemplate/general-invoice-2'
import Generalinvoice3 from '../views/pages/sales/invoicetemplate/general-invoice-3'
import Generalinvoice4 from '../views/pages/sales/invoicetemplate/general-invoice-4'
import Generalinvoice5 from '../views/pages/sales/invoicetemplate/general-invoice-5'
import Busticket from '../views/pages/sales/invoicetemplate/bus-ticket'
import Carbookinginvoice from '../views/pages/sales/invoicetemplate/car-booking-invoice'
import Coffeeshop from '../views/pages/sales/invoicetemplate/coffee-shop'
import Domainhosting from '../views/pages/sales/invoicetemplate/domain-hosting'
import Ecommerce from '../views/pages/sales/invoicetemplate/ecommerce'
import Fitnesscenter from '../views/pages/sales/invoicetemplate/fitness-center'
import Trainticketbooking from '../views/pages/sales/invoicetemplate/train-ticket-booking'
import Flightbookinginvoice from '../views/pages/sales/invoicetemplate/flight-booking-invoice'
import Hotelbooking from '../views/pages/sales/invoicetemplate/hotel-booking'
import Internetbilling from '../views/pages/sales/invoicetemplate/internet-billing'
import medical from '../views/pages/sales/invoicetemplate/medical'
import moneyexchange from '../views/pages/sales/invoicetemplate/moneyexchange'
import Movieticketbooking from '../views/pages/sales/invoicetemplate/movie-ticket-booking'
import Restuarentbilling from '../views/pages/sales/invoicetemplate/restuarent-billing'
import Studentbilling from '../views/pages/sales/invoicetemplate/student-billing'
import Cashreceipt1 from '../views/pages/sales/invoicetemplate/cashreceipt-1'
import Cashreceipt2 from '../views/pages/sales/invoicetemplate/cashreceipt-2'
import Cashreceipt3 from '../views/pages/sales/invoicetemplate/cashreceipt-3'
import Cashreceipt4 from '../views/pages/sales/invoicetemplate/cashreceipt-4'
import Recurringinvoices from '../views/pages/sales/recurringinvoices/recurring-invoices'
import Recurringpaid from '../views/pages/sales/recurringinvoices/recurring-paid'
import Recurringpending from '../views/pages/sales/recurringinvoices/recurring-pending'
import Recurringoverdue from '../views/pages/sales/recurringinvoices/recurring-overdue'
import Recurringdraft from '../views/pages/sales/recurringinvoices/recurring-draft'
import Recurring from '../views/pages/sales/recurringinvoices/recurring'
import Recurringcancelled from '../views/pages/sales/recurringinvoices/recurring-cancelled'
import Creditnotes from '../views/pages/sales/creditnotes/credit-notes'
import Creditnotespending from '../views/pages/sales/creditnotes/credit-notes-pending'
import Creditnotesoverdue from '../views/pages/sales/creditnotes/credit-notes-overdue'
import Creditnotesdraft from '../views/pages/sales/creditnotes/credit-notes-draft'
import Creditnotesrecurring from '../views/pages/sales/creditnotes/credit-notes-recurring'
import Creditnotescancelled from '../views/pages/sales/creditnotes/credit-notes-cancelled'
import Addcreditnotes from '../views/pages/sales/creditnotes/add-credit-notes'
import Editcreditnotes from '../views/pages/sales/creditnotes/edit-credit-notes'
import Creditnotesdetails from '../views/pages/sales/creditnotes/credit-notes-details'
import Inventory from '../views/pages/inventory/inventory'
import ProductList from '../views/pages/products&services/product-list'
import Category from '../views/pages/products&services/category'
import Units from '../views/pages/products&services/units'
import Customers from '../views/pages/customers/customers'
import AddCustomer from '../views/pages/customers/add-customer'
import EditCustomer from '../views/pages/customers/edit-customer'
import CustomerDetails from '../views/pages/customers/customer-details'
import ActiveCustomers from '../views/pages/customers/active-customers'
import DeactiveCustomers from '../views/pages/customers/deactive-customers'
import Vendors from '../views/pages/customers/vendors'
import Ledger from '../views/pages/customers/ledger'
import CustomerDetailsCancel from '../views/pages/customers/customer-details-cancel'
import CustomerDetailsPaid from '../views/pages/customers/customer-details-paid'
import Index from '../views/pages/dashboard/index'
import Chat from '../views/pages/applications/chat'
import Email from '../views/pages/applications/inbox'
import Calendar from '../views/pages/applications/calendar'
import AddVendor from '../views/pages/customers/add-vendor'
import IndexTwo from '../views/pages/dashboard/index-two'
import IndexThree from '../views/pages/dashboard/index-three'
import IndexFour from '../views/pages/dashboard/index-four'
import IndexFive from '../views/pages/dashboard/index-five'
import AddUnits from '../views/pages/products&services/add-units'
import ContactDetails from '../views/pages/content/contact-details'
import EditProducts from '../views/pages/products&services/edit-products'
import MemberPagesList from '../views/pages/membership/member-pages-list'

const routes = [
  {
    path: '/',
    name: 'login',
    component: Login
  },
  {
    path: '/index',
    name: 'index',
    component: Index,
    meta: {
      headerClass: '',
      sidebarClass: '',
 }
  },
  {
    path: '/index-two',
    name: 'index-two',
    component: IndexTwo,
    meta: {
      headerClass: '',
      sidebarClass: 'sidebar-two',
     
 }
  },
  {
    path: '/index-three',
    name: 'index-three',
    component: IndexThree,
    meta: {
      headerClass: 'header-five',
      sidebarClass: 'sidebar-three-three',
      sidebarheaderClass: 'indexsideheader'
 }
  },
  {
    path: '/index-four',
    name: 'index-four',
    component: IndexFour,
    meta: {
      headerClass: 'header-three',
 }
  },
  {
    path: '/index-five',
    name: 'index-five',
    component: IndexFive,
    meta: {
      sidebarClass: 'sidebar-four sidebar-hide',
      sidebarheaderClass: 'indexsideheader'
 }
  },
  {
    path: '/register',
    name: 'register',
    component: Register
  },
  {
    path: '/forgot-password',
    name: 'forgot-password',
    component: Forgotpassword
  },
  {
    path: '/lock-screen',
    name: 'lock-screen',
    component: Lockscreen
  },
  {
    path: '/accordions',
    name: 'accordions',
    component: accordions
  },
  {
    path: '/alerts',
    name: 'alerts',
    component: alerts
  }, 
  {
    path: '/avatar',
    name: 'avatar',
    component: avatar
  },
  {
    path: '/badges',
    name: 'badges',
    component: badges
  },
  {
    path: '/buttongroup',
    name: 'buttongroup',
    component: buttongroup
  },
  {
    path: '/buttons',
    name: 'buttons',
    component: buttons
  },
  {
    path: '/breadcrumbs',
    name: 'breadcrumbs',
    component: breadcrumbs
  },
  {
    path: '/cards',
    name: 'cards',
    component: cards
  },
  {
    path: '/carousel',
    name: 'carousel',
    component: carousel
  },
  {
    path: '/dropdowns',
    name: 'dropdowns',
    component: dropdowns
  },
  {
    path: '/grid',
    name: 'grid',
    component: grid
  },
  {
    path: '/images',
    name: 'images',
    component: images
  },
  {
    path: '/lightbox',
    name: 'lightbox',
    component: lightbox
  },
  {
    path: '/media',
    name: 'media',
    component: media
  },
  {
    path: '/modal',
    name: 'modal',
    component: modal
  },
  {
    path: '/offcanvas',
    name: 'offcanvas',
    component: offcanvas
  },
  {
    path: '/pagination',
    name: 'pagination',
    component: pagination
  },
  {
    path: '/progress',
    name: 'progress',
    component: progress
  },
  {
    path: '/placeholders',
    name: 'placeholders',
    component: placeholders
  },
  {
    path: '/popover',
    name: 'popover',
    component: popover
  },
  {
    path: '/rangeslider',
    name: 'rangeslider',
    component: rangeslider
  },
  {
    path: '/spinners',
    name: 'spinners',
    component: spinners
  },
  {
    path: '/sweetalerts',
    name: 'sweetalerts',
    component: sweetalerts
  },
  {
    path: '/tab',
    name: 'tab',
    component: tab
  },
  {
    path: '/toastr',
    name: 'toastr',
    component: toastr
  },
  {
    path: '/tooltip',
    name: 'tooltip',
    component: tooltip
  },
  {
    path: '/typography',
    name: 'typography',
    component: typography
  },
  {
    path: '/video',
    name: 'video',
    component: video
  },
  {
    path: '/chart-apex',
    name: 'chart-apex',
    component: chartapex
  },
  {
    path: '/chart-c3',
    name: 'chart-c3',
    component: chartc3
  },
  {
    path: '/chart-flot',
    name: 'chart-flot',
    component: chartflot
  },
  {
    path: '/chart-js',
    name: 'chart-js',
    component: chartjs
  },
  {
    path: '/chart-morris',
    name: 'chart-morris',
    component: chartmorris
  },
  {
    path: '/icon-fontawesome',
    name: 'icon-fontawesome',
    component: iconfontawesome
  },
  {
    path: '/icon-feather',
    name: 'icon-feather',
    component: iconfeather
  },
  {
    path: '/icon-ionic',
    name: 'icon-ionic',
    component: iconionic
  },
  {
    path: '/icon-material',
    name: 'icon-material',
    component: iconmaterial
  },
  {
    path: '/icon-pe7',
    name: 'icon-pe7',
    component: iconpe7
  },
  {
    path: '/icon-simpleline',
    name: 'icon-simpleline',
    component: iconsimpleline
  },
  {
    path: '/icon-themify',
    name: 'icon-themify',
    component: iconthemify
  },
  {
    path: '/icon-weather',
    name: 'icon-weather',
    component: iconweather
  },
  {
    path: '/icon-typicon',
    name: 'icon-typicon',
    component: icontypicon
  },
  {
    path: '/icon-flag',
    name: 'icon-flag',
    component: iconflag
  },
  {
    path: '/clipboard',
    name: 'clipboard',
    component: clipboard
  },
  {
    path: '/ribbon',
    name: 'ribbon',
    component: ribbon
  },
  {
    path: '/drag-drop',
    name: 'drag-drop',
    component: dragdrop
  },
  {
    path: '/rating',
    name: 'rating',
    component: rating
  },
  {
    path: '/text-editor',
    name: 'text-editor',
    component: texteditor
  },
  {
    path: '/counter',
    name: 'counter',
    component: counter
  },
   {
    path: '/scrollbar',
    name: 'scrollbar',
    component: scrollbar
  }, 
  {
    path: '/notification',
    name: 'notification',
    component: notificationelement
  },
  {
    path: '/stickynote',
    name: 'stickynote',
    component: stickynote
  },
  {
    path: '/timeline',
    name: 'timeline',
    component: timeline
  },
  {
    path: '/horizontal-timeline',
    name: 'horizontal-timeline',
    component: horizontaltimeline
  },
  {
    path: '/form-wizard',
    name: 'form-wizard',
    component: formwizard
  },
  {
    path: '/form-basic-inputs',
    name: 'form-basic-inputs',
    component: Formbasicinput
  },
  {
    path: '/form-input-groups',
    name: 'form-input-groups',
    component: Forminput
  },
  {
    path: '/form-horizontal',
    name: 'form-horizontal',
    component: Horizontal
  },
  {
    path: '/form-mask',
    name: 'form-mask',
    component: Formmask
  },
  {
    path: '/form-validation',
    name: 'form-validation',
    component: Formvalidation
  },
  {
    path: '/form-select2',
    name: 'form-select2',
    component: Formselect2
  },
  {
    path: '/form-fileupload',
    name: 'form-fileupload',
    component: Formfileupload
  },
  {
    path: '/form-vertical',
    name: 'form-vertical',
    component: Formvertical
  },
  {
    path: '/tables-basic',
    name: 'tables-basic',
    component: Basictable
  },
  {
    path: '/data-tables',
    name: 'data-tables',
    component: Datatable
  },
  {
    path: '/settings',
    name: 'settings',
    component: Settingpage
  },
  {
    path: '/preferences',
    name: 'preferences',
    component: Preferences
  },
  {
    path: '/tax-types',
    name: 'tax-types',
    component: taxtypes
  },
  {
    path: '/expense-category',
    name: 'expense-category',
    component: expensecategory
  },
  {
    path: '/notifications',
    name: 'notifications',
    component: settingsnotifications
  },
  {
    path: '/change-password',
    name: 'change-password',
    component: changepassword
  },
  {
    path: '/delete-account',
    name: 'delete-account',
    component: deleteaccount
  },
  {
    path: '/profile',
    name: 'profile',
    component: Profile
  },
  {
    path: '/blank-page',
    name: 'blank-page',
    component: BlankPage
  },
  {
    path: '/error-404',
    name: 'error-404',
    component: Error404
  },
  {
    path: '/error-500',
    name: 'error-500',
    component: Error500
  },
  {
    path: '/maps-vector',
    name: 'maps-vector',
    component: Vector
  },
  {
    path: '/tickets',
    name: 'tickets',
    component: Tickets
  },
  {
    path: '/tickets-list-pending',
    name: 'tickets-list-pending',
    component: Ticketslistpending
  },
  {
    path: '/tickets-list-overdue',
    name: 'tickets-list-overdue',
    component: Ticketslistoverdue
  },
  {
    path: '/tickets-list-draft',
    name: 'tickets-list-draft',
    component: Ticketslistdraft
  },
  {
    path: '/tickets-list-recurring',
    name: 'tickets-list-recurring',
    component: Ticketslistrecurring
  },
  {
    path: '/tickets-list-cancelled',
    name: 'tickets-list-cancelled',
    component: Ticketslistcancelled
  },
  {
    path: '/tickets-list',
    name: 'tickets-list',
    component: Ticketslist
  },
  {
    path: '/tickets-pending',
    name: 'tickets-pending',
    component: Ticketspending
  },
  {
    path: '/tickets-overdue',
    name: 'tickets-overdue',
    component: Ticketsoverdue
  },
  {
    path: '/tickets-draft',
    name: 'tickets-draft',
    component: Ticketsdraft
  },
  {
    path: '/tickets-recurring',
    name: 'tickets-recurring',
    component: Ticketsrecurring
  },
  {
    path: '/tickets-cancelled',
    name: 'tickets-cancelled',
    component: Ticketscancelled
  },
  {
    path: '/ticket-details',
    name: 'ticket-details',
    component: Ticketdetails
  },
  {
    path: '/tickets-kanban',
    name: 'tickets-kanban',
    component: Ticketkanban
  },
  {
    path: '/contact-messages',
    name: 'contact-messages',
    component: Contactmessages
  },
  {
    path: '/add-page',
    name: 'add-page',
    component: Addpage
  },
  {
    path: '/pages',
    name: 'pages',
    component: Pages
  },
  {
    path: '/add-blog',
    name: 'add-blog',
    component: addblog
  },
  {
    path: '/all-blog',
    name: 'all-blog',
    component: Allblogs
  },
  {
    path: '/inactive-blog',
    name: 'inactive-blog',
    component: Inactiveblogs
  },
  {
    path: '/categories',
    name: 'categories',
    component: blogcategories
  },
  {
    path: '/add-categories',
    name: 'add-categories',
    component: Addblogcategories
  },
  {
    path: '/blog-comments',
    name: 'blog-comments',
    component: blogcomments
  },
  {
    path: '/countries',
    name: 'countries',
    component: Countries
  },
  {
    path: '/states',
    name: 'states',
    component: States
  },
  {
    path: '/cities',
    name: 'cities',
    component: Cities
  },
  {
    path: '/testimonials',
    name: 'testimonials',
    component: Testimonials
  },
  {
    path: '/add-testimonials',
    name: 'add-testimonials',
    component: Addtestimonials
  },
  {
    path: '/edit-testimonials',
    name: 'edit-testimonials',
    component: Edittestimonials
  },
  {
    path: '/faq',
    name: 'faq',
    component: Faq
  },
  {
    path: '/membership-plans',
    name: 'membership-plans',
    component: Membershipplans
  },
  {
    path: '/add-membership',
    name: 'add-membership',
    component: Addmembership
  },
  {
    path: '/membership-addons',
    name: 'membership-addons',
    component: Membershipaddons
  },
  {
    path: '/subscribers',
    name: 'subscribers',
    component: Subscribers
  },
  {
    path: '/transactions',
    name: 'transactions',
    component: Transactions
  },
  {
    path: '/add-user',
    name: 'add-user',
    component: Adduser
  },
  {
    path: '/users',
    name: 'users',
    component: Users
  },
  {
    path: '/edit-user',
    name: 'edit-user',
    component: Edituser
  },
  {
    path: '/roles-permission',
    name: 'roles-permission',
    component: Rolespermission
  },
  {
    path: '/permission',
    name: 'permission',
    component: permission
  },
  {
    path: '/delete-account-request',
    name: 'delete-account-request',
    component: Deleteaccountrequest
  },
  {
    path: '/quotations',
    name: 'quotations',
    component: Quotations
  },
  {
    path: '/edit-quotations',
    name: 'edit-quotations',
    component: Editquotations
  },
  {
    path: '/add-quotations',
    name: 'add-quotations',
    component: Addquotations
  },
  {
    path: '/add-customer',
    name: 'add-customer',
    component: Addcustomer
  },
  {
    path: '/add-products',
    name: 'add-products',
    component: Addproducts
  },
  {
    path: '/payment-summary',
    name: 'payment-summary',
    component: Paymentsummary
  },
  {
    path: '/delivery-challans',
    name: 'delivery-challans',
    component: Deliverychallans
  },
  {
    path: '/add-delivery-challans',
    name: 'add-delivery-challans',
    component: Adddeliverychallans
  },
  {
    path: '/edit-delivery-challans',
    name: 'edit-delivery-challans',
    component: Editdeliverychallans
  },
  {
    path: '/expenses',
    name: 'expenses',
    component: Expenses
  },
  {
    path: '/payments',
    name: 'payments',
    component: Payments
  },
  {
    path: '/add-expenses',
    name: 'add-expenses',
    component: Addexpenses
  },
  {
    path: '/edit-expenses',
    name: 'edit-expenses',
    component: Editexpenses
  },
  {
    path: '/add-payments',
    name: 'add-payments',
    component: AddPayments
  },
  {
    path: '/purchases',
    name: 'purchases',
    component: Purchases
  },
  {
    path: '/add-purchases',
    name: 'add-purchases',
    component: Addpurchases
  },
  {
    path: '/edit-purchases',
    name: 'edit-purchases',
    component: Editpurchases
  },
  {
    path: '/purchase-orders',
    name: 'purchase-orders',
    component: Purchaseorders
  },
  {
    path: '/debit-notes',
    name: 'debit-notes',
    component: Debitnotes
  },
  {
    path: '/purchases-details',
    name: 'purchases-details',
    component: Purchasesdetails
  },
  {
    path: '/invoices',
    name: 'invoices',
    component: Invoices
  },
  {
    path: '/invoices-paid',
    name: 'invoices-paid',
    component: Invoicespaid
  },
  {
    path: '/invoices-overdue',
    name: 'invoices-overdue',
    component: Invoicesoverdue
  },
  {
    path: '/invoices-draft',
    name: 'invoices-draft',
    component: Invoicesdraft
  },
  {
    path: '/invoices-recurring',
    name: 'invoices-recurring',
    component: Invoicesrecurring
  },
  {
    path: '/invoices-cancelled',
    name: 'invoices-cancelled',
    component: Invoicescancelled
  },
  {
    path: '/add-invoice',
    name: 'add-invoice',
    component: Addinvoice
  },
  {
    path: '/edit-invoice',
    name: 'edit-invoice',
    component: Editinvoice
  },
  {
    path: '/invoice-details',
    name: 'invoice-details',
    component: Invoicedetails
  },
  {
    path: '/invoice-template',
    name: 'invoice-template',
    component: Invoicetemplate
  },
  {
    path: '/general-invoice-1',
    name: 'general-invoice-1',
    component: Generalinvoice1
  },
  {
    path: '/general-invoice-2',
    name: 'general-invoice-2',
    component: Generalinvoice2
  },
  {
    path: '/general-invoice-3',
    name: 'general-invoice-3',
    component: Generalinvoice3
  },
  {
    path: '/general-invoice-4',
    name: 'general-invoice-4',
    component: Generalinvoice4
  },
  {
    path: '/general-invoice-5',
    name: 'general-invoice-5',
    component: Generalinvoice5
  },
  {
    path: '/bus-ticket',
    name: 'bus-ticket',
    component: Busticket
  },
  {
    path: '/car-booking-invoice',
    name: 'car-booking-invoice',
    component: Carbookinginvoice
  },
  {
    path: '/coffee-shop',
    name: 'coffee-shop',
    component: Coffeeshop
  },
  {
    path: '/domain-hosting',
    name: 'domain-hosting',
    component: Domainhosting
  },
  {
    path: '/ecommerce',
    name: 'ecommerce',
    component: Ecommerce
  },
  {
    path: '/fitness-center',
    name: 'fitness-center',
    component: Fitnesscenter
  },
  {
    path: '/train-ticket-booking',
    name: 'train-ticket-booking',
    component: Trainticketbooking
  },
  {
    path: '/flight-booking-invoice',
    name: 'flight-booking-invoice',
    component: Flightbookinginvoice
  },
  {
    path: '/hotel-booking',
    name: 'hotel-booking',
    component: Hotelbooking
  },
  {
    path: '/internet-billing',
    name: 'internet-billing',
    component: Internetbilling
  },
  {
    path: '/medical',
    name: 'medical',
    component: medical
  },
  {
    path: '/moneyexchange',
    name: 'moneyexchange',
    component: moneyexchange
  },
  {
    path: '/movie-ticket-booking',
    name: 'movie-ticket-booking',
    component: Movieticketbooking
  },
  {
    path: '/restuarent-billing',
    name: 'restuarent-billing',
    component: Restuarentbilling
  },
  {
    path: '/student-billing',
    name: 'student-billing',
    component: Studentbilling
  },
  {
    path: '/cashreceipt-1',
    name: 'cashreceipt-1',
    component: Cashreceipt1
  },
  {
    path: '/cashreceipt-2',
    name: 'cashreceipt-2',
    component: Cashreceipt2
  },
  {
    path: '/cashreceipt-3',
    name: 'cashreceipt-3',
    component: Cashreceipt3
  },
  {
    path: '/cashreceipt-4',
    name: 'cashreceipt-4',
    component: Cashreceipt4
  },
  {
    path: '/recurring-invoices',
    name: 'recurring-invoices',
    component: Recurringinvoices
  },
  {
    path: '/recurring-paid',
    name: 'recurring-paid',
    component: Recurringpaid
  },
  {
    path: '/recurring-pending',
    name: 'recurring-pending',
    component: Recurringpending
  },
  {
    path: '/recurring-overdue',
    name: 'recurring-overdue',
    component: Recurringoverdue
  },
  {
    path: '/recurring-draft',
    name: 'recurring-draft',
    component: Recurringdraft
  },
  {
    path: '/recurring',
    name: 'recurring',
    component: Recurring
  },
  {
    path: '/recurring-cancelled',
    name: 'recurring-cancelled',
    component: Recurringcancelled
  },
  {
    path: '/credit-notes',
    name: 'credit-notes',
    component: Creditnotes
  },
  {
    path: '/credit-notes-pending',
    name: 'credit-notes-pending',
    component: Creditnotespending
  },
  {
    path: '/credit-notes-overdue',
    name: 'credit-notes-overdue',
    component: Creditnotesoverdue
  },
  {
    path: '/credit-notes-draft',
    name: 'credit-notes-draft',
    component: Creditnotesdraft
  },
  {
    path: '/credit-notes-recurring',
    name: 'credit-notes-recurring',
    component: Creditnotesrecurring
  },
  {
    path: '/credit-notes-cancelled',
    name: 'credit-notes-cancelled',
    component: Creditnotescancelled
  },
  {
    path: '/add-credit-notes',
    name: 'add-credit-notes',
    component: Addcreditnotes
  },
  {
    path: '/edit-credit-notes',
    name: 'edit-credit-notes',
    component: Editcreditnotes
  },
  {
    path: '/credit-notes-details',
    name: 'credit-notes-details',
    component: Creditnotesdetails
  },
  {
    path: '/inventory',
    name: 'inventory',
    component: Inventory
  },
  {
    path: '/product-list',
    name: 'product-list',
    component: ProductList
  },
  {
    path: '/category',
    name: 'category',
    component: Category
  },
  {
    path: '/units',
    name: 'units',
    component: Units
  },
  {
    path: '/customers',
    name: 'customers',
    component: Customers
  },
  {
    path: '/add-customer',
    name: 'add-customer',
    component: AddCustomer
  },
  {
    path: '/edit-customer',
    name: 'edit-customer',
    component: EditCustomer
  },
  {
    path: '/customer-details',
    name: 'customer-details',
    component: CustomerDetails
  },
  {
    path: '/active-customers',
    name: 'active-customers',
    component: ActiveCustomers
  },
  {
    path: '/deactive-customers',
    name: 'deactive-customers',
    component: DeactiveCustomers
  },
  {
    path: '/vendors',
    name: 'vendors',
    component: Vendors
  },
  {
    path: '/ledger',
    name: 'ledger',
    component: Ledger
  },
  {
    path: '/customer-details-cancel',
    name: 'customer-details-cancel',
    component: CustomerDetailsCancel
  },
  {
    path: '/customer-details-paid',
    name: 'customer-details-paid',
    component: CustomerDetailsPaid
  },
  {
    path: '/chat',
    name: 'chat',
    component: Chat
  },
  {
    path: '/email',
    name: 'email',
    component: Email
  },
  {
    path: '/calendar',
    name: 'calendar',
    component: Calendar
  },
  {
    path: '/add-vendor',
    name: 'add-vendor',
    component: AddVendor
  },
  {
    path: '/add-units',
    name: 'add-units',
    component: AddUnits
  },
  {
    path: '/contact-details',
    name: 'contact-details',
    component: ContactDetails
  },
  {
    path: '/edit-products',
    name: 'edit-products',
    component: EditProducts
  },
  {
    path: '/member-pages-list',
    name: 'member-pages-list',
    component: MemberPagesList
  },

  ];
export const router = createRouter({
    history: createWebHistory('/vuejs/template-rtl/'),
    linkActiveClass: 'active',
    routes,
});

