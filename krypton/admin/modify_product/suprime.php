<?php 
	session_start();
	$admin=$_SESSION["admin"];
	if(!isset($admin)){
		header('Location: ../');
		exit();
	}
	$ref= $_GET["ref"];
	echo $ref;
	$conn = new mysqli("localhost", "root", "","users");
	if (!$conn) {
    	die ('error  ' . mysql_error());
	}
	$sql="DELETE FROM product 
	WHERE reference='$ref' ;";
	$result=$conn->query($sql);
	if ($result){
			echo "done";
			header('Location: ./');
			exit();}
	else{
		echo "erreur";
	}

 ?>