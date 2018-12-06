<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html  xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<link rel="stylesheet" type="text/css" href="mystyle.css"/> 
<link rel="stylesheet" type="text/css" href="header.css"/> 
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"/>

<title> Blood Donation </title> 

  <script type="text/javascript"  src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script type="text/javascript"  src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <script type="text/javascript" >
  $(function() {
    $( "#dialog-message" ).dialog({
      buttons: {
        Ok: function() {
          $( this ).dialog( "close" );
        }
      }
    });
  });
  </script>

  

</head> 
<body> 
<?php include 'header.php';?>

<div class="wrapper">


<div>
    <div class="login">
      <h2 align = "center">Autentificare</h2>
      <form method="post" action="verificaAutentif.php">
        <p align = "center"><input type="text" name="nume" id="nume" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue" value="Username" /></p>
        <p align = "center"><input type="password" name="parola" id="parola" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue" value="Parola" /></p>
       
        <p class="submit" align = "center"><input type="submit" name="commit" value="Autentificare"/></p>
      </form>
    </div>
	
	<?php if(!isset($_SESSION['nume']) && isset($_SESSION['prima']) ){ ?>
	<div id="dialog-message" title="Eroare autentificare"  >
		<p> Datele de autentificare nu sunt valide!</p>
    </div>
<?php } ?>   
</div>
</div>
<?php include 'footer.php';?>

</body> 
</html> 
