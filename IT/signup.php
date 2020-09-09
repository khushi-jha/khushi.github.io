<?php

$host = "127.0.0.1:3325";  
$user = "root";  
$pass = "";  
$dbname = "it";
$conn = mysqli_connect($host, $user, $pass, $dbname) or die("unable to connect database"); 

if(isset($_POST["sub"]))
{
	$fname = $_POST["fname"];
	$mail = $_POST["mail"];
	$pno = $_POST["pno"];
	$pass = $_POST["pass"];

	$sql = "INSERT INTO user(name,email,number,password) VALUES('$fname','$mail','$pno','$pass')";

	if($conn->query($sql) === TRUE)
	{
       echo '<script>open("signup.php")</script>';
	}

	else
	{
		echo 'Not Inserted';
	}
mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sign up</title>
	<link rel="stylesheet" type="text/css" href="signinstyle.css">
	<script type="text/javascript" src="validation.js"></script>
</head>
<body>
		<div class="bg">
			<div class="container">
				<img src="1.jpg" class="user">
				<h1>SIGN UP</h1>

		            <form name="f2" action="signup.php" method="POST" onsubmit="return signup()">
		                <div class="tbox">
		        	        <input type="text" placeholder="Firstname" name="fname" value="">
		        	    </div>
		        	    <div class="tbox">
		                  	<input type="email" placeholder="Email" name="mail" value="">  
		        	    </div>
		        	    <div class="tbox">
		                   	<input type="text" placeholder="Phone Number" name="pno" value="">
		       	        </div>
		        	    <div class="tbox">
		        	    	<input type="Password" placeholder="Password" name="pass" value="">
		        	    </div>
		        	    <div class="tbox">
		        		   	<input type="Password" placeholder="Confirm Password" name="cpass" value="">
		        	    </div>
		        	    <a href="signup.php"><input name="sub" class="btn" type="submit" onclick="" value="SIGN UP" ></a>
		        	
		            </form>
		    </div>
		</div>
</body>
</html>
