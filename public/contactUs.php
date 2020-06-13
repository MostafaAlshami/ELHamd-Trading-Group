<?php

if (!isset($_SESSION)) 
{
    session_start();
}

define('__ROOT__', "../app/");
require_once(__ROOT__ . "model/contact_model.php");
require_once(__ROOT__ . "controller/contact_controller.php");
require_once(__ROOT__ . "view/contact_view.php");

$id = 1;
$model = new Contact($id);
$controller = new ContactController($model);
$view = new ContactView($controller, $model);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title> Contact Us </title>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
</head>

<body class="user-profile">
    <div class="wrapper ">
        <div class="sidebar" data-color="orange">
            <div class="logo">
                <a href="./dashboard.php" class="simple-text logo-mini"> HT </a>
                <a href="./dashboard.php" class="simple-text logo-normal"> ELHamd Trading </a>
            </div>
            <div class="sidebar-wrapper" id="sidebar-wrapper">
              
            </div>
        </div>

        <div class="main-panel" id="main-panel">
            <!-- Navbar -->

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
              <a  class="nav-link" href="aboutUs.php"><i class="now-ui-icons files_box"></i>
                <p>About US</p>
              </a>
            </li>

              <li class="nav-item">
              <a  class="nav-link" href="contactUs.php"><i class="now-ui-icons files_box"></i>
                <p>Contact US</p>
              </a>
            </li>

              <li class="nav-item">
              <a  class="nav-link" href="faqs.php"><i class="now-ui-icons files_box"></i>
                <p>FAQs</p>
              </a>
            </li>


              <?php if (!empty($_SESSION["ID"])) { ?>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="now-ui-icons users_single-02"></i>
                    <p> <span class="d-lg-none d-md-block">Some Actions</span> </p>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href='employeesList.php?action=view&id=<?php echo $_SESSION["ID"]; ?>'>User Profile</a> 
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





          <div class="content"  id="contact" >  <!--- style="display: None" -->
              <div class="row">
                <div class="col-md-15">



                      <div class="card">

                      <?php
                                echo $view->output();
                      ?>

                      </div>





                   
                        <div class="card">

                      <?php
                                echo $view->output2();
                      ?>

                      </div>




                    </div>
                </div>
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
    <script src="../assets/js/employeevalid" type="text/javascript"></script>

</body>

</html>
