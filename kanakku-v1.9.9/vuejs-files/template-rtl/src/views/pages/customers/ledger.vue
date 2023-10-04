<template>
  <div class="main-wrapper">
    <layout-header></layout-header>
    <layout-sidebar></layout-sidebar>

    <!-- Page Wrapper -->
    <div class="page-wrapper">
      <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
          <div class="content-page-header">
            <h5>Ledger</h5>
            <div class="list-btn">
              <ul class="filter-list">
                <li>
                  <a class="btn btn-filters w-auto popup-toggle"
                    ><span class="me-2"><i class="feather feather-filter"></i></span
                    >Filter
                  </a>
                </li>
                <li>
                  <a class="btn-filters" href="javascript:void(0);"
                    ><span><i class="feather feather-grid"></i></span>
                  </a>
                </li>
                <li>
                  <a class="active btn-filters" href="javascript:void(0);"
                    ><span><i class="feather feather-list"></i></span>
                  </a>
                </li>
                <li>
                  <a
                    class="btn btn-primary"
                    href="javascript:;"
                    data-bs-toggle="modal"
                    data-bs-target="#add_ledger"
                    ><i class="fa fa-plus-circle me-2" aria-hidden="true"></i>Create
                    Ledger</a
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- /Page Header -->

        <!-- Table -->
        <div class="row">
          <div class="col-sm-12">
            <div class="card-table">
              <div class="card-body">
                <div class="table-responsive">
                  <a-table
                    class="stripped table-hover"
                    :columns="columns"
                    :data-source="data"
                    @change="onChange"
                  >
                    <template #bodyCell="{ column, record }">
                      <template v-if="column.key === 'Name'">
                        <h2 class="table-avatar">
                          <router-link to="/profile" class="avatar avatar-sm me-2"
                            ><img
                              class="avatar-img rounded-circle"
                              :src="require(`@/assets/img/profiles/${record.Image}`)"
                              alt="User Image"
                          /></router-link>
                          <router-link to="/profile"
                            >{{ record.Name
                            }}<span>{{ record.Number }}</span></router-link
                          >
                        </h2>
                      </template>
                      <template v-else-if="column.key === 'Mode'">
                        <div>
                          <span :class="record.Class">{{ record.Mode }}</span>
                        </div>
                      </template>
                      <template v-else-if="column.key === 'Action'">
                        <div class="text-start">
                          <div class="dropdown dropdown-action">
                            <a
                              href="javascript:;"
                              class="btn-action-icon"
                              data-bs-toggle="dropdown"
                              aria-expanded="false"
                              ><i class="fas fa-ellipsis-v"></i
                            ></a>
                            <div class="dropdown-menu dropdown-menu-right">
                              <ul>
                                <li>
                                  <a
                                    class="dropdown-item"
                                    href="javascript:void(0);"
                                    data-bs-toggle="modal"
                                    data-bs-target="#edit_ledger"
                                    ><i class="far fa-edit me-2"></i>Edit</a
                                  >
                                </li>
                                <li>
                                  <a
                                    class="dropdown-item"
                                    href="javascript:void(0);"
                                    data-bs-toggle="modal"
                                    data-bs-target="#delete_modal"
                                    ><i class="far fa-trash-alt me-2"></i>Delete</a
                                  >
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </template>
                    </template>
                  </a-table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /Table -->
      </div>
    </div>
    <!-- /Page Wrapper -->
  </div>

  <!-- Add Asset -->
  <div class="toggle-sidebar">
    <div class="sidebar-layout-filter">
      <div class="sidebar-header">
        <h5>Filter</h5>
        <a href="javascript:;" class="sidebar-closes"
          ><i class="fa-regular fa-circle-xmark"></i
        ></a>
      </div>
      <div class="sidebar-body">
        <b-form action="#" autocomplete="off">
          <!-- Customer -->
          <div class="accordion" id="accordionMain1">
            <div class="card-header-new" id="headingOne">
              <h6 class="filter-title">
                <a
                  href="javascript:void(0);"
                  class="w-100"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseOne"
                  aria-expanded="true"
                  aria-controls="collapseOne"
                >
                  Customer
                  <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                </a>
              </h6>
            </div>

            <div
              id="collapseOne"
              class="collapse show"
              aria-labelledby="headingOne"
              data-bs-parent="#accordionExample1"
            >
              <div class="card-body-chat">
                <div class="row">
                  <div class="col-md-12">
                    <div id="checkBoxes1">
                      <div class="form-custom">
                        <b-form-input
                          type="text"
                          class="form-control"
                          id="member_search1"
                          placeholder="Search here"
                        />
                        <span><img src="@/assets/img/icons/search.svg" alt="img" /></span>
                      </div>
                      <div class="selectBox-cont">
                        <label class="custom_check w-100">
                          <input type="checkbox" name="username" />
                          <span class="checkmark"></span> Brian Johnson
                        </label>
                        <label class="custom_check w-100">
                          <input type="checkbox" name="username" />
                          <span class="checkmark"></span> Russell Copeland
                        </label>
                        <label class="custom_check w-100">
                          <input type="checkbox" name="username" />
                          <span class="checkmark"></span> Greg Lynch
                        </label>
                        <label class="custom_check w-100">
                          <input type="checkbox" name="username" />
                          <span class="checkmark"></span> John Blair
                        </label>
                        <!-- View All -->
                        <div class="view-content">
                          <div class="viewall-One">
                            <label class="custom_check w-100">
                              <input type="checkbox" name="username" />
                              <span class="checkmark"></span> Barbara Moore
                            </label>
                            <label class="custom_check w-100">
                              <input type="checkbox" name="username" />
                              <span class="checkmark"></span> Hendry Evan
                            </label>
                            <label class="custom_check w-100">
                              <input type="checkbox" name="username" />
                              <span class="checkmark"></span> Richard Miles
                            </label>
                          </div>
                          <div class="view-all">
                            <a href="javascript:void(0);" class="viewall-button-One"
                              ><span class="me-2">View All</span
                              ><span><i class="fa fa-circle-chevron-down"></i></span
                            ></a>
                          </div>
                        </div>
                        <!-- /View All -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /Customer -->

          <!-- Select Date -->
          <div class="accordion" id="accordionMain2">
            <div class="card-header-new" id="headingTwo">
              <h6 class="filter-title">
                <a
                  href="javascript:void(0);"
                  class="w-100 collapsed"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseTwo"
                  aria-expanded="true"
                  aria-controls="collapseTwo"
                >
                  Select Date
                  <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                </a>
              </h6>
            </div>

            <div
              id="collapseTwo"
              class="collapse"
              aria-labelledby="headingTwo"
              data-bs-parent="#accordionExample2"
            >
              <div class="card-body-chat">
                <div class="form-group">
                  <label class="form-control-label">From</label>
                  <div class="cal-icon">
                    <datepicker
                      v-model="startdate"
                      class="picker"
                      :editable="true"
                      :clearable="false"
                    />
                  </div>
                </div>
                <div class="form-group">
                  <label class="form-control-label">To</label>
                  <div class="cal-icon">
                    <datepicker
                      v-model="startdate"
                      class="picker"
                      :editable="true"
                      :clearable="false"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /Select Date -->

          <!-- By Status -->
          <div class="accordion" id="accordionMain3">
            <div class="card-header-new" id="headingThree">
              <h6 class="filter-title">
                <a
                  href="javascript:void(0);"
                  class="w-100 collapsed"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseThree"
                  aria-expanded="true"
                  aria-controls="collapseThree"
                >
                  By Status
                  <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                </a>
              </h6>
            </div>

            <div
              id="collapseThree"
              class="collapse"
              aria-labelledby="headingThree"
              data-bs-parent="#accordionExample3"
            >
              <div class="card-body-chat">
                <div id="checkBoxes2">
                  <div class="form-custom">
                    <input
                      type="text"
                      class="form-control"
                      id="member_search2"
                      placeholder="Search here"
                    />
                    <span><img src="@/assets/img/icons/search.svg" alt="img" /></span>
                  </div>
                  <div class="selectBox-cont">
                    <label class="custom_check w-100">
                      <input type="checkbox" name="bystatus" />
                      <span class="checkmark"></span> All Invoices
                    </label>
                    <label class="custom_check w-100">
                      <input type="checkbox" name="bystatus" />
                      <span class="checkmark"></span> Paid
                    </label>
                    <label class="custom_check w-100">
                      <input type="checkbox" name="bystatus" />
                      <span class="checkmark"></span> Overdue
                    </label>
                    <label class="custom_check w-100">
                      <input type="checkbox" name="bystatus" />
                      <span class="checkmark"></span> Draft
                    </label>
                    <label class="custom_check w-100">
                      <input type="checkbox" name="bystatus" />
                      <span class="checkmark"></span> Recurring
                    </label>
                    <label class="custom_check w-100">
                      <input type="checkbox" name="bystatus" />
                      <span class="checkmark"></span> Cancelled
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /By Status -->

          <!-- Category -->
          <div class="accordion accordion-last" id="accordionMain4">
            <div class="card-header-new" id="headingFour">
              <h6 class="filter-title">
                <a
                  href="javascript:void(0);"
                  class="w-100 collapsed"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseFour"
                  aria-expanded="true"
                  aria-controls="collapseFour"
                >
                  Category
                  <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                </a>
              </h6>
            </div>

            <div
              id="collapseFour"
              class="collapse"
              aria-labelledby="headingFour"
              data-bs-parent="#accordionExample4"
            >
              <div class="card-body-chat">
                <div id="checkBoxes3">
                  <div class="selectBox-cont">
                    <label class="custom_check w-100">
                      <input type="checkbox" name="category" />
                      <span class="checkmark"></span> Advertising
                    </label>
                    <label class="custom_check w-100">
                      <input type="checkbox" name="category" />
                      <span class="checkmark"></span> Food
                    </label>
                    <label class="custom_check w-100">
                      <input type="checkbox" name="category" />
                      <span class="checkmark"></span> Repairs
                    </label>
                    <label class="custom_check w-100">
                      <input type="checkbox" name="category" />
                      <span class="checkmark"></span> Software
                    </label>
                    <!-- View All -->
                    <div class="view-content">
                      <div class="viewall-Two">
                        <label class="custom_check w-100">
                          <input type="checkbox" name="username" />
                          <span class="checkmark"></span> Stationary
                        </label>
                        <label class="custom_check w-100">
                          <input type="checkbox" name="username" />
                          <span class="checkmark"></span> Medical
                        </label>
                        <label class="custom_check w-100">
                          <input type="checkbox" name="username" />
                          <span class="checkmark"></span> Designing
                        </label>
                      </div>
                      <div class="view-all">
                        <a href="javascript:void(0);" class="viewall-button-Two"
                          ><span class="me-2">View All</span
                          ><span><i class="fa fa-circle-chevron-down"></i></span
                        ></a>
                      </div>
                    </div>
                    <!-- /View All -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /Category -->

          <button
            type="submit"
            class="d-inline-flex align-items-center justify-content-center btn w-100 btn-primary"
          >
            <span
              ><img
                src="@/assets/img/icons/chart.svg"
                class="me-2"
                alt="Generate report" /></span
            >Generate report
          </button>
        </b-form>
      </div>
    </div>
  </div>
  <!--/Add Asset -->

  <!-- Add Ledger Modal -->
  <div class="modal custom-modal fade" id="add_ledger" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content">
        <div class="modal-header border-0 pb-0">
          <div class="form-header modal-header-title text-start mb-0">
            <h4 class="mb-0">Add Ledger</h4>
          </div>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span class="align-center" aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter Name" />
              </div>
            </div>
            <div class="col-lg-12 col-md-12">
              <div class="form-group">
                <label>Date</label>
                <div class="cal-icon cal-icon-info">
                  <datepicker
                    v-model="startdate"
                    class="picker"
                    :editable="true"
                    :clearable="false"
                  />
                </div>
              </div>
            </div>
            <div class="col-lg-12 col-md-12">
              <div class="form-group">
                <label>Reference</label>
                <input
                  type="text"
                  class="form-control"
                  placeholder="Enter Reference Number"
                />
              </div>
            </div>
            <div class="col-lg-12 col-md-12">
              <div class="form-group d-inline-flex align-center mb-0">
                <label class="me-5 mb-0">Mode</label>
                <div>
                  <label class="custom_radio me-3 mb-0">
                    <input type="radio" name="payment" checked />
                    <span class="checkmark"></span> Debit
                  </label>
                  <label class="custom_radio mb-0">
                    <input type="radio" name="payment" />
                    <span class="checkmark"></span> Credit
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a
            href="javascript:;"
            data-bs-dismiss="modal"
            class="btn btn-primary paid-cancel-btn me-2"
            >Cancel</a
          >
          <a data-bs-dismiss="modal" class="btn btn-primary paid-continue-btn">Submit</a>
        </div>
      </div>
    </div>
  </div>
  <!-- /Add Ledger Modal -->

  <!-- Add Ledger Modal -->
  <div class="modal custom-modal fade" id="edit_ledger" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content">
        <div class="modal-header border-0 pb-0">
          <div class="form-header modal-header-title text-start mb-0">
            <h4 class="mb-0">Edit Ledger</h4>
          </div>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span class="align-center" aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="form-group">
                <label>Name</label>
                <input
                  type="text"
                  class="form-control"
                  value="John Smith"
                  placeholder="Enter Name"
                />
              </div>
            </div>
            <div class="col-lg-12 col-md-12">
              <div class="form-group">
                <label>Date</label>
                <input
                  type="text"
                  class="form-control"
                  value="19 Dec 2022"
                  placeholder="Select Date"
                />
              </div>
            </div>
            <div class="col-lg-12 col-md-12">
              <div class="form-group">
                <label>Reference</label>
                <input
                  type="text"
                  class="form-control"
                  value="25689825"
                  placeholder="Enter Reference Number"
                />
              </div>
            </div>
            <div class="col-lg-12 col-md-12">
              <div class="form-group mb-0">
                <label>Mode</label>
                <input
                  type="text"
                  class="form-control"
                  value="Credit"
                  placeholder="Enter Reference Number"
                />
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a
            href="javascript:;"
            data-bs-dismiss="modal"
            class="btn btn-primary paid-cancel-btn me-2"
            >Cancel</a
          >
          <a
            href="javascript:;"
            data-bs-dismiss="modal"
            class="btn btn-primary paid-continue-btn"
            >Update</a
          >
        </div>
      </div>
    </div>
  </div>
  <!-- /Add Ledger Modal -->

  <!-- Delete Items Modal -->
  <div class="modal custom-modal fade" id="delete_modal" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content">
        <div class="modal-body">
          <div class="form-header">
            <h3>Delete Ledger</h3>
            <p>Are you sure want to delete?</p>
          </div>
          <div class="modal-btn delete-action">
            <div class="row">
              <div class="col-6">
                <button
                  type="reset"
                  data-bs-dismiss="modal"
                  class="w-100 btn btn-primary paid-continue-btn"
                >
                  Delete
                </button>
              </div>
              <div class="col-6">
                <button
                  type="submit"
                  data-bs-dismiss="modal"
                  class="w-100 btn btn-primary paid-cancel-btn"
                >
                  Cancel
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Delete Items Modal -->
</template>

