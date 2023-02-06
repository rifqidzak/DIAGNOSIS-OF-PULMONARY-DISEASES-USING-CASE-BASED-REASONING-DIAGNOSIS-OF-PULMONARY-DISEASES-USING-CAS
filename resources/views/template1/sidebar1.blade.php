 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    {{-- <a href="{{ route('Home')}}" class="brand-link">
      <img src="../../dist/img/paruparu.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text ">Sistem Pakar</span>
    </a> --}}

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
              <a href="{{ route('Home')}}" class="">
                  <img src="../../dist/img/paruparu.png" alt="AdminLTE Logo" class="img-circle elevation-3" style="opacity: .8">
                  <span class="brand-text ">Sistem Pakar Penyakit Paru</span>
                </a>

          </div>
           <div class="info">
            <a href="#" class="d-block"></a>
          </div>
        </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('logs')}}" class="nav-link">
                <i class="fa-thin fa-house-chimney-user"></i>
              <p>
                Logs
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('gejala')}}" class="nav-link">
              <p>
                Gejala
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('penyakit')}}" class="nav-link">
              <p>
                Penyakit
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('relasi') }}" class="nav-link">
              <p>
                Relasi
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link">
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
