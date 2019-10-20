<?php
	
	session_start();

	if(isset($_POST['submit'])){

		$id = $_POST['id'];
		$password = $_POST['ps'];

		if(empty($id) == true || empty($password) == true){
			echo "null submission!";
		}else{

			if($id == $password){
				
				$_SESSION['id'] = $id;
				$_SESSION['password'] = $password;

				header('location: hadmin.php');

			}else{
				echo "invalid Id/password";
			}
		}

	}else{
		header('location: login.html');
	}


?>