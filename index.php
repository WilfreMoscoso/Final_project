<?php


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="logi.css">
</head>
<body>

</div>
<html>
<head>
  <title>Div Display Example</title>
</head>
<body>
  <center>
  <div id="myDiv" class="div2">
    <center>
    <div class="div3"><center><h1> <?php
        if (isset($_GET['mg'])) {
            # code...
            echo $_GET['mg'];
        }else{
            echo "Sign-up";
        }

            ?></h1></center></div></center>
    <br><br>
    <form method="post"onsubmit="return validateForm()" action="login_engine.php">
    <input placeholder=" First Name:" type="text"  name="fullname"required>
    <input placeholder=" email:" type="text"  name="email"required>
    <input placeholder=" password:" type="text" id="password"  name="password"required>
    <input placeholder=" confirm-password" type="text" id="confirm-password" name="confirmpassword"required>
    <input class="btn" type="submit" value="Sign-up" name="register">
    </form> 
   <center>
    <input class="btn-sign" onclick="toggleDiv()" name="Sign-up" value="Sign-in" type="submit">
</center>
</div>


  <center>
    <div class="Sign-up"><center><h1>
     <div>
            <?php
        if (isset($_GET['msg'])) {
            # code...
            echo $_GET['msg'];
        }else{
            echo "Sign-in";
        }

            ?>
        </div></h1></center></div>
    <div class="Login-div ">

    <form method="post" action="login.php">
    <input placeholder=" email:" type="text" required name="email">
    <input placeholder=" password:" type="text" required name="password">
    <input class="btn" type="submit" value="Login" name="login">
    </form>
    <hr>
    <div class="other"> </div>
    <div class="Sign"><form>
        <input class="btn-sign" onclick="toggleDiv()" name="Sign-up" value="Sign-up" type="submit">
    </form></div>
</center>
</body>
</html>

<script type="text/javascript" src="login.js"></script>

<script> 
function validateForm() {
  var password = document.getElementById("password").value;
  var confirmPassword = document.getElementById("confirm-password").value;
 
  if (password != confirmPassword) {
    alert("Passwords do not match!");
    return false;
  }
 
  // Form submission
  // Uncomment the line below if you want the form to submit
  // return true;
}
</script>
