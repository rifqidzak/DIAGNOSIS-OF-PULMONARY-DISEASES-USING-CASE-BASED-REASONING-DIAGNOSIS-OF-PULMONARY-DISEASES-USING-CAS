<!DOCTYPE html>
<html lang="en">
    <title>Sistem Pakar Diagnosa Penyakit Paru | Home</title>
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
            <h2>Selamat Datang </h2>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              {{-- <li class="breadcrumb-item active">Blank Page</li> --}}
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
          <h3 class="card-title">Apa itu paru paru?</h3>

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
            <p class="card-text">Paru-paru merupakan organ respirasi (pernapasan) yang berhubungan dengan sistem pernapasan dan sirkulasi (peredaran darah) dalam tubuh vertebrata yang bernapas dengan udara.</p>
        </div>
        <!-- /.card-body -->
      </div>

      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Bagaimana kita bisa tahu kalau kita ada gangguan dalam paru paru kita?</h3>

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
            <p>Dengan adanya sistem pakar ini kita bisa mempermudah dari segi masyarakat awam dan akhli dalam mendiagnosa gejala awal penyakit paru. Jikalau kamu merasa ada gejala di pernafasanmu kamu bisa klick button dibawah ini.</p>
            <a href="{{ route('Diagnosa') }}" class="btn btn-primary">Mari Kita Check!</a>
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
