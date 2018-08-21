

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>RAF Portal Admin Dashboard</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.php">On-line Portal</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Academic Calendar">
          <a class="nav-link" href="product.php">
            <i class="fa fa-calendar"></i>
            <span class="nav-link-text"> Academic Calendar</span>
          </a>
        </li>
		 <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Google Classroom">
          <a class="nav-link" href="https://accounts.google.com/ServiceLogin/identifier?continue=https%3A%2F%2Fclassroom.google.com%2F%3Femr%3D0&followup=https%3A%2F%2Fclassroom.google.com%2F%3Femr%3D0&service=classroom&flowName=GlifWebSignIn&flowEntry=ServiceLogin" target="_blank">
            <i class="fa fa-google"></i>
            <span class="nav-link-text"> Google Classroom</span>
          </a>
        </li>
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="E-mails">
          <a class="nav-link" href="https://accounts.google.com/ServiceLogin" target="_blank">
            <i class="fa fa-envelope-open"></i>
            <span class="nav-link-text"> E-mails</span>
          </a>
        </li>
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Notice Board">
          <a class="nav-link" href="noticeboard.php">
            <i class="fa fa-bell"></i>
            <span class="nav-link-text"> Notice Board</span>
          </a>
        </li>

         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Add Users">
          <a class="nav-link" href="register.php">
            <i class="fa fas fa-user-plus"></i>
            <span class="nav-link-text">Add New Users</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
	  
	    <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell"></i>
            <span class="badge badge-danger">Notifications</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="#">Clear your fees</a>
            <a class="dropdown-item" href="#">Update your profile</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Other Messages</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-google "></i>
            <span class="badge badge-danger">Google Platform</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
            <a class="dropdown-item" href="https://accounts.google.com/ServiceLogin/identifier?continue=https%3A%2F%2Fclassroom.google.com%2F%3Femr%3D0&followup=https%3A%2F%2Fclassroom.google.com%2F%3Femr%3D0&service=classroom&flowName=GlifWebSignIn&flowEntry=ServiceLogin" target="_blank">Google Classroom</a>
            <a class="dropdown-item" href="https://accounts.google.com/ServiceLogin/identifier?continue=https%3A%2F%2Fclassroom.google.com%2F%3Femr%3D0&followup=https%3A%2F%2Fclassroom.google.com%2F%3Femr%3D0&service=classroom&flowName=GlifWebSignIn&flowEntry=ServiceLogin" target="_blank">Submit Assignments</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="https://mail.google.com" target="_blank">Check Mail</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-user-circle "></i>
			<span class="badge badge-danger">User Settings</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="profile.php">Settings</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" data-toggle="modal" data-target="#exampleModal">Logout</a>
          </div>
        </li>
		
      </ul>
	  
      <ul class="navbar-nav ml-auto">


        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-unlock"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
      <!-- Icon Cards-->

						<?php 

							$servername = "localhost";
							$username = "cjmjbsbvun";
							$password = "Kew92hAwUw";
							$dbname = "cjmjbsbvun";

							// Create connection
							$conn = new mysqli($servername, $username, $password, $dbname);
							$sqll = "SELECT  * from sales_stats ";
							if (mysqli_query($conn, $sqll)) 
							{
							   echo "";
							} 
							 else 
							{
							  echo "Error: " . $sqll . "<br>" . mysqli_error($conn);
							}
							$result = mysqli_query($conn, $sqll);
							if (mysqli_num_rows($result) > 0)
							 {
							   // output data of each row
							   while($row = mysqli_fetch_assoc($result))
							 { 
						?>

								  <div class="row">
									<div class="col-xl-3 col-sm-6 mb-3">
									  <div class="card text-white bg-primary o-hidden h-100">
										<div class="card-body">
										  <div class="card-body-icon">
											<i class="fa fa-fw fa-google"></i>
										  </div>
										 <div class="mr-5">5 Google Services</div>
										</div>
									   
										<a class="card-footer text-white clearfix small z-1" href="#">
										  <span class="float-left">View Details</span>
										  <span class="float-right">
											<i class="fa fa-angle-right"></i>
										  </span>
										</a>

									  </div>
									</div>

								
									<div class="col-xl-3 col-sm-6 mb-3">
									  <div class="card text-white bg-warning o-hidden h-100">
										<div class="card-body">
										  <div class="card-body-icon">
											<i class="fa fa-fw fa-dollar"></i>
										  </div>
										  <div class="mr-5"><?php echo $row['revenue'];?>  Fee Balance</div>
										</div>
						<?php
							}
							} 
							  else
							 {
							  echo '0 results';
							}
						?>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-bell"></i>
              </div>
              <div class="mr-5">Notice Board</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="noticeboard.php">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-user"></i>
              </div>
              <div class="mr-5">Your Profile</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
      </div>
	  
	  <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Users Table</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="userTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                   <th>ID</th>
                  <th>User Name</th>
                  <th>e-Mail</th>
                  <th>Password</th> 
                </tr>
              </thead>
              
			  
		<?php
			$servername = "localhost";
			$username = "cjmjbsbvun";
			$password = "Kew92hAwUw";
			$dbname = "cjmjbsbvun";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);

			$sql = 'SELECT * from users';
			if (mysqli_query($conn, $sql)) {
			echo "";
			} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
			$count=1;
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) { ?>
									<tbody>
									   <tr>
										  <th>
										  <?php echo $row['id']; ?>
										  </th>
										  <td>
										  <?php echo $row['username']; ?>
										  </td>
										  <td>
										  <?php echo $row['email']; ?>
										  </td>
										  <td>
										  <?php echo $row['password']; ?>
										  </td>
										  
									   </tr>
									</tbody>

									<?php
			$count++;
			}
			} else {
			echo '0 results';
			}
		?>
		</table>
		</div>
	</div>
	</div>



      
      <!-- Example DataTables Card-->

    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>© 2018 RAF ICT Department</small>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>
