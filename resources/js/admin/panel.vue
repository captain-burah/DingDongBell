<template>
<div class="wrapper" id="app">

  <!-- Navbar -->
  <nav class="main-header elevation-2 navbar sideMenu navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="" class="nav-link">Administrator</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <button type="button" class="btn btn-dark" @click="logout">
          Logout <i class="fas fa-sign-out-alt"></i>
        </button>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar main-sidebar-custom sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link text-center">
      <span class="brand-text font-weight-light">IT-Panthiya | Institute for ICT</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar os-host os-theme-light os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-transition">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/img/icons/fox.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Administrator</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item my-2">
            <a href="/admin/panel/" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item my-2">
            <a href="/admin/panel/course" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Class Mgt
              </p>
            </a>
          </li>

          <li class="nav-item my-2">
            <a href="/admin/panel/link-mgt" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Class-Link Mgt
              </p>
            </a>
          </li>

          <li class="nav-item my-2">
            <a href="/admin/panel/student-mgt" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Students Mgt
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>

    <div class="sidebar-custom text-center">
      <a href="#" class="btn btn-link text-center">
        <strong>
            <a href="https://upwritsolutions.com" class="text-white text-center" style="font-family: 'Caveat', cursive; font-weight: 500; font-size: 1.3em;">
              a work of UpWrit
            </a>
        </strong> 
      </a>
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-height: 215.7px;">
    <router-view name="adminchild">

    </router-view>
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      All rights reserved.
    </div>
    <!-- Default to the left -->
    <strong>Copyright © 2021-2022 |  
        <a href="http://upwritsolutions.com" class="text-primary" style="font-family: 'Caveat', cursive; font-weight: 500; font-size: 1.3em;">
          a work of UpWrit
        </a>
    </strong> 
  </footer>
<div id="sidebar-overlay"></div>
</div>
</template>
<script>
    import { inject, onMounted } from "vue";
    import { useRouter, useRoute } from 'vue-router'
    export default{
        name: 'admin-panel',
        setup(){
            let cookies = inject('cookies');
            const router = useRouter();
            const checkLogin = function() {
                if (!cookies.get('access_token')){
                    router.push('/admin')
                }
            }

            const logout = function() {
                if (cookies.get('access_token')){
                    cookies.set('access_token', '');
                    router.push('/admin')
                }
            }

            onMounted(checkLogin);

            return {
                logout
            }
        }
    }
</script>