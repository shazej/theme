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
        <invoicecard />
        <invoicetab />
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
                        <span class="badge bg-primary-light">{{
                          record.Status
                        }}</span></template
                      >
                      <template v-else-if="column.key === 'Action'">
                        <div class="text-end">
                          <div class="dropdown dropdown-action">
                            <a
                              href="javascript:;"
                              class="btn-action-icon"
                              data-bs-toggle="dropdown"
                              aria-expanded="false"
                              ><i class="fas fa-ellipsis-v"></i
                            ></a>
                            <div class="dropdown-menu dropdown-menu-end">
                              <router-link class="dropdown-item" to="edit-invoice"
                                ><i class="far fa-edit me-2"></i>Edit</router-link
                              >
                              <router-link class="dropdown-item" to="invoice-details"
                                ><i class="far fa-eye me-2"></i>View</router-link
                              >
                              <a
                                class="dropdown-item"
                                href="javascript:void(0);"
                                data-bs-toggle="modal"
                                data-bs-target="#delete_modal"
                                ><i class="far fa-trash-alt me-2"></i>Delete</a
                              >
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
    <locationmodal :title1="title1" />
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
    title: "Created On",
    dataIndex: "Createdon",
    sorter: {
      compare: (a, b) => {
        a = a.Createdon.toLowerCase();
        b = b.Createdon.toLowerCase();
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
    title: "Amount",
    dataIndex: "Amount",
    sorter: (a, b) => a.Amount.localeCompare(b.Amount),
  },

  {
    title: "Paid On",
    dataIndex: "Lastdate",
    sorter: {
      compare: (a, b) => {
        a = a.Lastdate.toLowerCase();
        b = b.Lastdate.toLowerCase();
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
    img: "avatar-02.jpg",
    email: "john@example.com",
    InvoiceTo: "John Smith",
    Amount: "$1,54,220",
    Createdon: "23 Mar 2023",
    Lastdate: "25 Mar 2023",
    Status: "Recurring",
  },
  {
    InvoiceID: "#4988",
    img: "avatar-01.jpg",
    email: "johnny@example.com",
    InvoiceTo: "Johnny",
    Amount: "$3,54,220",
    Createdon: "16 Mar 2022",
    Lastdate: "16 Jan 2023",
    Status: "Recurring",
  },
  {
    InvoiceID: "#4989",
    img: "avatar-08.jpg",
    email: "robert@example.com",
    InvoiceTo: "Rober",
    Amount: "$2,54,220",
    Createdon: "25 Feb 2023",
    Lastdate: "16 Jan 2023",
    Status: "Recurring",
  },
  {
    InvoiceID: "#4990",
    img: "avatar-04.jpg",
    email: "sharonda@example.com",
    InvoiceTo: "Sharonda",
    Amount: "$1,54,220",
    Createdon: "25 Mar 2022",
    Lastdate: "12 May 2023",
    Status: "Recurring",
  },
  {
    InvoiceID: "#4991",
    img: "avatar-06.jpg",
    email: "pricilla@example.com",
    InvoiceTo: "Pricilla",
    Amount: "$5,54,220",
    Createdon: "12 May 2022",
    Lastdate: "18 May 2023",
    Status: "Recurring",
  },
  {
    InvoiceID: "#4992",
    img: "avatar-09.jpg",
    email: "randall@example.com",
    InvoiceTo: "Randall",
    Amount: "$6,50,000",
    Createdon: "12 May 2022",
    Lastdate: "25 Feb 2023",
    Status: "Recurring",
  },
];
export default {
  setup() {
    return {
      title: "Invoices Recurring",
      path: "add-invoice",
      text: "New Invoice",
      title1: "Delete Invoice",
      data,
      columns,
    };
  },
};
</script>
