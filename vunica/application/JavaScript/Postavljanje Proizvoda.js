// JavaScript Document

var kolicina = 1;
var mouse = false;

function preostalo(kap){
	document.getElementById("preostalo").innerHTML = kap - document.getElementById("opisVidea").value.length;
}

function postavljanjeKolicine(operacija){
	if(mouse) {
		if(operacija == '+'){
			kolicina++;
			document.getElementById("kolicina").innerHTML = kolicina;
			setTimeout("postavljanjeKolicine('+')",200);
		}
		else if(operacija == '-' && kolicina>1){
			kolicina--;
			document.getElementById("kolicina").innerHTML = kolicina;
		    setTimeout("postavljanjeKolicine('-')",200);
		}
	}
}

function mousedown(operacija)
{	
  mouse = true;
  postavljanjeKolicine(operacija);
}
function mouseup()
{
  mouse =false;
}

function option(x){
    document.getElementById("opt").value = x;
    //alert(document.getElementById("opt").value);
}