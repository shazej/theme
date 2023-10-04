<template>
  <!-- Main Wrapper -->
  <div class="main-wrapper">
    <layout-header></layout-header>
    <layout-sidebar></layout-sidebar>

    <!-- Page Wrapper -->
    <div class="page-wrapper">
      <div class="content container-fluid">
        <blogheader :title="title" :path="path" :text="text" />
        <filter />
        <invoice-card />
        <invoice-tab />
        <!-- Table -->
        <div class="row">
          <div class="col-sm-12">
            <div class="card-table">
              <div class="card-body">
                <div class="table-responsive">
                  <a-table :columns="columns" :data-source="data" @change="onChange">
                    <template #bodyCell="{ column, record }">
                      <template v-if="column.key === 'InvoiceID'">
                        <label class="custom_check">
                          <input type="checkbox" name="invoice" />
                          <span class="checkmark"></span>
                        </label>
                        <router-link to="invoice-details" class="invoice-link">{{
                          record.InvoiceID
                        }}</router-link></template
                      >
                      <template v-else-if="column.key === 'id'">
                        <h2 class="table-avatar">
                          <router-link to="profile" class="avatar avatar-sm me-2">
                            <img
                              class="avatar-img rounded-circle"
                              :src="require(`@/assets/img/profiles/${record.img}`)"
                              alt="User Image"
                          /></router-link>
                          <router-link to="profile"
                            >{{ record.InvoiceTo
                            }}<span>{{ record.email }}</span></router-link
                          >
                        </h2></template
                      >
                      <template v-else-if="column.key === 'Status'">
                        <span class="badge bg-success-light">{{
                          record.Status
                        }}</span></template
                      >
                      <template v-else-if="column.key === 'Action'">
                        <div class="text-end">
                          <router-link
                            to="edit-invoice"
                            class="btn btn-sm btn-white text-success me-2"
                            ><i class="far fa-edit me-1"></i> Edit</router-link
                          >
                          <a
                            class="btn btn-sm btn-white text-danger"
                            href="javascript:;"
                            data-bs-toggle="modal"
                            data-bs-target="#delete_paid"
                            ><i class="far fa-trash-alt me-1"></i>Delete</a
                          >
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
    <locationmodal :title2="title2" />
  </div>
  <!-- /Main Wrapper -->
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
    sorter: (a, b) => a.Category.localeCompare(b.Category),
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
    key: "id",
    sorter: (a, b) => a.InvoiceTo.localeCompare(b.InvoiceTo),
  },
  {
    title: "Total Amount",
    dataIndex: "TotalAmount",
    sorter: (a, b) => a.TotalAmount.localeCompare(b.TotalAmount),
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
    class: "text-end",
    sorter: true,
  },
];
const data = [
  {
    InvoiceID: "#4987",
    Category: "Food",
    CreatedOn: "23 Mar 2023",
    img: "avatar-02.jpg",
    email: "john@example.com",
    InvoiceTo: "John Smith",
    TotalAmount: "$1,54,220",
    PaidAmount: "$1,50,000",
    PaymentMode: "Cash",
    Balance: "$0",
    DueDate: "25 Mar 2023",
    Status: "Paid",
  },
  {
    InvoiceID: "#4988",
    Category: "Advertising",
    CreatedOn: "16 Mar 2022",
    img: "avatar-01.jpg",
    email: "johnny@example.com",
    InvoiceTo: "Johnny",
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
    img: "avatar-08.jpg",
    email: "robert@example.com",
    InvoiceTo: "Rober",
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
    img: "avatar-04.jpg",
    email: "sharonda@example.com",
    InvoiceTo: "Sharonda",
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
    img: "avatar-06.jpg",
    email: "pricilla@example.com",
    InvoiceTo: "Pricilla",
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
    img: "avatar-09.jpg",
    email: "randall@example.com",
    InvoiceTo: "Randall",
    TotalAmount: "$5,54,220",
    PaidAmount: "$6,50,000",
    PaymentMode: "Cash",
    Balance: "$4,220",
    DueDate: "25 Feb 2023",
    Status: "Paid",
  },
];
export default {
  setup() {
    return {
      title: "Recurring Invoices Paid",
      path: "add-invoice",
      text: "New Invoice",
      title2: "Delete Invoice Paid",
      data,
      columns,
    };
  },
};
</script>
