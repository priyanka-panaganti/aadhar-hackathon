<?php

	session_start();
	include('dbcon.php');

	if(isset($_POST['sign_in']))
{
		$username = $_POST['username'];
        $mobile = $_POST["mobile"];

		$query = "SELECT * From  usertable  Where  email='$email' &&  password='$password'";
		$result = mysqli_query($query);
		if(mysqli_num_rows($result) ==1){
			echo "Correct Credentials";
			session_start();
			$_SESSION['auth']='true';
			header('location:web page\index.html');
		} else {
			echo "Username or Password is incorrect";
			#header('location:index.html');
		}
	}
	#header('Location: index.html');
?>
