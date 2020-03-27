<?php 
	include("./firebase/index.php");

	if(isset($_POST['submit'])){
		$FirstName=$_POST['FirstName'];
		$LastName=$_POST['LastName'];
		$email=$_POST['Email'];
		$password=$_POST['Password'];

		$data=[
			'firstName' =>$FirstName,
			'lastName' => $LastName,
			'email' => $email,
			'password' => $password
		];
		$ref = "user_info/";
		$pushdata = $database->getReference($ref)->push($data);

		//users auth
		//$auth = $database->getAuth();
		$user = $auth->createUserWithEmailAndPassword($email , $password);
		header("Location:signin.php");
	}

?>