<?php include('person.php');?>

<!DOCTYPE html>
<html>
<head>
	<title>ClearanceCityWide</title>
	
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
	<a style="margin-left:790px; font-family:Copperplate Gothic Bold" href="add_person.php">Add Person</button></a>
	<a style="font-family:Copperplate Gothic Bold" href="staff_index.php"> |List of Staff</button></a>
	<a style="font-family:Copperplate Gothic Bold" href="captain_index.php"> |List of Captain</button></a>
	<a style="font-family:Copperplate Gothic Bold" href="cedula_index.php"> |Cedula's Cabinet</button></a>
	<a style="font-family:Copperplate Gothic Bold" href="barangay_index.php"> |Barangay List</button></a>
	<a style="font-family:Copperplate Gothic Bold" href="login.php"> |Logout</button></a>
	
</div>

</body>
</html>