<?php

<<<<<<< HEAD
<<<<<<< HEAD
=======
 
>>>>>>> fixed error
=======
>>>>>>> b49208c9807657788e786f2b71f38ceb54465597
 $username = filter_input(INPUT_POST, 'username');
 $password = filter_input(INPUT_POST, 'password');
 if (!empty($username)){
if (!empty($password)){
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b49208c9807657788e786f2b71f38ceb54465597

else{
	$sql = "INSERT INTO account(username, password);"
	values('$username','$password');"
<<<<<<< HEAD
=======
}
else{
	$sql = "INSERT INTO account(username, password)
	values('$username','$password')";
>>>>>>> fixed error
=======
>>>>>>> b49208c9807657788e786f2b71f38ceb54465597
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
<<<<<<< HEAD
=======
>>>>>>> b49208c9807657788e786f2b71f38ceb54465597
else{
echo "Password should not be empty";
die();
}
 }
else{
<<<<<<< HEAD
=======
if(login){
echo "Password should not be empty";
die();
}
else(){
>>>>>>> fixed error
=======
>>>>>>> b49208c9807657788e786f2b71f38ceb54465597
echo "Username should not be empty";
die();
}
?>
