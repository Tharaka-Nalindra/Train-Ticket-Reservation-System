<?php
session_start();
?>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Trains | SL Railways</title>
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
                          <a class="nav-link active" href="train.php">
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
                          <a class="nav-link" href="reports.php">
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
  require_once 'process/train_proc.php';
  ?>
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-purple border-bottom">
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
    <div class="header bg-dark pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Train Information</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              </nav>
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
      <!-- Dark table -->
      <div class="row">
        <div class="col">
          <div class="card bg-gray-dark shadow">
            <div class="card-header bg-transparent border-0">
              <h3 class="text-white mb-0">Train Data Portal</h3>
            </div>
              <!-- Control Panel -->
              <div class="container">
              <div class="row">
                  <div class="col-8">
                  <form action="train.php" method="POST">
                      <input type="hidden" name="Train_id" value="<?php echo $train_id?>">
                      <div class="row">
                      <div class=" col-sm-12 col-md-4 col form-group">
                      <label for="train_id" class="text-white-50">Enter Train ID</label>
                      <input type="text" class="form-control text-warning text-uppercase" name="train_id" placeholder="Enter Train_ID" value="<?php echo $train_id ?>">
                      </div>
                      <div class=" col-sm-12 col-md-4 col form-group">
                          <label for="tr_date" class="text-white-50">Train Date </label>
                              <input type="date" name="tr_date"  class="form-control text-gray-dark" id="tr_date" value="<?php echo $tr_date ?>">
                      </div>
                          <div class=" col-sm-12 col-md-4 form-group ">
                              <label for="destination" class="text-white-50">Train Destination</label>
                              <select name="destination" class="form-control text-gray-dark" id="destination">
                                  <option value="" class="text-blue">Select Destination</option>
                                  <option value="Colombo Fort"<?php if($destination == 'Colombo Fort'): ?> selected="selected" <?php endif; ?> class="text-darker">Colombo Fort</option>
                                  <option value="Batticlao" <?php if($destination == 'Batticlao'): ?> selected="selected" <?php endif; ?> class="text-darker">Batticlao</option>
                                  <option value="Badulla" <?php if($destination == 'Badulla'): ?> selected="selected" <?php endif; ?> class="text-darker">Badulla</option>
                                  <option value="Vavuniya" <?php if($destination == 'Vavuniya'): ?> selected="selected" <?php endif; ?> class="text-darker">Vavuniya</option>
                                  <option value="Matara" <?php if($destination == 'Matara'): ?> selected="selected" <?php endif; ?> class="text-darker">Matara</option>
                                  <option value="Anuradhapura" <?php if($destination == 'Anuradhapura'): ?> selected="selected" <?php endif; ?> class="text-darker">Anuradhapura</option>
                                  <option value="Trincomalee" <?php if($destination == 'Trincomalee'): ?> selected="selected" <?php endif; ?> class="text-darker">Trincomalee</option>
                                  <option value="Chilaw" <?php if($destination == 'Chilaw'): ?> selected="selected" <?php endif; ?> class="text-darker">Chilaw</option>
                                  <option value="Puttalam" <?php if($destination == 'Puttalam'): ?> selected="selected" <?php endif; ?> class="text-darker">Puttalam</option>
                                  <option value="Noor Nagar" <?php if($destination == 'Noor Nagar'): ?> selected="selected" <?php endif; ?> class="text-darker">Noor Nagar</option>
                                  <option value="Mihinthale" <?php if($destination == 'Mihinthale'): ?> selected="selected" <?php endif; ?> class="text-darker">Mihinthale</option>
                                  <option value="Jaffna" <?php if($destination == 'Jaffna'): ?> selected="selected" <?php endif; ?> class="text-darker">Jaffna</option>
                                  <option value="Mannar" <?php if($destination == 'Mannar'): ?> selected="selected" <?php endif; ?> class="text-darker">Mannar</option>
                              </select>
                          </div>
                          <div class=" col-sm-12 col-md-4 col form-group">
                              <label for="arrive_time" class="text-white-50">Train Arrival Time</label>
                              <input type="time" name="arrive_time"  class="form-control text-gray-dark" id="arrive_time" value="<?php echo $arrive_time ?>">
                          </div>
                          <div class=" col-sm-12 col-md-4 form-group ">
                              <label for="start_loc" class="text-white-50">Train Origin</label>
                              <select name="start_loc" class="form-control text-gray-dark" id="start_loc">
                                  <option value="" class="text-blue">Select Origin</option>
                                  <option value="Colombo Fort"<?php if($start_loc == 'Colombo Fort'): ?> selected="selected" <?php endif; ?> class="text-darker">Colombo Fort</option>
                                  <option value="Batticlao" <?php if($start_loc == 'Batticlao'): ?> selected="selected" <?php endif; ?> class="text-darker">Batticlao</option>
                                  <option value="Badulla" <?php if($start_loc == 'Badulla'): ?> selected="selected" <?php endif; ?> class="text-darker">Badulla</option>
                                  <option value="Vavuniya" <?php if($start_loc == 'Vavuniya'): ?> selected="selected" <?php endif; ?> class="text-darker">Vavuniya</option>
                                  <option value="Matara" <?php if($start_loc == 'Matara'): ?> selected="selected" <?php endif; ?> class="text-darker">Matara</option>
                                  <option value="Anuradhapura" <?php if($start_loc == 'Anuradhapura'): ?> selected="selected" <?php endif; ?> class="text-darker">Anuradhapura</option>
                                  <option value="Trincomalee" <?php if($start_loc == 'Trincomalee'): ?> selected="selected" <?php endif; ?> class="text-darker">Trincomalee</option>
                                  <option value="Chilaw" <?php if($start_loc == 'Chilaw'): ?> selected="selected" <?php endif; ?> class="text-darker">Chilaw</option>
                                  <option value="Puttalam" <?php if($start_loc == 'Puttalam'): ?> selected="selected" <?php endif; ?> class="text-darker">Puttalam</option>
                                  <option value="Noor Nagar" <?php if($start_loc == 'Noor Nagar'): ?> selected="selected" <?php endif; ?> class="text-darker">Noor Nagar</option>
                                  <option value="Mihinthale" <?php if($start_loc == 'Mihinthale'): ?> selected="selected" <?php endif; ?> class="text-darker">Mihinthale</option>
                                  <option value="Jaffna" <?php if($start_loc == 'Jaffna'): ?> selected="selected" <?php endif; ?> class="text-darker">Jaffna</option>
                                  <option value="Mannar" <?php if($start_loc == 'Mannar'): ?> selected="selected" <?php endif; ?> class="text-darker">Mannar</option>
                              </select>
                          </div>
                          <div class=" col-sm-12 col-md-4 col form-group">
                              <label for="departure_time" class="text-white-50">Train Departure Time</label>
                              <input type="time" name="departure_time"  class="form-control text-gray-dark" id="arrive_time" value="<?php echo $departure_time ?>">
                          </div>
                      </div>
                      <div class="row">
                          <div class=" col-sm-12 col-md-4 form-group ">
                              <label for="train_name" class="text-white-50">Train Name</label>
                              <select name="train_name" class="form-control text-gray-dark" id="train_name">
                                  <option value="" class="text-blue">Select Train Name</option>
                                  <option value="Meena Gaya"<?php if($train_name == 'Meena Gaya'): ?> selected="selected" <?php endif; ?> class="text-darker">Meena Gaya</option>
                                  <option value="Podi Manike"<?php if($train_name == 'Podi Manike'): ?> selected="selected" <?php endif; ?> class="text-darker">Podi Manike</option>
                                  <option value="Udarata Manike"<?php if($train_name == 'Udarata Manike'): ?> selected="selected" <?php endif; ?> class="text-darker">Udarata Manike</option>
                                  <option value="Rajarata Rajini"<?php if($train_name == 'Rajarata Rajini'): ?> selected="selected" <?php endif; ?> class="text-darker">Rajarata Rajini</option>
                                  <option value="Ruhunu Kumari"<?php if($train_name == 'Ruhunu Kumari'): ?> selected="selected" <?php endif; ?> class="text-darker">Ruhunu Kumari</option>
                                  <option value="Night Mail"<?php if($train_name == 'Night Mail'): ?> selected="selected" <?php endif; ?> class="text-darker">Night Mail</option>
                                  <option value="Normal (A)"<?php if($train_name == 'Normal (A)'): ?> selected="selected" <?php endif; ?> class="text-darker">Normal (A)</option>
                                  <option value="Normal (C)"<?php if($train_name == 'Normal (C)'): ?> selected="selected" <?php endif; ?> class="text-darker">Normal (C)</option>
                                  <option value="Muthu Kumari (A)"<?php if($train_name == 'Muthu Kumari (A)'): ?> selected="selected" <?php endif; ?> class="text-darker">Muthu Kumari (A)</option>
                                  <option value="Express (A)"<?php if($train_name == 'Express (A)'): ?> selected="selected" <?php endif; ?> class="text-darker">Express (A)</option>
                              </select>
                          </div>
                          <div class=" col-sm-12 col-md-4 form-group ">
                              <label for="route" class="text-white-50">Train Route</label>
                              <select name="route" class="form-control text-gray-dark" id="route">
                                  <option value="" class="text-blue">Select Train Route</option>
                                  <option value="Main Line"<?php if($route == 'Main Line'): ?> selected="selected" <?php endif; ?> class="text-darker">Main Line</option>
                                  <option value="Eastern Line"<?php if($route == 'Eastern Line'): ?> selected="selected" <?php endif; ?> class="text-darker">Eastern Line</option>
                                  <option value="Coastal line"<?php if($route == 'Coastal line'): ?> selected="selected" <?php endif; ?> class="text-darker">Coastal line</option>
                                  <option value="Northern line"<?php if($route == 'Northern line'): ?> selected="selected" <?php endif; ?> class="text-darker">Northern line</option>
                                  <option value="Puttalam Line"<?php if($route == 'Puttalam Line'): ?> selected="selected" <?php endif; ?> class="text-darker">Puttalam Line</option>
                              </select>
                          </div>
                          <div class="col-sm-12 col-md-4 form-group ">
                              <label for="availability" class="text-white-50">Train Availability</label>
                              <select name="availability" id="class_id" class="form-control text-gray-dark">
                                  <option value=" " class="text-blue">Select Train Availability</option>
                                  <option value="Y"<?php if($availability == 'Y'): ?> selected="selected" <?php endif; ?> class="text-green">Available</option>
                                  <option value="N"<?php if($availability == 'N'): ?> selected="selected" <?php endif; ?> class="text-danger">Not Available</option>
                              </select>
                          </div>
                      </div>
                      <div class="row">
                          <div class="form-group col-sm-12 col-md-2">
                              <?php
                              if($update == true):
                                  ?>
                                  <button type="submit" class="btn btn-youtube" name="update">Update</button>
                              <?php else: ?>
                                  <button type="submit" class="btn btn-primary" name="save">Save</button>
                              <?php endif; ?>
                          </div>
                          <div class="form-group col-sm-12 col-md-2">
                              <button type="reset" class="btn btn-outline-secondary" name="reset">Clear</button>
                          </div>
                          <div class="form-group col-sm-12 col-md-2">
                              <button type="submit" class="btn btn-outline-warning" >Refresh</button>
                          </div>
                      </div>
                  </form>
                  </div>
              </div>
                  <!-- Table -->
                  <?php
                  $dbconnect = new mysqli('localhost','root','','train_sys') or die(mysqli_error($dbconnect));
                  $result = $dbconnect->query("SELECT * FROM train_sys.train") or die(mysqli_error($dbconnect));
                  ?>
                <div class="table-responsive text-wrap " style="height: 300px;">
                  <table class="table font-weight-bold">
                    <thead class="thead-light text-uppercase text-darker font-weight-bold justify-content-center">
                    <tr>
                      <th scope="col">Train ID</th>
                      <th scope="col">Train Date</th>
                      <th scope="col">Destination</th>
                      <th scope="col">Arrival Time</th>
                        <th scope="col">Start Location</th>
                      <th scope="col">Departure Time</th>
                      <th scope="col">Train Name</th>
                      <th scope="col">Train Route</th>
                      <th scope="col">Train Availability</th>
                        <th scope="col" colspan="2">Actions</th>
                    </tr>
                    </thead>
                      <?php

                      while ($row = $result->fetch_assoc()):

                      ?>
                      <tbody class="list-unstyled justify-content-center ">
                      <tr class="text-yellow ">
                          <td class="text-sm-left">
                              <?php echo $row['train_id']; ?>
                          </td>
                          <td>
                              <?php echo $row['tr_date']; ?>
                          </td>
                          <td>
                              <?php echo $row['destination']; ?>
                          </td>
                          <td>
                              <?php echo $row['arrive_time']; ?>
                          </td>
                          <td>
                              <?php echo $row['start_loc']; ?>
                          </td>
                          <td>
                              <?php echo $row['departure_time']; ?>
                          </td>
                          <td>
                              <?php echo $row['train_name']; ?>
                          </td>
                          <td>
                              <?php echo $row['route']; ?>
                          </td>
                          <td class="">
                              <?php echo ($row['availability']  == 'Y' ? "Yes" : "No"); ?>
                          </td>
                          <td>
                              <a href="train.php?edit=<?php echo $row['train_id']; ?>"
                                 class="btn btn-facebook" ?>Edit</a>
                              <a href="process/train_proc.php?delete=<?php echo $row['train_id']; ?>"
                                 class="btn btn-danger" ?>Delete</a>
                          </td>
                      </tr>
                      </tbody>
                      <?php endwhile; ?>
                  </table>
                </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
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
  <!-- Optional JS -->
  <script src="../assets/vendor/clipboard/dist/clipboard.min.js"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.2.0"></script>
</body>

</html>