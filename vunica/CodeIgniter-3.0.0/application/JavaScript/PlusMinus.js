
function process(v){
    var value = parseInt(document.getElementById('v').value);
    value+=v;
	if(value < 0) value=0;
    document.getElementById('v').value = value;
}
