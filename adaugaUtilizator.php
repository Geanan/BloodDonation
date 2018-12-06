<?php

$con = mysqli_connect("localhost","root", ""); 
if (!$con) { 
 die('Could not connect: ' . mysqli_error()); 
} 
 
mysqli_select_db($con, "blood_donation"); 

$nume = $_POST['nume'];
$username = trim($_POST['username']);
$parola = trim($_POST['parola']);
$profil = $_POST['profil'];
$grupaSangvina = $_POST['grupaSangvina']

mysqli_query($con, "insert into utilizator ( nume, username, parola, profil, grupa sangvina) values ( '$nume', '$username','$parola','$profil','$grupaSangvina')");
mysqli_close($con); 
 
header("Location: adauga.php");  

?>