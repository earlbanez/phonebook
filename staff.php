<?php
<<<<<<< HEAD
	
$host = '';
$db ='';

	$mysqli = new mysqli('localhost','root','','ClearanceCityWide') or die(mysqli_error($mysqli));
=======


$host = '';
$db ='';

$mysqli = new mysqli('localhost','root','','ClearanceCityWide') or die(mysqli_error($mysqli));

>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a
$staff_id ="";
$update = false;
$first_name="";
$middle_name="";
$last_name="";
<<<<<<< HEAD
$username="";
$password2="";
$position = "";
$barangay_id="";

if(isset($_POST['save'])){
	$password = md5($password);
=======


if(isset($_POST['save'])){
>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a
	$staff_id = $_POST['staff_id'];
	$first_name = $_POST['first_name'];
	$middle_name = $_POST['middle_name'];
	$last_name = $_POST['last_name'];
<<<<<<< HEAD
	$username = $_POST['username'];
	$password2 = $_POST['password2'];
	$position = $_POST['position'];
	$barangay_id = $_POST['barangay_id'];
}

=======

	

	$mysqli->query("INSERT INTO staff (staff_id,first_name,middle_name,last_name) VALUES ('$staff_id','$first_name','$middle_name','$last_name')") or
			die($mysqli->error);
	$_SESSION['message'] = "Successfully Added!";
	$_SESSION['msg_type'] = "success";
	
	
	header("location:staff_index.php");
}
>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a
if(isset($_GET['delete'])){
	$id =$_GET['delete'];
	$mysqli->query("DELETE FROM staff WHERE staff_id=$id") or die($mysqli->error());
	
	$_SESSION['message'] = "Successfully Delete!";
	$_SESSION['msg_type'] = "danger";
	
	header("location:staff_index.php");
	
	
}
<<<<<<< HEAD

if(isset($_GET['edit'])){
	$password2 = md5($password2);
	$id = $_GET['edit'];
	$update =true;
	$result = $mysqli->query("SELECT * FROM staff WHERE staff_id=$id") or die($mysqli->error());
=======
if(isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update =true;
	$result = $mysqli->query("SELECT * FROM staff WHERE staff_id=$id") or die($mysqli->error);
>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a
	if(@count($result)==1){
		$row=$result->fetch_array();
		$staff_id = $row['staff_id'];
		$first_name = $row['first_name'];
		$middle_name = $row['middle_name'];
		$last_name = $row['last_name'];
<<<<<<< HEAD
		$username = $row['username'];
		$password2 = $row['password2'];
		$position = $row['position'];
		$barangay_id = $row['barangay_id'];
=======
>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a
		
	}
}
if(isset($_POST['update'])){
<<<<<<< HEAD
	$password2 = md5($password2);
	$id = $_POST['id'];
	$first_name = $_POST['first_name'];
	$middle_name = $_POST['middle_name'];
	$last_name = $_POST['last_name'];
	$username = $_POST['username'];
	$password2 = $_POST['password2'];
	$position = $_POST['position'];
	$barangay_id = $_POST['barangay'];
	
	$mysqli->query("UPDATE staff SET first_name='$first_name',middle_name='$middle_name',last_name='$last_name', username='$username',password2='$password2',position='$position',barangay_id='$barangay_id'WHERE staff_id=$id") or die($mysqli->error);
=======
	$id = $_POST['id'];
	$staff_id = $_POST['staff_id'];
	$first_name = $_POST['first_name'];
	$middle_name = $_POST['middle_name'];
	$last_name = $_POST['last_name'];
	
	$mysqli->query("UPDATE staff SET staff_id='$staff_id',first_name='$first_name',middle_name='$middle_name',last_name='$last_name' WHERE staff_id=$id") or die($mysqli->error);
>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a
	$_SESSION['message'] = "Successfully Update!";
	$_SESSION['msg_type'] = "warning";
	
	header('location:staff_index.php');
}

<<<<<<< HEAD
  
	
=======

>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a
?>