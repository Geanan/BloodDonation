<?php 
session_start(); 
unset($_SESSION['prima']); 
unset($_SESSION['nume']); 
unset($_SESSION['profil']); 

header("Location: index.php");
 
?> 