<template>
  <!-- Main Wrapper -->
  <div class="main-wrapper">
    <layout-header></layout-header>
    <layout-sidebar></layout-sidebar>

    <!-- Page Wrapper -->
    <div class="page-wrapper">
      <div class="content container-fluid">
        <breadcrumb :title="title" :text="text" :text1="text1" :text2="text2" />

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <b-form action="#">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Date:</label>
                        <div class="cal-icon">
                          <datepicker
                            v-model="startdate"
                            class="picker"
                            :editable="true"
                            :clearable="false"
                          />
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Customer:</label>
                        <vue-select :options="Customer" placeholder="Select Customer" />
                      </div>
                      <div class="form-group">
                        <label>Address:</label>
                        <textarea
                          rows="5"
                          cols="5"
                          class="form-control"
                          placeholder="Enter Address"
                        ></textarea>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Amount:</label>
                        <b-form-input type="text" class="form-control" />
                      </div>
                      <div class="form-group">
                        <label>Payment Number:</label>
                        <b-form-input type="text" class="form-control" />
                      </div>
                      <div class="form-group">
                        <label>Invoice:</label>
                        <vue-select :options="Invoice" placeholder="Select Invoice" />
                      </div>
                      <div class="form-group">
                        <label>Payment Mode:</label>
                        <vue-select :options="Mode" placeholder="Select Payment Mode" />
                      </div>
                      <div class="text-end mt-4">
                        <b-button type="submit" variant="primary">
                          Add Payments
                        </b-button>
                      </div>
                    </div>
                  </div>
                </b-form>
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
      title: "Payments",
      text: "Dashboard",
      text1: "Payments",
      text2: "Add Payments",
      Mode: ["Select Payment Mode", "Cash", "Credit", "Cheque"],
      Invoice: ["Select Invoice", "List Empty"],
      Customer: [
        "Select Customer",
        "Brian Johnson",
        "Marie Canales",
        "Barbara Moore",
        "Greg Lynch",
        "Karlene Chaidez",
      ],
    };
  },
};
</script>
