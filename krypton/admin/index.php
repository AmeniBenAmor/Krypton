<!DOCTYPE html>
<html>
<title>login sign in</title>
<style>
*{margin:0px; padding:0px; font-family:Helvetica, Arial, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password], input[type=email] {
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
body{
    background-color: #0B0B3B;
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
<body background="../background1.png">



<button onclick="document.getElementById('modal-wrapper1').style.display='block'" style="width:200px; margin-top:200px; margin-left:500px;">
Log in </button>




<div id="modal-wrapper1" class="modal">
  
  <form name="login" method="post" class="modal-content animate" action="verif_admin.php" onsubmit="return validateForm()">   
    <div method="post" class="imgcontainer">
      <span onclick="document.getElementById('modal-wrapper1').style.display='none'" class="close" title="Close PopUp">&times;</span>
      <img src="daw/1.png" alt="Avatar" class="avatar">
      <h1 style="text-align:center">Log in</h1>
    </div>

    <div class="container">
      <label for="pseudo" ></label>
      <input type="text" placeholder="Enter pseudo" name="pseudo">
      <label for="mot_de_passe" ></label>
      <input type="password" placeholder="Enter Password" name="mot_de_passe">        
      <button type="submit">Login</button>
      <input type="checkbox" style="margin:26px 30px;"> Remember me      
      <a href="#" style="text-decoration:none; float:right; margin-right:34px; margin-top:26px;">Forgot Password ?</a>
    </div>
    
  </form>
  
</div>

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
        alert(x+" :use only digit or letter");
        return false;
    }
}
</script>




</body>
</html>