<script>
const columns = [
  {
    title: "Name",
    dataIndex: "Name",
    key: "Name",
    sorter: {
      compare: (a, b) => {
        a = a.Name.toLowerCase();
        b = b.Name.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Reference",
    dataIndex: "Reference",
    sorter: {
      compare: (a, b) => {
        a = a.Reference.toLowerCase();
        b = b.Reference.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Created",
    dataIndex: "Created",
    sorter: {
      compare: (a, b) => {
        a = a.Created.toLowerCase();
        b = b.Created.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Mode",
    dataIndex: "Mode",
    key: "Mode",
    sorter: {
      compare: (a, b) => {
        a = a.Mode.toLowerCase();
        b = b.Mode.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Action",
    key: "Action",
    sorter: true,
  },
];
const data = [
  {
    Image: "avatar-02.jpg",
    Name: "John Smith",
    Number: "+1 843-443-3282",
    Reference: "#25689825",
    Created: "19 Dec 2022, 06:12 PM",
    Class: "text-success-light",
    Mode: "Credit",
  },
  {
    Image: "avatar-03.jpg",
    Name: "Johnny",
    Number: "+1 917-409-0861",
    Reference: "#25689826",
    Created: "19 Dec 2022, 06:12 PM",
    Class: "text-danger-light",
    Mode: "Debit",
  },
  {
    Image: "avatar-04.jpg",
    Name: "Robert",
    Number: "+1 956-623-2880",
    Reference: "#25689827",
    Created: "19 Dec 2022, 06:12 PM",
    Class: "text-success-light",
    Mode: "Credit",
  },
  {
    Image: "avatar-05.jpg",
    Name: "Sharonda",
    Number: "+1 956-623-2881",
    Reference: "#25689828",
    Created: "19 Dec 2022, 06:12 PM",
    Class: "text-success-light",
    Mode: "Debit",
  },
  {
    Image: "avatar-06.jpg",
    Name: "Randall",
    Number: " +1 956-623-2882",
    Reference: "#25689829",
    Created: "19 Dec 2022, 06:12 PM",
    Class: "text-danger-light",
    Mode: "Credit",
  },
  {
    Image: "avatar-07.jpg",
    Name: "Pricilla",
    Number: "+1 956-623-2883",
    Reference: "#25689830",
    Created: "19 Dec 2022, 06:12 PM",
    Class: "text-success-light",
    Mode: "Debit",
  },
  {
    Image: "avatar-02.jpg",
    Name: "Johnny",
    Number: "+1 956-623-2884",
    Reference: "#25689831",
    Created: "19 Dec 2022, 06:12 PM",
    Class: "text-danger-light",
    Mode: "Credit",
  },
  {
    Image: "avatar-03.jpg",
    Name: "Robert ",
    Number: "+1 956-623-2885",
    Reference: "#25689832",
    Created: "19 Dec 2022, 06:12 PM",
    Class: "text-success-light",
    Mode: "Debit",
  },
  {
    Image: "avatar-04.jpg",
    Name: "Pricilla Smith",
    Number: "+1 956-623-2886",
    Reference: "#25689833",
    Created: "19 Dec 2022, 06:12 PM",
    Class: "text-danger-light",
    Mode: "Credit",
  },
];

import { ref } from "vue";
const currentDate = ref(new Date());
export default {
  data() {
    return {
      startdate: currentDate,
      columns,
      data,
    };
  },
};
</script>
