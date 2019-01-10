<html>
<?php include('config.php');
	

?>

<!DOCTYPE html>
<head>
<title>Contact</title>
	<link rel = "stylesheet" href = "bootstrap/css/bootstrap.min.css">
	<link rel = "stylesheet" href = "font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container">
   <!-- Navigations -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-info" style="margin-top:20px">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
		<div class="collapse navbar-collapse" id="navbarText">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">

			 
<!-- User Profile and Logout Button -->
		        <a class="nav-link fa fa-list" style="font-size:20px"> Contact List<span class="sr-only">(current)</span></a>
		      </li>
			  <li class="nav-item active">
		        <a class="nav-link fa fa-user-plus" href="add_contact.php" style="font-size:20px"> Add Contacts<span class="sr-only">(current)</span></a>
		      </li>
			 
			<div class="btn-group" style="margin-left:680px">
				<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size:18px; font-family:Copperplate Gothic Bold">
					Logout
				</button>
				<div class="dropdown-menu">
					<a class="dropdown-item fa fa-power-off" href="login.php">Thank You and Come Again</a>
				</div>
			</div>
         
		</div>
	</nav>
	
<!-- Heading -->		
	<center><b><h2><p style="margin-top:40px; font-family:Copperplate Gothic Bold">Contact List</p></b></h2></center>

<!-- Table List -->
		<div class="container">
			<table class="table table-striped" style="margin-top:20px">
<?php 	$query = "SELECT * FROM contacts";
	$result = mysqli_query($conn, $query);?>
<form class="needs-validation" action="" method='post'>
		<div class="container">

			<table class="table table-striped" style="margin-top:20px">
			<thead>
				<tr>
				<th scope="col">ID No.</th>
				<th scope="col">Name</th>
				<th scope="col">Mobile Number</th>
				<th scope="col">Options</th>
				</tr>
			</thead>

<!-- Dropdown Menus Activation -->
		<?php 
			if(mysqli_num_rows($result)){
				while($row = mysqli_fetch_assoc($result)){

			?>

			<tr>
				<td><?php echo $row['id'];?></td>
				<td><?php echo $row['First_Name'] ." ".$row['Last_Name'];?></td>
				<td><?php echo $row['Phone_Number'];?></td>
				<td><a class="fa fa-edit" href="edit_contact.php?edit_id=<?php echo  $row['id']; ?>">Edit |</a>
					<a class="fa fa-trash" href="delete.php?delete_id=<?php echo $row['id']; ?>"> Delete</a></td>
			</tr>
		</tbody>
		<?php 				}
			}?>
			</table>
		</div>	

</div>
<script src="bootstrap/js/jquery-slim.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>