<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
session_start();
$reference=$_GET["ref"];
$admin=$_SESSION["admin"];
	if(!isset($admin)){
		header('Location: ../');
		exit();
	}
if(isset($_POST) ){
	$nom=$_POST['nom'];
	$pic= $_FILES['file']['name']; 
	$des=$_POST['description'];
	$quan=$_POST['quantite'];
	$conn = new mysqli("localhost", "root", "","users");
	if (!$conn) {
    	die ('error  ' . mysql_error());
	}
	if ($des!=""){
		$sql="UPDATE product 
		SET description='$des'
		WHERE reference='$reference' ;";
		$result=$conn->query($sql);	
		if($result){
			echo "changement de description<br>";
		}
		}
	if ($nom!=""){
		$sql="UPDATE product 
		SET nom='$nom'
		WHERE reference='$reference' ;";
		$result=$conn->query($sql);
		if($result){
			echo "changement de nom<br>";
		}	
		}
		if ($quan!=""){
		$sql="UPDATE product 
		SET  quantite='$quan'
		WHERE reference='$reference' ;";
		$result=$conn->query($sql);
		if ($result){
			echo "changement de quantite<br>";
		}
		}
	
	if($pic!=""){
    	$name       = $_FILES['file']['name'];  
    	$temp_name  = $_FILES['file']['tmp_name'];  
  		if(isset($name)){
      		if(!empty($name)){      
       			$location = '../../uploads/';      
            	if(move_uploaded_file($temp_name, $location.$name)){
         			echo 'File uploaded successfully';
                	echo "<a href=\"./\"><img src=".$location.$name."></a>";
            		}
        		}
    		}
    	$sql="UPDATE product 
		SET pic='$pic'
		WHERE reference='$reference' ;";
		$result=$conn->query($sql);	
		if($result){
			echo "changement d'image'<br>";
			}
		}
	}
 ?>
 <a href="./"><button>get back</button></a>
</body>
</html>

