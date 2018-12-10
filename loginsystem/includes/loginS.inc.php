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

		$sql = "SELECT * from staff where staff_uid = '$uid'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck < 1) {
			
			header("Location: ../unsuccesfulLogin.php?index=error1");
			exti();
		}else{
			if($row = mysqli_fetch_assoc($result)){
				
				$hashedPwdCheck = password_verify($pwd, $row['staff_pwd']);
				if ($hashedPwdCheck == false) {
					header("Location: ../unsuccesfulLogin.php?index=error1");
					exti();
				}elseif ($hashedPwdCheck == true) {
					//log in donor
					$_SESSION['u_id'] = $row['staff_id'];
					$_SESSION['u_first'] = $row['staff_frist'];
					$_SESSION['u_last'] = $row['staff_last'];
					$_SESSION['u_email'] = $row['staff_email'];
					$_SESSION['u_uid'] = $row['staff_uid'];
					header("Location: ../staff.php?index=success");
					exti();
				}

			}
		}

	}

}else {
	header("Location: ../unsuccesfulLogin.php?index=error1");
	exti();
}