<template>
  <div class="main-wrapper">
    <layout-header></layout-header>
    <layout-sidebar></layout-sidebar>

    <!-- Page Wrapper -->
    <div class="page-wrapper">
      <div class="content container-fluid">
        <componentheader :title="title" />

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
                      <template v-if="column.key === 'InvoiceID'">
                        <label class="custom_check">
                          <input type="checkbox" name="invoice" />
                          <span class="checkmark"></span>
                        </label>
                        <router-link to="/invoice-details" class="invoice-link">{{
                          record.InvoiceID
                        }}</router-link>
                      </template>
                      <template v-else-if="column.key === 'InvoiceTo'">
                        <h2 class="table-avatar">
                          <router-link to="/profile" class="avatar avatar-sm me-2"
                            ><img
                              class="avatar-img rounded-circle"
                              :src="require(`@/assets/img/profiles/${record.Image}`)"
                              alt="User Image"
                          /></router-link>
                          <router-link to="profile"
                            >{{ record.Name
                            }}<span>{{ record.Number }}</span></router-link
                          >
                        </h2>
                      </template>
                      <template v-else-if="column.key === 'Status'">
                        <span class="badge bg-success-light">{{ record.Status }}</span>
                      </template>
                      <template v-else-if="column.key === 'Action'">
                        <div class="dropdown dropdown-action">
                          <a
                            href="javascript:;"
                            class="btn-action-icon"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                            ><i class="fas fa-ellipsis-v"></i
                          ></a>
                          <div class="dropdown-menu dropdown-menu-end">
                            <ul>
                              <li>
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0);"
                                  data-bs-toggle="modal"
                                  data-bs-target="#delete_modal"
                                  ><i class="far fa-trash-alt me-2"></i>Delete</a
                                >
                              </li>
                              <li>
                                <router-link class="dropdown-item" to="/active-customers"
                                  ><i class="far fa-bell me-2"></i>Active</router-link
                                >
                              </li>
                              <li>
                                <router-link
                                  class="dropdown-item"
                                  to="/deactive-customers"
                                  ><i class="far fa-bell-slash me-2"></i>In
                                  Active</router-link
                                >
                              </li>
                            </ul>
                          </div>
                        </div>
                      </template>
                    </template>
                  </a-table>
                </div>
              </div>
            </div>
          </div>
          <!-- /Table -->

          <!-- Delete Items Modal -->
          <div class="modal custom-modal fade" id="delete_modal" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-md">
              <div class="modal-content">
                <div class="modal-body">
                  <div class="form-header">
                    <h3>Delete Customer Details</h3>
                    <p>Are you sure want to delete?</p>
                  </div>
                  <div class="modal-btn delete-action">
                    <div class="row">
                      <div class="col-6">
                        <a
                          href="javascript:;"
                          data-bs-dismiss="modal"
                          class="btn btn-primary paid-continue-btn"
                          >Delete</a
                        >
                      </div>
                      <div class="col-6">
                        <a
                          href="javascript:;"
                          data-bs-dismiss="modal"
                          class="btn btn-primary paid-cancel-btn"
                          >Cancel</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /Delete Items Modal -->
        </div>
      </div>
      <!-- /Page Wrapper -->
    </div>
  </div>
</template>

