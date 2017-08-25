

<?php
 $connection = mysqli_connect("localhost","root","","gfagame_db");
	if($connection == true){
		$tittle = "connect";
	}else{
		echo "Dont't Connected!!!!.</br></br></br>";
		$tittle = "Error";
		exit();
	}
$data = mysqli_query($connection,"SELECT * FROM `showproduct` ");




 ?>
