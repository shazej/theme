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
              <div class="form-group-add">
                <h5 class="form-title">Plan</h5>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label>Addon Name</label>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Enter Addon Name"
                      />
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group-add">
                <h5 class="form-title">Addon Settings</h5>
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                      <label>Services</label>
                      <div class="align-center">
                        <input type="number" class="form-control" placeholder="1-100" />
                        <div class="status-toggle">
                          <input id="rating_1" class="check" type="checkbox" checked="" />
                          <label for="rating_1" class="checktoggle checkbox-bg"
                            >checkbox</label
                          >
                        </div>
                      </div>
                      <span>
                        <label class="custom_check">
                          <input type="checkbox" name="invoice" />
                          <span class="checkmark"></span>
                        </label>
                      </span>
                      <span>Unlimited</span>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                      <label>Appointments</label>
                      <div class="align-center">
                        <input type="number" class="form-control" placeholder="1-100" />
                        <div class="status-toggle">
                          <input id="rating_2" class="check" type="checkbox" checked="" />
                          <label for="rating_2" class="checktoggle checkbox-bg"
                            >checkbox</label
                          >
                        </div>
                      </div>
                      <span>
                        <label class="custom_check">
                          <input type="checkbox" name="invoice" />
                          <span class="checkmark"></span>
                          <span>Unlimited</span>
                        </label>
                      </span>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                      <label>Staffs</label>
                      <div class="align-center">
                        <input type="number" class="form-control" placeholder="1-100" />
                        <div class="status-toggle">
                          <input id="rating_3" class="check" type="checkbox" checked="" />
                          <label for="rating_3" class="checktoggle checkbox-bg"
                            >checkbox</label
                          >
                        </div>
                      </div>
                      <span>
                        <label class="custom_check">
                          <input type="checkbox" name="invoice" />
                          <span class="checkmark"></span>
                          <span>Unlimited</span>
                        </label>
                      </span>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                      <label>Gallery</label>
                      <div class="align-center">
                        <input type="number" class="form-control" placeholder="1-100" />
                        <div class="status-toggle">
                          <input id="rating_4" class="check" type="checkbox" checked="" />
                          <label for="rating_4" class="checktoggle checkbox-bg"
                            >checkbox</label
                          >
                        </div>
                      </div>
                      <span>
                        <label class="custom_check">
                          <input type="checkbox" name="invoice" />
                          <span class="checkmark"></span>
                          <span>Unlimited</span>
                        </label>
                      </span>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                      <label>Additional Service</label>
                      <div class="align-center">
                        <input type="number" class="form-control" placeholder="1-100" />
                        <div class="status-toggle">
                          <input id="rating_5" class="check" type="checkbox" checked="" />
                          <label for="rating_5" class="checktoggle checkbox-bg"
                            >checkbox</label
                          >
                        </div>
                      </div>
                      <span>
                        <label class="custom_check">
                          <input type="checkbox" name="invoice" />
                          <span class="checkmark"></span>
                          <span>Unlimited</span>
                        </label>
                      </span>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group booking-option">
                      <label>Booking Option</label>
                      <div class="status-toggle">
                        <input id="rating_6" class="check" type="checkbox" checked="" />
                        <label for="rating_6" class="checktoggle checkbox-bg"
                          >checkbox</label
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-end mt-4">
                <button type="submit" class="btn btn-primary cancel me-2">Cancel</button>
                <b-button type="submit" variant="primary">Save Changes</b-button>
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
      title: "Membership Addons",
    };
  },
};
</script>
