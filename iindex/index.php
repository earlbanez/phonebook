<html>
<?php

       include('server.php');        
?>

<!DOCTYPE html>
<head>
<title>ClearanceCityWide</title>
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

<li class="nav-item active">
<div class="dropdown">		  
<button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Person <a class="fa fa-user"></a>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item">ID</a>
    <a class="dropdown-item">First Name</a>
    <a class="dropdown-item">Last Name</a>
  </div>
</div></li>

<li class="nav-item active">
<div class="dropdown">		  
<button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Place <a class="fa fa-map-marker"></a>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Purok</a>
    <a class="dropdown-item" href="#">First Name</a>
    <a class="dropdown-item" href="#">Last Name</a>
  </div>
</div></li>

<li class="nav-item active">
<div class="dropdown">		  
<button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Clearance <a class="fa fa-list"></a>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Purok</a>
    <a class="dropdown-item" href="#">First Name</a>
    <a class="dropdown-item" href="#">Last Name</a>
  </div>
</div></li>

<li class="nav-item active">
<div class="dropdown">		  
<button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Cedula <a class="fa fa-list"></a>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Purok</a>
    <a class="dropdown-item" href="#">First Name</a>
    <a class="dropdown-item" href="#">Last Name</a>
  </div>
</div></li>

<li class="nav-item active">
<div class="dropdown">		  
<button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Staff <a class="fa fa-user"></a>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Purok</a>
    <a class="dropdown-item" href="#">First Name</a>
    <a class="dropdown-item" href="#">Last Name</a>
  </div>
</div></li>

<li class="nav-item active">
<div class="dropdown">		  
<button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Captain <a class="fa fa-user"></a>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Purok</a>
    <a class="dropdown-item" href="#">First Name</a>
    <a class="dropdown-item" href="#">Last Name</a>
  </div>
</div></li>

<li class="nav-item active"  style="margin-left:70px">
<div class="dropdown">		  
<button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Logout <a class="fa fa-power-off"></a>
  </button>

				<div class="dropdown-menu">
					<a class="dropdown-item fa fa-power-off" href="login.php">Thank You and Come Again</a>
				</div>
			</div></li>
         
	</nav>
	    <div class="row">
		<div class="col-6">
		<img src="download.png">
	</div>
	<div class="col-6">
	<img src="oroquieta-city.png" style="margin-left: 300px;">
	</div>
	</div>
	
<div class="btn-group" style="margin-top:300px"></div>
<a class="btn btn-info" style="margin-left:480px; font-family:Copperplate Gothic Bold" href="add_client.php">Add New Client</button>


<script src="bootstrap/js/jquery-slim.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>