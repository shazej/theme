<template>
  <!-- Main Wrapper -->
  <div class="main-wrapper">
    <layout-header></layout-header>
    <layout-sidebar></layout-sidebar>
    <!-- Page Wrapper -->
    <div class="page-wrapper">
      <div class="content container-fluid">
        <div class="content-page-header">
          <h5>Add Blog</h5>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card-body">
              <div class="form-group-item border-0 pb-0">
                <div class="row">
                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="form-group">
                      <label>Title <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" placeholder="Enter Title" />
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="form-group">
                      <label>Category</label>
                      <vue-select :options="Category" placeholder="Select Category" />
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="form-group">
                      <label>Parent Category</label>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Enter Parent Category"
                      />
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-12">
                    <div class="form-group" id="summernote_container">
                      <label class="form-control-label">Description</label>
                      <SummernoteEditor
                        v-model="myValue"
                        @update:modelValue="summernoteChange($event)"
                        @summernoteImageLinkInsert="summernoteImageLinkInsert"
                      />
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-12">
                    <div class="form-group">
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
              <div class="text-end mt-4">
                <button type="reset" class="btn btn-primary cancel me-2">Cancel</button>
                <b-button type="submit" variant="primary">Add Post</b-button>
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
import SummernoteEditor from "vue3-summernote-editor";
export default {
  components: {
    SummernoteEditor,
  },
  data() {
    return {
      myValue: "Description",
      Category: [" Select Category", "Category 1", "Category 2", "Category 3"],
    };
  },
  mounted() {
    document.addEventListener("DOMContentLoaded", function () {
      document.querySelector("#image_sign").addEventListener("change", function () {
        document.querySelector("#frames").innerHTML = "";
        for (var i = 0; i < this.files.length; i++) {
          var img = document.createElement("img");
          img.src = window.URL.createObjectURL(this.files[i]);
          img.width = 100;
          img.height = 100;
          document.querySelector("#frames").appendChild(img);
        }
      });
    });
  },
  methods: {
    summernoteChange(newValue) {
      console.log("summernoteChange", newValue);
    },
    summernoteImageLinkInsert(...args) {
      console.log("summernoteImageLinkInsert()", args);
    },
  },
};
</script>
