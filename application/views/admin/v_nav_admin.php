<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        
        <div class="sidebar-brand-text mx-3">Halaman Admin </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/user')?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Management User</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('krs/view_krs')?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Manajemen KRS</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('pendadaran/view_pendadaran')?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Manajemen Pendadaran</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('yudisium/view_yudisium')?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Manajemen Yudisium</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('wisuda/view_wisuda')?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Manajemen Wisuda</span></a>
      </li>
    

      <!-- Divider -->
      <hr class="sidebar-divider">
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->