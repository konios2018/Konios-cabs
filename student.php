<?php
include("connection.php");
error_reporting(0);
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Konios Cab Services</h1>
	<img id="one" src="1.jpg">



<form action="" method="GET">
	
Class:<input type="text" name="studentname" value=""/><br><br>
   
From:<input type="text" name="rollno" value=""/><br><br>

To:<input type="text" name="class" value=""/><br><br>

Mobile:<input type = "text" name="mob" value = ""/><br><br>

<input type="submit" name="submit" value="Submit"/>

</form>
<h4>

We are Konioscabs Rentals, an online cab booking service, which provides customers with reliable and executive premium inter-city cab services. We are a recently launched startup that focusses on the basic requirements of rural areas where cabs are not available easily. We try to make rural areas accessible to cab services at a cheaper cost. This will not only benefit the mass population in villages, but will also adhere to the low bus fares running now in the rural areas.
</h4> 

<?php 
$sn = $_GET['studentname'];
$rn = $_GET['rollno'];
$cl = $_GET['class'];
$m = $_GET['mob'] ;





echo $rn;

$query = "INSERT INTO STUDENT VALUES ('$sn','$cl','$rn','$m')";
$data = mysqli_query($conn, $query);

if($data)
{
	echo "Your booking is successful. Thank you for booking with us.";
}
?>
<br><br>
<img id="two" src="two.jpg">
Contact us at: Shubham Aggarwal: 9354068497
<br>
More about us: <a href="three.html">Konioservices@gmail.com</a>
</body>
</html>




