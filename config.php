<?php 
<<<<<<< HEAD
 session_start();
$hello = "hello World";
$host = "localhost";
$dbusername = "root";
$dbpassword = "password";
$dbname = "ponbok";
=======
$hello = "hello World";
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "phonebook";
>>>>>>> b49208c9807657788e786f2b71f38ceb54465597

//Create connection
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
	die('Connect Error('.mysqli_connect_erno().')'
	 . mysqli_connect_error());
}

?>