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
                            >{{ record.UserName }}
                            <span>{{ record.mail }}</span></router-link
                          >
                        </h2>
                      </template>
                      <template v-else-if="column.key === 'LastActivity'">
                        <span
                          class="badge badge-pill bg-ash-gray text-gray-light"
                          v-if="record.LastActivity === '10 mins ago'"
                          >{{ record.LastActivity }}</span
                        >
                        <span
                          class="badge badge-pill bg-ash-gray text-gray-light"
                          v-else-if="record.LastActivity === '2 days ago'"
                          >{{ record.LastActivity }}</span
                        >
                        <span
                          class="badge badge-pill bg-ash-gray text-gray-light"
                          v-else-if="record.LastActivity === '1 hour ago'"
                          >{{ record.LastActivity }}</span
                        >
                        <span
                          class="badge badge-pill bg-success-light"
                          v-else="record.LastActivity === 'Online'"
                          >{{ record.LastActivity }}</span
                        >
                      </template>
                      <template v-else-if="column.key === 'Status'">
                        <span
                          class="badge badge-pill bg-success-light"
                          v-if="record.Status === 'Active'"
                          >{{ record.Status }}</span
                        >
                        <span
                          class="badge badge-pill bg-ash-gray text-gray-light"
                          v-else="record.Status === 'Restricted'"
                          >{{ record.Status }}</span
                        >
                      </template>
                      <template v-else-if="column.key === 'action'">
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
                                  <router-link class="dropdown-item" to="edit-user"
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
    title: "User Name",
    dataIndex: "UserName",
    key: "id",
    sorter: (a, b) => a.UserName.localeCompare(b.UserName),
  },
  {
    title: "Mobile Number",
    dataIndex: "MobileNumber",
    sorter: (a, b) => a.MobileNumber.localeCompare(b.MobileNumber),
  },
  {
    title: "Role",
    dataIndex: "Role",
    sorter: {
      compare: (a, b) => {
        a = a.Role.toLowerCase();
        b = b.Role.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Last Activity",
    dataIndex: "LastActivity",
    key: "LastActivity",
    sorter: {
      compare: (a, b) => {
        a = a.LastActivity.toLowerCase();
        b = b.LastActivity.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Created on",
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
    key: "action",
    sorter: true,
  },
];
const data = [
  {
    NUM: "1",
    img: "avatar-02.jpg",
    UserName: "John Smith",
    mail: "john@example.com",
    MobileNumber: "+1 989-438-3131",
    Role: "$4,220",
    LastActivity: "10 mins ago",
    Createdon: "19 Dec 2022, 06:12 PM",
    Status: "Active",
  },
  {
    NUM: "2",
    img: "avatar-03.jpg",
    UserName: "Johnny",
    mail: "johnny@example.com",
    MobileNumber: "+1 843-443-3282",
    Role: "$1,862",
    LastActivity: "Online",
    Createdon: "15 Dec 2022, 06:12 PM",
    Status: "Active",
  },
  {
    NUM: "3",
    img: "avatar-04.jpg",
    UserName: "Robert",
    mail: "robert@example.com",
    MobileNumber: "+1 917-409-0861",
    Role: "$2,789",
    LastActivity: "Online",
    Createdon: "04 Dec 2022, 12:38 PM",
    Status: "Restricted",
  },
  {
    NUM: "4",
    img: "avatar-05.jpg",
    UserName: "Sharonda",
    mail: "sharon@example.com",
    MobileNumber: "+1 956-623-2880",
    Role: "$6,789",
    LastActivity: "1 hour ago",
    Createdon: "14 Dec 2022, 12:38 PM",
    Status: "Active",
  },
  {
    NUM: "5",
    img: "avatar-06.jpg",
    UserName: "Pricilla",
    mail: "pricilla@example.com",
    MobileNumber: "+1 956-613-2880",
    Role: "$1,789",
    LastActivity: "Online",
    Createdon: "12 Dec 2022, 12:38 PM",
    Status: "Active",
  },
  {
    NUM: "6",
    img: "avatar-07.jpg",
    UserName: "Randall",
    mail: "randall@example.com",
    MobileNumber: "+1 117-409-0861",
    Role: "$1,789",
    LastActivity: "2 days ago",
    Createdon: "04 Dec 2022, 12:38 PM",
    Status: "Restricted",
  },
  {
    NUM: "7",
    img: "avatar-02.jpg",
    UserName: "John Smith",
    mail: "john@example.com",
    MobileNumber: "+1 989-438-3131",
    Role: "$4,220",
    LastActivity: "10 mins ago",
    Createdon: "19 Dec 2022, 06:12 PM",
    Status: "Active",
  },
  {
    NUM: "8",
    img: "avatar-03.jpg",
    UserName: "Johnny",
    mail: "johnny@example.com",
    MobileNumber: "+1 843-443-3282",
    Role: "$1,862",
    LastActivity: "Online",
    Createdon: "15 Dec 2022, 06:12 PM",
    Status: "Active",
  },
  {
    NUM: "9",
    img: "avatar-04.jpg",
    UserName: "Robert",
    mail: "robert@example.com",
    MobileNumber: "+1 917-409-0861",
    Role: "$2,789",
    LastActivity: "Online",
    Createdon: "04 Dec 2022, 12:38 PM",
    Status: "Restricted",
  },
];
export default {
  data() {
    return {
      title: "Users",
      title1: "Delete Users",
      path: "add-user",
      text: "Add User",
      data,
      columns,
    };
  },
};
</script>
