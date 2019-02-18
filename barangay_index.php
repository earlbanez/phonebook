<?php include('barangay.php');?>

<!DOCTYPE html>
<html>
<head>
	<title>ClearanceCityWide</title>
	
</head>
<body>

   
		 

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
		
		$result = $mysqli->query("SELECT * FROM barangay") or die($mysqli->error);

		
		?>
		<h1>List of Barangay(s)</h1>
		<div class="row justify-content-center">
			<table class="table">
			
				  <tr>
				<th scope="col">Barangay ID</th> 
				<th scope="col"> |Barangay Name</th>
				</tr>
				<?php
					while($row=$result->fetch_assoc()):?>

						<tr>
							<td><?php echo $row['barangay_id']?></td>
							<td><?php echo $row['barangay_name']?></td>

							<td>
								
								<a href="edit_barangay.php?edit=<?php echo $row['barangay_id'];?>"
									class="btn btn-danger">Edit</a>
								<a href="barangay.php?delete=<?php echo $row['barangay_id'];?>" onclick="return confirm('Are you sure do you want to delete?');">|Delete</a>
									
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
	<a style="font-family:Copperplate Gothic Bold" href="add_barangay.php"> |Add Barangay</button></a>
	
</div>

</body>
</html>