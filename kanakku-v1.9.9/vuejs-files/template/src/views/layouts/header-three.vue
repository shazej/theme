<template>
  <!-- Header -->
  <div class="header" :class="$route.meta.headerClass">
    <div class="container">
      <!-- Logo -->
      <div class="header-left header-left-five">
        <router-link to="index" class="logo">
          <img src="@/assets/img/logo.png" alt="Logo" />
        </router-link>
        <router-link to="index" class="white-logo">
          <img src="@/assets/img/logo-white.png" alt="Logo" />
        </router-link>
        <router-link to="index" class="logo logo-small">
          <img src="@/assets/img/logo-small.png" alt="Logo" width="30" height="30" />
        </router-link>
      </div>
      <!-- /Logo -->
      <toggle />

      <div class="top-nav-search">
        <search />
      </div>

      <mobilemenu />

      <!-- Header Menu -->
      <ul class="nav nav-tabs user-menu">
        <flagheader />

        <notification />

        <user />
      </ul>
    </div>
    <!-- /Header Menu -->
  </div>

  <!-- /Header -->
</template>
<script>
export default {
  data() {
    return {};
  },
  mounted() {
    const wrapper = document.querySelector(".main-wrapper");
    const pageWrapper = document.querySelector(".page-wrapper");
    const toggleBtn = document.querySelector("#toggle_btn");
    const body = document.querySelector("body");
    const subdrop = document.querySelectorAll(".subdrop + ul");
    const mobileBtn = document.querySelector("#mobile_btn");
    const sidebarOverlay = document.createElement("div");
    sidebarOverlay.classList.add("sidebar-overlay");
    document.body.appendChild(sidebarOverlay);

    $(document).on("click", "#toggle_btn", function () {
      if ($("body").hasClass("mini-sidebar")) {
        $("body").removeClass("mini-sidebar");
        $(".subdrop + ul").slideDown();
      } else {
        $("body").addClass("mini-sidebar");
        $(".subdrop + ul").slideUp();
      }
      setTimeout(function () {
        // mA.redraw();
        // mL.redraw();
      }, 300);
      return false;
    });

    $(document).on("mouseover", function (e) {
      e.stopPropagation();
      if ($("body").hasClass("mini-sidebar") && $("#toggle_btn").is(":visible")) {
        var targ = $(e.target).closest(".sidebar").length;
        if (targ) {
          $("body").addClass("expand-menu");
          $(".subdrop + ul").slideDown();
        } else {
          $("body").removeClass("expand-menu");
          $(".subdrop + ul").slideUp();
        }
        return false;
      }
    });

    mobileBtn.addEventListener("click", function () {
      wrapper.classList.toggle("slide-nav");
      sidebarOverlay.classList.toggle("opened");
      document.documentElement.classList.toggle("menu-opened");
      return false;
    });

    sidebarOverlay.addEventListener("click", function () {
      wrapper.classList.remove("slide-nav");
      sidebarOverlay.classList.remove("opened");
      document.documentElement.classList.remove("menu-opened");
    });

    if (pageWrapper) {
      const height = window.innerHeight;
      pageWrapper.style.minHeight = `${height}px`;
    }

    window.addEventListener("resize", function () {
      if (pageWrapper) {
        const height = window.innerHeight;
        pageWrapper.style.minHeight = `${height}px`;
      }
    });
  },
};
</script>
