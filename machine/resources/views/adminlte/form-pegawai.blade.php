@extends('adminlte.master')

@section('title')
    AdminLTE | Dashboard 
@endsection

@section('konten')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>General Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/#') }}">Home</a></li>
              <li class="breadcrumb-item active">Form Pegawai</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Data Pegawai</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form enctype="multipart/form-data" id="quickForm" novalidate="novalidate" method="POST" action="{{ route('pegawai.store') }}">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" required>
                    @error('nama')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <label for="nama">NIK</label>
                    <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukkan NIK" required>
                    @error('nik')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <label for="nama">Jenis Pegawai</label>
                    <select class="form-control" id="jenis_pegawai" name="jenis_pegawai" placeholder="Masukkan Jenis Pegawai" required>
                        <option value="">Pilih opsi</option>                
                        @foreach($jenis_pegawai as $all)
                        <option value="{{ $all->id }}">{{ $all->nama }}</option>
                        @endforeach
                    </select>
                    @error('jenis_pegawai')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <label for="nama">Status Pegawai</label>
                    <select class="form-control" id="status_pegawai" name="status_pegawai" placeholder="" required>
                        <option value="">Pilih opsi</option>        
                        @foreach($status_pegawai as $all)
                        <option value="{{ $all->id }}">{{ $all->nama }}</option>
                        @endforeach
                    </select>
                    @error('status_pegawai')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <label for="nama">Unit</label>
                    <input type="text" class="form-control" id="unit" name="unit" placeholder="Masukkan Unit" required>
                    @error('unit')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <label for="nama">Sub Unit</label>
                    <input type="text" class="form-control" id="sub_unit" name="sub_unit" placeholder="Masukkan Sub Unit" required>
                    @error('sub_unit')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <label for="nama">Pendidikan</label>
                    <select class="form-control" id="pendidikan" name="pendidikan" placeholder="" required>
                        <option value="">Pilih opsi</option>    
                        @foreach($pendidikan as $all)
                        <option value="{{ $all->id }}">{{ $all->nama }}</option>
                        @endforeach
                    </select>
                    @error('pendidikan')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <label for="nama">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="" required>
                    @error('tanggal_lahir')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <label for="nama">Tempat Lahir</label>
                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Masukkan Tempat Lahir" required>
                    @error('tempat_lahir')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <label for="nama">Jenis Kelamin</label>
                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" placeholder="" required>
                        <option value="">Pilih opsi</option>
                        @foreach($jenis_kelamin as $all)
                        <option value="{{ $all->id }}">{{ $all->nama }}</option>
                        @endforeach
                    </select>
                    @error('jenis_kelamin')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <label for="nama">Agama</label>
                    <select class="form-control" id="agama" name="agama" placeholder="" required>
                        <option value="">Pilih opsi</option>        
                        @foreach($agamas as $all)
                        <option value="{{ $all->id }}">{{ $all->nama_agama }}</option>
                        @endforeach
                    </select>
                    @error('agama')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                      <label for="gambar">Upload KTP</label>
                      <input type="file" class="form-control" id="gambar" name="gambar">
                      @error('gambar')
                      <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>
                    

                    <!-- @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif -->
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->


          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection

@push('additional-css')
 <!-- Google Font: Source Sans Pro -->
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
@endpush

@push('additional-js')
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
@endpush