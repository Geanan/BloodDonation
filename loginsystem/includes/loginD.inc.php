<?php

session_start();

if (isset($_POST['submit'])) {
	
	include 'dbh.inc.php';

	$uid = mysqli_real_escape_string($conn, $_POST['uid']);	
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

	if (empty($uid) || empty($pwd)) {
		header("Location: ../unsuccesfulLogin.php?index=empty");
		exti();
	}else{

		$sql = "SELECT * from doctors where doctor_uid = '$uid'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck < 1) {
			
			header("Location: ../unsuccesfulLogin.php?index=error1");
			exti();
		}else{
			if($row = mysqli_fetch_assoc($result)){
				
				$hashedPwdCheck = password_verify($pwd, $row['doctor_pwd']);
				if ($hashedPwdCheck == false) {
					header("Location: ../unsuccesfulLogin.php?index=error1");
					exti();
				}elseif ($hashedPwdCheck == true) {
					//log in donor
					$_SESSION['u_id'] = $row['doctor_id'];
					$_SESSION['u_first'] = $row['doctor_frist'];
					$_SESSION['u_last'] = $row['doctor_last'];
					$_SESSION['u_email'] = $row['doctor_email'];
					$_SESSION['u_uid'] = $row['doctor_uid'];
					header("Location: ../doctor.php?index=success");
					exti();
				}

			}
		}

	}

}else {
	header("Location: ../unsuccesfulLogin.php?index=error1");
	exti();
}