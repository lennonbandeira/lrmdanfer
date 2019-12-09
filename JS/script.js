function excluir(id){

	var confirma = window.confirm("Deseja realmente excluir?");
	if(confirma) {

		window.location = ("estoque.php?delete="+id);
	}


}

function deletar(id){

	var confirma = window.confirm("Deseja excluir ?")

	if (confirma) {

		window.location = ("listclientes.php?delete="+id);
	}
}

function editar (id){

window.location = ("editar.php?id="+id);

}

function editar2(id_cliente) {
	
	window.location = ("editacliente.php?id="+id_cliente);
}


function search(){


	var pes = document.getElementById('pesquisar').value;

		var	xhtpp = new XMLHttpRequest();

		xhtpp.onreadystatechange = function(){

		if (this.readyState == 4 && this.status == 200) {


			document.getElementById('troca').innerHTML = this.responseText;

		}

		}

		xhtpp.open("GET", "pesquisaestoque.php?ordem="+pes, true);
		xhtpp.send();


	}
