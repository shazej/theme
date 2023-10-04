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
                            >{{ record.Customer }}
                            <span>{{ record.Customer }}</span></router-link
                          >
                        </h2>
                      </template>
                      <template v-else-if="column.key === 'action'">
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
                                  <router-link
                                    class="dropdown-item"
                                    to="edit-delivery-challans"
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
                        </div>
                      </template>
                    </template>
                  </a-table>
                </div>
              </div>
            </div>
          </div>
        </div>
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
    title: "Challan ID",
    dataIndex: "ChallanID",
    sorter: (a, b) => a.ChallanID.localeCompare(b.ChallanID),
  },
  {
    title: "Customer",
    dataIndex: "Customer",
    key: "id",
    sorter: (a, b) => a.Customer.localeCompare(b.Customer),
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
    title: "Action",
    key: "action",
    sorter: true,
  },
];
const data = [
  {
    NUM: "1",
    ChallanID: "#25689825",
    img: "avatar-02.jpg",
    Customer: "John Smith",
    number: "+1 843-443-3282",
    Amount: "$1,54,220",
    CreatedOn: "19 Dec 2022, 06:12 PM",
  },
  {
    NUM: "2",
    ChallanID: "#25689826",
    img: "avatar-03.jpg",
    Customer: "Johnny",
    number: "+1 917-409-0861",
    Amount: "$2,54,220",
    CreatedOn: "19 Dec 2022, 06:12 PM",
  },
  {
    NUM: "3",
    ChallanID: "#25689827",
    img: "avatar-04.jpg",
    Customer: "Robert",
    number: "+1 956-623-2880",
    Amount: "$3,54,220",
    CreatedOn: "19 Dec 2022, 06:12 PM",
  },
  {
    NUM: "4",
    ChallanID: "#25689828",
    img: "avatar-05.jpg",
    Customer: "Sharonda",
    number: "+1 707-439-1732",
    Amount: "$4,54,220",
    CreatedOn: "19 Dec 2022, 06:12 PM",
  },
  {
    NUM: "5",
    ChallanID: "#25689829",
    img: "avatar-07.jpg",
    Customer: "Randall",
    number: "+1 559-741-9672",
    Amount: "$5,54,220",
    CreatedOn: "19 Dec 2022, 06:12 PM",
  },
  {
    NUM: "6",
    ChallanID: "#25689830",
    img: "avatar-06.jpg",
    Customer: "Pricilla",
    number: "+1 989-438-3131",
    Amount: "$4,54,220",
    CreatedOn: "19 Dec 2022, 06:12 PM",
  },
  {
    NUM: "7",
    ChallanID: "#25689831",
    img: "avatar-02.jpg",
    Customer: "John Smith",
    number: "+1 843-443-3282",
    Amount: "$1,54,220",
    CreatedOn: "19 Dec 2022, 06:12 PM",
  },
  {
    NUM: "8",
    ChallanID: "#25689832",
    img: "avatar-03.jpg",
    Customer: "Johnny",
    number: "+1 917-409-0861",
    Amount: "$2,54,220",
    CreatedOn: "19 Dec 2022, 06:12 PM",
  },
  {
    NUM: "9",
    ChallanID: "#25689833",
    img: "avatar-04.jpg",
    Customer: "Robert",
    number: "+1 956-623-2880",
    Amount: "$3,54,220",
    CreatedOn: "19 Dec 2022, 06:12 PM",
  },
];
export default {
  data() {
    return {
      title: "Delivery Challans",
      title1: "Delete Delivery Challans",
      path: "add-delivery-challans",
      text: "Create Delivery Challans",
      data,
      columns,
    };
  },
};
</script>
