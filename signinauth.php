
<?php 
	include("./firebase/index.php");

	if(isset($_POST['login'])){

		$email=$_POST['email'];
		$password=$_POST['password'];
		
		//users auth
		//$auth = $database->getAuth();
		/*$user = $auth->getUserWithEmailAndPassword($email , $password);
		if($user){

			session_start();
			$_SESSION['user']='true';
			header("Location:index.html");

		}*/
		if ($email && $password && $user = $auth->verifyPassword($email, $password)) {
    		session_start();

    		$_SESSION['firebase_user_id'] = $user->id;
    		
		header("Location:index.php?id=".urlencode(serialize($user->id)));
    	
    }
    exit;
	}

		  ?>