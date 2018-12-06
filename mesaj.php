<?php


$q=$_GET["q"]; 
if (strlen($q) == 0) { 
	echo " * obligatoriu      "; }
else if (strlen($q) >= 8) { 
	echo "Lungimea parolei este corectă!"; }
else  { 
	echo " Parola este prea scurtă!"; }

	

?>