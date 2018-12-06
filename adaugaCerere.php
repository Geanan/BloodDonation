<?php

$con = mysqli_connect("localhost","root", ""); 
if (!$con) { 
 die('Could not connect: ' . mysqli_error()); 
} 
 
mysqli_select_db($con, "blood_donation"); 

$idCerere = $_POST['idCerere'];
$numeBeneficiar = $_POST['numeBeneficiar']
$grupaSangvinaBeneficiar = $_POST['grupaSangvinaBeneficiar']
$locatie = $_POST['locatie']
$idLocatie = $_POST['idLocatie']
$usernameDoctor = $_POST['usernameDoctor']
$gradUrgenta = $_POST['gradUrgenta']

mysqli_query("insert into cereri (idCerere,dataEfectuarii,numeBeneficiar,grupaSangvinaBeneficiar,locatie,idLocatie,usernameDoctor,gradUrgenta) values ( '$idCerere',now(),'$numeBeneficiar','$grupaSangvinaBeneficiar','$locatie','$idLocatie','$usernameDoctor','$gradUrgenta')");
mysqli_close($con); 

header("Location: adauga.php");

?>