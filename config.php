<?php 
 session_start();
$hello = "hello World";
$host = "localhost";
$dbusername = "root";
$dbpassword = "password";
$dbname = "ponbok";

//Create connection
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
	die('Connect Error('.mysqli_connect_erno().')'
	 . mysqli_connect_error());
}

?>