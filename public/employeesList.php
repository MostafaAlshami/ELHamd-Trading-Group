<?php  define('__ROOT__', "../app/"); 
require_once(__ROOT__ . "model/Employees_model.php");
require_once(__ROOT__ . "controller/employee_controller.php");
require_once(__ROOT__ . "view/Employees_view.php");

$model = new Employees();
$controller = new EmployeeController($model);
$view = new Empviewpage($controller, $model);


// if (isset($_GET['action']) && !empty($_GET['action'])) {
// 	switch($_GET['action']){
// 		case 'edit':
// 			echo $view->editForm();
// 			break;
// 		case 'editaction':
// 			$controller->edit();
// 			echo $view->output();
// 			break;
//         case 'view';
//         header("Location:EmployeeProfile.php");
//         break;
// 	}
// }
// else



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title> Employees </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
</head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="orange">
            <!--Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"-->
            <div class="logo">
                <a href="#" class="simple-text logo-mini"> HT </a>
                <a href="#" class="simple-text logo-normal"> ELHamd Trading </a>
            </div>
            <div class="sidebar-wrapper" id="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href=" "> <i class="now-ui-icons design_app"> </i> <p>Dashboard</p></a> 
                    </li>
                    <li>
                        <a href=" "> <i class="now-ui-icons users_single-02"></i><p>Employees</p></a>
                    </li>
                    <li class="active "> 
                        < <a href="companiesList.php"> <i class="now-ui-icons files_box"></i> <p>Companies</p></a> 
                    </li>
                    <li> 
                        <a href=" "> <i class="now-ui-icons files_box"></i> <p>Shipping Lines</p></a> 
                    </li>
                    <li>
                        <a href=" "><i class="now-ui-icons files_box"></i><p>Contracts</p></a>                              
                    </li>
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
                        <a class="navbar-brand" href="#pablo">  </a>
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
                                    <div class="input-group-text"><i class="now-ui-icons ui-1_zoom-bold"></i> 
                                    </div>
                                </div>
                            </div>
                        </form>

                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo"> <i class="now-ui-icons media-2_sound-wave"></i>
                                    <p> <span class="d-lg-none d-md-block">Stats</span> </p>  
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="now-ui-icons location_world"></i>
                                    <p> <span class="d-lg-none d-md-block">Some Actions</span> </p>                        
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login.html">
                                    <i class="now-ui-icons users_single-02"></i>
                                    <i>Login</i>
                                    <p><span class="d-lg-none d-md-block">Account</span></p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="panel-header panel-header-sm">
            </div>

            <div class="content">

                <div class="row">
                    <div class=" col-md-12">    
                        <div class="card">
                            <div class="card-header">
                              <h5 class="card-category"></h5>
                              <h4 class="card-title">Employees List</h4>
                            </div>
                            <div class="card-body">
                    
                                <!----CARD HERE: echo output function from view classes-->
                                <?php
                                    echo $view->output();
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
</body>

</html>