<template>
  <!-- Main Wrapper -->
  <div class="main-wrapper">
    <layout-header></layout-header>
    <layout-sidebar></layout-sidebar>
    <!-- Page Wrapper -->
    <div class="page-wrapper">
      <div class="content container-fluid">
        <div class="page-header">
          <div class="content-page-header">
            <h5 class="text-lg-center m-auto">Edit Testimonials</h5>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-8 m-auto">
            <b-form action="#">
              <div class="card-body">
                <div class="form-group-item border-0 p-0">
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
                      <label class="btn btn-primary">
                        Upload <input type="file" />
                      </label>
                      <a class="btn btn-remove">Remove</a>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label>Name</label>
                        <b-form-input
                          type="text"
                          class="form-control"
                          value="John Smith"
                          placeholder="Enter Name"
                        />
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label>Job Title</label>
                        <b-form-input
                          type="text"
                          class="form-control"
                          value="Lorem ipsum dolor sit amet, consectetur"
                          placeholder="Enter Job Title"
                        />
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="form-group">
                        <label>Rating</label>
                        <div>
                          <span class="mail-important me-1"
                            ><i class="fas fa-star starred text-warning"></i
                          ></span>
                          <span class="mail-important me-1"
                            ><i class="fas fa-star starred text-warning"></i
                          ></span>
                          <span class="mail-important me-1"
                            ><i class="fas fa-star starred text-warning"></i
                          ></span>
                          <span class="mail-important me-1"
                            ><i class="fas fa-star starred text-warning"></i
                          ></span>
                          <span class="mail-important"
                            ><i class="fas fa-star starred text-warning"></i
                          ></span>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label>Comments</label>
                        <b-form-input
                          type="text"
                          class="form-control"
                          value="Lorem ipsum dolor sit amet, consectetur"
                          placeholder="Enter Comments"
                        />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="add-customer-btns text-center">
                  <button type="submit" class="btn customer-btn-cancel">Cancel</button>
                  <button type="submit" class="btn customer-btn-save">Update</button>
                </div>
              </div>
            </b-form>
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
    return {};
  },
};
</script>
