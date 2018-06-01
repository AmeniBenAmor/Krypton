<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="./krypton.css">
</head>
<body>
<?php
$nom=$_POST["lastname"];
$prenom=$_POST["firstname"];
$message=$_POST["subject"];
$conn = new mysqli("localhost", "root", "","users");
		if (!$conn) {
    	die ('error  ' . mysql_error());
		}
		$sql="INSERT INTO contact(nom,prenom,message) VALUES('$nom','$prenom','$message');";
		$result=$conn->query($sql);
		if ($result == TRUE) {
    	echo "row created successfully";
    	echo "<br>";
	}	 else {
    	echo "Error creating row: " . $conn->error;
    	echo "<br>";
	}
	$conn->close();
?>
<a href="./"><button>continue</button></a>
</body>
</html>
