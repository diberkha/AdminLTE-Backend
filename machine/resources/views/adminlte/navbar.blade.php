<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{url('/') }}" class="nav-link">Dashboard</a>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
            Forms
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{ url('/form') }}">Tambah Data Agama</a></li>
            <li><a class="dropdown-item" href="{{ url('/form-pegawai') }}">Tambah Data Pegawai</a></li>
            <li><a class="dropdown-item" href="{{ url('/jenispegawai') }}">Tambah Data Jenis Pegawai</a></li>
            <li><a class="dropdown-item" href="{{ url('/statuspegawai') }}">Tambah Data Status Pegawai</a></li>
            <li><a class="dropdown-item" href="{{ url('/pendidikan') }}">Tambah Data Pendidikan</a></li>
            <li><a class="dropdown-item" href="{{ url('/jeniskelamin') }}">Tambah Data Jenis Kelamin</a></li>
          </ul>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
            Tables
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{ url('/table') }}">Data Agama</a></li>
            <li><a class="dropdown-item" href="{{ url('/pegawai') }}">Data Pegawai</a></li>
            <li><a class="dropdown-item" href="{{ url('/jenispegawai') }}">Data Jenis Pegawai</a></li>
            <li><a class="dropdown-item" href="{{ url('/statuspegawai') }}">Data Status Pegawai</a></li>
            <li><a class="dropdown-item" href="{{ url('/pendidikan') }}">Data Pendidikan</a></li>
            <li><a class="dropdown-item" href="{{ url('/jeniskelamin') }}">Data Jenis Kelamin</a></li>
          </ul>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="navbar-item">
          <form action="{{ url('/logout') }}" method="POST">
              @csrf
              <button type="submit" style="background: none; border: none; color: #ccc;">
                  <i class="fas fa-sign-out-alt"></i> Log Out
              </button>
          </form>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->