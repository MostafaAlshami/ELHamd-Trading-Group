<?php

session_start();

$conn= mysqli_connect("localhost","root","","se");

$ip=1 ;

$q="SELECT * FROM user  JOIN  employee ON user.emp_ID = employee.ID WHERE user.emp_ID='$ip'";

$result = mysqli_query($conn,$q);;

if (mysqli_num_rows($result) > 0) 
{
  // output data of each row
  while($row =mysqli_fetch_assoc($result)) {
            $firstName = $row['name'];
            $lastName = $row['name'];
            $email = $row['email'];
            $address = $row['address'];
            $department = $row['Dep'];
            $mobile = $row['mobile'];
            $DoB = $row['DOB'];
            $degree = $row['degree'];
            $emp_date = $row['emp_date'];
            $salary = $row['salary'];
            $EmpCode = $row['comp_id'];

             
  }
}
 else {
  echo "0 results";
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Employee Profile</title>
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
                                <h5 class="card-category">Employees</h5>
                                <h4 class="card-title"><?php echo $firstName ." ". $lastName; ?></h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-primary">
                                            <th>Code</th>
                                            <th></th><th></th>    
                                            <th class="text-left">2324</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Email Address</td>
                                                <td></td><td></td>
                                                <td><?php echo $email; ?></td> 
                                            </tr>
                                            <tr>
                                                <td>Address</td> 
                                                <td></td><td></td>  
                                                <td><?php echo $address; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Phone Number</td>
                                                <td></td><td></td>
                                                <td><?php echo $mobile; ?></td> 
                                            </tr>
                                            <tr>
                                                <td>Educational Degree</td> 
                                                <td></td><td></td>  
                                                <td><?php echo $degree; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Birthdate</td>  
                                                <td></td><td></td>    
                                                <td><?php echo $DoB; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Employment Date</td>  
                                                <td></td><td></td> 
                                                <td><?php echo $emp_date; ?></td>   
                                            </tr>
                                            <tr>
                                                <td>Department</td>  
                                                <td></td><td></td> 
                                                <td><?php echo $department; ?></td>   
                                            </tr>
                                            <tr>
                                                <td>Salary</td> 
                                                <td></td><td></td>  
                                                <td><?php echo $salary; ?></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><button class=" btn">Edit</button></td>
                                                <td><button class=" btn">Back to List</button></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
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
