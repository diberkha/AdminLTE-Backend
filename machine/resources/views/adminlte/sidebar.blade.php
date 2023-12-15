  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/markl.jpeg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="https://v3422020.mhs.d3tiuns.com/" class="d-block">Diberkha S. P.</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-mosque"></i>
              <p>
                Agama
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/form') }}" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                  <p>
                    Form
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('table')}}" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                  <p>
                    Table
                  </p>
                </a>
              </li>
            </ul>
          </li>
        </ul>

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-briefcase"></i>
              <p>
                Pegawai
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/form-pegawai') }}" class="nav-link">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>
                    Form
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('pegawai')}}" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>
                    Table
                  </p>
                </a>
              </li>
            </ul>
          </li>
        </ul>

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-tie"></i>
              <p>
                Jenis Pegawai
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/form-jenispegawai') }}" class="nav-link">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>
                    Form
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('jenispegawai')}}" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>
                    Table
                  </p>
                </a>
              </li>
            </ul>
          </li>
        </ul>

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-check"></i>
              <p>
                Status Pegawai
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/form-statuspegawai') }}" class="nav-link">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>
                    Form
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('statuspegawai')}}" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>
                    Table
                  </p>
                </a>
              </li>
            </ul>
          </li>
        </ul>

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-graduate"></i>
              <p>
                Pendidikan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/form-pendidikan') }}" class="nav-link">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>
                    Form
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('pendidikan')}}" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>
                    Table
                  </p>
                </a>
              </li>
            </ul>
          </li>
        </ul>

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-venus-mars"></i>
              <p>
                Jenis Kelamin
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/form-jeniskelamin') }}" class="nav-link">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>
                    Form
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('jeniskelamin')}}" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>
                    Table
                  </p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>