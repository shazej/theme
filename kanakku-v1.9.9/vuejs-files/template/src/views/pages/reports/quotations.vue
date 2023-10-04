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
                            >{{ record.Customer
                            }}<span>{{ record.num }}</span></router-link
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
                          v-else="record.Status === 'Cancelled'"
                          >{{ record.Status }}</span
                        >
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
                          <div class="dropdown-menu dropdown-menu-right">
                            <ul>
                              <li>
                                <router-link class="dropdown-item" to="edit-quotations"
                                  ><i class="far fa-edit me-2"></i>Edit</router-link
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
    title: "Quotation ID",
    dataIndex: "QuotationID",
    sorter: (a, b) => a.QuotationID.localeCompare(b.QuotationID),
  },
  {
    title: "Customer",
    dataIndex: "Customer",
    key: "id",
    sorter: (a, b) => a.Customer.localeCompare(b.Customer),
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
    QuotationID: "#25689825",
    Customer: "John Smith",
    num: "+1 843-443-3282",
    CreatedOn: "19 Dec 2022, 06:12 PM",
    Status: "Paid",
  },
  {
    NUM: "2",
    img: "avatar-03.jpg",
    QuotationID: "#25689826",
    Customer: "Johnny",
    num: "+1 917-409-0861",
    CreatedOn: "19 Dec 2022, 06:12 PM",
    Status: "Pending",
  },
  {
    NUM: "3",
    img: "avatar-04.jpg",
    QuotationID: "#25689827",
    Customer: "Robert",
    num: "+1 956-623-2880",
    CreatedOn: "19 Dec 2022, 06:12 PM",
    Status: "Cancelled",
  },
  {
    NUM: "4",
    img: "avatar-05.jpg",
    QuotationID: "#25689828",
    Customer: "Sharonda",
    num: "+1 707-439-1732",
    CreatedOn: "19 Dec 2022, 06:12 PM",
    Status: "Pending",
  },
  {
    NUM: "5",
    img: "avatar-07.jpg",
    QuotationID: "#25689829",
    Customer: "Randall",
    num: "+1 559-741-9672",
    CreatedOn: "19 Dec 2022, 06:12 PM",
    Status: "Paid",
  },
  {
    NUM: "6",
    img: "avatar-06.jpg",
    QuotationID: "#25689830",
    Customer: "Pricilla",
    num: "+1 989-438-3131",
    CreatedOn: "19 Dec 2022, 06:12 PM",
    Status: "Paid",
  },
  {
    NUM: "7",
    img: "avatar-02.jpg",
    QuotationID: "#25689831",
    Customer: "John Smith",
    num: "+1 843-443-3282",
    CreatedOn: "19 Dec 2022, 06:12 PM",
    Status: "Paid",
  },
  {
    NUM: "8",
    img: "avatar-03.jpg",
    QuotationID: "#25689832",
    Customer: "Johnny",
    num: "+1 917-409-0861",
    CreatedOn: "19 Dec 2022, 06:12 PM",
    Status: "Pending",
  },
  {
    NUM: "9",
    img: "avatar-04.jpg",
    QuotationID: "#25689833",
    Customer: "Robert",
    num: "+1 956-623-2880",
    CreatedOn: "19 Dec 2022, 06:12 PM",
    Status: "Cancelled",
  },
];
export default {
  data() {
    return {
      title: "Quotations",
      path: "add-quotations",
      text: "Create Quotation",
      title1: "Delete Quotations",
      data,
      columns,
    };
  },
};
</script>
