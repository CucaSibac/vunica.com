
function prikazi_prijavu_komentara(id){
    sakrij_sve_prijave();
    document.getElementById('prazan').style.display = "block";
    document.getElementById('prijavaVideaKomentar').style.visibility = "visible";  
    document.getElementById('pkvID').value = id;
}

function prikazi_prijavu_komentara_proizvod(id){
    sakrij_sve_prijave();
    document.getElementById('prazan').style.display = "block";
    document.getElementById('prijavaProizvodKomentar').style.visibility = "visible";  
    document.getElementById('ppvID').value = id;
}

function prikazi_prijavu_video(){
    sakrij_sve_prijave();
    document.getElementById('prazan').style.display = "block";
    document.getElementById('prijavaVideo').style.visibility = "visible";  
}

function sakrij_sve_prijave(){
    document.getElementById('prazan').style.display = "none";
    document.getElementById('prijavaVideaKomentar').style.visibility = "hidden";
    document.getElementById('prijavaVideo').style.visibility = "hidden";
   // document.getElementById('prijavaProizvodKomentar').style.visibility = "hidden";
}

function preostaloPKV(kap) {
    document.getElementById("ostatakprikomvid").innerHTML = kap - document.getElementById("prikomvid").value.length;
}
