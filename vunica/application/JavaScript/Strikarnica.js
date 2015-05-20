//kada se pritisne na opciju datum
/*Tijana Trifunovic, 311/12*/
function f1() {
  var p = document.getElementById("id1").className;
  var q = document.getElementById("id2").className;
  if (q!="btn") {
	  document.getElementById("id2").setAttribute("class", "btn");
	  document.getElementById("i2").innerHTML = "Naziv";  
  }
  if (p=="btn") {
		document.getElementById("id1").setAttribute("class", "active"); 
		document.getElementById("i1").innerHTML = "Najnovije"; 
  }
  else if (p=="active")
  {
		document.getElementById("id1").setAttribute("class", "dblclick"); 
		document.getElementById("i1").innerHTML = "Najstarije";  
  }
  else if(p=="dblclick") {
	  document.getElementById("id1").setAttribute("class", "btn"); 
	  document.getElementById("i1").innerHTML = "Datum";  
  }
}
//kada se pritisne na opciju ime
function f2() {
  var p = document.getElementById("id2").className;
  var q = document.getElementById("id1").className;
  if (q!="btn") {
	  document.getElementById("id1").setAttribute("class", "btn");
	  document.getElementById("i1").innerHTML = "Datum"; 
  }
  if (p=="btn") {
		document.getElementById("id2").setAttribute("class", "active"); 
		document.getElementById("i2").innerHTML = "A - Z"; 
  }
  else if (p=="active")
  {
		document.getElementById("id2").setAttribute("class", "dblclick"); 
		document.getElementById("i2").innerHTML = "Z - A";  
  }
  else if(p=="dblclick") {
	  document.getElementById("id2").setAttribute("class", "btn"); 
	  document.getElementById("i2").innerHTML = "Naziv";  
  }
}
