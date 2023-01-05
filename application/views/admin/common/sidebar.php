<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>


  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a style="color: white;" class="brand-link">
      <img src="<?php echo base_url('assets/images/logo.png') ?>" alt="" class="brand-image img-circle elevation-3" style="border-radius: 0px !important;" />
      <span class="brand-text font-weight-light">Web Application</span>
    </a>
    
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?php echo base_url('admin/dashboard') ?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo base_url('admin/user') ?>" class="nav-link">
              <i class="fas fa-user-friends nav-icon"></i>
              <p>Admins</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo base_url('logout') ?>" class="nav-link">
              <i class="fas fa-sign-out-alt nav-icon"></i>
              <p>Log out</p>
            </a>
          </li>
          
          <!-- <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                
              </li>
              
              <li class="nav-item">
                <a href="<?php echo base_url('logout') ?>" class="nav-link">
                  <i class="fas fa-sign-out-alt nav-icon"></i>
                  <p>Log out</p>
                </a>
              </li>
            </ul>
          </li> -->
          
      </nav>
      <!-- /.sidebar-menu -->
    </div>
  </aside>