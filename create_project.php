<?php
     $con = mysqli_connect("localhost","root","Lara[123]?","id21733812_larabel");
     $path=$_POST['pat'];
      $u_id=$_POST['u_id'];
     $project=$_POST['project'];
    $num=$_POST['num'];
	 if (is_numeric($project)) {
   	$msg="Numbers is not valid";
   	header("location: LaraBuilds.php?msg=$msg");
   }
 else{

if (isset($_POST['start'])) {
	# code...
	if(empty($path && $project)){
	$msg ="pleas put your project name!";
	header("location: LaraBuilds.php?msg=$msg");
}
else{
    $wordCount =str_word_count($project);
if ($wordCount!=1) {
	$msg="The project name must be a single word only!";
 header("location: LaraBuilds.php?msg=$msg");
}
else{

$sql=mysqli_query($con,"SELECT * FROM data WHERE project ='$project'");
if ($sql->num_rows>0) {
$msg="Project's already exist";
 header("location: LaraBuilds.php?msg=$msg");
}
else{

    chdir($path);
    $cmdCommand = "start  cmd /k composer create-project laravel/laravel $project";
    set_time_limit(1000);
    exec($cmdCommand);


    $msg="$project created successfully";
    $query=mysqli_query($con,"Insert into data (pat,project,num,u_id) VALUES ('$path','$project','$num','$u_id')");
    if($query==true){
    header("location: LaraBuilds.php?msg=$msg");
}}
}}
}}
 ?>

 <?php
$_path=$_POST['vs'];
if (isset($_POST['startvs'])) {
	# code...
chdir($_path);
exec("code .");
}else{
	echo "failed";
}


?>