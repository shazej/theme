<template>
  <div class="main-wrapper">
    <layout-header></layout-header>
    <layout-sidebar></layout-sidebar>

    <!-- Page Wrapper -->
    <div class="page-wrapper">
      <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
          <div class="content-page-header">
            <h5>Calendar</h5>
            <div class="list-btn">
              <ul class="filter-list">
                <li>
                  <a
                    href="javascript:;"
                    class="btn btn-primary"
                    data-bs-toggle="modal"
                    data-bs-target="#add_event"
                    >Create Event</a
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- /Page Header -->

        <div class="row">
          <div class="col-lg-3 col-md-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title mb-2">Drag & Drop Event</h5>
                <div id="calendar-events" class="mb-3">
                  <div class="calendar-events" data-class="bg-info">
                    <i class="fas fa-circle text-info"></i> My Event One
                  </div>
                  <div class="calendar-events" data-class="bg-success">
                    <i class="fas fa-circle text-success"></i> My Event Two
                  </div>
                  <div class="calendar-events" data-class="bg-danger">
                    <i class="fas fa-circle text-danger"></i> My Event Three
                  </div>
                  <div class="calendar-events" data-class="bg-warning">
                    <i class="fas fa-circle text-warning"></i> My Event Four
                  </div>
                </div>
                <div class="checkbox mb-3">
                  <input id="drop-remove" type="checkbox" class="me-1" />
                  <label for="drop-remove"> Remove after drop </label>
                </div>
                <a
                  href="javascript:;"
                  data-bs-toggle="modal"
                  data-bs-target="#add_new_event"
                  class="btn mb-0 btn-primary btn-block w-100"
                >
                  <i class="fas fa-plus me-1"></i> Add Category
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-9 col-md-8">
            <div class="card bg-white">
              <div class="card-body">
                <div id="calendar"></div>
                <FullCalendar
                  :options="calendarOptions"
                  :events="events"
                  id="calendar-book"
                ></FullCalendar>
              </div>
            </div>
          </div>
        </div>

        <!-- Add Event Modal -->
        <div id="add_event" class="modal custom-modal fade" role="dialog">
          <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
              <div class="modal-header border-0 pb-0">
                <div class="form-header modal-header-title text-start mb-0">
                  <h4 class="mb-0">Add Event</h4>
                </div>
                <button
                  type="button"
                  class="close"
                  data-bs-dismiss="modal"
                  aria-label="Close"
                >
                  <span class="align-center" aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">
                <b-form>
                  <div class="form-group">
                    <label>Event Name <span class="text-danger">*</span></label>
                    <b-form-input class="form-control" type="text" />
                  </div>
                  <div class="form-group">
                    <label>Event Date <span class="text-danger">*</span></label>
                    <div class="cal-icon">
                      <datepicker
                        v-model="startdate"
                        class="picker"
                        :editable="true"
                        :clearable="false"
                      />
                    </div>
                  </div>
                  <div class="submit-section">
                    <button class="btn btn-primary submit-btn">Submit</button>
                  </div>
                </b-form>
              </div>
            </div>
          </div>
        </div>
        <!-- /Add Event Modal -->

        <!-- Add Event Modal -->
        <div class="modal custom-modal fade none-border" id="my_event">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Add Event</h4>
                <button
                  type="button"
                  class="close"
                  data-dismiss="modal"
                  aria-hidden="true"
                >
                  &times;
                </button>
              </div>
              <div class="modal-body"></div>
              <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-success save-event submit-btn">
                  Create event
                </button>
                <button
                  type="button"
                  class="btn btn-danger delete-event submit-btn"
                  data-dismiss="modal"
                >
                  Delete
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- /Add Event Modal -->

        <!-- Add Category Modal -->
        <div class="modal custom-modal fade" id="add_new_event">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header border-0 pb-0">
                <div class="form-header modal-header-title text-start mb-0">
                  <h4 class="mb-0">Add Category</h4>
                </div>
                <button
                  type="button"
                  class="close"
                  data-bs-dismiss="modal"
                  aria-label="Close"
                >
                  <span class="align-center" aria-hidden="true">×</span>
                </button>
              </div>

              <div class="modal-body">
                <b-form>
                  <div class="form-group">
                    <label>Category Name</label>
                    <input
                      class="form-control form-white"
                      placeholder="Enter name"
                      type="text"
                    />
                  </div>
                  <div class="form-group mb-0">
                    <label>Choose Category Color</label>
                    <select
                      class="form-control form-white select2"
                      data-placeholder="Choose a color..."
                      name="category-color"
                    >
                      <option value="success">Success</option>
                      <option value="danger">Danger</option>
                      <option value="info">Info</option>
                      <option value="primary">Primary</option>
                      <option value="warning">Warning</option>
                      <option value="inverse">Inverse</option>
                    </select>
                  </div>
                  <div class="submit-section">
                    <button
                      type="button"
                      class="btn btn-primary save-category submit-btn"
                      data-dismiss="modal"
                    >
                      Save
                    </button>
                  </div>
                </b-form>
              </div>
            </div>
          </div>
        </div>
        <!-- /Add Category Modal -->
      </div>
    </div>
    <!-- /Main Wrapper -->
  </div>
</template>

<script>
import FullCalendar from "@fullcalendar/vue3";
import dayGridPlugin from "@fullcalendar/daygrid";
import timeGridPlugin from "@fullcalendar/timegrid";
import interactionPlugin from "@fullcalendar/interaction";
import { ref } from "vue";
const currentDate = ref(new Date());
export default {
  components: {
    FullCalendar,
  },
  data() {
    return {
      startdate: currentDate,
      calendarOptions: {
        plugins: [
          dayGridPlugin,
          timeGridPlugin,
          interactionPlugin, // needed for dateClick
        ],
        headerToolbar: {
          left: "prev next today",
          center: "title",
          right: "dayGridMonth,timeGridWeek,timeGridDay",
        },
        events: [
          {
            title: "9:42a Test Event 1",
            start: "2023-04-26",
          },
          {
            title: "7:35a Test Event 3",
            start: "2023-04-30",
          },
          {
            title: "Event Name 4 2:49a",
            start: "2023-04-28",
          },
          {
            title: "Test Event 2 8:22a",
            start: "2023-04-28",
          },
        ],
        initialView: "dayGridMonth",
        editable: true,
        selectable: true,
        selectMirror: true,
        dayMaxEvents: true,
        weekends: true,
      },
    };
  },
};
</script>
