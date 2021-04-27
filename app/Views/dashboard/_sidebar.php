    <!-- Sidebar -->
    <ul class="navbar-nav bg-cinza sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon">
          <img src="<?=base_url('img/logo-cepedoc-horizontal.png')?>" width="100%">
        </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-tasks"></i>
            <span>Pesquisas</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Resultados</span></a>
      </li>      
      
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

       <!-- Content Wrapper -->
       <div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

  <!-- Topbar -->
  <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
      <i class="fas fa-bars"></i>
    </button>

    
    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="mr-2 d-none d-lg-inline text-gray-600 small">Relatórios - pesquisa</span>
        </a>
      </li>

      <div class="topbar-divider d-none d-sm-block"></div>

      <!-- Nav Item - User Information -->
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="mr-2 d-none d-lg-inline text-gray-600 small">Olá Usuário</span>
        </a>
      </li>

      <div class="topbar-divider d-none d-sm-block"></div>

      <li class="nav-item dropdown no-arrow">
        <a class="nav-link" href="#" role="button">
          <span class="mr-2 d-none d-lg-inline text-gray-600 small">Sair <i class="fas fa-sign-out-alt"></i></span>
        </a>
      </li>

    </ul>

  </nav>
  <!-- End of Topbar -->