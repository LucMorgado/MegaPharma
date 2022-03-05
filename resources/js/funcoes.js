estados();
	function estados(){ 
		const estado = document.getElementById('selEstados');
		estado.disabled = false;

		var xmlhttp = new XMLHttpRequest();
  		xmlhttp.onreadystatechange = function() {
    	if (this.readyState == 4 && this.status == 200) {
 			estado.innerHTML = this.responseText;

    	} };

  		xmlhttp.open("GET", 'farmacias/estados',true);
  		xmlhttp.send();
	}
	function cidades(estado){ 
		const cidade = document.getElementById('selCidade');
		cidade.disabled = false;

		var xmlhttp = new XMLHttpRequest();
  		xmlhttp.onreadystatechange = function() {
    	if (this.readyState == 4 && this.status == 200) {
 			cidade.innerHTML = this.responseText;

    	} };

  		xmlhttp.open("GET", 'farmacias/cidades?estado=' + estado,true);
  		xmlhttp.send();
	}
	function bairros(cidade){ 
		const bairro = document.getElementById('selBairro');
		bairro.disabled = false;

		var xmlhttp = new XMLHttpRequest();
  		xmlhttp.onreadystatechange = function() {
    	if (this.readyState == 4 && this.status == 200) {
 			bairro.innerHTML = this.responseText;

    	} };

  		xmlhttp.open("GET", 'farmacias/bairros?cidade=' + cidade,true);
  		xmlhttp.send();
	}

	function botao(){ 
		const bt = document.getElementById('selBt');
		bt.disabled = false;
	}
	
	function encontrar(){ 
		var xmlhttp = new XMLHttpRequest();
		const result = document.getElementById('selResult');
		const estado = document.getElementById('selEstados');
		const cidade = document.getElementById('selCidade');
		const bairro = document.getElementById('selBairro');
		const bt = document.getElementById('selBt');
		bt.disabled = true;
		cidade.disabled = true;
		bairro.disabled = true;
		cidade.disabled = true;
  		xmlhttp.onreadystatechange = function() {
    	if (this.readyState == 4 && this.status == 200) {
    		result.style = "display:flex";
 			result.innerHTML = this.responseText;

    	} };

  		xmlhttp.open("GET", 'farmacias/encontrar?estado='+ estado.value + '&cidade='+ cidade.value+'&bairro='+bairro.value,true);
  		xmlhttp.send();
	}