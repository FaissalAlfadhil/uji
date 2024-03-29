<x-app-layout>
    <!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <title>Corona Admin</title>
 <!-- plugins:css -->
 <link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
 <link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css">
 <!-- endinject -->
 <!-- Plugin css for this page -->
 <link rel="stylesheet" href="admin/assets/vendors/jvectormap/jquery-jvectormap.css">
 <link rel="stylesheet" href="admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
 <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
 <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
 <!-- End plugin css for this page -->
 <!-- inject:css -->
 <!-- endinject -->
 <!-- Layout styles -->
 <link rel="stylesheet" href="admin/assets/css/style.css">
 <!-- End layout styles -->
 <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
  </head>
  <body>
{{-- {{ sidebar start }} --}}
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
    <a class="sidebar-brand brand-logo btn btn-white" href="{{ url('/home') }}">Dashboard</a>
  </div>
  <ul class="nav">
    <li class="nav-item menu-items">
      <a class="nav-link" href="{{ url('/redirects') }}">
        <span class="menu-icon">
          <i class="mdi mdi-speedometer"></i>
        </span>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="{{ url('/reservation') }}">
        <span class="menu-icon">
          <i class="mdi mdi-playlist-play"></i>
        </span>
        <span class="menu-title">Reservation</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="{{ url('/menu') }}">
        <span class="menu-icon">
          <i class="mdi mdi-table-large"></i>
        </span>
        <span class="menu-title">Menu</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="{{ url('/chef') }}">
        <span class="menu-icon">
          <i class="mdi mdi-chart-bar"></i>
        </span>
        <span class="menu-title">Chef</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="{{ url('/user') }}">
        <span class="menu-icon">
          <i class="mdi mdi-contacts"></i>
        </span>
        <span class="menu-title">User</span>
      </a>
    </li>
  </ul>
</nav> 
    {{-- {{ sidebar end }} --}}








    
   
   <!-- plugins:js -->
 <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
 <!-- endinject -->
 <!-- Plugin js for this page -->
 <script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
 <script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
 <script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
 <script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
 <script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
 <script src="admin/assets/js/jquery.cookie.js" type="text/javascript"></script>
 <!-- End plugin js for this page -->
 <!-- inject:js -->
 <script src="admin/assets/js/off-canvas.js"></script>
 <script src="admin/assets/js/hoverable-collapse.js"></script>
 <script src="admin/assets/js/misc.js"></script>
 <script src="admin/assets/js/settings.js"></script>
 <script src="admin/assets/js/todolist.js"></script>
 <!-- endinject -->
 <!-- Custom js for this page -->
 <script src="admin/assets/js/dashboard.js"></script>
 <!-- End custom js for this page -->
  </body>
</html>
</x-app-layout>