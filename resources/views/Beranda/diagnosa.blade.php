<!DOCTYPE html>
<html lang="en">
    <title>Sistem Pakar Diagnosa Penyakit Paru | Diagnosa</title>
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
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Diagnosa</li>
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
          <h3 class="card-title">Silakan Pilih Gejala yang Anda Rasakan</h3>

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
            <form action="{{ route('submit_diagnosa') }}" method="post">
                @csrf
              <div class="row">
                <div class="col-sm-6">
                  <!-- checkbox -->
                  <div class="form-group">
                      @php
                          $i = 1;

                      @endphp
                    @foreach ($data as $data)
                    <div class="custom-control custom-checkbox">
                        @php
                            $j = "gejala".$i;
                        @endphp
                      <input class="custom-control-input" type="checkbox" id="{{$j}}" value="{{$data->gejala_id}}" name="{{$j}}">
                      <label for="{{$j}}" class="custom-control-label">{{$data->gejala}}</label>
                      @php
                         $i++;
                      @endphp
                    </div>
                    @endforeach
                  </div>
                </div>
                <div class="col-sm-6">
                    <!-- checkbox -->
                    <div class="form-group">

                    </div>
                  </div>
                <div class="col-4">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                  </div>
              </div>
            </form>
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
