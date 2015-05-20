// JavaScript Document

function prikazi_prijavu() {
	sakrij_sve();
	document.getElementById('prazan').style.display = "block";
	document.getElementById('prijava').style.visibility = "visible";
}

function prikazi_zaboravljenu_lozinku() {
	sakrij_sve();
	document.getElementById('prazan').style.display = "block";
	document.getElementById('zaboravljenaLozinka').style.visibility = "visible";
}

function prikazi_registraciju() {
	sakrij_sve();
	document.getElementById('prazan').style.display = "block";
	document.getElementById('registracija').style.visibility = "visible";
}

function sakrij_sve(){
	document.getElementById('prazan').style.display = "none";
	document.getElementById('prijava').style.visibility = "hidden";
	document.getElementById('zaboravljenaLozinka').style.visibility = "hidden";
	document.getElementById('registracija').style.visibility = "hidden";
	document.getElementById('obavestenje').style.visibility = "hidden";
}

function prijavi_se(){
	alert("Prijava");
}

function povrati_lozinku(){
	alert("Zaboravljena lozinka");
}



function registruj_se(){
	alert("Registracija");	
}



function obavesti(string){
	document.getElementById('tekstZaObavestenje').innerHTML = string;
	document.getElementById('prazan').style.display = "block";
	document.getElementById('obavestenje').style.visibility = "visible";
}

function ok(){
	document.getElementById('prazan').style.display = "none";
	document.getElementById('obavestenje').style.visibility = "hidden";
}
