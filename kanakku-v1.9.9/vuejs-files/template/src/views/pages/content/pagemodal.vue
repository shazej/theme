<template>
  <!-- Modal -->
  <div class="modal custom-modal fade" id="pages_edit" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content">
        <div class="modal-header border-0 pb-0">
          <div class="form-header modal-header-title text-start mb-0">
            <h4 class="mb-0">Edit Page</h4>
          </div>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span class="align-center" aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="form-group">
                <label>Page Title(English)</label>
                <input type="text" class="form-control" placeholder="About Us" />
              </div>
            </div>
            <div class="col-lg-12 col-md-12">
              <div class="form-group">
                <label>Page Slug</label>
                <input type="text" class="form-control" placeholder="about-us" />
              </div>
            </div>
            <div class="col-lg-12 col-md-12">
              <div class="form-group mb-0">
                <label>Page Content(English)</label>
                <textarea
                  rows="5"
                  cols="5"
                  class="form-control"
                  placeholder="about us page contents"
                ></textarea>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-back me-2"
            >Back</a
          >
          <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary"
            >Save</a
          >
        </div>
      </div>
    </div>
  </div>
  <!-- /Modal -->
  <!-- Delete Items Modal -->
  <div class="modal custom-modal fade" id="page_delete" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content">
        <div class="modal-body">
          <div class="form-header">
            <h3>Delete Pages list</h3>
            <p>Are you sure want to delete?</p>
          </div>
          <div class="modal-btn delete-action">
            <div class="row">
              <div class="col-6">
                <a href="javascript:;" class="btn btn-primary paid-continue-btn"
                  >Delete</a
                >
              </div>
              <div class="col-6">
                <a
                  href="javascript:;"
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
  <!-- /Delete Items Modal -->
  <!-- Add Tax & Discount Modal -->
  <div class="modal custom-modal fade" id="add_discount" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content">
        <div class="modal-header border-0 pb-0">
          <div class="form-header modal-header-title text-start mb-0">
            <h4 class="mb-0">Add Tax & Discount</h4>
          </div>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span class="align-center" aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="form-group">
                <label>Rate</label>
                <input type="number" class="form-control" placeholder="120" />
              </div>
            </div>
            <div class="col-lg-12 col-md-12">
              <div class="form-group">
                <label>Discount Amount</label>
                <input type="number" class="form-control" placeholder="0" />
              </div>
            </div>
            <div class="col-lg-12 col-md-12">
              <div class="form-group mb-0">
                <label>Tax</label>
                <vue-select :options="NA" placeholder="N/A" />
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer add-tax-btns">
          <a href="javascript:;" data-bs-dismiss="modal" class="btn add-btn-cancel-btn"
            >Cancel</a
          >
          <a
            href="javascript:;"
            data-bs-dismiss="modal"
            class="btn btn-primary add-tax-save-btn"
            >Save</a
          >
        </div>
      </div>
    </div>
  </div>
  <!-- /Add Tax & Discount Modal -->

  <!-- Delete Items Modal -->
  <div class="modal custom-modal fade" id="delete_discount" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content">
        <div class="modal-header border-0 justify-content-center pb-0">
          <div class="form-header modal-header-title text-center mb-0">
            <h4 class="mb-2">Delete Product / Services</h4>
            <p>Are you sure want to delete?</p>
          </div>
        </div>
        <div class="modal-body">
          <div class="modal-btn delete-action">
            <div class="row">
              <div class="col-6">
                <a
                  href="javascript:;"
                  data-bs-dismiss="modal"
                  class="btn btn-primary paid-continue-btn"
                  >Delete</a
                >
              </div>
              <div class="col-6">
                <a
                  href="javascript:;"
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
  <!-- /Delete Items Modal -->

  <!-- Edit Bank Details Modal -->
  <div class="modal custom-modal fade" id="bank_details" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content">
        <div class="modal-header border-0 pb-0">
          <div class="form-header modal-header-title text-start mb-0">
            <h4 class="mb-0">{{ banktitle }}</h4>
          </div>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span class="align-center" aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="form-group">
                <label>Bank Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" placeholder="Enter Bank Name" />
              </div>
            </div>
            <div class="col-lg-12 col-md-12">
              <div class="form-group">
                <label>Account Number <span class="text-danger">*</span></label>
                <input
                  type="number"
                  class="form-control"
                  placeholder="Enter Account Number"
                />
              </div>
            </div>
            <div class="col-lg-12 col-md-12">
              <div class="form-group">
                <label>Branch Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" placeholder="Enter Branch Name" />
              </div>
            </div>
            <div class="col-lg-12 col-md-12">
              <div class="form-group mb-0">
                <label>IFSC Code <span class="text-danger">*</span></label>
                <input type="number" class="form-control" placeholder="Enter IFSC COde" />
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a
            href="javascript:;"
            data-bs-dismiss="modal"
            class="btn btn-primary paid-cancel-btn me-2"
            >Back</a
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
  <!-- /Edit Bank Details Modal -->
</template>
<script>
export default {
  data() {
    return {
      NA: ["N/A", "5%", "10%", "15%"],
    };
  },
  props: {
    banktitle: {
      type: String,
      default: "",
    },
  },
};
</script>
