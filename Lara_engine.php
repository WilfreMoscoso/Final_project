<?php
$migration =$_POST['migration'];
$save_path = $_POST['pat'];
$controller = $_POST['controller'];
$model = $_POST['model'];
if(isset($_POST['send'])){



$emptyVars = array();
 // Check if variables are empty and store empty ones in an array
if (empty($migration)) {
    $emptyVars[] = "Migration";
}
if (empty($controller)) {
    $emptyVars[] = "Controller";
}
if (empty($model)) {
    $emptyVars[] = "Model";
}
// Display the empty variables
if (!empty($emptyVars)) {
    echo "empty ";
    foreach ($emptyVars as $var) {
        echo $var . " ";
    }
if (empty($controller)) {
	
}
else{
	chdir($save_path);
	exec("start cmd /k php artisan make:controller $controller");
}
if (empty($model)) {
	# code...
}
else{
chdir($save_path);
	exec("start cmd /k php artisan make:model $model");	
}

 if (empty($migration)) {
	# code...
}
else{
chdir($save_path);
	exec("start cmd /k php artisan make:migration $migration");	
 }

?>

  <a href="LaraBuilds.php">home</a>
  <?php

} else {
chdir($save_path);
exec("start cmd /k php artisan serve");
  
  exec("start cmd /k php artisan make:controller $controller");
 
  exec("start cmd /k php artisan make:model $model");	
  
  exec("start cmd /k php artisan make:migration $migration");	
 $msg ="Process done!";
 header("location: LaraBuilds?mg=$msg");

}
}


$serverpath=$_POST['server'];
if (isset($_POST['serve'])) {
	
	chdir($serverpath);
    exec("start cmd /k php artisan serve ");
    $msg ="Server close on $save_path";
    header("location: LaraBuilds.php?mg=$msg");
}else if (isset($_POST['taskkill'])) {

	chdir($serverpath);
    exec("start cmd /k taskkill /F /IM  php.exe");
    $msg ="";
    header("location: LaraBuilds.php?mg=$msg");
}else{

}
?>


