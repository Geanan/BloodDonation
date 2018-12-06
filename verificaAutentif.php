<?php 

session_start(); 
$con = mysqli_connect("localhost","root", ""); 
if (!$con) { 
 die('Could not connect: ' . mysqli_error()); 
} 
 
mysqli_select_db($con, "cinema_toto"); 
 
$result = mysqli_query($con, "SELECT * FROM utilizator where nume = '$_POST[nume]' and parola = '$_POST[parola]'"); 
mysqli_close($con); 

$_SESSION['prima']= "nu" ;

if($row = mysqli_fetch_array($result))
{
$_SESSION['nume']= $_POST[nume] ;
$_SESSION['profil']= $row['profil'] ;

header("Location: index.php");
exit;
}
else
{
header("Location: autentificare.php");
exit;
}



?> 