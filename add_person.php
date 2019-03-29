<?php include('person.php');
<<<<<<< HEAD
$staff = $_SESSION['staff_id'];

=======
>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a
?>
<!DOCTYPE html>
<html>
<head>
<<<<<<< HEAD
	<title>ClearanceCityWide</title>
	<link rel = "stylesheet" href = "bootstrap/css/bootstrap.min.css">
	<link rel = "stylesheet" href = "font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
	
=======
	<title>Laboratory Exam</title>
>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a

</head>
<body>

 

<<<<<<< HEAD
 
 	<nav class="navbar navbar-expand-lg  bg-light" style="margin-top:10px">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
			
			
			
			<h2><a style="margin:center; font-family:Bodoni MT">Oroquieta City, Misamis Occidental Philippines</a></h2>
			<h4><a style="margin:center; font-family:Bodoni MT">Barangay Clearance City Wide</a></h4>
				
	
	
	
	<h1><a style="margin:center; font-family:Bodoni MT">Add a Person</button></a></h1>
	
	<div class="modal-body" style="margin-left:90px">
	<form action="person.php" method="POST">
	<input type="hidden" name="id" value="<?php echo $id; ?>">	
		<div class="form-group">
			First Name
			<input type="text" name="first_name" placeholder="First Name" class="form-control" value="<?php echo $first_name;?>" required>
		</div>
		<div class="form-group">
			Last Name
			<input type="text" name="last_name" placeholder="Last Name" class="form-control" value="<?php echo $last_name;?>" required>
		</div>
		<div class="form-group">
			Middle Initial
			<input type="text" name="middle_initial" placeholder="Middle Initial" class="form-control" value="<?php echo $middle_initial;?>" required>
		</div>
		  <p>
             <select name="status">
               <option value = "Single">Status</option>
=======
<div id="main">
			
<br>
	<center><b><h2><p style="margin-top:40px; margin-left:680px; font-family:Copperplate Gothic Bold">Add a Person</p></b></h2></center>

	<div class="container" style="margin-left:990px">
	<form action="person.php" method="POST">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
		<div class="form-group">
			<br><label>Person ID</label></br>
			<input type="text" name="person_number" placeholder="Person ID" class="form-control" value="<?php echo $person_number;?>" required>
		</div>		
		<div class="form-group">
			<br><label>First Name</label></br>
			<input type="text" name="first_name" placeholder="First Name" class="form-control" value="<?php echo $first_name;?>" required>
		</div>
		<div class="form-group">
			<br><label>Last Name</label></br>
			<input type="text" name="last_name" placeholder="Last Name" class="form-control" value="<?php echo $last_name;?>" required>
		</div>
		<div class="form-group">
			<br><label>Middle Initial</label></br>
			<input type="text" name="middle_initial" placeholder="Middle Initial" class="form-control" value="<?php echo $middle_initial;?>" required>
		</div>
		  <p>
             <br><label>Status</label>
             <br><select name="status">
>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a
               <option value = "Single">Single</option>
               <option value = "Married">Married</option>
               <option value = "Widowed">Widowed</option>
               <option value = "Complicated">Complicated</option>
             </select>
          </p>
		  
		<div class="form-group">
<<<<<<< HEAD
			Birthday
			<input type="date" name="birthday" placeholder="Birthday" class="form-control" value="<?php echo $birthday;?>" required>
		</div>
		<div class="form-group">
=======
			<br><label>Birthday</label></br>
			<input type="date" name="birthday" placeholder="Birthday" class="form-control" value="<?php echo $birthday;?>" required>
		</div>
		<div class="form-group">
			<br><label>Barangay ID</label></br>
			<input type="text" name="barangay_id" placeholder="Barangay ID" class="form-control" value="<?php echo $barangay_id;?>" required>
		</div>
		<div class="form-group">
			<br><label>Captain ID</label></br>
			<input type="text" name="captain_id" placeholder="Captain ID" class="form-control" value="<?php echo $captain_id;?>" required>
		</div>
		<div class="form-group">
			<br><label>Staff ID</label></br>
			<input type="text" name="staff_id" placeholder="Staff ID" class="form-control" value="<?php echo $staff_id;?>" required>
		</div>
		<div class="form-group">
>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a
		<?php 
			if($update==true):
		?>
		<?php else: ?>
<<<<<<< HEAD
			<br><button type="button" class="btn" onclick="location.href='index.php'" "a style=font-family:Bodoni MT">Back</button>
			<button type="submit" class="btn" name="save" "a style=font-family:Bodoni MT">Save</button>
=======
			<br><button type="button" onclick="location.href='index.php'">HOME</button>
			<button type="submit" class="btn" name="save">SAVE</button>
>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a
		<?php endif;?>
		</div>
	</form>
	</div>
<<<<<<< HEAD
</nav>
=======

>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a
</body>
</html>