<!DOCTYPE html>
<html lang="en">
    <title>Sistem Pakar Diagnosa Penyakit Paru | Hasil Diagnosa</title>
@include('template1.header')
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
@include('template1.navbar')
  <!-- /.navbar -->

 @include('template1.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h2>Hasil Diagnosa</h2>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Diagnosa</li>
              <li class="breadcrumb-item active">Hasil Diagnosa</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Hasil Diagnosa</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <tr>
                    <th>Penyakit</th>
                    <th>Tanggal/Hari</th>
                    <th>Persentase Hasil Diagnosa Dari Gejala Yang Dipilih</th>
                  </tr>
                  <tbody>
                    @foreach ($data2 as $data2)
                <tr data-widget="" aria-expanded="">
                    <td>{{$data2->penyakit}}</td>
                    <td>{{date("Y-d-m");}}</td>
                    <td>{{$hasil}}%</td>
                </tr>
                @endforeach
                <tr class="expandable-body">
                    <td colspan="5">
                      <p>
                        Hasil diagnosa tersebut tidak bisa dibilang 100% akurat dikarenakan ada keterbatasan dalam persediaan data, tetapi semoga dengan adanya bantuan dari sistem ini kita semua bisa lebih peduli dengan kesehatan paru paru kita. Untuk menyempurnakan hasil diagnosa tersebut bisa langsung mengadakan konsultasi langsung ke rumah sakit paru terdekat.
                      </p>
                    </td>
                  </tr>
                </tbody>
              </table>
        </div>
        <!-- /.card-body -->
      </div>

      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 @include('template1.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('template1.script')
</body>
</html>
