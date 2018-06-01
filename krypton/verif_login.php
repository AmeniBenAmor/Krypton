<?php 
session_start();
if(isset($_POST) && !empty($_POST['pseudo'])){
	$pseudo=$_POST['pseudo'];
	$_SESSION["user"] = $pseudo;
	$pwd=$_POST['mot_de_passe'];
	$conn = new mysqli("localhost", "root", "","users");
	if (!$conn) {
    	die ('error  ' . mysql_error());
	}
	$sql="SELECT * FROM password WHERE psuedo=' $pseudo' AND mot_de_passe=' $pwd'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    	while($row = $result->fetch_assoc()) {
        	echo "Welcome: " . $row["psuedo"] ;
        	header('Location: user/');
    	}
	} else {
    	echo "Combinaison pseudo / mot de passe invalide. ";
    	header('Location: ./');
	}
	$conn->close();	
}
else {
	header('Location: ./');
}
	
	exit;
 ?>