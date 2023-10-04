import { createApp } from 'vue';
import { router } from './router';
import App from "./App.vue";
import {BootstrapVue3, BToastPlugin} from 'bootstrap-vue-3'
import Antd from 'ant-design-vue';
import 'ant-design-vue/dist/antd.css';
import FlagIcon from 'vue-flag-icon';
import VueSelect from 'vue3-select2-component'
import DatePicker from 'vue3-datepicker'
import Vue3Autocounter from 'vue3-autocounter';
import Toaster from '@meforma/vue-toaster'
import SummernoteEditor from 'vue3-summernote-editor';
import VueSweetalert2 from 'vue-sweetalert2' 
import 'sweetalert2/dist/sweetalert2.min.css';
import StarRating from 'vue-star-rating'
import VueFeather from 'vue-feather';
import VueApexCharts from "vue3-apexcharts"; 
import VueEasyLightbox from "vue-easy-lightbox";
import CoolLightBox from "vue-cool-lightbox";
import "vue-cool-lightbox/dist/vue-cool-lightbox.min.css";
import VueFormWizard from "vue3-form-wizard";
import "vue-form-wizard/dist/vue-form-wizard.min.css";
import VueTelInput from 'vue3-tel-input'
import 'vue3-tel-input/dist/vue3-tel-input.css'

/*********Header component**********/
import Header from './views/layouts/header.vue'
import HeaderThree from './views/layouts/header-three.vue'
import HeaderFour from './views/layouts/header-four.vue'
import HeaderFive from './views/layouts/header-five.vue'
import Mobilemenu from './components/mobilemenu.vue'
import HeaderFlag from './components/flagheader.vue'
import Notification from './components/notification.vue'
import Search from './components/search.vue'
import Toggle from './components/toggle.vue'
import User from './components/user.vue'

/*********Sidebar component**********/
import Sidebar from './views/layouts/sidebar.vue'
import Sidebarheader from './components/sidebar-header.vue'
import Sidebarfour from './views/layouts/sidebar-four.vue'
import SidebarTwo from './views/layouts/sidebar-two.vue'

/*********Pageheader component**********/
import breadcrumb from './components/breadcrumb/breadcrumb.vue'
import pageheader from './components/breadcrumb/pageheader.vue'
import pageticketheader from './components/breadcrumb/pageticketheader.vue'
import Ticketheader from './components/breadcrumb/ticketheader.vue'
import Supportheader from './components/breadcrumb/supportheader.vue'
import blogheader from './components/breadcrumb/blogheader.vue'
import locationheader from './components/breadcrumb/locationheader.vue'
import InventoryHeader from './components/breadcrumb/inventoryheader.vue'
import ProductListHeader from './components/breadcrumb/productlistheader.vue'
import CategoryHeader from './components/breadcrumb/categoryheader.vue'
import UnitsHeader from './components/breadcrumb/unitsheader.vue'
import CustomerHeader from './components/breadcrumb/customerheader.vue'
import DeactiveCustomerHeader from './components/breadcrumb/deactivecustomerheader.vue'
import VendorsHeader from './components/breadcrumb/vendorsheader.vue'

/************Page Components********************/
import Inputsize from './views/pages/uiinterface/form/formbasic/Inputsize.vue'
import Addressform from './views/pages/uiinterface/form/formhorizontal/Addressform'
import Basicform from './views/pages/uiinterface/form/formhorizontal/Basicform'
import Personaldetail from './views/pages/uiinterface/form/formhorizontal/Personaldetail'
import Personalinformation from './views/pages/uiinterface/form/formhorizontal/Personalinformation'
import Contexttable from './views/pages/uiinterface/table/Contexttable'
import Settingsidebar from './views/pages/settings/settingsidebar'
import searchfilter from './views/pages/support/ticket/searchfilter'
import Ticketcard from './views/pages/support/ticket/ticketcard'
import Tickettab from './views/pages/support/ticket/tickettab'
import Ticketstabs from './views/pages/support/ticket/ticketstabs'
import Blog from './views/pages/content/blog/blog'
import Invoicecard from './views/pages/sales/invoicecard'
import Invoicetab from './views/pages/sales/invoicestab'
import RecurringInvoicecard from './views/pages/sales/recurringinvoices/invoice-card'
import RecurringInvoicetab from './views/pages/sales/recurringinvoices/invoice-tab'
import Credittab from './views/pages/sales/creditnotes/credit-tab'

