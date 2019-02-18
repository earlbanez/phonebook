<?php include('cedula.php');?>


<!DOCTYPE html>
<html>
<head>
	<title>Laboratory Exam</title>

</head>
<body>

 

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
			<br><label>Date</label></br>
			<input type="date" name="date" placeholder="Date" class="form-control" value="<?php echo $date;?>" required>
		</div>
		<div class="form-group">
			<br><label>Amount</label></br>
			<input type="text" name="amount" placeholder="Middle Name" class="form-control" value="<?php echo $amount;?>" required>
		</div>
		<div class="form-group">
			<br><label>Place</label></br>
			<input type="text" name="place" placeholder="Place" class="form-control" value="<?php echo $place;?>" required>
		</div>
		<div class="form-group">
		<?php 
			if($update==true):
		?>
		<?php else: ?>
			<br><button type="button" onclick="location.href='cedula_index.php'">CANCEL</button>
			<button type="submit" class="btn" name="save">SAVE</button>
		<?php endif;?>
		</div>
	</form>
	</div>

</body>
</html>