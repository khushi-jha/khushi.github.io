<?php

$host = "127.0.0.1:3325";  
$user = "root";  
$pass = "";  
$dbname = "it";
$conn = mysqli_connect($host, $user, $pass, $dbname) or die("unable to connect database"); 

if(isset($_POST["Submit"]))
{
	$name = $_POST["name"];
	$mail = $_POST["mail"];
	$number = $_POST["number"];
	$subject = $_POST["subject"];

	$sql = "INSERT INTO form(name,email,number,comment) VALUES('$name','$mail','$number','$subject')";

	if($conn->query($sql) === TRUE)
	{
       echo 'Response submitted';
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
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>

<h3>Contact Form</h3>

<div class="container">
  <form name="f3" action="contact.php" method="POST" onsubmit="return signup()">
    <label for="name">Name</label>
    <input type="text" id="name" name="name" placeholder="Your name">

    <label for="mail">Email ID</label>
    <input type="text" id="name" name="mail" placeholder="Your Email">

    <label for="number">Mobile Number</label>
    <input type="text" id="name" name="number" placeholder="Your Mobile Number">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">India</option>
      <option value="australia">Australia</option>
      <option value="australia">France</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>

    <label for="subject">Comment</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit" name="Submit">
  </form>
</div>

</body>
</html>
