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
    } ?>
	<a href="insert_product"><button >insert</button></a>
    <a href="modify_product"><button >modifier</button></a>
    <a href="contact.php"><button >message</button></a>
</body>
</html>