 <!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../krypton.css">
</head>
<body>
 <?php 
  session_start();
  $admin=$_SESSION["admin"];
  if(!isset($admin)){
    header('Location: ../');
    exit();
  }
  $conn = new mysqli("localhost", "root", "","users");
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
		} 
	$sql = "SELECT * FROM contact";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
    echo "<table width=100%><tr><th>nom</th><th>prenom</th><th>message</th>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["nom"]."</td><td>".$row["prenom"]."</td><td>".$row["message"]."</td></tr>";}
    }
 ?>
<a  href="./main.php"><button width=100%>back main</button></a>
</body>

</html>
