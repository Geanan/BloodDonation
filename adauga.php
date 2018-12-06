<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html  xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="mystyle.css"/> 
<link rel="stylesheet" type="text/css" href="header.css"/> 
<link rel="icon" type="image/png" href="./images/favicon.png" />
<title> Blood Donation </title> 


<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.1.1.min.js"></script>
<script type="text/javascript" src="validate.js"></script>

<script type="text/javascript">
$(document).ready(function(){
  function isEmpty(str){
    return !str.replace(/^\s+/g, '').length; // boolean (`true` if field is empty)
}
 </script>

 
</head> 
<body> 
<?php include 'header.php';?>
<div class="wrapper">


<div id="adaugaUtilizator" align="center">
<form name="adaugaUtilizatorForm" action="adaugaUtilizator.php"  onsubmit="return validateForm()" method="post">
<table align = 'center'>
	<tr>
		<td>Nume</td>
		<td colspan="2">
			<input type="text" name="nume" id="nume"/> 
		</td>
	</tr>
	<tr>
		<td>Username</td>
		<td colspan="2">
			<input type="text" name="username" id="username"/> 
		</td>
	</tr>
	<tr>
		<td>Parola</td>
		<td>
			<input type="password" name="parola" id="parola" onkeyup="showHint(this.value)"/>
		</td>
		<td>
			<span id="mesaj"></span>
		</td>
	</tr>
	<tr>
		<td>Profil</td>
		<td>
			<select name="profil" id="profil">
				<option value="nimic">Alegeți</option>
				<option value="admin">Administrator</option>
				<option value="donator">Donator</option>
				<option value="doctor">Doctor</option>
				<option value="pct">Personal Centru Transfuzii</option>
			</select>
		</td>
		<td></td>
	</tr>
	<tr>
		<td>Grupa sangvina</td>
		<td>
			<select name="grupaSangvina" id="grupaSangvina">
				<option value="nimic">Alegeți</option>
				<option value="01">0 I</option>
				<option value="a2">A II</option>
				<option value="b3">B III</option>
				<option value="ab4">AB IV</option>
				<option value="null">none</option>
			</select>
		</td>
		<td></td>
	</tr>
	<tr>
	   <td></td>
		<td>
			<p align="center"><input type='submit' name='adauga' value='Adaugă utilizator' /> </p>
		</td>
	</tr>
</table>

</form>
</div>
</div>
<?php include 'footer.php';?>

</body> 
</html> 
