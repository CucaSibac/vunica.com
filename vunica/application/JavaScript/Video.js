/*Tijana Trifunovic, 311/12*/
//Ovo je za komentar na stranici videa.

function limitText(limitNum) {
	if (document.getElementById("limitedtextarea").value.length > limitNum) {
		document.getElementById("limitedtextarea").value = document.getElementById("limitedtextarea").value.substring(0, limitNum);
	} else {
		document.getElementById("ostatak").innerHTML = limitNum - document.getElementById("limitedtextarea").value.length;
	}
}

function odustani() {
	document.getElementById("limitedtextarea").value = "";
	document.getElementById("ostatak").innerHTML = "400";
}
//upozorenje ukoliko smo nesto napisali u prostoru za komentar, a komentar nismo objavili pre napustanja stranice

function hasData() {
			var someThing = document.getElementById("limitedtextarea");
			
			if (someThing.value != "") {
				return true;
			}		
			
			return false;
		}
		
		
function postavi() {
		var tekst1 = document.getElementById("limitedtextarea").value;
		if(tekst1 == "" ) {
			obavesti("Jos uvek niste napisali Vas komentar.");
		}
		else {
			document.getElementById("limitedtextarea").value = "";
			var tekst = tekst1 + "<br />" + "<br />";
	document.getElementById("ostatak").innerHTML = "400";
			var tabela = document.getElementById("video");
			var tr = tabela.insertRow(10);
			var td = document.createElement("td");
			var div = document.createElement("div");
			var font1 = document.createElement("font");
			var font2 = document.createElement("font");
			var a1 = document.createElement("a");
			var a2 = document.createElement("a");
			var a3 = document.createElement("a");
			var br1 = document.createElement("br");
			var br2 = document.createElement("br");
			var br3 = document.createElement("br");
			var br4 = document.createElement("br");
			var br5 = document.createElement("br");
			
			font1.appendChild(a1);
			div.appendChild(a3);
			div.appendChild(font1);
			div.appendChild(br1);
			div.appendChild(br2);
			div.appendChild(font2);
			div.appendChild(a2);
			td.appendChild(div);
			td.appendChild(br3);
			td.appendChild(br4);
			tr.appendChild(td);
			
			
			var d = new Date();
			var day = d.getDate();
			var m = d.getMonth() + 1;
			var y = d.getFullYear();
			var h = d.getHours();
			var minut = d.getMinutes();
			var dayy = "";
			var mm = "";
			var hh = "";
			var mmin = "";
			if (parseInt(day, 10)<10)  {
				dayy = "0" + day;
			}
			else {
				dayy = day;
			}
			if (parseInt(m, 10)<10)  {
				mm = "0" + m;
			}
			else {
				mm = m;
			}
			if (parseInt(hh, 10)<10)  {
				hh = "0" + h;
			}
			else {
				hh = h;
			}
			if (parseInt(minut, 10)<10)  {
				mmin = "0" + minut;
			}
			else {
				mmin = minut;
			}
			var date = hh + ":" + mmin + "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" + dayy + "." + mm + "." + y + ".";
			
			a3.setAttribute("class", "komentarDatum");
			a3.innerHTML = date;
			td.setAttribute("colspan", "2");
			td.setAttribute("align", "center");
			div.setAttribute("class", "view view-third");
			div.setAttribute("align", "left");
			font1.setAttribute("class", "tekstObicanAutorKomentar");
			a1.setAttribute("class", "linkovi");
			a1.setAttribute("href", "#");
			a1.innerHTML = "Dragance";
			font2.setAttribute("class", "tekstIskosenTekstKomentar");
			font2.innerHTML = tekst;
			
			a2.setAttribute("class", "prijaviKomentar");
			a2.innerHTML = "PRIJAVI KOMENTAR";
			a2.setAttribute("href", "#");
			
			/*var visina = font2.scrollHeight;
			visina = visina + 20;
			div.style.width = visina*/
			izracunaj();
			
			
		}
}