<?php
 session_start(); 
?>

<div class="wrapper", style="background-color:lightblue">
	<nav>
		<ul>
			<li><a href="index.php" >Acasă</a></li>
			<li><a href="evenimente.php">Evenimente</a></li>
			
			<?php if(isset($_SESSION['nume']) && $_SESSION['profil'] == 'admin' )  {?>
			<li><a href="adauga.php">Adaugă</a></li>
			<?php } ?>	
			
			<?php if(isset($_SESSION['nume']) && $_SESSION['profil'] == 'cinefil' )  {?>
			<li><a href="myCinema.php">Cinemaul meu</a></li>
			<?php } ?>	
			
			<?php if(!isset($_SESSION['nume']))  {?>
			<li class="liDreapta"><a href="autentificare.php" >Autentificare</a></li>
			<?php } ?>	
						
			<?php if(isset($_SESSION['nume'])){ ?>
			<li class="liDreapta"><a href="iesireCont.php" >Ieșire</a></li>
			<?php echo '<span class="liDreapta">Bună, '.$_SESSION['nume'].'!&nbsp;&nbsp;</span>'; } ?>
		</ul>
	</nav>
</div>			
