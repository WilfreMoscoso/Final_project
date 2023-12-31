
<?php

session_start();

if (!isset($_SESSION['login']) || $_SESSION['login']!==true) {
 header("location: index.php?logout");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	 <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="Style3.css">
</head>
<body>

<?php
if (isset($_POST['logout'])) {
 session_destroy();
 echo '<script>window.location.href="index.php"</script>';
}
?>

<center>
	<div class="background">
<strong><p style="color: white">Users</p></strong>
<p style="color: white">
		<?php
echo $_SESSION['_email'];
?></p>
<div class="mainimage">

<div class="nav-bar-up">
 <nav class="navbar navbar-expand-lg navbar-dark bg-orange p 10 nav1">
    <div class="container-fluid">
     <a class="nav-link mx-2" href="#"><p class="tools_text">Tools</p></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
    
      <div class=" collapse navbar-collapse" id="navbarNavDropdown">
   <ul class="navbar-nav ms-auto ">

    
           </li>
          <li class="nav-item dropdown">
         <a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white">
  Projects
</a>
   <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
      
<?php
// Assuming you have established a database connection using mysqli or PDO
$server="localhost";
$user="root";
$pass="Lara[123]?";
$database="id21733812_larabel";

 $conn = mysqli_connect($server, $user, $pass, $database);

// Assuming you have already established a database connection
 
// Retrieve the ID from the request
$id = $_SESSION['U_email'];
 
// Prepare the SQL query
$query = "SELECT * FROM data WHERE u_id = $id";
 
// Execute the query
$result = mysqli_query($conn, $query);
 
// Check if any rows were returned
if (mysqli_num_rows($result) > 0) {
    // Loop through the rows and display the data
    while ($row = mysqli_fetch_assoc($result)) {
      
       
?>

<center>
<form method="post">
<input class="pathinput1" type="hidden" value="<?php echo $row['pat'].$row['project']?>" name="pat">
<p class="fas fa-folder folderpath"></p> <input class="pathinput2" type="submit"  value="<?php echo $row['project'] ?>" name="submit">
</form>
 </center>

<?php
  }
} else {
    echo "No rows found with the ID: $id";
}?>
            </ul>
          </li>
             <li class="nav-item dropdown">
         <a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white">
  <p class="fas fa-user"></p>
</a>
   <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
       <li><a class="dropdown-item" href="#">See requirements</a></li>
           <li><a class="dropdown-item" href="help.php">help</a></li>
              
                 <form method="post" >
                     <li><input class="logout" type="submit" value="Logout" name="logout"></li>
                        </form>

            </ul>

        </ul>
      </div>
    </div>
    </nav>
  </div>
  <div class="messagediv">
      <br> <div class="container"><center>
<p class="text">
   <?php
 if(isset($_GET['msg'])){
 echo  $_GET['msg'];
 }
 ?></p></center>
  </div>
</div></div>
<div class="projectdiv">

<div class="project2">
  <center><br>
  <strong><p style="font-size: 13px; color: red">numbers of projects</p></strong>
  <?php $con = mysqli_connect("localhost","root",'System.out.println("12")!',"id21732994_wilfre");
  $query=mysqli_query($con,"SELECT num FROM data");
  $sum=0;
  if ($query->num_rows>0) {
   while($row =$query->fetch_assoc()){
    $sum += $row['num'];
   }
   ?>
  <?php
  echo "<p>".$sum."</p>"; 
 
  }else{
    echo "<h2>0</h2>";
  }
   ?>
                        </center></div>
                            </center></div></div>
                               <center><br><br><br><br><br><br><br><img class="laraimg" src="laravel.png" width="20%" height="80vh">
                                  <br><br><center><p class="projectname">Lara Build</p>
                                         <button onclick="toggle()" class="command">Command</button>
                                          <br><br>
                                   <form method="post" action="Lara_engine.php">
                                  <center>
                                <div class="popdiv4" id="div">
                                 
                               <form method="post" action="Lara_engine.php">
                             <input type="hidden" value="<?php echo $_SESSION['pt']; ?>" name="server">
                           <div class="div_button">
                         <button class="toggle-btn firstbutton"  name="taskkill" id="btn2">Off</button>
                      <button class="toggle-btn firstbutton" onclick="alert('server running on <?php echo $_SESSION["pt"]; ?>');" name="serve" id="btn1">On</button>
                  </div>

                <div class="vs">
              </form>
            <form method="post" action="vs.php" >
          <input class="vsin" type="hidden" value="<?php echo $_SESSION['pt']; ?>" name="vs">
        <button class="btn-vs" type="submit" name="startvs"><img src="vscode.png" width="100%" height="20vh"></button>
      </form>
    </div>
<br><br>
    <input class="input" type="text" value="<?php echo $_SESSION['pt']; ?>" name="pat">
      <input class="input" type="text" placeholder="Controller" name="controller">
         <input class="input" type="text" placeholder="Model" name="model">
            <input class="input" type="text" placeholder="migration" name="migration">

                 <button class="insave" name="send">save</button>
                    </div>
                        </form>
                            </center>
                              
                                  </div>
                                      </div>
                                          </div>
<?php
if(isset($_POST['submit'])){
$project = $_POST['pat'];
$_SESSION['pt']=$_POST['pat'];
}
?>
<br><br><br>
  <div id="popupDiv" class="pop_updiv" style="display: none;">
    <button id="closeButton" class="btnpop"><li class="fas fa-times"></li></button>
     </div>
      </div>
        <div class="popupDiv" id="myDiv" style="display:none;"><br><br>
         <br>


<form method="post" action="create_project.php">
<input class="inputpo" value="<?php echo $_SESSION['U_email']; ?>" type="hidden" name="u_id">
   <input type="hidden" placeholder="folder path" value="C:\\" class="path" name="pat">
      <input class="inputpo" placeholder=" project name:" type="text" name="project">
          <input type="hidden" value="1" name="num">
              <input class="buttonpo" value="start" type="submit" name="start">
    
       
      <br><br><p>Example: first_project</p>
      <center>
     <a href="help.php">
     Help
    </a>
    </center>
 </form>

</div><br><br><br>
  <center><button class="createproject" type="submit" onclick="toggleDiv()" name="">Create-project</button></center>
    <br><br>
      <div class="txt"><br>
      <strong><p class="whatislaravel">What is Laravel?</p></strong><br><br>
         <p class="p1">Laravel is an open-source framework that <br><br>provides a clean and elegant
while aiming to  <br><br> make web development tasks easier and <br><br> more effecient.</p>
</div>
 
     <script src="script.js"></script>
  </body>
</html>


<div class="author">
  <h2 class="h2"><br><i>Author</i></h2>
    <center>
      <img class="authorimage" src="author.jpg" width="25%" height="150vh">
        </center>
          <div class="flex">
            <div class="information1"><br>
              <h3><p style="color: dodgerblue; font-family: serif;">Facebook</p></h3>
                <a href="">Add me on facebook</a>
                  </div>
                    <div class="information2"><br>
                      <strong><p>Name: Wilfre E. Moscoso</p>
                        <p>Age: 22</p>
                          <p>Address: Brgy Camingawan</p>
                             <p>Civil Status: naghahanap pa</p></strong>
                            </div>
                           <div class="information3">
                          <br>
                        <h3><p>Members</p></h3>
                     <p>1. Wilfre E. Moscoso</p>
                  <p>2. Jenny Rose Endoso Dayuday</p>
               <p>3. Shara Vergara</p>
  </strong>
</div>
</div>
</div>
<div class="objectext">
<div class="objectext2">
<h3>Project Objectives</h3>
<br>
We build this project <br> called Larabuild to have fast building laravel projects <br>and it has also a diret command for creating your <br>Controller, Model, and Migration;
</div>
</div>



</body>
</html>
<script type="text/javascript" src="projectscript.js"></script>
<script type="text/javascript">






  function toggle() {
  var div = document.getElementById("div");
  
  if (div.style.display === "none") {
    div.style.display = "block";
  } else {
    div.style.display = "none";
  }
}
 
window.onload = function() {
  var div = document.getElementById("div");
  var visibilityState = localStorage.getItem("divVisibility");
  
  if (visibilityState === "visible") {
    div.style.display = "block";
  } else {
    div.style.display = "none";
  }
}
 
window.onbeforeunload = function() {
  var div = document.getElementById("div");
  var visibilityState = div.style.display;
  
  if (visibilityState === "block") {
    localStorage.setItem("divVisibility", "visible");
  } else {
    localStorage.setItem("divVisibility", "hidden");
  }
}


  function refreshPage(){
    location.reload();
  }



var btn1 = document.getElementById('btn1');
var btn2 = document.getElementById('btn2');

// Check if the button state is stored in local storage
var btnState = localStorage.getItem('btnState');
if (btnState === 'btn1') {
  // If state is btn1, set btn1 as active and btn2 as inactive
  btn1.classList.add('active');
  btn2.classList.remove('active');
} else if (btnState === 'btn2') {
  // If state is btn2, set btn2 as active and btn1 as inactive
  btn2.classList.add('active');
  btn1.classList.remove('active');
}

// Add event listener to toggle button 1
btn1.addEventListener('click', function() {
  // Remove active class from both buttons
  btn1.classList.add('active');
  btn2.classList.remove('active');
  // Store the button state in local storage
  localStorage.setItem('btnState', 'btn1');
});

// Add event listener to toggle button 2
btn2.addEventListener('click', function() {
  // Remove active class from both buttons
  btn2.classList.add('active');
  btn1.classList.remove('active');
  // Store the button state in local storage
  localStorage.setItem('btnState', 'btn2');
});
</script>

