<?php include('staff.php');?>

<!DOCTYPE html>
<html>
<head>
	<title>ClearanceCityWide</title>
	
</head>
<body>

   
		 

<div id="main">
			
	<?php require_once 'staff.php';?>
	
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
		
		$result = $mysqli->query("SELECT * FROM staff") or die($mysqli->error);

		
		?>
		<h1>List of Staff</h1>
		<div class="row justify-content-center">
			<table class="table">
			
				  <tr>
				<th scope="col">ID Number</th> 
				<th scope="col"> |First Name</th>
		        <th scope="col"> |Middle Name</th>
				<th scope="col"> |Last Name</th>
				</tr>
				<?php
					while($row=$result->fetch_assoc()):?>

						<tr>
							<td><?php echo $row['staff_id']?></td>
							<td><?php echo $row['first_name']?></td>
							<td><?php echo $row['middle_name']?></td>
							<td><?php echo $row['last_name']?></td>

							<td>
								
								<a href="edit_staff.php?edit=<?php echo $row['staff_id'];?>"
									class="btn btn-danger">Edit</a>
								<a href="staff.php?delete=<?php echo $row['staff_id'];?>" onclick="return confirm('Are you sure do you want to delete?');">|Delete</a>
									
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
	<a style="margin-left:750px; font-family:Copperplate Gothic Bold" href="index.php">Home</button></a>
	<a style="font-family:Copperplate Gothic Bold" href="add_staff.php"> |Add Staff</button></a>
	
</div>

</body>
</html>