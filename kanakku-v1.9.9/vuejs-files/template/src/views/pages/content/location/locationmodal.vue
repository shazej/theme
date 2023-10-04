<template>
  <!-- Add Vendor Modal -->
  <div class="modal custom-modal fade" id="add_countries" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content">
        <div class="modal-header border-0 pb-0">
          <div class="form-header modal-header-title text-start mb-0">
            <h4 class="mb-0">Add Countries</h4>
          </div>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span class="align-center" aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="form-group">
                <label>Country Code</label>
                <input
                  type="text"
                  class="form-control"
                  placeholder="Enter Country Code"
                />
              </div>
            </div>
            <div class="col-lg-12 col-md-12">
              <div class="form-group">
                <label>Country ID</label>
                <input type="text" class="form-control" placeholder="Enter Country ID" />
              </div>
            </div>
            <div class="col-lg-12 col-md-12">
              <div class="form-group mb-0">
                <label>Country Name</label>
                <input
                  type="text"
                  class="form-control"
                  placeholder="Enter Country Name"
                />
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a
            href="javascript:;"
            data-bs-dismiss="modal"
            class="btn btn-primary paid-cancel-btn me-2"
            >Cancel</a
          >
          <a
            href="javascript:;"
            data-bs-dismiss="modal"
            class="btn btn-primary paid-continue-btn"
            >Add Countries</a
          >
        </div>
      </div>
    </div>
  </div>
  <!-- /Add Vendor Modal -->

  <!-- Edit Vendor Modal -->
  <div class="modal custom-modal fade" id="edit_countries" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content">
        <div class="modal-header border-0 pb-0">
          <div class="form-header modal-header-title text-start mb-0">
            <h4 class="mb-0">Edit Countries</h4>
          </div>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span class="align-center" aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="form-group">
                <label>Country Code</label>
                <input
                  type="text"
                  class="form-control"
                  value="684"
                  placeholder="Enter Country Code"
                />
              </div>
            </div>
            <div class="col-lg-12 col-md-12">
              <div class="form-group">
                <label>Country ID</label>
                <input
                  type="text"
                  class="form-control"
                  value="AS"
                  placeholder="Select Date"
                />
              </div>
            </div>
            <div class="col-lg-12 col-md-12">
              <div class="form-group mb-0">
                <label>Country Name</label>
                <input
                  type="text"
                  class="form-control"
                  value="American Samoa"
                  placeholder="Enter Reference Number"
                />
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a
            href="javascript:;"
            data-bs-dismiss="modal"
            class="btn btn-primary paid-cancel-btn me-2"
            >Cancel</a
          >
          <a
            href="javascript:;"
            data-bs-dismiss="modal"
            class="btn btn-primary paid-continue-btn"
            >Update</a
          >
        </div>
      </div>
    </div>
  </div>
  <!-- /Edit Vendor Modal -->

  <!-- Add Vendor Modal -->
  <div class="modal custom-modal fade" id="add_state" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content">
        <div class="modal-header border-0 pb-0">
          <div class="form-header modal-header-title text-start mb-0">
            <h4 class="mb-0">Add State</h4>
          </div>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span class="align-center" aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="form-group">
                <label>Country Code</label>
                <input
                  type="text"
                  class="form-control"
                  placeholder="Enter Country Code"
                />
              </div>
            </div>
            <div class="col-lg-12 col-md-12">
              <div class="form-group">
                <label>Country Name</label>
                <input
                  type="text"
                  class="form-control"
                  placeholder="Enter Country Name"
                />
              </div>
            </div>
            <div class="col-lg-12 col-md-12">
              <div class="form-group mb-0">
                <label>State Name</label>
                <input type="text" class="form-control" placeholder="Enter State Name" />
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a
            href="javascript:;"
            data-bs-dismiss="modal"
            class="btn btn-primary paid-cancel-btn me-2"
            >Cancel</a
          >
          <a
            href="javascript:;"
            data-bs-dismiss="modal"
            class="btn btn-primary paid-continue-btn"
            >Add State</a
          >
        </div>
      </div>
    </div>
  </div>
  <!-- /Add Vendor Modal -->

  <!-- Edit Vendor Modal -->
  <div class="modal custom-modal fade" id="edit_state" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content">
        <div class="modal-header border-0 pb-0">
          <div class="form-header modal-header-title text-start mb-0">
            <h4 class="mb-0">Edit State</h4>
          </div>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span class="align-center" aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="form-group">
                <label>Country Code</label>
                <input
                  type="text"
                  class="form-control"
                  value="As"
                  placeholder="Enter Country Code"
                />
              </div>
            </div>
            <div class="col-lg-12 col-md-12">
              <div class="form-group">
                <label>Country Name</label>
                <input
                  type="text"
                  class="form-control"
                  value="American Samoa"
                  placeholder="Enter Country Name"
                />
              </div>
            </div>
            <div class="col-lg-12 col-md-12">
              <div class="form-group mb-0">
                <label>State Name</label>
                <input
                  type="text"
                  class="form-control"
                  value="Swains Island"
                  placeholder="Enter State Name"
                />
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a
            href="javascript:;"
            data-bs-dismiss="modal"
            class="btn btn-primary paid-cancel-btn me-2"
            >Cancel</a
          >
          <a
            href="javascript:;"
            data-bs-dismiss="modal"
            class="btn btn-primary paid-continue-btn"
            >Update</a
          >
        </div>
      </div>
    </div>
  </div>
  <!-- /Edit Vendor Modal -->
  <!-- Add Vendor Modal -->
  <div class="modal custom-modal fade" id="add_cities" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content">
        <div class="modal-header border-0 pb-0">
          <div class="form-header modal-header-title text-start mb-0">
            <h4 class="mb-0">Add City</h4>
          </div>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span class="align-center" aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="form-group">
                <label>Country Name</label>
                <vue-select :options="Country" placeholder="Select Country Name" />
              </div>
            </div>
            <div class="col-lg-12 col-md-12">
              <div class="form-group">
                <label>State Name</label>
                <vue-select :options="State" placeholder="Select State Name" />
              </div>
            </div>
            <div class="col-lg-12 col-md-12">
              <div class="form-group mb-0">
                <label>City Name</label>
                <input type="text" class="form-control" placeholder="Enter City Name" />
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a
            href="javascript:;"
            data-bs-dismiss="modal"
            class="btn btn-primary paid-cancel-btn me-2"
            >Cancel</a
          >
          <a
            href="javascript:;"
            data-bs-dismiss="modal"
            class="btn btn-primary paid-continue-btn"
            >Add Cities</a
          >
        </div>
      </div>
    </div>
  </div>
  <!-- /Add Vendor Modal -->

  <!-- Edit Vendor Modal -->
  <div class="modal custom-modal fade" id="edit_cities" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content">
        <div class="modal-header border-0 pb-0">
          <div class="form-header modal-header-title text-start mb-0">
            <h4 class="mb-0">Edit City</h4>
          </div>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span class="align-center" aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="form-group">
                <label>Country Name</label>
                <input
                  type="text"
                  class="form-control"
                  value="American Samoa"
                  placeholder="Enter Name"
                />
              </div>
            </div>
            <div class="col-lg-12 col-md-12">
              <div class="form-group">
                <label>State Name</label>
                <input
                  type="text"
                  class="form-control"
                  value="Swains Island"
                  placeholder="Select Date"
                />
              </div>
            </div>
            <div class="col-lg-12 col-md-12">
              <div class="form-group mb-0">
                <label>City Name</label>
                <input
                  type="text"
                  class="form-control"
                  value="Gandzasar"
                  placeholder="Enter Reference Number"
                />
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a
            href="javascript:;"
            data-bs-dismiss="modal"
            class="btn btn-primary paid-cancel-btn me-2"
            >Cancel</a
          >
          <a
            href="javascript:;"
            data-bs-dismiss="modal"
            class="btn btn-primary paid-continue-btn"
            >Update</a
          >
        </div>
      </div>
    </div>
  </div>
  <!-- /Edit Vendor Modal -->
  <!-- Add FAQ Modal -->
  <div class="modal custom-modal fade" id="add_faq" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content">
        <div class="modal-header border-0 pb-0">
          <div class="form-header modal-header-title text-start mb-0">
            <h4 class="mb-0">Add FAQ</h4>
          </div>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span class="align-center" aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-12">
              <div class="form-group">
                <label>Title Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" placeholder="Enter Title" />
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <label>Category <span class="text-danger">*</span></label>
                <input type="text" class="form-control" placeholder="Enter Category" />
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <label>Details <span class="text-danger">*</span></label>
                <input type="text" class="form-control" placeholder="Enter Details" />
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group mb-0">
                <div class="check-mark-status d-flex justify-content-between">
                  <h6 class="label-text">Status</h6>
                  <div class="status-toggle">
                    <input id="rating_1" class="check" type="checkbox" checked="" />
                    <label for="rating_1" class="checktoggle checkbox-bg">checkbox</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a
            href="javascript:;"
            data-bs-dismiss="modal"
            class="btn btn-primary paid-cancel-btn me-2"
            >Cancel</a
          >
          <a
            href="javascript:;"
            data-bs-dismiss="modal"
            class="btn btn-primary paid-continue-btn"
            >Add FAQ</a
          >
        </div>
      </div>
    </div>
  </div>
  <!-- /Add FAQ Modal -->

  <!-- Edit FAQ Modal -->
  <div class="modal custom-modal fade" id="edit_faq" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content">
        <div class="modal-header border-0 pb-0">
          <div class="form-header modal-header-title text-start mb-0">
            <h4 class="mb-0">Edit FAQ</h4>
          </div>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span class="align-center" aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="form-group">
                <label>Name</label>
                <input
                  type="text"
                  class="form-control"
                  value="Duis aute irure in reprehenderit in voluptate velit?"
                  placeholder="Enter Name"
                />
              </div>
            </div>
            <div class="col-lg-12 col-md-12">
              <div class="form-group">
                <label>Date</label>
                <input
                  type="text"
                  class="form-control"
                  value="19 Dec 2022"
                  placeholder="Select Date"
                />
              </div>
            </div>
            <div class="col-lg-12 col-md-12">
              <div class="form-group">
                <label>Category</label>
                <input
                  type="text"
                  class="form-control"
                  value="Lorem ipsum dolor sit amet"
                  placeholder="Category"
                />
              </div>
            </div>
            <div class="col-lg-12 col-md-12">
              <div class="form-group">
                <label>Details</label>
                <input
                  type="text"
                  class="form-control"
                  value="Lorem ipsum dolor sit amet"
                  placeholder="Details"
                />
              </div>
            </div>
            <div class="col-lg-12 col-md-12">
              <div class="form-group mb-0">
                <label>Status</label>
                <input
                  type="text"
                  class="form-control"
                  value="Success"
                  placeholder="Status"
                />
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a
            href="javascript:;"
            data-bs-dismiss="modal"
            class="btn btn-primary paid-cancel-btn me-2"
            >Cancel</a
          >
          <a
            href="javascript:;"
            data-bs-dismiss="modal"
            class="btn btn-primary paid-continue-btn"
            >Update</a
          >
        </div>
      </div>
    </div>
  </div>
  <!-- /Edit FAQ Modal -->
  <!-- Add Expenses Modal -->
  <div class="modal custom-modal fade" id="add_expenses" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content">
        <div class="modal-header border-0 pb-0">
          <div class="form-header modal-header-title text-start mb-0">
            <h4 class="mb-0">Add Expenses</h4>
          </div>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span class="align-center" aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="form-group">
                <label>Expense ID</label>
                <input type="text" class="form-control" placeholder="Enter Expense ID" />
              </div>
            </div>
            <div class="col-lg-12 col-md-12">
              <div class="form-group">
                <label>Reference</label>
                <input type="text" class="form-control" placeholder="Enter Reference" />
              </div>
            </div>
            <div class="col-lg-12 col-md-12">
              <div class="form-group">
                <label>Amount </label>
                <input type="number" class="form-control" placeholder="Enter Amount" />
              </div>
            </div>
            <div class="col-lg-12 col-md-12">
              <div class="form-group">
                <label>Payment Mode</label>
                <vue-select :options="Mode" placeholder="Select Payment Mode" />
              </div>
            </div>
            <div class="col-lg-12 col-md-12">
              <div class="form-group">
                <label>Expense Date </label>
                <datepicker
                  v-model="startdate"
                  class="picker"
                  :editable="true"
                  :clearable="false"
                />
              </div>
            </div>
            <div class="col-lg-12 col-md-12">
              <div class="form-group">
                <label>Payment Status</label>
                <vue-select :options="Status" placeholder="Select Payment Status" />
              </div>
            </div>
            <div class="col-lg-12 col-md-12">
              <div class="form-group">
                <div class="form-upload-label">
                  <label>Attachment </label>
                </div>
                <div class="form-upload-file">
                  <span><i class="fe fe-upload-cloud me-2"></i>Attach Files</span>
                  <input type="file" multiple="" id="image_sign" />
                  <div id="frames"></div>
                </div>
              </div>
            </div>
            <div class="col-lg-12 col-md-12">
              <div class="form-group mb-0">
                <label>Notes</label>
                <input type="text" class="form-control" placeholder="Enter Notes" />
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a
            href="javascript:;"
            data-bs-dismiss="modal"
            class="btn btn-primary paid-cancel-btn me-2"
            >Cancel</a
          >
          <a
            href="javascript:;"
            data-bs-dismiss="modal"
            class="btn btn-primary paid-continue-btn"
            >Add Expenses</a
          >
        </div>
      </div>
    </div>
  </div>
  <!-- /Add Expenses Modal -->

  <!-- Edit Expenses Modal -->
  <div class="modal custom-modal fade" id="edit_expenses" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content">
        <div class="modal-header border-0 pb-0">
          <div class="form-header modal-header-title text-start mb-0">
            <h4 class="mb-0">Edit Expenses</h4>
          </div>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span class="align-center" aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="form-group">
                <label>Expense ID</label>
                <input
                  type="text"
                  class="form-control"
                  value="EXP-148061"
                  placeholder="Enter Name"
                />
              </div>
            </div>
            <div class="col-lg-12 col-md-12">
              <div class="form-group">
                <label>Reference</label>
                <input
                  type="text"
                  class="form-control"
                  value="25689825"
                  placeholder="Enter Reference Number"
                />
              </div>
            </div>
            <div class="col-lg-12 col-md-12">
              <div class="form-group">
                <label>Amount</label>
                <input
                  type="text"
                  class="form-control"
                  value="1,54,220"
                  placeholder="Select Date"
                />
              </div>
            </div>
            <div class="col-lg-12 col-md-12">
              <div class="form-group">
                <label>Payment Mode</label>
                <input
                  type="text"
                  class="form-control"
                  value="Cash"
                  placeholder="Enter Payment Mode"
                />
              </div>
            </div>
            <div class="col-lg-12 col-md-12">
              <div class="form-group">
                <label>Expense Date</label>
                <input
                  type="text"
                  class="form-control"
                  value="29 Jan 2022"
                  placeholder="Enter Expense Date"
                />
              </div>
            </div>
            <div class="col-lg-12 col-md-12">
              <div class="form-group">
                <label>Payment Mode</label>
                <input
                  type="text"
                  class="form-control"
                  value="Cash"
                  placeholder="Enter Payment Mode"
                />
              </div>
            </div>
            <div class="col-lg-12 col-md-12">
              <div class="form-group">
                <label>Attachment</label>
                <input
                  type="text"
                  class="form-control"
                  value="Attachment"
                  placeholder="Enter Attachment Number"
                />
              </div>
            </div>
            <div class="col-lg-12 col-md-12">
              <div class="form-group mb-0">
                <label>Notes</label>
                <input
                  type="text"
                  class="form-control"
                  value="Notes"
                  placeholder="Enter Notes Number"
                />
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a
            href="javascript:;"
            data-bs-dismiss="modal"
            class="btn btn-primary paid-cancel-btn me-2"
            >Cancel</a
          >
          <a
            href="javascript:;"
            data-bs-dismiss="modal"
            class="btn btn-primary paid-continue-btn"
            >Update</a
          >
        </div>
      </div>
    </div>
  </div>
  <!-- /Edit Expenses Modal -->
  <!-- Add Vendor Modal -->
  <div class="modal custom-modal fade" id="add_vendor" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content">
        <div class="modal-header border-0 pb-0">
          <div class="form-header modal-header-title text-start mb-0">
            <h4 class="mb-0">Add Vendor</h4>
          </div>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span class="align-center" aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-12 col-sm-12">
              <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter Name" />
              </div>
            </div>
            <div class="col-lg-12 col-sm-12">
              <div class="form-group">
                <label>Email</label>
                <input
                  type="text"
                  class="form-control"
                  placeholder="Enter Email Address"
                />
              </div>
            </div>
            <div class="col-lg-12 col-sm-12">
              <div class="form-group">
                <label>Phone Number</label>
                <input
                  type="number"
                  class="form-control"
                  placeholder="Enter Phone Number"
                />
              </div>
            </div>
            <div class="col-lg-12 col-sm-12">
              <div class="form-group mb-0">
                <label>Balance</label>
                <input
                  type="number"
                  class="form-control"
                  placeholder="Enter Balance Amount"
                />
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a
            href="javascript:;"
            data-bs-dismiss="modal"
            class="btn btn-primary paid-cancel-btn me-2"
            >Cancel</a
          >
          <a
            href="javascript:;"
            data-bs-dismiss="modal"
            class="btn btn-primary paid-continue-btn"
            >Add Vendor</a
          >
        </div>
      </div>
    </div>
  </div>
  <!-- /Add Vendor Modal -->

  <!-- Edit Vendor Modal -->
  <div class="modal custom-modal fade" id="edit_vendor" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content">
        <div class="modal-header border-0 pb-0">
          <div class="form-header modal-header-title text-start mb-0">
            <h4 class="mb-0">Edit Vendor</h4>
          </div>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span class="align-center" aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="form-group">
                <label>Name</label>
                <input
                  type="text"
                  class="form-control"
                  value="John Smith"
                  placeholder="Enter Name"
                />
              </div>
            </div>
            <div class="col-lg-12 col-md-12">
              <div class="form-group">
                <label>Email</label>
                <input
                  type="text"
                  class="form-control"
                  value="john@example.com"
                  placeholder="Select Date"
                />
              </div>
            </div>
            <div class="col-lg-12 col-md-12">
              <div class="form-group">
                <label>Phone Number</label>
                <input
                  type="text"
                  class="form-control"
                  value="+1 989-438-3131"
                  placeholder="Enter Reference Number"
                />
              </div>
            </div>
            <div class="col-lg-12 col-md-12">
              <div class="form-group mb-0">
                <label>Balance</label>
                <input
                  type="text"
                  class="form-control"
                  value="$4200"
                  placeholder="Enter Reference Number"
                />
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a
            href="javascript:;"
            data-bs-dismiss="modal"
            class="btn btn-primary paid-cancel-btn me-2"
            >Cancel</a
          >
          <a
            href="javascript:;"
            data-bs-dismiss="modal"
            class="btn btn-primary paid-continue-btn"
            >Update</a
          >
        </div>
      </div>
    </div>
  </div>
  <!-- /Edit Vendor Modal -->

  <!-- Add Category Modal -->
  <div class="modal custom-modal fade" id="add_category" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content">
        <div class="modal-header border-0 pb-0">
          <div class="form-header modal-header-title text-start mb-0">
            <h4 class="mb-0">Add Category</h4>
          </div>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span class="align-center" aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <div class="card-body">
                <div class="form-group-item border-0 pb-0 mb-0">
                  <div class="row">
                    <div class="col-lg-12 col-sm-12">
                      <div class="form-group">
                        <label>Name <span class="text-danger">*</span></label>
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Enter Title"
                        />
                      </div>
                    </div>
                    <div class="col-lg-12 col-sm-12">
                      <div class="form-group">
                        <label>Slug</label>
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Enter Slug"
                        />
                      </div>
                    </div>
                    <div class="col-lg-12 col-sm-12">
                      <div class="form-group">
                        <label>Parent Category</label>
                        <vue-select :options="Parent_Category" placeholder="None" />
                      </div>
                    </div>
                    <div class="col-lg-12 col-sm-12">
                      <div class="form-group mb-0 pb-0">
                        <label>Image</label>
                        <div class="form-group service-upload mb-0">
                          <span
                            ><img src="@/assets/img/icons/drop-icon.svg" alt="upload"
                          /></span>
                          <h6 class="drop-browse align-center">
                            Drop your files here or<span class="text-primary ms-1"
                              >browse</span
                            >
                          </h6>
                          <p class="text-muted">Maximum size: 50MB</p>
                          <input type="file" multiple="" id="image_sign" />
                          <div id="frames"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a
            href="javascript:;"
            data-bs-dismiss="modal"
            class="btn btn-primary paid-cancel-btn me-2"
            >Cancel</a
          >
          <a
            href="javascript:;"
            data-bs-dismiss="modal"
            class="btn btn-primary paid-continue-btn"
            >Add Category</a
          >
        </div>
      </div>
    </div>
  </div>
  <!-- /Add Category Modal -->

  <!-- Add Category Modal -->
  <div class="modal custom-modal fade" id="edit_category" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content">
        <div class="modal-header border-0 pb-0">
          <div class="form-header modal-header-title text-start mb-0">
            <h4 class="mb-0">Edit Category</h4>
          </div>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span class="align-center" aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <div class="card-body">
                <div class="form-group-item border-0 pb-0 mb-0">
                  <div class="row">
                    <div class="col-lg-12 col-sm-12">
                      <div class="form-group">
                        <label>Name <span class="text-danger">*</span></label>
                        <input
                          type="text"
                          class="form-control"
                          value="Advertising"
                          placeholder="Enter Title"
                        />
                      </div>
                    </div>
                    <div class="col-lg-12 col-sm-12">
                      <div class="form-group">
                        <label>Slug</label>
                        <input
                          type="text"
                          class="form-control"
                          value="advertising"
                          placeholder="Enter Slug"
                        />
                      </div>
                    </div>
                    <div class="col-lg-12 col-sm-12">
                      <div class="form-group">
                        <label>Parent Category</label>
                        <vue-select :options="Parent_Category1" placeholder="None" />
                      </div>
                    </div>
                    <div class="col-lg-12 col-sm-12">
                      <div class="form-group mb-0 pb-0">
                        <label>Image</label>
                        <div class="form-group service-upload mb-0">
                          <span
                            ><img src="@/assets/img/icons/drop-icon.svg" alt="upload"
                          /></span>
                          <h6 class="drop-browse align-center">
                            Drop your files here or<span class="text-primary ms-1"
                              >browse</span
                            >
                          </h6>
                          <p class="text-muted">Maximum size: 50MB</p>
                          <input type="file" multiple="" id="image_sign" />
                          <div id="frames"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a
            href="javascript:;"
            data-bs-dismiss="modal"
            class="btn btn-primary paid-cancel-btn me-2"
            >Cancel</a
          >
          <a
            href="javascript:;"
            data-bs-dismiss="modal"
            class="btn btn-primary paid-continue-btn"
            >Update</a
          >
        </div>
      </div>
    </div>
  </div>
  <!-- /Add Vendor Modal -->
  <!-- Add Units Modal -->
  <div class="modal custom-modal fade" id="add_unit" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content">
        <div class="modal-header border-0 pb-0">
          <div class="form-header modal-header-title text-start mb-0">
            <h4 class="mb-0">Add Units</h4>
          </div>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span class="align-center" aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-12 col-sm-12">
              <div class="form-group">
                <label>Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" placeholder="Enter Title" />
              </div>
            </div>
            <div class="col-lg-12 col-sm-12">
              <div class="form-group">
                <label>Symbol <span class="text-danger">*</span></label>
                <input type="text" class="form-control" placeholder="Enter Symbol" />
              </div>
            </div>
            <div class="col-lg-12 col-sm-12">
              <div class="form-group mb-0">
                <label>Parent Unit <span class="text-danger">*</span></label>
                <input type="text" class="form-control" placeholder="Parent Unit" />
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a
            href="javascript:;"
            data-bs-dismiss="modal"
            class="btn btn-primary paid-cancel-btn me-2"
            >Cancel</a
          >
          <a
            href="javascript:;"
            data-bs-dismiss="modal"
            class="btn btn-primary paid-continue-btn"
            >Add Unit</a
          >
        </div>
      </div>
    </div>
  </div>
  <!-- /Add Units Modal -->

  <!-- Add Units Modal -->
  <div class="modal custom-modal fade" id="edit_unit" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content">
        <div class="modal-header border-0 pb-0">
          <div class="form-header modal-header-title text-start mb-0">
            <h4 class="mb-0">Edit Units</h4>
          </div>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span class="align-center" aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-12 col-sm-12">
              <div class="form-group">
                <label>Name </label>
                <input
                  type="text"
                  class="form-control"
                  value="Kilogram"
                  placeholder="Enter Title"
                />
              </div>
            </div>
            <div class="col-lg-12 col-sm-12">
              <div class="form-group">
                <label>Symbol</label>
                <input
                  type="text"
                  class="form-control"
                  value="Slug"
                  placeholder="Enter Slug"
                />
              </div>
            </div>
            <div class="col-lg-12 col-sm-12">
              <div class="form-group mb-0">
                <label>Parent Unit</label>
                <input
                  type="text"
                  class="form-control"
                  value="kg"
                  placeholder="Parent Unit"
                />
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a
            href="javascript:;"
            data-bs-dismiss="modal"
            class="btn btn-primary paid-cancel-btn me-2"
            >Cancel</a
          >
          <a
            href="javascript:;"
            data-bs-dismiss="modal"
            class="btn btn-primary paid-continue-btn"
            >Update</a
          >
        </div>
      </div>
    </div>
  </div>
  <!-- /Add Units Modal -->
  <!-- Delete Items Modal -->
  <div class="modal custom-modal fade" id="delete_modal" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content">
        <div class="modal-body">
          <div class="form-header">
            <h3>{{ title1 }}</h3>
            <p>Are you sure want to delete?</p>
          </div>
          <div class="modal-btn delete-action">
            <div class="row">
              <div class="col-6">
                <button
                  type="reset"
                  data-bs-dismiss="modal"
                  class="w-100 btn btn-primary paid-continue-btn"
                >
                  Delete
                </button>
              </div>
              <div class="col-6">
                <button
                  type="submit"
                  data-bs-dismiss="modal"
                  class="w-100 btn btn-primary paid-cancel-btn"
                >
                  Cancel
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Delete Items Modal -->
  <!-- Delete Paid Modal -->
  <div class="modal custom-modal fade" id="delete_paid" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <div class="form-header">
            <h3>{{ title2 }}</h3>
            <p>Are you sure want to delete?</p>
          </div>
          <div class="modal-btn delete-action">
            <div class="row">
              <div class="col-6">
                <a href="javascript:void(0);" class="btn btn-primary paid-continue-btn"
                  >Delete</a
                >
              </div>
              <div class="col-6">
                <a
                  href="javascript:void(0);"
                  data-bs-dismiss="modal"
                  class="btn btn-primary paid-cancel-btn"
                  >Cancel</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Delete Paid Modal -->
</template>
<script>
import { ref } from "vue";
const currentDate = ref(new Date());
export default {
  data() {
    return {
      startdate: currentDate,
      Country: [
        "Select Country Name",
        "Country Name 1",
        "Country Name 2",
        "Country Name 3",
      ],
      State: ["Select State Name", "State Name 1", "State Name 2", "State Name 3"],
      Mode: ["Select Payment Mode", "Cash", "Cheque"],
      Status: ["Select Payment Status", "Paid", "Pending", "Cancelled"],
    };
  },
  props: {
    title1: {
      type: String,
      default: "",
    },
    title2: {
      type: String,
      default: "",
    },
  },
};
</script>
