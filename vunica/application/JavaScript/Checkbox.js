// Funkcija koja menja checkbox

function check(id){
	var checkbox = document.getElementById(id);
	var dir = checkbox.src;
	
	if(dir[dir.length -5] == '1'){
		checkbox.src = "../Slike/Checkbox/Checkbox 2.png";
	}
	else{
		checkbox.src = "../Slike/Checkbox/Checkbox 1.png";
	};
}