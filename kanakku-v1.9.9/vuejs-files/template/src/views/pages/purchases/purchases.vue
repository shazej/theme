<template>
  <!-- Main Wrapper -->
  <div class="main-wrapper">
    <layout-header></layout-header>
    <layout-sidebar></layout-sidebar>
    <!-- Page Wrapper -->
    <div class="page-wrapper">
      <div class="content container-fluid">
        <blogheader :title="title" :path="path" :text="text" />

        <!-- Search Filter -->
        <div id="filter_inputs" class="card filter-card">
          <div class="card-body pb-0">
            <div class="row">
              <div class="col-sm-6 col-md-3">
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" />
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="form-group">
                  <label>Email</label>
                  <input type="text" class="form-control" />
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="form-group">
                  <label>Phone</label>
                  <input type="text" class="form-control" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /Search Filter -->

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
                      <template v-if="column.key === 'id'">
                        <h2 class="table-avatar">
                          <router-link to="profile" class="avatar avatar-sm me-2"
                            ><img
                              class="avatar-img rounded-circle"
                              :src="require(`@/assets/img/profiles/${record.img}`)"
                              alt="User Image"
                          /></router-link>
                          <router-link to="profile"
                            >{{ record.Vendor }}<span>{{ record.num }}</span></router-link
                          >
                        </h2>
                      </template>
                      <template v-else-if="column.key === 'Status'">
                        <span
                          class="badge bg-success-light text-success-light"
                          v-if="record.Status === 'Paid'"
                          >{{ record.Status }}</span
                        >
                        <span
                          class="badge bg-warning-light text-warning-light"
                          v-else-if="record.Status === 'Pending'"
                          >{{ record.Status }}</span
                        >
                        <span
                          class="badge bg-danger-light"
                          v-else-if="record.Status === 'Cancelled'"
                          >{{ record.Status }}</span
                        >
                      </template>
                      <template v-else-if="column.key === 'Action'">
                        <div class="d-flex align-items-center">
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
                                  <router-link class="dropdown-item" to="edit-purchases"
                                    ><i class="far fa-eye me-2"></i>Edit</router-link
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
                                <li>
                                  <router-link
                                    class="dropdown-item"
                                    to="purchases-details"
                                    ><i class="far fa-eye me-2"></i>View</router-link
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
    <locationmodal :title1="title1" />
  </div>
  <!-- /Main Wrapper -->
</template>
<script>
const columns = [
  {
    title: "#",
    dataIndex: "NUM",
    sorter: {
      compare: (a, b) => {
        a = a.NUM.toLowerCase();
        b = b.NUM.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Purchase ID",
    dataIndex: "PurchaseID",
    sorter: (a, b) => a.PurchaseID.localeCompare(b.PurchaseID),
  },
  {
    title: "Vendor",
    dataIndex: "Vendor",
    key: "id",
    sorter: (a, b) => a.Vendor.localeCompare(b.Vendor),
  },
  {
    title: "Amount",
    dataIndex: "Amount",
    sorter: {
      compare: (a, b) => {
        a = a.Amount.toLowerCase();
        b = b.Amount.toLowerCase();
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
    title: "Date",
    dataIndex: "Date",
    sorter: {
      compare: (a, b) => {
        a = a.Date.toLowerCase();
        b = b.Date.toLowerCase();
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
    NUM: "1",
    img: "avatar-02.jpg",
    num: "+1 843-443-3282",
    PurchaseID: "#25689825",
    Vendor: "John Smith",
    Amount: "$1,54,220",
    PaymentMode: "Cash",
    Date: "19 Dec 2022, 06:12 PM",
    Status: "Paid",
  },
  {
    NUM: "2",
    img: "avatar-03.jpg",
    num: "+1 917-409-0861",
    PurchaseID: "#25689826",
    Vendor: "Johnny",
    Amount: "$2,54,220",
    PaymentMode: "Cheque",
    Date: "19 Dec 2022, 06:12 PM",
    Status: "Pending",
  },
  {
    NUM: "3",
    img: "avatar-04.jpg",
    num: "+1 956-623-2880",
    PurchaseID: "#25689827",
    Vendor: "Robert",
    Amount: "$1,84,220",
    PaymentMode: "Cash",
    Date: "19 Dec 2022, 06:12 PM",
    Status: "Cancelled",
  },
  {
    NUM: "4",
    img: "avatar-05.jpg",
    num: "+1 707-439-1732",
    PurchaseID: "#25689828",
    Vendor: "Sharonda",
    Amount: "$6,54,220",
    PaymentMode: "Cheque",
    Date: "19 Dec 2022, 06:12 PM",
    Status: "Pending",
  },
  {
    NUM: "5",
    img: "avatar-07.jpg",
    num: "+1 559-741-9672",
    PurchaseID: "#25689829",
    Vendor: "Randall",
    Amount: "$3,54,220",
    PaymentMode: "Cash",
    Date: "19 Dec 2022, 06:12 PM",
    Status: "Paid",
  },
  {
    NUM: "6",
    img: "avatar-06.jpg",
    num: "+1 989-438-3131",
    PurchaseID: "#25689830",
    Vendor: "Pricilla",
    Amount: "$1,54,220",
    PaymentMode: "Cheque",
    Date: "19 Dec 2022, 06:12 PM",
    Status: "Paid",
  },
];
export default {
  data() {
    return {
      title: "Purchases",
      path: "add-purchases",
      text: "Add Purchases",
      title1: "Delete Purchases",
      data,
      columns,
    };
  },
};
</script>
