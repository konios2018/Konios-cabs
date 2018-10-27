<?php
$servername = "localhost";
$username = "root";
$password="";
$dbname = "sourabh";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn)
	{
		echo"Connection OK";
	}
	else
		die("Connection failed".mysqli_connect_error());
	

	?>
