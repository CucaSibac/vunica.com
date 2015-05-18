/*Tijana Trifunovic, 311/12*/
// Funkcije koje otkrivaju u sakrivaju footer

function show(){
	// Podesavanje tabela footer-a
	document.getElementById("footerGornji").style.visibility= 'visible';
	document.getElementById("footerGornji").style.borderStyle = 'solid';
	document.getElementById("footer").style.zIndex = "200";
	
	document.getElementById("footerDonji").scrollIntoView();
	document.getElementById("footerDonji").style.borderStyle = 'none';
	
	// Podesavanje strelica
	document.getElementById("levaStrelica").style.visibility = 'hidden';
	document.getElementById("desnaStrelica").style.visibility = 'hidden';
	
	
	//z-indeks za footer
	document.getElementById("footerGornji").style.zIndex='200';
}

function hide(){
	// Podesavanje tabela footer-a
	document.getElementById("footerGornji").style.visibility = 'hidden';
	document.getElementById("footerGornji").style.borderStyle = 'none';
	document.getElementById("footer").style.zIndex = "-100";
	
	document.getElementById("footerDonji").style.borderStyle = 'solid';
	
	// Podesavanje strelica
	document.getElementById("levaStrelica").style.visibility = 'visible';
	document.getElementById("desnaStrelica").style.visibility = 'visible';
	
	
	//z-indeks za footer
	document.getElementById("footerGornji").style.zIndex='-100';
}

function izracunaj() {
	var bodi = document.body;
    var html = document.documentElement;
	
	var height = Math.max( bodi.scrollHeight, bodi.offsetHeight, html.clientHeight, html.scrollHeight, html.offsetHeight );
	
	//window.alert(height);
	
	var q=parseInt(document.getElementById("footer").scrollHeight);
	
	//window.alert(q);
					   
	var r= height - 3 * q;
	//window.alert(r);
	
	var x =  document.getElementById("footerGornji").clientHeight;
	
	document.getElementById("footer").style.top = bodi.offsetHeight -x + 'px';
	//document.getElementById("footer").style.bottom = '-923px';
	document.getElementById("footerGornji").style.bottom = '0px';
	
	
	
	//izracunavanje za pretragu PIJACA.. funkcija racuna koliko ce jezicak da izadje napolje
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
	
}