<?php


$host = '';
$db ='';

$mysqli = new mysqli('localhost','root','','ClearanceCityWide') or die(mysqli_error($mysqli));

$staff_id ="";
$update = false;
$first_name="";
$middle_name="";
$last_name="";


if(isset($_POST['save'])){
	$staff_id = $_POST['staff_id'];
	$first_name = $_POST['first_name'];
	$middle_name = $_POST['middle_name'];
	$last_name = $_POST['last_name'];

	

	$mysqli->query("INSERT INTO staff (staff_id,first_name,middle_name,last_name) VALUES ('$staff_id','$first_name','$middle_name','$last_name')") or
			die($mysqli->error);
	$_SESSION['message'] = "Successfully Added!";
	$_SESSION['msg_type'] = "success";
	
	
	header("location:staff_index.php");
}
if(isset($_GET['delete'])){
	$id =$_GET['delete'];
	$mysqli->query("DELETE FROM staff WHERE staff_id=$id") or die($mysqli->error());
	
	$_SESSION['message'] = "Successfully Delete!";
	$_SESSION['msg_type'] = "danger";
	
	header("location:staff_index.php");
	
	
}
if(isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update =true;
	$result = $mysqli->query("SELECT * FROM staff WHERE staff_id=$id") or die($mysqli->error);
	if(@count($result)==1){
		$row=$result->fetch_array();
		$staff_id = $row['staff_id'];
		$first_name = $row['first_name'];
		$middle_name = $row['middle_name'];
		$last_name = $row['last_name'];
		
	}
}
if(isset($_POST['update'])){
	$id = $_POST['id'];
	$staff_id = $_POST['staff_id'];
	$first_name = $_POST['first_name'];
	$middle_name = $_POST['middle_name'];
	$last_name = $_POST['last_name'];
	
	$mysqli->query("UPDATE staff SET staff_id='$staff_id',first_name='$first_name',middle_name='$middle_name',last_name='$last_name' WHERE staff_id=$id") or die($mysqli->error);
	$_SESSION['message'] = "Successfully Update!";
	$_SESSION['msg_type'] = "warning";
	
	header('location:staff_index.php');
}


?>