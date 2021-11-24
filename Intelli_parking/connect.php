<?php 	
//connecting to MySQL

//creating a connection
$conn= new mysqli("localhost","root","","intelli_parking");

//check if connected
if ($conn->connect_error) {
	die("Not connected" . $conn->connect_error);
}
else {
	//echo "Connected Successfully";
}

?>