<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head> 
<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=UTF-8" />
<title> Blood Donation </title> 
<link rel="icon" type="image/png" href="./images/favicon.png" />
<link rel="stylesheet" type="text/css" href="header.css"/> 
<link rel="stylesheet" type="text/css" href="mystyle.css"/> 
<link rel="stylesheet" type="text/css" href="search.css"/> 
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"/>

<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js" type="text/javascript"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" type="text/javascript"></script>

</head> 
<style>
 body{
	 background-color:#FFE1F2;
 }
</style>
<body >

<?php include 'header.php';?>

<div class="wrapper">
<table class="centoprocento" cellpadding="0" cellspacing="0">
	<tbody>
		<tr>
			<td colspan="2">
				<font size="6", color="red">Bun venit!</font>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<h2>Conditii de admisibilitate la donarea de sange</h2>
			</td>
		</tr>
		<tr>
			<td>
				Donatorul de sânge este orice cetăţean român cu domiciliul în România sau orice cetăţean al Uniunii Europene care are reşedinţa în România,
				în deplină stare de sănătate, care se supune regulilor prelevării de sânge total şi componente sanguine de origine umană. <br>
				<br>
				Pentru a deveni donator de sange trebuie sa indepliniti următoarele condiţii:<br>
					<ul>
					<li> vârsta cuprinsă în intervalul 18-60 ani</li>
					<li> greutate peste 50Kg</li>
					<li> puls regulat, 60 -100 bătăi/minut.</li>
					<li> tensiune arterială sistolică între 100 şi 180 mmHg</li>
					<li> să nu fii suferit în ultimele 6 luni intervenţii chirurgicale</li> 
					<li> femeile să nu fie: însărcinate, în perioada de lăuzie, în perioada menstruală</li> 
					<li> să nu fi consumat grăsimi sau băuturi alcoolice cu cel puţin 48 de ore înaintea donării</li> 
					<li> sa nu fii sub tratament pentru diferite afectiuni: hipertensiune, boli de inima, boli renale, boli psihice, boli hepatice, boli endocrine</li>
					</ul>
			</td>
			<td>
				<object width="400" height="403" data="https://www.ebihoreanul.ro/modules/news/files/donare-de-sange.jpg"></object>
			</td>
		</tr>
		<!--tr>
			<td colspan="2">
			<?php if(isset($_SESSION['nume']))  {
				echo '<a href="rezervare.php?idFilm=3&amp;idUser=' . $_SESSION['nume'] . '"' . 'class="readon">Rezervă film</a>'; ?>
			<?php } else{ ?>
				<a class="readon"></a>
			<?php } ?>	
			</td>
		</tr-->
	</tbody>
</table> 
<span class="article_separator">&#160;</span>
<table>
	<tbody>
		<tr>
			<td colspan="2">
				<h2>Donatorii nu trebuie să aiba sau sa fi avut urmatoarele boli:</h2>
			</td>
		</tr>
		<tr>
			<td>
				hepatită (de orice tip) 
				TBC 
				sifilis 
				malarie 
				epilepsie si alte boli neurologice
				boli psihice
				bruceloză 
				ulcer 
				diabet zaharat 
				boli de inimă 
				boli de piele: psoriazis, vitiligo 
				miopie forte peste (-) 6 dioptrii
				cancer
			</td>
			<td>
				<object width="256" height="230" data="http://www.ctsbucuresti.ro/content/conditii_admisibilitate/forbidden-icon.jpg"></object>
			</td>	
		</tr>
		<tr>
			<td colspan="2">
			<?php if(isset($_SESSION['nume']))  {
				echo '<a href="rezervare.php?idFilm=4&amp;idUser=' . $_SESSION['nume'] . '"' . 'class="readon">Rezervă film</a>'; ?>
			<?php } else{ ?>
				<a class="readon"></a>
			<?php } ?>	
			</td>
		</tr>
	</tbody>
</table>
<span class="article_separator">&#160;</span>
<table >
	<tbody>
		<tr>
			<td>
				<h2>Înainte de a dona:</h2>
			</td>
		</tr>
		<tr>
			<td>
				Dimineaţa înainte de recoltare puteţi consuma o cană cu ceai sau cafea, un mic dejun puţin consistent, legume, fructe 
				Nu fumati înainte şi după donare cu o oră
				De asemenea veniti la donare , odihnit si nu dupa o noapte pierduta la serviciu sau in fata calculatorului !
			</td>
		</tr>
		<tr>
			<td colspan="2">
			<?php if(isset($_SESSION['nume']))  {
				echo '<a href="rezervare.php?idFilm=5&amp;idUser=' . $_SESSION['nume'] . '"' . 'class="readon">Rezervă film</a>'; ?>
			<?php } else{ ?>
				<a class="readon"></a>
			<?php } ?>	
			</td>
		</tr>
	</tbody>
</table> 

<?php include 'footer.php';?>
</body> 
</html> 