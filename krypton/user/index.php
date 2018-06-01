<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../krypton.css">

</head>
<body>
<?php 
	session_start();
	$user=$_SESSION["user"];
	if(!isset($user)){
		header('Location: ../');
		exit();
	}
	$conn = new mysqli("localhost", "root", "","users");
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
		} 
	$sql = "SELECT * FROM product";
	$result = $conn->query($sql);
	$location = '../uploads/'; 
	$url = 'acheter.php?ref=';
	$avis = 'avis.php?ref=';
	if ($result->num_rows > 0) {
    echo "<table><tr><th>Image</th><th>References</th><th>Nom</th><th>Quantite</th><th>description</th><th>avis</th><th>acheter</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td><img width=\"100\" height=\"200\" src=".$location.$row["pic"]."></td><td>".$row["reference"]."</td><td>".$row["nom"]."</td><td>".$row["quantite"]."</td><td>".$row["description"]."</td>"."<td><a href=".$avis.$row["reference"]."> <button type=\"button\">avis</button> "."</a></td>";
        if ($row["quantite"]>0){
        	echo "<td><a href=".$url.$row["reference"]."> <button type=\"button\">acheter</button> "."</a></td></tr>";
        }
        else {
        	echo "<td><a href=".$url.$row["reference"]."> <button type=\"button\" disabled>acheter</button> "."</a></td></tr>";
        }
    	}
    	echo "</table>";}
	else {
    echo "LE SITE est sous maintenenace";
}
$conn->close();

?>
<a href="log_out.php"><button >log out</button></a>
</body>
</html>