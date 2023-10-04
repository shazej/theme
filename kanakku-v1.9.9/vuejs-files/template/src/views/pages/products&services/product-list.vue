<template>
  <div class="main-wrapper">
    <layout-header></layout-header>
    <layout-sidebar></layout-sidebar>

    <!-- Page Wrapper -->
    <div class="page-wrapper">
      <div class="content container-fluid">
        <productlistheader />

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

        <!-- All Invoice -->
        <div class="card invoices-tabs-card">
          <div class="invoices-main-tabs">
            <div class="row align-items-center">
              <div class="col-lg-12">
                <div class="invoices-tabs">
                  <ul>
                    <li>
                      <router-link to="/product-list" class="active">Product</router-link>
                    </li>
                    <li>
                      <router-link to="/category">Category</router-link>
                    </li>
                    <li>
                      <router-link to="/units">Units</router-link>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /All Invoice -->

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
                      <template v-if="column.key === 'PurchasePrice'">
                        <div>{{ record.PurchasePrice }}</div>
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
                                  <router-link class="dropdown-item" to="/edit-products"
                                    ><i class="far fa-edit me-2"></i>Edit</router-link
                                  >
                                </li>
                                <li>
                                  <a
                                    class="dropdown-item"
                                    href="javascript:;"
                                    data-bs-toggle="modal"
                                    data-bs-target="#delete_modal"
                                    ><i class="far fa-trash-alt me-2"></i>Delete
                                  </a>
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
  </div>
  <locationmodal :title1="title1" />
</template>

<script>
const columns = [
  {
    title: "#",
    dataIndex: "NUM",
    sorter: (a, b) => a.NUM.localeCompare(b.NUM),
  },
  {
    title: "Item",
    key: "Item",
    dataIndex: "Item",
    sorter: (a, b) => a.Item.localeCompare(b.Item),
  },
  {
    title: "Code",
    dataIndex: "Code",
    sorter: {
      compare: (a, b) => {
        a = a.Code.toLowerCase();
        b = b.Code.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Category",
    dataIndex: "Category",
    sorter: {
      compare: (a, b) => {
        a = a.Category.toLowerCase();
        b = b.Category.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Units",
    dataIndex: "Units",
    sorter: (a, b) => a.Units.localeCompare(b.Units),
  },
  {
    title: "Quantity",
    dataIndex: "Quantity",
    sorter: {
      compare: (a, b) => {
        a = a.Quantity.toLowerCase();
        b = b.Quantity.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Sales Price",
    dataIndex: "SalesPrice",
    sorter: {
      compare: (a, b) => {
        a = a.SalesPrice.toLowerCase();
        b = b.SalesPrice.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Purchase Price",
    dataIndex: "PurchasePrice",
    key: "PurchasePrice",
    sorter: {
      compare: (a, b) => {
        a = a.PurchasePrice.toLowerCase();
        b = b.PurchasePrice.toLowerCase();
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
    NUM: 1,
    Item: "Lorem ipsum dolor sit",
    Code: "P125389",
    Category: "Duis aute irure",
    Units: "Inches",
    Quantity: 2,
    SalesPrice: "$253.00",
    PurchasePrice: "$248.00",
  },
  {
    NUM: 2,
    Item: "Lorem ipsum dolor sit",
    Code: "P125390",
    Category: "At vero eos et",
    Units: "Pieces",
    Quantity: 4,
    SalesPrice: "$360.00",
    PurchasePrice: "$350.00",
  },
  {
    NUM: 3,
    Item: "Sed ut perspiciatis unde",
    Code: "P125391",
    Category: "Et harum quidem rerum",
    Units: "Inches",
    Quantity: 7,
    SalesPrice: "$724.00",
    PurchasePrice: "$700.00",
  },
  {
    NUM: 4,
    Item: "Nemo enim ipsam",
    Code: "P125392",
    Category: "Nam libero tempore",
    Units: "Box",
    Quantity: 3,
    SalesPrice: "$210.00",
    PurchasePrice: "$200.00",
  },
  {
    NUM: 5,
    Item: "Neque porro quisquam",
    Code: "P125393",
    Category: "Temporibus autem",
    Units: "Kilograms",
    Quantity: 1,
    SalesPrice: "$155.00",
    PurchasePrice: "$150.00",
  },
  {
    NUM: 6,
    Item: "Nemo enim ipsam",
    Code: "P125394",
    Category: "Duis aute irure",
    Units: "Inches",
    Quantity: 2,
    SalesPrice: "$253.00",
    PurchasePrice: "$248.00",
  },
  {
    NUM: 7,
    Item: "Lorem ipsum dolor sit",
    Code: "P125395",
    Category: "Duis aute irure",
    Units: "Inches",
    Quantity: 2,
    SalesPrice: "$253.00",
    PurchasePrice: "$248.00",
  },
  {
    NUM: 8,
    Item: "Lorem ipsum dolor sit",
    Code: "P125396",
    Category: "At vero eos et",
    Units: "Pieces",
    Quantity: 4,
    SalesPrice: "$360.00",
    PurchasePrice: "$350.00",
  },
  {
    NUM: 9,
    Item: "Sed ut perspiciatis unde",
    Code: "P125397",
    Category: "Et harum quidem rerum",
    Units: "Inches",
    Quantity: 7,
    SalesPrice: "$724.00",
    PurchasePrice: "$700.00",
  },
];

import { ref } from "vue";
const currentDate = ref(new Date());
export default {
  setup() {
    return {
      title1: "Delete Products / Services",
      startdate: currentDate,
      data,
      columns,
    };
  },
};
</script>
