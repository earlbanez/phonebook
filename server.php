<?php
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
   
   
   
   if(isset($_GET['logout'])){
	   session_destroy();
	   unset($SESSION['username']);
	   header('location: login.php');
	   
	   
	   
	   
   }

  
	
?>