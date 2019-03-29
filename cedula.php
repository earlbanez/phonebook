<?php

<<<<<<< HEAD
session_start();
=======

>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a
$host = '';
$db ='';

$mysqli = new mysqli('localhost','root','','ClearanceCityWide') or die(mysqli_error($mysqli));

$cedula_number ="";
$update = false;
$date="";
$amount="";
<<<<<<< HEAD
=======
$place="";

>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a

if(isset($_POST['save'])){
	$cedula_number = $_POST['cedula_number'];
	$date = $_POST['date'];
	$amount = $_POST['amount'];
<<<<<<< HEAD
	$staff_id = $_SESSION['staff_id'];
	

	$mysqli->query("INSERT INTO cedula (cedula_number,date,amount,staff_id) VALUES ('$cedula_number','$date','$amount','$staff_id')") or
=======
	$place = $_POST['place'];

	

	$mysqli->query("INSERT INTO cedula (cedula_number,date,amount,place) VALUES ('$cedula_number','$date','$amount','$place')") or
>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a
			die($mysqli->error);
	$_SESSION['message'] = "Successfully Added!";
	$_SESSION['msg_type'] = "success";
	
	
	header("location:cedula_index.php");
}
if(isset($_GET['delete'])){
	$id =$_GET['delete'];
	$mysqli->query("DELETE FROM cedula WHERE cedula_number=$id") or die($mysqli->error());
	
	$_SESSION['message'] = "Successfully Delete!";
	$_SESSION['msg_type'] = "danger";
	
	header("location:cedula_index.php");
	
	
}
if(isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update =true;
	$result = $mysqli->query("SELECT * FROM cedula WHERE cedula_number=$id") or die($mysqli->error);
	if(@count($result)==1){
		$row=$result->fetch_array();
		$cedula_number = $row['cedula_number'];
		$date = $row['date'];
		$amount = $row['amount'];
<<<<<<< HEAD
=======
		$place = $row['place'];
>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a
		
	}
}
if(isset($_POST['update'])){
	$id = $_POST['id'];
	$cedula_number = $_POST['cedula_number'];
	$date = $_POST['date'];
	$amount = $_POST['amount'];
<<<<<<< HEAD
	
	$mysqli->query("UPDATE cedula SET cedula_number='$cedula_number',date='$date',amount='$amount' WHERE cedula_number=$id") or die($mysqli->error);
=======
	$place = $_POST['place'];
	
	$mysqli->query("UPDATE cedula SET cedula_number='$cedula_number',date='$date',amount='$amount',place='$place' WHERE cedula_number=$id") or die($mysqli->error);
>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a
	$_SESSION['message'] = "Successfully Update!";
	$_SESSION['msg_type'] = "warning";
	
	header('location:cedula_index.php');
}


?>