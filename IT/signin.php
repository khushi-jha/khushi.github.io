<?php

$host = "127.0.0.1:3325";  
$user = "root";  
$pass = "";  
$dbname = "it";
$conn = mysqli_connect($host, $user, $pass, $dbname) or die("unable to connect database"); 

if(isset($_POST["s"])) 
    {     
            $name = $_POST["name"]; 
            $password = $_POST["Password"]; 

            $q = "select name, password from user where name='$name' && password='$password'";

            $result = mysqli_query($conn,$q);
            $row = mysqli_num_rows($result);


            if($row == 1) 
            { 
                echo'<script>open("IT.php")</script>';
            }
            else
            {
                echo'<script>alert("The username or password are incorrect!")</script>';
            }

    } 
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="signinstyle.css">
        <script type="text/javascript" src="validation.js"></script>
</head>
<body>
        <div class="bg">
        	<div class="container">
        		<img src="1.jpg" class="user">
        		
        		<h1>LOG IN</h1>

                        <form name="f1" action="signin.php" method="post" onsubmit="return login()">
                        	<div class="tbox">
                	               	<input type="text" name="name" placeholder="Username">
                	       </div>
                	       <div class="tbox">
                		      <input type="text" name="Password" placeholder="Password">
                	       </div>

                            <a href="IT.php"><input name="s" class="btn" type="submit" value="LOG IN"/></a>
                	
                        </form>
                        <a class="b1" href="fp.html">FORGOT PASSWORD ?</a>

                </div>
        </div>
</body>
</html>
