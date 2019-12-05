function excluir(id){

	var confirma = window.confirm("Deseja realmente excluir?");
	if(confirma) {

		window.location = ("estoque.php?delete="+id);
	}


}

function editar (id){

window.location = ("editar.php?id="+id);

}


function pesquisar(){


	var pesquisar = document.getElementById('pesquisar').value;

	if (pesquisar = '') {

		var	xhtpp = new XMLHttpRequest();

		xhtpp.onreadystatechange = function(){

		if (this.readyState == 4 && this.status == 200) {


			document.getElementById('').innerHTML = this.responseText;

		}

		}

		xhtpp.open("GET", "pesquisaestoque.php?ordem="+pesquisar, true);
		xhtpp.send();

	} else {

		
		var	xhtpp = new XMLHttpRequest();

		xhtpp.onreadystatechange = function(){

		if (this.readyState == 4 && this.status == 200) {


			document.getElementById('').innerHTML = this.responseText;

		}

		}

		xhtpp.open("GET", "pesquisaestoque.php?ordem="+pesquisar, true);
		xhtpp.send();


	}
}