/************profile page *********/
import ProfileTable from './views/pages/pages/profile/ProfileTable.vue'
import ProfileTable1 from './views/pages/pages/profile/ProfileTable1.vue'
import ProfileContent from './views/pages/pages/profile/ProfileContent.vue'
/*********Dashboard**********/
import DashboardPage from './views/pages/dashboard/indexpage.vue'


/*********Modal component**********/
import Ticketmodal from './views/pages/support/ticket/ticketmodal'
import Pagemodal from './views/pages/content/pagemodal'
import Locationmodal from './views/pages/content/location/locationmodal'
import InventoryModel from './views/pages/inventory/inventorymodel.vue'



import 'bootstrap/dist/css/bootstrap.min.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
import '@fortawesome/fontawesome-free/css/fontawesome.min.css';
import '@fortawesome/fontawesome-free/css/all.min.css';
import'./assets/plugins/summernote/dist/summernote-lite.min.css';
import'./assets/plugins/summernote/dist/summernote-lite.min.js';
import 'ionicons-npm/css/ionicons.css';
import 'material-icons/css/material-icons.min.css';
import 'material-icons/css/material-icons.css';
import 'pe7-icon/dist/dist/pe-icon-7-stroke.css';
import 'typicons.font/src/font/typicons.css';
import 'weathericons/css/weather-icons.css'
import '@/assets/css/vue-form-wizard.css';
import '@/assets/css/feather.css';
import '@/assets/css/style.css'; 



import swal from 'sweetalert2';
window.Swal = swal;
const app = createApp(App)
/*********Header component**********/
app.component('layout-header', Header)
app.component('headerthree', HeaderThree)
app.component('headerfour', HeaderFour)
app.component('headerfive', HeaderFive)
app.component('mobilemenu', Mobilemenu);
app.component('flagheader', HeaderFlag);
app.component('notification', Notification);
app.component('search', Search);
app.component('toggle', Toggle);
app.component('user', User);
/*********Sidebar component**********/
app.component('layout-sidebar', Sidebar)
app.component('sidebar-header', Sidebarheader)
app.component('sidebar-four', Sidebarfour)
app.component('sidebar-two', SidebarTwo)

/*********Pageheader component**********/
app.component('breadcrumb', breadcrumb)
app.component('componentheader', pageheader)
app.component('ticketheader', pageticketheader)
app.component('ticketlistheader', Ticketheader)
app.component('supportheader', Supportheader)
app.component('blogheader', blogheader)
app.component('locationheader', locationheader)
app.component('inventoryheader',InventoryHeader)
app.component('productlistheader',ProductListHeader)
app.component('categoryheader',CategoryHeader)
app.component('unitsheader',UnitsHeader)
app.component('customerheader',CustomerHeader)
app.component('deactivecustomerheader',DeactiveCustomerHeader)
app.component('vendorsheader',VendorsHeader)

/************Page Components********************/
app.component('inputsize', Inputsize);
app.component('personaldetail', Personaldetail);
app.component('personalinformation', Personalinformation);
app.component('addressform', Addressform);
app.component('basicform', Basicform);
app.component('contexttable', Contexttable);
app.component('settingsidebar', Settingsidebar);
app.component('filter', searchfilter);
app.component('card', Ticketcard);
app.component('tab', Tickettab);
app.component('tickettab', Ticketstabs);
app.component('blog', Blog);
app.component('invoicecard', Invoicecard);
app.component('invoice-card', RecurringInvoicecard);
app.component('invoice-tab', RecurringInvoicetab);
app.component('credit-tab', Credittab);
app.component('invoicetab', Invoicetab)
/************profile page *********/
app.component('profiletable', ProfileTable);
app.component('profiletable1', ProfileTable1);
app.component('profilecontent', ProfileContent);
/*********Modal component**********/
app.component('ticketmodal', Ticketmodal)
app.component('pagemodal', Pagemodal)
app.component('locationmodal', Locationmodal)
app.component('inventorymodel',InventoryModel)

/*********Dashboard**********/
app.component('indexpage',DashboardPage)

app.component('vue-select', VueSelect);
app.component('datepicker', DatePicker);
app.component('vue3-autocounter', Vue3Autocounter)
app.component(VueFeather.name, VueFeather);
app.component('star-rating', StarRating)
app.component('SummernoteEditor', SummernoteEditor);
app.use(Toaster, {
    position: "top-right",
  });
app.use(CoolLightBox);
app.use(VueSweetalert2)
app.use(VueEasyLightbox);
app.use(VueApexCharts)
app.use(FlagIcon)
.use(VueFormWizard)
.use(Antd)
.use(VueTelInput)
.use(BootstrapVue3)
.use(BToastPlugin)
app.use(router).mount('#app');

