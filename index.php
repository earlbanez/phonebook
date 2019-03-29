<<<<<<< HEAD
<?php 

include('person.php');

?>
=======
<?php include('person.php');?>
>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a

<!DOCTYPE html>
<html>
<head>
	<title>ClearanceCityWide</title>
<<<<<<< HEAD
	<link rel = "stylesheet" href = "bootstrap/css/bootstrap.min.css">
	<link rel = "stylesheet" href = "font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel = "stylesheet" href = "bootstrap/js/jquery-slim.min.js">
	<link rel = "stylesheet" href = "bootstrap/js/popper.min.js">
</head>
<body>
	<nav class="navbar navbar-expand-lg  bg-light">
		    <ul class="navbar-nav mr-auto">
		     
	
	

		 

			
	<?php require_once 'person.php';?>
	
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
		
		$result = $mysqli->query("SELECT person.person_number, person.first_name as persons, person.last_name as person, person.middle_initial, person.status, person.birthday, staff.staff_id, staff.first_name, staff.middle_name, staff.last_name as staff, barangay.barangay_id, barangay.barangay_name as barangay
FROM person, barangay, staff
WHERE person.staff_id = staff.staff_id AND staff.barangay_id = barangay.barangay_id AND person.staff_id =".$_SESSION['staff_id']) or die($mysqli->error);

		
		?>
		
			<h2><a style="margin:center; font-family:Bodoni MT">Oroquieta City, Misamis Occidental Philippines</a></h2>
			<h4><a style="margin:center; font-family:Bodoni MT">Barangay Clearance City Wide</a></h4>
							  <li class="nav-item active">
		        <a class="nav-link fa fa-home" href="home.php" style="font-size:20px">HOME<span class="sr-only">(current)</span></a>
		      </li>
		</nav>	

				<table class="table" id="table-data">
			<h1><a style="margin:center; font-family:Bodoni MT">List of Client</a></h1>
				<tr>		
		        <th scope="col"><a style="margin:center; font-family:Bodoni MT">Person ID</th></a>
				<th scope="col"><a style="margin:center; font-family:Bodoni MT">Person Name</th></a>
				<th scope="col"><a style="margin:center; font-family:Bodoni MT">Status</th></a>
				<th scope="col"><a style="margin:center; font-family:Bodoni MT">Birthday</th></a>
				<th scope="col"><a style="margin:center; font-family:Bodoni MT">Staff</th></a>
				<th scope="col"><a style="margin:center; font-family:Bodoni MT">Barangay</th></a>
				<th scope="col"><a style="margin:center; font-family:Bodoni MT">Action</th></a>
				</tr>
				<?php
					while($row=$result->fetch_assoc()):?>

						<tr>
							<td><a style="margin:center; font-family:Bodoni MT"><?php echo $row['person_number']?></td>
							<td><a style="margin:center; font-family:Bodoni MT"><?php echo $row['persons']?> <?php echo $row['middle_initial']?> <?php echo $row['person']?></td>
							<td><a style="margin:center; font-family:Bodoni MT"><?php echo $row['status']?></td>
							<td><a style="margin:center; font-family:Bodoni MT"><?php echo $row['birthday']?></td>
							<td><a style="margin:center; font-family:Bodoni MT">
								<?php echo $row['first_name']?> <?php echo $row['middle_name']?> <?php echo $row['staff']?></td>
								<td><a style="margin:center; font-family:Bodoni MT"><?php echo $row['barangay']?></td>
							<td>
								
								<a href="edit.php?edit=<?php echo $row['person_number'];?>"
									 class="btn btn-secondary" "a style=font-family:Bodoni MT">Edit</a>
								<a href="person.php?delete=<?php echo $row['person_number'];?>" onclick="return confirm('Are you sure do you want to delete?'); "
									class="btn btn-danger" "a style=font-family:Bodoni MT">Delete</a>
=======
	
</head>
<body>

   
		 

<div id="main">
			
	<?php require_once 'person.php';?>
	
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
		
		$result = $mysqli->query("SELECT * FROM person") or die($mysqli->error);

		
		?>
		<h1>List of Client</h1>
		<div class="row justify-content-center">
			<table class="table">
			
			
			
					<tr>
				<th scope="col">Person Number</th> 
				<th scope="col"> |First Name</th>
		        <th scope="col"> |Last Name</th>
				<th scope="col"> |Middle Initial</th>
				<th scope="col"> |Status</th>
				<th scope="col"> |Birthday</th>
				<th scope="col"> |Address</th>
				<th scope="col"> |Captain</th>
				<th scope="col"> |Staff</th>
				</tr>
				<?php
					while($row=$result->fetch_assoc()):?>

						<tr>
							<td><?php echo $row['person_number']?></td>
							<td><?php echo $row['first_name']?></td>
							<td><?php echo $row['last_name']?></td>
							<td><?php echo $row['middle_initial']?></td>
							<td><?php echo $row['status']?></td>
							<td><?php echo $row['birthday']?></td>
							<td><?php echo $row['barangay_id']?></td>
							<td><?php echo $row['captain_id']?></td>
							<td><?php echo $row['staff_id']?></td>
							<td>
								
								<a href="edit.php?edit=<?php echo $row['person_number'];?>"
									class="btn btn-danger">Edit</a>
								<a href="person.php?delete=<?php echo $row['person_number'];?>" onclick="return confirm('Are you sure do you want to delete?');">|Delete</a>
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
	<a style="margin-left:790px; font-family:Copperplate Gothic Bold" href="add_person.php">Add Person</button></a>
	<a style="font-family:Copperplate Gothic Bold" href="staff_index.php"> |List of Staff</button></a>
	<a style="font-family:Copperplate Gothic Bold" href="captain_index.php"> |List of Captain</button></a>
	<a style="font-family:Copperplate Gothic Bold" href="cedula_index.php"> |Cedula's Cabinet</button></a>
	<a style="font-family:Copperplate Gothic Bold" href="barangay_index.php"> |Barangay List</button></a>
	<a style="font-family:Copperplate Gothic Bold" href="login.php"> |Logout</button></a>
	
</div>
>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a

</body>
</html>