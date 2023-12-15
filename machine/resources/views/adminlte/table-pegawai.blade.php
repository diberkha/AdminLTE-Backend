@extends('adminlte.master')

@section('title')
    AdminLTE | Dashboard 
@endsection

@section('konten')
    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Tables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/#') }}">Home</a></li>
              <li class="breadcrumb-item active">Table Pegawai</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar Pegawai</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class=table-intensive>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>Nama</th>
                      <th>NIK</th>
                      <th>Jenis Pegawai</th>
                      <th>Status Pegawai</th>
                      <th>Unit</th>
                      <th>Sub Unit</th>
                      <th>Pendidikan</th>
                      <th>Tanggal Lahir</th>
                      <th>Tempat Lahir</th>
                      <th>Jenis Kelamin</th>
                      <th>Agama</th>
                      <th>Scan KTP</th>
                      <th>Tools</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php $i = 0; @endphp
                    @foreach($pegawais as $all)
                    <tr>
                      <td>{{ ++$i }}</td>
                      <td>{{ $all->nama }}</td>
                      <td>{{ $all->nik }}</td>
                      <td>{{ $all->fJenisPegawai->nama }}</td>
                      <td>{{ $all->fStatusPegawai->nama }}</td>
                      <td>{{ $all->unit }}</td>
                      <td>{{ $all->sub_unit }}</td>
                      <td>{{ $all->fPendidikan->nama }}</td>
                      <td>{{ $all->tanggal_lahir }}</td>
                      <td>{{ $all->tempat_lahir }}</td>
                      <td>{{ $all->fJenisKelamin->nama }}</td>
                      <td>{{ $all->fAgama->nama_agama }}</td>
                      <td><img src="{{ url('upload/' . $all->gambar) }}" width="100"></td>
                      <td>
                      <a href="{{ route('pegawai.edit', $all->id) }}" class="btn btn-warning">Edit</a>

                      <form onsubmit="return confirm('Apakah Anda yakin akan menghapus data @php $all->nama @endphp?');"
                      action="{{ route('pegawai.destroy', $all->id) }}" method="post" style="display:inline;">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger">Hapus</button>
                      </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection

@push('additional-css')
 <!-- Google Font: Source Sans Pro -->
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
@endpush

@push('additional-js')
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endpush