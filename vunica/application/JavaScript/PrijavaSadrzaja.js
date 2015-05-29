
function prikazi_prijavu_komenbtara(){
    //sakrij_sve_prijave();
    document.getElementById('prazan').style.display = "block";
    document.getElementById('prijavaVideaKomentar').style.visibility = "visible";
}

function sakrij_sve_prijave(){
    sakrij_sve();
    document.getElementById('prazan').style.display = "none";
    document.getElementById('prijavaVideaKomentar').style.visibility = "hidden";
}

function preostaloPKV(kap) {
    document.getElementById("ostatakprikomvid").innerHTML = kap - document.getElementById("prikomvid").value.length;
}
