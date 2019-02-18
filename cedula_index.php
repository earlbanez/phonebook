<?php include('cedula.php');?>

<!DOCTYPE html>
<html>
<head>
	<title>Laboratory Exam</title>
	
</head>
<body>

   
		 

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
				</tr>
				<?php
					while($row=$result->fetch_assoc()):?>

						<tr>
							<td><?php echo $row['cedula_number']?></td>
							<td><?php echo $row['date']?></td>
							<td><?php echo $row['amount']?></td>
							<td><?php echo $row['place']?></td>

							<td>
								
								<a href="edit_cedula.php?edit=<?php echo $row['cedula_number'];?>"
									class="btn btn-danger">Edit</a>
								<a href="cedula.php?delete=<?php echo $row['cedula_number'];?>" onclick="return confirm('Are you sure do you want to delete?');">|Delete</a>
									
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
	<a style="font-family:Copperplate Gothic Bold" href="add_cedula.php"> |Add new Cedula</button></a>
	
</div>

</body>
</html>