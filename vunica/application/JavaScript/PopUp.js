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

function prikazi_prijavu_proizvoda() {
	sakrij();
	document.getElementById('prazan').style.display = "block";
	document.getElementById('prijavaProizvoda').style.visibility = "visible";
}

function prikazi_odluku(){
	sakrij();
	document.getElementById('prazan').style.display = "block";
	document.getElementById('odluka').style.visibility = "visible";
}

function sakrij_sve(){
	document.getElementById('prazan').style.display = "none";
	document.getElementById('prijava').style.visibility = "hidden";
	document.getElementById('zaboravljenaLozinka').style.visibility = "hidden";
	document.getElementById('registracija').style.visibility = "hidden";
	document.getElementById('obavestenje').style.visibility = "hidden";
        
}

function sakrij() {
	document.getElementById('prazan').style.display = "none";
	document.getElementById('prijavaProizvoda').style.visibility = "hidden";
        document.getElementById('odluka').style.visibility = "hidden"; 
}


function obavi_kupovinu(){
	alert("Čestitamo! Uspešno ste obavili kupovinu.");
}

function obrisan(){
	alert("Vaš profil je uspešno obrisan. Nažalost više niste naš korisnik.");
}

function prijavi_proizvod(){
	alert("Proizvod je uspešno prijavljen!");
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