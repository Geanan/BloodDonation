<?php

if(isset($_POST['submit'])){

	include_once 'dbh.inc.php';

	$gender =mysqli_real_escape_string($conn, $_POST['gender']);
	$first =mysqli_real_escape_string($conn, $_POST['first']);
	$last =mysqli_real_escape_string($conn, $_POST['last']);
	$email =mysqli_real_escape_string($conn, $_POST['email']);
	$phone =mysqli_real_escape_string($conn, $_POST['phone']);
	$occupation =mysqli_real_escape_string($conn, $_POST['occupation']);
	$group =mysqli_real_escape_string($conn, $_POST['group']);
	$username =mysqli_real_escape_string($conn, $_POST['username']);
	$password =mysqli_real_escape_string($conn, $_POST['password']);
	$confirm =$_POST['confirm'];

	//error handlers
	//Check for empty fields
	if (empty($gender) || empty($first) || empty($last) || empty($email) || empty($phone) || empty($group) || empty($username) || empty($password) || empty($confirm)) {

		header("Location: ../resubmit.php?formular=empty");
		exit();

	}	else {
			//check if input character are valid
			if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
				header("Location: ../resubmit.php?formular=invalid");
				exit();
			} else if (filter_var($email, filter_validate_email)) {
				header("Location: ../resubmit.php?formular=email");
				exit();
			}else{
				$sql = "SELECT * from donors where donor_uid='$username'";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
					header("Location: ../resubmit.php?formular=usertaken");
					exit();
				} else if(isset($_POST['check']) != 'true') {
						header("Location: ../resubmit.php?formular=uncheckedBox");
					exit();
				}else if($password != $confirm){
						header("Location: ../resubmit.php?formular=notMatchingPassword");
						exit();
				}else {
					//hashing the password
					$hashedPwd = password_hash($password, PASSWORD_DEFAULT);
					//isert the useer into database
					$sql = "INSERT into donors (donor_gender, donor_first, donor_last, donor_email, donor_phone, donor_ocupation, donor_bgr, donor_uid, donor_pwd) 
					values ('$gender', '$first', '$last', '$email', '$phone', '$occupation', '$group', '$username', '$hashedPwd');";

					mysqli_query($conn, $sql);

					header("Location: ../success.php");
					exit();

				}
			}
	} 

} else {
	header("Location: ../resubmit.php");
	exit();
}