<template>
  <!-- Main Wrapper -->
  <div class="main-wrapper">
    <layout-header></layout-header>
    <layout-sidebar></layout-sidebar>

    <!-- Page Wrapper -->
    <div class="page-wrapper">
      <div class="content container-fluid">
        <div class="content-page-header">
          <h5>{{ title }}</h5>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card-body">
              <div class="form-group-item border-0 pb-0">
                <div class="row">
                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="form-group">
                      <label>Expense ID</label>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Enter Expense ID"
                      />
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="form-group">
                      <label>Reference</label>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Enter Last Name"
                      />
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="form-group">
                      <label>Amount </label>
                      <input
                        type="number"
                        class="form-control"
                        placeholder="Enter Amount"
                      />
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="form-group">
                      <label>Payment Mode</label>
                      <vue-select :options="Mode" placeholder="Select Payment Mode" />
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="form-group">
                      <label>Expense Date </label>
                      <datepicker
                        v-model="startdate"
                        class="picker"
                        :editable="true"
                        :clearable="false"
                      />
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="form-group">
                      <label>Payment Status</label>
                      <vue-select :options="Status" placeholder="Select Payment Status" />
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-upload-label">
                      <label class="mb-0">Attachment </label>
                    </div>
                    <div class="form-upload-file">
                      <span
                        ><i class="feather feather-upload-cloud me-2"></i>Attach
                        Files</span
                      >
                      <input type="file" multiple="" id="image_sign" />
                      <div id="frames"></div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label>Notes</label>
                      <input type="text" class="form-control" placeholder="Enter Notes" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-end">
                <button type="reset" class="btn btn-primary cancel me-2">Cancel</button>
                <button type="submit" class="btn btn-primary">Save</button>
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
import { ref } from "vue";
const currentDate = ref(new Date());
export default {
  setup() {
    return {
      startdate: currentDate,
      title: "Add Expenses",
      Mode: ["Select Payment Mode", "Cash", "Cheque"],
      Status: ["Select Payment Status", "Paid", "Pending", "Cancelled"],
    };
  },
};
</script>
