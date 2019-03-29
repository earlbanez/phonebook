<<<<<<< HEAD
<?php include('cedula.php');
$staff = $_SESSION['staff_id'];
?>
=======
<?php include('cedula.php');?>
>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a


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


	<h1><a style="margin:center; font-family:Bodoni MT">Add New</button></a></h1>

	<div class="container" style="margin-left:90px">
	<form action="cedula.php" method="POST">
	<input type="hidden" name="id" value="">
		<div class="form-group">
=======
 

<div id="main">
			
<br>
	<center><b><h2><p style="margin-top:40px; margin-left:680px; font-family:Copperplate Gothic Bold">Add New</p></b></h2></center>

	<div class="container" style="margin-left:990px">
	<form action="cedula.php" method="POST">
	<input type="hidden" name="id" value="">
		<div class="form-group">
			<br><label>Cedula Number</label></br>
			<input type="text" name="cedula_number" placeholder="Cedula Number" class="form-control" value="<?php echo $cedula_number;?>" required>
		</div>
		<div class="form-group">
>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a
			<br><label>Date</label></br>
			<input type="date" name="date" placeholder="Date" class="form-control" value="<?php echo $date;?>" required>
		</div>
		<div class="form-group">
			<br><label>Amount</label></br>
<<<<<<< HEAD
			<input type="text" name="amount" placeholder="Amount" class="form-control" value="<?php echo $amount;?>" required>
		</div>

=======
			<input type="text" name="amount" placeholder="Middle Name" class="form-control" value="<?php echo $amount;?>" required>
		</div>
		<div class="form-group">
			<br><label>Place</label></br>
			<input type="text" name="place" placeholder="Place" class="form-control" value="<?php echo $place;?>" required>
		</div>
>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a
		<div class="form-group">
		<?php 
			if($update==true):
		?>
		<?php else: ?>
<<<<<<< HEAD
			<br><button type="button" class="btn" onclick="location.href='cedula_index.php'" "a style=font-family:Bodoni MT">Back</button>
			<button type="submit" class="btn" name="save" "a style=font-family:Bodoni MT">Save</button>
=======
			<br><button type="button" onclick="location.href='cedula_index.php'">CANCEL</button>
			<button type="submit" class="btn" name="save">SAVE</button>
>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a
		<?php endif;?>
		</div>
	</form>
	</div>

</body>
</html>