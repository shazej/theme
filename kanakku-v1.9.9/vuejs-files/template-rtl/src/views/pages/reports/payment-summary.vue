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
                      <template v-if="column.key === 'Customer'">
                        <h2 class="table-avatar">
                          <router-link to="profile" class="avatar avatar-sm me-2"
                            ><img
                              class="avatar-img rounded-circle"
                              :src="require(`@/assets/img/profiles/${record.img}`)"
                              alt="User Image"
                          /></router-link>
                          <router-link to="profile"
                            >{{ record.Customer
                            }}<span>{{ record.number }}</span></router-link
                          >
                        </h2>
                      </template>
                      <template v-else-if="column.key === 'id'">
                        <router-link to="invoice-details" class="invoice-link">{{
                          record.InvoiceNumber
                        }}</router-link>
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
    title: "Transaction ID",
    dataIndex: "TransactionID",

    sorter: {
      compare: (a, b) => {
        a = a.TransactionID.toLowerCase();
        b = b.TransactionID.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Invoice Number",
    dataIndex: "InvoiceNumber",
    key: "id",
    sorter: (a, b) => a.InvoiceNumber.localeCompare(b.InvoiceNumber),
  },
  {
    title: "Customer",
    dataIndex: "Customer",
    key: "Customer",
    sorter: {
      compare: (a, b) => {
        a = a.Customer.toLowerCase();
        b = b.Customer.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
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
    title: "Payment Method",
    dataIndex: "PaymentMethod",
    sorter: {
      compare: (a, b) => {
        a = a.PaymentMethod.toLowerCase();
        b = b.PaymentMethod.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
];
const data = [
  {
    NUM: "1",
    img: "avatar-02.jpg",
    TransactionID: "137370531",
    InvoiceNumber: "#4987",
    Customer: "John Smith",
    number: "+1 843-443-3282",
    Amount: "$1,54,220",
    Date: "19 Dec 2022, 06:12 PM",
    PaymentMethod: "Cash",
  },
  {
    NUM: "2",
    img: "avatar-03.jpg",
    TransactionID: "137370532",
    InvoiceNumber: "#4988",
    Customer: "Johnny",
    number: "+1 917-409-0861",
    Amount: "$2,54,220",
    Date: "19 Dec 2022, 06:12 PM",
    PaymentMethod: "Cheque",
  },
  {
    NUM: "3",
    img: "avatar-04.jpg",
    TransactionID: "137370533",
    InvoiceNumber: "#4989",
    Customer: "Robert",
    number: "+1 956-623-2880",
    Amount: "$3,54,220",
    Date: "19 Dec 2022, 06:12 PM",
    PaymentMethod: "Cash",
  },
  {
    NUM: "4",
    img: "avatar-05.jpg",
    TransactionID: "137370534",
    InvoiceNumber: "#4990",
    Customer: "Sharonda",
    number: "+1 707-439-1732",
    Amount: "$4,54,220",
    Date: "19 Dec 2022, 06:12 PM",
    PaymentMethod: "Cheque",
  },
  {
    NUM: "5",
    img: "avatar-07.jpg",
    TransactionID: "137370535",
    InvoiceNumber: "#4991",
    Customer: "Randall",
    number: "+1 559-741-9672",
    Amount: "$5,54,220",
    Date: "19 Dec 2022, 06:12 PM",
    PaymentMethod: "Cheque",
  },
  {
    NUM: "6",
    img: "avatar-06.jpg",
    TransactionID: "137370536",
    InvoiceNumber: "#4992",
    Customer: "Pricilla",
    number: "+1 989-438-3131",
    Amount: "$4,54,220",
    Date: "19 Dec 2022, 06:12 PM",
    PaymentMethod: "Cheque",
  },
  {
    NUM: "7",
    img: "avatar-02.jpg",
    TransactionID: "137370532",
    InvoiceNumber: "#4988",
    Customer: "John Smith",
    number: "+1 843-443-3282",
    Amount: "$1,54,220",
    Date: "19 Dec 2022, 06:12 PM",
    PaymentMethod: "Cash",
  },
  {
    NUM: "8",
    img: "avatar-03.jpg",
    TransactionID: "137370533",
    InvoiceNumber: "#4989",
    Customer: "Johnny",
    number: "+1 917-409-0861",
    Amount: "$2,54,220",
    Date: "19 Dec 2022, 06:12 PM",
    PaymentMethod: "Cheque",
  },
  {
    NUM: "9",
    img: "avatar-04.jpg",
    TransactionID: "1373705334",
    InvoiceNumber: "#4990",
    Customer: "Robert",
    number: "+1 956-623-2880",
    Amount: "$3,54,220",
    Date: "19 Dec 2022, 06:12 PM",
    PaymentMethod: "Cash",
  },
];
export default {
  setup() {
    return {
      title: "Payment Summary",
      title1: "Payment Summary",
      data,
      columns,
    };
  },
};
</script>
