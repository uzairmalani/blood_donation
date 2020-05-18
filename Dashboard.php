<?php
session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'bloodbank');

$s = "select * from usertable";
$result = mysqli_query($con , $s);
?>


<!DOCTYPE html>
<html>

<head>
	<!--===============================================================================================-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<title>Dashboard</title>
	<!--===============================================================================================-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/dashborad.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css">
	<!--===============================================================================================-->
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
		<button class="navbar-toggler sideMenuToggler" type="button">	<span class="navbar-toggler-icon"></span>
		</button> <a class="navbar-brand" href="#">Navbar</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle drop" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php echo $_SESSION['username']; ?>
        <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60"></a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown"> <a class="dropdown-item" href="#">Edit Profile</a>
						<a class="dropdown-item" href="#">Setting</a>
						<div class="dropdown-divider"></div> <a class="dropdown-item" href="logout.php">Sign Out</a>
					</div>
				</li>
			</ul>
		</div>
	</nav>
	<div class="wrapper d-flex">
		<div class="sideMenu">
			<div class="sidebar">
				<ul class="navbar-nav">
					<li class="nav-item"><a href="#" class="nav-link"><i class="material-icons icon">
						account_circle
					</i><span class="text">Donors</span></a></li>
					<li class="nav-item"><a href="#" class="nav-link" data-toggle="modal" data-target="#exampleModal"><i class="material-icons icon">
						person
					</i><span class="text">Available for Blood Donation</span></a></li>
					<li class="nav-item"><a href="#" class="nav-link"><i class="material-icons icon">
						insert_chart
					</i><span class="text">Charts</span></a></li>
					<li class="nav-item"><a href="#" class="nav-link"><i class="material-icons icon">
						settings
					</i><span class="text">Settings</span></a></li>
					<li class="nav-item"><a href="#" class="nav-link"><i class="material-icons icon">
						computer
					</i><span class="text">Demo</span></a></li>

					<li class="nav-item sideMenuToggler"><a href="#" class="nav-link"><i class="material-icons icon">
						view_list
					</i><span class="text">Resize</span></a></li>
					
				</ul>
			</div>	
		</div>
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Submit Your Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="Login-Form">
		<h2 class="head">Blood Donation</h2>
		
			<div class="input100 rs1 username-input validate-input" data-validate = "Username is required">
						<input class="username-input100 input10" type="text" name="username">
						<span class="label-input100">Username</span>
					</div>
					
					
					<div class="input100 rs2 password-input validate-input" data-validate="Password is required">
						<input class="password-input100 input10" type="password" name="pass">
						<span class="label-input100">Password</span>
					</div>


					<div class="input100  username-input validate-input" data-validate = "Username is required">
						<input class="username-input100 input10" type="text" name="username">
						<span class="label-input100">Email</span>
					</div>
					
					
					<div class="input100  password-input validate-input" data-validate="Password is required">
						<input class="password-input100 input10" type="password" name="pass">
						<span class="label-input100">Contact No</span>
					</div>

					<div class="input100 blood username-input validate-input" data-validate = "Username is required">
						<select class="select input10">
  							<option selected>Select Your Blood Group</option>
  							<option value="1">O-</option>
  							<option value="2">O+</option>
  							<option value="3">A+</option>
  							<option value="4">A-</option>
  							<option value="5">B+</option>
  							<option value="6">B-</option>
  							<option value="7">AB+</option>
  							<option value="8">AB-</option>
						</select>
						<span class="label-input100">Blood Group</span>
					</div>
					
					
					<div class="btn-submit">
						<button class="btn-submit100">
							Submit
						</button>
					</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
		<div class="content">
			<main>
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-4 my-3">
							<div class="bg-mattblack p-3">
								<h4 class="mb-2 head-text">
									Available donors
								</h4>
							</div>
						</div>
						
					</div>


					<table class="table">
					<thead class="thead-dark">
   					 <tr>
    					<th scope="col">#</th>
    					<th scope="col">Name</th>
      					<th scope="col">Email</th>
    					<th scope="col">Contact No</th>
    					<th scope="col">Blood Group</th>
				    </tr>
 					</thead>
				    <?php
				    $n=1;
				    	while($rows=mysqli_fetch_assoc($result))
				    	{
				    		?>
						<tbody>
				    	<tr>
      						<th scope="row"><?php echo $n; ?> </th>
      						<td><?php echo $rows['username']; ?></td>
      						<td><?php echo $rows['email']; ?></td>
      						<td><?php echo $rows['contact']; ?></td>
      						<td><?php echo $rows['bloodgroup']; ?></td>
   						</tr>
						</tbody>	
   						<?php
   						$n=$n+1;
				    	}
				    	
				    ?>

					</table>



					<!-- <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Blood Group</th>
      <th scope="col">Contact No</th>
       <th scope="col">Address</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>B-</td>
      <td>26225251</td>
      <td>Karachi</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>AB-</td>
      <td>26225251</td>
      <td>Lahore</td>
    </tr>
    <tr>
      <th scope="row">3</th>
     <td>Larry</td>
      <td>AB+</td>
      <td>26225251</td>
      <td>Karachi</td>
    </tr>
    <tr>
      <th scope="row">4</th>
     <td>John</td>
      <td>O-</td>
      <td>26225251</td>
      <td>Karachi</td>
    </tr>
  </tbody>
</table> -->
				</div>


			</main>
		</div>

	</div>



	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/slimScroll/jquery.slimscroll.min.js"></script>
	<script src="js/script.js" type="text/javascript"></script>
</body>

</html>