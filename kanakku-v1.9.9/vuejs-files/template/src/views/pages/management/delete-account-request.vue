<template>
  <!-- Main Wrapper -->
  <div class="main-wrapper">
    <layout-header></layout-header>
    <layout-sidebar></layout-sidebar>

    <!-- Page Wrapper -->
    <div class="page-wrapper">
      <div class="content container-fluid">
        <supportheader :title="title" />
        <filter />
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
                            >{{ record.UserName
                            }}<span>{{ record.mail }}</span></router-link
                          >
                        </h2>
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
                          <a
                            href="javascript:;"
                            class="btn btn-greys ms-2"
                            data-bs-toggle="modal"
                            data-bs-target="#delete_modal"
                            >Confirm</a
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
    sorter: (a, b) => a.NUM.localeCompare(b.NUM),
  },
  {
    title: "User Name",
    dataIndex: "UserName",
    key: "id",
    sorter: {
      compare: (a, b) => {
        a = a.UserName.toLowerCase();
        b = b.UserName.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Requisition Date",
    dataIndex: "RequisitionDate",
    sorter: (a, b) => a.RequisitionDate.localeCompare(b.RequisitionDate),
  },
  {
    title: "Delete Request Date",
    dataIndex: "DeleteRequestDate",
    sorter: {
      compare: (a, b) => {
        a = a.DeleteRequestDate.toLowerCase();
        b = b.DeleteRequestDate.toLowerCase();
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
    UserName: "John Smith",
    img: "avatar-02.jpg",
    mail: "john@example.com",
    RequisitionDate: "28 Sep 2022 16:43PM",
    DeleteRequestDate: "19 Dec 2022, 06:12 PM",
  },
  {
    NUM: "2",
    UserName: "Johnny",
    img: "avatar-03.jpg",
    mail: "johnny@example.com",
    RequisitionDate: "12 Dec 2022, 06:12 PM",
    DeleteRequestDate: "15 Dec 2022, 06:12 PM",
  },
  {
    NUM: "3",
    UserName: "Robert",
    img: "avatar-04.jpg",
    mail: "robert@example.com",
    RequisitionDate: "04 Dec 2022, 12:38 PM",
    DeleteRequestDate: "08 Dec 2022, 12:38 PM",
  },
  {
    NUM: "4",
    UserName: "Sharonda",
    img: "avatar-05.jpg",
    mail: "sharon@example.com",
    RequisitionDate: "14 Dec 2022, 12:38 PM",
    DeleteRequestDate: "24 Dec 2022, 12:38 PM",
  },
  {
    NUM: "5",
    UserName: "Pricilla",
    img: "avatar-06.jpg",
    mail: "pricilla@example.com",
    RequisitionDate: "12 Dec 2022, 12:38 PM",
    DeleteRequestDate: "13 Dec 2022, 12:38 PM",
  },
  {
    NUM: "6",
    UserName: "Randall",
    img: "avatar-07.jpg",
    mail: "randall@example.com",
    RequisitionDate: "04 Dec 2022, 12:38 PM",
    DeleteRequestDate: "09 Dec 2022, 12:38 PM",
  },
  {
    NUM: "7",
    UserName: "John Smith",
    img: "avatar-02.jpg",
    mail: "john@example.com",
    RequisitionDate: "28 Sep 2022 16:43PM",
    DeleteRequestDate: "19 Dec 2022, 06:12 PM",
  },
  {
    NUM: "8",
    UserName: "Johnny",
    mail: "johnny@example.com",
    img: "avatar-03.jpg",
    RequisitionDate: "12 Dec 2022, 06:12 PM",
    DeleteRequestDate: "15 Dec 2022, 06:12 PM",
  },
  {
    NUM: "9",
    UserName: "Robert",
    mail: "robert@example.com",
    img: "avatar-04.jpg",
    RequisitionDate: "04 Dec 2022, 12:38 PM",
    DeleteRequestDate: "08 Dec 2022, 12:38 PM",
  },
];
export default {
  setup() {
    return {
      title: "Delete Account Request",
      title1: "Delete Account Request",
      data,
      columns,
    };
  },
};
</script>
