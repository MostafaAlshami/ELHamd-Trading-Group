<?php if (!isset($_SESSION)) {
  session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Homepage
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  <script>
    function display() {
      document.getElementById('id02').style.display = 'block';
      document.getElementById('id01').style.display = 'none';

    }
  </script>
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="#" class="simple-text logo-mini">
          HT
        </a>
        <a href="#" class="simple-text logo-normal">
          ELHamd Trading
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="./dashboard.php">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>

          <?php if (!empty($_SESSION["ID"])) { ?>

            <li>
              <a href="employeeList.php">
                <i class="now-ui-icons users_single-02"></i>
                <p>User Profile</p>
              </a>
            </li>


            <li>
              <a href="employees.php">
                <i class="now-ui-icons users_single-02"></i>
                <p>Employees</p>
              </a>
            </li>
            <li>
              <a href="companiesList.php">
                <i class="now-ui-icons files_box"></i>
                <p>Companies</p>
              </a>
            </li>
            <li>
              <a href="allContracts.php">
                <i class="now-ui-icons files_box"></i>
                <p>All Contracts</p>
              </a>
            </li>
            <li>
              <a href="storage_public.php"><i class="now-ui-icons files_box"></i>
                <p>Storage</p>
              </a>
            </li>
          <?php }
          ?>

        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons media-2_sound-wave"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <?php if (!empty($_SESSION["ID"])) { ?>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="now-ui-icons users_single-02"></i>
                    <p> <span class="d-lg-none d-md-block">Some Actions</span> </p>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="signout.php">Signout</a>

                  </div>
                </li>
              <?php } ?>
              <?php if (empty($_SESSION["ID"])) { ?>
                <li class="nav-item">
                  <a class="nav-link" href="login_public.php">
                    <i class="now-ui-icons users_single-02"></i>
                    <i>Login</i>
                    <p><span class="d-lg-none d-md-block">Account</span></p>
                  </a>
                </li>
              <?php } ?>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content" id="id01" style="display: block">
        <div class="row">

          <div class="col-lg-4">

            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Global Sales</h5>
                <h4 class="card-title"><a href="#" onclick="display()">View All Products</a></h4>
                <div class="dropdown">
                  <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                    <i class="now-ui-icons loader_gear"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="product_public.php">View All Products</a>
                    <a class="dropdown-item" href="product_public.php?action=add">Add New Product</a>
                    <a class="dropdown-item" href="product_public.php?action=edit">Edit Product</a>
                    <a class="dropdown-item text-danger" href="#">Remove Data</a>
                  </div>
                </div>
              </div>
              <div class="card-body">

                <div class="row">

                  <img src="../public/Products/BFAVP.jpg" style="width:50%">
                  <img src="../public/Products/fit.jpeg" style="width:50%">
                  <img src="../public/products/unnamed.jpg" style="width:50%">
                  <img src="../public/Products/80242-Org-Tumeric-560x325.jpg" style="width:50%">


                </div>
              </div>


            </div>
          </div>
          <?php if (!empty($_SESSION["ID"])) { ?>
            <div class="col-lg-4 col-md-6">
              <div class="card card-chart">
                <div class="card-header">
                  <h5 class="card-category">2020 Companies</h5>
                  <h4 class="card-title"><a href="companies.php"> View All Companies</a></h4>
                  <div class="dropdown">
                    <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                      <i class="now-ui-icons loader_gear"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="companies.php">View All Companies</a>
                      <a class="dropdown-item" href="companyAdd.php">Add New Company</a>
                      <a class="dropdown-item" href="companyEdit.php">Edit Company</a>
                      <a class="dropdown-item text-danger" href="#">Remove Data</a>
                    </div>
                  </div>
                </div>

                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Company Name
                      </th>

                      <th>
                        Product
                      </th>

                      <th class="text-center">
                        View
                      </th>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-center">
                          Abu Auf
                        </td>

                        <td>
                          PopCorn Seeds
                        </td>


                        <td class="text-center">
                          <a href="companyProfile.php" class="btn">View</a>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">
                          Arisco
                        </td>

                        <td>
                          PopCorn Seeds
                        </td>



                        <td class="text-center">
                          <a href="companyProfile.php" class="btn">View</a>
                        </td>
                      </tr>



                    </tbody>
                  </table>


                </div>
                <div class="card-footer">
                  <div class="stats">

                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card card-chart">
                <div class="card-header">
                  <h5 class="card-category">Active Contracts</h5>
                  <h4 class="card-title"><a href="allcontracts.php">View Contracts</a></h4>
                  <div class="dropdown">
                    <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                      <i class="now-ui-icons loader_gear"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="allContracts.php">View All Contracts</a>
                      <a class="dropdown-item" href="contractAdd.php">Add New Contract</a>
                      <a class="dropdown-item" href="contractEdit.php">Edit Contract</a>
                      <a class="dropdown-item text-danger" href="#">Remove Data</a>
                    </div>
                  </div>
                </div>


                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Conract Number
                      </th>

                      <th>
                        Product
                      </th>

                      <th class="text-center">
                        View
                      </th>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-center">
                          1234533
                        </td>

                        <td>
                          PopCorn Seeds
                        </td>


                        <td class="text-center">
                          <a href="contractProfile.php" class="btn">View</a>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">
                          1234533
                        </td>

                        <td>
                          PopCorn Seeds
                        </td>



                        <td class="text-center">
                          <a href="contractProfile.php" class="btn">View</a>
                        </td>
                      </tr>



                    </tbody>
                  </table>


                </div>
                <div class="card-footer">
                  <div class="stats">

                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="card  card-tasks">
              <div class="card-header ">
                <h5 class="card-category">Reminders</h5>
                <h4 class="card-title">Tasks</h4>
              </div>
              <div class="card-body ">
                <div class="table-full-width table-responsive">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" checked>
                              <span class="form-check-sign"></span>
                            </label>
                          </div>
                        </td>
                        <td class="text-left">Sign contract for "What are conference organizers afraid of?"</td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                            <i class="now-ui-icons ui-2_settings-90"></i>
                          </button>
                          <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                            <i class="now-ui-icons ui-1_simple-remove"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox">
                              <span class="form-check-sign"></span>
                            </label>
                          </div>
                        </td>
                        <td class="text-left">Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                            <i class="now-ui-icons ui-2_settings-90"></i>
                          </button>
                          <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                            <i class="now-ui-icons ui-1_simple-remove"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" checked>
                              <span class="form-check-sign"></span>
                            </label>
                          </div>
                        </td>
                        <td class="text-left">Flooded: One year later, assessing what was lost and what was found when a
                          ravaging rain swept through metro Detroit
                        </td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                            <i class="now-ui-icons ui-2_settings-90"></i>
                          </button>
                          <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                            <i class="now-ui-icons ui-1_simple-remove"></i>
                          </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card-footer ">
                <hr>

              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h5 class="card-category">All Persons List</h5>
                <h4 class="card-title"> Employees Stats</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Name
                      </th>
                      <th>
                        Number
                      </th>

                      <th class="text-right">
                        Salary
                      </th>
                      <th class="text-center">
                        View
                      </th>
                      <th class="text-center">
                        Edit
                      </th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          Yusuf Hamdy
                        </td>
                        <td>
                          01180054675
                        </td>

                        <td class="text-right">
                          3,738 egp
                        </td>
                        <td class="text-center">
                          <a class="btn" href="viewEmployee.php">View</a>
                        </td>
                        <td class="text-center">
                          <a class="btn" href="editEmployee.php">Edit</a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Ashraf Ahmed
                        </td>
                        <td>
                          01180054675
                        </td>

                        <td class="text-right">
                          3,789 egp
                        </td>
                        <td class="text-center">
                          <a class="btn" href="ViewEmployee.php">View</a>
                        </td>
                        <td class="text-center">
                          <a class="btn" href="editEmployee.php">Edit</a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Nermin Magdy
                        </td>
                        <td>
                          01180054675
                        </td>

                        <td class="text-right">
                          7,142 egp
                        </td>
                        <td class="text-center">
                          <a class="btn" href="ViewEmployee.php">View</a>
                        </td>
                        <td class="text-center">
                          <a class="btn" href="editEmployee.php">Edit</a>
                        </td>
                      </tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>


                    </tbody>
                  </table>
                </div>
              </div>
            </div>

          </div>

        </div>
      <?php } ?>
      </div>
      <?php if (empty($_SESSION["ID"])) { ?>
    </div> <?php } ?>

  <div class="content" id="id02" style="display: none">
    <div class="row">
      <div class="col-md-4">
        <div class="card card-user">
          <div class="image">

          </div>
          <div class="card-body">
            <div class="author">
              <a href="#">
                <img class="avatar border-gray" src="../public/products/unnamed.jpg" alt="...">
                <h5 class="title">Dry Black lemon</h5>
              </a>
              <p class="description">
                India
              </p>
            </div>
            <p class="description text-center">
              <b> Size : 5cm </b> <br>
              <b> Purity : 99% </b> <br>
              <b> Humidity : 99% </b> <br>
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-user">
          <div class="image">

          </div>
          <div class="card-body">
            <div class="author">
              <a href="#">
                <img class="avatar border-gray" src="../public/products/unnamed.jpg" alt="...">
                <h5 class="title">Dry Black lemon</h5>
              </a>
              <p class="description">
                India
              </p>
            </div>
            <p class="description text-center">
              <b> Size : 5cm </b> <br>
              <b> Purity : 99% </b> <br>
              <b> Humidity : 99% </b> <br>
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-user">
          <div class="image">

          </div>
          <div class="card-body">
            <div class="author">
              <a href="#">
                <img class="avatar border-gray" src="../public/products/unnamed.jpg" alt="...">
                <h5 class="title">Dry Black lemon</h5>
              </a>
              <p class="description">
                India
              </p>
            </div>
            <p class="description text-center">
              <b> Size : 5cm </b> <br>
              <b> Purity : 99% </b> <br>
              <b> Humidity : 99% </b> <br>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="card card-user">
          <div class="image">

          </div>
          <div class="card-body">
            <div class="author">
              <a href="#">
                <img class="avatar border-gray" src="../public/products/unnamed.jpg" alt="...">
                <h5 class="title">Dry Black lemon</h5>
              </a>
              <p class="description">
                India
              </p>
            </div>
            <p class="description text-center">
              <b> Size : 5cm </b> <br>
              <b> Purity : 99% </b> <br>
              <b> Humidity : 99% </b> <br>
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-user">
          <div class="image">

          </div>
          <div class="card-body">
            <div class="author">
              <a href="#">
                <img class="avatar border-gray" src="../public/products/unnamed.jpg" alt="...">
                <h5 class="title">Dry Black lemon</h5>
              </a>
              <p class="description">
                India
              </p>
            </div>
            <p class="description text-center">
              <b> Size : 5cm </b> <br>
              <b> Purity : 99% </b> <br>
              <b> Humidity : 99% </b> <br>
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-user">
          <div class="image">

          </div>
          <div class="card-body">
            <div class="author">
              <a href="#">
                <img class="avatar border-gray" src="../public/products/unnamed.jpg" alt="...">
                <h5 class="title">Dry Black lemon</h5>
              </a>
              <p class="description">
                India
              </p>
            </div>
            <p class="description text-center">
              <b> Size : 5cm </b> <br>
              <b> Purity : 99% </b> <br>
              <b> Humidity : 99% </b> <br>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer">
    <div class=" container-fluid ">

      <div class="copyright" id="copyright">
        &copy;
        <script>
          document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
        </script>, Designed by <a href="https://www.invisionapp.com" target="_blank">Invision</a>.
        Coded by
        <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
      </div>
    </div>
  </footer>
  </div>
  </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script>
  <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
</body>

</html>