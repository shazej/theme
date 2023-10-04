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
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Basic Form</h5>
              </div>
              <div class="card-body">
                <b-form action="#">
                  <div class="form-group">
                    <label>First Name</label>
                    <b-form-input type="text" class="form-control"></b-form-input>
                  </div>
                  <div class="form-group">
                    <label>Last Name</label>
                    <b-form-input type="text" class="form-control"></b-form-input>
                  </div>
                  <div class="form-group">
                    <label>Email Address</label>
                    <b-form-input type="email" class="form-control"></b-form-input>
                  </div>
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" />
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <b-form-input type="password" class="form-control"></b-form-input>
                  </div>
                  <div class="form-group">
                    <label>Repeat Password</label>
                    <b-form-input type="password" class="form-control"></b-form-input>
                  </div>
                  <div class="text-end">
                    <b-button variant="primary">Submit</b-button>
                  </div>
                </b-form>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Address Form</h5>
              </div>
              <div class="card-body">
                <b-form action="#">
                  <div class="form-group">
                    <label>Address Line 1</label>
                    <b-form-input type="text" class="form-control"></b-form-input>
                  </div>
                  <div class="form-group">
                    <label>Address Line 2</label>
                    <b-form-input type="text" class="form-control"></b-form-input>
                  </div>
                  <div class="form-group">
                    <label>City</label>
                    <b-form-input type="text" class="form-control"></b-form-input>
                  </div>
                  <div class="form-group">
                    <label>State</label>
                    <b-form-input type="text" class="form-control"></b-form-input>
                  </div>
                  <div class="form-group">
                    <label>Country</label>
                    <b-form-input type="text" class="form-control"></b-form-input>
                  </div>
                  <div class="form-group">
                    <label>Postal Code</label>
                    <b-form-input type="text" class="form-control"></b-form-input>
                  </div>
                  <div class="text-end">
                    <b-button variant="primary">Submit</b-button>
                  </div>
                </b-form>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Two Column Vertical Form</h5>
              </div>
              <div class="card-body">
                <b-form action="#">
                  <h5 class="card-title">Personal Information</h5>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>First Name</label>
                        <b-form-input type="text" class="form-control"></b-form-input>
                      </div>
                      <div class="form-group">
                        <label>Last Name</label>
                        <b-form-input type="text" class="form-control"></b-form-input>
                      </div>
                      <div class="form-group">
                        <label>Blood Group</label>
                        <vue-select :options="bloodgroup" placeholder="A+" />
                      </div>
                      <div class="form-group">
                        <label class="d-block">Gender:</label>
                        <div class="form-check form-check-inline">
                          <input
                            class="form-check-input"
                            type="radio"
                            name="gender"
                            id="gender_male"
                            value="option1"
                          />
                          <label class="form-check-label" for="gender_male">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input
                            class="form-check-input"
                            type="radio"
                            name="gender"
                            id="gender_female"
                            value="option2"
                          />
                          <label class="form-check-label" for="gender_female"
                            >Female</label
                          >
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Username</label>
                        <b-form-input type="text" class="form-control"></b-form-input>
                      </div>
                      <div class="form-group">
                        <label>Email</label>
                        <b-form-input type="text" class="form-control"></b-form-input>
                      </div>

                      <div class="form-group">
                        <label>Password</label>
                        <b-form-input type="text" class="form-control"></b-form-input>
                      </div>
                      <div class="form-group">
                        <label>Repeat Password</label>
                        <b-form-input type="text" class="form-control"></b-form-input>
                      </div>
                    </div>
                  </div>
                  <h5 class="card-title">Postal Address</h5>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Address Line 1</label>
                        <b-form-input type="text" class="form-control"></b-form-input>
                      </div>
                      <div class="form-group">
                        <label>Address Line 2</label>
                        <b-form-input type="text" class="form-control"></b-form-input>
                      </div>
                      <div class="form-group">
                        <label>State</label>
                        <b-form-input type="text" class="form-control"></b-form-input>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>City</label>
                        <b-form-input type="text" class="form-control"></b-form-input>
                      </div>
                      <div class="form-group">
                        <label>Country</label>
                        <b-form-input type="text" class="form-control"></b-form-input>
                      </div>
                      <div class="form-group">
                        <label>Postal Code</label>
                        <b-form-input type="text" class="form-control"></b-form-input>
                      </div>
                    </div>
                  </div>
                  <div class="text-end">
                    <b-button variant="primary">Submit</b-button>
                  </div>
                </b-form>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Two Column Vertical Form</h5>
              </div>
              <div class="card-body">
                <b-form action="#">
                  <div class="row">
                    <div class="col-md-6">
                      <h5 class="card-title">Personal details</h5>
                      <div class="form-group">
                        <label>Name:</label>
                        <b-form-input type="text" class="form-control"></b-form-input>
                      </div>
                      <div class="form-group">
                        <label>Password:</label>
                        <b-form-input type="password" class="form-control"></b-form-input>
                      </div>
                      <div class="form-group">
                        <label>State:</label>
                        <vue-select :options="state" placeholder="Select State" />
                      </div>
                      <div class="form-group">
                        <label>Your Message:</label>
                        <b-form-textarea
                          id="textarea"
                          v-model="text"
                          rows="5"
                          max-rows="5"
                          class="form-control"
                          placeholder="Enter message"
                        ></b-form-textarea>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <h5 class="card-title">Personal details</h5>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>First Name:</label>
                            <b-form-input type="text" class="form-control"></b-form-input>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Last Name:</label>
                            <b-form-input type="text" class="form-control"></b-form-input>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Email:</label>
                            <b-form-input type="text" class="form-control"></b-form-input>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Phone:</label>
                            <b-form-input type="text" class="form-control"></b-form-input>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Address line:</label>
                            <b-form-input type="text" class="form-control"></b-form-input>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Country:</label>
                            <vue-select :options="country" placeholder="Select Country" />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>State/Province:</label>
                            <b-form-input type="text" class="form-control"></b-form-input>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>ZIP code:</label>
                            <b-form-input type="text" class="form-control"></b-form-input>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>City:</label>
                            <b-form-input type="text" class="form-control"></b-form-input>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="text-end">
                    <b-button variant="primary">Submit</b-button>
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
      bloodgroup: ["Select", "A+", "O+", "B+", "AB+"],
      state: ["Select State", "California", "Texas", "Florida"],
      country: ["Select Country", "USA", "France", "India", "Spain"],
      title: "Vertical Form",
    };
  },
  components: {},
  mounted() {},
};
</script>
