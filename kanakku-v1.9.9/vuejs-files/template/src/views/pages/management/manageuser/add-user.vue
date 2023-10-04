<template>
  <!-- Main Wrapper -->
  <div class="main-wrapper">
    <layout-header></layout-header>
    <layout-sidebar></layout-sidebar>
    <!-- Page Wrapper -->
    <div class="page-wrapper">
      <div class="content container-fluid">
        <div class="content-page-header">
          <h5>Add User</h5>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card-body">
              <div class="form-group-item">
                <h5 class="form-title">Profile Picture</h5>
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
                    <a class="btn btn-primary me-2">Upload</a>
                    <a class="btn btn-remove">Remove</a>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="form-group">
                      <label>First Name</label>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Enter First Name"
                      />
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="form-group">
                      <label>Last Name</label>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Enter Last Name"
                      />
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="form-group">
                      <label>User Name</label>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Enter User Name"
                      />
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="form-group">
                      <label>Email</label>
                      <input
                        type="email"
                        class="form-control"
                        placeholder="Enter Email Address"
                      />
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="form-group">
                      <label>Phone Number</label>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Enter Phone Number"
                        name="name"
                      />
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="form-group">
                      <label>Role</label>
                      <vue-select :options="Role" placeholder="Select Role" />
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="pass-group" id="passwordInput1">
                      <div class="form-group">
                        <label>Password</label>
                        <input
                          v-if="showPassword"
                          type="text"
                          class="form-control pass-input"
                          v-model="password"
                        />
                        <input
                          v-else
                          type="password"
                          class="form-control pass-input"
                          v-model="password"
                        />
                        <span
                          @click="toggleShow"
                          class="toggle-password"
                          :class="{
                            'feather-eye': showPassword,
                            'feather-eye-off': !showPassword,
                          }"
                        ></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="pass-group" id="passwordInput2">
                      <div class="form-group">
                        <label>Confirm Password</label>
                        <input
                          v-if="showPassword2"
                          type="text"
                          class="form-control pass-input"
                          v-model="password2"
                        />
                        <input
                          v-else
                          type="password"
                          class="form-control pass-input"
                          v-model="password2"
                        />
                        <span
                          @click="toggleShow2"
                          class="toggle-password"
                          :class="{
                            'feather-eye': showPassword2,
                            'feather-eye-off': !showPassword2,
                          }"
                        ></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="form-group">
                      <label>Status</label>
                      <vue-select :options="Status" placeholder="Select Status" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-end">
                <button type="reset" class="btn btn-primary cancel me-2">Cancel</button>
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
      showPassword: false,
      showPassword2: false,
      password: null,
      password2: null,
      Role: ["Select Role", "Role 1", "Role 2"],
      Status: ["Select Status", "Active", "Inactive"],
    };
  },
  computed: {
    buttonLabel() {
      return this.showPassword ? "Hide" : "Show";
    },
    buttonLabel() {
      return this.showPassword2 ? "Hide" : "Show";
    },
  },
  methods: {
    toggleShow() {
      this.showPassword = !this.showPassword;
    },
    toggleShow2() {
      this.showPassword2 = !this.showPassword2;
    },
  },
};
</script>
