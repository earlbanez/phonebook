<html>
<<<<<<< HEAD
<?php include('config.php');
	

?>

<!DOCTYPE html>
=======
>>>>>>> b49208c9807657788e786f2b71f38ceb54465597
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
<<<<<<< HEAD

			 
<!-- User Profile and Logout Button -->
		        <a class="nav-link fa fa-list" style="font-size:20px"> Contact List<span class="sr-only">(current)</span></a>
		      </li>
			  <li class="nav-item active">
		        <a class="nav-link fa fa-user-plus" href="add_contact.php" style="font-size:20px"> Add Contacts<span class="sr-only">(current)</span></a>
		      </li>
			 
=======
		        <a class="nav-link fa fa-list" href="index.html" style="font-size:20px"> Contact List<span class="sr-only">(current)</span></a>
		      </li>
			  <li class="nav-item active">
		        <a class="nav-link fa fa-user-plus" href="add_contact.html" style="font-size:20px"> Add Contacts<span class="sr-only">(current)</span></a>
		      </li>
			 
<!-- User Profile and Logout Button -->
>>>>>>> b49208c9807657788e786f2b71f38ceb54465597
			<div class="btn-group" style="margin-left:680px">
				<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size:18px; font-family:Copperplate Gothic Bold">
					Logout
				</button>
				<div class="dropdown-menu">
<<<<<<< HEAD
					<a class="dropdown-item fa fa-power-off" href="login.php">Thank You and Come Again</a>
=======
					<a class="dropdown-item fa fa-power-off" href="login.html">Thank You and Come Again</a>
>>>>>>> b49208c9807657788e786f2b71f38ceb54465597
				</div>
			</div>
         
		</div>
	</nav>
	
<!-- Heading -->		
	<center><b><h2><p style="margin-top:40px; font-family:Copperplate Gothic Bold">Contact List</p></b></h2></center>

<<<<<<< HEAD
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
=======
<!-- Search Box -->
			<form class="form-inline my-2 my-lg-0" style="margin-left:800px">
				<input class="form-control mr-sm-2" type="search" placeholder="Search Name" aria-label="Search">
				<button class="btn btn-outline-info my-2 my-sm-0 fa fa-search" type="submit" style="margin-left:-7px; height:38px"></button>
			</form>

<!-- Table List -->
		<div class="container">
			<table class="table table-striped" style="margin-top:20px">
			<thead>
				<tr>
				<th scope="col">#</th>
>>>>>>> b49208c9807657788e786f2b71f38ceb54465597
				<th scope="col">Name</th>
				<th scope="col">Mobile Number</th>
				<th scope="col">Options</th>
				</tr>
			</thead>
<<<<<<< HEAD

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
=======
			<tbody>
				<tr>
				<th scope="row">1</th>
				<td>Mark Marks</td>
				<td>09072471811</td>
				<td><a class="fa fa-edit" href="#"> Edit</a> | <a class="fa fa-trash" href ="#" data-toggle="modal" data-target=".bd-example-modal-sm"> Delete</a></td>
				</tr>
				<tr>
				<th scope="row">2</th>
				<td>Jacob Jacobs</td>
				<td>09129808585</td>
				<td><a class="fa fa-edit" href="#"> Edit</a> | <a class="fa fa-trash" href ="#" data-toggle="modal" data-target=".bd-example-modal-sm"> Delete</a></td>
				</tr>
				<tr>
				<th scope="row">3</th>
				<td>Larry Larrys</td>
				<td>09358651548</td>
				<td><a class="fa fa-edit" href="#"> Edit</a> | <a class="fa fa-trash" href ="#" data-toggle="modal" data-target=".bd-example-modal-sm"> Delete</a></td>
				</tr>
			</tbody>
			</table>
		</div>	
</div>
		<!-- Small modal -->
<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
			<div class="modal-body fa fa-info-circle" style="font-size:20px; color:darkgreen">
			Confirm deleting this contact?
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-info fa fa-close" style="font-size:15px" data-dismiss="modal"> Cancel</button>
				<button type="button" class="btn btn-info fa fa-check" style="font-size:15px"> Confirm</button>
			</div>
			</div>
    </div>
  </div>
</div>
<!-- Dropdown Menus Activation -->
>>>>>>> b49208c9807657788e786f2b71f38ceb54465597
<script src="bootstrap/js/jquery-slim.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>