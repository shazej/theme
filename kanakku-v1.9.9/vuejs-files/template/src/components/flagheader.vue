<template>
  <!-- Flag -->
  <li class="nav-item dropdown has-arrow flag-nav">
    <a
      class="nav-link dropdown-toggle"
      data-bs-toggle="dropdown"
      href="javascript:void(0)"
      role="button"
    >
      <img src="@/assets/img/flags/us1.png" alt="" height="20" />
      <span class="adminmodule">English</span>
    </a>
    <div class="dropdown-menu dropdown-menu-right">
      <a
        href="javascript:void(0);"
        v-for="(entry, i) in languages"
        :key="`Lang${i}`"
        :value="entry"
        @click="entry.language, entry.title, entry.iso"
        :class="{ active: lan === entry.language }"
        class="dropdown-item"
        data-lang="en"
        title="English"
      >
        <flag :iso="entry.iso" data-bs-toggle="tooltip" class="me-2" />
        <span class="align-middle">{{ entry.title }}</span>
      </a>
    </div>
  </li>
  <li class="nav-item has-arrow dropdown-heads">
    <a href="javascript:void(0);" class="toggle-switch">
      <i class="feather feather-moon"></i>
    </a>
  </li>
  <!-- /Flag -->
</template>
<script>
export default {
  data() {
    return {
      languages: [
        {
          iso: "lr",
          language: "lr",
          title: "English",
        },
        {
          iso: "bl",
          language: "bl",
          title: "Francais",
        },
        {
          iso: "cn",
          language: "cn",
          title: "Turkce",
        },
      ],
    };
  },
};
</script>
