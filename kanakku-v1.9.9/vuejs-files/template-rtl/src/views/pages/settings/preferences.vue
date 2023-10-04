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
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Preferences</h5>
              </div>
              <div class="card-body">
                <!-- Form -->
                <b-form>
                  <div class="row form-group">
                    <label for="currencyLabel" class="col-sm-3 col-form-label input-label"
                      >Currency</label
                    >
                    <div class="col-sm-9">
                      <vue-select :options="USD" placeholder="USD - US Dollar" />
                    </div>
                  </div>
                  <div class="row form-group">
                    <label for="languageLabel" class="col-sm-3 col-form-label input-label"
                      >Language</label
                    >
                    <div class="col-sm-9">
                      <vue-select :options="English" placeholder="English" />
                    </div>
                  </div>
                  <div class="row form-group">
                    <label for="timezoneLabel" class="col-sm-3 col-form-label input-label"
                      >Time Zone</label
                    >
                    <div class="col-sm-9">
                      <vue-select :options="English" placeholder="English" />
                    </div>
                  </div>
                  <div class="row form-group">
                    <label for="dateformat" class="col-sm-3 col-form-label input-label"
                      >Date Format</label
                    >
                    <div class="col-sm-9">
                      <vue-select :options="date" placeholder="2020 Nov 09" />
                    </div>
                  </div>
                  <div class="row form-group">
                    <label for="financialyear" class="col-sm-3 col-form-label input-label"
                      >Financial Year</label
                    >
                    <div class="col-sm-9">
                      <vue-select :options="month" placeholder="january-december" />
                    </div>
                  </div>

                  <!-- Toggle Switch -->
                  <label class="row form-group toggle-switch" for="preferencesSwitch1">
                    <span class="col-8 col-sm-9 toggle-switch-content ml-0">
                      <span class="d-block text-dark">Discount Per Item</span>
                      <span class="d-block text-muted"
                        >Enable this if you want to add Discount to individual invoice
                        items. By default, Discount is added directly to the
                        invoice.</span
                      >
                    </span>
                    <span class="col-4 col-sm-3">
                      <input
                        type="checkbox"
                        class="toggle-switch-input"
                        id="preferencesSwitch1"
                      />
                      <span class="toggle-switch-label ms-auto">
                        <span class="toggle-switch-indicator"></span>
                      </span>
                    </span>
                  </label>
                  <!-- /Toggle Switch -->

                  <div class="text-end">
                    <b-button variant="primary">Save Changes</b-button>
                  </div>
                </b-form>
                <!-- /Form -->
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
export default {
  setup() {
    return {
      title: "Settings",
      USD: [
        "USD - US Dollar",
        "GBP - British Pound",
        "EUR - Euro",
        "INR - Indian Rupee",
        "AUD - Australian Dollar",
      ],
      English: ["English", "French", "German", "Italian", "Spanish"],
      date: [
        "2020 Nov 09",
        "09 Nov 2020",
        "09/11/2020",
        "09.11.2020",
        "09-11-2020",
        "11/09/2020",
        "2020/11/09",
        "2020-11-09",
      ],
      month: [
        "january-december",
        "february-january",
        "march-february",
        "april-march",
        "may-april",
        "june-may",
        "july-june",
        "august-july",
        "september-august",
        "october-september",
        "november-october",
        "december-november",
      ],
    };
  },
};
</script>
