<?php
<<<<<<< HEAD
		session_start();

		$errors = array();
	
	$db = mysqli_connect('localhost', 'root', '', 'ClearanceCityWide');
	$first_name="";
	$middle_name="";
	$last_name="";
	$username="";
	$password2="";
	$password1="";
	$position="";
	$barangay="";
	$errors = array();


	if (isset($_POST['submit'])) {
		$first_name = mysqli_real_escape_string($db,$_POST['first_name']);
		$middle_name = mysqli_real_escape_string($db,$_POST['middle_name']);
		$last_name = mysqli_real_escape_string($db,$_POST['last_name']);
		$username = mysqli_real_escape_string($db,$_POST['username']);
		$password2 = mysqli_real_escape_string($db,$_POST['password2']);
		$password1 = mysqli_real_escape_string($db,$_POST['password1']);
		$position = mysqli_real_escape_string($db,$_POST['position']);
		$barangay = mysqli_real_escape_string($db, $_POST['barangay']);
	
	
	
		if (empty($username)){
			array_push($errors, "Username is required");
		}
		if (empty($password2)){
			array_push($errors, "Password is required");
		}
		if ($password2 != $password1){
			array_push($errors, "Password are not match!");
		}
	
	
		if (count($errors) == 0) {
			$password2 = $password2; 
			$sql = "INSERT INTO staff (first_name, middle_name, last_name, username,password2,position,barangay_id) VALUES ('$first_name', '$middle_name', '$last_name', '$username','$password2','$position',$barangay)";
			$result = mysqli_query($db, $sql);

			if($result == true){
				$_SESSION['first_name'] = $first_name;
				$_SESSION['success'] = "Successfuly Logged in!";
				header('location: admin_home.php');
			}else{
				echo "Error".$sql;
			}
		
		}
	
   }	
	
	
	
=======
    session_start();
	$username = "";
	$errors = array();
	$password="";
	$cpassword="";
	
	
	
	$db = mysqli_connect('localhost', 'root', '', 'ClearanceCityWide');
	
	if (isset($_POST['submit'])) {
		$username = mysqli_real_escape_string($db,$_POST['uname']);
		$password = mysqli_real_escape_string($db,$_POST['password']);
		$cpassword = mysqli_real_escape_string($db,$_POST['cpassword']);	
	
	
	
	if (empty($username)){
		array_push($errors, "Username is required");
	}
	if (empty($password)){
		array_push($errors, "Password is required");
	}
	if ($cpassword != $cpassword){
		array_push($errors, "Password are not match!");
	}
	
	
	if (count($errors) == 0) {
		$password = md5($password); 
		$sql = "INSERT INTO account (`ID`, username, password)
					VALUES (null, '$username', '$password')";
		mysqli_query($db, $sql);
		$_SESSION['username'] = $username;
		$_SESSION['success'] = "Successfuly Logged in!";
		header('location: login.php');
	}
	
   }
   
   
   if (isset($_POST['login'])){
	   $username = mysqli_real_escape_string($db,$_POST['username']);
	   $password = mysqli_real_escape_string($db,$_POST['password']);	
	
	
	
	if (empty($username)){
		array_push($errors, "Username is required");
	}
	if (empty($password)){
		array_push($errors, "Password is required");
	}
	
	if (count($errors) == 0){
		$password = md5($password);
		$query = " SELECT * FROM account WHERE username='$username' AND password='$password'";
		$result = mysqli_query($db, $query);
		if (mysqli_num_rows($result) == 0){
			
			$_SESSION['username'] = $username;
		    $_SESSION['success'] = "You are now logged in";
		    header('location: index.php');
		}else{
			array_push($errors, "wrong username/password combination");
			
		}
		
		
	}
   }
>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a
   
   
   
   if(isset($_GET['logout'])){
	   session_destroy();
	   unset($SESSION['username']);
<<<<<<< HEAD
	   header('location: admin_login.php');
=======
	   header('location: login.php');
>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a
	   
	   
	   
	   
   }
<<<<<<< HEAD
	
 	if (isset($_POST['login_user'])) {
		$username = $_POST['username'];
		$password2 = $_POST['password2'];
			
			$query = "SELECT username, staff_id FROM staff WHERE username='$username' AND password2='$password2'";
			
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				while ($row = mysqli_fetch_array($results)) {
			
					$_SESSION['username'] = $row['username'];
					$_SESSION['staff_id'] = $row['staff_id'];
					$staff_id = $_SESSION['staff_id'];
					header('location: home.php');
				}
				
			}else {
				
			 echo "Invalid Username or Password!".md5($password2);
			
		}
	}

=======

  
	
>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a
?>