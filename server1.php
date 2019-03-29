<?php
<<<<<<< HEAD
	
	session_start();
	$username = "";
	$errors = array();
	$password="";
	
	
	$db = mysqli_connect('localhost', 'root', '', 'ClearanceCityWide');
	
 	if (isset($_POST['login_user'])) {
		$username = $_POST['username'];
		$password1 = $_POST['password1'];
			
			$query = "SELECT * FROM admin_account WHERE username='$username' AND password1='$password1'";
			
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['password'] = $password;
				header('location: admin_home.php');
			}else {
				
			 echo "Invalid Username or Password!".md5($password1);
			
		}
	}
=======

session_start();
	$username = "";
	$errors = array();
	$password="";
	$cpassword="";
//connect to the database
$db = mysqli_connect('localhost','root','','ClearanceCityWide');
//if the register button is clicked
if (isset($_POST['submit'])) {
		$username = mysqli_real_escape_string($db,$_POST['uname']);
		$password = mysqli_real_escape_string($db,$_POST['password']);
		$cpassword = mysqli_real_escape_string($db,$_POST['cpassword']);
	//ensure that form fields are filled properly
	if ($password != $cpassword){
		array_push($errors, "Password do not match");
	}
	//check if the username is already exist
	$user_check_query = "SELECT * FROM account WHERE username = '$username'";
	$result = mysqli_query($db, $user_check_query);
		if(mysqli_num_rows($result) > 0){
			array_push($errors, "Username already exist");
		}
	//if there are no errors, save user to database
	if (count($errors) == 0){
		$password = md5($password); //encrypt password before storing in database (security)
		$sql = "INSERT INTO account (username, password)
				VALUES ('$username', '$password')";
		mysqli_query($db, $sql);
		$_SESSION['username'] = $username;
		header('location: login.php'); //redirect to homepage
	}
}
	//log in user
if (isset($_POST['login'])){
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$password = mysqli_real_escape_string($db, $_POST['password']);
	if (empty($username)){
		array_push($errors, "Username is required");
	}
		if (empty($password_1)){
		array_push($errors, "Password is required");
	}
	if (count($errors) == 0){
		$password_1 = md5($password_1);
		$sql = "SELECT * FROM account WHERE username = '$username' AND password = '$password'";
		$results = mysqli_query($db, $sql);
		$num_count = mysqli_num_rows($results);
		if ($num_count == 1){
		$_SESSION['username'] = $username;
		$_SESSION['success'] = "Welcome";
		header('location: index.php?username='.$username);
	}
	else{
		array_push($errors, "Invalid username or Password");
		}
	}
}
>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a

  
	
?>