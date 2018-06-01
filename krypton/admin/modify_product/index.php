<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../../krypton.css">

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
	$sql = "SELECT * FROM product";
	$result = $conn->query($sql);
	$location = '../../uploads/'; 
	$url_md = 'modifier.php?ref=';
	$url_sp = 'suprime.php?ref=';
	$a=1;
	if ($result->num_rows > 0) {
    echo "<table><tr><th>Image</th><th>References</th><th>Nom</th><th>Quantite</th><th>description</th><th>modifie</th><th>suprime</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	$a++;
        echo "<tr><form name=\"form".$a."\" onsubmit=\"return validateForm(".$a.")\" action=\"update_product.php?ref=".$row["reference"]."\" method=\"post\"  enctype=\"multipart/form-data\"><td><img width=\"100\" height=\"200\" src=".$location.$row["pic"]."><input type=\"file\" name=\"file\" id=\"file\" accept=\"image/*\" value=".$location.$row["pic"]."></td><td>".$row["reference"]."</td><td>".$row["nom"]."<input style=\"width:90%\" type=\"text\" name=\"nom\" id=\"nom\" placeholder=\"nouveau nom\"></td><td>".$row["quantite"]."<input type=\"text\" name=\"quantite\" id=\"quantite\" style=\"width:90%\" placeholder=\"nouvelle quan\" ></td><td>".$row["description"]."<input style=\"width:90%\" type=\"text\" name=\"description\" id=\"description\" placeholder=\"nouvelle description\"></td><td><input style=\"width:90%\" type=\"submit\" name=\"submit\" value=\"modifier\"></form></td><td><a href=".$url_sp.$row["reference"]."> <button type=\"button\">delete</button> "."</a></td></tr>";
    	}
    	echo "</table>";}
	else {
    echo "la liste est vide <br>";
}
$conn->close();

 ?>
 <form></form>
<a href="../insert_product/"><button ">inserer un nouveau produit </button></a>
<a href="../log_out.php"><button >log out</button></a>
<a href="../main.php"><button>main</button></a>
<script type="text/javascript">
    function validateForm(a) {
    var x = document.forms["form"+a]["nom"].value;
    var n = document.forms["form"+a]["description"].value;
    var q = document.forms["form"+a]["quantite"].value;
    var patt = /^[a-z0-9_- ]+$/i;
    var num = /^[0-9]+$/i;
    if (patt.test(x)==false && x!="" ) {
        alert(" use only digit or letter or \"-\" \"_\" for nom ");
        return false;
    }
    if (patt.test(n)==false && n!="") {
        alert(n+" use only digit or letter \"-\" \"_\" for descripton");
        return false;
    }
    if (num.test(q)==false && q!="") {
        alert(q+" use only digit for quantite");
        return false;
    }  
    }  
</script>
</body>
</html>