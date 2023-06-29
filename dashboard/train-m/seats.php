<?php
session_start();
?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Seats | SL Railways</title>
  <!-- Favicon -->
  <link rel="icon" href="../assets/ico/logo-seat.png" type="image/png">
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
                          <a class="nav-link active" href="seats.php">
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
  require_once 'process/seat_proc.php';
  ?>
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-orange border-bottom">

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
              <h6 class="h2 text-white d-inline-block mb-0">Seat Information</h6>
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
          <div class="card bg-default shadow">
            <div class="card-header bg-transparent border-0">
              <h3 class="text-white mb-0">Seat Data Portal</h3>
            </div>
              <!-- Control Panel -->
              <div class="container">
              <div class="row">
                  <div class="col-8">
                  <form action="seats.php" method="POST">
                      <input type="hidden" name="Seat_ID" value="<?php echo $Seat_ID ?>">
                      <div class="row">
                      <div class=" col-sm-12 col-md-4 col form-group">
                      <label for="Seat_ID" class="text-white-50">Enter Seat ID: </label>
                      <input type="text" class="form-control text-warning" name="Seat_ID" placeholder="Enter Seat_ID" value="<?php echo $Seat_ID ?>">
                      </div>
                      <div class=" col-sm-12 col-md-4 col form-group">
                      <label for="window" class="text-white-50">Window Allocation: </label>
                      <select name="window"  class="form-control text-gray-dark" id="window_allocation">
                          <option value="" class="text-blue">Select your option</option>
                          <option value="Y"<?php if($window == 'Y'): ?> selected="selected" <?php endif; ?> class="text-darker">Yes</option>
                          <option value="N"<?php if($window == 'N'): ?> selected="selected" <?php endif; ?> class="text-red">No</option>
                      </select>
                      </div>
                      </div>

                      <div class="row">
                      <div class=" col-sm-12 col-md-4 form-group ">
                      <label for="seat_availability" class="text-white-50">Seat Status: </label>
                      <select name="seat_availability" class="form-control text-gray-dark" id="availability">
                          <option value="" class="text-blue">Select your option</option>
                          <option value="Y"<?php if($seat_availability == 'Y'): ?> selected="selected" <?php endif; ?> class="text-darker">Available</option>
                          <option value="N" <?php if($seat_availability == 'N'): ?> selected="selected" <?php endif; ?> class="text-red">Not Available</option>
                      </select>
                      </div>
                      <div class="col-sm-12 col-md-4 form-group ">
                      <label for="class_id" class="text-white-50">Class Type: </label>
                      <select name="class_id" id="class_id" class="form-control text-gray-dark">
                          <option value=" " class="text-blue">Select your option</option>
                          <option value="1"<?php if($class_id == '1'): ?> selected="selected" <?php endif; ?> class="text-darker">Sleepets Cabin</option>
                          <option value="2"<?php if($class_id == '2'): ?> selected="selected" <?php endif; ?> class="text-darker">Sleepets 2nd Class</option>
                          <option value="3"<?php if($class_id == '3'): ?> selected="selected" <?php endif; ?> class="text-darker">Sleepets 3rd Class</option>
                          <option value="4"<?php if($class_id == '4'): ?> selected="selected" <?php endif; ?> class="text-darker">Observation Saloon</option>
                          <option value="5"<?php if($class_id == '5'): ?> selected="selected" <?php endif; ?> class="text-darker">A/C Special</option>
                          <option value="6"<?php if($class_id == '6'): ?> selected="selected" <?php endif; ?>class="text-darker">General 1st Class</option>
                          <option value="7"<?php if($class_id == '7'): ?> selected="selected" <?php endif; ?> class="text-darker">General 2nd Class</option>
                          <option value="8"<?php if($class_id == '8'): ?> selected="selected" <?php endif; ?> class="text-darker">General 3rd Class</option>
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
                         <!-------->
                      </div>
                  </form>
              </div>
              </div>
                  <!-- Table -->
                  <?php
                  $dbconnect = new mysqli('localhost','root','','train_sys') or die(mysqli_error($dbconnect));
                  $result = $dbconnect->query("SELECT * FROM train_sys.seats") or die(mysqli_error($dbconnect));
                  ?>
            <div class="table-responsive">
              <table class="table align-items-center table-dark table-flush">
                <thead class="thead-dark">
                    <th scope="col" class="sort" data-sort="seat_id">Seat ID</th>
                    <th scope="col" class="sort" data-sort="window_allocation">Window Allocation</th>
                    <th scope="col" class="sort" data-sort="availability">Availability</th>
                    <th scope="col" data-sort="class_id">Class Type</th>
                    <th scope="col" class="sort" colspan="2">Actions</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                  <?php
                  while ($row = $result->fetch_assoc()):

                  ?>
                <tbody class="list">
                  <tr class="text-yellow align-items-center ">
                      <td class="text-sm-left">
                          <?php echo $row['seat_id']; ?>
                      </td>
                    <td>
                        <?php echo ($row['window_allocation']  == 'Y' ? "Yes" : "No"); ?>
                    </td>
                    <td>
                        <?php echo ($row['availability']  == 'Y' ? "Yes" : "No"); ?>
                    </td>
                    <td>
                        <?php
                       if($row['class_id'] == 1){
                           echo "Sleepet 1st Class(Cabin)";
                        }
                        elseif($row['class_id'] == 2){
                            echo "Sleepet 2nd Class";
                        }
                        elseif($row['class_id'] == 3){
                            echo "Sleepets 3rd Class";
                        }
                       elseif($row['class_id'] == 4){
                            echo "Observation Saloon";
                        }
                       elseif($row['class_id'] == 5){
                            echo "A/C Special";
                        }
                       elseif($row['class_id'] == 6){
                            echo "General 1st Class";
                        }
                       elseif($row['class_id'] == 7){
                            echo "General 2nd Class";
                        }
                       elseif($row['class_id'] == 8){
                            echo "General 3rd Class";
                        }
                        ?>
                    </td>
                    <td>
                        <a href="seats.php?edit=<?php echo $row['seat_id']; ?>"
                           class="btn btn-facebook"?>Edit</a>
                        <a href="process/seat_proc.php?delete=<?php echo $row['seat_id']; ?>"
                           class="btn btn-danger"?>Delete</a>
                    </td>
                  </tr>
                </tbody>
                  <?php endwhile; ?>
              </table>
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
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.2.0"></script>
</body>
</html>