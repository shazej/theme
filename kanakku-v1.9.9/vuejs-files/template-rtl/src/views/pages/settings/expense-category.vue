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
            <div class="card card-table">
              <div class="card-header">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title">Expense Category</h5>
                  </div>
                  <div class="col-auto">
                    <a
                      href="javascript:void(0);"
                      class="btn btn-outline-primary btn-sm"
                      data-bs-toggle="modal"
                      data-bs-target="#add_category"
                      >Add New Category</a
                    >
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped custom-table mb-0">
                    <thead>
                      <tr>
                        <th>Category</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th class="text-end">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Accounts</td>
                        <td>Lorem ipsum dollar</td>
                        <td>
                          <span class="badge bg-success-light">Active</span>
                        </td>
                        <td class="text-end">
                          <a
                            href="javascript:;"
                            data-bs-toggle="modal"
                            data-bs-target="#edit_category"
                            class="btn btn-sm btn-white text-success me-2"
                            ><i class="far fa-edit me-1"></i> Edit</a
                          >
                          <a
                            href="javascript:;"
                            data-bs-toggle="modal"
                            data-bs-target="#delete_category"
                            class="btn btn-sm btn-white text-danger me-2"
                            ><i class="far fa-trash-alt me-1"></i>Delete</a
                          >
                        </td>
                      </tr>
                      <tr>
                        <td>Sales</td>
                        <td>Lorem ipsum dollar</td>
                        <td>
                          <span class="badge bg-danger-light">Inactive</span>
                        </td>
                        <td class="text-end">
                          <a
                            href="javascript:;"
                            data-bs-toggle="modal"
                            data-bs-target="#edit_category"
                            class="btn btn-sm btn-white text-success me-2"
                            ><i class="far fa-edit me-1"></i> Edit</a
                          >
                          <a
                            href="javascript:;"
                            data-bs-toggle="modal"
                            data-bs-target="#delete_category"
                            class="btn btn-sm btn-white text-danger me-2"
                            ><i class="far fa-trash-alt me-1"></i>Delete</a
                          >
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- Add Category Modal -->
          <div id="add_category" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header border-0 pb-0">
                  <div class="form-header modal-header-title text-start mb-0">
                    <h4 class="mb-0">Add Expense Category</h4>
                  </div>
                  <button
                    type="button"
                    class="close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                  >
                    <span class="align-center" aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <b-form>
                    <div class="form-group">
                      <label>Category <span class="text-danger">*</span></label>
                      <b-form-input class="form-control" type="text" />
                    </div>
                    <div class="form-group">
                      <label>Description <span class="text-danger">*</span></label>
                      <textarea class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                      <label>Status <span class="text-danger">*</span></label>
                      <vue-select :options="Pending" placeholder="Pending" />
                    </div>
                    <div class="submit-section">
                      <b-button variant="primary submit-btn">Submit</b-button>
                    </div>
                  </b-form>
                </div>
              </div>
            </div>
          </div>
          <!-- /Add Category Modal -->

          <!-- Edit Category Modal -->
          <div id="edit_category" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Edit Expense Category</h5>
                  <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                  ></button>
                </div>
                <div class="modal-body">
                  <b-form>
                    <div class="form-group">
                      <label>Category <span class="text-danger">*</span></label>
                      <b-form-input class="form-control" value="VAT" type="text" />
                    </div>
                    <div class="form-group">
                      <label>Description <span class="text-danger">*</span></label>
                      <textarea class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                      <label>Status <span class="text-danger">*</span></label>
                      <vue-select :options="Active" placeholder="Active" />
                    </div>
                    <div class="submit-section">
                      <b-button variant="primary submit-btn">Save</b-button>
                    </div>
                  </b-form>
                </div>
              </div>
            </div>
          </div>
          <!-- /Edit Category Modal -->

          <!-- Delete Category Modal -->
          <div class="modal custom-modal fade" id="delete_category" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-body">
                  <div class="modal-icon text-center mb-3">
                    <i class="fas fa-trash-alt text-danger"></i>
                  </div>
                  <div class="modal-text text-center">
                    <h3>Delete Expense Category</h3>
                    <p>Are you sure want to delete?</p>
                  </div>
                </div>
                <div class="modal-footer">
                  <b-button
                    type="button"
                    class="btn btn-primary paid-cancel-btn me-2"
                    data-bs-dismiss="modal"
                  >
                    Cancel
                  </b-button>
                  <b-button variant="primary">Delete</b-button>
                </div>
              </div>
            </div>
          </div>
          <!-- /Delete Category Modal -->
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
      Active: ["Active", "Inactive"],
      Pending: ["Pending", "Approved"],
    };
  },
};
</script>
