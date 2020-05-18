<?php
session_start();
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'bloodbank');
if(isset($_POST['create'])){
$name = $_POST['username'];
$pass = $_POST['pass'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$bloodgroup = $_POST['bloodGroup'];

$s = " select * from usertable where username ='$name'";

$result = mysqli_query($con , $s);

$num = mysqli_num_rows($result);

if ($num == 1) {
	echo "username Already Taken";
	# code...
}else{
	$reg = "insert into usertable(username, password, email, contact, bloodgroup) values ('$name' , '$pass' ,'$email' , '$contact' ,'$bloodgroup')";
	mysqli_query($con, $reg);
echo "Registeration Successfully";
header('location:index.php');	
}

}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Blood Donation</title>
	<!--===============================================================================================-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!--===============================================================================================-->
</head>
<body>


<div class="container">
	<div class="center">
		<form class="Login-Form" action="register.php" method="post">
		<h2 class="head">Blood Donation</h2>
		
			<div class="input100 rs1 username-input validate-input" data-validate = "Username is required">
						<input class="username-input100 input10" type="text" name="username" required>
						<span class="label-input100">Username</span>
					</div>
					
					
					<div class="input100 rs2 password-input validate-input"  data-validate="Password is required">
						<input class="password-input100 input10" type="password" minlength="8" name="pass" required>
						<span class="label-input100">Password</span>
					</div>


					<div class="input100  username-input validate-input" data-validate = "Email is required">
						<input class="username-input100 input10" type="email" name="email" required>
						<span class="label-input100">Email</span>
					</div>
					
					
					<div class="input100  password-input validate-input" data-validate="Contact is required">
						<input class="password-input100 input10" type="tel" name="contact" required>
						<span class="label-input100">Contact No</span>
					</div>

					<div class="input100 blood username-input validate-input"  data-validate = "BloodGroup is required">
						<select class="select input10" name="bloodGroup" required>
  							<option selected>Select Your Blood Group</option>
  							<option value="O-">O-</option>
  							<option value="O+">O+</option>
  							<option value="A+">A+</option>
  							<option value="A-">A-</option>
  							<option value="B+">B+</option>
  							<option value="B-">B-</option>
  							<option value="AB+">AB+</option>
  							<option value="AB-">AB-</option>
						</select>
						<span class="label-input100">Blood Group</span>
					</div>
					
					
					<div class="btn-submit">
						<button name="create" class="btn-submit100">
							Submit
						</button>
					</div>
					
					<div class="forget">
						<a href="#" class="forget-txt1">
							Forgot password?
						</a>
					</div>
		</form>
	</div>
	

</div>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/slimScroll/jquery.slimscroll.min.js"></script>
<script src="js/script.js" type="text/javascript"></script>
</body>
</html>