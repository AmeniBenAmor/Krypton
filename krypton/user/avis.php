<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../krypton.css">
</head>
<body>
<?php 
session_start();
if(!isset($_SESSION["user"]) ){
		header('Location: ../');
		exit();
	}
if (!isset($_GET["ref"]))
	{
		header('Location: ./');
		exit();
	}
$ref=$_GET["ref"];
$_SESSION["avis_ref"]=$ref;
$user=$_SESSION["user"];

$conn = new mysqli("localhost", "root", "","users");
$sql = "SELECT * FROM avis WHERE product='$ref'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    echo "<table width=100%><tr><th>USER</th><th>avis</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["user"]."</td><td>".$row["avis"]."</td></tr>";
        }
    	echo "</table>";}
	else {
    echo "Pas d'avis pour le moment";
}
?>
<form  method="post" action="save_avis.php">
	<textarea  id="subject" name="subject" placeholder="Ecrire Votre avis" style="height:200px;width: 100%"></textarea>
	<button style="width: 100%" type="submit">save avis!</button>
</form>
<a href="./"><button style="width: 100%">continuer l'achat </button></a>
</body>
</html>