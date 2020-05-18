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
		<form class="Login-Form" action="validation.php" method="post">
		<h2 class="head">Blood Donation</h2>
		
			<div class="input100 rs1 username-input validate-input" data-validate = "Username is required">
						<input class="username-input100 input10" type="text" name="username">
						<span class="label-input100">Username</span>
					</div>
					
					
					<div class="input100 rs2 password-input validate-input" data-validate="Password is required">
						<input class="password-input100 input10" type="password" name="pass">
						<span class="label-input100">Password</span>
					</div>

					<div class="btn-submit">
						<button class="btn-submit100">
							Sign in
						</button>
					</div>
					
					<div class="forget">
						
						<a href="register.php" class="forget-txt1">
							Create New Account
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