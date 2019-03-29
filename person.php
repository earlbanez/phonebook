<?php
<<<<<<< HEAD
=======

>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a
session_start();
$host = '';
$db ='';

$mysqli = new mysqli('localhost','root','','ClearanceCityWide') or die(mysqli_error($mysqli));
$person_number ="";
$update = false;
$first_name="";
$last_name="";
$middle_initial="";
$status="";
$birthday="";
<<<<<<< HEAD


if(isset($_POST['save'])){

=======
$barangay_id="";
$captain_id="";
$staff_id="";



if(isset($_POST['save'])){
	$person_number = $_POST['person_number'];
>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$middle_initial = $_POST['middle_initial'];
	$status = $_POST['status'];
	$birthday = $_POST['birthday'];
<<<<<<< HEAD
	$staff_id = $_SESSION['staff_id'];
	
	$result1 = $mysqli->query("SELECT .barangay.barangay_id From staff,barangay where staff_id='$staff_id' AND staff.barangay_id = barangay.barangay_id ") or die($mysqli->error);
	if(@count($result1)==1){
		$row1=$result1->fetch_array();
		$barangay_id = $row1['barangay_id'];
		$mysqli->query("INSERT INTO person (first_name,last_name,middle_initial,status,birthday,staff_id,barangay_id) VALUES ('$first_name','$last_name','$middle_initial','$status','$birthday','$staff_id','$barangay_id')") or
			die($mysqli->error);
		$_SESSION['message'] = "Successfully Added!";
			$_SESSION['msg_type'] = "success";
		header("location:index.php");
	}
=======
	$barangay_id = $_POST['barangay_id'];
	$captain_id = $_POST['captain_id'];
	$staff_id = $_POST['staff_id'];
	
	

	$mysqli->query("INSERT INTO person (person_number,first_name,last_name,middle_initial,status,birthday,barangay_id,captain_id,staff_id) VALUES ('$person_number','$first_name','$last_name','$middle_initial','$status','$birthday','$barangay_id','$captain_id','$staff_id')") or
			die($mysqli->error);
	$_SESSION['message'] = "Successfully Added!";
	$_SESSION['msg_type'] = "success";
	
	
	header("location:index.php");
>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a
}
if(isset($_GET['delete'])){
	$id =$_GET['delete'];
	
	echo "
		<script>
			 var msgs = confirm('Do you want to delete this Record? ');
			 if(msgs == true){
				 ";
				 $mysqli->query("DELETE FROM person WHERE person_number=$id") or die($mysqli->error());
				 $_SESSION['message'] = "Successfully Delete!";
				 $_SESSION['msg_type'] = "danger";
				 header("location:index.php");
	echo "			 
			 }
		</script>
	";
	
}
if(isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update =true;
<<<<<<< HEAD
	$result = $mysqli->query("SELECT * From person where person_number=$id") or die($mysqli->error);
=======
	$result = $mysqli->query("SELECT * FROM person WHERE person_number=$id") or die($mysqli->error);
>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a
	if(@count($result)==1){
		$row=$result->fetch_array();
		$person_number = $row['person_number'];
		$first_name = $row['first_name'];
		$last_name = $row['last_name'];
		$middle_initial = $row['middle_initial'];
		$status = $row['status'];
		$birthday = $row['birthday'];
<<<<<<< HEAD

=======
		$barangay_id = $row['barangay_id'];
		$captain_id = $row['captain_id'];
		$staff_id = $row['staff_id'];
		
>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a
		
	}
}
if(isset($_POST['update_person'])){
	$id = $_POST['id'];
	$person_number = $_POST['person_number'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$middle_initial = $_POST['middle_initial'];
	$status = $_POST['status'];
	$birthday = $_POST['birthday'];
<<<<<<< HEAD


	
	$mysqli->query("UPDATE person SET person_number='$person_number',first_name='$first_name',last_name='$last_name',middle_initial='$middle_initial',status='$status',birthday='$birthday' WHERE person_number=$id") or die($mysqli->error);
=======
	$barangay_id = $_POST['barangay_id'];
	$captain_id = $_POST['captain_id'];
	$staff_id = $_POST['staff_id'];
	
	
	$mysqli->query("UPDATE person SET person_number='$person_number',first_name='$first_name',last_name='$last_name',middle_initial='$middle_initial',status='$status',birthday='$birthday',barangay_id='$barangay_id',captain_id='$captain_id',staff_id='$staff_id' WHERE person_number=$id") or die($mysqli->error);
>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a
	$_SESSION['message'] = "Successfully Update!";
	$_SESSION['msg_type'] = "warning";
	
	header('location:index.php');
}


?>