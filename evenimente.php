<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html  xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="icon" type="image/png" href="./images/favicon.png" />
<link rel="stylesheet" type="text/css" href="mystyle.css"/> 
<link rel="stylesheet" type="text/css" href="header.css"/> 

<title> Blood Donation </title> 
</head> 
<body> 
<?php
include 'header.php';
?>

<?php
$con = mysqli_connect("localhost", "root", "");
if (!$con) {
    die('Could not connect: ' . mysqli_error());
}

mysqli_select_db($con, "cinema_toto");
$result = mysqli_query($con, "SELECT *  FROM evenimente order by dataAdaugarii desc");
$existData = false;
?>
<div class="wrapper">
<table class='centoprocento' cellpadding='0' cellspacing='0'>
<tbody>
<?php while ($row = mysqli_fetch_array($result)) { ?>
    
    <tr>
		<td><h2> <?php echo $row['titlu']; ?></h2></td>
	</tr>
    <tr>
		<td><?php echo $row['descriere'];?></td>
	</tr>
<?php $existData = true; }?>

</tbody>
</table>
</div>
<?php
if (!$existData) {
    echo "Ne pare rău! Nu există niciun eveniment!";
}
?> 
<?php include 'footer.php';?>
</body>
</html>

