<?php include('barangay.php');?>


<!DOCTYPE html>
<html>
<head>
	<title>ClearanceCityWide</title>
	<link rel = "stylesheet" href = "bootstrap/css/bootstrap.min.css">
	<link rel = "stylesheet" href = "font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">

</head>
<body>

 <nav class="navbar navbar-expand-lg  bg-light" style="margin-top:10px">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">

<h2><a style="margin:center; font-family:Bodoni MT">Oroquieta City, Misamis Occidental Philippines</a></h2>
			<h4><a style="margin:center; font-family:Bodoni MT">Barangay Clearance City Wide</a></h4>

	<h1><a style="margin:center; font-family:Bodoni MT">Add New</button></a></h1>

	<div class="container" style="margin-left:90px">
	<form action="barangay.php" method="POST">
	<input type="hidden" name="id" value="id">
		<div class="form-group">
			<br><label>Barangay Name</label></br>
			<input type="text" name="barangay_name" placeholder="Barangay Name" class="form-control" value="<?php echo $barangay_name;?>" required>
		</div>
		<div class="form-group">
		<?php 
			if($update==true):
		?>
		<?php else: ?>
			<br><button type="button" class="btn" onclick="location.href='barangay_index.php'" "a style=font-family:Bodoni MT">Back</button>
			<button type="submit" class="btn" name="save" "a style=font-family:Bodoni MT">Save</button>
		<?php endif;?>
		</div>
	</form>
	</div>

</body>
</html>