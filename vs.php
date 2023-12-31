<?php
$path=$_POST['vs'];
if (isset($_POST['startvs'])) {
	# code...
	chdir($path);
exec("code .");
$msg ="";
header("location: LaraBuilds.php?mg=$msg");
}else{
	echo "failed";
}

?>