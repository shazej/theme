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
                <div class="form-group-item">
                  <h5 class="form-title">Basic Details</h5>
                  <div class="profile-picture">
                    <div class="upload-profile">
                      <div class="profile-img">
                        <img
                          id="blah"
                          class="avatar"
                          src="@/assets/img/profiles/avatar-10.jpg"
                          alt=""
                        />
                      </div>
                      <div class="add-profile">
                        <h5>Upload a New Photo</h5>
                        <span>Profile-pic.jpg</span>
                      </div>
                    </div>
                    <div class="img-upload">
                      <label class="btn btn-primary">
                        Upload <input type="file" />
                      </label>
                      <a class="btn btn-remove">Remove</a>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="form-group">
                        <label>Name</label>
                        <b-form-input
                          type="text"
                          class="form-control"
                          placeholder="Enter Name"
                        />
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="form-group">
                        <label>Email</label>
                        <b-form-input
                          type="email"
                          class="form-control"
                          placeholder="Enter Email Address"
                        />
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="form-group">
                        <label>Phone</label>
                        <vue-tel-input
                          v-model="phone"
                          mode="international"
                          class="form-control d-flex"
                          id="phone"
                          name="phone"
                        ></vue-tel-input>
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
                        <b-form-input
                          type="text"
                          class="form-control"
                          placeholder="Enter Website Address"
                        />
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="form-group">
                        <label>Notes</label>
                        <b-form-input
                          type="email"
                          class="form-control"
                          placeholder="Enter Your Notes"
                        />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group-item">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="billing-btn mb-2">
                        <h5 class="form-title">Billing Address</h5>
                      </div>
                      <div class="form-group">
                        <label>Name</label>
                        <b-form-input
                          type="text"
                          class="form-control"
                          placeholder="Enter Name"
                        />
                      </div>
                      <div class="form-group">
                        <label>Address Line 1</label>
                        <b-form-input
                          type="text"
                          class="form-control"
                          placeholder="Enter Address 1"
                        />
                      </div>
                      <div class="form-group">
                        <label>Address Line 2</label>
                        <b-form-input
                          type="text"
                          class="form-control"
                          placeholder="Enter Address 1"
                        />
                      </div>
                      <div class="row">
                        <div class="col-lg-6 col-md-12">
                          <div class="form-group">
                            <label>Country</label>
                            <b-form-input
                              type="text"
                              class="form-control"
                              placeholder="Country"
                            />
                          </div>
                          <div class="form-group">
                            <label>City</label>
                            <b-form-input
                              type="text"
                              class="form-control"
                              placeholder="City"
                            />
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                          <div class="form-group">
                            <label>State</label>
                            <b-form-input
                              type="text"
                              class="form-control"
                              placeholder="State"
                            />
                          </div>
                          <div class="form-group">
                            <label>Pincode</label>
                            <b-form-input
                              type="text"
                              class="form-control"
                              placeholder="Pincode"
                            />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="billing-btn">
                        <h5 class="form-title mb-0">Shipping Address</h5>
                        <a href="javascript:;" class="btn btn-primary"
                          >Copy from Billing</a
                        >
                      </div>
                      <div class="form-group">
                        <label>Name</label>
                        <b-form-input
                          type="text"
                          class="form-control"
                          placeholder="Enter Name"
                        />
                      </div>
                      <div class="form-group">
                        <label>Address Line 1</label>
                        <b-form-input
                          type="text"
                          class="form-control"
                          placeholder="Enter Address 1"
                        />
                      </div>
                      <div class="form-group">
                        <label>Address Line 2</label>
                        <b-form-input
                          type="text"
                          class="form-control"
                          placeholder="Enter Address 1"
                        />
                      </div>
                      <div class="row">
                        <div class="col-lg-6 col-md-12">
                          <div class="form-group">
                            <label>Country</label>
                            <b-form-input
                              type="text"
                              class="form-control"
                              placeholder="Country"
                            />
                          </div>
                          <div class="form-group">
                            <label>City</label>
                            <b-form-input
                              type="text"
                              class="form-control"
                              placeholder="City"
                            />
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                          <div class="form-group">
                            <label>State</label>
                            <b-form-input
                              type="text"
                              class="form-control"
                              placeholder="State"
                            />
                          </div>
                          <div class="form-group">
                            <label>Pincode</label>
                            <b-form-input
                              type="text"
                              class="form-control"
                              placeholder="Pincode"
                            />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group-customer customer-additional-form">
                  <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="form-group">
                        <h5 class="form-title">
                          Additional Details <span class="optional">(Optional)</span>
                        </h5>
                      </div>
                      <div class="form-group">
                        <label>Discount <span class="optional">(%)</span></label>
                        <b-form-input
                          type="text"
                          class="form-control"
                          placeholder="Enter Discount"
                        />
                      </div>
                      <div class="form-group notes-form-group">
                        <label>Notes</label>
                        <textarea
                          class="form-control"
                          placeholder="Enter Your Description"
                        ></textarea>
                      </div>
                      <div class="form-group">
                        <div class="check-mark-status d-flex justify-content-between">
                          <h6 class="label-text">TDS</h6>
                          <div class="status-toggle">
                            <input id="rating_1" class="check" type="checkbox" checked />
                            <label for="rating_1" class="checktoggle checkbox-bg"
                              >checkbox</label
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="form-group">
                        <h5 class="form-title">
                          Company Details <span class="optional">(Optional)</span>
                        </h5>
                      </div>
                      <div class="form-group">
                        <label>Company Name</label>
                        <b-form-input
                          type="text"
                          class="form-control"
                          placeholder="Enter Company Name"
                        />
                      </div>
                      <div class="form-group">
                        <label>GST No</label>
                        <b-form-input
                          type="text"
                          class="form-control"
                          placeholder="Enter GST Nuber"
                        />
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                      <div class="form-group">
                        <h5 class="form-title">
                          Opening Balance <span class="optional">(Optional)</span>
                        </h5>
                      </div>
                      <div class="form-group">
                        <label>Opening Balance</label>
                        <div class="">
                          <label class="custom_radio me-3">
                            <input type="radio" name="payment" checked />
                            <span class="checkmark"></span> Debit
                          </label>
                          <label class="custom_radio">
                            <input type="radio" name="payment" />
                            <span class="checkmark"></span> Credit
                          </label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Debit Amount</label>
                        <b-form-input
                          type="text"
                          class="form-control"
                          placeholder="Enter Debit Amount"
                        />
                      </div>
                      <div class="form-group">
                        <label>Balance</label>
                        <b-form-input
                          type="text"
                          class="form-control bg-blue-light border-0"
                          placeholder="$ 100"
                        />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="add-customer-btns text-end">
                  <a href="javascript:;" type="reset" class="btn customer-btn-cancel"
                    >Cancel</a
                  >
                  <router-link to="/customers" type="submit" class="btn customer-btn-save"
                    >Save Changes</router-link
                  >
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
      title: "Add Customers",
      Currency: ["Select Currency", "₹", "$", "£", "€"],
    };
  },
};
</script>
