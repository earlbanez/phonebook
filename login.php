<?php
        require 'config.php';

        
        $username = $password = '';
        $err = '';
        if(isset($_POST['create'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $query = "select * from user where username = '$username' AND password = ('$password')";
        $result = mysqli_query($con, $query);
        $row = mysqli_fetch_array($result);
        $count = mysqli_num_rows($result);
        echo $count ;
        if($count ==1 ) {
            $_SESSION['username'] = $row['username'];
            $_SESSION['id'] = $row['id'];
            header('location: index.php');
        }else{
            $err = 'Invalid Username/Password';
        
        if($result){
            echo "<script>alert('unknown Username! Please Register!');</script>";
        }
            
        }
    }
    mysqli_close($conn); 
        
        
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
            <input type="text" placeholder="Username" required autofocus>
            <input type="password" placeholder="Password"required>
			<input name="create"  class="btn btn-block btn-info" type="submit" id="create_btn" value="Login"/><br></a>
			<u><center><a href="create_account.php">Create an Account</a></center></u>
        </form>
		
		
        
    </div>
	
</body>
</html>