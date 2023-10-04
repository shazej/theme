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
          <!-- Tooltip -->
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Html Element</h5>
              </div>
              <div class="card-body">
                <div class="popover-list">
                  <b-button
                    variant="primary me-1"
                    v-b-tooltip.hover
                    title="Popover title"
                  >
                    Hover Me
                  </b-button>
                </div>
              </div>
            </div>
          </div>
          <!-- /Tooltip -->

          <!-- Popover -->
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Direction Tooltip</h5>
              </div>
              <div class="card-body">
                <div class="tooltip-list">
                  <b-button
                    variant="primary me-1"
                    v-b-tooltip.hover.top
                    title="Tooltip on top"
                  >
                    Tooltip on top
                  </b-button>
                  <b-button
                    variant="primary me-1"
                    v-b-tooltip.hover.right
                    title="Tooltip on right"
                  >
                    Tooltip on right
                  </b-button>
                  <b-button
                    variant="primary me-1"
                    v-b-tooltip.hover.bottom
                    title="Tooltip on bottom"
                  >
                    Tooltip on bottom
                  </b-button>
                  <b-button
                    variant="primary me-1"
                    v-b-tooltip.hover.left
                    title="Tooltip on left"
                  >
                    Tooltip on left
                  </b-button>
                </div>
              </div>
            </div>
          </div>
          <!-- /Popover -->

          <!-- Tooltip -->
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Html Element</h5>
              </div>
              <div class="card-body">
                <div class="popover-list">
                  <b-button
                    variant="primary me-1"
                    v-b-tooltip.hover
                    title="<em>Tooltip</em> <u>with</u> <b>HTML</b>"
                  >
                    Tooltip with HTML
                  </b-button>
                  <b-button
                    variant="primary me-1"
                    v-b-tooltip.click.bottom
                    title="<em>Tooltip</em> <u>with</u> <b>HTML</b>"
                  >
                    Click Me
                  </b-button>
                </div>
              </div>
            </div>
          </div>
          <!-- /Tooltip -->
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
      title: "Tooltip",
    };
  },
};
</script>
<style>
:root {
  --popper-theme-background-color: #333333;
  --popper-theme-background-color-hover: #333333;
  --popper-theme-text-color: #ffffff;
  --popper-theme-border-width: 0px;
  --popper-theme-border-style: solid;
  --popper-theme-border-radius: 10px;
  --popper-theme-padding: 10px;
  --popper-theme-box-shadow: 0 6px 30px -6px rgba(0, 0, 0, 0.25);
}
</style>
