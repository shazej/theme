<template>
  <div class="sidebar-header" :class="$route.meta.sidebarheaderClass">
    <div class="sidebar-logo">
      <router-link to="index">
        <img src="@/assets/img/logo.png" class="img-fluid logo" alt="" />
      </router-link>

      <router-link to="index">
        <img src="@/assets/img/logo-small.png" class="img-fluid logo-small" alt="" />
      </router-link>
    </div>
  </div>
</template>
