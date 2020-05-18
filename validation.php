<?php
session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'bloodbank');

$name = $_POST['username'];
$pass = $_POST['pass'];

$s = " select * from usertable where username ='$name' && password = '$pass'";

$result = mysqli_query($con , $s);

$num = mysqli_num_rows($result);

if ($num==1) {
	$_SESSION['username'] = $name;
	header('location:dashboard.php');
	# code...
}else{
	header('location:index.php');
}

?>


