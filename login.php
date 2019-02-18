<?php

       include('server.php');        
?> 

<html>
<head>
<title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
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
    
</body>
</html>