<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Now UI Dashboard by Creative Tim
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="user-profile">
    <div class="wrapper ">
        <div class="sidebar" data-color="orange">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text logo-mini">
                    CT
                </a>
                <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                    Creative Tim
                </a>
            </div>
            <div class="sidebar-wrapper" id="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="./dashboard.html">
                            <i class="now-ui-icons design_app"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>


                    <li>
                        <a href="./reminder.html">
                            <i class="now-ui-icons ui-2_time-alarm"></i>
                            <p>Reminder</p>
                        </a>
                    </li>


                    <li>
                        <a href="employees.html">
                            <i class="now-ui-icons users_single-02"></i>
                            <p>Employees</p>
                        </a>
                    </li>
                    <li>
                        <a href="companies.html">
                            <i class="now-ui-icons files_box"></i>
                            <p>Companies</p>
                        </a>
                    </li>
                    <li>
                        <a href="allContracts.html">
                            <i class="now-ui-icons files_single-copy-04"></i>
                            <p>All Contracts</p>
                        </a>
                    </li>
                    <li class="active ">
                        <a href="products.html">
                            <i class="now-ui-icons shopping_cart-simple"></i>
                            <p>All Products</p>
                        </a>
                    </li>
                    <li>
                        <a href="importExpenses.html">
                            <i class="now-ui-icons business_money-coins"></i>
                            <p>Import Expenses</p>
                        </a>
                    </li>
                    <li>
                        <a href="exportexpenses.html">
                            <i class="now-ui-icons business_money-coins"></i>
                            <p>Export Expenses</p>
                        </a>
                    </li>
                    <li>
                        <a href="packinglist.html">
                            <i class="now-ui-icons files_box"></i>
                            <p>Packing List</p>
                        </a>
                    </li>
                    <li>
                        <a href="invoice.html">
                            <i class="now-ui-icons shopping_credit-card"></i>
                            <p>Invoice</p>
                        </a>
                    </li>
                    <li>
                        <a href="shlineBooking.html">
                            <i class="now-ui-icons shopping_cart-simple"></i>
                            <p>Shipping</p>
                        </a>
                    </li>
                    <li>
                        <a href="shlines.html">
                            <i class="now-ui-icons shopping_cart-simple"></i>
                            <p>Shipping Line</p>
                        </a>
                    </li>
                    <li>
                        <a href="storage.html">
                            <i class="now-ui-icons files_box"></i>
                            <p>Storage</p>
                        </a>
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
                        <a class="navbar-brand" href="#pablo">Products</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                        aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
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
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="now-ui-icons location_world"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Some Actions</span>
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <i class="now-ui-icons users_single-02"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Account</span>
                                    </p>
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
                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">

                            </div>
                            <div class="card-body">
                                <div class="author">
                                    <a href="#">
                                        <img class="avatar border-gray"
                                            src="file:///Users/janahamdy/Desktop/ElHamd/Products/unnamed.jpg" alt="...">
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
                                        <img class="avatar border-gray"
                                            src="file:///Users/janahamdy/Desktop/ElHamd/Products/unnamed.jpg" alt="...">
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
                                        <img class="avatar border-gray"
                                            src="file:///Users/janahamdy/Desktop/ElHamd/Products/unnamed.jpg" alt="...">
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
                                        <img class="avatar border-gray"
                                            src="file:///Users/janahamdy/Desktop/ElHamd/Products/unnamed.jpg" alt="...">
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
                                        <img class="avatar border-gray"
                                            src="file:///Users/janahamdy/Desktop/ElHamd/Products/unnamed.jpg" alt="...">
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
                                        <img class="avatar border-gray"
                                            src="file:///Users/janahamdy/Desktop/ElHamd/Products/unnamed.jpg" alt="...">
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
</body>

</html>