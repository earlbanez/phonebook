<?php include('staff.php');?>


<!DOCTYPE html>
<html>
<head>
	<title>ClearanceCityWide</title>
<<<<<<< HEAD
	<link rel = "stylesheet" href = "bootstrap/css/bootstrap.min.css">
	<link rel = "stylesheet" href = "font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
=======
>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a

</head>
<body>

<<<<<<< HEAD
 <nav class="navbar navbar-expand-lg  bg-light" style="margin-top:10px">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">

<h2><a style="margin:center; font-family:Bodoni MT">Oroquieta City, Misamis Occidental Philippines</a></h2>
			<h4><a style="margin:center; font-family:Bodoni MT">Barangay Clearance City Wide</a></h4>
=======
 
>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a

<div id="main">
			
<br>
	<center><b><h2><p style="margin-top:40px; margin-left:680px; font-family:Copperplate Gothic Bold">Add New</p></b></h2></center>

	<div class="container" style="margin-left:990px">
	<form action="staff.php" method="POST">
	<input type="hidden" name="id" value="id">
		<div class="form-group">
			<br><label>Staff ID</label></br>
<<<<<<< HEAD
			<input type="text" name="id" placeholder="Staff ID" class="form-control" value="<?php echo $id;?>" required>
=======
			<input type="number_format" name="staff_id" placeholder="Staff ID" class="form-control" value="<?php echo $staff_id;?>" required>
>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a
		</div>
		<div class="form-group">
			<br><label>First Name</label></br>
			<input type="text" name="first_name" placeholder="First Name" class="form-control" value="<?php echo $first_name;?>" required>
		</div>
		<div class="form-group">
			<br><label>Middle Name</label></br>
			<input type="text" name="middle_name" placeholder="Middle Name" class="form-control" value="<?php echo $middle_name;?>" required>
		</div>
		<div class="form-group">
			<br><label>Last Name</label></br>
			<input type="text" name="last_name" placeholder="Last Name" class="form-control" value="<?php echo $last_name;?>" required>
		</div>
		<div class="form-group">
		<?php 
			if($update==true):
		?>
		<?php else: ?>
<<<<<<< HEAD
			<br><button type="button" class="btn" onclick="location.href='staff_index.php'" "a style=font-family:Bodoni MT">Back</button>
			<button type="submit" class="btn" name="save" "a style=font-family:Bodoni MT">Save</button>
=======
			<br><button type="button" onclick="location.href='staff_index.php'">CANCEL</button>
			<button type="submit" class="btn" name="save">SAVE</button>
>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a
		<?php endif;?>
		</div>
	</form>
	</div>

</body>
</html>