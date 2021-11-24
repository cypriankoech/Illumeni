<?php
include_once("connect.php");

// $conn= new mysqli("localhost","root",""," ");

//check if connection
if ($conn->connect_error) {
	die("Not connected" . $conn->connect_error);
}
else {
	//echo "Connected Successfully";
}


if(isset($_POST['register'])){
	//Insert to Table
	$Username=$_POST["Username"];
	$Number_Plate=$_POST["Number_Plate"];
	$Password=$_POST["password"];
	$Confirm_Password=$_POST["confirm_pass"];

	$sql_insert= "INSERT INTO clients(Username,Number_Plate,Password,Confirm_Password) VALUES ('$Username','$Number_Plate','$Password','$Confirm_Password')";

	if($conn->query($sql_insert)===TRUE){
		echo "<br>Data Inserted";
		header("location:login.php");
	}
	else{
		echo "<br>Error in insertion". $conn->error;
	}
}



?>