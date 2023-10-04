<template>
  <!-- Main Wrapper -->
  <div class="main-wrapper">
    <layout-header></layout-header>
    <layout-sidebar></layout-sidebar>

    <!-- Page Wrapper -->
    <div class="page-wrapper">
      <div class="content container-fluid">
        <componentheader :title="title" />
        <!-- Alerts -->
        <div class="card bg-white">
          <div class="card-body">
            <b-alert show dismissible variant="primary">
              <strong>Holy guacamole!</strong> You should check in on some of those fields
              below.
            </b-alert>
            <b-alert show dismissible variant="secondary">
              <strong>Holy guacamole!</strong> You should check in on some of those fields
              below.
            </b-alert>
            <b-alert show dismissible variant="success">
              <strong>Holy guacamole!</strong> You should check in on some of those fields
              below.
            </b-alert>
            <b-alert show dismissible variant="danger">
              <strong>Holy guacamole!</strong> You should check in on some of those fields
              below.
            </b-alert>
            <b-alert show dismissible variant="warning">
              <strong>Holy guacamole!</strong> You should check in on some of those fields
              below.
            </b-alert>
            <b-alert show dismissible variant="info">
              <strong>Holy guacamole!</strong> You should check in on some of those fields
              below.
            </b-alert>
            <b-alert show dismissible variant="light">
              <strong>Holy guacamole!</strong> You should check in on some of those fields
              below.
            </b-alert>
            <b-alert show dismissible variant="dark">
              <strong>Holy guacamole!</strong> You should check in on some of those fields
              below.
            </b-alert>
          </div>
        </div>
        <!-- /Alerts -->
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
      title: "Alert",
    };
  },
};
</script>
