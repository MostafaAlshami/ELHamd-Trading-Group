<?php

require_once(__ROOT__ . "view/view.php");

class ViewUser extends View{	
	public function output(){
		$str=' <div class="logo">
		<a href="#" class="simple-text logo-mini">
			HT
		</a>
		<a href="#" class="simple-text logo-normal">
			ELHamd Trading
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
				<a href="./user.html">
					<i class="now-ui-icons users_single-02"></i>
					<p>User Profile</p>
				</a>
			</li>

			<li class="active ">
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
					<i class="now-ui-icons files_box"></i>
					<p>All Contracts</p>
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
				<a class="navbar-brand" href="#pablo">Dashboard</a>
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
						<a class="nav-link" href="login.html">
							<i class="now-ui-icons users_single-02"></i>
							<i>Login</i>
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
			<div class=" col-md-6">
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
										Mobile
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
								<!-- <?php
								
									// $q = "SELECT * FROM user  JOIN  employee ON user.emp_ID = employee.ID";
									
									// $result = mysqli_query($conn, $q);
									// if(mysqli_num_rows($result) > 0)
									// {
									//     while($row = mysqli_fetch_array($result))
									//     {
									//             $firstName = $row["name"];
									//             $lastName = $row["name"];
									//             $mobile = $row["mobile"];
									//             $salary = $row["salary"];
									?>
								-->
									<tr>
										<td>
											<?php echo $firstName;?>
										</td>
										<td>
											<?php echo $mobile; ?>
										</td>

										<td class="text-right">
										<?php echo $salary; ?>
										</td>
										<td class="text-center">
											<a class="btn" href="empView.php">View</a>
										</td>
										<td class="text-center">
											<a class="btn" href="editEmployee.html">Edit</a>
										</td>
									</tr>
								<?php } 
									}
								?>
									
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>';
		return $str;
	}
	
}
?>
