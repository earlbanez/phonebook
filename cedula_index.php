<<<<<<< HEAD
<?php 
include('cedula.php');

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
</head>
<body>
	<nav class="navbar navbar-expand-lg  bg-light">
		    <ul class="navbar-nav mr-auto">
=======
	<title>Laboratory Exam</title>
	
</head>
<body>

>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a
   
		 

<div id="main">
			
	<?php require_once 'cedula.php';?>
	
	<?php
	
	if(isset($_SESSION['message'])):?>
	
	<div class="alert alert-<?=$_SESSION['msg_type']?>">
	
	<?php 
		echo $_SESSION['message'];
		unset($_SESSION['message']);
	?>
	</div>
	<?php endif ?>
	<div class="container">
	<?php
		
<<<<<<< HEAD
			$result = $mysqli->query("SELECT cedula.cedula_number, cedula.date,cedula.amount, staff.staff_id, staff.first_name, staff.middle_name, staff.last_name as staff, barangay.barangay_id, barangay.barangay_name as barangay
FROM cedula, barangay, staff
WHERE cedula.staff_id = staff.staff_id AND staff.barangay_id = barangay.barangay_id AND cedula.staff_id =".$_SESSION['staff_id']) or die($mysqli->error);

		
		?>
			<h2><a style="margin:center; font-family:Bodoni MT">Oroquieta City, Misamis Occidental Philippines</a></h2>
			<h4><a style="margin:center; font-family:Bodoni MT">Barangay Clearance City Wide</a></h4>
			
							  <li class="nav-item active">
		        <a class="nav-link fa fa-home" href="home.php" style="font-size:20px"> HOME<span class="sr-only">(current)</span></a>
		      </li>
			
		</nav>
		
		<table class="table">
			
			<h1><a style="margin:center; font-family:Bodoni MT">List of Cedula</a></h1>
			
				 <tr> 
				<th scope="col"><a style="margin:center; font-family:Bodoni MT">Cedula Number</th></a>
				<th scope="col"><a style="margin:center; font-family:Bodoni MT"> Date</th></a>
		        <th scope="col"><a style="margin:center; font-family:Bodoni MT"> Amount</th></a>
		        <th scope="col"><a style="margin:center; font-family:Bodoni MT">Staff</th></a>
				<th scope="col"><a style="margin:center; font-family:Bodoni MT">Barangay</th></a>
		        <th scope="col"><a style="margin:center; font-family:Bodoni MT"> Action</th></a>
=======
		$result = $mysqli->query("SELECT * FROM cedula") or die($mysqli->error);

		
		?>
		<h1>List of Captain</h1>
		<div class="row justify-content-center">
			<table class="table">
			
				  <tr>
				<th scope="col">Cedula Number</th> 
				<th scope="col"> |Date</th>
		        <th scope="col"> |Amount</th>
				<th scope="col"> |Place</th>
>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a
				</tr>
				<?php
					while($row=$result->fetch_assoc()):?>

						<tr>
<<<<<<< HEAD
							<td><a style="margin:center; font-family:Bodoni MT"><?php echo $row['cedula_number']?></td></a>
							<td><a style="margin:center; font-family:Bodoni MT"><?php echo $row['date']?></td></a>
							<td><a style="margin:center; font-family:Bodoni MT"><?php echo $row['amount']?></td></a>
							<td><a style="margin:center; font-family:Bodoni MT">
								<?php echo $row['first_name']?> <?php echo $row['middle_name']?> <?php echo $row['staff']?></td>
								<td><a style="margin:center; font-family:Bodoni MT"><?php echo $row['barangay']?></td>
							<td>
								
								<a href="edit_cedula.php?edit=<?php echo $row['cedula_number'];?>"
									 class="btn btn-secondary" "a style=font-family:Bodoni MT">Edit</a>
								<a href="cedula.php?delete=<?php echo $row['cedula_number'];?>" onclick="return confirm('Are you sure do you want to delete?'); "
									class="btn btn-danger" "a style=font-family:Bodoni MT">Delete</a>
=======
							<td><?php echo $row['cedula_number']?></td>
							<td><?php echo $row['date']?></td>
							<td><?php echo $row['amount']?></td>
							<td><?php echo $row['place']?></td>

							<td>
								
								<a href="edit_cedula.php?edit=<?php echo $row['cedula_number'];?>"
									class="btn btn-danger">Edit</a>
								<a href="cedula.php?delete=<?php echo $row['cedula_number'];?>" onclick="return confirm('Are you sure do you want to delete?');">|Delete</a>
>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a
									
							</td>
						</tr>
						<?php endwhile;?>
			</table>
		</div>
		<?php
		function pre_r($array){
			echo'<pre>';
			print_r($array);
			echo'</pre>';
		}
	
	?>
<<<<<<< HEAD
=======
	<a style="margin-left:750px; font-family:Copperplate Gothic Bold" href="index.php">Home</button></a>
	<a style="font-family:Copperplate Gothic Bold" href="add_cedula.php"> |Add new Cedula</button></a>
	
</div>
>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a

</body>
</html>