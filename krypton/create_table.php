<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
	$conn = new mysqli("localhost", "root", "","users");
	$sql="CREATE TABLE login(
	psuedo VARCHAR(50) PRIMARY KEY,
	nom varchar(50),
	prenom varchar(50),
	mail varchar(70)
	)";
	if ($conn->query($sql) === TRUE) {
    	echo "Table login created successfully";
    	echo "<br>";
	}	 else {
    	echo "Error creating table: " . $conn->error;
    	echo "<br>";
	}
	$sql="CREATE TABLE password(
	psuedo VARCHAR(50) PRIMARY KEY,
	mot_de_passe varchar(50),
	FOREIGN KEY (psuedo) REFERENCES login(psuedo)
	)";
	if ($conn->query($sql) === TRUE) {
    	echo "Table password created successfully";
    	echo "<br>";
	}	 else {
    	echo "Error creating table: " . $conn->error;
    	echo "<br>";
	}

	$sql="CREATE TABLE admins(
	psuedo VARCHAR(50) PRIMARY KEY,
	mot_de_passe varchar(50)
	)";
	if ($conn->query($sql) === TRUE) {
    	echo "Table password created successfully";
    	echo "<br>";
	}	 else {
    	echo "Error creating table: " . $conn->error;
    	echo "<br>";
	}
	$sql="CREATE TABLE product(
	reference VARCHAR(50) PRIMARY KEY,
	nom varchar(50),
	pic varchar(50),
	description text,
	quantite INT
	)";
	if ($conn->query($sql) === TRUE) {
    	echo "Table product created successfully";
    	echo "<br>";
	}	 else {
    	echo "Error creating table: " . $conn->error;
    	echo "<br>";
	}
	$sql="CREATE TABLE Achat(
	NUM_ACHAT INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	USER varchar(50),
	PRODUCT varchar(50),
	la_date DATETIME NOT NULL
	)";
	if ($conn->query($sql) === TRUE) {
    	echo "Table Achat created successfully";
    	echo "<br>";
	}	 else {
    	echo "Error creating table: " . $conn->error;
    	echo "<br>";
	}
	$sql="CREATE TABLE contact(
	NUM_CONTACT INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	nom varchar(50),
	prenom varchar(50),
	message text
	)";
	if ($conn->query($sql) === TRUE) {
    	echo "Table contact created successfully";
    	echo "<br>";
	}	 else {
    	echo "Error creating table: " . $conn->error;
    	echo "<br>";
	}
	$sql="CREATE TABLE avis(
	user varchar(50) ,
	product varchar(50) ,
	avis text,
	PRIMARY KEY (user,product),
	FOREIGN KEY (user) REFERENCES login(psuedo),
	FOREIGN KEY (product) REFERENCES  product(reference)
	)";
	if ($conn->query($sql) === TRUE) {
    	echo "Table avis created successfully";
    	echo "<br>";
	}	 else {
    	echo "Error creating table: " . $conn->error;
    	echo "<br>";
	}
	$conn->close();
	?> 
	
</body>
</html>
