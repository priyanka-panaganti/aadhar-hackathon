<?php
session_start();
include('dbcon.php');

if(isset($_POST['sign_up']))
{
	$username = $_POST["username"];
	$aadhar = $_POST["aadhar"];
	$mobile = $_POST["mobile"];
	$father = $_POST["father"];
	$mother = $_POST["mother"];
	$email = $_POST["email"];
	$gender = $_POST["gender"];
	
	if (!empty($username) || !empty($aadhar) || !empty($mobile) || !empty($father) || !empty($mother)|| !empty($email) || !empty($gender)){
		$postData = [

			'username'=> $username,
			'aadhar'=> $aadhar,
			'mobile'=> $mobile,
			'father'=> $father,
			'mother'=> $mother,
			'email '=> $email ,
			'gender'=> $gender,

		];

		$ref_table = "usertable";
		$postRef_result = $database->getReference($ref_table)->push($postData);

		if($postRef_result)
               {
                     $_SESSION['status'] = "";
                         header('Location: index1.php');
                      }
             else
                     {
                          $_SESSION['status'] = "Contact Not Added";
                           header('Location: index1.php');
					 }
	}
}

	
		 else {
		echo "All fields are required";
		die();
	}
	
?>