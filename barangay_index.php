<?php include('barangay.php');?>

<!DOCTYPE html>
<html>
<head>
	<title>ClearanceCityWide</title>
<<<<<<< HEAD
	<link rel = "stylesheet" href = "bootstrap/css/bootstrap.min.css">
	<link rel = "stylesheet" href = "font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">	
</head>
<body>
	<nav class="navbar navbar-expand-lg  bg-light">
		    <ul class="navbar-nav mr-auto">
=======
	
</head>
<body>

>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a
   
		 

<div id="main">
			
	<?php require_once 'barangay.php';?>
	
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
		$result = $mysqli->query("SELECT * from barangay") or die($mysqli->error);

		?>
		
			<h2><a style="margin:center; font-family:Bodoni MT">Oroquieta City, Misamis Occidental Philippines</a></h2>
			<h4><a style="margin:center; font-family:Bodoni MT">Barangay Clearance City Wide</a></h4>
		
				  <li class="nav-item active">
		        <a class="nav-link fa fa-home" href="admin_home.php" style="font-size:20px"> Home<span class="sr-only">(current)</span></a>
		      </li>
		
		</nav>
		
		<table class="table">
			<h1><a style="margin:center; font-family:Bodoni MT">List of Barangay</a></h1>
			
				  <tr>
				<th scope="col"><a style="margin:center; font-family:Bodoni MT">Barangay ID</th></a>
				<th scope="col"><a style="margin:center; font-family:Bodoni MT"> Barangay Name</th></a>
				<th scope="col"><a style="margin:center; font-family:Bodoni MT"> Action</th></a>
=======
		$result = $mysqli->query("SELECT * FROM barangay") or die($mysqli->error);

		
		?>
		<h1>List of Barangay(s)</h1>
		<div class="row justify-content-center">
			<table class="table">
			
				  <tr>
				<th scope="col">Barangay ID</th> 
				<th scope="col"> |Barangay Name</th>
>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a
				</tr>
				<?php
					while($row=$result->fetch_assoc()):?>

						<tr>
<<<<<<< HEAD
							<td><a style="margin:center; font-family:Bodoni MT"><?php echo $row['barangay_id']?></td></a>
							<td><a style="margin:center; font-family:Bodoni MT"><?php echo $row['barangay_name']?></td></a>
=======
							<td><?php echo $row['barangay_id']?></td>
							<td><?php echo $row['barangay_name']?></td>
>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a

							<td>
								
								<a href="edit_barangay.php?edit=<?php echo $row['barangay_id'];?>"
<<<<<<< HEAD
									 class="btn btn-secondary" "a style=font-family:Bodoni MT">Edit</a>
								<a href="barangay.php?delete=<?php echo $row['barangay_id'];?>" onclick="return confirm('Are you sure do you want to delete?'); "
									class="btn btn-danger" "a style=font-family:Bodoni MT">Delete</a>
=======
									class="btn btn-danger">Edit</a>
								<a href="barangay.php?delete=<?php echo $row['barangay_id'];?>" onclick="return confirm('Are you sure do you want to delete?');">|Delete</a>
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
	<a style="font-family:Copperplate Gothic Bold" href="add_barangay.php"> |Add Barangay</button></a>
	
</div>

>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a
</body>
</html>