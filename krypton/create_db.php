<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
	$servername = "localhost";
	$username = "root";
	$password = "";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	// Create database
	$sql = "CREATE DATABASE users";
	if ($conn->query($sql) === TRUE) {
	    echo "Database created successfully";
		} else {
	    echo "Error creating database: " . $conn->error;
	}

	$conn->close();
	?> 
</body>
</html>
