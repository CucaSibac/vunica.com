// JavaScript Document

var kolicina = 1;
var mouse = false;
var brzina = 1000;

function preostalo(kap) {
    document.getElementById("preostalo").innerHTML = kap - document.getElementById("opisVidea").value.length;
}

function postavljanjeKolicine(operacija) {
    if (mouse) {
        kolicina = document.getElementById("ProKol").value;        
        if (operacija == '+' && kolicina <100) {
            kolicina++;
            document.getElementById("kolicina").innerHTML = kolicina;
            document.getElementById("ProKol").value = kolicina;
            if (brzina > 100)
                brzina -= 300;
            setTimeout("postavljanjeKolicine('+')", brzina);
        }
        else if (operacija == '-' && kolicina > 1) {
            kolicina--;
            document.getElementById("kolicina").innerHTML = kolicina;
            document.getElementById("ProKol").value = kolicina;
            if (brzina > 100)
                brzina -= 300;
            setTimeout("postavljanjeKolicine('-')", brzina);
        }
        if(kolicina == 100) obavesti('Cveticu dokle vise');
    }
}
function mousedown(operacija)
{
    mouse = true;
    postavljanjeKolicine(operacija);
}
function mouseup()
{
    mouse = false;
    brzina = 1000;
}

function option(x) {
    document.getElementById("opt").value = x;
    //alert(document.getElementById("opt").value);
}