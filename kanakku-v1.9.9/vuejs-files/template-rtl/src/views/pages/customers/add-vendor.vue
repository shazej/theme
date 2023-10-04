<template>
  <div class="main-wrapper">
    <layout-header></layout-header>
    <layout-sidebar></layout-sidebar>

    <!-- Page Wrapper -->
    <div class="page-wrapper">
      <div class="content container-fluid">
        <componentheader :title="title" />

        <div class="row">
          <div class="col-md-12">
            <b-form action="#">
              <div class="card-body">
                <div class="form-group-item border-0 pb-0">
                  <div class="row">
                    <div class="col-lg-6 col-sm-12">
                      <div class="form-group">
                        <label>Name</label>
                        <b-form-input
                          type="text"
                          class="form-control"
                          placeholder="Enter Name"
                        />
                      </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                      <div class="form-group">
                        <label>Email</label>
                        <b-form-input
                          type="email"
                          class="form-control"
                          placeholder="Enter Email Address"
                        />
                      </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                      <div class="form-group">
                        <label>Phone Number</label>
                        <b-form-input
                          type="number"
                          class="form-control"
                          placeholder="Enter Phone Number"
                        />
                      </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                      <div class="form-group">
                        <label>Balance</label>
                        <b-form-input
                          type="number"
                          class="form-control"
                          placeholder="Enter Balance Amount"
                        />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="add-vendor-btns text-end">
                  <button type="reset" class="btn btn-primary cancel me-2">Cancel</button>
                  <button type="submit" class="btn btn-primary">Add Vendor</button>
                </div>
              </div>
            </b-form>
          </div>
        </div>
      </div>
    </div>
    <!-- /Page Wrapper -->
  </div>
</template>
<script>
export default {
  data() {
    return {
      title: "Add Vendor",
    };
  },
};
</script>
