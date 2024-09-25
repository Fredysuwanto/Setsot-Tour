
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>@yield('title')</title>
    <meta
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
      name="viewport"
    />
    <link
      rel="icon"
      href="{{ url('assets/img/kaiadmin/logoku.png') }}"
      type="image/x-icon"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="{{ url('assets/js/plugin/webfont/webfont.min.js') }}"></script>
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/css/plugins.min.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/css/kaiadmin.min.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/css/demo.css') }}" />
  </head>
  <body>
    <div class="wrapper">
      <!-- Sidebar -->
      <div class="sidebar" data-background-color="dark">
        <div class="sidebar-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="dark">
            <div class="avatar avatar-xxl">
				<img src="{{ url('assets/img/kaiadmin/logo.png') }}" alt="..." class="avatar-img rounded-circle">
			</div>
            <div class="nav-toggle">
              <button class="btn btn-toggle toggle-sidebar">
                <i class="gg-menu-right"></i>
              </button>
              <button class="btn btn-toggle sidenav-toggler">
                <i class="gg-menu-left"></i>
              </button>
            </div>
            <button class="topbar-toggler more">
              <i class="gg-more-vertical-alt"></i>
            </button>
          </div>
          <!-- End Logo Header -->
        </div>
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
          <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('anggota') }}">
                        <i class="fa-solid fa-landmark"></i>
                        <span class="menu-title">BERANDA</span> 
                    </a>
                </li>
                <br>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('anggota') }}">
                        <i class="fas fa-plane"></i>
                        <span class="menu-title">LIST TOUR</span> 
                    </a>
                </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="main-panel">
        <div class="main-header">
          <div class="main-header-logo">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="dark">
              <a href="index.html" class="logo">
                <img
                  src="assets/img/kaiadmin/logo_light.svg"
                  alt="navbar brand"
                  class="navbar-brand"
                  height="20"
                />
              </a>
              <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                  <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                  <i class="gg-menu-left"></i>
                </button>
              </div>
              <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
              </button>
            </div>
            <!-- End Logo Header -->
          </div>
          <!-- Navbar Header -->
          <nav
            class="bg-dark"
          >
            <div class="container-fluid">

              <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                
                <nav class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search px-12 d-none d-lg-flex">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <button type="submit" class="btn btn-search pe-1">
                        <i class="fa fa-search search-icon"></i>
                      </button>
                    </div>
                    <input type="text" placeholder="Search ..." class="form-control">
                  </div>
                </nav>
              </ul>
            </div>
          </nav>
          <!-- End Navbar -->
        </div>

        <div class="container">
            @yield('content')
        </div>
      </div>
    </div>
  </div>
    <script src="{{ url('assets/js/core/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ url('assets/js/core/popper.min.js') }}"></script>
    <script src="{{ url('assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ url('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
    <script src="{{ url('assets/js/plugin/chart.js/chart.min.js') }}"></script>
    <script src="{{ url('assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ url('assets/js/plugin/chart-circle/circles.min.js') }}"></script>
    <script src="{{ url('assets/js/plugin/datatables/datatables.min.js') }}"></script>
    <script src="{{ url('assets/js/plugin/jsvectormap/jsvectormap.min.js') }}"></script>
    <script src="{{ url('assets/js/plugin/jsvectormap/world.js') }}"></script>
    <script src="{{ url('assets/js/plugin/sweetalert/sweetalert.min.js') }}"></script>
    <script src="{{ url('assets/js/kaiadmin.min.js') }}"></script>
    <script src="{{ url('assets/js/setting-demo.js') }}"></script>
    <script src="{{ url('assets/js/demo.js') }} "></script>
  </body>
</html>
