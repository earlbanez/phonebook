<?php

	include('config.php');
	
$username = $password = $cpassword = '';

if(isset($_POST['submit'])){
	$username = $_POST['uname'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
	

	$create_account = mysqli_query($conn, "INSERT INTO `account` (`ID`, `username`, `password`) VALUES (null, '$username', '$password')");
	if($create_account){

	$check_username = "select * from user where username = '$username'";
	$query = mysqli_query($conn, $check_username);
	$create_account = mysqli_query($conn, "INSERT INTO `account` (`ID`, `username`, `password`) VALUES (null, '$username', '$password')");
			if($create_account){

		echo "Congrats";
	}else{
		echo 'Congrats';
	}
	
}
}

?>