<?php

$con = mysqli_connect("localhost","root", ""); 
if (!$con) { 
 die('Could not connect: ' . mysqli_error()); 
} 
 
mysqli_select_db($con, "blood_donation"); 

$username = trim($_POST['username']);
$nume = $_POST['nume'];
$parola = trim($_POST['parola']);
$profil = $_POST['profil'];
$grupaSangvina = $_POST['grupaSangvina']

mysqli_query($con, "insert into utilizator (username, nume, parola, profil, grupa sangvina) values ( '$username','$nume','$parola','$profil','$grupaSangvina')");
mysqli_close($con); 
 
header("Location: adauga.php");  

?>