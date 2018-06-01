<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../krypton.css">
</head>
<body>
	<?php 
session_start();
$reference=$_GET["ref"];
$user=$_SESSION["user"];
if(!isset($user)){
		header('Location: ../');
		exit();
	}
$conn = new mysqli("localhost", "root", "","users");
	if (!$conn) {
    	die ('error  ' . mysql_error());
	}
$sql="UPDATE product 
	SET quantite=quantite-1 
	WHERE reference='$reference' ;";
	$result=$conn->query($sql);	
	if ($result){
			echo "t'acheter ".$reference;

		}
	else{
		echo "erreur";
	}
$sql="INSERT INTO Achat(user,product,la_date) VALUES('$user','$reference',now()) ;";
	$result=$conn->query($sql);	
	if ($result){

		}
	else{
		echo "<br>";
		echo "erreur".$conn->error;
	}

 ?>
 <br>
 <a href="./"><button style="width: 73%">continuer l'achat </button></a>
</body>
</html>
