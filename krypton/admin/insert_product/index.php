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
 ?>
<table style="width:100%">
	<form name="inser" action="insert_product.php" method="post"  enctype="multipart/form-data"
  onsubmit="return validateForm()">
  <tr>
    <th>name</th>
    <th>input</th>
  </tr>
  <tr>
    <td><label for="reference">reference</label></td>
    <td><input style="width:98.5%" type="text" name="reference" id="reference"></td>
  </tr>
  <tr>
    <td><label for="nom">nom</label></td>
    <td><input style="width:98.5%" type="text" name="nom" id="nom"></td>
  </tr>
  <tr>
    <td><label for="file">pic</label></td>
    <td><input type="file" name="file" id="file" accept="image/*"><br><br></td>
  </tr>
  <tr>
    <td><label for="description">description</label></td>
    <td><input style="width:98.5%"  type="text" name="description" id="description"></td>
  </tr>
  <tr>
    <td><label for="quantite">quantite</label></td>
    <td><input style="width:98.5%"  type="text" name="quantite" id="quantite"></td>
  </tr>
  
</table>
<button  type="submit" value="Submit">envoyer</button>
    </form>
    <a href="../log_out.php"><button >log out</button></a>
    <a href="../main.php"><button>main</button></a>
    <script type="text/javascript">
    function validateForm() {
    var x = document.forms["inser"]["reference"].value;
    var n = document.forms["inser"]["nom"].value;
    var q = document.forms["inser"]["quantite"].value;
    var patt = /^[a-z0-9_- ]+$/i;
    var num = /^[0-9]+$/i;
    if (patt.test(x)==false) {
        alert(" use only digit or letter or \"-\" \"_\" or blank for reference ");
        return false;
    }
    if (patt.test(n)==false) {
        alert(n+" use only digit or letter \"-\" \"_\"or blank for nom");
        return false;
    }
    if (num.test(q)==false) {
        alert(q+" use only digit for quantite");
        return false;
    }  
    }  
    </script>
</body>
</html>
