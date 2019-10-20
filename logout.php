<?php

	session_start();
	//session_destroy();
	session_unset($_SESSION['id']);
	header('location: login.html');
?>