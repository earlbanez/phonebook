<?php
     include('server.php');        
?>
<html>
<head>
<title>Create Account</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="loginbox">
    <img src="acca.png" class="avas">
        <h1>Sign Up Here</h1>
        <form action="server.php" method="post">
            <input type="text"  name="uname" placeholder="Username" required autofocus>
            <input type="password" name="password" placeholder="Password" required>
			<input type="password" name="cpassword" placeholder="Verify Password" required> 
			<input type="submit" name="submit" value="Create Account" class="button">
            <u><center><a href="login.php">I already have an account.</a></center></u>
        </form>
        
    </div>

</body>
</html>
