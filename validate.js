function showHint(str) { 

 if (window.XMLHttpRequest) { 
 // code for IE7+, Firefox, Chrome, Opera, Safari 
 xmlhttp = new XMLHttpRequest(); 
 } 
 else { 
 // code for IE6, IE5 
 xmlhttp = new ActiveXObject("Microsoft.XMLHTTP"); 
 } 
 xmlhttp.onreadystatechange = function() { 
 if (xmlhttp.readyState == 4  && xmlhttp.status == 200) { 
 document.getElementById("mesaj").innerHTML = xmlhttp.responseText; 
 } 
 } 
 xmlhttp.open("GET", "mesaj.php?q="+str, true); 
 xmlhttp.send(); 
} 

function validateForm() {
    var parola = document.getElementById('parola').value;
	if(isEmpty(document.getElementById('nume').value)){
		alert("Vă rugăm să completați numele!");
		return false;
	}
	if(isEmpty(parola)){
		alert("Vă rugăm să completați parola!");
		return false;
	}
	if(parola.length < 8){
		alert("Parola trebuie să aibă minim 8 caractere!");
		return false;
	}
	if(document.getElementById('profil').value === 'nimic'){
		alert("Vă rugăm să selectați profilul!");
		return false;
	}
	return true;

}