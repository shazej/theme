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
          <!-- Lightbox -->
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title mb-0">Basic Wizard</h4>
              </div>

              <div class="card-body">
                <form-wizard @on-complete="onComplete">
                  <tab-content :before-change="before">
                    <div class="tab-pane active">
                      <div class="mb-4">
                        <h5>Enter Your Personal Details</h5>
                      </div>
                      <form>
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="mb-3">
                              <label for="basicpill-firstname-input">First name</label>
                              <input
                                type="text"
                                class="form-control"
                                id="basicpill-firstname-input"
                              />
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="mb-3">
                              <label for="basicpill-lastname-input">Last name</label>
                              <input
                                type="text"
                                class="form-control"
                                id="basicpill-lastname-input"
                              />
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-6">
                            <div class="mb-3">
                              <label for="basicpill-phoneno-input">Phone</label>
                              <input
                                type="text"
                                class="form-control"
                                id="basicpill-phoneno-input"
                              />
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="mb-3">
                              <label for="basicpill-email-input">Email</label>
                              <input
                                type="email"
                                class="form-control"
                                id="basicpill-email-input"
                              />
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </tab-content>
                  <tab-content>
                    <div class="tab-pane">
                      <div>
                        <div class="mb-4">
                          <h5>Payment Details</h5>
                        </div>
                        <form>
                          <div class="row">
                            <div class="col-lg-6">
                              <div class="mb-3">
                                <label for="basicpill-namecard-input">Name on Card</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id="basicpill-namecard-input"
                                />
                              </div>
                            </div>

                            <div class="col-lg-6">
                              <div class="mb-3">
                                <label>Credit Card Type</label>
                                <vue-select
                                  :options="type"
                                  placeholder="Select Card Type"
                                />
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-6">
                              <div class="mb-3">
                                <label for="basicpill-cardno-input"
                                  >Credit Card Number</label
                                >
                                <input
                                  type="text"
                                  class="form-control"
                                  id="basicpill-cardno-input"
                                />
                              </div>
                            </div>

                            <div class="col-lg-6">
                              <div class="mb-3">
                                <label for="basicpill-card-verification-input"
                                  >Card Verification Number</label
                                >
                                <input
                                  type="text"
                                  class="form-control"
                                  id="basicpill-card-verification-input"
                                />
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-6">
                              <div class="mb-3">
                                <label for="basicpill-expiration-input"
                                  >Expiration Date</label
                                >
                                <input
                                  type="text"
                                  class="form-control"
                                  id="basicpill-expiration-input"
                                />
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </tab-content>
                  <tab-content>
                    <div class="tab-pane">
                      <div>
                        <div class="mb-4">
                          <h5>Enter Your Address</h5>
                        </div>
                        <form>
                          <div class="row">
                            <div class="col-lg-6">
                              <div class="mb-3">
                                <label for="basicpill-pancard-input">Address 1</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id="basicpill-pancard-input"
                                />
                              </div>
                            </div>

                            <div class="col-lg-6">
                              <div class="mb-3">
                                <label for="basicpill-vatno-input">Address 2</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id="basicpill-vatno-input"
                                />
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-6">
                              <div class="mb-3">
                                <label for="basicpill-cstno-input">Landmark</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id="basicpill-cstno-input"
                                />
                              </div>
                            </div>

                            <div class="col-lg-6">
                              <div class="mb-3">
                                <label for="basicpill-servicetax-input">Town</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id="basicpill-servicetax-input"
                                />
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </tab-content>
                </form-wizard>
              </div>
              <!-- end card body -->
            </div>
          </div>
          <!-- /Wizard -->
        </div>
      </div>
    </div>
    <!-- /Page Wrapper -->
  </div>
  <!-- /Main Wrapper -->
  <!-- Modal -->
  <div class="modal fade confirmModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content p-3">
        <div class="modal-header border-bottom-0">
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <div class="modal-body">
          <div class="text-center">
            <h5 class="mb-3">Confirm Save Changes</h5>
            <button type="button" class="btn btn-dark w-md me-1" data-bs-dismiss="modal">
              Close
            </button>
            <button type="button" class="btn btn-primary w-md" data-bs-dismiss="modal">
              Save changes
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      type: ["American Express", "Visa", "MasterCard", "Discover"],
      title: "Form Wizard",
    };
  },
  methods: {
    onComplete: function () {
      // alert("Yay. Done!");
    },
    before: function () {
      // alert("before");
      return true;
    },
  },
  mounted() {},
};
</script>
