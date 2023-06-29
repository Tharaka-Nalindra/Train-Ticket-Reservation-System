<?php
session_start();
?>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Reports | SL Railways</title>
  <!-- Favicon -->
  <link rel="icon" href="../assets/ico/logo-report.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-light" id="sidenav-main">
      <div class="scrollbar-inner">
          <!-- Brand -->
          <div class="sidenav-header  align-items-center">
              <a class="navbar-brand" href="javascript:void(0)">

                  <h1 style="font-family: raleway;" class="text-primary"> SL | Railways</h1>
              </a>
          </div>
          <div class="navbar-inner">
              <!-- Collapse -->
              <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                  <!-- Nav items -->
                  <h6 class="navbar-heading p-0 text-muted">
                      <span class="docs-normal">Administration</span>
                  </h6>
                  <ul class="navbar-nav">
                      <li class="nav-item">
                          <a class="nav-link" href="dashboard.php">
                              <i class="ni ni-tv-2 text-primary"></i>
                              <span class="nav-link-text">Dashboard</span>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="tickets.php">
                              <i class="ni ni-planet text-orange"></i>
                              <span class="nav-link-text">Tickets</span>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="train.php">
                              <i class="ni ni-pin-3 text-primary"></i>
                              <span class="nav-link-text">Trains</span>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="seats.php">
                              <i class="ni ni-single-02 text-yellow"></i>
                              <span class="nav-link-text">Seats</span>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link active" href="reports.php">
                              <i class="ni ni-bullet-list-67 text-default"></i>
                              <span class="nav-link-text">Reports</span>
                          </a>
                      </li>
                  </ul>
                  <!-- Divider -->
                  <hr class="my-3">
                  <!-- Heading -->
                  <h6 class="navbar-heading p-0 text-muted">
                      <span class="docs-normal">Administration Requests</span>
                  </h6>
                  <!-- Navigation -->
                  <ul class="navbar-nav mb-md-3">
                      <li class="nav-item">
                          <a class="nav-link" href="ticket-cancel.php" target="_blank">
                              <i class="ni ni-spaceship"></i>
                              <span class="nav-link-text">Ticket Cancellation</span>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="support.php" target="_blank">
                              <i class="ni ni-palette"></i>
                              <span class="nav-link-text">Support Desk</span>
                          </a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
  </nav>
  <!-- Main content -->
  <?php
/*  require_once 'process/report_proc.php';
  */?>
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-gray-dark border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-ungroup"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default  dropdown-menu-right ">
                <div class="row shortcuts px-4">
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                      <i class="ni ni-email-83"></i>
                    </span>
                    <small>Email</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                      <i class="ni ni-credit-card"></i>
                    </span>
                    <small>Payments</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-green">
                      <i class="ni ni-books"></i>
                    </span>
                    <small>Reports</small>
                  </a>

                </div>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                                    <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="../assets/img/theme/avatar.png">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">Train Master</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome to Dashboard</h6>
                </div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Report Portal</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <!--<a href="#" class="btn btn-sm btn-neutral">New</a>
              <a href="#" class="btn btn-sm btn-neutral">Filters</a>-->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0 bg-translucent-white">
              <h3 class="mb-0 ">Ticket Report</h3>
            </div>
              <!-- Light Table-->
              <div class="table-responsive">
              <table class="table align-items-center table-flush">
                  <thead class="thead-dark">
                  <tr>
                      <th scope="" class="sort" data-sort="Ticket ID">Ticket ID</th>
                      <th scope="col" class="sort" data-sort="Name">Name</th>
                      <th scope="col" class="sort" data-sort="NIC">NIC</th>
                      <th scope="col">trainID</th>
                      <th scope="col" class="sort" data-sort="Seat IDs">Seat IDs</th>
                      <th scope="col"></th>
                  </tr>
                  </thead>
                  <tbody class="list">
                  <tr>
                      <th scope="row">
                          <div class="media align-items-center">
                              <div class="media-body">
                                  <span class="name mb-0 text-sm">1</span>
                              </div>
                          </div>
                      </th>
                      <td>
                          Alina R Rowley
                      </td>
                      <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-warning"></i>
                        <span class="status">00000000X</span>
                      </span>
                      </td>
                      <td>
                         UM1001
                      </td>
                      <td>
                          <div class="d-flex align-items-center">
                              <span class="completion mr-2">XXXXXX</span>
                          </div>
                      </td>
                  </tr>
                  <th scope="row">
                      <div class="media align-items-center">
                          <div class="media-body">
                              <span class="name mb-0 text-sm">1</span>
                          </div>
                      </div>
                  </th>
                  <td>
                      Alina R Rowley
                  </td>
                  <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-warning"></i>
                        <span class="status">00000000X</span>
                      </span>
                  </td>
                  <td>
                      UM1001
                  </td>
                  <td>
                      <div class="d-flex align-items-center">
                          <span class="completion mr-2">XXXXXX</span>
                      </div>
                  </td>
                  </tr>
                  <tr>
                      <th scope="row">
                          <div class="media align-items-center">
                              <div class="media-body">
                                  <span class="name mb-0 text-sm">1</span>
                              </div>
                          </div>
                      </th>
                      <td>
                          Alina R Rowley
                      </td>
                      <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-warning"></i>
                        <span class="status">00000000X</span>
                      </span>
                      </td>
                      <td>
                          UM1001
                      </td>
                      <td>
                          <div class="d-flex align-items-center">
                              <span class="completion mr-2">XXXXXX</span>
                          </div>
                      </td>
                  </tr>
                  <tr>
                      <th scope="row">
                          <div class="media align-items-center">
                              <div class="media-body">
                                  <span class="name mb-0 text-sm">1</span>
                              </div>
                          </div>
                      </th>
                      <td>
                          Alina R Rowley
                      </td>
                      <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-warning"></i>
                        <span class="status">00000000X</span>
                      </span>
                      </td>
                      <td>
                          UM1001
                      </td>
                      <td>
                          <div class="d-flex align-items-center">
                              <span class="completion mr-2">XXXXXX</span>
                          </div>
                      </td>
                  </tr>
                  <tr>
                      <th scope="row">
                          <div class="media align-items-center">
                              <div class="media-body">
                                  <span class="name mb-0 text-sm">1</span>
                              </div>
                          </div>
                      </th>
                      <td>
                          Alina R Rowley
                      </td>
                      <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-warning"></i>
                        <span class="status">00000000X</span>
                      </span>
                      </td>
                      <td>
                          UM1001
                      </td>
                      <td>
                          <div class="d-flex align-items-center">
                              <span class="completion mr-2">XXXXXX</span>
                          </div>
                      </td>
                  </tr>
                  </tbody>
              </table>
          </div>
             <!-- Card Footerx-->
            <div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">
                      <i class="fas fa-angle-left"></i>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">
                      <i class="fas fa-angle-right"></i>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <!-- Dark table -->

      <!-- Footer -->
      <footer class="footer pt-0">

      </footer>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.2.0"></script>
</body>

</html>