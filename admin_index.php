<?php include('admin.php');?>

<!DOCTYPE html>
<html>
<head>
	<title>ClearanceCityWide</title>
	
</head>
<body>

   
		 

<div id="main">
			
	<?php require_once 'admin.php';?>
	
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
		
		$result = $mysqli->query("SELECT * FROM admin") or die($mysqli->error);

		
		?>
		<h1>List of Client</h1>
		<div class="row justify-content-center">
			<table class="table">
			
				  <tr>
				<th scope="col">Clearance ID</th> 
				<th scope="col"> |OR Number</th> 
				<th scope="col"> |Person Number</th> 
				<th scope="col"> |Name</th>
				<th scope="col"> |Address</th>
				<th scope="col"> |Purpose</th>
				<th scope="col"> |Date</th>
				<th scope="col"> |Amount</th>
				<th scope="col"> |Cedula ID</th>
				<th scope="col"> |Staff ID</th>
				<th scope="col"> |Captain ID</th>
				
				</tr>
				<?php
					while($row=$result->fetch_assoc()):?>

						<tr>
							<td><?php echo $row['clearance_id']?></td>	
							<td><?php echo $row['or_number']?></td>
							<td><?php echo $row['person_number']?></td>
							<td><?php echo $row['first_name']?> . <?php echo $row['middle_initial']?> . <?php echo $row['last_name']?></td>
							<td><?php echo $row['barangay_id']?></td>
							<td><?php echo $row['purpose']?></td>
							<td><?php echo $row['date']?></td>
							<td><?php echo $row['amount']?></td>
							<td><?php echo $row['cedula_id']?></td>
							<td><?php echo $row['staff_id']?></td>
							<td><?php echo $row['captain_id']?></td>
							

							
							<td>
								
								<a href="edit_admin.php?edit=<?php echo $row['clearance_id'];?>"
									class="btn btn-danger">Edit</a>
								<a href="admina.php?delete=<?php echo $row['clearance_id'];?>" onclick="return confirm('Are you sure do you want to delete?');">|Delete</a>
									
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
	<a style="margin-left:1150px; font-family:Copperplate Gothic Bold" href="add_client.php">Add Client</button></a>
	<a style="font-family:Copperplate Gothic Bold" href="login.php"> |Logout</button></a>
	
</div>

</body>
</html>