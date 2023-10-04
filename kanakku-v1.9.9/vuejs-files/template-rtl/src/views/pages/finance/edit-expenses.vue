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
                        <label>Category:</label>
                        <vue-select :options="Category" placeholder="Select Category" />
                      </div>
                      <div class="form-group">
                        <label>Note:</label>
                        <textarea
                          rows="5"
                          cols="5"
                          class="form-control"
                          placeholder="Ut et est et autem quaerat. Dolores consequuntur ut "
                        ></textarea>
                      </div>
                    </div>
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
                        <b-form-input
                          type="text"
                          class="form-control"
                          value="Karlene Chaidez"
                          disabled
                        />
                      </div>
                      <div class="form-group">
                        <label>Amount:</label>
                        <b-form-input type="text" class="form-control" value="$75" />
                      </div>
                      <div class="text-end mt-4">
                        <b-button type="submit" variant="primary">
                          Save Changes
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
      title: "Expenses",
      text: "Dashboard",
      text1: "Expenses",
      text2: "Add Expenses",
      Category: ["Select Category", "Advertising", "Marketing", "Software", "Travel"],
    };
  },
};
</script>
