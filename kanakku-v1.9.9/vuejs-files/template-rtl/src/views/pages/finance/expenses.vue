<template>
  <!-- Main Wrapper -->
  <div class="main-wrapper">
    <layout-header></layout-header>
    <layout-sidebar></layout-sidebar>

    <!-- Page Wrapper -->
    <div class="page-wrapper">
      <div class="content container-fluid">
        <locationheader :title="title" :txt="txt" :text="text" />

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
                      <template v-if="column.key === 'ExpenseID'">
                        <router-link to="invoice-details" class="invoice-link"
                          >EXP-148061</router-link
                        >
                      </template>
                      <template v-else-if="column.key === 'Attachment'">
                        <h2 class="table-avatar">
                          <img
                            class="avatar-img rounded"
                            width="30"
                            height="30"
                            src="@/assets/img/category/expenses-01.jpg"
                            alt="User Image"
                          />
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
                                  <a
                                    class="dropdown-item"
                                    href="javascript:void(0);"
                                    data-bs-toggle="modal"
                                    data-bs-target="#edit_expenses"
                                    ><i class="far fa-edit me-2"></i>Edit</a
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
    sorter: (a, b) => a.NUM.localeCompare(b.NUM),
  },
  {
    title: "Expense ID",
    key: "ExpenseID",
    dataIndex: "ExpenseID",
    sorter: (a, b) => a.ExpenseID.localeCompare(b.ExpenseID),
  },
  {
    title: "Reference",
    dataIndex: "Reference",
    sorter: {
      compare: (a, b) => {
        a = a.Reference.toLowerCase();
        b = b.Reference.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Amount",
    dataIndex: "Amount",
    sorter: (a, b) => a.Amount.localeCompare(b.Amount),
  },
  {
    title: "Attachment",
    dataIndex: "Attachment",
    key: "Attachment",
    sorter: {
      compare: (a, b) => {
        a = a.Attachment.toLowerCase();
        b = b.Attachment.toLowerCase();
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
    title: "Notes",
    dataIndex: "Notes",
    sorter: {
      compare: (a, b) => {
        a = a.Notes.toLowerCase();
        b = b.Notes.toLowerCase();
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
        a = a.Assignee.toLowerCase();
        b = b.Assignee.toLowerCase();
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
    ExpenseID: "EXP-148061",
    Reference: "#25689825",
    Amount: "$1,54,220",
    Attachment: "",
    PaymentMode: "Cash",
    Notes: "Lorem ipsum dolor sit consectetur",
    Status: "Paid",
  },
  {
    NUM: "2",
    ExpenseID: "EXP-148062",
    Reference: "#25689826",
    Amount: "$1,222",
    Attachment: "",
    PaymentMode: "Cheque",
    Notes: "Lorem ipsum dolor sit consectetur",
    Status: "Pending",
  },
  {
    NUM: "3",
    ExpenseID: "EXP-148063",
    Reference: "#25689827",
    Amount: "$2,2222",
    Attachment: "",
    PaymentMode: "Cheque",
    Notes: "Lorem ipsum dolor sit consectetur",
    Status: "Cancelled",
  },
  {
    NUM: "4",
    ExpenseID: "EXP-148064",
    Reference: "#25689828",
    Amount: "$5,222",
    Attachment: "",
    PaymentMode: "Cash",
    Notes: "Lorem ipsum dolor sit consectetur",
    Status: "Pending",
  },
  {
    NUM: "5",
    ExpenseID: "EXP-148065",
    Reference: "#25689829",
    Amount: "$8,54,220",
    Attachment: "",
    PaymentMode: "Cheque",
    Notes: "Lorem ipsum dolor sit consectetur",
    Status: "Paid",
  },
  {
    NUM: "6",
    ExpenseID: "EXP-148066",
    Reference: "#25689830",
    Amount: "$3,54,220",
    Attachment: "",
    PaymentMode: "Cheque",
    Notes: "Lorem ipsum dolor sit consectetur",
    Status: "Paid",
  },
  {
    NUM: "7",
    ExpenseID: "EXP-148067",
    Reference: "#25689831",
    Amount: "$1,54,220",
    Attachment: "",
    PaymentMode: "Cash",
    Notes: "Lorem ipsum dolor sit consectetur",
    Status: "Paid",
  },
  {
    NUM: "8",
    ExpenseID: "EXP-148067",
    Reference: "#25689832",
    Amount: "$1,222",
    Attachment: "",
    PaymentMode: "Cheque",
    Notes: "Lorem ipsum dolor sit consectetur",
    Status: "Pending",
  },
  {
    NUM: "9",
    ExpenseID: "EXP-148068",
    Reference: "#25689833",
    Amount: "$2,2222",
    Attachment: "",
    PaymentMode: "Cheque",
    Notes: "Lorem ipsum dolor sit consectetur",
    Status: "Cancelled",
  },
];
export default {
  setup() {
    return {
      title: "Expenses",
      title1: "Delete Expenses",
      text: "Add Expenses",
      txt: "#add_expenses",
      data,
      columns,
    };
  },
};
</script>
