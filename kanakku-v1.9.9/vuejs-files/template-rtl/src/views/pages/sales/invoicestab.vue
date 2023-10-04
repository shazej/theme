<template>
  <!-- All Invoice -->
  <div class="card invoices-tabs-card">
    <div class="invoices-main-tabs">
      <div class="row align-items-center">
        <div class="col-lg-12">
          <div class="invoices-tabs">
            <ul>
              <li>
                <router-link
                  :class="currentPath == 'invoices' ? 'active' : 'notactive'"
                  to="invoices"
                  >All Invoice</router-link
                >
              </li>
              <li>
                <router-link
                  :class="currentPath == 'invoices-paid' ? 'active' : 'notactive'"
                  to="invoices-paid"
                  >Paid</router-link
                >
              </li>
              <li>
                <router-link
                  :class="currentPath == 'invoices-overdue' ? 'active' : 'notactive'"
                  to="invoices-overdue"
                  >Overdue</router-link
                >
              </li>
              <li>
                <router-link
                  :class="currentPath == 'invoices-draft' ? 'active' : 'notactive'"
                  to="invoices-draft"
                  >Draft</router-link
                >
              </li>
              <li>
                <router-link
                  :class="currentPath == 'invoices-recurring' ? 'active' : 'notactive'"
                  to="invoices-recurring"
                  >Recurring</router-link
                >
              </li>
              <li>
                <router-link
                  :class="currentPath == 'invoices-cancelled' ? 'active' : 'notactive'"
                  to="invoices-cancelled"
                  >Cancelled</router-link
                >
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /All Invoice -->
</template>
<script>
export default {
  data() {
    return {};
  },
  computed: {
    currentPath() {
      return this.$route.name;
    },
  },
};
</script>
