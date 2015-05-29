function plus(max) {
    vrednost=document.getElementById("kolicina").innerHTML;
   kolicina = parseInt(vrednost);
   maxx = parseInt(max);
   if(kolicina<maxx){
   kolicina++;
   document.getElementById("kolicina").innerHTML = kolicina;
   document.getElementById("KolicinaForma").value = kolicina;
   }
}

function minus() {
    vrednost=document.getElementById("kolicina").innerHTML;
   kolicina = parseInt(vrednost);
   if(kolicina>1) {
       kolicina--;
   document.getElementById("kolicina").innerHTML = kolicina;
   document.getElementById("KolicinaForma").value = kolicina;
   }
}