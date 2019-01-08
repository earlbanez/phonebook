<html>
<head>
<title>add_contact</title>
	<link rel = "stylesheet" href = "bootstrap/css/bootstrap.min.css">
	<link rel = "stylesheet" href = "font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container">

	<nav class="navbar navbar-expand-lg navbar-dark bg-info" style="margin-top:20px">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
		<div class="collapse navbar-collapse" id="navbarText">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link fa fa-list" href="index.html" style="font-size:20px"> Contact List<span class="sr-only">(current)</span></a>
		      </li>
			  <li class="nav-item active">
		        <a class="nav-link fa fa-user-plus" href="add_contact.html" style="font-size:20px"> Add Contacts<span class="sr-only">(current)</span></a>
		      </li>
			 

			<div class="btn-group" style="margin-left:680px">
				<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size:18px; font-family:Copperplate Gothic Bold">
					Logout
				</button>
				<div class="dropdown-menu">
					<a class="dropdown-item fa fa-power-off" href="login.html">Thank You and Come Again</a>
				</div>
			</div>
         
		</div>
	</nav>

		
	<center><b><h2><p style="margin-top:40px; margin-left:680px; font-family:Copperplate Gothic Bold">Add Contacts</p></b></h2></center>
 

	<div class="container" style="margin-left:680px">
	<form>
		<div class="form-column">
			<div class="form-group col-md-4">
				<label for="inputEmail4">First Name</label>
				<input type="text" class="form-control" id="inputName" placeholder="First Name">
			</div>
			<div class="form-group col-md-4">
				<label for="inputEmail4">Last Name</label>
				<input type="text" class="form-control" id="inputName" placeholder="Last Name">
			</div>
			<div class="form-group col-md-4">
				<label for="inputPassword4">Phone Number</label>
				<input type="text" class="form-control" id="inputPhoneNumber" placeholder="Phone Number">
			</div>
		</div>

		<button type="submit" class="btn btn-info" style="margin: "center">Add Contact</button>
	</form>
	</div>
</div>

<script src="bootstrap/js/jquery-slim.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>