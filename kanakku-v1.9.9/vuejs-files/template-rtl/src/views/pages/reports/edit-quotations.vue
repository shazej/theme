<template>
  <!-- Main Wrapper -->
  <div class="main-wrapper">
    <layout-header></layout-header>
    <layout-sidebar></layout-sidebar>
    <!-- Page Wrapper -->
    <div class="page-wrapper">
      <div class="content container-fluid">
        <componentheader :title="title" />

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <div class="form-group-item border-0 mb-0">
                  <div class="row align-item-center">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="form-group">
                        <label>Quotations Number</label>
                        <input
                          type="text"
                          class="form-control"
                          value="10001"
                          placeholder="Enter Quotations Number"
                        />
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="form-group">
                        <label>Customer Name</label>
                        <input
                          type="text"
                          class="form-control"
                          value="John Smith"
                          placeholder="Enter Customer Name"
                        />
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="form-group">
                        <label>Quotations Date</label>
                        <input
                          type="text"
                          class="form-control"
                          value="19 Dec 2022"
                          placeholder="Quotations Date"
                        />
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="form-group">
                        <label>Due Date</label>
                        <input
                          type="text"
                          class="form-control"
                          value="20 Dec 2022"
                          placeholder="Invoice Date"
                        />
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="form-group">
                        <label>Reference No</label>
                        <input
                          type="text"
                          class="form-control"
                          value="12345"
                          placeholder="Reference No"
                        />
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="form-group">
                        <label>Enable Option</label>
                        <input
                          type="text"
                          class="form-control"
                          value="Recurring Invoice"
                          placeholder="Invoice Option"
                        />
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label>Products</label>
                        <input
                          type="text"
                          class="form-control"
                          value="Lorem ipsum dolor sit amet"
                          placeholder="Products"
                        />
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="form-group">
                        <label>Currency</label>
                        <input
                          type="text"
                          class="form-control"
                          value="US dollar"
                          placeholder="Currency"
                        />
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="form-group">
                        <label>Website</label>
                        <input
                          type="text"
                          class="form-control"
                          value="www.example.com"
                          placeholder="Enter Website Address"
                        />
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="form-group">
                        <label>Notes</label>
                        <input
                          type="text"
                          class="form-control"
                          value="Lorem ipsum dolor sit amet"
                          placeholder="Enter Your Notes"
                        />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group-item">
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
                            <template v-if="column.key === 'action'">
                              <a
                                href="javascript:;"
                                class="btn-action-icon me-2"
                                data-bs-toggle="modal"
                                data-bs-target="#add_discount"
                                ><span><i class="feather feather-edit"></i></span
                              ></a>
                              <a
                                href="javascript:;"
                                class="btn-action-icon"
                                data-bs-toggle="modal"
                                data-bs-target="#delete_discount"
                                ><span><i class="feather feather-trash-2"></i></span
                              ></a>
                            </template>
                          </template>
                        </a-table>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group-item border-0 p-0">
                  <div class="row">
                    <div class="col-xl-6 col-lg-12">
                      <div class="form-group-bank">
                        <div class="form-group">
                          <label>Select Bank</label>
                          <div class="bank-details">
                            <a
                              class="text-danger-light"
                              href="javascript:;"
                              data-bs-toggle="modal"
                              data-bs-target="#bank_details"
                              ><i class="fas fa-bank me-2"></i>Edit Bank Details</a
                            >
                          </div>
                        </div>
                        <div class="form-group notes-form-group-info">
                          <label>Notes</label>
                          <textarea
                            class="form-control"
                            placeholder="Enter Notes"
                          ></textarea>
                        </div>
                        <div class="form-group notes-form-group-info mb-0">
                          <label>Terms and Conditions</label>
                          <textarea
                            class="form-control"
                            placeholder="Enter Terms and Conditions"
                          ></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-12">
                      <div class="form-group-bank">
                        <div class="row">
                          <div class="col-lg-4 col-md-12">
                            <div class="form-group">
                              <label>Discount Type</label>
                              <input
                                type="text"
                                class="form-control"
                                value="5%"
                                placeholder="10"
                              />
                            </div>
                          </div>
                          <div class="col-lg-4 col-md-12">
                            <div class="form-group">
                              <label>Discount (%)</label>
                              <input
                                type="text"
                                class="form-control"
                                value="10%"
                                placeholder="10"
                              />
                            </div>
                          </div>
                          <div class="col-lg-4 col-md-12">
                            <div class="form-group">
                              <label>Total discount</label>
                              <input
                                type="text"
                                class="bg-white-smoke form-control"
                                value="15%"
                                placeholder="13.2"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="invoice-total-box">
                          <div class="invoice-total-inner">
                            <p>Taxable Amount <span>$120.00</span></p>
                            <p>Discount <span>$13.00</span></p>
                            <p>Vat <span>$10.00</span></p>
                          </div>
                          <div class="invoice-total-footer">
                            <h4>Total Amount <span>$143.00</span></h4>
                          </div>
                        </div>
                        <div class="form-group">
                          <label>Signature Name</label>
                          <input
                            type="text"
                            class="form-control"
                            placeholder="Enter Signature Name"
                          />
                        </div>
                        <div class="form-group mb-0">
                          <label>Signature Image</label>
                          <input
                            type="text"
                            class="form-control"
                            value="John Smith"
                            placeholder="10"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="add-customer-btns text-end">
                  <a href="javascript:;" class="btn customer-btn-cancel">Cancel</a>
                  <a href="javascript:;" class="btn customer-btn-save">Update</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /Page Wrapper -->
    <pagemodal :banktitle="banktitle" />
  </div>
  <!-- /Main Wrapper -->
</template>
<script>
const columns = [
  {
    title: "Product / Service",
    dataIndex: "Product",
    sorter: {
      compare: (a, b) => {
        a = a.Product.toLowerCase();
        b = b.Product.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Quantity",
    dataIndex: "Quantity",
    sorter: (a, b) => a.Quantity.localeCompare(b.Quantity),
  },
  {
    title: "Unit",
    dataIndex: "Unit",
    sorter: (a, b) => a.Unit.localeCompare(b.Unit),
  },
  {
    title: "Rate",
    dataIndex: "Rate",
    sorter: {
      compare: (a, b) => {
        a = a.Rate.toLowerCase();
        b = b.Rate.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Discount",
    dataIndex: "Discount",
    sorter: {
      compare: (a, b) => {
        a = a.Discount.toLowerCase();
        b = b.Discount.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Tax",
    dataIndex: "Tax",
    sorter: {
      compare: (a, b) => {
        a = a.Tax.toLowerCase();
        b = b.Tax.toLowerCase();
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
    title: "Action",
    key: "action",
    sorter: true,
  },
];
const data = [
  {
    Product: "Lorem ipsum dolor sit amet",
    Quantity: "0",
    Unit: "Pcs",
    Rate: "$120.00",
    Discount: "0",
    Tax: "0",
    Amount: "$120.00",
    Action: "",
  },
];
export default {
  data() {
    return {
      banktitle: "Edit Bank Details",
      title: "Edit Quotations",
      data,
      columns,
    };
  },
};
</script>
