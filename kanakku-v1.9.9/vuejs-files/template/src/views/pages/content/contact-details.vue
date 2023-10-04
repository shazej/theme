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
            <h5>Contact Details</h5>
          </div>
        </div>

        <ul class="contact-details">
          <li>
            <div class="d-flex align-items-center">
              <span class="me-3"
                ><img
                  class="rounded-circle"
                  width="38"
                  height="38"
                  src="@/assets/img/profiles/avatar-02.jpg"
                  alt="User Image"
              /></span>
              <div>
                <p>John Smith</p>
                <span>john@example.com</span>
              </div>
            </div>
          </li>
          <li>
            <div class="d-flex align-items-center">
              <span
                class="contact-square d-flex align-items-center justify-content-center rounded-circle"
              >
                <i class="feather feather-mail"></i>
              </span>
              <div>
                <p>Email</p>
                <span>john@example.com</span>
              </div>
            </div>
          </li>
          <li>
            <div class="d-flex align-items-center">
              <span
                class="contact-square d-flex align-items-center justify-content-center rounded-circle"
              >
                <i class="feather feather-phone-call"></i>
              </span>
              <div>
                <p>Phone</p>
                <span>+1 347-679-8275</span>
              </div>
            </div>
          </li>
          <li>
            <div class="d-flex align-items-center">
              <span
                class="contact-square d-flex align-items-center justify-content-center rounded-circle"
              >
                <i class="feather feather-message-square"></i>
              </span>
              <div>
                <p class="text-start">Message</p>
                <span>Need this script</span>
              </div>
            </div>
          </li>
          <li>
            <div class="d-flex align-items-center">
              <span
                class="contact-square d-flex align-items-center justify-content-center rounded-circle"
              >
                <i class="feather feather-calendar"></i>
              </span>
              <div>
                <p class="text-start">Date</p>
                <span>28 Sep 2022</span>
              </div>
            </div>
          </li>
          <li>
            <a
              href="javascript:;"
              class="float-xl-end float-lg-start btn btn-primary"
              data-bs-toggle="modal"
              data-bs-target="#contact_reply"
              >Reply</a
            >
          </li>
        </ul>
        <!-- /Page Header -->

        <div class="content-page-header">
          <h6>Customers</h6>
          <div class="list-btn">
            <ul class="filter-list">
              <li>
                <a class="btn btn-filters w-auto popup-toggle"
                  ><span class="me-2"><i class="feather feather-filter"></i></span>Filter
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
            </ul>
          </div>
        </div>

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
                          <router-link to="/contact-details" class="avatar avatar-sm me-2"
                            ><img
                              class="avatar-img rounded-circle"
                              :src="require(`@/assets/img/profiles/${record.Image}`)"
                              alt="User Image"
                          /></router-link>
                          <router-link to="profile">{{ record.Name }}</router-link>
                        </h2>
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

  <!-- Filter -->
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
                    <div id="checkBoxes">
                      <div class="form-custom">
                        <input
                          type="text"
                          class="form-control"
                          id="member_search"
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
                  class="w-100"
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
                    <b-form-input
                      type="email"
                      class="form-control datetimepicker"
                      placeholder="DD-MM-YYYY"
                    />
                  </div>
                </div>
                <div class="form-group">
                  <label class="form-control-label">To</label>
                  <div class="cal-icon">
                    <b-form-input
                      type="email"
                      class="form-control datetimepicker"
                      placeholder="DD-MM-YYYY"
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
                  class="w-100"
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
                <div id="checkBoxes">
                  <div class="form-custom">
                    <input
                      type="text"
                      class="form-control"
                      id="member_search"
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
            <div class="card-header-new" id="headingThree">
              <h6 class="filter-title">
                <a
                  class="w-100"
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
                <div id="checkBoxes">
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
  <!-- /Filter -->

  <!-- Modal -->
  <div class="modal custom-modal fade" id="contact_reply" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content">
        <div class="modal-header border-0 pb-0">
          <div class="form-header modal-header-title text-start mb-0">
            <h4 class="mb-0">Reply Contact</h4>
          </div>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span class="align-center" aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group mb-0" id="summernote_container">
                <label class="form-control-label">Content</label>
                <textarea
                  class="summernote form-control"
                  placeholder="Type your message"
                ></textarea>
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
            >Submit</a
          >
        </div>
      </div>
    </div>
  </div>
  <!-- /Modal -->
</template>

<script>
const columns = [
  {
    title: "#",
    dataIndex: "NUM",
    sorter: (a, b) => a.NUM.localeCompare(b.NUM),
  },
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
    title: "Email",
    dataIndex: "Email",
    sorter: {
      compare: (a, b) => {
        a = a.Email.toLowerCase();
        b = b.Email.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Number",
    dataIndex: "Number",
    sorter: {
      compare: (a, b) => {
        a = a.Number.toLowerCase();
        b = b.Number.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Message",
    dataIndex: "Message",
    sorter: {
      compare: (a, b) => {
        a = a.Message.toLowerCase();
        b = b.Message.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
];
const data = [
  {
    NUM: 1,
    Image: "avatar-02.jpg",
    Name: "John Smith",
    Email: "john@example.com",
    Number: "+1 989-438-3131",
    Message: "Lorem ipsum dolor sit consectetur",
  },
  {
    NUM: 2,
    Image: "avatar-03.jpg",
    Name: "Johnny",
    Email: "johnny@example.com",
    Number: "+1 843-443-3282",
    Message: "Ut enim ad minim veniam, quis",
  },
  {
    NUM: 3,
    Image: "avatar-04.jpg",
    Name: "Robert",
    Email: "robert@example.com",
    Number: "+1 917-409-0861",
    Message: "Duis aute irure dolor in reprehenderit",
  },
  {
    NUM: 4,
    Image: "avatar-05.jpg",
    Name: "Sharonda",
    Email: "sharon@example.com",
    Number: "+1 956-623-2880",
    Message: "Excepteur sint occaecat cupidatat",
  },
  {
    NUM: 5,
    Image: "avatar-07.jpg",
    Name: "Randall",
    Email: "randall@example.com",
    Number: "+1 707-439-1732",
    Message: "Sed ut perspiciatis unde omnis iste",
  },
  {
    NUM: 6,
    Image: "avatar-07.jpg",
    Name: "Pricilla",
    Email: "pricilla@example.com",
    Number: "+1 559-741-9672",
    Message: "Nemo enim ipsam voluptatem quia",
  },
];
export default {
  data() {
    return {
      columns,
      data,
    };
  },
  mounted() {
    if (document.querySelectorAll(".popup-toggle").length > 0) {
      document.querySelectorAll(".popup-toggle").forEach(function (el) {
        el.addEventListener("click", function () {
          document.querySelector(".toggle-sidebar").classList.add("open-filter");
        });
      });

      document.querySelectorAll(".sidebar-closes").forEach(function (el) {
        el.addEventListener("click", function () {
          document.querySelector(".toggle-sidebar").classList.remove("open-filter");
        });
      });
    }
  },
};
</script>
