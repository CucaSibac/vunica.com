// Funkcija koja izvlaci pretragau i vraca je nazad
/*Tijana Trifunovic, 311/12*/
function toggle(id) {
    var el = document.getElementById(id);
    var img = document.getElementById("arrow");
    var box = el.getAttribute("class");
    if(box == "hide"){
        el.setAttribute("class", "show");
		var q=document.getElementById("pretraga").scrollWidth;
		document.getElementsByClassName("show")[0].style.marginLeft=q+'px';
		//img.setAttribute("src", "../Slike/Pretraga/KlupkoZatvori.png");
		//img.src="../Slike/Pretraga/KlupkoZatvori.png";
        //delay(img, "../Slike/Pretraga/KlupkoZatvori.png", 1000);
    }
    else{
        el.setAttribute("class", "hide");
		document.getElementsByClassName("hide")[0].style.marginLeft='0px';
		//img.setAttribute("src", "../Slike/Pretraga/KlupkoPretraga.png");
		//img.src="../Slike/Pretraga/KlupkoPretraga.png";
        //delay(img, "../Slike/Pretraga/KlupkoPretraga.png", 1000);
    }
}

function delay(elem, src, delayTime){
    window.setTimeout(function() {elem.setAttribute("src", src);}, delayTime);
}

//funkcija racuna koliko ce jezicak da izadje napolje
/*function izracunaj(){
	var q=document.getElementById("pretraga").scrollWidth;
	var q=q+5;
	document.getElementById("box").style.left = '-'+q+'px';
	var elem = document.getElementsByClassName("show");
	if(elem.length==1){
		q=q-5;
		document.getElementsByClassName("show")[0].style.marginLeft=q+'px';
	}
	var elem1 = document.getElementsByClassName("hide");
	if (elem1.length==1){
		document.getElementsByClassName("hide")[0].style.marginLeft='0px';
	}
	//izracunavanje sirine klupka
	var z=parseInt(document.getElementById("pretraga").scrollWidth);
	var x=parseInt(document.getElementById("box").scrollWidth);
	var c=x-z;
	c=c-5;
	document.getElementById("arrow").style.width=c+"px";
}*/
	
//provera da li je cena dobro uneta
function uslovMin() {
	var p=document.getElementById("manji").value;
	var q=document.getElementById("veci").value;
	if(isNaN(p)){
		obavesti("Morate da unesete broj");
		document.getElementById("manji").value="";
	}
	document.getElementById("veci").min=p;
	if (q!=""){
		p1=parseInt(p);
		q1=parseInt(q);
		if (q1<p1){
			document.getElementById("manji").value="";
			obavesti("Vrednost mora da bude manja od vrednosti koju ste uneli kao maksimalnu");
		}
	}
}

function uslovMax(){
	var p=document.getElementById("manji").value;
	var q=document.getElementById("veci").value;
	var element = document.getElementById("veci");
	p1=parseInt(p);
	q1=parseInt(q);
	if(isNaN(q)){
		
		document.getElementById("veci").value="";
		obavesti("Morate da unesete broj");
	}
	if (q1<p1){
		obavesti("Vrednost mora da bude veca od vrednosti koju ste uneli kao minimalnu");
		document.getElementById("veci").value="";
}}