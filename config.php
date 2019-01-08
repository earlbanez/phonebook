<?php 
$hello = "hello World";
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "phonebook";

//Create connection
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
	die('Connect Error('.mysqli_connect_erno().')'
	 . mysqli_connect_error());
}

?>