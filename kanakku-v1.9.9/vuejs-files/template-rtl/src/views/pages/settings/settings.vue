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
          <div class="col-xl-3 col-md-4">
            <settingsidebar />
          </div>

          <div class="col-xl-9 col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Basic information</h5>
              </div>
              <div class="card-body">
                <!-- Form -->
                <b-form>
                  <div class="row form-group">
                    <label for="name" class="col-sm-3 col-form-label input-label"
                      >Name</label
                    >
                    <div class="col-sm-9">
                      <div class="d-flex align-items-center">
                        <label
                          class="avatar avatar-xxl profile-cover-avatar m-0"
                          for="edit_img"
                        >
                          <img
                            id="avatarImg"
                            class="avatar-img"
                            src="@/assets/img/profiles/avatar-02.jpg"
                            alt="Profile Image"
                          />
                          <input type="file" id="edit_img" />
                          <span class="avatar-edit">
                            <i
                              class="feather feather-edit avatar-uploader-icon shadow-soft"
                            ></i>
                          </span>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label for="name" class="col-sm-3 col-form-label input-label"
                      >Name</label
                    >
                    <div class="col-sm-9">
                      <b-form-input
                        type="text"
                        class="form-control"
                        id="name"
                        placeholder="Your Name"
                        value="Charles Hafner"
                      />
                    </div>
                  </div>
                  <div class="row form-group">
                    <label for="email" class="col-sm-3 col-form-label input-label"
                      >Email</label
                    >
                    <div class="col-sm-9">
                      <b-form-input
                        type="email"
                        class="form-control"
                        id="email"
                        placeholder="Email"
                        value="charleshafner@example.com"
                      />
                    </div>
                  </div>
                  <div class="row form-group">
                    <label for="phone" class="col-sm-3 col-form-label input-label"
                      >Phone <span class="text-muted">(Optional)</span></label
                    >
                    <div class="col-sm-9">
                      <b-form-input
                        type="text"
                        class="form-control"
                        id="phone"
                        placeholder="+x(xxx)xxx-xx-xx"
                        value="+1 (304) 499-13-66"
                      />
                    </div>
                  </div>
                  <div class="row form-group">
                    <label for="location" class="col-sm-3 col-form-label input-label"
                      >Location</label
                    >
                    <div class="col-sm-9">
                      <div class="mb-3">
                        <b-form-input
                          type="text"
                          class="form-control"
                          id="location"
                          placeholder="Country"
                          value="United States"
                        />
                      </div>
                      <div class="mb-3">
                        <b-form-input
                          type="text"
                          class="form-control"
                          placeholder="City"
                          value="Charleston"
                        />
                      </div>
                      <b-form-input
                        type="text"
                        class="form-control"
                        placeholder="State"
                        value="West Virginia"
                      />
                    </div>
                  </div>
                  <div class="row form-group">
                    <label for="addressline1" class="col-sm-3 col-form-label input-label"
                      >Address line 1</label
                    >
                    <div class="col-sm-9">
                      <b-form-input
                        type="text"
                        class="form-control"
                        id="addressline1"
                        placeholder="Your address"
                        value="2681  Columbia Mine Road"
                      />
                    </div>
                  </div>
                  <div class="row form-group">
                    <label for="addressline2" class="col-sm-3 col-form-label input-label"
                      >Address line 2 <span class="text-muted">(Optional)</span></label
                    >
                    <div class="col-sm-9">
                      <b-form-input
                        type="text"
                        class="form-control"
                        id="addressline2"
                        placeholder="Your address"
                      />
                    </div>
                  </div>
                  <div class="row form-group">
                    <label for="zipcode" class="col-sm-3 col-form-label input-label"
                      >Zip code</label
                    >
                    <div class="col-sm-9">
                      <b-form-input
                        type="text"
                        class="form-control"
                        id="zipcode"
                        placeholder="Your zip code"
                        value="25301"
                      />
                    </div>
                  </div>
                  <div class="text-end">
                    <b-button type="submit" variant="primary">Save Changes</b-button>
                  </div>
                </b-form>
                <!-- /Form -->
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
  setup() {
    return {
      title: "Settings",
    };
  },
};
</script>
