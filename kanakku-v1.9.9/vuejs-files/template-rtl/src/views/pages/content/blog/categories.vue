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
                        <h2 class="d-flex text-center">
                          <img
                            class="avatar-img rounded me-2"
                            width="30"
                            height="30"
                            :src="require(`@/assets/img/category/${record.img}`)"
                            alt="User Image"
                          /><span class="mt-2">{{ record.CategoryName }}</span>
                        </h2>
                      </template>
                      <template v-else-if="column.key === 'AddedBy'">
                        <h2 class="table-avatar">
                          <router-link to="profile" class="avatar avatar-sm me-2"
                            ><img
                              class="avatar-img rounded-circle"
                              :src="require(`@/assets/img/profiles/${record.img1}`)"
                              alt="User Image"
                          /></router-link>
                          <router-link to="profile">{{ record.AddedBy }}</router-link>
                        </h2>
                      </template>
                      <template v-else-if="column.key === 'Status'">
                        <div class="status-toggle">
                          <input
                            :id="record.Id"
                            class="check"
                            type="checkbox"
                            checked=""
                          />
                          <label :for="record.For" class="checktoggle checkbox-bg">{{
                            record.Status
                          }}</label>
                        </div>
                      </template>
                      <template v-else-if="column.key === 'action'">
                        <a
                          class="btn-action-icon me-2"
                          href="javascript:void(0);"
                          download=""
                          ><i class="feather feather-edit"></i
                        ></a>
                        <a class="btn-action-icon" href="javascript:void(0);" download=""
                          ><i class="feather feather-trash-2"></i
                        ></a>
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
    title: "Category Name",
    dataIndex: "CategoryName",
    key: "id",
    sorter: (a, b) => a.CategoryName.localeCompare(b.CategoryName),
  },
  {
    title: "Date",
    dataIndex: "Date",
    sorter: (a, b) => a.Date.localeCompare(b.Date),
  },
  {
    title: "Added By",
    dataIndex: "AddedBy",
    key: "AddedBy",
    sorter: {
      compare: (a, b) => {
        a = a.AddedBy.toLowerCase();
        b = b.AddedBy.toLowerCase();
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
    CategoryName: "Advertising",
    Date: "25 Fb 2022, 06:12 PM",
    AddedBy: "Admin",
    Status: "checkbox",
    Id: "rating_1",
    For: "rating_1",
    img: "category-01.jpg",
    img1: "avatar-01.jpg",
  },
  {
    NUM: "2",
    CategoryName: "Food",
    Date: "19 Dec 2022, 06:12 PM",
    AddedBy: "Admin",
    Status: "checkbox",
    Id: "rating_2",
    For: "rating_2",
    img: "category-02.jpg",
    img1: "avatar-01.jpg",
  },
  {
    NUM: "3",
    CategoryName: "Marketing",
    Date: "21 Dec 2022, 06:12 PM",
    AddedBy: "Admin",
    Status: "checkbox",
    Id: "rating_3",
    For: "rating_3",
    img: "category-03.jpg",
    img1: "avatar-01.jpg",
  },
  {
    NUM: "4",
    CategoryName: "Repairs",
    Date: "30 Jan 2022, 06:12 PM",
    AddedBy: "Admin",
    Status: "checkbox",
    Id: "rating_4",
    For: "rating_4",
    img: "category-04.jpg",
    img1: "avatar-01.jpg",
  },
  {
    NUM: "5",
    CategoryName: "Software",
    Date: "19 Mar 2022, 06:12 PM",
    AddedBy: "Admin",
    Status: "checkbox",
    Id: "rating_5",
    For: "rating_5",
    img: "category-05.jpg",
    img1: "avatar-01.jpg",
  },
  {
    NUM: "6",
    CategoryName: "Stationary",
    Date: "19 Jan 2022, 06:12 PM",
    AddedBy: "Admin",
    Status: "checkbox",
    Id: "rating_6",
    For: "rating_6",
    img: "category-06.jpg",
    img1: "avatar-01.jpg",
  },
  {
    NUM: "7",
    CategoryName: "Food",
    Date: "19 Dec 2022, 06:12 PM",
    AddedBy: "Admin",
    Status: "checkbox",
    Id: "rating_7",
    For: "rating_7",
    img: "category-02.jpg",
    img1: "avatar-01.jpg",
  },
  {
    NUM: "8",
    CategoryName: "Marketing",
    Date: "21 Dec 2022, 06:12 PM",
    AddedBy: "Admin",
    Status: "checkbox",
    Id: "rating_8",
    For: "rating_8",
    img: "category-03.jpg",
    img1: "avatar-01.jpg",
  },
];
export default {
  data() {
    return {
      title: "Countries",
      path: "",
      text: "Add Countries",
      data,
      columns,
    };
  },
};
</script>
