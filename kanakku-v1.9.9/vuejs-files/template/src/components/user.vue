<template>
  <!-- User Menu -->
  <li class="nav-item dropdown">
    <a href="javascript:void(0)" class="user-link nav-link" data-bs-toggle="dropdown">
      <span class="user-img">
        <img src="@/assets/img/profiles/avatar-07.jpg" alt="" class="profilesidebar" />
        <span class="animate-circle"></span>
      </span>
      <span class="user-content">
        <span class="user-details">Admin</span>
        <span class="user-name">John Smith</span>
      </span>
    </a>
    <div class="dropdown-menu menu-drop-user">
      <div class="profilemenu">
        <div class="subscription-menu">
          <router-link class="dropdown-item" to="/profile"
            ><i data-feather="user" class="me-1"></i> Profile</router-link
          >
          <router-link class="dropdown-item" to="/settings"
            ><i data-feather="settings" class="me-1"></i> Settings</router-link
          >
        </div>
        <div class="subscription-logout">
          <router-link class="dropdown-item" to="/"
            ><i data-feather="log-out" class="me-1"></i> Logout</router-link
          >
        </div>
      </div>
    </div>
  </li>
  <!-- /User Menu -->
</template>
