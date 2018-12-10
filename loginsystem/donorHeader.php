<?php
	session_start();
?>
<?php
   	 if (isset($_SESSION['u_id'])) {
			echo'<!doctype html>
			<html lang="en">
			  <head>
			   <meta charset="utf-8">

				<meta name="viewport" content="width=device-width, initial-scale=1">
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
				<link href="https://fonts.googleapis.com/css?family=Lato:400,300,700,900" rel="stylesheet" type="text/css">
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

				<link rel="stylesheet" type="text/css" href="index-donor.css">

					
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
				<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
				
				<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

			  <title>
			    
			  </title>


			</head>
			  <body>';



   
   	 	echo ' <nav class="navbar navbar-expand-md navbar-dark text-white sticky-top sticky-top-2">
		    <div class="container-fluid">
			


  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
				<span class="navbar-toggler-icon">
						
					</span>
					
				</button>
				<h1> Status: Donator</h1>



				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav ml-auto">
						
						<li class="nav-item">
							<a class="nav-link" href="donor	.php" style="color: white">Home</a>
						</li>
						
						<li class="nav-item">
							<a class="nav-link" href="analize.php" style="color: white">Ultimele analize</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="chestionar.php" style="color: white">Chestionar</a>
						</li>
						
						<li class="nav-item">
							<a class="nav-link" href="calendar.php" style="color: white">Calendar</a>
						</li>
						<li class="nav-item">

            			<form class="nav-link" action="includes/logout.inc.php" method="POST" >
          			  	
							<button type="submit" name="submit"  class="btn btn-default btn-md" style="margin-top: 15px; color: black; font-family: Lato">
         							  Log out
       						 </button>
       						</form>
          			</li>
	
					</ul>

					<div class="nav-logout">
					
       					</div>

       			
					
				</div>

				
				
						
		</div>
	</nav>';
}else{

echo'<!doctype html>
			<html lang="en">
			  <head>
			   <meta charset="utf-8">

				<meta name="viewport" content="width=device-width, initial-scale=1">
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
				<link href="https://fonts.googleapis.com/css?family=Lato:400,300,700,900" rel="stylesheet" type="text/css">
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

				<link rel="stylesheet" type="text/css" href="index.css">

					
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
				<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
				
				<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

			  <title>
			    
			  </title>


			</head>
			  <body>';


echo ' <nav class="navbar navbar-expand-md navbar-dark text-white sticky-top sticky-top-2">
		    <div class="container-fluid">
			

			<div class="search-container">

   							<form action="/action_page.php" style="margin:auto;max-width:300px" >
  							  <input type="text" placeholder="Search.." name="search" >
  							<button type="submit"><i class="fa fa-search"></i></button>
							</form>

  						</div>

  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
				<span class="navbar-toggler-icon">
						
					</span>
					
				</button>
				



				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav ml-auto">
						
						<li class="nav-item active" id="active">
							<a class="nav-link" href="index.php">Home</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="de_ce.php" style="color: white">De ce sa donezi? </a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#" style="color: white">Cum sa donezi?</a>
						</li>
						
						<li class="nav-item">
							<a class="nav-link" href="#" style="color: white">Unde to donate</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="articles.php" style="color: white">Informatii si Articole</a>
						</li>
						
						
						
					</ul>

				</div>

				
						
		</div>
	</nav>';
}   ?> 


  	  


