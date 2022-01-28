
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  @include('Template.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Navbar -->
    @include('Template.navbar')

  <!-- Main Sidebar Container -->
  @include('Template.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <div class="content-header">
        <div class="card card-info card-outline">
            <div class="card-header">
                <div class="container-fluid">
                    <div class="card-tools">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h3>Data Buku</h3>
                            </div>
                            <div class="col-sm-6">
                            <div class="float-sm-right">
                                <a href="{{ route('create-buku') }}" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Judul Buku</th>
                        <th>Penulis</th>
                        <th>Penerbit</th>
                        <th>Aksi</th>
                    </tr>
                    @foreach ($dtBuku as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->judul }}</td>
                        <td>{{ $item->penulis }}</td>
                        <td>{{ $item->penerbit }}</td>
                        <td>
                            <a href="{{ url('edit-buku',$item->id) }}"><i class="fas fa-edit"></i></a>
                            |
                            <a href="{{ url('delete-buku',$item->id) }}"><i class="fas fa-trash-alt" style="color: red"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
        <div class="card-footer">
            Jumlah Data: {{ $dtBuku->total() }}
            <br>
            {{ $dtBuku->links() }}
        </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  @include('Template.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
@include('Template.script')

@include('sweetalert::alert')
</body>
</html>
