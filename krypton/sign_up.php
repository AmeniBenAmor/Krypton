<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.table-fill {
  background: white;
  border-radius:3px;
  border-collapse: collapse;
  height: 320px;
  margin: auto;
  max-width: 600px;
  padding:5px;
  width: 100%;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
  animation: float 5s infinite;
}
 
th {
  color:#D5DDE5;;
  background:#1b1e24;
  border-bottom:4px solid #9ea7af;
  border-right: 1px solid #343a45;
  font-size:23px;
  font-weight: 100;
  padding:24px;
  text-align:left;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  vertical-align:middle;
}

th:first-child {
  border-top-left-radius:3px;
}
 
th:last-child {
  border-top-right-radius:3px;
  border-right:none;
}
  
tr {
  border-top: 1px solid #C1C3D1;
  border-bottom-: 1px solid #C1C3D1;
  color:#666B85;
  font-size:16px;
  font-weight:normal;
  text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
}
 
tr:hover td {
  background:#4E5066;
  color:#FFFFFF;
  border-top: 1px solid #22262e;
}
 
tr:first-child {
  border-top:none;
}

tr:last-child {
  border-bottom:none;
}
 
tr:nth-child(odd) td {
  background:#EBEBEB;
}
 
tr:nth-child(odd):hover td {
  background:#4E5066;
}

tr:last-child td:first-child {
  border-bottom-left-radius:3px;
}
 
tr:last-child td:last-child {
  border-bottom-right-radius:3px;
}
 
td {
  background:#FFFFFF;
  padding:20px;
  text-align:left;
  vertical-align:middle;
  font-weight:300;
  font-size:18px;
  text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
  border-right: 1px solid #C1C3D1;
}

td:last-child {
  border-right: 0px;
}

th.text-left {
  text-align: left;
}

th.text-center {
  text-align: center;
}

th.text-right {
  text-align: right;
}

td.text-left {
  text-align: left;
}

td.text-center {
  text-align: center;
}

td.text-right {
  text-align: right;
}
button {
    background-color: #0B0B3B;
    color: white;
    padding: 14px 20px;
    margin: 8px 26px;
    border: none;
    cursor: pointer;
    width: 90%;
  font-size:20px;
}
button:hover {
    opacity: 0.8;
}
body{
    background-color:  #04B4AE;
}
  </style>

</head>
<body>
	<?php 
		session_start();
		$pseudo=$_POST['pseudo'];
		$_SESSION["user"]=$pseudo;
		$nom=$_POST['nom'];
		$prenom=$_POST['prenom'];
		$mail=$_POST['mail'];
		$pwd=$_POST['mot_de_passe'];
		$conn = new mysqli("localhost", "root", "","users");
		if (!$conn) {
    	die ('error  ' . mysql_error());
		}
		$sql="INSERT INTO login VALUES(' $pseudo',' $nom','$prenom','$mail');";
		$result=$conn->query($sql);
		if ($result){
			echo "Welcome  : ";
		}
		$sql="INSERT INTO password VALUES(' $pseudo',' $pwd');";
		$result=$conn->query($sql);
		if ($result){
			echo $pseudo;
			echo "<a href=\"user/\"><button>continue</button></a>";
		}
		else{
			echo "probleme d'insertion";
			echo "<a href=\"./\"><button>continue</button></a>";

		}
	 ?>

</body>
</html>