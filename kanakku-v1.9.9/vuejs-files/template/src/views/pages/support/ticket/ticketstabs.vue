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
                  :class="
                    currentPath == 'tickets' || currentPath == 'tickets-list'
                      ? 'active'
                      : 'notactive'
                  "
                  to="tickets"
                  >All</router-link
                >
              </li>
              <li>
                <router-link
                  :class="currentPath == 'tickets-pending' ? 'active' : 'notactive'"
                  to="tickets-pending"
                  >Pending</router-link
                >
              </li>
              <li>
                <router-link
                  :class="currentPath == 'tickets-overdue' ? 'active' : 'notactive'"
                  to="tickets-overdue"
                  >Overdue</router-link
                >
              </li>
              <li>
                <router-link
                  :class="currentPath == 'tickets-draft' ? 'active' : 'notactive'"
                  to="tickets-draft"
                  >Draft</router-link
                >
              </li>
              <li>
                <router-link
                  :class="currentPath == 'tickets-recurring' ? 'active' : 'notactive'"
                  to="tickets-recurring"
                  >Recurring</router-link
                >
              </li>
              <li>
                <router-link
                  :class="currentPath == 'tickets-cancelled' ? 'active' : 'notactive'"
                  to="tickets-cancelled"
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