<script>
const columns = [
  {
    title: "Invoice ID",
    dataIndex: "InvoiceID",
    key: "InvoiceID",
    sorter: {
      compare: (a, b) => {
        a = a.InvoiceID.toLowerCase();
        b = b.InvoiceID.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Category",
    dataIndex: "Category",
    sorter: {
      compare: (a, b) => {
        a = a.Category.toLowerCase();
        b = b.Category.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Created On",
    dataIndex: "CreatedOn",
    sorter: {
      compare: (a, b) => {
        a = a.CreatedOn.toLowerCase();
        b = b.CreatedOn.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Invoice To",
    dataIndex: "InvoiceTo",
    key: "InvoiceTo",
    sorter: {
      compare: (a, b) => {
        a = a.InvoiceTo.toLowerCase();
        b = b.InvoiceTo.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "TotalAmount",
    dataIndex: "TotalAmount",
    sorter: {
      compare: (a, b) => {
        a = a.TotalAmount.toLowerCase();
        b = b.TotalAmount.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Paid Amount",
    dataIndex: "PaidAmount",
    sorter: {
      compare: (a, b) => {
        a = a.PaidAmount.toLowerCase();
        b = b.PaidAmount.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Payment Mode",
    dataIndex: "PaymentMode",
    sorter: {
      compare: (a, b) => {
        a = a.PaymentMode.toLowerCase();
        b = b.PaymentMode.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Balance",
    dataIndex: "Balance",
    sorter: {
      compare: (a, b) => {
        a = a.Balance.toLowerCase();
        b = b.Balance.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "DueDate",
    dataIndex: "DueDate",
    sorter: {
      compare: (a, b) => {
        a = a.DueDate.toLowerCase();
        b = b.DueDate.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Status",
    dataIndex: "Status",
    key: "Status",
    sorter: {
      compare: (a, b) => {
        a = a.Status.toLowerCase();
        b = b.Status.toLowerCase();
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
    InvoiceID: "#4987",
    Category: "Food",
    CreatedOn: "23 Mar 2023",
    Image: "avatar-02.jpg",
    InvoiceTo: "JohnSmith",
    Number: "+1 843-443-3282",
    TotalAmount: "$1,54,220",
    PaidAmount: "$1,50,000",
    PaymentMode: "Cash",
    Balance: "$2,54,00",
    DueDate: "25 Mar 2023",
    Status: "Paid",
  },
  {
    InvoiceID: "#4988",
    Category: "Advertising",
    CreatedOn: "16 Mar 2022",
    Image: "avatar-01.jpg",
    InvoiceTo: "Johnny",
    Number: "+1 917-409-0861",
    TotalAmount: "$3,54,220",
    PaidAmount: "$2,50,000",
    PaymentMode: "Cheque",
    Balance: "$4,220",
    DueDate: "16 Jan 2023",
    Status: "Paid",
  },
  {
    InvoiceID: "#4989",
    Category: "Marketing",
    CreatedOn: "25 Feb 2023",
    Image: "avatar-08.jpg",
    InvoiceTo: "Robert",
    Number: "+1 956-623-2880",
    TotalAmount: "$1,54,220",
    PaidAmount: "$1,50,000",
    PaymentMode: "Cash",
    Balance: "$4,220",
    DueDate: "16 Jan 2023",
    Status: "Paid",
  },
  {
    InvoiceID: "#4990",
    Category: "Repairs",
    CreatedOn: "25 Mar 2022",
    Image: "avatar-04.jpg",
    InvoiceTo: "Sharonda",
    Number: "+1 707-439-1732",
    TotalAmount: "$1,54,220",
    PaidAmount: "$1,50,000",
    PaymentMode: "Cash",
    Balance: "$4,220",
    DueDate: "12 May 2023",
    Status: "Paid",
  },
  {
    InvoiceID: "#4991",
    Category: "Software",
    CreatedOn: "12 May 2022",
    Image: "avatar-06.jpg",
    InvoiceTo: "Pricilla",
    Number: "+1 559-741-9672",
    TotalAmount: "$5,54,220",
    PaidAmount: "$3,50,000",
    PaymentMode: "Cheque",
    Balance: "$4,220",
    DueDate: "18 May 2023",
    Status: "Paid",
  },
  {
    InvoiceID: "#4992",
    Category: "Stationary",
    CreatedOn: "16 Nov 2022",
    Image: "avatar-09.jpg",
    InvoiceTo: "Randall",
    Number: "+1 989-438-3131",
    TotalAmount: "$5,54,220",
    PaidAmount: "$6,50,000",
    PaymentMode: "Cash",
    Balance: "$4,220",
    DueDate: "25 Feb 2023",
    Status: "Paid",
  },
];
export default {
  data() {
    return {
      title: "Customer Details Active",
      columns,
      data,
    };
  },
};
</script>
