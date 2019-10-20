<?php
	session_start();
	
	if(isset($_SESSION['id'])){
?>
<html>
<head>
	<title>Admin Home</title>
</head>
<body>
	<h1>WELCOME Bob!</h1>
	
	<a href="profile.html">Profile</a><br>
	<a href="changepassword.html">ChangePassword</a><br>
	<a href="viewuser.html">View Users</a><br>
	<a href="logout.php">Log out</a>
</body>
</html>
<?php		
	}else{
		header('location: login.html');
	}

?>
