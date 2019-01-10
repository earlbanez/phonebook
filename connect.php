<?php

<<<<<<< HEAD
=======
 
>>>>>>> fixed error
 $username = filter_input(INPUT_POST, 'username');
 $password = filter_input(INPUT_POST, 'password');
 if (!empty($username)){
if (!empty($password)){
<<<<<<< HEAD

else{
	$sql = "INSERT INTO account(username, password);"
	values('$username','$password');"
=======
}
else{
	$sql = "INSERT INTO account(username, password)
	values('$username','$password')";
>>>>>>> fixed error
	if ($conn->query($sql)){
		echo "New record is inserted successfully";
		}
	else{
	echo "Error: ".$sql ."<br>". $conn->error;
	}
	$conn->close();
}
}
<<<<<<< HEAD
else{
echo "Password should not be empty";
die();
}
 }
else{
=======
if(login){
echo "Password should not be empty";
die();
}
else(){
>>>>>>> fixed error
echo "Username should not be empty";
die();
}
?>
