<?php
<<<<<<< HEAD
		
=======

>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a
       include('server.php');        
?> 

<html>
<head>
<title>Login</title>
	<link rel = "stylesheet" href = "font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
<style>
body{
	margin: 0;
	padding: 0;
	font-family: Bodoni MT;
	background: #34495e;
}
.box{
	padding: 40px;
	background: #34495e;
	text-align: center;

}
.box input[type = "text"],.box input[type = "password"]{
	border: 0;
	background: none;
	display: block;
	margin: 20px auto;
	text-align: center;
	border: 2px solid #3498db;
	padding: 14px 10px;
	width: 200px;
	outline: none;
	color: white;
	border-radius: 24px;
	transition: 0.25s;
}
.box input[type = "text"]:focus,.box input[type = "password"]:focus{
	width: 280px;
	border-color: #2ecc71;
}
.box input[type = "submit"]{
	border: 0;
	background: none;
	display: block;
	margin: 20px auto;
	text-align: center;
	border: 2px solid #2ecc71;
	padding: 14px 40px;
	outline: none;
	color: white;
	border-radius: 24px;
	transition: 0.25s;
	cursor: pointer;
}
.box input[type = "submit"]:hover{
	background: #2ecc71;
}
.footer {
   font-family:Bodoni MT;
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #D7DBDD;
   color: black;
   text-align: center;
}
</style>
</head>
<body>
<<<<<<< HEAD

<div class="footer">
  <p>&copyAll Right Reserved 2019
	     <br>Republic of the Phlippines
		 <br>Oroquieta City, Misamis Occidental
  	 </p>
</div>

<?php include ('errors.php'); ?>

	   <form class="box" action="server.php" method="post">
		<h1>STAFF</h1>
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password2" placeholder="Password"  required>
            <input name="login_user"  class="btn btn-block btn-info" type="submit" value="Login"/>
            <a href="start.php" style="font-size:40px">BACK</a>
        </form>
        
=======
    <div class="loginbox">
    <img src="avas.png" class="avas">
        <h1>Login Here</h1>
        <form action="index.php" method="post">
            <input type="text" placeholder="Username" required>
            <input type="password" placeholder="Password"required>
            <input name="create"  class="btn btn-block btn-info" type="submit" id="create_btn" value="Login"/><br></a>
            <u><center><a href="create_account.php">Create an Account</a></center></u>
        </form>
        
        
        
    </div>
    
>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a
</body>
</html>