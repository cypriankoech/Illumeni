<?php
session_start();

include_once("connect.php");
if ($conn->connect_error) {
	die("Not connected" . $conn->connect_error);
}
else {
	//echo "Connected Successfully";
}

$nPassword=$_POST["nPassword"];
$Username= $_POST["Username"];
if(isset($_POST["Reset_Password"])) {
    if (empty($_POST["Username"])|| empty($_POST["nPassword"])) {
       header("location:changepass.php");
       exit();
    }
    else{
 
        $sql1="UPDATE clients SET Password='$nPassword' WHERE Username='$Username'";
       
    }
        if ( $result=$conn->query($sql1)){
            //$_SESSION['User']=$_POST['Email'];
            header("location:registration.php");
        }
        else{
            header("location:changepass.php");
        }
}

?>