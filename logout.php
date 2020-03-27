<?php 
	include("./firebase/index.php");

	if(isset($_POST['logout'])){
		$database->unAuth();
	}
	?>