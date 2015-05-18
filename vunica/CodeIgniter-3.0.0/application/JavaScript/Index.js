// Teodora Aleksic, 391/12

/* Ova funckija vrsi pojavljivanje i skrivanje menija */
function dugme(){
	/* Elementi koji ucestvuju */
	var senkaS = document.getElementById("senkaStrana");
	
	var senkaMG = document.getElementById("senkaMeniGornji");	
	var senkaMD = document.getElementById("senkaMeniDonji");
	
	var meniG = document.getElementById("meniGornji");
	var meniD = document.getElementById("meniDonji");
	
	var dugme = document.getElementById("dugme1");
	var slogan = document.getElementById("slogan");
	
	var sakriveni = document.getElementById("sakriveni");
	
	if(senkaS.style.display == 'none'){ 
		/* Otkrivanje menija */		
		senkaS.style.display = "block";				
		
		senkaMD.style.display = "block";
		senkaMG.style.display = "block";
		
		meniG.style.display = "block";
		meniD.style.display = "block";
		
		dugme.style.display = "none";
		slogan.style.display = "none";
		
		sakriveni.className = "sakriveniShow";
	}
	else{ /* Skrivanje menija */	
		senkaS.style.display = "none";
		
		senkaMD.style.display = "none";
		senkaMG.style.display = "none";
		
		meniG.style.display = "none";
		meniD.style.display = "none"
		
		dugme.style.display = "block";
		slogan.style.display = "block";
		
		sakriveni.className = "sakriveniFade";
	}
}

