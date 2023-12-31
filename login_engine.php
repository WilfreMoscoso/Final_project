<?php


if (isset($_POST['register'])) {
	# code...
$password=$_POST['password'];


$con=mysqli_connect("localhost","root","Lara[123]?","id21733812_larabel");
$fullname=$_POST['fullname'];
$email=$_POST['email'];


$password=password_hash($password, PASSWORD_DEFAULT);

$sql=mysqli_query($con,"SELECT * FROM authentication WHERE email ='$email'");
if ($sql->num_rows>0) {
$mg="email already exist";
 header("location: index.php?mg=$mg");
}
else{
$query= mysqli_query($con,"INSERT INTO authentication (fullname,email,password) VALUES('$fullname','$email','$password')");
if ($query) {

	$mg="You are now register";
	header("location: index.php?mg=$mg");

}else{
	$mg="Failed to register";
header("location: index.php?mg=$mg");
}

}
}

?>

