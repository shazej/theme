<template>
  <!-- Main Wrapper -->
  <div class="main-wrapper">
    <layout-header></layout-header>
    <layout-sidebar></layout-sidebar>
    <!-- Page Wrapper -->
    <div class="page-wrapper">
      <div class="content container-fluid">
        <div class="content-page-header">
          <h5>Add Category</h5>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card-body">
              <div class="form-group-item border-0 pb-0">
                <div class="row">
                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="form-group">
                      <label>Category Name <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" placeholder="Enter Title" />
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="form-group">
                      <label>Slug <span class="text-danger">*</span></label>
                      <input
                        type="text"
                        class="form-control mb-2"
                        placeholder="Enter Title"
                      />
                      <span class="optional"
                        >(If you leave it empty, it will be generated
                        automatically.)</span
                      >
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="form-group">
                      <label
                        >Description (Meta Tag) <span class="star-red">*</span></label
                      >
                      <vue3-tags-input :tags="tags" class="input-tags form-control" />
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="form-group">
                      <label>Keywords (Meta Tag) <span class="star-red">*</span></label>
                      <vue3-tags-input :tags="tag" class="input-tags form-control" />
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="form-group">
                      <label>Order <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" placeholder="Enter Title" />
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="form-group mb-0 mt-5">
                      <div class="check-mark-status d-flex justify-content-between">
                        <h6 class="label-text">Status</h6>
                        <div class="status-toggle">
                          <input id="rating_1" class="check" type="checkbox" checked="" />
                          <label for="rating_1" class="checktoggle checkbox-bg"
                            >checkbox</label
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="text-end">
                  <button type="submit" class="btn btn-primary cancel me-2">
                    Cancel
                  </button>
                  <b-button type="submit" variant="primary">Add Category</b-button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /Page Wrapper -->
    </div>
  </div>
  <!-- /Main Wrapper -->
</template>
<script>
import Vue3TagsInput from "vue3-tags-input";
export default {
  components: {
    Vue3TagsInput,
  },
  data() {
    return { tags: ["Description Tag"], tag: ["Keywords Tag"] };
  },
};
</script>
