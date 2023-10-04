<template>
  <div class="main-wrapper">
    <layout-header></layout-header>
    <layout-sidebar></layout-sidebar>

    <!-- Page Wrapper -->
    <div class="page-wrapper">
      <div class="content container-fluid">
        <div class="content-page-header">
          <h5>Add Unit</h5>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card-body">
              <div class="form-group-item border-0 pb-0">
                <div class="row">
                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="form-group">
                      <label>Name <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" placeholder="Enter Title" />
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="form-group">
                      <label>Symbol <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" placeholder="Enter Slug" />
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="form-group">
                      <label>Parent Unit <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" placeholder="Parent Unit" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-end mt-4">
                <button type="reset" class="btn btn-primary cancel me-2">Cancel</button>
                <b-button type="submit" variant="primary">Add Unit</b-button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /Page Wrapper -->
  </div>
</template>
