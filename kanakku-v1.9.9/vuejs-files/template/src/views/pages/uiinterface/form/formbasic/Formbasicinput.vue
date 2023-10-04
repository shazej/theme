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
          <div class="col-lg-12">
            <inputsize />
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Input Sizes</h5>
              </div>
              <div class="card-body">
                <b-form action="#">
                  <div class="form-group row">
                    <label class="col-form-label col-md-2">Large Input</label>
                    <div class="col-md-10">
                      <b-form-input
                        type="text"
                        class="form-control form-control-lg"
                        placeholder=".form-control-lg"
                      ></b-form-input>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-form-label col-md-2">Default Input</label>
                    <div class="col-md-10">
                      <b-form-input
                        type="text"
                        class="form-control"
                        placeholder=".form-control"
                      ></b-form-input>
                    </div>
                  </div>
                  <div class="form-group mb-0 row">
                    <label class="col-form-label col-md-2">Small Input</label>
                    <div class="col-md-10">
                      <b-form-input
                        type="text"
                        class="form-control form-control-sm"
                        placeholder=".form-control-sm"
                      ></b-form-input>
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
export default {
  data() {
    return {
      title: "Basic Inputs",
    };
  },
  mounted() {},
};
</script>
