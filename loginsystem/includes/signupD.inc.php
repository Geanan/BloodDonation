<?php

if(isset($_POST['submit'])){

	include_once 'dbh.inc.php';

	
	$first =mysqli_real_escape_string($conn, $_POST['first']);
	$last =mysqli_real_escape_string($conn, $_POST['last']);
	$email =mysqli_real_escape_string($conn, $_POST['email']);
	
	$username =mysqli_real_escape_string($conn, $_POST['username']);
	$password =mysqli_real_escape_string($conn, $_POST['password']);
	$confirm =$_POST['confirm'];

	$humancheck =mysqli_real_escape_string($conn, $_POST['humancheck']);

	

	//error handlers
	//Check for empty fields
	if ( empty($first) || empty($last) || empty($email) || empty($username) || empty($password) || empty($confirm) || empty($humancheck)) {

		header("Location: ../resubmit.php?formular=empty");
		exit();

	}else {
			//check if input character are valid
			if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
				header("Location: ../resubmit.php?formular=invalid");
				exit();
			} else if (filter_var($email, filter_validate_email)) {
				header("Location: ../resubmit.php?formular=email");
				exit();
			}else{
				$sql = "SELECT * from doctors where doctor_uid='$username'";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
					header("Location: ../resubmit.php?formular=usertaken");
					exit();
				} else if($humancheck != 'human') {
						header("Location: ../resubmit.php?formular=uncheckedBox");
					exit();
				}else if($password != $confirm){
						header("Location: ../resubmit.php?formular=notMatchingPassword");
						exit();
				}else {
					//hashing the password
					$hashedPwd = password_hash($password, PASSWORD_DEFAULT);
					//isert the useer into database
					$sql = "INSERT into doctors (doctor_first, doctor_last, doctor_email, doctor_uid, doctor_pwd) 
					values ('$first', '$last',  '$email', '$username', '$hashedPwd');";

					mysqli_query($conn, $sql);

					header("Location: ../success.php?from=kitty");
					exit();

				}
			}
	} 

} else {
	header("Location: ../resubmit.php");
	exit();
}