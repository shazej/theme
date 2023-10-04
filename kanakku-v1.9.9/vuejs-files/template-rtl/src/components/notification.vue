<template>
  <!-- Notifications -->
  <li class="nav-item dropdown flag-nav dropdown-heads">
    <a href="javascript:void(0)" class="nav-link" data-bs-toggle="dropdown">
      <i class="feather feather-bell"></i> <span class="badge rounded-pill"></span>
    </a>
    <div class="dropdown-menu notifications">
      <div class="topnav-dropdown-header">
        <span class="notification-title">Notifications</span>
        <a href="javascript:void(0)" class="clear-noti"> Clear All</a>
      </div>
      <div class="noti-content">
        <ul class="notification-list">
          <li class="notification-message">
            <router-link to="/activities">
              <div class="media d-flex">
                <span class="avatar avatar-sm">
                  <img
                    class="avatar-img rounded-circle"
                    alt=""
                    src="../assets/img/profiles/avatar-02.jpg"
                  />
                </span>
                <div class="media-body">
                  <p class="noti-details">
                    <span class="noti-title">Brian Johnson</span> paid the invoice
                    <span class="noti-title">#DF65485</span>
                  </p>
                  <p class="noti-time">
                    <span class="notification-time">4 mins ago</span>
                  </p>
                </div>
              </div>
            </router-link>
          </li>
          <li class="notification-message">
            <router-link to="/activities">
              <div class="media d-flex">
                <span class="avatar avatar-sm">
                  <img
                    class="avatar-img rounded-circle"
                    alt=""
                    src="../assets/img/profiles/avatar-03.jpg"
                  />
                </span>
                <div class="media-body">
                  <p class="noti-details">
                    <span class="noti-title">Marie Canales</span> has accepted your
                    estimate <span class="noti-title">#GTR458789</span>
                  </p>
                  <p class="noti-time">
                    <span class="notification-time">6 mins ago</span>
                  </p>
                </div>
              </div>
            </router-link>
          </li>
          <li class="notification-message">
            <router-link to="/activities">
              <div class="media d-flex">
                <div class="avatar avatar-sm">
                  <span class="avatar-title rounded-circle bg-primary-light"
                    ><i class="far fa-user"></i
                  ></span>
                </div>
                <div class="media-body">
                  <p class="noti-details">
                    <span class="noti-title">New user registered</span>
                  </p>
                  <p class="noti-time">
                    <span class="notification-time">8 mins ago</span>
                  </p>
                </div>
              </div>
            </router-link>
          </li>
          <li class="notification-message">
            <router-link to="/activities">
              <div class="media d-flex">
                <span class="avatar avatar-sm">
                  <img
                    class="avatar-img rounded-circle"
                    alt=""
                    src="../assets/img/profiles/avatar-04.jpg"
                  />
                </span>
                <div class="media-body">
                  <p class="noti-details">
                    <span class="noti-title">Barbara Moore</span> declined the invoice
                    <span class="noti-title">#RDW026896</span>
                  </p>
                  <p class="noti-time">
                    <span class="notification-time">12 mins ago</span>
                  </p>
                </div>
              </div>
            </router-link>
          </li>
          <li class="notification-message">
            <router-link to="/activities">
              <div class="media d-flex">
                <div class="avatar avatar-sm">
                  <span class="avatar-title rounded-circle bg-info-light"
                    ><i class="far fa-comment"></i
                  ></span>
                </div>
                <div class="media-body">
                  <p class="noti-details">
                    <span class="noti-title">You have received a new message</span>
                  </p>
                  <p class="noti-time">
                    <span class="notification-time">2 days ago</span>
                  </p>
                </div>
              </div>
            </router-link>
          </li>
        </ul>
      </div>
      <div class="topnav-dropdown-footer">
        <router-link to="/activities">View all Notifications</router-link>
      </div>
    </div>
  </li>
  <!-- /Notifications -->
  <li class="nav-item has-arrow dropdown-heads">
    <a href="javascript:void(0);" class="win-maximize" @click="initFullScreen">
      <i class="feather feather-maximize"></i>
    </a>
  </li>
</template>
<script>
export default {
  methods: {
    setLanguage(locale, country, flag) {
      this.lan = locale;
      this.text = country;
      this.flag = flag;
    },
    initFullScreen() {
      document.body.classList.toggle("fullscreen-enable");
      if (
        !document.fullscreenElement &&
        /* alternative standard method */
        !document.mozFullScreenElement &&
        !document.webkitFullscreenElement
      ) {
        // current working methods
        if (document.documentElement.requestFullscreen) {
          document.documentElement.requestFullscreen();
        } else if (document.documentElement.mozRequestFullScreen) {
          document.documentElement.mozRequestFullScreen();
        } else if (document.documentElement.webkitRequestFullscreen) {
          document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
        }
      } else {
        if (document.cancelFullScreen) {
          document.cancelFullScreen();
        } else if (document.mozCancelFullScreen) {
          document.mozCancelFullScreen();
        } else if (document.webkitCancelFullScreen) {
          document.webkitCancelFullScreen();
        }
      }
    },
  },
};
</script>
