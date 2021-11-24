<?php
session_start();
// $conn= new mysqli("localhost","root","","intelli_parking");
include_once("connect.php");
//check if connection
if ($conn->connect_error) {
	die("Not connected" . $conn->connect_error);
}
else {
	//echo "Connected Successfully";
}

$Username=$_POST["Username"];
$Password=$_POST["Password"];
if(isset($_POST["login"])) {
    if (empty($_POST["Username"])|| empty($_POST["Password"])) {
       header("location:login.php");
       exit();
    }
    else{
        $sql="select * from clients where Username='$Username' && Password = '$Password'";
        $result=$conn->query($sql);
    }
        if ($result->fetch_assoc()){
            //$_SESSION['User']=$_POST['Email'];
            header("location:parking\home.html");
        }
        else{
            header("location:login.php");
        }
}


?>