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
                        <label>Invoice Number</label>
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Enter First Name"
                        />
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="form-group">
                        <label>Customer Name</label>
                        <ul class="form-group-plus css-equal-heights">
                          <li>
                            <vue-select
                              :options="Customer"
                              placeholder="Choose Customer"
                            />
                          </li>
                          <li>
                            <router-link
                              class="btn btn-primary form-plus-btn"
                              to="add-customer"
                            >
                              <i class="feather feather-plus-circle"></i>
                            </router-link>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="form-group">
                        <label>Invoice Date</label>
                        <div class="cal-icon">
                          <datepicker
                            v-model="startdate"
                            class="picker"
                            :editable="true"
                            :clearable="false"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="form-group">
                        <label>Due Date</label>
                        <div class="cal-icon">
                          <datepicker
                            v-model="startdate"
                            class="picker"
                            :editable="true"
                            :clearable="false"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="form-group">
                        <label>Reference No</label>
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Enter Reference Number"
                        />
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="form-group d-flex align-items-end h-100">
                        <label class="custom_check me-3">
                          <input type="checkbox" name="invoice" />
                          <span class="checkmark"></span> Enable tax
                        </label>
                        <label class="custom_check">
                          <input type="checkbox" name="re_invoice" />
                          <span class="checkmark"></span> Recurring Invoice
                        </label>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label>Products</label>
                        <ul class="form-group-plus css-equal-heights">
                          <li>
                            <vue-select :options="Product" placeholder="Select Product" />
                          </li>
                          <li>
                            <router-link
                              class="btn btn-primary form-plus-btn"
                              to="add-products"
                            >
                              <i class="feather feather-plus-circle"></i>
                            </router-link>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="form-group">
                        <label>Currency</label>
                        <vue-select :options="Currency" placeholder="Select Currency" />
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="form-group">
                        <label>Website</label>
                        <input
                          type="text"
                          class="form-control"
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
                              ><i class="fas fa-bank me-2"></i>Add Bank Details</a
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
                              <vue-select
                                :options="Percentage"
                                placeholder="Percentage(%)"
                              />
                            </div>
                          </div>
                          <div class="col-lg-4 col-md-12">
                            <div class="form-group">
                              <label>Discount (%)</label>
                              <input type="text" class="form-control" placeholder="10" />
                            </div>
                          </div>
                          <div class="col-lg-4 col-md-12">
                            <div class="form-group">
                              <label>Total discount</label>
                              <input
                                type="text"
                                class="bg-white-smoke form-control"
                                placeholder="13.2"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="invoice-total-box">
                          <div class="invoice-total-inner">
                            <p>Taxable Amount <span>$120.00</span></p>
                            <p>Discount <span>$13.20</span></p>
                            <p>Vat <span>$0.00</span></p>
                            <div class="status-toggle justify-content-between">
                              <div class="d-flex align-center">
                                <p>Round Off</p>
                                <input
                                  id="rating_1"
                                  class="check"
                                  type="checkbox"
                                  checked=""
                                />
                                <label for="rating_1" class="checktoggle checkbox-bg"
                                  >checkbox</label
                                >
                              </div>
                              <span>$0.00</span>
                            </div>
                          </div>
                          <div class="invoice-total-footer">
                            <h4>Total Amount <span>$107.80</span></h4>
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
                          <div class="form-group service-upload service-upload-info mb-0">
                            <span
                              ><i class="feather feather-upload-cloud me-1"></i>Upload
                              Signature</span
                            >
                            <input type="file" multiple="" id="image_sign" />
                            <div id="frames"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="add-customer-btns text-end">
                  <button type="reset" class="btn btn-primary cancel me-2">Cancel</button>
                  <b-button type="submit" variant="primary">Save Changes</b-button>
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
import { ref } from "vue";
const currentDate = ref(new Date());
export default {
  data() {
    return {
      startdate: currentDate,
      banktitle: "Add Bank Details",
      title: "Add Invoice",
      Customer: ["Choose Customer", "Customer 1", "Customer 2", "Customer 3"],
      GST: ["Without GST", "With GST"],
      Product: ["Select Product", "Product 1", "Product 2", "Product 3"],
      Percentage: ["Percentage(%)", "0%", "5%", "10%", "15%"],
      Currency: ["Select Currency", "US dollar", "Euro", "Pound sterling", "Swiss franc"],
      data,
      columns,
    };
  },
  mounted() {
    document.addEventListener("DOMContentLoaded", function () {
      const imageSign = document.querySelector("#image_sign");
      imageSign.addEventListener("change", function () {
        const frames = document.querySelector("#frames");
        frames.innerHTML = "";
        for (let i = 0; i < this.files.length; i++) {
          const img = document.createElement("img");
          img.src = window.URL.createObjectURL(this.files[i]);
          img.width = "100";
          img.height = "100";
          frames.appendChild(img);
        }
      });
    });
  },
};
</script>
