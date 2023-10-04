<template>
  <!-- Header -->
  <div class="header header-one" :class="$route.meta.headerClass">
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
      });
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
