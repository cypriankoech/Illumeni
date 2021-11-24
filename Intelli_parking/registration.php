<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Register</title>
	<link rel="stylesheet" href="registration.css">

	<style>
	.error{
		color: red;
		font-style:italic;
	}
</style>
</head>
<body>

<nav >
	<img src="Logo.svg" alt="" class="nav">
</nav>
<center>
<div class="form">
	
      <table style="text-align: center;">
            
                  
     <form id="registration" method="post" action="ProcessRegistration.php">
        <!-- <legend>Registration form</legend> -->
		        <br><br>
		     <h2 class="title">Register</h2> <br>
        	
				<input type="text"  placeholder="Number Plate" name="Number_Plate" class= "input">  <br><br>
			
				<input type="text"  placeholder="Username" name="Username" class= "input"> <br><br>
			
				<input type="Password" placeholder="Password" name="password" class= "input"> <br><br>
		
				<input type="Password" placeholder="Confirm Password" name="confirm_pass" class= "input"> <br><br>
					
						

       <button type="submit" id="btn" name="register">Register</button>            
   <br><br>
   <a class="link" href="login.php">Already have an account</a>
    <br><br>
    <a href="PasswordUpdate.php">Forgot password?</a>
     <br><br>
     </form>
                       
</div>
</center>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
<script src="register.js"></script>
</body>
</html>