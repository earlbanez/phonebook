<?php include('person.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Laboratory Exam</title>

</head>
<body>

 

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
               <option value = "Single">Single</option>
               <option value = "Married">Married</option>
               <option value = "Widowed">Widowed</option>
               <option value = "Complicated">Complicated</option>
             </select>
          </p>
		  
		<div class="form-group">
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
		<?php 
			if($update==true):
		?>
		<?php else: ?>
			<br><button type="button" onclick="location.href='index.php'">HOME</button>
			<button type="submit" class="btn" name="save">SAVE</button>
		<?php endif;?>
		</div>
	</form>
	</div>

</body>
</html>