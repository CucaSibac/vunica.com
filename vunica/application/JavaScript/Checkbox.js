// Funkcija koja menja checkbox

function check(id){
	var checkbox = document.getElementById(id);
	var dir = checkbox.src;
	
	if(dir[dir.length -5] == '1'){
		checkbox.src = "http://vunica.azurewebsites.net/vunica/application/Slike/Checkbox/Checkbox 2.png";
	}
	else{
		checkbox.src = "http://vunica.azurewebsites.net/vunica/application/Slike/Checkbox/Checkbox 1.png";
	};
}