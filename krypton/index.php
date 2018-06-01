<!DOCTYPE html>
<html>
<title>login sign in</title>
 <header> <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

  <style>

  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 100%;
      margin-top: 75px;
  }</header>
</style>
</header>
<style>
*{margin:0px; padding:0px; font-family:Helvetica, Arial, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password], input[type=email],textarea {
    width: 90%;
    padding: 12px 20px;
    margin: 8px 26px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
  font-size:16px;
}

/* Set a style for all buttons */
button {
    background-color: #04B4AE;
    color: white;
    padding: 10px 15px;
    margin: 8px 26px;
    border: none;
    cursor: pointer;
    width: 85%;
  font-size:20px;
}
button:hover {
    opacity: 0.8;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}
.avatar {
    width: 200px;
  height:200px;
    border-radius: 50%;
}

/* The Modal (background) */
.modal {
  display:none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.4);
}

/* Modal Content Box */
.modal-content {
    background-color: #fefefe;
    margin: 4% auto 15% auto;
    border: 1px solid #888;
    width: 40%; 
  padding-bottom: 30px;
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}
.close:hover,.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    animation: zoom 0.6s
}
@keyframes zoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}
</style>

</style>


<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="2.jpg" >
    </div>
    <div class="carousel-item">
      <img src="7.jpg" >
    </div>
    <div class="carousel-item">
      <img src="8.jpg" >
    </div>


  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
<body background="../background1.png">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background-color: #0B0B3B;height: 75px">
             <div id="logo-img">
                 <img src="logo.png">
             </div>
            <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">


<div>
<button onclick="document.getElementById('modal-wrapper2').style.display='block'" style="width:200px; margin-left:400px;">
Sign up </button>

<div id="modal-wrapper2" class="modal">

  <form name="signup" method="post" class="modal-content animate" onsubmit="return validatesignup()" action="sign_up.php">
        
    <div class="imgcontainer">
      <span onclick="document.getElementById('modal-wrapper2').style.display='none'" class="close" title="Close PopUp">&times;</span>
      <img src="1.png" alt="Avatar" class="avatar">
      <h1 style="text-align:center">Sign up </h1>
    </div>

    <div class="container">
      <input type="text" placeholder="Enter pseudo" name="pseudo" required>
     <input type="text" placeholder="Enter family name " name="nom" required>
      <input type="text" placeholder="Enter name" name="prenom" required>


      <input type="password" placeholder="Enter Password" name="mot_de_passe" required>  
      <input type="email" placeholder="Enter email" name="mail" required>
      
      <button type="submit">sign up</button>
      
    </div>
    
  </form>
</div>
</div>
</li>
<li class="nav-item">
<div>
<button onclick="document.getElementById('modal-wrapper1').style.display='block'" style="width:200px; ">
Log in </button>
  
<div id="modal-wrapper1" class="modal">
  
  <form name="login" method="post" class="modal-content animate" onsubmit="return validateForm()" action="verif_login.php">
        
    <div method="post" class="imgcontainer">
      <span onclick="document.getElementById('modal-wrapper1').style.display='none'" class="close" title="Close PopUp">&times;</span>
      <img src="1.png" alt="Avatar" class="avatar">
      <h1 style="text-align:center">Log in</h1>
    </div>

    <div class="container">
      <input type="text" placeholder="Enter pseudo" name="pseudo" required>

      <input type="password" placeholder="Enter Password" name="mot_de_passe" required>        
      <button type="submit">Login</button>
      <input type="checkbox" style="margin:26px 30px;"> Remember me      
      <a href="#" style="text-decoration:none; float:right; margin-right:34px; margin-top:26px;">Forgot Password ?</a>
    </div>
    
  </form>
  
</div>
</div>
</li>
</ul>
</nav>
</header>
<footer class="panel-footer" style="margin-top: 20px;  >
    <div class="container">
      <div class="row">
        <section id="hours" class="col-sm-4" ">
          <span>Hours:</span><br>
          Sun-Thurs: 11:15am - 10:00pm<br>
          Fri: 11:15am - 2:30pm<br>
          Saturday Closed
         
        </section>
        <section id="address" class="col-sm-4">
          <span>Address:</span><br>
          7105 Reisterstown Road<br>
          Baltimore, MD 21215
          <img src="maps.png" style="position:left;">
        </section>
        <section id="contactus" class="col-sm-4" >
            
            <form name="cont" method="post" action="contactus.php" onsubmit="return validateconc()">
                Contact Us:
            <input type="text" id="fname" name="firstname" placeholder="Your name.." required>

             <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>

            
             <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px" required></textarea>

            <button type="submit">contact us!</button>

  </form>
        </section>
<script>
// If user clicks anywhere outside of the modal, Modal will close

var modal1 = document.getElementById('modal-wrapper1');
var modal2 = document.getElementById('modal-wrapper2');
window.onclick = function(event) {
    if ((event.target == modal1) || (event.target == modal2)) {
        modal1.style.display = "none";
        modal2.style.display = "none";

    }
}

function validateForm() {
    var x = document.forms["login"]["pseudo"].value;
    var patt = /^[a-z0-9]+$/i;
    if (patt.test(x)==false) {
        alert(x+" use only digit or letter");
        return false;
    }
}

function validatesignup() {
    var x = document.forms["signup"]["pseudo"].value;
    var n = document.forms["signup"]["nom"].value;
    var pr = document.forms["signup"]["prenom"].value;
    var patt = /^[a-z0-9]+$/i;
    var alpha = /^[a-z]+$/i;
    if (patt.test(x)==false) {
        alert(x+ " use only digit or letters");
        return false;
    }
    if (alpha.test(n)==false) {
        alert(n+ " use only letters");
        return false;
    }
    if (alpha.test(pr)==false) {
        alert(pr+ " use only letters");
        return false;
    }
}

function validateconc(){
  var x = document.forms["cont"]["firstname"].value;
  var pr = document.forms["cont"]["lastname"].value;
  var alpha = /^[a-z]+$/i;
  if (alpha.test(x)==false) {
        alert(x+ " use only letters");
        return false;
    }
    if (alpha.test(pr)==false) {
        alert(pr+ " use only letters");
        return false;
    }

}
</script>
</body>
</html>
