<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Stellar Admin</title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="ad/vendors/simple-line-icons/css/simple-line-icons.css">
        <link rel="stylesheet" href="ad/vendors/flag-icon-css/css/flag-icon.min.css">
        <link rel="stylesheet" href="ad/vendors/css/vendor.bundle.base.css">
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <link rel="stylesheet" href="ad//vendors/daterangepicker/daterangepicker.css">
        <link rel="stylesheet" href="ad//vendors/chartist/chartist.min.css">
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <!-- endinject -->
        <!-- Layout styles -->
        <link rel="stylesheet" href="ad//css/style.css">
        <!-- End layout styles -->
        <link rel="shortcut icon" href="ad//images/favicon.png" />


    </head>
    <body>
        <div class="container-scroller">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
              <div class="navbar-brand-wrapper d-flex align-items-center">
                <a class="navbar-brand brand-logo" href="index.html">
                  <img src="logo1.png" alt="logo" class="logo-dark" />
                </a>
                <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo" /></a>
              </div>
              <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
                <h5 class="mb-0 font-weight-medium d-none d-lg-flex">Welcome</h5>
                <ul class="navbar-nav navbar-nav-right ml-auto">
                  </li>
                  <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
                    <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                      <span class="font-weight-normal">{{ auth()->user()->username }}</span></a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                      <div class="dropdown-header text-center">
                        <p class="font-weight-light text-muted mb-0">{{ auth()->user()->email }}</p>
                      </div>
                      <form action="{{ route('logout') }}" method="post">
                          @csrf
                          <button type="submit" class="dropdown-item"><i class="dropdown-item-icon icon-power text-primary"></i>Logout</button>

                      </form>

                      </form>
                    </div>
                  </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                  <span class="icon-menu"></span>
                </button>
              </div>
            </nav>
            <!-- partial -->
            <div class="container-fluid page-body-wrapper">
              <!-- partial:partials/_sidebar.html -->
              <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                  <li class="nav-item nav-profile">
                    <a href="#" class="nav-link">
                      <div class="text-wrapper">
                        <p class="profile-name">{{ auth()->user()->name }}</p>
                        <p class="designation">@if(auth()->user()->is_admin =='1')
                              Admin
                          @else
                              User
                          @endif
                        </p>
                      </div>

                    </a>
                  </li>
                  <li class="nav-item nav-category">
                    <span class="nav-link">Dashboard</span>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index.html">
                      <span class="menu-title">Petugas</span>
                      <i class="icon-screen-desktop menu-icon"></i>
                    </a>
                  </li>
                  <li class="nav-item nav-category"><span class="nav-link">Main Menu</span></li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                      <span class="menu-title">POST</span>
                      <i class="icon-layers menu-icon"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                      <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">New Post</a></li>
                        <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">List</a></li>
                      </ul>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/icons/simple-line-icons.html">
                      <span class="menu-title">Event</span>
                      <i class="icon-globe menu-icon"></i>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/forms/basic_elements.html">
                      <span class="menu-title">Document</span>
                      <i class="icon-book-open menu-icon"></i>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/foto">
                      <span class="menu-title">Galery</span>
                      <i class="icon-grid menu-icon"></i>
                    </a>
                  </li>
                </ul>
              </nav>
              <!-- partial -->
              <div class="main-panel">
                <div class="content-wrapper">
                  <div class="row purchace-popup">
                    <div class="col-12 stretch-card grid-margin">
                      <div class="card card-secondary">
                        <span class="card-body d-lg-flex align-items-center">
                          <p class="mb-lg-0" >Tabel Data Pegawai</p>

                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <a href="/tambah" class="btn btn-primary">Input Pegawai</a>
                            <a href="/admin" class="btn btn-secondary">Back</a>
                            <br/>
                            <br/>
                            <form action="/cari" method="GET">
                                <input type="text" name="cari" placeholder=" " value="{{ old('cari') }}">
                                <input type="submit" value="Serach">
                            </form>
                            <br/>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>NIP</th>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>NO HP</th>
                                        <th>Jabatan</th>
                                        <th>Status</th>
                                        <th>Username</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($user as $u)
                                    <tr>
                                        <td>{{ $u->nip }}</td>
                                        <td>{{ $u->nik }}</td>
                                        <td>{{ $u->name }}</td>
                                        <td>{{ $u->email }}</td>
                                        <td>{{ $u->hp }}</td>
                                        <td>{{ $u->jabatan }}</td>
                                        <td>
                                        @if($u->is_admin == '1')
                                            Admin
                                        @else
                                            User
                                        @endif
                                        </td>
                                        <td>{{ $u->username }}</td>
                                        <td>
                                            <a href="/edit/{{ $u->id }}" class="btn btn-warning">Edit</a>
                                            <a href="/hapus/{{ $u->id }}" class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <br/>
                                Halaman : {{ $user->currentPage() }} <br/>
                                Jumlah Data : {{ $user->total() }} <br/>
                                Data Per Halaman : {{ $user->perPage() }} <br/>
                                {{ $user->links() }}
                        </div>
                    </div>
                </div>
                  <!-- Quick Action Toolbar Starts-->
                  <!-- Quick Action Toolbar Ends-->

                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                  <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Weka Bagas Awara</span>
                  </div>
                </footer>
                <!-- partial -->
              </div>
              <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
          </div>


    <script src="ad/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="ad//vendors/chart.js/Chart.min.js"></script>
    <script src="ad//vendors/moment/moment.min.js"></script>
    <script src="ad//vendors/daterangepicker/daterangepicker.js"></script>
    <script src="ad//vendors/chartist/chartist.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="ad//js/dashboard.js"></script>
    </body>
</html>


