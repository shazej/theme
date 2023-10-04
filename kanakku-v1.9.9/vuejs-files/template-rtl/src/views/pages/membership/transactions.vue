<template>
  <!-- Main Wrapper -->
  <div class="main-wrapper">
    <layout-header></layout-header>
    <layout-sidebar></layout-sidebar>
    <!-- Page Wrapper -->
    <div class="page-wrapper">
      <div class="content container-fluid">
        <supportheader :title="title" />

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
                      <template v-if="column.key === 'status'">
                        <span
                          class="badge badge-pill bg-success-light"
                          v-if="record.Status === 'Completed'"
                          >{{ record.Status }}</span
                        >
                        <span
                          class="badge badge-pill bg-danger-light"
                          v-else-if="record.Status === 'Cancel'"
                          >{{ record.Status }}</span
                        >
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
    title: "Type",
    dataIndex: "Type",
    sorter: {
      compare: (a, b) => {
        a = a.Type.toLowerCase();
        b = b.Type.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Amount",
    dataIndex: "Amount",
    key: "id",
    sorter: (a, b) => a.Amount.localeCompare(b.Amount),
  },
  {
    title: "Date",
    dataIndex: "Date",
    sorter: (a, b) => a.Date.localeCompare(b.Date),
  },
  {
    title: "Payment Type",
    dataIndex: "PaymentType",
    sorter: {
      compare: (a, b) => {
        a = a.PaymentType.toLowerCase();
        b = b.PaymentType.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },

  {
    title: "Status",
    dataIndex: "Status",
    key: "status",
    sorter: {
      compare: (a, b) => {
        a = a.Status.toLowerCase();
        b = b.Status.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
];
const data = [
  {
    NUM: "1",
    Type: "Wallet Topup",
    Amount: "+$650",
    Date: "19 Dec 2022, 06:12 PM",
    PaymentType: "Paypal",
    Status: "Completed",
  },
  {
    NUM: "2",
    Type: "Purchase",
    Amount: "+$350",
    Date: "19 Dec 2022, 06:12 PM",
    PaymentType: "Cash",
    Status: "Cancel",
  },
  {
    NUM: "3",
    Type: "Refund",
    Amount: "+100",
    Date: "20 Jan 2022, 06:12 PM",
    PaymentType: "Paypal",
    Status: "Completed",
  },
  {
    NUM: "4",
    Type: "Wallet Topup",
    Amount: "-$650",
    Date: "20 Jun 2022, 06:12 PM",
    PaymentType: "Cash",
    Status: "Completed",
  },
  {
    NUM: "5",
    Type: "Purchase",
    Amount: "+$350",
    Date: "19 Dec 2022, 06:12 PM",
    PaymentType: "Paypal",
    Status: "Cancel",
  },
  {
    NUM: "6",
    Type: "Refund",
    Amount: "+$100",
    Date: "15 Jan 2022, 06:12 PM",
    PaymentType: "Cash",
    Status: "Cancel",
  },
  {
    NUM: "7",
    Type: "Wallet Topup",
    Amount: "+$650",
    Date: "19 Dec 2022, 06:12 PM",
    PaymentType: "Paypal",
    Status: "Completed",
  },
  {
    NUM: "8",
    Type: "Purchase",
    Amount: "+$350",
    Date: "19 Dec 2022, 06:12 PM",
    PaymentType: "Cash",
    Status: "Cancel",
  },
  {
    NUM: "9",
    Type: "Refund",
    Amount: "+100",
    Date: "20 Jan 2022, 06:12 PM",
    PaymentType: "Paypal",
    Status: "Completed",
  },
  {
    NUM: "10",
    Type: "Purchase",
    Amount: "+$350",
    Date: "19 Dec 2022, 06:12 PM",
    PaymentType: "Paypal",
    Status: "Cancel",
  },
];
export default {
  data() {
    return {
      title: "Transactions",
      data,
      columns,
    };
  },
};
</script>
