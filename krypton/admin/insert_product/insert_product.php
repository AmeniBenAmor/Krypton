<?php 
session_start();
$admin=$_SESSION["admin"];
	if(!isset($admin)){
		header('Location: ../');
		exit();
	}
if(isset($_POST) && !empty($_POST['reference'])){

	$reference=$_POST['reference'];
	$nom=$_POST['nom'];
	$pic= $_FILES['file']['name']; 
	$des=$_POST['description'];
	$quan=$_POST['quantite'];
	$conn = new mysqli("localhost", "root", "","users");
	if (!$conn) {
    	die ('error  ' . mysql_error());
	}
	$sql="INSERT INTO product VALUES('$reference','$nom','$pic','$des','$quan');";
		$result=$conn->query($sql);
		if ($result){
			echo "done";
			if(isset($_POST['submit'])){
    			$name       = $_FILES['file']['name'];  
    			$temp_name  = $_FILES['file']['tmp_name'];  
    			if(isset($name)){
        			if(!empty($name)){      
            			$location = '../../uploads/';      
            			if(move_uploaded_file($temp_name, $location.$name)){
                			echo 'File uploaded successfully';
                			echo "<a href=\"../modify_product/\"><img src=".$location.$name."></a>";
            				}
        				}       
    				}
    	  		else {
        			echo 'You should select a file to upload !!';
    			}
			}
		}
		else{
			echo $conn->error;
		}
	}
else{
	header('Location: ./');
		exit();
}
?>
