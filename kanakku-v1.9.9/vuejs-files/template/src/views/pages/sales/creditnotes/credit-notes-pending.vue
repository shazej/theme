<template>
  <!-- Main Wrapper -->
  <div class="main-wrapper">
    <layout-header></layout-header>
    <layout-sidebar></layout-sidebar>

    <!-- Page Wrapper -->
    <div class="page-wrapper">
      <div class="content container-fluid">
        <blogheader :title="title" :path="path" :text="text" />
        <credit-tab />
        <!-- Table -->
        <div class="row">
          <div class="col-sm-12">
            <div class="card-table">
              <div class="card-body">
                <div class="table-responsive">
                  <a-table :columns="columns" :data-source="data" @change="onChange">
                    <template #bodyCell="{ column, record }">
                      <template v-if="column.key === 'ID'">
                        <router-link to="credit-notes-details" class="invoice-link">{{
                          record.CreditNotesID
                        }}</router-link></template
                      >
                      <template v-else-if="column.key === 'Customer'">
                        <h2 class="table-avatar">
                          <router-link to="profile" class="avatar avatar-sm me-2">
                            <img
                              class="avatar-img rounded-circle"
                              :src="require(`@/assets/img/profiles/${record.img}`)"
                              alt="User Image"
                          /></router-link>
                          <router-link to="profile"
                            >{{ record.Customer
                            }}<span>{{ record.email }}</span></router-link
                          >
                        </h2></template
                      >
                      <template v-else-if="column.key === 'Status'">
                        <span class="badge bg-warning-light text-warning-light">{{
                          record.Status
                        }}</span>
                      </template>
                      <template v-else-if="column.key === 'Action'">
                        <div class="d-flex align-items-center">
                          <a
                            class="btn-action-icon me-2"
                            href="javascript:void(0);"
                            download
                            ><i class="feather feather-download"></i
                          ></a>
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
                                    to="edit-credit-notes"
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
                                <li>
                                  <router-link
                                    class="dropdown-item"
                                    to="credit-notes-details"
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
    key: "NUM",
    sorter: {
      compare: (a, b) => {
        a = a.NUM.toLowerCase();
        b = b.NUM.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Credit Notes ID",
    dataIndex: "CreditNotesID",
    key: "ID",
    sorter: {
      compare: (a, b) => {
        a = a.CreditNotesID.toLowerCase();
        b = b.CreditNotesID.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Customer",
    dataIndex: "Customer",
    key: "Customer",
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
    class: "text-end",
    sorter: true,
  },
];
const data = [
  {
    NUM: "1",
    CreditNotesID: "#4987",
    img: "avatar-01.jpg",
    email: "john@example.com",
    Customer: "John Smith",
    Amount: "$1,54,220",
    PaymentMode: "Cash",
    CreatedOn: "23 Mar 2023",
    Status: "Pending",
  },
  {
    NUM: "2",
    CreditNotesID: "#4988",
    img: "avatar-02.jpg",
    email: "robert@example.com",
    Customer: "Robert",
    Amount: "$1,54,220",
    PaymentMode: "Cash",
    CreatedOn: "23 Mar 2023",
    Status: "Pending",
  },
  {
    NUM: "3",
    CreditNotesID: "#4989",
    img: "avatar-03.jpg",
    email: "johnny@example.com",
    Customer: "Johnny",
    Amount: "$1,54,220",
    PaymentMode: "Cash",
    CreatedOn: "23 Mar 2023",
    Status: "Pending",
  },
  {
    NUM: "4",
    CreditNotesID: "#4990",
    img: "avatar-06.jpg",
    email: "randall@example.com",
    Customer: "Randall",
    Amount: "$1,54,220",
    PaymentMode: "Cash",
    CreatedOn: "23 Mar 2023",
    Status: "Pending",
  },
  {
    NUM: "5",
    CreditNotesID: "#4991",
    img: "avatar-08.jpg",
    email: "russell@example.com",
    Customer: "Russell Copeland",
    Amount: "$1,54,220",
    PaymentMode: "Cash",
    CreatedOn: "23 Mar 2023",
    Status: "Pending",
  },
  {
    NUM: "6",
    CreditNotesID: "#4992",
    img: "avatar-09.jpg",
    email: "barbara@example.com",
    Customer: "Barbara Moore",
    Amount: "$1,54,220",
    PaymentMode: "Cash",
    CreatedOn: "23 Mar 2023",
    Status: "Pending",
  },
  {
    NUM: "7",
    CreditNotesID: "#4993",
    img: "avatar-01.jpg",
    email: "john@example.com",
    Customer: "John Smith",
    Amount: "$1,54,220",
    PaymentMode: "Cash",
    CreatedOn: "23 Mar 2023",
    Status: "Pending",
  },
  {
    NUM: "8",
    CreditNotesID: "#4994",
    img: "avatar-02.jpg",
    email: "robert@example.com",
    Customer: "Robert",
    Amount: "$1,54,220",
    PaymentMode: "Cash",
    CreatedOn: "23 Mar 2023",
    Status: "Pending",
  },
  {
    NUM: "9",
    CreditNotesID: "#4995",
    img: "avatar-03.jpg",
    email: "johnny@example.com",
    Customer: "Johnny",
    Amount: "$1,54,220",
    PaymentMode: "Cash",
    CreatedOn: "23 Mar 2023",
    Status: "Pending",
  },
];
export default {
  setup() {
    return {
      title: "Credit Notes Pending",
      path: "add-credit-notes",
      text: "Credit Notes",
      title1: "Delete Credit Notes",
      data,
      columns,
    };
  },
};
</script>
