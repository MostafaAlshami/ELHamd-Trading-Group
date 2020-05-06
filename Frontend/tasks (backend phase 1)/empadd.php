<!DOCTYPE html>
<html lang="en">
<?php
$errorMessage = null;
$addMessage = null;


if (isset($_GET['error'])) {
    $errorMessage = $_GET['error'];
}
if (isset($_GET['message'])) {
    $addMessage = $_GET['message'];
}
?>
<head>
    <title>Add Employee</title>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'name='viewport' />
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

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="orange">
            <!--Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow" -->
            <div class="logo">
                <a href="#" class="simple-text logo-mini"> HT</a>
                <a href="#" class="simple-text logo-normal">ELHamd Trading </a>                   
            </div>
            <div class="sidebar-wrapper" id="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="./dashboard.html">
                            <i class="now-ui-icons design_app"></i>
                            <p>Dashboard</p>
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
                        <a class="navbar-brand" href="#pablo">  </a>
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
                    </div>
                </div>
            </nav>
            <div class="panel-header panel-header-sm">
            </div>

            <div class="content">

                <div class="row">
                    <div class=" col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-category"></h5>
                                <h4 class="card-title">Add Employee</h4>
                            </div>
                            <form action="add.php" method="post">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-primary">
                                            <th>Employee Code</th>
                                            <th></th><th></th>    
                                            <th class="text-right"><input type="text" name="EmpCode" class="form-control" placeholder="" required></th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>First Name</td>
                                                <td></td><td></td>
                                                <td><input type="text" name="first_name" class="form-control" placeholder="" required></td> 
                                            </tr>
                                            <tr>
                                                <td>Last Name</td>
                                                <td></td><td></td>
                                                <td><input type="text" name="last_name" class="form-control" placeholder="" required></td> 
                                            </tr>
                                            <tr>
                                                <td>Email Address</td>
                                                <td></td><td></td>
                                                <td><input type="email" name="email" class="form-control" placeholder="" required></td> 
                                            </tr>
                                            <tr>
                                                <td>Address</td> 
                                                <td></td><td></td>  
                                                <td><input type="text" name="address" class="form-control" placeholder="" required></td>
                                            </tr>
                                            <tr>
                                                <td>Phone Number</td>
                                                <td></td><td></td>
                                                <td><input type="number" name="mobile" class="form-control" placeholder="" required></td> 
                                            </tr>
                                            <tr>
                                                <td>Educational Degree</td> 
                                                <td></td><td></td>  
                                                <td><input type="text" name="Degree" class="form-control" placeholder="" required></td>
                                            </tr>
                                            <tr>
                                                <td>Birthdate</td>  
                                                <td></td><td></td>    
                                                <td><input type="date" name="DoB" class="form-control" placeholder="" required></td>
                                            </tr>
                                            <tr>
                                                <td>Employment Date</td>  
                                                <td></td><td></td> 
                                                <td><input type="date" name="EmployDate" class="form-control" placeholder="" required></td>   
                                            </tr>
                                            <tr>
                                                <td>Department</td>  
                                                <td></td><td></td> 
                                                <td><input type="text" name="Dep" class="form-control" placeholder="" required></td>   
                                            </tr>
                                            <tr>
                                                <td>Salary</td> 
                                                <td></td><td></td>  
                                                <td><input type="text" name="Salary" class="form-control" placeholder=""></td>
                                            </tr>
                                            <tr>
                                                <td colspan="4">
                                                    <button type="submit" class="btn">Save</button>
                                                    <button type="button" class="btn" value="Cancel" onclick="Location:./dashboard.html">Cancel</button>                                         
                                                    <div>
                                                         <?php if ($errorMessage !== null || $addMessage !== null) { ?>
                                            
                                                    <?php
                                                    if ($errorMessage !== null) {
                                                        echo $errorMessage;
                                                    }
                                                    if ($addMessage !== null) {
                                                        echo $addMessage;
                                                    }
                                                    ?>
                                               
                                        <?php } ?>
                                                    </div>
                                                    
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                    </form>
                                </div>
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