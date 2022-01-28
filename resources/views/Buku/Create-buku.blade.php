
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

                <h3>Input Data Buku</h3>

            </div>
            <div class="card-body">
                <form action="{{ route('simpan-buku') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="text" id="judul" name="judul" class="form-control" placeholder="Judul Buku">
                    </div>
                    <div class="form-group">
                        <input type="text" id="penulis" name="penulis" class="form-control" placeholder="Nama Penulis">
                    </div>
                    <div class="form-group">
                        <input type="text" id="penerbit" name="penerbit" class="form-control" placeholder="Penerbit">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </form>
            </div>
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
</body>
</html>
