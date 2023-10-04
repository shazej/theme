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
                    currentPath == 'tickets-kanban' || currentPath == 'tickets'
                      ? 'active'
                      : 'notactive'
                  "
                  to="tickets-kanban"
                  >All</router-link
                >
              </li>
              <li>
                <router-link
                  :class="currentPath == 'tickets-list-pending' ? 'active' : 'notactive'"
                  to="tickets-list-pending"
                  >Pending</router-link
                >
              </li>
              <li>
                <router-link
                  :class="currentPath == 'tickets-list-overdue' ? 'active' : 'notactive'"
                  to="tickets-list-overdue"
                  >Overdue</router-link
                >
              </li>
              <li>
                <router-link
                  :class="currentPath == 'tickets-list-draft' ? 'active' : 'notactive'"
                  to="tickets-list-draft"
                  >Draft</router-link
                >
              </li>
              <li>
                <router-link
                  :class="
                    currentPath == 'tickets-list-recurring' ? 'active' : 'notactive'
                  "
                  to="tickets-list-recurring"
                  >Recurring</router-link
                >
              </li>
              <li>
                <router-link
                  :class="
                    currentPath == 'tickets-list-cancelled' ? 'active' : 'notactive'
                  "
                  to="tickets-list-cancelled"
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
