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
    var $wrapper = $(".main-wrapper");
    var $pageWrapper = $(".page-wrapper");
    $("body").append('<div class="sidebar-overlay"></div>');
    $(document).on("click", "#mobile_btn", function () {
      $wrapper.toggleClass("slide-nav");
      $(".sidebar-overlay").toggleClass("opened");
      $("html").toggleClass("menu-opened");
      return false;
    });

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

    $("body").append('<div class="sidebar-overlay"></div>');
    $(document).on("click", "#mobile_btn", function () {
      $wrapper.toggleClass("slide-nav");
      $(".sidebar-overlay").toggleClass("opened");
      $("html").toggleClass("menu-opened");
      return false;
    });

    // Sidebar overlay
    $(".sidebar-overlay").on("click", function () {
      $wrapper.removeClass("slide-nav");
      $(".sidebar-overlay").removeClass("opened");
      $("html").removeClass("menu-opened");
    });

    if ($(".page-wrapper").length > 0) {
      var height = $(window).height();
      $(".page-wrapper").css("min-height", height);
    }

    // Page Content Height Resize
    $(window).resize(function () {
      if ($(".page-wrapper").length > 0) {
        var height = $(window).height();
        $(".page-wrapper").css("min-height", height);
      }
    });
  },
};
</script>
