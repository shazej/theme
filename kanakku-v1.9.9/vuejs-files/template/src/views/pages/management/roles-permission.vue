<template>
  <!-- Main Wrapper -->
  <div class="main-wrapper">
    <layout-header></layout-header>
    <layout-sidebar></layout-sidebar>

    <!-- Page Wrapper -->
    <div class="page-wrapper">
      <div class="content container-fluid">
        <ticketlistheader :title="title" :text="text" :name="name" />

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
                      <template v-if="column.key === 'Action'">
                        <div class="d-flex align-items-center">
                          <a
                            href="javascript:;"
                            class="btn btn-greys me-2"
                            data-bs-toggle="modal"
                            data-bs-target="#edit_role"
                            ><i class="fa fa-edit me-1"></i> Edit Role</a
                          >
                          <router-link to="permission" class="btn btn-greys me-2"
                            ><i class="fa fa-shield me-1"></i> Permissions</router-link>
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
    <ticketmodal></ticketmodal>
  </div>
  <!-- /Main Wrapper -->
</template>
<script>
const columns = [
  {
    title: "ID",
    dataIndex: "ID",
    sorter: (a, b) => a.ID.localeCompare(b.ID),
  },
  {
    title: "Role Name",
    dataIndex: "RoleName",
    sorter: {
      compare: (a, b) => {
        a = a.RoleName.toLowerCase();
        b = b.RoleName.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Created at",
    dataIndex: "Createdat",
    sorter: (a, b) => a.Createdat.localeCompare(b.Createdat),
  },
  {
    title: "Action",
    key: "Action",
    sorter: true,
  },
];
const data = [
  {
    ID: "1",
    RoleName: "Admin",
    Createdat: "19 Dec 2022, 06:12 PM",
  },
  {
    ID: "2",
    RoleName: "Customer",
    Createdat: "28 Nov 2022, 03:25 PM",
  },
  {
    ID: "3",
    RoleName: "Shop Owner",
    Createdat: "19 Dec 2022, 06:12 PM",
  },
  {
    ID: "4",
    RoleName: "Receptionist",
    Createdat: "9 Dec 2022, 06:12 PM",
  },
  {
    ID: "5",
    RoleName: "Shop Owner",
    Createdat: "19 Dec 2022, 06:12 PM",
  },
  {
    ID: "6",
    RoleName: "Admin",
    Createdat: "19 Dec 2022, 06:12 PM",
  },
  {
    ID: "7",
    RoleName: "Customer",
    Createdat: "28 Nov 2022, 03:25 PM",
  },
];
export default {
  setup() {
    return {
      title: "Roles & Permission",
      text: "#add_role",
      name: "New Roles",
      data,
      columns,
    };
  },
};
</script>
