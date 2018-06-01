<?php
session_start();
$ref=$_SESSION["avis_ref"];
$user=$_SESSION["user"];
$message=$_POST["subject"];
$conn = new mysqli("localhost", "root", "","users");
		if (!$conn) {
    	die ('error  ' . mysql_error());
		}
		$sql="INSERT INTO avis VALUES(' $user','$ref','$message');";
		$result=$conn->query($sql);
		if ($result === TRUE) {
    	echo "row created successfully";
    	echo "<br>";
	}	 else {
    	$sql="UPDATE avis 
    	SET avis='$message'
    	where user=' $user' AND product='$ref';";
    	$result=$conn->query($sql);
    	if ($result === TRUE) {
    	echo $message;
    	echo "<br>";
		}
		else{
			echo $conn->error;
		}
    	echo "<br>";
	}
	header("Location: avis.php?ref=$ref" );
	exit();
	$conn->close();
	?>