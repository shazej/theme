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
            <div class="card-body">
              <div class="form-group-item">
                <h5 class="form-title">Basic Details</h5>
                <div class="row">
                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="form-group">
                      <label>Item Type</label>
                      <div class="align-center">
                        <div class="form-control me-3">
                          <label class="custom_radio me-3 mb-0">
                            <input
                              type="radio"
                              class="form-control"
                              name="payment"
                              checked
                            />
                            <span class="checkmark"></span> Product
                          </label>
                        </div>
                        <div class="form-control">
                          <label class="custom_radio mb-0">
                            <input type="radio" name="payment" />
                            <span class="checkmark"></span> Service
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="form-group">
                      <label>Name</label>
                      <b-form-input
                        type="text"
                        class="form-control"
                        placeholder="Enter Item Name"
                      />
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="form-group">
                      <label>Item Category</label>
                      <vue-select
                        :options="Category"
                        placeholder="Select Item Category"
                      />
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="form-group">
                      <label>Price</label>
                      <input
                        type="number"
                        class="form-control"
                        placeholder="Enter Item Price"
                        name="name"
                      />
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="form-group">
                      <label>Units</label>
                      <vue-select :options="Units" placeholder="Select Units" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group-item">
                <div class="form-group">
                  <h5 class="form-title">Additional Details</h5>
                </div>
                <div class="row">
                  <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                    <div class="form-group">
                      <label>Generate Barcode</label>
                      <b-form-input
                        type="text"
                        class="form-control"
                        placeholder="Enter Barcode Number"
                      />
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                    <div class="form-group">
                      <label>Purchase Price Without Tax</label>
                      <input type="text" class="form-control" placeholder="Enter Amout" />
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                    <div class="form-group">
                      <label>Purchase Price With Tax</label>
                      <b-form-input
                        type="text"
                        class="form-control"
                        placeholder="Enter Tax Amount"
                      />
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                    <div class="form-group">
                      <label>Quantity</label>
                      <b-form-input type="text" class="form-control" placeholder="eg 10" />
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                    <div class="form-group summernote_Editor" id="summernote_container">
                      <label class="form-control-label">Details</label>
                      <SummernoteEditor
                        v-model="myValue"
                        @update:modelValue="summernoteChange($event)"
                        @summernoteImageLinkInsert="summernoteImageLinkInsert"
                      />
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                    <div class="form-group">
                      <label>Image</label>
                      <div class="form-group service-upload mb-0">
                        <span
                          ><img src="@/assets/img/icons/drop-icon.svg" alt="upload"
                        /></span>
                        <h6 class="drop-browse align-center">
                          Drop your files here or<span class="text-primary ms-1"
                            >browse</span
                          >
                        </h6>
                        <p class="text-muted">Maximum size: 50MB</p>
                        <input type="file" multiple="" id="image_sign" />
                        <div id="frames"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group-item border-0 pb-0">
                <div class="form-group">
                  <h5 class="form-title">Discount Details</h5>
                </div>
                <div class="row">
                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="form-group">
                      <label>Discount (%)</label>
                      <ul class="form-group-plus css-equal-heights">
                        <li>
                          <vue-select
                            :options="Amount"
                            placeholder="Enter Discount Amount"
                          />
                        </li>
                        <li>
                          <span class="btn btn-gray form-plus-btn">%</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="form-group">
                      <label>Discount Amount</label>
                      <b-form-input
                        type="text"
                        class="form-control"
                        placeholder="Enter Discount Amount"
                      />
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="form-group">
                      <label>Minimum Stock Qty</label>
                      <b-form-input type="text" class="form-control" placeholder="eg 10" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-end">
                <button type="reset" class="btn btn-primary cancel me-2">Cancel</button>
                <b-button type="submit" variant="primary">Add Item</b-button>
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
import SummernoteEditor from "vue3-summernote-editor";
export default {
  components: {
    SummernoteEditor,
  },
  data() {
    return {
      myValue: "Discription",
      title: "Add Products / Services",
      Category: ["Select Item Category", "Category 1", "Category 2", "Category 3"],
      Units: ["Select Units", "Pieces", "Box", "Kilograms"],
      Amount: ["Enter Discount Amount", "5%", "10%", "15%"],
    };
  },
  methods: {
    summernoteChange(newValue) {
      console.log("summernoteChange", newValue);
    },
    summernoteImageLinkInsert(...args) {
      console.log("summernoteImageLinkInsert()", args);
    },
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
